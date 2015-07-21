<?php
namespace Zeflasher\OAuth\Provider;
/**
 * User: zeflasher
 * Date: 25/06/12
 * Time: 7:47 PM
 */
class OAuthProvider
{
    /**
     * The signature methods handle by this provider
     * @protected
     * @var array
     */
    protected $_signature_methods = array();

    /**
     * If set to true bypass token check
     * @protected
     * @var bool
     */
    protected $_is_request_token = false;

    /**
     * OAuth version used by this provider
     * @protected
     * @var string
     */
    protected $_version = '1.0';

    /**
     * Holds the required parameters needed to process the request
     * @protected
     * @var array
     */
    protected  $_required_parameters = array ();

    /**
     * The callback method used to check the consumer
     * @private
     * @var callback
     */
    private $__consumer_callback;

    /**
     * The callback method used to check the token
     * @private
     * @var callback
     */
    private $__token_callback;

    /**
     * The callback method used to check the timestamp
     * @private
     * @var callback
     */
    private $__timestamp_callback;

    /**
     * The callback method used to check the nonce
     * @private
     * @var callback
     */
    private $__nonce_callback;

    /**
     * Are we using xAuth flow
     * @var bool
     */
    private $__is_xauth = false;


    /**
     * the consumer key
     * @var string
     */
    public $consumer_key;

    /**
     * the consumer secret
     * @var string
     */
    public $consumer_secret;

    /**
     * the token key
     * @var string
     */
    public $token_key;

    /**
     * the token secret
     * @var string
     */
    public $token_secret;

    /**
     * the callback url once authentication done
     * @var string
     */
    public $callback_url;

    /**
     * The request object build from the headers/params
     * @var \Zeflasher\OAuth\Provider\OAuthRequest;
     */
    public $request;


    /**
     * Generates a random string
     * @static
     * @param int $length The desired token length, in terms of bytes.
     * @param bool $strong Setting to TRUE means /dev/random will be used for entropy,
     * as otherwise the non-blocking /dev/urandom is used. This parameter is ignored on Windows.
     * @return string
     */
    public static function generate_token($length, $strong)
    {
        if( @is_readable('/dev/urandom') )
        {
            $f=fopen( '/dev/urandom', 'r' );
            $urandom=fread( $f, $length );
            fclose( $f );
        }

        $return='';
        for( $i=0;$i<$length;++$i )
        {
            if( !isset($urandom) )
            {
                if( $i%2==0 )
                {
                    mt_srand(time()%2147 * 1000000 + (double)microtime() * 1000000);
                }
                $rand=48+mt_rand()%64;
            }
            else
            {
                $rand=48+ord($urandom[$i])%64;
            }

            if ($rand>57) $rand+=7;
            if ($rand>90) $rand+=6;
            if ($rand==123) $rand=45;
            if ($rand==124) $rand=46;

            $return.=chr($rand);
        }
        return $return;
    }

    /**
     * Create the provider and sets the following parameters has mandatory
     * * oauth_consumer_key
     * * oauth_token
     * * oauth_signature_method
     * * oauth_signature
     * * oauth_timestamp
     * * oauth_nonce
     * * oauth_verifier
     */
    public function __construct()
    {
    //  construct the query
        $this->request = \Zeflasher\OAuth\Provider\OAuthRequest::build();

    //  by default we are using oauth
        $this->set_to_oauth_flow();
    }

    /**
     * Add a parameter to the list of required parameters.
     * An error will be thrown if the OAuthRequest does not have all of those.
     * By default the required parameters are:
     * - \Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_CONSUMER_KEY
     * - \Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_TOKEN
     * - \Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_SIGNATURE_METHOD
     * - \Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_SIGNATURE
     * - \Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_TIMESTAMP
     * - \Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_NONCE
     * - \Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_VERIFIER
     * needed for a normal call passing an access token
     * @param string $parameter_name
     */
    public function add_required_parameter($parameter_name)
    {
        $this->_required_parameters[$parameter_name] = 1;
    }

