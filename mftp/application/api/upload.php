<?php
    session_start();

    require_once(dirname(__FILE__) . "/constants.php");
    includeMonstaConfig();
    require_once(dirname(__FILE__) . '/request_processor/RequestMarshaller.php');
    require_once(dirname(__FILE__) . '/lib/helpers.php');
    require_once(dirname(__FILE__) . '/lib/response_helpers.php');

    dieIfNotPOST();

    $marshaller = new RequestMarshaller();

    try {
        $charCodedRequest = base64_decode($_SERVER['HTTP_X_MONSTA']);

        $urlEncodedRequest = "";

        foreach (str_split($charCodedRequest) as $char)
            $urlEncodedRequest .= sprintf("%%%x", ord($char));

        $request = json_decode(urldecode($urlEncodedRequest), true);

        $marshaller->testConfiguration($request);

        $uploadPath = getTempUploadPath($request['context']['remotePath']);

        readUpload($uploadPath);

        $request['context']['localPath'] = $uploadPath;
        try {
            if($request['actionName'] == "uploadArchive") {
                $archive = new ZipArchive();
                if($archive->open($uploadPath) !== true)
                    throw new LocalizableException("Could not read zip file at " . $this->archivePath,
                        LocalizableExceptionDefinition::$ARCHIVE_READ_ERROR, array(
                            "path" => $uploadPath
                        ));

                $fileKey = generateRandomString(16);

                $_SESSION[$fileKey] = array(
                    "archivePath" => $uploadPath,
                    "extractDirectory" => dirname($request['context']['remotePath'])
                );

                $response = array(
                    "success" => true,
                    "fileKey" => $fileKey,
                    "fileCount" => $archive->numFiles
                );

                print json_encode($response);
                $marshaller->disconnect();
                return;
            } else
                print $marshaller->marshallRequest($request);
        } catch (Exception $e) {
            @unlink($uploadPath);
            throw $e;
        }

        // this should be done in a finally to avoid repeated code but we need to support PHP < 5.5
        @unlink($uploadPath);
    } catch (Exception $e) {
        handleExceptionInRequest($e);
        $marshaller->disconnect();
    }

    $marshaller->disconnect();