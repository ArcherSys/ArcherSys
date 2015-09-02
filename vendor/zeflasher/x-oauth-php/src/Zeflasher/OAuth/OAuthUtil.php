<?php
namespace Zeflasher\OAuth;
/**
 * User: zeflasher
 * Date: 24/06/12
 * Time: 10:22 AM
 */
class OAuthUtil
{
    /**
     * Encode url
     * @static
     * @param string $input
     * @return array|mixed|string
     */
    public static function urlencode_rfc3986($input)
    {
        if (is_array($input)) {
            return array_map(array('self', 'urlencode_rfc3986'), $input);
        } else if (is_scalar($input)) {
            return str_replace(
                '+',
                ' ',
                str_replace('%7E', '~', rawurlencode($input))
            );
        } else {
            return '';
        }
    }


    /**
     * Decode url
     * {@internal This decode function isn't taking into consideration the above modifications to the encoding process}
     * @static
     * @param string $string
     * @return string
     */
    public static function urldecode_rfc3986($string)
    {
        return urldecode($string);
    }

    /**
     * Utility function for turning the Authorization: header into parameters,
     * Has to do some unescaping.
     * Can filter out any non-oauth parameters if needed (default behaviour)
     * May 28th, 2010 - method updated to tjerk.meesters for a speed improvement.
     * @see @link http://code.google.com/p/oauth/issues/detail?id=163
     *
     * @param $header
     * @param bool $only_allow_oauth_parameters
     * @return array
     */
    public static function split_header($header, $only_allow_oauth_parameters = true) {
        $params = array();
        if (preg_match_all('/('.($only_allow_oauth_parameters ? 'oauth_' : '').'[a-z_-]*)=(:?"([^"]*)"|([^,]*))/', $header, $matches)) {
            foreach ($matches[1] as $i => $h) {
                $params[$h] = \Zeflasher\OAuth\OAuthUtil::urldecode_rfc3986(empty($matches[3][$i]) ? $matches[4][$i] : $matches[3][$i]);
            }
            if (isset($params['realm'])) {
                unset($params['realm']);
            }
        }
        return $params;
    }

    /**
     * helper to try to sort out headers for people who aren't running apache
     *
     * @return array
     */
    public static function get_headers() {
        if (function_exists('apache_request_headers')) {
            // we need this to get the actual Authorization: header
            // because apache tends to tell us it doesn't exist
            $headers = apache_request_headers();

            // sanitize the output of apache_request_headers because
            // we always want the keys to be Cased-Like-This and arh()
            // returns the headers in the same case as they are in the
            // request
            $out = array();
            foreach ($headers AS $key => $value) {
                $key = str_replace(
                    " ",
                    "-",
                    ucwords(strtolower(str_replace("-", " ", $key)))
                );
                $out[$key] = $value;
            }
        } else {
            // otherwise we don't have apache and are just going to have to hope
            // that $_SERVER actually contains what we need
            $out = array();
            if( isset($_SERVER['CONTENT_TYPE']) )
                $out['Content-Type'] = $_SERVER['CONTENT_TYPE'];
            if( isset($_ENV['CONTENT_TYPE']) )
                $out['Content-Type'] = $_ENV['CONTENT_TYPE'];

            foreach ($_SERVER as $key => $value) {
                if (substr($key, 0, 5) == "HTTP_") {
                    // this is chaos, basically it is just there to capitalize the first
                    // letter of every word that is not an initial HTTP and strip HTTP
                    // code from przemek
                    $key = str_replace(
                        " ",
                        "-",
                        ucwords(strtolower(str_replace("_", " ", substr($key, 5))))
                    );
                    $out[$key] = $value;
                }
            }
        }
        return $out;
    }

    /**
     * This function takes a input like a=b&a=c&d=e and returns the parsed parameters like this
     * array('a' => array('b','c'), 'd' => 'e')
     *
     * @param $input
     * @return array
     */
    public static function parse_parameters( $input ) {
        if (!isset($input) || !$input) return array();

        $pairs = explode('&', $input);

        $parsed_parameters = array();
        foreach ($pairs as $pair) {
            $split = explode('=', $pair, 2);
            $parameter = \Zeflasher\OAuth\OAuthUtil::urldecode_rfc3986($split[0]);
            $value = isset($split[1]) ? \Zeflasher\OAuth\OAuthUtil::urldecode_rfc3986($split[1]) : '';

            if (isset($parsed_parameters[$parameter])) {
                // We have already recieved parameter(s) with this name, so add to the list
                // of parameters with this name

                if (is_scalar($parsed_parameters[$parameter])) {
                    // This is the first duplicate, so transform scalar (string) into an array
                    // so we can add the duplicates
                    $parsed_parameters[$parameter] = array($parsed_parameters[$parameter]);
                }

                $parsed_parameters[$parameter][] = $value;
            } else {
                $parsed_parameters[$parameter] = $value;
            }
        }
        return $parsed_parameters;
    }