    /**
     * Remove parameters from the required parameters list.
     * Use with caution.
     * @param string $parameter_name
     */
    public function remove_required_parameter($parameter_name)
    {
        unset($this->_required_parameters[$parameter_name]);
    }

    /**
     * Set the parameter as required.
     * If required parameters are not part of the \Zeflasher\OAuth\OAuthRequest object
     * the OAUth check will fail and will throw an error
     * @param string $parameter_name
     * @return bool
     */
    public function is_required_parameter($parameter_name)
    {
        if (isset( $this->_required_parameters[$parameter_name]) )
        {
            return $this->_required_parameters[$parameter_name] == 1;
        }

        return false;
    }


    /**
     * Add a signature method to this provider
     * @param \Zeflasher\OAuth\SignatureMethods\OAuthSignatureMethod $signature_method
     */
    public function add_signature_method($signature_method)
    {
        $this->_signature_methods[$signature_method->get_name()] = $signature_method;
    }

    /**
     * Remove a signature method from this provider
     * @param \Zeflasher\OAuth\SignatureMethods\OAuthSignatureMethod $signature_method
     */
    public function remove_signature_method($signature_method)
    {
        unset( $this->_signature_methods[$signature_method->get_name()] );
    }

    /**
     * Set the is_request_token flag
     * This will bypass the token check (token_handler won't be call)
     * @param $bypass_token_check
     */
    public function is_request_token( $bypass_token_check )
    {
        $this->_is_request_token = $bypass_token_check;
    }

    /**
     * Call this function before the check_oauth_request when you want to grant a request token
     * Basically it disabled the token_handler check and force the oauth_callback parameter
     * This unset the following required parameters:
     * * \Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_TOKEN
     * * \Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_VERIFIER
     * and set the following ones
     * * \Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_CALLBACK
     * It also sets is_request_token to true, i.e token_handler won't be called
     */
    public function set_request_token_query()
    {
        $this->is_request_token(true);

        $this->remove_required_parameter(\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_TOKEN);
        $this->remove_required_parameter(\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_VERIFIER);

        $this->add_required_parameter(\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_CALLBACK);
    }

    /**
     * Set the provider to accept OAuth query for access token
     * This unset the following required parameters:
     * * \Zeflasher\OAuth\OAuthConstants::X_AUTH_USERNAME
     * * \Zeflasher\OAuth\OAuthConstants::X_AUTH_PASSWORD
     * * \Zeflasher\OAuth\OAuthConstants::X_AUTH_MODE
     * and set the following ones
     * * \Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_CONSUMER_KEY
     * * \Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_TOKEN
     * * \Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_SIGNATURE_METHOD
     * * \Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_SIGNATURE
     * * \Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_TIMESTAMP
     * * \Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_NONCE
     * * \Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_VERIFIER
     */
    public function set_to_oauth_flow()
    {
        $this->remove_required_parameter(\Zeflasher\OAuth\OAuthConstants::X_AUTH_USERNAME);
        $this->remove_required_parameter(\Zeflasher\OAuth\OAuthConstants::X_AUTH_PASSWORD);
        $this->remove_required_parameter(\Zeflasher\OAuth\OAuthConstants::X_AUTH_MODE);

        $this->add_required_parameter(\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_CONSUMER_KEY);
        $this->add_required_parameter(\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_TOKEN);
        $this->add_required_parameter(\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_SIGNATURE_METHOD);
        $this->add_required_parameter(\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_SIGNATURE);
        $this->add_required_parameter(\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_TIMESTAMP);
        $this->add_required_parameter(\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_NONCE);

        $this->__is_xauth = false;
    }

