/**
 * from		http://www.dreamincode.net/forums/topic/116033-message-box/
 * by		http://www.linkedin.com/in/ahmadmurey
 * usage
 *	msgbox('Example 1','Hello,<br />This is a basic message',0,{});
 *	msgbox('Example 2','Message with buttons',100,
		[
			 {c:'Yes',fn:function ()  { alert('Yes');} }
			,{c:'No', fn:function (a) { alert(a);}  }
		]
	);
 *	msgbox('Example 3'
 		,'Define a default button<br />See focused button<br />Hit [<span style="color:orange;">Enter</span>] key'
 		,200
		,[
			 {c:'Button 1',fn:ex3z}
			,{c:'Button 2',fn:ex3z, dflt:true}
			,{c:'Button 3',fn:ex3z}
		]
	);
	function ex3z(a){
		alert('You clicked '+a);
	}
 *	msgbox('Example 4','Passing data to the button\'s event handler'
 		,0
 		,[
 			 {c:'Option 1',fn:ex4_opt1,d:'Hello there'}
 			,{c:'Option 2',fn:ex4_opt2,d:'How are you?'}
 			,{c:'Option 3',fn:ex4_opt3,d:'Hope you're Ok'}
 		]
 	);
	function ex4_opt1(a){
		alert(a);
	}
	function ex4_opt2(a){
		alert(a);
	}
	function ex4_opt3(a){
		alert(a);
	}

*	msgbox('Title','<table>'+
			'<thead><tr>'+	'<th data-type="T">Date</th>'+
					'<th class="asc" data-type="N">Points</th>+
					'<th>Names</th>'</tr></thead>'+
			'<tbody><tr>'+	'<td data-v=1>mon jan,1 2014</td>'+
			…
			;
*		data-type in headers	{N,T,S} for Numbers, Timestamps, Strings
*		class			{asc,desc,}
*		case data-type = 'T', each corresponding <td> in <tbody> should contain a data-v containing a number that will be used to sort the column

 */
