<?php

    require_once(dirname(__FILE__) . "/../PathOperations.php");

    class RecursiveFileFinder {
        private $connection;
        private $baseDirectory;
        private $itemList;

        public function __construct($connection, $baseDirectory) {
            $this->connection = $connection;
            $this->baseDirectory = PathOperations::ensureTrailingSlash($baseDirectory);
            $this->itemList = array();
        }

        public function findFilesInPaths($items = null) {
            return $this->findItems($items, false);
        }

        public function findFilesAndDirectoriesInPaths($items = null) {
            return $this->findItems($items, true);
        }

        private function findItems($items, $includeDirectoriesAndData = false) {
            if($items == null)
                $items = array("");

            foreach ($items as $itemPath) {
                $this->handleFileOrDirectory(PathOperations::join($this->baseDirectory, $itemPath),
                    $includeDirectoriesAndData);
            }

            return $this->itemList;
        }

        private function handleFileOrDirectory($itemPath, $includeDirectoriesAndData) {
            try {
                $directoryList = $this->connection->listDirectory($itemPath, true);
                // get to here it is a dir
                $this->traverseDirectory($itemPath, $includeDirectoriesAndData, $directoryList, 0);
            } catch (FileSourceOperationException $e) {
                if(!$includeDirectoriesAndData)
                    $this->handleFile($itemPath);
            }
        }

        private function handleFile($filePath) {
            $this->itemList[] = substr($filePath, strlen($this->baseDirectory));
        }

        private function handleItem($itemPath, $item) {
            $this->itemList[] = array(substr($itemPath, strlen($this->baseDirectory)), $item);
        }

        private function traverseDirectory($dirPath, $includeDirectoriesAndData, $directoryList = null, $depth = 0) {
            if($depth >= 50)
                return; // we've gone too deep, maybe recursive symlink. bail out

            if($directoryList == null)
                $directoryList = $this->connection->listDirectory($dirPath, true);

            foreach ($directoryList as $item) {
                $itemPath = PathOperations::join($dirPath, $item->getName());

                if($includeDirectoriesAndData)
                    $this->handleItem($itemPath, $item);
                else if(!$item->isDirectory())
                    $this->handleFile($itemPath);

                if ($item->isDirectory())
                    $this->traverseDirectory($itemPath, $includeDirectoriesAndData, null, $depth + 1);
            }
        }
    }