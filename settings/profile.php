<?php

require_once $_SERVER["DOCUMENT_ROOT"]."/includes/View.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/includes/LogicManager.php";

require_once $_SERVER["DOCUMENT_ROOT"]."/includes/Form.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/includes/jQueryManager.php";
use ArcherSys\Viewer\Contrib\View;
use ArcherSys\Viewer\LogicManager;
use ArcherSys\UserInput\FileForm;
use ArcherSys\UserInput\TextInput;
use ArcherSys\UserInput\FileInput;
use ArcherSys\UserInput\Selector;
use ArcherSys\UserInput\OptionItem;
use ArcherSys\Viewer\jQueryManager;
$profiler = new View("Edit Profile",function(){
    ?>
    <link rel="stylesheet" href="profile.css">
    <?php
},function(){
  $profile_form = new FileForm("api/profile.php","Save My Profile","POST");
  $profile_form->addField(new FileInput("pic"));
  $profile_form->addField(new TextInput("profile_name","Enter your username",100));
  $timez = new Selector("timezone");
  $timez->addOption(new OptionItem("America/New_York","EST"));
  $profile_form->addField($timez);
  echo $profile_form;
  ?>
  <button>Go back</button>
  <?php
});
?>
