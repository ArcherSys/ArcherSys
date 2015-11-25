<?php

/*
 * every widget has to implement this interface
 */
interface interfaceWidget {
	
// ------- INHERIT METHODS ------------------------------------------

	/*
	 * @return complete html code for the current widget
	 */
	public function getData();
	


// ------- INDIVIDUAL METHODS ---------------------------------------
	
	/*
	 * here happend the individual stuff
	 */
	public function getWidgetData ();
	
}

?>