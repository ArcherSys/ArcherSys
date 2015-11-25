<?php
namespace ArcherSys\Text;
interface AttentionGrabber {
	function __destruct();
	function __construct($msg);
	function __toString(); 
}
class StrongAttentionGrabber implements AttentionGrabber{
	function __construct($msg){
		$this->msg = $msg;
	}
	function __toString(){
		return "<strong>".$msg."</strong>";
		
	}
	function __destruct(){
		echo $this;
	}
}