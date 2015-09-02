<?php
namespace Zeflasher\OAuth\Provider;
/**
 * User: zeflasher
 * Date: 24/06/12
 * Time: 10:18 AM
 */
use Zeflasher\OAuth\OAuthUtil;

class OAuthRequest
{
    /**
     * Parameters set for this request
     * @protected
     * @var array|null
     */
    protected $_parameters;

    /**
     * HTTP Method used by this request
     * @protected
     * @var string
     */
    protected $_http_method;

    /**
     * The URL this request has been/will be sent to
     * @var string
     */
    protected $_http_url;

//  for debug purposes
    /**
     * The signature base string
     * @var string
     */
    public $base_string;

    /**
     * The OAuth
     * @var string
     */
    public static $version = '1.0';

    /**
     * @var string
     */
    public static $POST_INPUT = 'php://input';

    /**
     * @param string $http_method the http method to use
     * @param string $http_url the url
     * @param array|null $parameters the parameters
     */
    public function __construct($http_method, $http_url, $parameters = array())
    {
        $parameters = ($parameters) ? $parameters : array();
        $parameters = array_merge( OAuthUtil::parse_parameters(parse_url($http_url, PHP_URL_QUERY)), $parameters);
        $this->_parameters = $parameters;
        $this->_http_method = $http_method;
        $this->_http_url = $http_url;
    }


    /**
     * attempt to build up a request from what was passed to the server
     * @static
     * @param string|null $http_method
     * @param string|null $http_url
     * @param array|null $parameters
     * @return \Zeflasher\OAuth\Provider\OAuthRequest
     */
    public static function build($http_method = null, $http_url = null, Array $parameters = null)
    {
        if (is_null($http_url))
        {
            if ( !is_null($_SERVER) && isset($_SERVER['SERVER_NAME']) && isset($_SERVER['SERVER_PORT']) && isset($_SERVER['REQUEST_URI']) )
            {
                $scheme = (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != "on") ? 'http' : 'https';
                $http_url = $scheme . '://' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . $_SERVER['REQUEST_URI'];
            }
        }

        if (is_null($http_method))
        {
            if( !is_null($_SERVER) && isset($_SERVER['SERVER_NAME']) )
            {
                $http_method = $_SERVER['REQUEST_METHOD'];
            }
        }

        // We weren't handed any parameters, so let's find the ones relevant to
        // this request.
        // If you run XML-RPC or similar you should use this to provide your own
        // parsed parameter-list
        if (!$parameters)
        {
            // Find request headers
            $request_headers = \Zeflasher\OAuth\OAuthUtil::get_headers();

            // Parse the query-string to find GET parameters
            if( !is_null($_SERVER) && isset($_SERVER['QUERY_STRING']) )
            {
                $parameters = \Zeflasher\OAuth\OAuthUtil::parse_parameters($_SERVER['QUERY_STRING']);
            }

            // It's a POST request of the proper content-type, so parse POST
            // parameters and add those overriding any duplicates from GET
            if (($http_method == "POST" || $http_method == "PUT" || $http_method == "DELETE" )
                &&  isset($request_headers['Content-Type'])
                && strstr($request_headers['Content-Type'],
                    'application/x-www-form-urlencoded')
            )
            {
                $post_data = \Zeflasher\OAuth\OAuthUtil::parse_parameters
                (
                    file_get_contents(self::$POST_INPUT)
                );

                $parameters = array_merge($parameters, $post_data);

                if ($http_method == "PUT")
                {
                    $post_data = \Zeflasher\OAuth\OAuthUtil::parse_query_string($post_data);

                    global $_PUT;
                    $_PUT = array_merge(array(), $post_data);
                }
            }

            // We have a Authorization-header with OAuth data.
            // Parse the header and add those overriding any duplicates from GET or POST
            if (isset($request_headers['Authorization']) && substr($request_headers['Authorization'], 0, 6) == 'OAuth ')
            {
                $header_parameters = \Zeflasher\OAuth\OAuthUtil::split_header
                (
                    $request_headers['Authorization']
                );
                $parameters = array_merge($parameters, $header_parameters);
            }

        }

        return new \Zeflasher\OAuth\Provider\OAuthRequest($http_method, $http_url, $parameters);
    }

    /**
     * A helper function to set up the request from consumer and token
     * @static
     * @param string $consumer_key
     * @param string $token_key
     * @param string $http_method
     * @param string $http_url
     * @param array|null $parameters
     * @return \Zeflasher\OAuth\Provider\OAuthRequest
     */
    public static function build_from_consumer_and_token($consumer_key, $token_key, $http_method, $http_url, $parameters=NULL)
    {
        $parameters = ($parameters) ?  $parameters : array();

        $defaults = array("oauth_version" => \Zeflasher\OAuth\Provider\OAuthRequest::$version,
            "oauth_nonce" => \Zeflasher\OAuth\OAuthUtil::generate_nonce(),
            "oauth_timestamp" => \Zeflasher\OAuth\OAuthUtil::generate_timestamp(),
            "oauth_consumer_key" => $consumer_key);

        if ($token_key)
        {
            $defaults['oauth_token'] = $token_key->key;
        }

        $parameters = array_merge($defaults, $parameters);

        return new \Zeflasher\OAuth\Provider\OAuthRequest($http_method, $http_url, $parameters);
    }

