<?php
    // Provides backwards compatible JsonSerialize interface for PHP < 5.4

    if (!interface_exists("JsonSerializable")) {
        interface JsonSerializable {
            public function jsonSerialize();
        }
    }
