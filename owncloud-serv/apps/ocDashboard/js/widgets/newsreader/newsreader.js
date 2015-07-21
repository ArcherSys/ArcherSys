$(document).ready(function() { bindMarkNewsAsRead(); });


// bind mark as read actions
function bindMarkNewsAsRead() {
	$("#markNewsAsRead").live('click',function(){
			markNewsAsRead();
		}
	);
}


// send ajax request for mark as read action
function markNewsAsRead() {
	showWaitSymbol('newsreader'); 
	ajaxService('newsreader','markAsRead','',function() {
			loadWidget('newsreader');
		}
	);
}