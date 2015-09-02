<?php
namespace Zeflasher\OAuth\Client;

/**
 * Created by IntelliJ IDEA.
 * User: zeflasher
 * Date: 7/03/13
 * Time: 10:49 AM
 * To change this template use File | Settings | File Templates.
 */

use \Zeflasher\OAuth\OAuthUtil;

class OAuthClient extends \Zeflasher\OAuth\Provider\OAuthRequest
{
    protected $_signature_method;
    protected $_consumer_key;
    protected $_consumer_secret;
    protected $_token_key;
    protected $_token_secret;

    // default curl connection timeout set to 30 seconds
    protected $_connection_timeout = 30;

    // default curl script timeout set to 60 seconds
    protected $_timeout = 60;

    /**
     * @param string $signatureMethod
     * @param string $consumer_key
     * @param array|null $consumer_secret
     * @param null $token_key
     * @param null $token_secret
     */
    function __construct($signatureMethod, $consumer_key, $consumer_secret, $token_key = null, $token_secret = null)
    {
        $this->_signature_method = $signatureMethod;
        $this->_consumer_key = $consumer_key;
        $this->_consumer_secret = $consumer_secret;
        $this->_token_key = $token_key;
        $this->_token_secret = $token_secret;
        $this->_parameters = array();
    }

    /*   protected $files;

         /**
          * Construct a new request signer.
          * Perform the request with the sendRequest() method below.
          *
          * A request can have either one file or a body, not both.
          *
          * The files array consists of arrays:
          * - file       the filename/path containing the data for the POST/PUT
          * - data       data for the file, omit when you have a file
          * - mime       content-type of the file
          * - filename   filename for content disposition header
          *
          * When OAuth (and PHP) can support multipart/form-data then we can handle more than one file.
          *
          * @param string $url
          * @param string $method
          * @param null $params
          * @param null $body
          * @param null $files
          * @throws OAuthException2
          */
    /*    function __construct ( $url, $method = 'GET', $params = null, $body = null, $files = null )
        {
            parent::__construct($url, $method, $params, $body);

            // When there are files, then we can construct a POST with a single file
            if (!empty($files))
            {
                $empty = true;
                foreach ($files as $f)
                {
                    $empty = $empty && empty($f['file']) && !isset($f['data']);
                }

                if (!$empty)
                {
                    if (!is_null($body))
                    {
                        throw new \Zeflasher\OAuth\OAuthException('When sending files, you can\'t send a body as well.');
                    }
                    $this->files = $files;
                }
            }
        }*/

    public function createOAuthParameters()
    {
        $defaults = array
        (
            "oauth_version" => \Zeflasher\OAuth\Provider\OAuthRequest::$version,
            "oauth_nonce" => \Zeflasher\OAuth\OAuthUtil::generate_nonce(),
            "oauth_timestamp" => \Zeflasher\OAuth\OAuthUtil::generate_timestamp(),
            "oauth_consumer_key" => $this->_consumer_key
        );

        if ($this->_token_key)
        {
            $defaults['oauth_token'] = $this->_token_key;
        }

        $this->_parameters = array_merge($defaults, $this->_parameters);
    }

