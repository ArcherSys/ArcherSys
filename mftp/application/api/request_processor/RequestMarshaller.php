<?php

    require_once(dirname(__FILE__) . '/RequestDispatcher.php');
    require_once(dirname(__FILE__) . "/../lib/helpers.php");
    require_once(dirname(__FILE__) . "/../system/ApplicationSettings.php");

    class RequestMarshaller {
        /**
         * @var RequestDispatcher
         */
        private $requestDispatcher;

        public function __construct($requestDispatcher = null) {
            /* supplied only for testing. normally we wouldn't know how to instantiate the RequestDispatcher until we
            have the request*/
            $this->requestDispatcher = $requestDispatcher;
        }

        private static function buildTransferContext($request) {
            $remotePath = $request['context']['remotePath'];
            $remoteFileName = basename($remotePath);
            $localPath = tempnam(monstaGetTempDirectory(), $remoteFileName);
            $downloadContext = array(
                'localPath' => $localPath,
                'remotePath' => $remotePath
            );
            return array($localPath, $downloadContext);
        }

        private static function validateActionName($request, $expectedActionName) {
            if ($request['actionName'] != $expectedActionName)
                throw new InvalidArgumentException("Got invalid action, expected \"$expectedActionName\", got \"" .
                    $request['actionName'] . "\"");
        }

        private function applyConnectionRestrictions($connectionType, $configuration) {
            $applicationSettings = new ApplicationSettings(APPLICATION_SETTINGS_PATH);

            $connectionRestrictions = $applicationSettings->getUnblankedConnectionRestrictions();

            if (is_array($connectionRestrictions)) {
                if(key_exists($connectionType, $connectionRestrictions)) {
                    foreach ($connectionRestrictions[$connectionType] as $restrictionKey => $restrictionValue)
                        $configuration[$restrictionKey] = $restrictionValue;

                }
            }

            return $configuration;
        }

        private function initRequestDispatcher($request, $skipConfiguration = false) {
            if(!$skipConfiguration)
                $request['configuration'] = $this->applyConnectionRestrictions($request['connectionType'],
                    $request['configuration']);

            if (is_null($this->requestDispatcher))
                $this->requestDispatcher = new RequestDispatcher($request['connectionType'], $request['configuration'],
                    null, null, $skipConfiguration);
        }

        public function testConfiguration($request) {
            $this->initRequestDispatcher($request);
            $this->requestDispatcher->testConnectAndAuthenticate();
        }

        public function disconnect() {
            if($this->requestDispatcher != null)
                $this->requestDispatcher->disconnect();
        }

        public function marshallRequest($request, $skipConfiguration = false, $skipEncode = false) {
            $this->initRequestDispatcher($request, $skipConfiguration);

            $response = array();

            if ($request['actionName'] == 'putFileContents')
                $response = $this->putFileContents($request);
            else if ($request['actionName'] == 'getFileContents')
                $response = $this->getFileContents($request);
            else {
                $responseData = $this->requestDispatcher->dispatchRequest($request['actionName'], $request['context']);
                $response['success'] = true;

                if(is_object($responseData)) {
                    $response['data'] = method_exists($responseData, 'legacyJsonSerialize') ?
                        $responseData->legacyJsonSerialize() : $responseData;
                } else
                    $response['data'] = $responseData;
            }

            if ($skipEncode)
                return $response;

            return json_encode($response);
        }

        public function prepareFileForFetch($request) {
            // this will fetch the file from the remote server to a tmp location, then return that path
            self::validateActionName($request, 'fetchFile');

            $this->initRequestDispatcher($request);

            list($localPath, $transferContext) = self::buildTransferContext($request);

            try {
                $this->requestDispatcher->downloadFile($transferContext);
            } catch (Exception $e) {
                unlink($localPath);
                throw $e;
            }

            return $localPath;
        }

        public function putFileContents($request) {
            self::validateActionName($request, 'putFileContents');

            $this->initRequestDispatcher($request);

            if (!isset($request['context']['fileContents']))
                throw new InvalidArgumentException("Can't put file contents if fileContents is not supplied.");

            $fileContents = $request['context']['fileContents'];

            if(array_key_exists("encoding", $request['context'])) {
                $fileContentsEncoding = $request['context']['encoding'];

                switch($fileContentsEncoding) {
                    case "rot13":
                        $fileContents = str_rot13($fileContents);
                        break;
                    default:
                        break;
                }
            }

            list($localPath, $transferContext) = self::buildTransferContext($request);

            try {
                file_put_contents($localPath, $fileContents);
                $this->requestDispatcher->uploadFile($transferContext);
            } catch (Exception $e) {
                @unlink($localPath);
                throw $e;
            }

            // this should be done in a finally to avoid repeated code but we need to support PHP < 5.5
            @unlink($localPath);

            $response = array(
                'success' => true
            );

            return json_encode($response);
        }

        public function getFileContents($request) {
            self::validateActionName($request, 'getFileContents');

            $this->initRequestDispatcher($request);

            list($localPath, $transferContext) = self::buildTransferContext($request);

            try {
                $this->requestDispatcher->downloadFile($transferContext);
                $fileContents = file_get_contents($localPath);
            } catch (Exception $e) {
                @unlink($localPath);
                throw $e;
            }

            // this should be done in a finally to avoid repeated code but we need to support PHP < 5.5
            @unlink($localPath);

            return array(
                'success' => true,
                'data' => $fileContents
            );
        }
    }