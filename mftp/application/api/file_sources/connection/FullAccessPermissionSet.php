<?php

    require_once(dirname(__FILE__) . "/PermissionSet.php");

    class FullAccessPermissionSet extends PermissionSet {
        public function __construct() {
            $this->readable = true;
            $this->writable = true;
            $this->executable = true;
        }
    }