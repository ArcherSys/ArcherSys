<?php
    abstract class PermissionSet {
        /**
         * @var boolean
         */
        protected $readable;

        /**
         * @var boolean
         */
        protected $writable;

        /**
         * @var boolean
         */
        protected $executable;

        public function isReadable() {
            return $this->readable;
        }

        public function isWritable() {
            return $this->writable;
        }

        public function isExecutable() {
            return $this->executable;
        }

        public function asNumeric() {
            return ($this->isExecutable() ? 1 : 0) + ($this->isWritable() ? 2 : 0) +
            ($this->isReadable() ? 4 : 0);
        }
    }