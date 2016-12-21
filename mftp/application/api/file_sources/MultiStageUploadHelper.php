<?php
    require_once(dirname(__FILE__) . "/../lib/helpers.php");

    class MultiStageUploadHelper {
        static public function storeUploadContext($connectionType, $actionName, $configuration, $localPath, $remotePath) {
            $context = array(
                "connectionType" => $connectionType,
                "actionName" => $actionName,
                "configuration" => $configuration,
                "remotePath" => $remotePath,
                "localPath" => $localPath
            );

            $sessionKey = generateRandomString(16);

            $_SESSION[$sessionKey] = $context;

            return $sessionKey;
        }

        static public function getUploadContext($sessionKey) {
            if (!array_key_exists($sessionKey, $_SESSION))
                throw new Exception("sessionKey '$sessionKey' not found in session");

            return $_SESSION[$sessionKey];
        }

        static public function getUploadRequest($sessionKey) {
            $uploadContext = self::getUploadContext($sessionKey);

            if (!is_array($uploadContext))
                throw new Exception("Upload Context is not an array");

            $request = array(
                "connectionType" => $uploadContext["connectionType"],
                "configuration" => $uploadContext["configuration"],
                "actionName" => $uploadContext["actionName"],
                "context" => array(
                    "localPath" => $uploadContext["localPath"],
                    "remotePath" => $uploadContext["remotePath"]
                )
            );

            return $request;
        }
    }