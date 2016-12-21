<?php

    require_once(dirname(__FILE__) . '/ListItem.php');
    require_once(dirname(__FILE__) . '/StringPermissionSet.php');
    require_once(dirname(__FILE__) . '/../DateTransformer.php');

    abstract class PermLevelStartIndex {
        const Owner = 1;
        const Group = 4;
        const Other = 7;
    }

    abstract class PermissionsFlagIndex {
        const Directory = 0;
        const OwnerRead = 1;
        const OwnerWrite = 2;
        const OwnerExecute = 3;
        const GroupRead = 4;
        const GroupWrite = 5;
        const GroupExecute = 6;
        const OtherRead = 7;
        const OtherWrite = 8;
        const OtherExecute = 9;
    }

    abstract class FTPListColumnIndex {
        const Permissions = 0;
        const LinkCount = 1;
        const OwnerUserName = 2;
        const OwnerGroupName = 3;
        const FileSize = 4;
        const ModificationDate = 5;
        const FileName = 6;
    }

    class FTPListItem extends ListItem {
        public function __construct($itemLine) {
            if (!preg_match('/^([a-z+-]{10})\s+(\d+)\s+([^ ]+)\s+([^ ]+)\s+(\d+)\s+(.{12}) (.*)$/', $itemLine, $matches)) {
                throw new UnexpectedValueException("FTP list item was not in the correct format.");
            }

            // all FTPListColumnIndex must + 1 because $matches[0] is the full result from preg_match
            $this->parsePermissionsFlags($matches[FTPListColumnIndex::Permissions + 1]);
            $this->parseLinkCount($matches[FTPListColumnIndex::LinkCount + 1]);
            $this->ownerUserName = $matches[FTPListColumnIndex::OwnerUserName + 1];
            $this->ownerGroupName = $matches[FTPListColumnIndex::OwnerGroupName + 1];
            $this->parseFileSize($matches[FTPListColumnIndex::FileSize + 1]);
            $this->parseModificationDate($matches[FTPListColumnIndex::ModificationDate + 1]);

            if($this->isLink())
                $this->name = $this->parseNameWithLink($matches[FTPListColumnIndex::FileName + 1]);
            else
                $this->name = $matches[FTPListColumnIndex::FileName + 1];
        }

        private function parsePermissionsFlags($permissionsFlags) {
            $this->directory = substr($permissionsFlags, PermissionsFlagIndex::Directory, 1) == 'd';
            $this->link = substr($permissionsFlags, PermissionsFlagIndex::Directory, 1) == 'l';

            $this->ownerPermissions = new StringPermissionSet(substr($permissionsFlags, PermLevelStartIndex::Owner, 3));
            $this->groupPermissions = new StringPermissionSet(substr($permissionsFlags, PermLevelStartIndex::Group, 3));
            $this->otherPermissions = new StringPermissionSet(substr($permissionsFlags, PermLevelStartIndex::Other, 3));
        }

        private function parseLinkCount($linkCount) {
            $this->linkCount = intval($linkCount);
        }

        private function parseFileSize($fileSize) {
            $this->size = intval($fileSize);
        }

        private function parseModificationDate($modificationDate) {
            /* doing this manually instead of using built in parsing as it's seems more portable and easier */
            $splitDate = preg_split('/\s+/', $modificationDate);
            $dateTransformer = DateTransformer::getTransformer();  // instead of strptime as it is not on windows
            $modificationMonth = $dateTransformer->monthShortNameToIndex($splitDate[0]) + 1;

            $modificationDay = intval($splitDate[1]);

            if (strpos($splitDate[2], ':') !== FALSE) {
                /* if there is a : in the date it contains a time and therefore is of current year */
                $modificationYear = intval(date('Y'));
                $splitTime = explode(':', $splitDate[2]);
                $modificationHour = intval($splitTime[0]);
                $modificationMinute = intval($splitTime[1]);
            } else {
                $modificationYear = intval($splitDate[2]);
                $modificationHour = 0;
                $modificationMinute = 0;
            }

            $this->modificationDate = mktime($modificationHour, $modificationMinute, 0, $modificationMonth,
                $modificationDay, $modificationYear);
        }

        private function parseNameWithLink($nameWithLink){
            $splitName = explode(" -> ", $nameWithLink);
            return $splitName[0];
        }
    }