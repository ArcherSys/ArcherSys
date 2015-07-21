<?php
namespace Zeflasher\OAuth;
/**
 * User: zeflasher
 * Date: 25/06/12
 * Time: 8:07 PM
 */
class OAuthConstants
{
    const OAUTH_SIG_METHOD_RSASHA1          = 'RSA-SHA1';
    const OAUTH_SIG_METHOD_HMACSHA1         = 'HMAC-SHA1';
    const OAUTH_SIG_METHOD_HMACSHA256       = 'HMAC-SHA256';
    const OAUTH_SIG_METHOD_PLAINTEXT        = 'PLAINTEXT';

    const OAUTH_AUTH_TYPE_AUTHORIZATION     = 3;
    const OAUTH_AUTH_TYPE_NONE              = 2;
    const OAUTH_AUTH_TYPE_URI               = 1;
    const OAUTH_AUTH_TYPE_FORM              = 2;

    const OAUTH_HTTP_METHOD_GET             = 'GET';
    const OAUTH_HTTP_METHOD_POST            = 'POST';
    const OAUTH_HTTP_METHOD_PUT             = 'PUT';
    const OAUTH_HTTP_METHOD_HEAD            = 'HEAD';
    const OAUTH_HTTP_METHOD_DELETE          = 'DELETE';

    const OAUTH_REQENGINE_STREAMS           = 1;
    const OAUTH_REQENGINE_CURL              = 2;

    const OAUTH_OK                          = 0;
    const OAUTH_BAD_NONCE                   = 4;
    const OAUTH_BAD_TIMESTAMP               = 8;
    const OAUTH_CONSUMER_KEY_UNKNOWN        = 16;
    const OAUTH_CONSUMER_KEY_REFUSED        = 32;
    const OAUTH_INVALID_SIGNATURE           = 64;
    const OAUTH_TOKEN_USED                  = 128;
    const OAUTH_TOKEN_EXPIRED               = 256;
    const OAUTH_TOKEN_REJECTED              = 1024;
    const OAUTH_VERIFIER_INVALID            = 2048;
    const OAUTH_PARAMETER_ABSENT            = 4096;
    const OAUTH_SIGNATURE_METHOD_REJECTED   = 8192;

    const OAUTH_CLIENT_TIMESTAMP            = "oauth_timestamp";
    const OAUTH_CLIENT_SIGNATURE_METHOD     = "oauth_signature_method";
    const OAUTH_CLIENT_SIGNATURE            = "oauth_signature";
    const OAUTH_CLIENT_CONSUMER_KEY         = "oauth_consumer_key";
    const OAUTH_CLIENT_VERSION              = "oauth_version";
    const OAUTH_CLIENT_NONCE                = "oauth_nonce";
    const OAUTH_CLIENT_PARAM_PREFIX         = "oauth_";
    const OAUTH_CLIENT_TOKEN                = "oauth_token";
    const OAUTH_CLIENT_EMPTY_TOKEN_SECRET   = "";
    const OAUTH_CLIENT_HEADER               = "Authorization";
    const OAUTH_CLIENT_CALLBACK             = "oauth_callback";
    const OAUTH_CLIENT_VERIFIER             = "oauth_verifier";

    const X_AUTH_MODE                       = "x_auth_mode";
    const X_AUTH_MODE_VALUE                 = "client_auth";
    const X_AUTH_USERNAME                   = "x_auth_username";
    const X_AUTH_PASSWORD                   = "x_auth_password";
}