    /**
     * Set the provider to accept xAuth query for access token
     * This unset the following required parameters:
     * * \Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_TOKEN
     * * \Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_VERIFIER
     * * \Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_CALLBACK
     * and set the following ones
     * * \Zeflasher\OAuth\OAuthConstants::X_AUTH_USERNAME
     * * \Zeflasher\OAuth\OAuthConstants::X_AUTH_PASSWORD
     * * \Zeflasher\OAuth\OAuthConstants::X_AUTH_MODE
     * *
     * * \Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_CONSUMER_KEY
     * * \Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_SIGNATURE_METHOD
     * * \Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_SIGNATURE
     * * \Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_TIMESTAMP
     * * \Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_NONCE
     */
    public function set_to_xauth_flow()
    {
        $this->is_request_token(true);

        $this->remove_required_parameter(\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_TOKEN);
        $this->remove_required_parameter(\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_VERIFIER);
        $this->remove_required_parameter(\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_CALLBACK);

        $this->add_required_parameter(\Zeflasher\OAuth\OAuthConstants::X_AUTH_USERNAME);
        $this->add_required_parameter(\Zeflasher\OAuth\OAuthConstants::X_AUTH_PASSWORD);
        $this->add_required_parameter(\Zeflasher\OAuth\OAuthConstants::X_AUTH_MODE);

        $this->add_required_parameter(\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_CONSUMER_KEY);
        $this->add_required_parameter(\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_SIGNATURE_METHOD);
        $this->add_required_parameter(\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_SIGNATURE);
        $this->add_required_parameter(\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_TIMESTAMP);
        $this->add_required_parameter(\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_NONCE);

        $this->__is_xauth = true;

    }

    /**
     * Call the consumer_handler callback
     * and throw an exception if result of the callback is not \Zeflasher\OAuth\OAuthConstants::OAUTH_OK
     * Your callback method __HAS TO__ set $provider->consumer_secret to the right value or the signature will fail
     * @throws \Zeflasher\OAuth\OAuthException
     */
    public function call_consumer_handler()
    {
        if( is_callable( $this->__consumer_callback ) )
        {
            $code = call_user_func( $this->__consumer_callback, $this );
            if( $code !== \Zeflasher\OAuth\OAuthConstants::OAUTH_OK )
            {
                throw new \Zeflasher\OAuth\OAuthException('', $code);
            }
        }
        else
        {
            throw new \Zeflasher\OAuth\OAuthException('The consumer callback is not properly set');
        }
    }

    /**
     * Call the token_handler callback
     * and throw an exception if result of the callback is not \Zeflasher\OAuth\OAuthConstants::OAUTH_OK
     * @throws \Zeflasher\OAuth\OAuthException
     */
    public function call_token_handler()
    {
        if( is_callable( $this->__token_callback ) )
        {
            $code = call_user_func( $this->__token_callback, $this );
            if( $code !== \Zeflasher\OAuth\OAuthConstants::OAUTH_OK )
            {
                throw new \Zeflasher\OAuth\OAuthException('', $code);
            }
        }
        else
        {
            throw new \Zeflasher\OAuth\OAuthException('The toekn callback is not properly set');
        }
    }

    /**
     * Call the token_handler callback
     * and throw an exception if result of the callback is not \Zeflasher\OAuth\OAuthConstants::OAUTH_OK
     * @throws \Zeflasher\OAuth\OAuthException
     */
    public function call_timestamp_handler()
    {
        if( is_callable( $this->__timestamp_callback ) )
        {
            $code = call_user_func( $this->__timestamp_callback, $this );
            if( $code !== \Zeflasher\OAuth\OAuthConstants::OAUTH_OK )
            {
                throw new \Zeflasher\OAuth\OAuthException('', $code);
            }
        }
        else
        {
            throw new \Zeflasher\OAuth\OAuthException('The timestamp callback is not properly set');
        }
    }

    /**
     * Call the token_handler callback
     * and throw an exception if result of the callback is not \Zeflasher\OAuth\OAuthConstants::OAUTH_OK
     * @throws \Zeflasher\OAuth\OAuthException
     */
    public function call_nonce_handler()
    {
        if( is_callable( $this->__nonce_callback ) )
        {
            $code = call_user_func( $this->__nonce_callback, $this );
            if( $code !== \Zeflasher\OAuth\OAuthConstants::OAUTH_OK )
            {
                throw new \Zeflasher\OAuth\OAuthException('', $code);
            }

        }
        else
        {
            throw new \Zeflasher\OAuth\OAuthException('The nonce callback is not properly set', 0);
        }
    }

