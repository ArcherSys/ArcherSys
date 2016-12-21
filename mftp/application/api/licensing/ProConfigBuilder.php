<?php
    class ProConfigBuilder {
        private $proPackagedID;

        public function __construct($proPackageID) {
            $this->proPackagedID = $proPackageID;
        }

        /**
         * @return mixed
         */
        public function getProPackagedID() {
            return $this->proPackagedID;
        }

        public function generateRelativeLicensePath() {
            return sprintf("license-%s.key", $this->getProPackagedID());
        }

        public function generateRelativeProfilePath() {
            return sprintf("profiles-%s.bin", $this->getProPackagedID());
        }

        public function renderProConfig($configTemplatePath) {
            $rawContents = file_get_contents($configTemplatePath);

            $profileLocalPath = $this->generateRelativeProfilePath($this->getProPackagedID());
            $licenseLocalPath = $this->generateRelativeLicensePath($this->getProPackagedID());

            return sprintf($rawContents, $profileLocalPath, $licenseLocalPath);
        }
    }