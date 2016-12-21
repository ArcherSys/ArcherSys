<?php

    require_once(dirname(__FILE__) . '/../../lib/LocalizableException.php');

    class FileSourceException extends LocalizableException {

    }

    class FileSourceConnectionException extends FileSourceException {

    }

    class FileSourceAuthenticationException extends FileSourceException {

    }

    class FileSourceOperationException extends FileSourceException {

    }

    class FileSourceFileDoesNotExistException extends FileSourceOperationException {

    }

    class FileSourceFileExistsException extends FileSourceOperationException {

    }

    class FileSourceFilePermissionException extends FileSourceOperationException {

    }