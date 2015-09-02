<?php
namespace Zeflasher\OAuth\SignatureMethods;
/**
 * User: zeflasher
 * Date: 23/06/12
 * Time: 9:34 PM
 */
abstract class OAuthSignatureMethod
{
    /**
     * Needs to return the name of the Signature Method (ie HMAC-SHA1)
     * @return string
     */
    abstract public function get_name();

    /**
     * Build up the signature
     * NOTE: The output of this function MUST NOT be urlencoded.
     * The encoding is handled in OAuthRequest when the final
     * request is serialized
     * @param \Zeflasher\OAuth\Provider\OAuthRequest $request
     * @param string $consumer_secret
     * @param string $token_secret
     * @return string the signature
     */
    abstract public function build_signature($request, $consumer_secret, $token_secret = '');

    /**
     * Verifies that a given signature is correct
     * @param \Zeflasher\OAuth\Provider\OAuthRequest $request
     * @param string $consumer_secret
     * @param string $token_secret
     * @param string $signature
     * @return bool
     */
    public function check_signature($request, $consumer_secret, $token_secret, $signature)
    {
        $built = $this->build_signature($request, $consumer_secret, $token_secret);

        // Check for zero length, although unlikely here
        if (strlen($built) == 0 || strlen($signature) == 0)
        {
            return false;
        }

        if (strlen($built) != strlen($signature))
        {
            return false;
        }

        // Avoid a timing leak with a (hopefully) time insensitive compare
        $result = 0;
        for ($i = 0; $i < strlen($signature); $i++)
        {
            $result |= ord($built{$i}) ^ ord($signature{$i});
        }

        return $result == 0;
    }
}
