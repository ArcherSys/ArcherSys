<?php
namespace Zeflasher\OAuth\Client;

/**
 * User: zeflasher
 * Date: 7/03/13
 * Time: 1:28 PM
 */ 
use Zeflasher\OAuth\SignatureMethods\OAuthSignatureMethodHmacSha1;

class OauthSigner
{
    /**
     * @var string
     */
    protected $_consumerKey;

    /**
     * @var string
     */
    protected $_consumerSecret;

    /**
     * @param $consumerKey string
     * @param $consumerSecret string
     * @throws \Zeflasher\OAuth\OAuthException
     */
    public function __construct( $consumerKey,  $consumerSecret )
    {
        if( $consumerKey == "" )
        {
            throw new \Zeflasher\OAuth\OAuthException("Consumer key must not be empty/null");
        }

        if ($consumerSecret == "")
        {
            throw new \Zeflasher\OAuth\OAuthException("Consumer secret must not be empty/null");
        }

        $this->_consumerKey = $consumerKey;
        $this->_consumerSecret = $consumerSecret;
    }

    /**
     * Sign the request when requesting a request token
     * @param $curl
     * @param $urlCallback
     * @param $signatureMethod
     */
    public function signForRequestToken($curl, $urlCallback, $signatureMethod = null)
    {
        if( $signatureMethod === null)
        {
            $signatureMethod = new \Zeflasher\OAuth\SignatureMethods\OAuthSignatureMethodHmacSha1();
        }

        $oauthParameters = new \Zeflasher\OAuth\Client\OAuthParameters($this->_consumerKey, $signatureMethod);
        $oauthParameters->addParameters(urlRequest.data);
        $oauthParameters->addParameters(_getGETParameters(urlRequest));
        $oauthParameters->add(OAuthConstants.CALLBACK, urlCallback);

        $signature = getSignature(urlRequest, oauthParameters, OAuthConstants.EMPTY_TOKEN_SECRET, signatureMethod);
        $oauthParameters->add(\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_SIGNATURE, $signature);
        //
        $headerString = $oauthParameters->getAuthorizationHeaderValue();
        urlRequest.requestHeaders.push(\Zeflasher\OAuth\OAuthConstants::OAUTH_CLIENT_HEADER, $headerString);
    }

}
