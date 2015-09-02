/**
* @brief ownCloud Games Integration
*
* @author	Pierre Fauconnier
* @copyright	2014 Pierre Fauconnier
* @license	CeCILL v2.1 - http://www.cecill.info/licences/Licence_CeCILL_V2.1-en.txt
* @site		http://oc-apps2.sourceforge.net/
*/
// Fired by any javascript integrated game
/*
function onProgress(e) {
  var percentComplete = (e.position / e.totalSize)*100;
// ...
}

function onLoad(e) {
// ...
}
*/
// Todo : size of the msgbox might depend on font-size
function onError(e) {
	alert('Error '+ e.target.status +' while receiving XHR document.');
}

function oc_apps2_XHR( theObject, theFunction ) {
//       ------------
// Post <theObject> to the server (.../index.php/.../ajax/switch.php),
// on success, call <theFunction> with string returned by server as object
	var	myParams= JSON.stringify(theObject),
		myPaths	= this.location.pathname.split('/'),
		myPath	= '',
		myXHR	= new XMLHttpRequest();
//	myXHR.onprogress = onProgress;
//	myXHR.open('POST', '../../ajax/switch.php', true);
//	          /  owncloud    /index.php/     apps     /oc_apps2_games
	myPath = '/'+myPaths[1]+'/index.php/'+myPaths[2]+'/'+myPaths[3]+'/ajax/switch.php';
	myXHR.open('POST', myPath, true);

	myXHR.overrideMimeType('application/json');
	myXHR.setRequestHeader('Content-Type','application/json');
//	myXHR.setRequestHeader('Content-Length', myParams.length);	// Unsafe header

	myXHR.onreadystatechange = function (theEvt) {
		if ( myXHR.readyState == 4) {
			if ( myXHR.status == 200) {
				if ( typeof theFunction == 'function') {
//				Check ownCloud stuff
					var myJSON = JSON.parse(myXHR.responseText);
					if ( myJSON.status !== undefined ) {
						msgbox('ownCloud - '+myJSON.status, myJSON.data.message, 200, {});	
					} else {
						theFunction( myJSON );
					}
				}
			} else {
				console.log('Error '+myXHR.status+' while loading results. ('+myXHR.statusText+')\n');
			}
		}
	};
//	myXHR.onload = onLoad;
	myXHR.onerror = onError;
	myXHR.send(myParams);
} // oc_apps2_XHR

function oc_apps2_topN( theObject, theScore, theAscending, fnCompare ) {
//       -------------
// Add theScore to the topN list (sorted ascending or descending by score and date)
	if ( theObject.topN === undefined ) {
		theObject.topN=[[theObject.lastDate,theScore]];
	} else if ( theObject.topN.length <= 0 ) {
		theObject.topN=[[theObject.lastDate,theScore]];
	} else {
		if ( ! fnCompare )	fnCompare = function ( theScore, theIndex ) {
							return theScore - theObject.topN[theIndex][1]
						};
		if ( theAscending ) {
//			if ( theScore > theObject.topN[theObject.topN.length-1][1] ) {
			if ( fnCompare(theScore, theObject.topN.length-1) > 0 ) {
//			Add to the end of the list
				theObject.topN.push([theObject.lastDate,theScore]);
			} else {
				for ( var i=0; i < theObject.topN.length; i++ ) {
//					if ( theScore < theObject.topN[i][1] ) {
					if ( fnCompare(theScore, i) < 0 ) {
//					Insert before i
						theObject.topN.splice(i,0,[theObject.lastDate,theScore]);
						break;
					}
				}
			}
		} else {
//			if ( theScore < theObject.topN[theObject.topN.length-1][1] ) {
			if ( fnCompare(theScore, theObject.topN.length-1) < 0 ) {
//			Add to the end of the list
				theObject.topN.push([theObject.lastDate,theScore]);
			} else {
				for ( var i=0; i < theObject.topN.length; i++ ) {
//					if ( theScore > theObject.topN[i][1] ) {
					if ( fnCompare(theScore, i) > 0 ) {
//					Insert before i
						theObject.topN.splice(i,0,[theObject.lastDate,theScore]);
						break;
					}
				}
			}
		}
//		Limit the size of the list
		G_oc.topN = (G_oc.topN === undefined )? 5: G_oc.topN;
		if ( theObject.topN.length > G_oc.topN ) {
			theObject.topN.pop();
		}
	}
} // oc_apps2_topN

function oc_apps2_getUGAL( theGameID, theAuthor, theLevel, theCallback ) {
//       ----------------
//	Get scores for this level for this game by current user
	oc_apps2_XHR({f:1,g:theGameID,a:theAuthor,l:theLevel}, theCallback );
} // oc_apps2_getUGAL

function oc_apps2_putUGAL( theGameID, theAuthor, theLevel, theObject, theCallback ) {
//       ----------------
//	Put scores for this level for this game by current user
	oc_apps2_XHR({f:2,g:theGameID,a:theAuthor,l:theLevel,j:theObject}, theCallback );
} // oc_apps2_putUGAL

function oc_apps2_delUG( theCallback ) {
//       --------------
//	Delete all scores for this game by current user
	oc_apps2_XHR({f:6,g:G_oc.id}, theCallback );
} // oc_apps2_delUG

