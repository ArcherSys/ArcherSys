<?php
namespace Zeflasher\OAuth\SignatureMethods;
/**
 * User: zeflasher
 * Date: 23/06/12
 * Time: 10:30 PM
 * The HMAC-SHA1 signature method uses the HMAC-SHA1 signature algorithm as defined in [RFC2104]
 * where the Signature Base String is the text and the key is the concatenated values 
 * (each first encoded per Parameter Encoding) of the Consumer Secret and Token Secret,
 * separated by an '&' character (ASCII code 38) even if empty.
 *   - Chapter 9.2 ("HMAC-SHA1")
 */

class OAuthSignatureMethodHmacSha1
    extends OAuthSignatureMethod
{
    /**
     * {@inheritdoc}
     * @return string
     */
    public function get_name()
    {
        return \Zeflasher\OAuth\OAuthConstants::OAUTH_SIG_METHOD_HMACSHA1;
    }

    /**
     * {@inheritdoc}
     * @param \Zeflasher\OAuth\Provider\OAuthRequest $request
     * @param string $consumer_secret
     * @param string $token_secret
     * @return string
     */
    public function build_signature($request, $consumer_secret, $token_secret = '')
    {
        $base_string = $request->get_signature_base_string();
        $request->base_string = $base_string;

        $key_parts = array( $consumer_secret, $token_secret );

        $key_parts = \Zeflasher\OAuth\OAuthUtil::urlencode_rfc3986($key_parts);
        $key = implode('&', $key_parts);

        return base64_encode(hash_hmac('sha1', $base_string, $key, true));
    }
}