    public static function build_http_query($params)
    {
        if (!$params) return '';

        // Urlencode both keys and values
        $keys = OAuthUtil::urlencode_rfc3986(array_keys($params));
        $values = OAuthUtil::urlencode_rfc3986(array_values($params));
        $params = array_combine($keys, $values);

        // Parameters are sorted by name, using lexicographical byte value ordering.
        // Ref: Spec: 9.1.1 (1)
        uksort($params, 'strcmp');

        $pairs = array();
        foreach ($params as $parameter => $value) {
            if (is_array($value)) {
                // If two or more parameters share the same name, they are sorted by their value
                // Ref: Spec: 9.1.1 (1)
                // June 12th, 2010 - changed to sort because of issue 164 by hidetaka
                sort($value, SORT_STRING);
                foreach ($value as $duplicate_value) {
                    $pairs[] = $parameter . '=' . $duplicate_value;
                }
            } else {
                $pairs[] = $parameter . '=' . $value;
            }
        }
        // For each parameter, the name is separated from the corresponding value by an '=' character (ASCII code 61)
        // Each name-value pair is separated by an '&' character (ASCII code 38)
        return implode('&', $pairs);
    }

    /**
     * Get the current timestamp
     */
    public static function generate_timestamp()
    {
        return time();
    }

    /**
     * Generate a random nonce
     */
    public static function generate_nonce()
    {
        $mt = microtime();
        $rand = mt_rand();

        return md5($mt . $rand); // md5s look nicer than numbers
    }


    /**
     * just uppercases the http method
     */
    public static function get_normalized_http_method($method)
    {
        return strtoupper($method);
    }

    /**
     * parses the url and rebuilds it to be
     * scheme://host/path
     */
    public static function get_normalized_http_url($url)
    {
        $parts = parse_url($url);

        $scheme = (isset($parts['scheme'])) ? $parts['scheme'] : 'http';
        $port = (isset($parts['port'])) ? $parts['port'] : (($scheme == 'https') ? '443' : '80');
        $host = (isset($parts['host'])) ? strtolower($parts['host']) : '';
        $path = (isset($parts['path'])) ? $parts['path'] : '';

        if (($scheme == 'https' && $port != '443')
            || ($scheme == 'http' && $port != '80'))
        {
            $host = "$host:$port";
        }
        return "$scheme://$host$path";
    }


    /**
     * Breaks a string into a pair for a common parsing function.
     *
     * The string passed in is truncated to the left half of the string pair, if any, and the right half, if anything, is returned.
     *
     * An example of using this would be:
     * <code>
     * $path = "Account.Balance";
     * $field = string_pair($path);
     *
     * $path is "Account"
     * $field is "Balance"
     *
     * $path = "Account";
     * $field = string_pair($path);
     *
     * $path is "Account"
     * $field is false
     * </code>
     *
     * @return string The "right" portion of the string is returned if the delimiter is found.
     * @param string $a A string to break into a pair. The "left" portion of the string is returned here if the delimiter is found.
     * @param string $delim The characters used to delimit a string pair
     * @param mixed $default The value to return if the delimiter is not found in the string
     * @desc
     */
    public static function string_pair(&$a, $delim='.', $default=false)
    {
        $n = strpos($a, $delim);
        if ($n === false)
            return $default;
        $result = substr($a, $n+strlen($delim));
        $a = substr($a, 0, $n);
        return $result;
    }

    public static function combine_key_strings($new,$old){
        //get the key that starts the newer string
        $new_keys = explode('][',$new);
        $first_key = $new_keys[0].']';

        //see if it appears in the last string
        $last_occurance = strrpos ($old,$first_key);
        //if so, merge the two strings to create the full array keystring
        if (is_int($last_occurance)){
            return substr($old,0,$last_occurance).$new;
        }
        return $new;
    }

    /**
     * Utility function for parse_query_string. Given a result array, a starting key, and a set of keys formatted like "[a][b][c]"
     * and the final value, updates the result array with the correct PHP array keys.
     *
     * @return null|string
     * @param array $result A result array to populate from the query string
     * @param string $k The starting key to populate in $result
     * @param string $arrayKeys The key list to parse in the form "[][a][what%20ever]"
     * @param string $value The value to place at the destination array key
     */
    public static function parse_query_string_array(&$result, $k, $arrayKeys, $value)
    {
        if (!preg_match_all('/\[([^\]]*)\]/', $arrayKeys, $matches))
            return $value;
        if (!isset($result[$k])) {
            $result[urldecode($k)] = array();
        }
        $temp =& $result[$k];
        $last = urldecode(array_pop($matches[1]));
        foreach ($matches[1] as $k) {
            $k = urldecode($k);
            if ($k === "") {
                $temp[] = array();
                $temp =& $temp[count($temp)-1];
            } else if (!isset($temp[$k])) {
                $temp[$k] = array();
                $temp =& $temp[$k];
            } else
            {
                $temp =& $temp[$k];
            }
        }
        if ($last === "") {
            $temp[] = $value;
        } else {
            $temp[urldecode($last)] = $value;
        }
        return null;
    }

    /**
     * Similar to parse_str. Returns false if the query string or URL is empty. Because we're not parsing to
     * variables but to array key entries, this function will handle ?[]=1&[]=2 "correctly."
     *
     * @param array $tokens A query string or URL
     * @return array Similar to the $_GET formatting that PHP does automagically.
     */
    public static function parse_query_string($tokens)
    {
        $urlVars = array();
        foreach ($tokens as $token => $value) {
            if (preg_match('/^([^\[]*)(\[.*\])$/', $token, $matches)) {
                \Zeflasher\OAuth\OAuthUtil::parse_query_string_array($urlVars, $matches[1], $matches[2], $value);
            } else {
                $urlVars[urldecode($token)] = urldecode($value);
            }
        }
        return $urlVars;
    }
}
