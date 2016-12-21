<?php

    require_once(dirname(__FILE__) . '/ListItem.php');
    require_once(dirname(__FILE__) . '/FullAccessPermissionSet.php');


    abstract class WindowsFTPListColumnIndex {
        const Month = 0;
        const Day = 1;
        const Year = 2;
        const Hour = 3;
        const Minute = 4;
        const AmPm = 5;
        const DirectoryOrSize = 6;
        const Name = 7;
    }

    class WindowsFTPListItem extends ListItem {
        public function __construct($itemLine) {
            if (!preg_match('/^(\d+)-(\d+)-(\d+)\s+(\d+):(\d+)(A|P)M(.{22})(.*)$/', $itemLine, $matches)) {
                throw new UnexpectedValueException("FTP list item was not in the correct format.");
            }

            $this->parseModificationDate(
                intval($matches[WindowsFTPListColumnIndex::Minute + 1]),
                intval($matches[WindowsFTPListColumnIndex::Hour + 1]),
                $matches[WindowsFTPListColumnIndex::AmPm + 1],
                intval($matches[WindowsFTPListColumnIndex::Day + 1]),
                intval($matches[WindowsFTPListColumnIndex::Month + 1]),
                intval($matches[WindowsFTPListColumnIndex::Year + 1])
            );

            $this->parseDirectoryOrSize($matches[WindowsFTPListColumnIndex::DirectoryOrSize + 1]);

            $this->name = $matches[WindowsFTPListColumnIndex::Name + 1];

            $this->setupStaticItems();
        }

        private function setupStaticItems() {
            // these are the same for all files on windows servers
            $this->ownerPermissions = new FullAccessPermissionSet();
            $this->groupPermissions = new FullAccessPermissionSet();
            $this->otherPermissions = new FullAccessPermissionSet();

            $this->ownerUserName = '';
            $this->ownerGroupName = '';

            $this->link = false;
            $this->linkCount = 1;
        }

        private function parseModificationDate($minute, $hour, $amPm, $day, $month, $year) {
            if ($amPm == "P")
                $hour += 12;

            $this->modificationDate = mktime($hour, $minute, 0, $month, $day, $year);
        }

        private function parseDirectoryOrSize($directoryOrSize) {
            $directoryOrSize = trim($directoryOrSize);

            if($directoryOrSize == "<DIR>") {
                $this->size = 0;
                $this->directory = true;
            } else {
                $this->size = intval($directoryOrSize);
                $this->directory = false;
            }
        }
    }
