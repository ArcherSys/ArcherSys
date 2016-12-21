<?php

    class LicenseBuilder {
        private $keyPairSuite;
        private $licenseTemplate;

        public function __construct($keyPairSuite, $licenseTemplate) {
            $this->keyPairSuite = $keyPairSuite;
            $this->licenseTemplate = $licenseTemplate;
        }

        public function renderLicense($licenseContent) {
            $licenseTemplateLines = explode("\n", $this->licenseTemplate);
            $firstLineLength = strlen($licenseTemplateLines[0]);
            return sprintf($this->licenseTemplate, join("\n", str_split($licenseContent, $firstLineLength)));
        }

        public function encodeLicenseData($licenseData) {
            return $this->keyPairSuite->encryptAndBase64Encode(json_encode($licenseData));
        }

        public function encodeAndRenderLicense($licenseData) {
            return $this->renderLicense($this->encodeLicenseData($licenseData));
        }
    }