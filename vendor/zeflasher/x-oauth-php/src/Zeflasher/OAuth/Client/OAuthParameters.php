<?php
namespace Zeflasher\OAuth\Client;


class OAuthParameters
{
    private  $__parameters;

    /**
     * @const
     */
    private static $ALPHA_CHAR_CODES = array(48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 65, 66, 67, 68, 69, 70);

    /**
     * @param $consumerKey string
     * @param $signatureMethod \Zeflasher\OAuth\SignatureMethods\OAuthSignatureMethod
     * @param string $version
     */
    public function __construct( $consumerKey, $signatureMethod, $version = "1.0")
    {
        if( $signatureMethod === null )
        {
            $signatureMethod = new \Zeflasher\OAuth\SignatureMethods\OAuthSignatureMethodHmacSha1();
        }

        $this->_parameters = array();
        $this->__parameters[\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_TIMESTAMP]      = $this->__getTimestampInSeconds();
        $this->__parameters[\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_SIGNATURE_METHOD]    = $signatureMethod->get_name();
        $this->__parameters[\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_VERSION]        = $version;
        $this->__parameters[\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_NONCE]          = $this->__getNonce();
        $this->__parameters[\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_CONSUMER_KEY]   = $consumerKey;
    }


    /**
     * Add a given parameter.
     *
     * @param $key string Parameter name
     * @param $value string Parameter value
     */
    public function add($key, $value)
    {
        $this->__parameters[$key] = $value;
    }

    /**
     * Remove a given parameter.
     * @param $key string Parameter key.
     */
    public function remove($key)
    {
        unset( $this->__parameters[$key] );
    }

/*    public function addParameters(requestParameters:Object) : void
    {
        var param : String;
        for (param in requestParameters)
        {
            __parameters[param] = requestParameters[param];
        }
    }*/

    /**
     * Get the Authorization header value.
     *
     * @return string
     */
    public function getAuthorizationHeaderValue()
    {
        $headerString    = "OAuth ";
        $params          = $this->getSortedParameters();
        $paramsCount     = count($params);

        for ($i = 0; $i < $paramsCount; $i)
        {
            $param = $params[$i];
        //  if the string starts with the OAuth prefix (oauth_)
            if ( strpos(((string)$param->key), \Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_PARAM_PREFIX) === 0)
            {
                $headerString .= \Zeflasher\OAuth\OAuthUtil::urlencode_rfc3986($param->key);
                $headerString .= '=';
                $headerString .= '"';
                $headerString .= \Zeflasher\OAuth\OAuthUtil::urlencode_rfc3986($param->value);
                $headerString .= '", ';
            }
        }

        return substr($headerString, 0, strlen($headerString) - 2);
    }

    /**
     * Get a string with all the parameters alphabetically sorted and URL encoded.
     * @return string
     */
    public function getSortedEncodedParametersAsString()
    {
        $params = getSortedParameters();
        $paramsCount     = count($params);
        $encodedString   = '';

        for ($i = 0; $i < $paramsCount; $i++)
        {
            $param = $params[$i];
            if ($param->key != \Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_SIGNATURE)
            {
                $encodedString .= \Zeflasher\OAuth\OAuthUtil::urlencode_rfc3986($param->key);
                $encodedString .= '=';
                $encodedString .= \Zeflasher\OAuth\OAuthUtil::urlencode_rfc3986($param->value);
                $encodedString .= '&';
            }
        }

        // return them like a querystring
        return substr($encodedString, 0, strlen($encodedString)-1);
    }

    /**
     * Get a string with all the parameters alphabetically sorted.
     * @return string
     */
    public function getSortedParameters()
    {
        $params  = array();

        // loop over params, find the ones we need
        foreach ( $this->__parameters as $key => $value)
        {
            $param = new \stdClass();
            $param->key = $key;
            $param->value = $value;
            array_push($params, $param);
        }

        // put them in the right order
        ksort($params);

        return $params;
    }

/*    public function getParameters()
    {
        var urlVariable : URLVariables = new URLVariables();
        var params  : Array = new Array();
        var param   : String;

        // loop over params, find the ones we need
        for ( param in __parameters)
        {
            urlVariable[param] = __parameters[param].toString();
        }

        return urlVariable;
    }*/

    /**
     * Get the timestamp in seconds
     *
     * @return float
     */
    private function __getTimestampInSeconds()
    {
        return DateTime::getTimestamp() / 1000;
    }

    /**
     * Returns a unique id to use as a noonce.
     * Source from https://bitbucket.org/photobucket/api-as3/src/2ef225b9cab3/src/com/photobucket/webapi/oauth/OAuthBaseService.as
     * @return
     */
    public static function __getNonce()
    {
        $uid2   = new SplFixedArray(36);
        $index  = 0;
        for ($i = 0; $i < 8; $i++)
        {
            $uid2[$index++] = self::$ALPHA_CHAR_CODES[floor(rand(0, 16))];
        }

        for ($i = 0; $i < 3; $i++)
        {
            $uid2[$index++] = 45; // charCode for "-"
            for ($j = 0; $j < 4; $j++)
            {
                $uid2[$index++] = self::$ALPHA_CHAR_CODES[floor(rand(0, 16))];
            }
        }

        $uid2[$index++] = 45; // charCode for "-"
        $time = \DateTime::getTimestamp();
        // Note: time is the number of milliseconds since 1970,
        // which is currently more than one trillion.
        // We use the low 8 hex digits of this number in the UID.
        // Just in case the system clock has been reset to
        // Jan 1-4, 1970 (in which case this number could have only
        // 1-7 hex digits), we pad on the left with 7 zeros
        // before taking the low digits.
        base_convert($time, 10, 16);
        $timeString = substr( "0000000" . strtoupper( base_convert($time, 10, 16) ), -8);
        for ($i = 0; $i < 8; $i++)
        {
            $uid2[$index++] = ord($timeString[$i]);
        }
        for ($i = 0; $i < 4; $i++)
        {
            $uid2[$index++] = self::$ALPHA_CHAR_CODES[floor(rand(0, 16))];
        }
        return self::uniord($uid2);
    }

    /**
     * From http://blog.stanislavstankov.com/2010/02/equal-function-string-fromcharcode-in-php/
     * @param $ch
     * @return bool|int
     */
    private static function uniord($ch)
    {
        $n = ord($ch{0});

        if ($n < 128) {
            return $n; // no conversion required
        }

        if ($n < 192 || $n > 253) {
            return false; // bad first byte || out of range
        }

        $arr = array(1 => 192, // byte position => range from
            2 => 224,
            3 => 240,
            4 => 248,
            5 => 252,
        );

        foreach ($arr as $key => $val) {
            if ($n >= $val) { // add byte to the 'char' array
                $char[] = ord($ch{$key}) - 128;
                $range  = $val;
            } else {
                break; // save some e-trees
            }
        }

        $retval = ($n - $range) * pow(64, sizeof($char));

        foreach ($char as $key => $val) {
            $pow = sizeof($char) - ($key + 1); // invert key
            $retval += $val * pow(64, $pow);   // dark magic
        }

        return $retval;
    }
}
