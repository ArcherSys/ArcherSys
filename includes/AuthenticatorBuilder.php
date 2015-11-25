<?php
namespace ArcherSys\Nav;
class  AuthenticatorBuilder{
    public static function buildLoginURI($redirect_uri,$roleDetect){
        return "http://localhost/login.php?redirect_uri=${redirect_uri}&roleDetect=${roleDetect}";
    }
}