function oc_apps2_stats3( theResult ) {
//       ---------------
	var	n,r,s='',a=[];
//	Extract into a (currrent user, one game, all levels)
	for ( var i=0; i<theResult.length; i++ ) {
		n=theResult[i].l;
		r=JSON.parse(theResult[i].j);
		if ( r.topN !== undefined ) {
			for ( var j=0; j<r.topN.length; j++ ) {
				a.push({n:n, d:r.topN[j][0], s:r.topN[j][1]});
			}
		}
	}
	if ( a.length ) {
//	Sort a - the sort is done by client, not by SQL
		a.sort( function (a,b) {
			if ( a.s < b.s )	return -1;
			if ( a.s > b.s )	return 1;
//				Same score, sort by date
			return a.d - b.d;
		});
//	Display a
		s ='<table class="ocscores"><thead><tr><th>Level</th><th>Score</th><th>Date</th></tr></thead>';
		for ( i=0; i<a.length; i++ ) {
			var dj = new Date(a[i].d);
			s +='<tr><td>'+G_oc.levels[a[i].n]+'</td><td>'+a[i].s+'</td><td>'+dj.toLocaleString()+'</td><td></tr>';
		}
		s +='</table>';
		s +='<p class="right">Reset will erase ALL your scores for "'+G_oc.caption+'".</p>'
		msgbox(G_oc.caption, s, 440
			,[	{
				c:'Reset',fn:function () {
						oc_apps2_delUG();
					}
				},{
				c:'Cancel',dflt:true
				}
			]
		);
	} else {
		msgbox(G_oc.caption,'No score at the moment.', 200, {});
	}
} // oc_apps2_stats3

function oc_apps2_stats4( theResult ) {
//       ---------------
//	Current user, one game, one level
	var	r,s='';
	for ( var i=0; i<theResult.length; i++ ) {
		r=JSON.parse(theResult[i].j);
		var d=new Date(r.lastDate);
		if ( r.lastDate !== undefined ) {
			s='Last played on: '+d.toLocaleString()+'<br>';
		}
		if ( r.won !== undefined ) {
			s +='Games won: '+r.won+'<br>';
		}
		if ( r.lose !== undefined ) {
			s +='Games lose: '+r.lose+'<br>';
		}
		if ( r.equal !== undefined ) {
			s +='Games null: '+r.draw+'<br>';
		}
		if ( r.topN !== undefined ) {
			s +='<table><tr><th>Date</th><th>Score</th></tr>';
			for ( var j=0; j<r.topN.length; j++ ) {
				s +='<tr><td>';
				var dj = new Date(r.topN[j][0]);
				s +=dj.toLocaleString()+'</td><td align="right">'+r.topN[j][1]+'</td></tr>';
			}
			s +='</table>';
		}
	}
	if ( s.length ) {
		s ='<p class="ocscores">'+s+'</p>';
	} else {
		s ='No score at the moment.';
	}
// var myEl = document.getElementsByTagName('h1')[0]; parseFloat(getComputedStyle(myEl, null).fontSize)
	msgbox(G_oc.caption, s, 340, {});
} // oc_apps2_stats4

function oc_apps2_stats5( theResult ) {
//       ---------------
	var	n,r,s='',a=[];
//	Extract into a (all users, one game, one level)
	for ( var i=0; i<theResult.length; i++ ) {
		n=theResult[i].n;
		r=JSON.parse(theResult[i].j);
		if ( r.topN !== undefined ) {
			for ( var j=0; j<r.topN.length; j++ ) {
				a.push({n:n, d:r.topN[j][0], s:r.topN[j][1]});
			}
		}
	}
	if ( a.length ) {
//	Sort a - the sort is done by client, not by SQL
		a.sort( function (a,b) {
			if ( a.s < b.s )	return -1;
			if ( a.s > b.s )	return 1;
//				Same score, sort by date
			return a.d - b.d;
		});
//	Display a
		s ='<table class="ocscores"><tr><th>Name</th><th>Score</th><th>Date</th></tr>';
		for ( i=0; i<a.length; i++ ) {
			var dj = new Date(a[i].d);
			s +='<tr><td>'+a[i].n+'</td><td>'+a[i].s+'</td><td>'+dj.toLocaleString()+'</td><td></tr>';
		}
		s +='</table>';
	} else {
		s ='No score at the moment.';
	}
// var myEl = document.getElementsByTagName('h1')[0]; parseFloat(getComputedStyle(myEl, null).fontSize)
	msgbox(G_oc.caption, s, 440, {});
} // oc_apps2_stats5

function oc_apps2_statistics( theUser, theLevel ) {
//       -------------------
	if ( theUser === undefined ) {
//		All scores for this game for all levels by current user
		oc_apps2_XHR({f:3,g:G_oc.id}, oc_apps2_stats3 );
	} else {
		if ( theUser =='me') {
			if ( theLevel === undefined ) {
//			All scores for this game for all levels by current user
				oc_apps2_XHR({f:3,g:G_oc.id,a:G_oc.author}, oc_apps2_stats3);
			} else {
//			All scores for this game for this level by current user
				oc_apps2_XHR({f:4,g:G_oc.id,a:G_oc.author,l:theLevel}, oc_apps2_stats4);
			}
		} else	if ( (theUser =='all')
			||   (theUser =='*') ) {
//			All scores for this game for this level by all users
				oc_apps2_XHR({f:5,g:G_oc.id,a:G_oc.author,l:theLevel}, oc_apps2_stats5);
		}
	}
} // oc_apps2_statistics
//
//______________________________________________________________________________
//
function oc_apps2_maps_getA( theCallback ) {
//       ------------------
//	Get authors of maps for this game
	oc_apps2_XHR({f:10,g:G_oc.id}, theCallback );
} // oc_apps2_getUGAL

function oc_apps2_maps_getL( theCallback ) {
//	Get id of maps (levels) by this author for this game
	oc_apps2_XHR({f:11,g:G_oc.id,a:G_oc.author}, theCallback );
}

function oc_apps2_maps_getM( theCallback ) {
//	Get map contents of this map_id (level) by this author for this game
	oc_apps2_XHR({f:12,g:G_oc.id,a:G_oc.author,l:G_oc.lvl}, theCallback );
}