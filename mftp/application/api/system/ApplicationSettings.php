<?php

    require_once(dirname(__FILE__) . "/../lib/LocalizableException.php");
    require_once(dirname(__FILE__) . "/../lib/nicejson.php");

    class ApplicationSettings {
        private $settings;
        private $settingsPath;
        private $settingsReadFailed;

        private static $KEY_SHOW_DOT_FILES = "showDotFiles";
        private static $KEY_LANGUAGE = "language";
        private static $KEY_EDIT_NEW_FILES_IMMEDIATELY = "editNewFilesImmediately";
        private static $KEY_EDITABLE_FILE_EXTENSIONS = "editableFileExtensions";
        private static $KEY_CONNECTION_RESTRICTIONS = "connectionRestrictions";
        private static $KEY_HIDE_PRO_UPGRADE_MESSAGES = "hideProUpgradeMessages";
        private static $KEY_DISABLE_MASTER_LOGIN = "disableMasterLogin";
        private static $KEY_ENCODE_EDITOR_SAVES = "encodeEditorSaves";
        private static $KEY_DISABLE_CHMOD = "disableChmod";
        private static $KEY_DISABLE_FILE_VIEW = "disableFileView";
        private static $KEY_DISABLE_FILE_EDIT = "disableFileEdit";
        private static $KEY_DISABLE_ADD_ONS_BUTTON = "disableAddOnsButton";
        private static $KEY_DISABLE_HELP_BUTTON = "disableHelpButton";
        private static $KEY_HELP_URL = "helpUrl";
        private static $KEY_XHR_TIMEOUT_SECONDS = "xhrTimeoutSeconds";

        private static $DEFAULT_LANUAGE = "en_us";
        private static $DEFAULT_EDITABLE_FILE_EXTENSIONS =
            "txt,htm,html,php,asp,aspx,js,css,xhtml,cfm,pl,py,c,cpp,rb,java,xml";

        private function getValidKeys() {
            // this is kind of like an instance var getter thing so it's up here
            return array(
                self::$KEY_SHOW_DOT_FILES,
                self::$KEY_LANGUAGE,
                self::$KEY_EDIT_NEW_FILES_IMMEDIATELY,
                self::$KEY_EDITABLE_FILE_EXTENSIONS,
                self::$KEY_CONNECTION_RESTRICTIONS,
                self::$KEY_HIDE_PRO_UPGRADE_MESSAGES,
                self::$KEY_DISABLE_MASTER_LOGIN,
                self::$KEY_ENCODE_EDITOR_SAVES,
                self::$KEY_DISABLE_CHMOD,
                self::$KEY_DISABLE_FILE_VIEW,
                self::$KEY_DISABLE_FILE_EDIT,
                self::$KEY_DISABLE_ADD_ONS_BUTTON,
                self::$KEY_DISABLE_HELP_BUTTON,
                self::$KEY_HELP_URL,
                self::$KEY_XHR_TIMEOUT_SECONDS
            );
        }

        private function getDefaults() {
            return array(
                self::$KEY_SHOW_DOT_FILES => true,
                self::$KEY_LANGUAGE => self::$DEFAULT_LANUAGE,
                self::$KEY_EDIT_NEW_FILES_IMMEDIATELY => true,
                self::$KEY_EDITABLE_FILE_EXTENSIONS => self::$DEFAULT_EDITABLE_FILE_EXTENSIONS,
                self::$KEY_CONNECTION_RESTRICTIONS => null,
                self::$KEY_HIDE_PRO_UPGRADE_MESSAGES => false,
                self::$KEY_DISABLE_MASTER_LOGIN => false,
                self::$KEY_ENCODE_EDITOR_SAVES => false,
                self::$KEY_DISABLE_CHMOD => false,
                self::$KEY_DISABLE_FILE_VIEW => false,
                self::$KEY_DISABLE_FILE_EDIT => false,
                self::$KEY_DISABLE_ADD_ONS_BUTTON => false,
                self::$KEY_DISABLE_HELP_BUTTON => false,
                self::$KEY_HELP_URL => null,
                self::$KEY_XHR_TIMEOUT_SECONDS => XHR_DEFAULT_TIMEOUT_SECONDS
            );
        }

        public function __construct($settingsPath) {
            $this->settingsPath = $settingsPath;
            $this->settingsReadFailed = false;

            if (!file_exists($settingsPath))
                $this->settings = array();
            else {
                $settings = json_decode(file_get_contents($settingsPath), true);

                if ($settings == null || !is_array($settings)) {
                    $settings = array();
                    $this->settingsReadFailed = true;
                }

                $this->settings = $settings;
            }
        }

        /**
         * @return boolean
         */
        public function isSettingsReadFailed() {
            return $this->settingsReadFailed;
        }

        public function save() {
            if (!$this->settingsWritable())
                throw new LocalizableException("Could not write settings JSON at " . $this->settingsPath,
                    LocalizableExceptionDefinition::$SETTINGS_WRITE_ERROR, array("path" => $this->settingsPath));

            file_put_contents($this->settingsPath, json_format($this->settings));
        }

        private function settingsWritable() {
            if (file_exists($this->settingsPath))
                return is_writable($this->settingsPath);

            return is_writable(dirname($this->settingsPath));
        }

        private function getSetKey($key) {
            if (isset($this->settings[$key]))
                return $this->settings[$key];

            $defaults = $this->getDefaults();

            return $defaults[$key];
        }

        private function setBool($key, $value) {
            if (!is_bool($value))
                throw new InvalidArgumentException("$key requires a boolean argument, got: \"$value\"");

            $this->settings[$key] = $value;
        }

        private function blankArray($inputArray, $skipKeys) {
            $blankedArray = array();

            foreach ($inputArray as $key => $value) {
                if ($key == "types")
                    $blankedArray[$key] = $value;
                else if (is_array($value))
                    $blankedArray[$key] = $this->blankArray($value, $skipKeys);
                else if(array_search($key, $skipKeys) !== false)
                    $blankedArray[$key] = $value;
                else
                    $blankedArray[$key] = true;
            }

            return $blankedArray;
        }

        public function getSettingsArray() {
            $settings = array();

            foreach ($this->getSettingKeyGetterMap() as $key => $getterName) {
                $settings[$key] = $this->$getterName();
            }

            return $settings;
        }

        public function setFromArray($settingsArray) {
            foreach ($this->getSettingKeySetterMap() as $key => $setterName) {
                if (isset($settingsArray[$key]))
                    $this->$setterName($settingsArray[$key]);
            }
        }

        private function getSetOrGet($isSet, $key) {
            $prefix = $isSet ? 'set' : 'get';
            return $prefix . ucfirst($key);
        }

        private function getAccessorLookupMap($isSet) {
            $validKeys = $this->getValidKeys();

            $settingKeyMap = array();

            foreach ($validKeys as $key) {
                $settingKeyMap[$key] = $this->getSetOrGet($isSet, $key);
            }

            return $settingKeyMap;
        }

        /* public setting setter/getters below */

        private function getSettingKeySetterMap() {
            return $this->getAccessorLookupMap(true);
        }

        private function getSettingKeyGetterMap() {
            return $this->getAccessorLookupMap(false);
        }

        public function getShowDotFiles() {
            return $this->getSetKey(self::$KEY_SHOW_DOT_FILES);
        }

        public function setShowDotFiles($showDotFiles) {
            $this->setBool(self::$KEY_SHOW_DOT_FILES, $showDotFiles);
        }

        public function getLanguage() {
            return $this->getSetKey(self::$KEY_LANGUAGE);
        }

        public function setLanguage($language) {
            $this->settings[self::$KEY_LANGUAGE] = $language;
        }

        public function getEditNewFilesImmediately() {
            return $this->getSetKey(self::$KEY_EDIT_NEW_FILES_IMMEDIATELY);
        }

        public function setEditNewFilesImmediately($editNewFilesImmediately) {
            return $this->setBool(self::$KEY_EDIT_NEW_FILES_IMMEDIATELY, $editNewFilesImmediately);
        }

        public function getEditableFileExtensions() {
            return $this->getSetKey(self::$KEY_EDITABLE_FILE_EXTENSIONS);
        }

        public function setEditableFileExtensions($editableFileExtensions) {
            $this->settings[self::$KEY_EDITABLE_FILE_EXTENSIONS] = $editableFileExtensions;
        }

        public function getConnectionRestrictions() {
            $restrictions = $this->getSetKey(self::$KEY_CONNECTION_RESTRICTIONS);

            if(is_array($restrictions)){
                $restrictions = $this->blankArray($restrictions, array("authenticationModeName", "initialDirectory"));
            }

            return $restrictions;
        }

        public function setConnectionRestrictions($connectionRestrictions) {
            // Not writable because they come in blank todo: make it writable?
            // $this->settings[self::$KEY_CONNECTION_RESTRICTIONS] = $connectionRestrictions;
        }

        public function getUnblankedConnectionRestrictions() {
            return $this->getSetKey(self::$KEY_CONNECTION_RESTRICTIONS);
        }

        public function getHideProUpgradeMessages() {
            return $this->getSetKey(self::$KEY_HIDE_PRO_UPGRADE_MESSAGES);
        }

        public function setHideProUpgradeMessages($hideProUpgradeMessages) {
            $this->setBool(self::$KEY_HIDE_PRO_UPGRADE_MESSAGES, $hideProUpgradeMessages);
        }

        public function getDisableMasterLogin() {
            return $this->getSetKey(self::$KEY_DISABLE_MASTER_LOGIN);
        }

        public function setDisableMasterLogin($disableMasterLogin) {
            $this->setBool(self::$KEY_DISABLE_MASTER_LOGIN, $disableMasterLogin);
        }

        public function getEncodeEditorSaves() {
            return $this->getSetKey(self::$KEY_ENCODE_EDITOR_SAVES);
        }

        public function setEncodeEditorSaves($encodeEditorSaves) {
            $this->setBool(self::$KEY_ENCODE_EDITOR_SAVES, $encodeEditorSaves);
        }

        public function getDisableChmod() {
            return $this->getSetKey(self::$KEY_DISABLE_CHMOD);
        }

        public function setDisableChmod($disableChmod) {
            $this->setBool(self::$KEY_DISABLE_CHMOD, $disableChmod);

        }

        public function getDisableFileView() {
            return $this->getSetKey(self::$KEY_DISABLE_FILE_VIEW);
        }

        public function setDisableFileView($disableFileView) {
            $this->setBool(self::$KEY_DISABLE_FILE_VIEW, $disableFileView);
        }

        public function getDisableFileEdit() {
            return $this->getSetKey(self::$KEY_DISABLE_FILE_EDIT);
        }

        public function setDisableFileEdit($disableFileEdit) {
            $this->setBool(self::$KEY_DISABLE_FILE_VIEW, $disableFileEdit);
        }

        public function getDisableAddOnsButton() {
            return $this->getSetKey(self::$KEY_DISABLE_ADD_ONS_BUTTON);
        }

        public function setDisableAddOnsButton($disableAddOnsButton) {
            $this->setBool(self::$KEY_DISABLE_ADD_ONS_BUTTON, $disableAddOnsButton);
        }

        public function getDisableHelpButton() {
            return $this->getSetKey(self::$KEY_DISABLE_HELP_BUTTON);
        }

        public function setDisableHelpButton($disableHelpButton) {
            $this->setBool(self::$KEY_DISABLE_HELP_BUTTON, $disableHelpButton);
        }

        public function getHelpUrl() {
            return $this->getSetKey(self::$KEY_HELP_URL);
        }

        public function setHelpUrl($helpUrl) {
            $this->setBool(self::$KEY_HELP_URL, $helpUrl);
        }

        public function getXhrTimeoutSeconds() {
            return $this->getSetKey(self::$KEY_XHR_TIMEOUT_SECONDS);
        }

        public function setXhrTimeoutSeconds($xhrTimeoutSeconds) {
            $this->settings[self::$KEY_XHR_TIMEOUT_SECONDS] = intval($xhrTimeoutSeconds);
        }
    }