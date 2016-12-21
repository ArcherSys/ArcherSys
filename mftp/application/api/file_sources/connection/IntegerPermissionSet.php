<?php
    require_once(dirname(__FILE__) . '/PermissionSet.php');

    class IntegerPermissionSet extends PermissionSet {
        public function __construct($mask) {
            if(!is_int($mask) || $mask < 0 || $mask > 7)
                throw new InvalidArgumentException("Mask must be an integer 0 <= x <= 7");

            $this->readable = ($mask & 4) != 0;
            $this->writable = ($mask & 2) != 0;
            $this->executable = ($mask & 1) != 0;
        }
    }