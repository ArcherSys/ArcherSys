<?php
    require_once(dirname(__FILE__) . "/../constants.php");
    require_once(dirname(__FILE__) . "/../file_sources/PathOperations.php");

    if(!MONSTA_DEBUG)
        includeMonstaConfig();

    function monstaGetTempDirectory() {
        // a more robust way of getting the temp directory

        $configTempDir = defined("MONSTA_TEMP_DIRECTORY") ? MONSTA_TEMP_DIRECTORY : "";

        if($configTempDir != "")
            return $configTempDir;

        return ini_get('upload_tmp_dir') ? ini_get('upload_tmp_dir') : sys_get_temp_dir();
    }

    function generateRandomString($length) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++)
            $randomString .= $characters[rand(0, $charactersLength - 1)];

        return $randomString;
    }

    function languageCmp($a, $b) {
        strcmp($a[1], $b[1]);
    }

    function readLanguagesFromDirectory($languageDir) {
        $languageFiles = scandir($languageDir);

        $languages = array();

        foreach ($languageFiles as $languageFile) {
            if(strlen($languageFile) < 6)
                continue;

            $splitFileName = explode(".", $languageFile);

            if(count($splitFileName) != 2)
                continue;

            if($splitFileName[1] != "json")
                continue;

            $fullFilePath = PathOperations::join($languageDir, $languageFile);

            $languageContentsRaw = file_get_contents($fullFilePath);
            if($languageContentsRaw === false)
                continue;

            $languageContents = json_decode($languageContentsRaw, true);

            if($languageContents === false)
                continue;

            if(!isset($languageContents['Language Display Name']))
                continue;

            $languages[] = array($splitFileName[0], $languageContents['Language Display Name']);
        }

        usort($languages, "languageCmp");

        return $languages;
    }

    function getTempUploadPath($remotePath) {
        $fileName = basename($remotePath);

        return tempnam(monstaGetTempDirectory(), $fileName);
    }

    function readUpload($uploadPath) {
        $inputHandler = fopen('php://input', "r");
        $fileHandler = fopen($uploadPath, "w+");

        while (FALSE !== ($buffer = fgets($inputHandler, 65536)))
            fwrite($fileHandler, $buffer);

        fclose($inputHandler);
        fclose($fileHandler);
    }