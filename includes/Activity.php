<?php
namespace ArcherSys\Logic;
/**
 * @abstract
 */
abstract class AbstractActivity{
	
	abstract function __construct();
	abstract function __call();
	/**
	 * @return string $cmd
	 */
	abstract function __toString();
	
	
}
/** A shell command used as an Activity
 *
 *
 *
 */
class ShellActivity extends AbstractActivity{
	
	/**
	 * @param $cmd (String) - The Command to Run
	 * @return new ShellActivity
	 */
	   function __construct($cmd){
	       $this->cmd = $cmd;
	   }
	   /**
	    * (non-PHPdoc)
	    * @see \ArcherSys\Logic\AbstractActivity::__toString()
	    */
	   function __toString(){
	   	return $this->cmd;
	   }
	   function __call($use_system){
	   	 if($use_system){
	   	 	system($this->cmd);
	   	 }else{
	   	 	exec($this->cmd);
	   	 }
	   } 
}