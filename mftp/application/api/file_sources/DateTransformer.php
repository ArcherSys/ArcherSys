<?php

    class DateTransformer {
        private static $instance = null;
        private $monthIndexLookup;

        public static function getTransformer() {
            if (static::$instance === null) {
                static::$instance = new static();
            }

            return static::$instance;
        }

        private function __construct() {
            $this->monthIndexLookup = array();

            for($monthNumber = 12; $monthNumber > 0; --$monthNumber) {
                $monthShortName = strftime('%b', mktime(0, 0, 0, $monthNumber));

                $this->monthIndexLookup[$monthShortName] = $monthNumber - 1;
            }
        }

        private function __clone() {
        }

        private function __wakeup() {
        }

        public function monthShortNameToIndex($monthShortName) {
            return $this->monthIndexLookup[$monthShortName];
        }
    }