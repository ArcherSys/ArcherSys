<?php

    require_once(dirname(__FILE__) . '/ListItem.php');
    require_once(dirname(__FILE__) . '/IntegerPermissionSet.php');
    require_once(dirname(__FILE__) . '/../Validation.php');

    class StatOutputListItem extends ListItem {
        public function __construct($name, $fileStat) {
            $this->name = $name;
            $this->link = false; // appears to not matter for SFTP
            $this->directory = ($fileStat['mode'] & 0x4000) != 0;  // 16384 = is directory bit
            $permissionBits = $fileStat['mode'] & PERMISSION_BIT_MASK;
            $this->ownerPermissions = new IntegerPermissionSet($permissionBits >> 6);
            $this->groupPermissions = new IntegerPermissionSet(($permissionBits >> 3) & 0x7);
            $this->otherPermissions = new IntegerPermissionSet($permissionBits & 0x7);
            $this->linkCount = Validation::getArrayValueOrNull($fileStat, 'nlink');
            $this->ownerUserName = $fileStat['uid'];
            $this->ownerGroupName = $fileStat['gid'];
            $this->size = $fileStat['size'];
            $this->modificationDate = $fileStat['mtime'];
        }
    }