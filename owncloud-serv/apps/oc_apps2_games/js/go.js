/**
// +-----------------------------------------------------------------------+
// | Copyright (C) 2014, ed-237                                            |
// +-----------------------------------------------------------------------+
// | This file is free software; you can redistribute it and/or modify     |
// | it under the terms of the CeCIll v2.1 as published by three French    |
// | public research organisations, the CEA, the CNRS and INRIA            |
// | This file is distributed in the hope that it will be useful           |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of        |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the          |
// | CeCIll License for more details.                                      |
// | http://www.cecill.info/licences/Licence_CeCILL_V2.1-en.txt            |
// +-----------------------------------------------------------------------+
// | ownCloud Games Integration (c) 2014 Pierre Fauconnier                 |
// | http://oc-apps2.sourceforge.net/                                      |
// +-----------------------------------------------------------------------+
*/
// Go from list to iframe, and back
function go( e ) {
//       --
	var	myDiv	= document.getElementById('apps2_games_list'),
		myFrame	= document.getElementById('apps2_games_iframe'),
		myBtn	= document.getElementById('apps2_games_back');
	if ( e.ctrlKey )
		myFrame.contentDocument.location.reload()
	else
		myFrame.src	= e.currentTarget.href;
//
	myDiv.style.display	='none';
	myBtn.style.display	='inline-block';
	myFrame.style.display	='block';
	return false;
}

function back() {
//       ----
	var	myDiv	= document.getElementById('apps2_games_list'),
		myFrame	= document.getElementById('apps2_games_iframe'),
		myBtn	= document.getElementById('apps2_games_back');
	myFrame.style.display	='none';
	myFrame.contentDocument.open();
	myFrame.contentDocument.clear();
	myFrame.contentDocument.close();
	myBtn.style.display	='none';
	myDiv.style.display	='block';
}

document.addEventListener('DOMContentLoaded', function () {
	var	myList = document.getElementsByClassName('apps2_games_href'),
		i;
	for ( i=0; i < myList.length; i++ ) {
		myList[i].onclick = go;
	}
	var	myBtn	= document.getElementById('apps2_games_back');
	
	myBtn.style.display	='none';
	myBtn.onclick		= back;
});