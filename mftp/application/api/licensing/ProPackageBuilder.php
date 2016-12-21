<?php

    require_once(dirname(__FILE__) . '/ProPackageIDGenerator.php');
    require_once(dirname(__FILE__) . "/ProConfigBuilder.php");

    class ProPackageBuilder {
        private $licenseData;
        private $proConfigPath;
        private $htaccessPath;

        public function __construct($licenseData, $proConfigPath, $htaccessPath) {
            $this->licenseData = $licenseData;
            $this->proConfigPath = $proConfigPath;
            $this->htaccessPath = $htaccessPath;
        }

        public function buildLicenseZip($archivePath, $salt, $emailAddress) {
            $packageIDGenerator = new ProPackageIDGenerator($salt);
            $proPackageID = $packageIDGenerator->idFromEmail($emailAddress);
            $archive = new ZipArchive();
            $archive->open($archivePath, ZipArchive::CREATE);
            $this->addIndexHtmlToZip($archive);
            $this->addHtaccessToZip($archive);
            $this->addEmptyProfileToZip($archive, $proPackageID);
            $this->addLicenseToZip($archive, $proPackageID);
            $this->addConfigToZip($archive, $proPackageID);
            $archive->close();
        }

        private function renderProConfig($proPackageID) {
            $configBuilder = new ProConfigBuilder($proPackageID);
            return $configBuilder->renderProConfig($this->proConfigPath);
        }

        private function addIndexHtmlToZip($archive) {
            $archive->addFromString("license/index.html", "");
        }

        private function addHtaccessToZip($archive) {
            $archive->addFile($this->htaccessPath, "license/.htaccess");
        }

        private function generateRelativeProfilePath($proPackageID) {
            $configBuilder = new ProConfigBuilder($proPackageID);
            return $configBuilder->generateRelativeProfilePath();
        }

        private function generateRelativeLicensePath($proPackageID) {
            $configBuilder = new ProConfigBuilder($proPackageID);
            return $configBuilder->generateRelativeLicensePath();
        }

        private function addEmptyProfileToZip($archive, $proPackageID) {
            $profileLocalPath = $this->generateRelativeProfilePath($proPackageID);
            $archive->addFromString("license/" . $profileLocalPath, "");
        }

        private function addLicenseToZip($archive, $proPackageID){
            $licenseLocalPath = $this->generateRelativeLicensePath($proPackageID);
            $archive->addFromString("license/" . $licenseLocalPath, $this->licenseData);
        }

        private function addConfigToZip($archive, $proPackageID) {
            $renderedConfig = $this->renderProConfig($proPackageID);
            $archive->addFromString("license/config_pro.php", $renderedConfig);
        }
    }