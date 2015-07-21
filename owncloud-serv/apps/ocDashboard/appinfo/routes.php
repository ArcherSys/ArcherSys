<?php

$this->create('ocDashboard_index', '/')->action(
    function($params){
        require __DIR__ . '/../index.php';
    }
);
