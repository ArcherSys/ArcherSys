<?php
    require_once(dirname(__FILE__) . "/constants.php");
    includeMonstaConfig();

    session_start();
    require_once(dirname(__FILE__) . '/lib/helpers.php');
    require_once(dirname(__FILE__) . '/lib/response_helpers.php');
    require_once(dirname(__FILE__) . '/request_processor/RequestMarshaller.php');

    dieIfNotPOST();

    $marshaller = new RequestMarshaller();

    try {
        $request = json_decode($_POST['request'], true);

        if ($request['actionName'] == 'fetchFile' || $request['actionName'] == 'downloadMultipleFiles') {
            switch ($request['actionName']) {
                case 'fetchFile':
                    $outputPath = $marshaller->prepareFileForFetch($request);
                    $outputFileName = basename($request['context']['remotePath']);
                    break;
                case 'downloadMultipleFiles':
                    $outputResponse = $marshaller->marshallRequest($request, false, true);
                    $outputPath = $outputResponse["data"];
                    $outputFileName = "mftp_zip_" . date("Y_m_d_H_i_s") . ".zip";
            }

            $fileKey = generateRandomString(16);

            $_SESSION[$fileKey] = array(
                "path" => $outputPath,
                "fileName" => $outputFileName
            );

            $response = array(
                "success" => true,
                "fileKey" => $fileKey
            );

            print json_encode($response);
        } else {
            $skipConfigurationActions = array('checkSavedAuthExists', 'writeSavedAuth', 'readSavedAuth',
                'readLicense', 'getSystemVars');

            $skipConfiguration = in_array($request['actionName'], $skipConfigurationActions);

            $serializedResponse = $marshaller->marshallRequest($request, $skipConfiguration);
            print $serializedResponse;
        }
    } catch (Exception $e) {
        $marshaller->disconnect();
        handleExceptionInRequest($e);
    }

    $marshaller->disconnect();

    

