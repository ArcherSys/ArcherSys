<?php
namespace Zeflasher\OAuth\SignatureMethods;
/**
 * User: zeflasher
 * Date: 24/06/12
 * Time: 12:07 AM
 * The RSA-SHA1 signature method uses the RSASSA-PKCS1-v1_5 signature algorithm as defined in
 * [RFC3447] section 8.2 (more simply known as PKCS#1), using SHA-1 as the hash function for
 * EMSA-PKCS1-v1_5. It is assumed that the Consumer has provided its RSA public key in a
 * verified way to the Service Provider, in a manner which is beyond the scope of this
 * specification.
 * * Chapter 9.3 ("RSA-SHA1")
 */
abstract class OAuthSignatureMethodRsaSha1
    extends OAuthSignatureMethod
{
    /**
     * {@inheritdoc}
     * @return string
     */
    public function get_name()
    {
        return OAuthConstants::OAUTH_SIG_METHOD_RSASHA1;
    }

    /**
     * Up to the SP to implement this lookup of keys. Possible ideas are:
     * * do a lookup in a table of trusted certs keyed off of consumer
     * * fetch via http using a url provided by the requester
     * * some sort of specific discovery code based on request
     * Either way should return a string representation of the certificate
     * @abstract
     * @param $request
     * @return mixed
     */
    protected abstract function fetch_public_certificate(&$request);

    /**
     * Up to the SP to implement this lookup of keys.
     * Possible ideas are:
     * * do a lookup in a table of trusted certs keyed off of consumer
     * Either way should return a string representation of the certificate
     * @abstract
     * @param $request
     * @return mixed
     */
    protected abstract function fetch_private_certificate(&$request);

    /**
     * {@inheritdoc}
     * @param OAuthRequest $request
     * @param string $consumer_secret
     * @param string $token_secret
     * @return string
     */
    public function build_signature($request, $consumer_secret, $token_secret = '')
    {
        $base_string = $request->get_signature_base_string();
        $request->base_string = $base_string;

        // Fetch the private key cert based on the request
        $cert = $this->fetch_private_certificate($request);

        // Pull the private key ID from the certificate
        $privatekeyid = openssl_get_privatekey($cert);

        // Sign using the key
        $ok = openssl_sign($base_string, $signature, $privatekeyid);

        // Release the key resource
        openssl_free_key($privatekeyid);

        return base64_encode($signature);
    }

    /**
     * {@inheritdoc}
     * @param OAuthRequest $request
     * @param string $consumer_secret
     * @param string $token_secret
     * @param string $signature
     * @return bool
     */
    public function check_signature($request, $consumer_secret, $token_secret, $signature)
    {
        $decoded_sig = base64_decode($signature);

        $base_string = $request->get_signature_base_string();

        // Fetch the public key cert based on the request
        $cert = $this->fetch_public_certificate($request);

        // Pull the public key ID from the certificate
        $publickeyid = openssl_get_publickey($cert);

        // Check the computed signature against the one passed in the query
        $ok = openssl_verify($base_string, $decoded_sig, $publickeyid);

        // Release the key resource
        openssl_free_key($publickeyid);

        return $ok == 1;
    }
}