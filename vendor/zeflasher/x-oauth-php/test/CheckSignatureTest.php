<?php

class CheckSignatureTest extends PHPUnit_Framework_TestCase
{


    /**
     * @test
     * @return string
     */
    public function requestOAuthAPI()
    {
        $signatureMethod = new \Zeflasher\OAuth\SignatureMethods\OAuthSignatureMethodHmacSha1();
        $client = new \Zeflasher\OAuth\Client\OAuthClient($signatureMethod, 'key', 'secret', 'accesskey', 'accesssecret');
        $response = $client->request
        (
                'http://term.ie/oauth/example/echo_api.php',
                'GET',
                array(
                    'this_should_echo'=>true
                )
        );
        $this->assertEquals($response->header, "this_should_echo=1");
    }
}
?>