    /**
     * The return object is as follow
     * {
     * string header The response header
     * string body The response body
     * int http_code The Http response code
     * string last_url The last url called
     * }
     * @param string $url All the query string will be removed. Passed them in the param array
     * @param string $method GET, POST, PUT, DELETE, and any custom ones you would provide
     * @param array $parameters Array in the following format ['key' => value], if set will override the existing ones set using set_parameter
     * @param string $returnType Format we you are expecting the response (not implemented yet)
     * @param string $callbackUrl The callbackurl (optional)
     * @param string $verifier Any verifier (optional)
     * @param string $proxy Proxy to use
     * @return \stdClass
     */
    public function request($url, $method = 'GET', Array $parameters = null, $returnType = 'json', $callbackUrl = null, $verifier = null, $proxy = null)
    {
        $this->_http_url = $url;
        $this->_http_method = $method;
        if( !is_null($parameters) )
        {
            $this->_parameters = $parameters;
        }

        if (isset ($callbackUrl))
        {
            $this->_parameters['oauth_callback'] = $callbackUrl;
        }

        if (isset ($verifier))
        {
            $this->_parameters['oauth_verifier'] = $verifier;
        }

        //  add the OAuth parameters
        $this->createOAuthParameters();
        $this->sign_request($this->_signature_method, $this->_consumer_secret, $this->_token_secret);

        //  create the curl options
        $curl_options = array
        (
            CURLOPT_URL => \Zeflasher\OAuth\OAuthUtil::get_normalized_http_url($this->_http_url),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false
        );

        if ($proxy)
        {
            $curl_options[CURLOPT_PROXY] = $proxy;
        }

        switch ($method)
        {
            //  get
            case \Zeflasher\OAuth\OAuthConstants::OAUTH_HTTP_METHOD_GET:
                $curl_options[CURLOPT_HTTPGET] = 1;
                $curl_options[CURLOPT_URL] = $this->to_url();
                break;

            //  set the post parameters if post method
            case \Zeflasher\OAuth\OAuthConstants::OAUTH_HTTP_METHOD_POST:
                $curl_options[CURLOPT_POST] = 1;
                $curl_options[CURLOPT_POSTFIELDS] = $this->get_query_parameters();
                break;

            //  set the put parameters if put method
            case \Zeflasher\OAuth\OAuthConstants::OAUTH_HTTP_METHOD_PUT:
                $curl_options[CURLOPT_CUSTOMREQUEST] = 'PUT';
                $curl_options[CURLOPT_POSTFIELDS] = $this->get_query_parameters();
                break;

            //  set the put parameters if put method
            case \Zeflasher\OAuth\OAuthConstants::OAUTH_HTTP_METHOD_DELETE:
                $curl_options[CURLOPT_CUSTOMREQUEST] = 'DELETE';
                $curl_options[CURLOPT_POSTFIELDS] = $this->get_query_parameters();
                break;
        }

        //  Add the headers
        $curl_options[CURLOPT_HTTPHEADER] = array($this->to_header());
        $curl_options[CURLOPT_HEADER] = true;
        $curl_options[CURLOPT_FOLLOWLOCATION] = true;
        $curl_options[CURLOPT_TIMEOUT] = $this->_timeout;
        $curl_options[CURLOPT_CONNECTTIMEOUT] = $this->_connection_timeout;


        // make CURL request
        $curl = curl_init();
        curl_setopt_array($curl, $curl_options);
        $response = curl_exec($curl);
        $error = curl_error($curl);
        $result = new \stdClass();

        if ($error != "")
        {
            $result->errors = array();
            $error = new \stdClass();
            $error->message = $error;
            $error->message_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            array_push($result->errors, $error);
            return $result;
        }

        $header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
        $result->header = substr($response, 0, $header_size);
        $result->body = substr($response, $header_size);
        $result->http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $result->last_url = curl_getinfo($curl, CURLINFO_EFFECTIVE_URL);

        curl_close($curl);
        return $result;
    }

    /**
     * The body request parameters (excluded oauth), sorted and concatenated into a normalized string.
     * @return string
     */
    public function get_query_parameters()
    {
        // Grab all parameters
        $params = array_merge($this->_parameters);

        foreach ($params as $key => $image)
        {
            if (preg_match("/^oauth_.*/", $key, $matches))
            {
                unset($params[$key]);
            }
        }

        return \Zeflasher\OAuth\OAuthUtil::build_http_query($params);
    }

    /**
     * @param int $connection_timeout
     */
    public function setConnectionTimeout($connection_timeout = 30)
    {
        $this->_connection_timeout = $connection_timeout;
    }

    /**
     * @param int $timeout
     */
    public function setTimeout($timeout = 60)
    {
        $this->_timeout = $timeout;
    }

    /**/
}