//
// ------------------------------ msgbox ------------------------------
//buttons=[{c:sCaption, fn:fnButton, d:oDataObject, dflt:bAcceptButton}, … ]
function msgbox(theCaption,theBody,theWidth,theButtons) {
//       ------
	var ownAppendChild = function ( theParent, theChild, theAttribs ) {
//	    --------------
//	Create HTML element + Add properties/attribute
		if ( theParent == null )	theParent = document.body;

		var myElem	= document.createElement(theChild);
		if ( theAttribs != undefined ) {
			for ( var p in theAttribs ) {
				if ( p=='innerHTML')
					myElem.innerHTML	= theAttribs[p];
				else {
					if ( p == 'class')
						myElem.className= theAttribs[p];
					myElem.setAttribute(p, theAttribs[p]);
				}
			}
		}
		theParent.appendChild(myElem);
		return myElem;
	}

	var ownRemoveMessage = function () {
//	    ----------------
		if ( msgbox.messages.length > 0 ) {
			document.body.removeChild(msgbox.messages[msgbox.messages.length-1].container);
			msgbox.messages.pop();
			if ( msgbox.messages.length > 0 ) {
				with ( msgbox.messages[msgbox.messages.length-1] ) {
					if ( defaultButton != null ) {
						defaultButton.focus();
						defaultButton.onblur = function () {
									var self=this;
									setTimeout(function(){self.focus()},0)
								};
					}
					setTimeout(function(){container.focus()},0)// setTimeout is a workaround for Opera;
				}
			}
		}
	}
	
	var ownSort = function ( e ) {
//	    -------
		var	 myArr	= []
			,i	= 0
			,myBody	= this.parentNode.parentNode.parentNode.tBodies[0]
			;
		if ( this.classList.contains('asc')
		||   this.classList.contains('desc') ) {
//		Just reverse the order of the rows of the table
			var	 myLength	= myBody.rows.length
				;

			for ( ; i<myLength; i++ ) {
				myArr[i] = myBody.rows[i];
			}
			for ( i=myLength-1; i>=0; i-- ) {
				myBody.appendChild(myArr[i]);
			}
//		Adjust the sort order indicator (actually, the name of the class)
			this.classList.toggle('asc');
			this.classList.toggle('desc');
		} else {
//		Sort column ascending
			var	 myHead		= this.parentNode.children
				,myList		= {}
				,myCol		= 0
				,myFunc		= {}
				;
//		Set the sort order indicator
			for ( ; i < myHead.length; i++ ) {
				if ( myHead[i] == this ) {
					myCol	= i;
					this.classList.add('asc');
				} else {
					myHead[i].classList.remove('asc');
					myHead[i].classList.remove('desc');
				}
			}
//		Select the right compare function
			if ( (this.dataset.type === 'N')
			||   (this.dataset.type === 'T') ) {
				myFunc = function ( a, b ) {
						return a[0] - b[0];
					};
			} else { // if ( this.dataset.type === 'S')
				myFunc = function ( a, b ) {
						if ( a[0] === b[0] )	return 0;
						if ( a[0] < b[0] )	return -1;
						return 1;
					};
			}		
//		Build the array to be sorted
			var	 myRows		= myBody.rows
				,myValue	= {}
				;
			for ( i=0 ; i<myRows.length; i++ ) {
//			Check column type in order to retrieve the right value
				if ( this.dataset.type === 'N') {
					myValue = parseFloat(myRows[i].cells[myCol].textContent);
					if ( isNaN(myValue) )	myValue = 0;
				} else if ( this.dataset.type === 'T') {
					myValue = myRows[i].cells[myCol].dataset.v;
					if ( isNaN(myValue) )	myValue = 0;
				} else { // if ( this.dataset.type === 'S')
					myValue = myRows[i].cells[myCol].textContent;
				}
				myArr[i] = [ myValue, myRows[i] ];
			}
//		Sort the array
			myArr.sort( myFunc );
//		Rebuild the table from the sorted array
			for ( i=0 ; i<myArr.length; i++ ) {
				myBody.appendChild( myArr[i][1] );
			}
		}	
		delete myArr;
	};
	
	if ( msgbox.messages == null )	msgbox.messages = new Array();
	
	var myVeil = ownAppendChild(document.body,'div',{'class':'msgbox-veil', tabindex:0});// tabindex is important to identifys that an element is keyboard selectable
	myVeil.onkeydown = function ( e ) {
				e = (!e) ? window.event : e;
				if ( e.keyCode == 27 ) {
					ownRemoveMessage();
				}
			};
			
	var myBox = ownAppendChild(myVeil,'div',{'class':'msgbox-div'});
	if ( theWidth > 0 )	myBox.style.width = theWidth+'px';
	
	var p=ownAppendChild(myBox,'p',{'class':'msgbox-title'});
	ownAppendChild(p,'span',{'class':'caption', innerHTML:theCaption});
	
	var myCloseBtn = ownAppendChild(p,'span',{'class':'msgbox-close'});
	myCloseBtn.onclick=ownRemoveMessage;
	
	var myBody = ownAppendChild(myBox,'p',{'class':'msgbox-body', innerHTML:theBody});
//	Check 'th' in order to sort columns, or not
// <table><thead></thead><tbody></tbody></table>
	var myList = myBody.getElementsByTagName('th');
	var myDataset = {};
	for ( var i=0; i<myList.length; i++ ) {
		myDataset = myList[i].dataset;
		if ( myDataset ) {
			if ( myDataset.type ) {
				myList[i].addEventListener('click', ownSort, false);
			}
		}
	}
//
	var myDefaultBtn = null;
	if ( theButtons != null ) {
		var myBtnGrp = ownAppendChild(myBox,'p',{'class':'msgbox-buttons'});

		for ( i=0; i<theButtons.length; i++ ) {
			var myItem = theButtons[i];
			if ( myItem.c == null )		myItem.c = 'Button '+i;
			if ( myItem.d == null)		myItem.d = myItem.c;
			
			var myBtn = ownAppendChild(myBtnGrp,'input',{type:'button', value:myItem.c});

			if ( myItem.fn == null )	myItem.fn=function(){return false;};
			myBtn.fn	= myItem.fn;
			myBtn.d		= myItem.d;
			myBtn.onclick	= function () {
						ownRemoveMessage();
						this.fn(this.d);
					};
			if ( myItem.dflt )	myDefaultBtn = myBtn;
		}
	}
	if ( msgbox.messages.length > 0 ) {
		with(msgbox.messages[msgbox.messages.length-1]){
			if ( defaultButton != null )	defaultButton.onblur = null;
		}
	}
	msgbox.messages[msgbox.messages.length] = {container:myVeil,defaultButton:myDefaultBtn};

	if ( myDefaultBtn != null ) {
		myDefaultBtn.focus();
		myDefaultBtn.onblur = function () {var self=this;setTimeout(function(){self.focus()},0)};// setTimeout is a FF workaround;
	}
	
	myVeil.focus();

	myBox.style.marginTop = -(myBox.offsetHeight/2)+'px';
	myBox.style.marginLeft= -(myBox.offsetWidth/2)+'px';

	return myBox;
}