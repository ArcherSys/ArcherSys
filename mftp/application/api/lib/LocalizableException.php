<?php

    abstract class LocalizableExceptionDefinition {
        static public $FETCH_IN_PROGRESS_ERROR = "FETCH_IN_PROGRESS_ERROR";
        static public $FETCH_FAILED_ERROR = "FETCH_FAILED_ERROR";
        static public $PRIVATE_KEY_LOAD_ERROR = "PRIVATE_KEY_LOAD_ERROR";
        static public $PUBLIC_KEY_LOAD_ERROR = "PUBLIC_KEY_LOAD_ERROR";
        static public $DECRYPT_ERROR = "DECRYPT_ERROR";
        static public $CONNECTION_FAILURE_ERROR = "CONNECTION_FAILURE_ERROR";
        static public $UNCONNECTED_DISCONNECT_ERROR = "UNCONNECTED_DISCONNECT_ERROR";
        static public $FILE_DOES_NOT_EXIST_ERROR = "FILE_DOES_NOT_EXIST_ERROR";
        static public $FILE_EXISTS_ERROR = "FILE_EXISTS_ERROR";
        static public $FILE_PERMISSION_ERROR = "FILE_PERMISSION_ERROR";
        static public $GENERAL_FILE_SOURCE_ERROR = "GENERAL_FILE_SOURCE_ERROR";
        static public $OPERATION_BEFORE_CONNECTION_ERROR = "OPERATION_BEFORE_CONNECTION_ERROR";
        static public $OPERATION_BEFORE_AUTHENTICATION_ERROR = "OPERATION_BEFORE_CONNECTION_ERROR";
        static public $AUTHENTICATION_BEFORE_CONNECTION_ERROR = "AUTHENTICATION_BEFORE_CONNECTION_ERROR";
        static public $PASSIVE_MODE_BEFORE_AUTHENTICATION_ERROR = "PASSIVE_MODE_BEFORE_AUTHENTICATION_ERROR";
        static public $FAILED_TO_SET_PASSIVE_MODE_ERROR = "FAILED_TO_SET_PASSIVE_MODE_ERROR";
        static public $AUTHENTICATION_FAILED_ERROR = "AUTHENTICATION_FAILED_ERROR";
        static public $LICENSE_READ_FAILED_ERROR = "LICENSE_READ_FAILED_ERROR";
        static public $LIST_DIRECTORY_FAILED_ERROR = "LIST_DIRECTORY_FAILED_ERROR";
        static public $GET_SYSTEM_TYPE_BEFORE_CONNECTION_ERROR = "GET_SYSTEM_TYPE_FAILED_ERROR";
        static public $GET_SYSTEM_TYPE_FAILED_ERROR = "GET_SYSTEM_TYPE_FAILED_ERROR";
        static public $FAILED_TO_CLOSE_CONNECTION_ERROR = "FAILED_TO_CLOSE_CONNECTION_ERROR";
        static public $GET_WORKING_DIRECTORY_BEFORE_CONNECTION_ERROR = "GET_WORKING_DIRECTORY_BEFORE_CONNECTION_ERROR";
        static public $DEBIAN_PRIVATE_KEY_BUG_ERROR = "DEBIAN_PRIVATE_KEY_BUG_ERROR";
        static public $COULD_NOT_LOAD_PROFILE_DATA_ERROR = "COULD_NOT_LOAD_PROFILE_DATA_ERROR";
        static public $PROFILE_NOT_READABLE_ERROR = "PROFILE_NOT_READABLE_ERROR";
        static public $PROFILE_SIZE_READ_ERROR = "PROFILE_SIZE_READ_ERROR";
        static public $UNSUPPORTED_CIPHER_ERROR = "UNSUPPORTED_CIPHER_ERROR";
        static public $PROBABLE_INCORRECT_PASSWORD_ERROR = "PROBABLE_INCORRECT_PASSWORD_ERROR";
        static public $IV_GENERATE_ERROR = "IV_GENERATE_ERROR";
        static public $SETTINGS_READ_ERROR = "SETTINGS_READ_ERROR";
        static public $SETTINGS_WRITE_ERROR = "SETTINGS_WRITE_ERROR";
        static public $ARCHIVE_READ_ERROR = "ARCHIVE_READ_ERROR";
        static public $LICENSE_WRITE_ERROR = "LICENSE_WRITE_ERROR";
        static public $PRO_CONFIG_WRITE_ERROR = "PRO_CONFIG_WRITE_ERROR";
        static public $REPLACEMENT_LICENSE_OLDER_ERROR = "REPLACEMENT_LICENSE_OLDER_ERROR";
        static public $INVALID_POSTED_LICENSE_ERROR = "INVALID_POSTED_LICENSE_ERROR";
        static public $SFTP_AUTHENTICATION_NOT_ENABLED = "SFTP_AUTHENTICATION_NOT_ENABLED";
    }

    // i wanted this to be a static member on LocalizableExceptionCodeLookup but then i would have to instantiate it
    // every time due to PHP not allowing expressions in class definitions. this global is the lesser of two evils
    // or make it a singleton soon
    // todo make LocalizableExceptionCodeLookup a singleton
    $EXCEPTION_CODE_MAP = array(
        LocalizableExceptionDefinition::$FETCH_IN_PROGRESS_ERROR,
        LocalizableExceptionDefinition::$FETCH_FAILED_ERROR,
        LocalizableExceptionDefinition::$PRIVATE_KEY_LOAD_ERROR,
        LocalizableExceptionDefinition::$PUBLIC_KEY_LOAD_ERROR,
        LocalizableExceptionDefinition::$DECRYPT_ERROR,
        LocalizableExceptionDefinition::$CONNECTION_FAILURE_ERROR,
        LocalizableExceptionDefinition::$UNCONNECTED_DISCONNECT_ERROR,
        LocalizableExceptionDefinition::$FILE_DOES_NOT_EXIST_ERROR,
        LocalizableExceptionDefinition::$FILE_EXISTS_ERROR,
        LocalizableExceptionDefinition::$FILE_PERMISSION_ERROR,
        LocalizableExceptionDefinition::$GENERAL_FILE_SOURCE_ERROR,
        LocalizableExceptionDefinition::$OPERATION_BEFORE_CONNECTION_ERROR,
        LocalizableExceptionDefinition::$OPERATION_BEFORE_AUTHENTICATION_ERROR,
        LocalizableExceptionDefinition::$AUTHENTICATION_BEFORE_CONNECTION_ERROR,
        LocalizableExceptionDefinition::$PASSIVE_MODE_BEFORE_AUTHENTICATION_ERROR,
        LocalizableExceptionDefinition::$FAILED_TO_SET_PASSIVE_MODE_ERROR,
        LocalizableExceptionDefinition::$AUTHENTICATION_FAILED_ERROR,
        LocalizableExceptionDefinition::$LICENSE_READ_FAILED_ERROR,
        LocalizableExceptionDefinition::$LIST_DIRECTORY_FAILED_ERROR,
        LocalizableExceptionDefinition::$GET_SYSTEM_TYPE_BEFORE_CONNECTION_ERROR,
        LocalizableExceptionDefinition::$GET_SYSTEM_TYPE_FAILED_ERROR,
        LocalizableExceptionDefinition::$FAILED_TO_CLOSE_CONNECTION_ERROR,
        LocalizableExceptionDefinition::$GET_WORKING_DIRECTORY_BEFORE_CONNECTION_ERROR,
        LocalizableExceptionDefinition::$DEBIAN_PRIVATE_KEY_BUG_ERROR,
        LocalizableExceptionDefinition::$COULD_NOT_LOAD_PROFILE_DATA_ERROR,
        LocalizableExceptionDefinition::$PROFILE_NOT_READABLE_ERROR,
        LocalizableExceptionDefinition::$PROFILE_SIZE_READ_ERROR,
        LocalizableExceptionDefinition::$UNSUPPORTED_CIPHER_ERROR,
        LocalizableExceptionDefinition::$PROBABLE_INCORRECT_PASSWORD_ERROR,
        LocalizableExceptionDefinition::$IV_GENERATE_ERROR,
        LocalizableExceptionDefinition::$SETTINGS_READ_ERROR,
        LocalizableExceptionDefinition::$SETTINGS_WRITE_ERROR,
        LocalizableExceptionDefinition::$ARCHIVE_READ_ERROR,
        LocalizableExceptionDefinition::$LICENSE_WRITE_ERROR,
        LocalizableExceptionDefinition::$PRO_CONFIG_WRITE_ERROR,
        LocalizableExceptionDefinition::$REPLACEMENT_LICENSE_OLDER_ERROR,
        LocalizableExceptionDefinition::$INVALID_POSTED_LICENSE_ERROR,
        LocalizableExceptionDefinition::$SFTP_AUTHENTICATION_NOT_ENABLED
    );

    abstract class LocalizableExceptionCodeLookup {
        static function codeToName($errorCode) {
            global $EXCEPTION_CODE_MAP;
            return $EXCEPTION_CODE_MAP[$errorCode];
        }

        static function nameToCode($errorName) {
            global $EXCEPTION_CODE_MAP;
            return array_search($errorName, $EXCEPTION_CODE_MAP);
        }
    }

    class LocalizableException extends Exception {
        /**
         * @var array
         */
        private $context;

        public function __construct($message, $errorName, $context = null, $previous = null) {
            $code = LocalizableExceptionCodeLookup::nameToCode($errorName);

            parent::__construct($message, $code, $previous);

            $this->context = $context;
        }

        /**
         * @return array
         */
        public function getContext() {
            return $this->context;
        }
    }