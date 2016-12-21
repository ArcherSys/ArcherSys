<?php
    require_once(dirname(__FILE__) . "/../file_sources/PathOperations.php");
    require_once(dirname(__FILE__) . "/LicenseReader.php");
    require_once(dirname(__FILE__) . "/KeyPairSuite.php");
    require_once(dirname(__FILE__) . "/ProPackageIDGenerator.php");
    require_once(dirname(__FILE__) . "/ProConfigBuilder.php");
    require_once(dirname(__FILE__) . "/../lib/LocalizableException.php");

    class LicenseWriter {
        /**
         * @var string
         */
        private $licenseContent;

        /**
         * @var string
         */
        private $outputDirectory;

        /**
         * @var KeyPairSuite
         */
        private $keyPairSuite;

        /**
         * LicenseWriter constructor.
         * @param $licenseContent string
         * @param $publicKeyPath string
         * @param $outputDirectory string
         */
        public function __construct($licenseContent, $publicKeyPath, $outputDirectory) {
            $this->licenseContent = trim($licenseContent);
            $this->outputDirectory = $outputDirectory;
            $this->keyPairSuite = new KeyPairSuite($publicKeyPath);
        }

        public function getLicenseData() {
            $licenseReader = new LicenseReader($this->keyPairSuite);
            try {
                return $licenseReader->readLicenseString("POST", $this->getLicenseContent());
            } catch (LicensingException $e) {
                throw new InvalidLicenseException("The license entered was not valid.",
                    LocalizableExceptionDefinition::$INVALID_POSTED_LICENSE_ERROR, null, $e);
            }
        }

        public function getProPackageID($email) {
            $proIDGenerator = new ProPackageIDGenerator(strtolower($email));
            // Without anything else to work with, we're basically building the ID by sha($email + $email)
            // Not super secure any more but should still be good enough for our purposes

            return $proIDGenerator->idFromEmail($email);
        }

        public function getExistingLicense() {
            if (MONSTA_LICENSE_PATH !== "") {
                $licenseReader = new LicenseReader($this->keyPairSuite);
                try {
                    return $licenseReader->readLicense(MONSTA_LICENSE_PATH);
                } catch (Exception $e) {
                }
            }
            return null;
        }

        private function validateNewLicenseAgainstExisting() {
            $newLicense = $this->getLicenseData();
            $existingLicense = $this->getExistingLicense();
            if ($existingLicense === null)
                return;

            if ($newLicense["expiryDate"] < $existingLicense["expiryDate"])
                throw new LicensingException("The new license was not saved as its expiry date is earlier than the 
                current license.", LocalizableExceptionDefinition::$REPLACEMENT_LICENSE_OLDER_ERROR);
        }

        /**
         * @return string
         */
        public function getOutputDirectory() {
            return $this->outputDirectory;
        }

        /**
         * @return string
         */
        public function getLicenseContent() {
            return $this->licenseContent;
        }

        public function getConfigOutputPath() {
            return PathOperations::join($this->getOutputDirectory(), "config_pro.php");
        }

        public function writeLicense($proPackageID, $licenseContent) {
            $configBuilder = new ProConfigBuilder($proPackageID);
            $licensePath = PathOperations::join($this->getOutputDirectory(),
                $configBuilder->generateRelativeLicensePath());

            if (file_put_contents($licensePath, $licenseContent) === false)
                throw new LocalizableException("Could not write license file to $licensePath",
                    LocalizableExceptionDefinition::$LICENSE_WRITE_ERROR, array("path" => $licensePath));
        }

        public function writeConfig($configContent) {
            if (file_put_contents($this->getConfigOutputPath(), $configContent) === false)
                throw new LocalizableException("Could not write pro config to " . $this->getConfigOutputPath(),
                    LocalizableExceptionDefinition::$LICENSE_WRITE_ERROR,
                    array("path" => $this->getConfigOutputPath()));
        }

        public function renderConfig($configTemplatePath, $proPackageID) {
            $configBuilder = new ProConfigBuilder($proPackageID);
            return $configBuilder->renderProConfig($configTemplatePath);
        }

        public function writeProFiles($configTemplatePath) {
            $this->validateNewLicenseAgainstExisting();
            $newLicense = $this->getLicenseData();
            $proPackageId = $this->getProPackageID($newLicense['email']);
            $this->writeLicense($proPackageId, $this->getLicenseContent());
            $configContent = $this->renderConfig($configTemplatePath, $proPackageId);
            $this->writeConfig($configContent);
        }
    }