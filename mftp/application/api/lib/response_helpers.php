<?php

    require_once(dirname(__FILE__) . "/../constants.php");
    require_once(dirname(__FILE__) . "/LocalizableException.php");

    function handleExceptionInRequest($exception) {
        if (MONSTA_DEBUG)
            error_log($exception->getTraceAsString());

        header('HTTP/1.1 500 Internal Server Error', true, 500);

        $errResponse = array(
            'errors' => array($exception->getMessage())
        );

        if (is_a($exception, "LocalizableException")) {
            $errResponse['localizedErrors'] = array(
                array(
                    "errorName" => LocalizableExceptionCodeLookup::codeToName($exception->getCode()),
                    "context" => $exception->getContext()
                )
            );
        }

        print json_encode($errResponse);
        exit();
    }

    function exitWith404() {
        header('HTTP/1.1 404 Not Found', true, 404);
        exit();
    }

    function dieIfNotPOST() {
        if ($_SERVER['REQUEST_METHOD'] != 'POST') {
            header('HTTP/1.1 405 Method Not Allowed', true, 405);
            header("Allow: POST");
            exit();
        }
    }