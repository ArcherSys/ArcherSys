<?php
   require "Abstracts.php";
    namespace ArcherSys;
     use ArcherSys/Abstracts/AbstractComponent;
   class StartScreenModule extends AbstractComponent{
       public $title;
       public $cssData;
       public $href;
       public $subheading;
       function __construct($data,$title,$href,$subheading){
           if(is_array($data)){
           foreach($data as $property=>$value){
             $this->cssData[$property] = $value;
          }
       }
          $this->cssClass = "module ".$this->cssData["color"]." ".$this->cssData["size"]." img ".$this->cssData["image"];
          $this->title = $title;
          $this->href = $href;
          $this->subheading = $subheading;
           
        }
       function add(){
          echo "<div class=\"".$this->cssClass."\"><h2 class=\"title\">".$this->title."</h2><p class=\"subheading\"><a href=\"".$this->href"\">".$this->subheading."</a></p></div>";
}
}