    /**
     * Set the consumer callback
     * @param callback $callback_function
     */
    public function consumer_handler( $callback_function )
    {
        $this->__consumer_callback = $callback_function;
    }

    /**
     * Set the token callback
     * @param callback $callback_function
     */
    public function token_handler( $callback_function )
    {
        $this->__token_callback = $callback_function;
    }

    /**
     * Set the timestamp callback
     * @param callback $callback_function
     */
    public function timestamp_handler( $callback_function )
    {
        $this->__timestamp_callback = $callback_function;
    }

    /**
     * Set the nonce callback
     * @param callback $callback_function
     */
    public function nonce_handler( $callback_function )
    {
        $this->__nonce_callback = $callback_function;
    }

    /**
     * Check if the request is valid
     * This check for:
     * - valid consumer (key/secret)
     * - valid token (key/secret) if bypassTokenCheck is not set to true
     * - valid timestamp threshold
     * - valid nonce
     * @throws \Zeflasher\OAuth\OAuthException
     */
    public function check_oauth_request()
    {
        try
        {
        //  check if we have all the required parameters for the request
            $this->__check_requested_parameters();

        //  check the version if we have made it mandatory
            if ( $this->is_required_parameter(\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_VERSION) )
            {
                $this->__checkVersion();
            }

        //  check for a valid consumer
            $this->call_consumer_handler();

        //  bypass the request token check if asked for
            if( !$this->_is_request_token )
            {
                //  check for a valid token
                $this->call_token_handler();
            }

        //  check for valid timestamp
            $this->call_timestamp_handler();

        //  check for valid nonce
            $this->call_nonce_handler();

        //  finally check the signature
            $this->__checkSignature();
        }

        catch (\Zeflasher\OAuth\OAuthException $e)
        {
        //  create a new exception with message and code
            $code = $e->getCode();
            switch( $code )
            {
                case \Zeflasher\OAuth\OAuthConstants::OAUTH_SIGNATURE_METHOD_REJECTED:
                    $message = $e->getMessage();
                break;

                case \Zeflasher\OAuth\OAuthConstants::OAUTH_PARAMETER_ABSENT:
                    $message = $e->getMessage();
                break;

                case \Zeflasher\OAuth\OAuthConstants::OAUTH_CONSUMER_KEY_UNKNOWN:
                    $message = 'Consumer key unknown';
                break;

                case \Zeflasher\OAuth\OAuthConstants::OAUTH_CONSUMER_KEY_REFUSED:
                    $message = 'Consumer key refused';
                break;

                case \Zeflasher\OAuth\OAuthConstants::OAUTH_BAD_NONCE:
                    $message = 'Bad nonce';
                break;

                case \Zeflasher\OAuth\OAuthConstants::OAUTH_BAD_TIMESTAMP:
                    $message = "Bad time stamp";
                break;

                case \Zeflasher\OAuth\OAuthConstants::OAUTH_VERIFIER_INVALID:
                    $message = "Verifier invalid";
                break;

                case \Zeflasher\OAuth\OAuthConstants::OAUTH_INVALID_SIGNATURE:
                    $message = $e->getMessage();
                break;

                case \Zeflasher\OAuth\OAuthConstants::OAUTH_TOKEN_USED:
                    $message = "OAuth token used";
                break;

                case \Zeflasher\OAuth\OAuthConstants::OAUTH_TOKEN_EXPIRED:
                    $message = "OAuth token expired";
                break;

                case \Zeflasher\OAuth\OAuthConstants::OAUTH_TOKEN_REJECTED:
                    $message = "OAuth token rejected";
                break;

                default:
                    $message = $e->getMessage();
                break;
            }

            throw new \Zeflasher\OAuth\OAuthException($message, $code, $e);
        }
    }

