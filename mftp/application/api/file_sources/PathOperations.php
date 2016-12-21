<?php

    class PathOperations {
        public static function join() {
            $pathComponents = array();

            foreach (func_get_args() as $pathComponent) {
                if ($pathComponent !== '') {
                    if (substr($pathComponent, 0, 1) == '/')
                        $pathComponents = array();  // if we're back at the root then reset the array
                    $pathComponents[] = $pathComponent;
                }

            }

            return preg_replace('#/+#', '/', join('/', $pathComponents));
        }

        public static function normalize($path) {
            $pathComponents = array();
            $realPathComponentFound = false;  // ..s should be resolved only if they aren't leading the path
            $pathPrefix = substr($path, 0, 1) == '/' ? '/' : '';

            foreach (explode("/", $path) as $pathComponent) {
                if (strlen($pathComponent) == 0 || $pathComponent == '.')
                    continue;

                if ($pathComponent == '..' && $realPathComponentFound) {
                    unset($pathComponents[count($pathComponents) - 1]);
                    continue;
                }

                $pathComponents[] = $pathComponent;
                $realPathComponentFound = true;
            }

            return $pathPrefix . join("/", $pathComponents);
        }

        public static function directoriesMatch($dir1, $dir2) {
            return PathOperations::normalize($dir1) == PathOperations::normalize($dir2);
        }

        public static function directoriesInPath($directoryPath) {
            $directories = array();
            while ($directoryPath != "/" && $directoryPath != null && $directoryPath != "") {
                $directories[] = $directoryPath;
                $directoryPath = dirname($directoryPath);
            }

            return $directories;
        }

        public static function ensureTrailingSlash($path) {
            if(strlen($path) == 0)
                return "/";

            if(substr($path, strlen($path) - 1, 1) != "/")
                $path .= "/";

            return $path;
        }
    }