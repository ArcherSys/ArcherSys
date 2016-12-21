<?php

    /**
     * @param $val mixed
     * @param $allowNull bool
     * @param $isTypeFunction callable
     * @param $typeName string
     */
    function _validateType($val, $allowNull, $isTypeFunction, $typeName) {
        if ($allowNull && is_null($val))
            return;

        if (!call_user_func($isTypeFunction, $val))
            throw new InvalidArgumentException("Argument must be $typeName, got " . gettype($val) . " type '$val'.");
    }

    class Validation {
        /**
         * @param $val mixed
         * @param $argName string
         */
        public static function validateNonEmptyString($val, $argName = '') {
            if (!is_string($val) || strlen($val) == 0)
                throw new InvalidArgumentException("Argument $argName must be non zero-length string. Got: \"$val\"");
        }

        /**
         * @param $mask int|null
         * @param $allowNull bool
         */
        public static function validatePermissionMask($mask, $allowNull = false) {
            Validation::validateInteger($mask, $allowNull);

            if ($mask < 0 || $mask > 0777)
                throw new InvalidArgumentException(sprintf("File mode out of range: 0%o.", $mask));
        }

        /**
         * @param $val int|null
         * @param bool $allowNull
         */
        public static function validateInteger($val, $allowNull = false) {
            _validateType($val, $allowNull, 'is_int', "integer");
        }

        /**
         * @param $val string|null
         * @param bool $allowNull
         */
        public static function validateString($val, $allowNull = false) {
            _validateType($val, $allowNull, 'is_string', "string");
        }

        public static function validateBoolean($val, $allowNull = false) {
            _validateType($val, $allowNull, 'is_bool', "boolean");
        }

        /**
         * @param $arrayOrNull array|null
         * @param $key string
         * @return mixed|null
         */
        public static function getArrayValueOrNull($arrayOrNull, $key) {
            if (!is_array($arrayOrNull))
                return null;

            if (!array_key_exists($key, $arrayOrNull))
                return null;

            return $arrayOrNull[$key];
        }
    }
    