    /**
     * Add parameters to the request
     * @param string $name
     * @param string $value
     * @param bool $allow_duplicates
     */
    public function set_parameter($name, $value, $allow_duplicates = true)
    {
        if ($allow_duplicates && isset($this->_parameters[$name]))
        {
        //  We have already added parameter(s) with this name, so add to the list
            if (is_scalar($this->_parameters[$name]))
            {
            //  This is the first duplicate, so transform scalar (string)
            //  into an array so we can add the duplicates
                $this->_parameters[$name] = array($this->_parameters[$name]);
            }
            $this->_parameters[$name][] = $value;
        }
        else
        {
            $this->_parameters[$name] = $value;
        }
    }

    /**
     * Return the parameter value
     * @param string $name
     * @return string|null
     */
    public function get_parameter($name)
    {
        return isset($this->_parameters[$name]) ? $this->_parameters[$name] : null;
    }

    /**
     * Returns all the parameters
     * @return array|null
     */
    public function get_parameters()
    {
        return array_merge($this->_parameters);
    }

    public function unset_parameter($name)
    {
        unset($this->_parameters[$name]);
    }

    /**
     * The request parameters, sorted and concatenated into a normalized string.
     * @return string
     */
    public function get_signable_parameters()
    {
        // Grab all parameters
        $params = array_merge($this->_parameters);

    //  Remove oauth_signature if present
    //  Ref: Spec: 9.1.1 ("The oauth_signature parameter MUST be excluded.")
        if (isset($params[\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_SIGNATURE]))
        {
            unset($params[\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_SIGNATURE]);
        }

        return \Zeflasher\OAuth\OAuthUtil::build_http_query($params);
    }

    /**
     * Returns the base string of this request
     *
     * The base string defined as the method, the url
     * and the parameters (normalized), each urlencoded
     * and the concated with &.
     */
    public function get_signature_base_string()
    {
        $parts = array(
            \Zeflasher\OAuth\OAuthUtil::get_normalized_http_method($this->_http_method),
            \Zeflasher\OAuth\OAuthUtil::get_normalized_http_url($this->_http_url),
            $this->get_signable_parameters()
        );

        $parts = \Zeflasher\OAuth\OAuthUtil::urlencode_rfc3986($parts);

        return implode('&', $parts);
    }

    /**
     * builds a url usable for a GET request
     */
    public function to_url()
    {
        $post_data = $this->to_post_data();
        $out = \Zeflasher\OAuth\OAuthUtil::get_normalized_http_url($this->_http_url);
        if ($post_data)
        {
            $out .= '?'.$post_data;
        }
        return $out;
    }

    /**
     * builds the data one would send in a POST request
     */
    public function to_post_data()
    {
        return \Zeflasher\OAuth\OAuthUtil::build_http_query($this->_parameters);
    }

    /**
     * Builds the Authorization header
     *
     * @param string|null $realm
     * @return string
     * @throws \Zeflasher\OAuth\OAuthException
     */
    public function to_header($realm=null)
    {
        $first = true;
        if($realm)
        {
            $out = 'Authorization: OAuth realm="' . \Zeflasher\OAuth\OAuthUtil::urlencode_rfc3986($realm) . '"';
            $first = false;
        }
        else
        {
            $out = 'Authorization: OAuth';
        }

        foreach ($this->_parameters as $k => $v)
        {
            if (substr($k, 0, 5) != "oauth")
            {
                continue;
            }
            if (is_array($v))
            {
                throw new \Zeflasher\OAuth\OAuthException('Arrays not supported in headers');
            }
            $out .= ($first) ? ' ' : ',';
            $out .= \Zeflasher\OAuth\OAuthUtil::urlencode_rfc3986($k) . '="'
                . \Zeflasher\OAuth\OAuthUtil::urlencode_rfc3986($v)
                . '"';
            $first = false;
        }
        return $out;
    }

    public function __toString()
    {
        return $this->to_url();
    }


    /**
     * @param \Zeflasher\OAuth\SignatureMethods\OAuthSignatureMethod $signature_method
     * @param string $consumer_secret
     * @param string $token_secret
     */
    public function sign_request($signature_method, $consumer_secret, $token_secret)
    {
        $this->set_parameter(
            \Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_SIGNATURE_METHOD,
            $signature_method->get_name(),
            false
        );
        $signature = $this->build_signature($signature_method, $consumer_secret, $token_secret);
        $this->set_parameter(\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_SIGNATURE, $signature, false);
    }

    /**
     * @param \Zeflasher\OAuth\SignatureMethods\OAuthSignatureMethod $signature_method
     * @param string $consumer_secret
     * @param string $token_secret
     * @return string
     */
    public function build_signature($signature_method, $consumer_secret, $token_secret)
    {
        $signature = $signature_method->build_signature($this, $consumer_secret, $token_secret);
        return $signature;
    }
}