    /**
     * Check that all the required parameters are set in the OAuthRequest
     * @throws \Zeflasher\OAuth\OAuthException
     */
    private function __check_requested_parameters()
    {
        $absentParameters = array();
        foreach( $this->_required_parameters as $parameter => $required )
        {
            if( $required)
            {
                $requestParam = $this->request->get_parameter($parameter);
            //  if not set add to the list of absent parameters
                if (! isset( $requestParam ) )
                {
                    array_push($absentParameters, $parameter);
                }
            }
        }
        if( count($absentParameters) > 0 )
        {
            throw new \Zeflasher\OAuth\OAuthException("OAuth parameters absent: ".join(', ',$absentParameters), \Zeflasher\OAuth\OAuthConstants::OAUTH_PARAMETER_ABSENT);
        }

    //  now sets the provider variables
        $this->consumer_key = $this->request->get_parameter(\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_CONSUMER_KEY);

    //  if we are not using xauth and we are not requesting a request token then the OAUTH_TOKEN should be set
        if( !$this->__is_xauth && !$this->_is_request_token)
        {
            $this->token_key = $this->request->get_parameter(\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_TOKEN);
        }

    //  OAuth mode, requesting request token, get the url callback
        else if( $this->_is_request_token )
        {
            $this->callback_url = $this->request->get_parameter(\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_CALLBACK);
        }
    }

    /**
     * Check the version of the provider against the version pass in the request
     * @return string
     * @throws \Zeflasher\OAuth\OAuthException
     */
    private function __checkVersion()
    {
        $version = $this->request->get_parameter(\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_VERSION);
        if (!$version)
        {
        //  Service Providers MUST assume the protocol version to be 1.0 if this parameter is not present.
        //  Chapter 7.0 ("Accessing Protected Resources")
            $version = '1.0';
        }
        if ($version !== $this->_version)
        {
            throw new \Zeflasher\OAuth\OAuthException("OAuth version '$version' not supported");
        }
        return $version;
    }


    /**
     * Check the signature against the specified method
     * The check for required parameters has already be done, no need to repeat it here
     * @throws \Zeflasher\OAuth\OAuthException
     */
    private function __checkSignature()
    {
        $signature = $this->request->get_parameter(\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_SIGNATURE);

        $signature_method = $this->__get_signature_method($this->request);
        $valid_sig = $signature_method->check_signature
        (
            $this->request,
            $this->consumer_secret,
            $this->token_secret,
            $signature
        );

        if (!$valid_sig)
        {
            throw new \Zeflasher\OAuth\OAuthException('Invalid signature', \Zeflasher\OAuth\OAuthConstants::OAUTH_INVALID_SIGNATURE);
        }
    }

    /**
     * Call the appropriate signature method
     * The check for required parameters has already be done, no need to repeat it here
     * @param \Zeflasher\OAuth\Provider\OAuthRequest $request
     * @return \Zeflasher\OAuth\SignatureMethods\OAuthSignatureMethod
     * @throws \Zeflasher\OAuth\OAuthException
     */
    private function __get_signature_method($request)
    {
        $signature_method = $request instanceof \Zeflasher\OAuth\Provider\OAuthRequest
            ? $request->get_parameter(\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_SIGNATURE_METHOD)
            : NULL;

        if (!$signature_method)
        {
            // According to chapter 7 ("Accessing Protected Resources") the signature-method
            // parameter is required, and we can't just fallback to PLAINTEXT
            throw new \Zeflasher\OAuth\OAuthException('No signature method parameter. This parameter is required');
        }

        if (!in_array($signature_method,
            array_keys($this->_signature_methods)))
        {
            throw new \Zeflasher\OAuth\OAuthException(
                "Signature method '$signature_method' not supported " .
                    "try one of the following: " .
                    implode(", ", array_keys($this->_signature_methods)), \Zeflasher\OAuth\OAuthConstants::OAUTH_SIGNATURE_METHOD_REJECTED
            );
        }
        return $this->_signature_methods[$signature_method];
    }



}
