<?php
    session_start();

    require_once(dirname(__FILE__) . "/constants.php");
    includeMonstaConfig();
    require_once(dirname(__FILE__) . '/request_processor/RequestMarshaller.php');
    require_once(dirname(__FILE__) . '/lib/helpers.php');
    require_once(dirname(__FILE__) . '/lib/response_helpers.php');
    require_once(dirname(__FILE__) . '/file_sources/MultiStageUploadHelper.php');

    dieIfNotPOST();

    $uploadContextKey = "sessionKey";

    if(!array_key_exists($uploadContextKey, $_GET))
        exitWith404();

    $sessionKey = $_GET[$uploadContextKey];

    $uploadRequest = array();

    try {
        $uploadRequest = MultiStageUploadHelper::getUploadRequest($sessionKey);
    } catch (Exception $e) {
        exitWith404();
    }

    $marshaller = new RequestMarshaller();

    $marshaller->testConfiguration($uploadRequest);

    $uploadPath = $uploadRequest["context"]["localPath"];

    readUpload($uploadPath);
