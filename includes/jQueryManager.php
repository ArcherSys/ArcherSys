<?php
 namespace ArcherSys\Viewer;
 /*
  * @package ArcherSysOS
  */
 class jQueryManager{
  /* 
   * The Jquery Asset Manager
   */
 	static function addjQuery(){
 		echo '<script src="/core/js/jquery.js"></script>';
 	}
 	static function addjQueryUI(){
 		echo "<script src='/core/js/jquery-ui.min.js'></script>";
 	}
 	static function addjQueryUICSS($styleseed){
 		switch($styleseed){
 			case "main":
 				echo "<link rel='stylesheet' href='/core/css/jquery-ui.css'>";
 			break;
 			case "theme":
 				echo "<link rel='stylesheet' href='/core/css/jquery-ui.theme.min.css'>";
 			break;
 			case "structure":
 				echo "<link rel='stylesheet' href='/core/css/jquery-ui.structure.min.css'>";
 			break;
 			default:
 				throw new Exception();
 			break;
 					
 		}
 	}
 	static function addTabs($id){
  echo "<script type=\"text/javascript\"> $(function() {var tabs = $( \"#".$id."\" ).tabs(); tabs.find( '.ui-tabs-nav' ).sortable({axis: \"x\",stop: function() {tabs.tabs( \"refresh\" ); },
  		});
  		});
</script>";
 	}
  	}
  	class TabsDefinition{
  		function __construct($id,array $ids,array $content){
  			$this->id = $id;
  			$this->ids = $ids;
  			$this->content = $content;
  		}
  		function render(){
  			echo "<div id='".$this->id."'>";
  		    echo "<ul>";
  		   foreach ($this->ids as $id => $title){
  		   	echo '<li><a href="#'.$id.'">'.$title.'</a></li>';
  		   }
  		echo '</ul>';
  		 foreach($this->content as $id => $contentfunc){
  		 	echo '<div id="'.$id.'">';
  		 	$contentfunc();
  		 	echo '</div>';
  		 }
  		echo '</div>';
  		}
  	}
 