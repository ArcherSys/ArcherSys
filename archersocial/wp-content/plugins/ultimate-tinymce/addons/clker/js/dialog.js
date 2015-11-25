function GetAJAXObject()
{
  var xmlHttp;
  try {
    // Firefox, Opera 8.0+, Safari
    xmlHttp=new XMLHttpRequest();
  } catch (e)	{
    // Internet Explorer
    try {
      xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
      try{
	xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
      } catch (e) {
	alert("Your browser does not support AJAX!");
      }
    }
  }
  
  return xmlHttp;
}

tinyMCEPopup.requireLangPack();

/**
*
*  Base64 encode / decode
*  http://www.webtoolkit.info/
*
**/

var Base64 = {

    // private property
    _keyStr : "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",

    // public method for encoding
    encode : function (input) {
        var output = "";
        var chr1, chr2, chr3, enc1, enc2, enc3, enc4;
        var i = 0;

        input = Base64._utf8_encode(input);

        while (i < input.length) {

            chr1 = input.charCodeAt(i++);
            chr2 = input.charCodeAt(i++);
            chr3 = input.charCodeAt(i++);

            enc1 = chr1 >> 2;
            enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
            enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
            enc4 = chr3 & 63;

            if (isNaN(chr2)) {
                enc3 = enc4 = 64;
            } else if (isNaN(chr3)) {
                enc4 = 64;
            }

            output = output +
            this._keyStr.charAt(enc1) + this._keyStr.charAt(enc2) +
            this._keyStr.charAt(enc3) + this._keyStr.charAt(enc4);

        }

        return output;
    },

    // public method for decoding
    decode : function (input) {
        var output = "";
        var chr1, chr2, chr3;
        var enc1, enc2, enc3, enc4;
        var i = 0;

        input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");

        while (i < input.length) {

            enc1 = this._keyStr.indexOf(input.charAt(i++));
            enc2 = this._keyStr.indexOf(input.charAt(i++));
            enc3 = this._keyStr.indexOf(input.charAt(i++));
            enc4 = this._keyStr.indexOf(input.charAt(i++));

            chr1 = (enc1 << 2) | (enc2 >> 4);
            chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
            chr3 = ((enc3 & 3) << 6) | enc4;

            output = output + String.fromCharCode(chr1);

            if (enc3 != 64) {
                output = output + String.fromCharCode(chr2);
            }
            if (enc4 != 64) {
                output = output + String.fromCharCode(chr3);
            }

        }

        output = Base64._utf8_decode(output);

        return output;

    },

    // private method for UTF-8 encoding
    _utf8_encode : function (string) {
        string = string.replace(/\r\n/g,"\n");
        var utftext = "";

        for (var n = 0; n < string.length; n++) {

            var c = string.charCodeAt(n);

            if (c < 128) {
                utftext += String.fromCharCode(c);
            }
            else if((c > 127) && (c < 2048)) {
                utftext += String.fromCharCode((c >> 6) | 192);
                utftext += String.fromCharCode((c & 63) | 128);
            }
            else {
                utftext += String.fromCharCode((c >> 12) | 224);
                utftext += String.fromCharCode(((c >> 6) & 63) | 128);
                utftext += String.fromCharCode((c & 63) | 128);
            }

        }

        return utftext;
    },

    // private method for UTF-8 decoding
    _utf8_decode : function (utftext) {
        var string = "";
        var i = 0;
        var c = c1 = c2 = 0;

        while ( i < utftext.length ) {

            c = utftext.charCodeAt(i);

            if (c < 128) {
                string += String.fromCharCode(c);
                i++;
            }
            else if((c > 191) && (c < 224)) {
                c2 = utftext.charCodeAt(i+1);
                string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));
                i += 2;
            }
            else {
                c2 = utftext.charCodeAt(i+1);
                c3 = utftext.charCodeAt(i+2);
                string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
                i += 3;
            }

        }

        return string;
    }

}


  var page=1;
var pages=0;

var ClkerDialog = {
 init : function() {
    var f = document.forms[0];

    // Get the selected contents as text and place it in the input
    //f.someval.value = tinyMCEPopup.editor.selection.getContent({format : 'text'});
    //f.somearg.value = tinyMCEPopup.getWindowArg('some_custom_arg');
  },

 inserturl : function(url){
    tinyMCEPopup.editor.execCommand('mceInsertContent', false, Base64.decode(url));
    tinyMCEPopup.close();
  },

 insert : function() {
    // Insert the contents from the input into the document
    tinyMCEPopup.editor.execCommand('mceInsertContent', false, document.forms[0].someval.value);
    tinyMCEPopup.close();
  },

 gotostart : function() {
    page=1;
    this.search();
  },

 gotobefore : function() {
    page-=1;
    if (page<1) page=1;
    this.search();
  },

 gotonext : function() {
    page+=1;
    if (page>pages) page=pages;
    this.search();
  },

 gotoend : function() {
    page=pages;
    this.search();
  },

 search : function() {
    var myxmlHttp=GetAJAXObject();
    
    myxmlHttp.onreadystatechange=function(){
	var el=document.getElementById("results");

	if (myxmlHttp.readyState==4){
	    xml=myxmlHttp.responseText;

	    lines=xml.split("\n");

	    pages=lines[1]-0;

	    htres="<center><h2>"+lines[0]+" entries found</h2>";
	    htres+=" <table><tr>";
	    htres+=" <td><img src='img/start.png' style='cursor:pointer;' onclick='ClkerDialog.gotostart();'></td>";
	    htres+=" <td><img src='img/before.png' style='cursor:pointer;' onclick='ClkerDialog.gotobefore();'></td>";
	    htres+=" <td valign='center'><b>Page "+lines[2]+"/"+lines[1]+"</b></td>";
	    htres+=" <td><img src='img/next.png' style='cursor:pointer;' onclick='ClkerDialog.gotonext();'></td>";
	    htres+=" <td><img src='img/end.png' style='cursor:pointer;' onclick='ClkerDialog.gotoend();'></td>";
	    htres+=" </tr></table>";
	    htres+="</center>";
	    htres+="<br/><br/><style type='text/css'>.thumb{width:100px;} .thumb img{border:0px;} .thumb:hover{background: #ddddff;}</style>";

	    htres+="<center><table><tr>";
	    for(i=0;i<lines.length-3;++i){
	      if (lines[i+3].length<3) continue;
	      row=lines[i+3].split(",");
	      htres+="<td valign='bottom'>";

	      large="<a href='"+row[0]+"' target='_blank'><img style='border:0px;margin:5px;float:left;' src='"+row[2]+".hi.png' title='"+row[1]+"'/></a>";
	      large=Base64.encode(large);
	      med="<a href='"+row[0]+"' target='_blank'><img style='border:0px;margin:5px;float:left;' src='"+row[2]+".med.png' title='"+row[1]+"'/></a>";
	      med=Base64.encode(med);
	      small="<a href='"+row[0]+"' target='_blank'><img style='border:0px;margin:5px;float:left;' src='"+row[2]+".thumb.png' title='"+row[1]+"'/></a>";
	      small=Base64.encode(small);

	      htres+="<div class='thumb'><a href='javascript:void(0)' onclick='ClkerDialog.inserturl(\""+small+"\")'>";
	      htres+="<img src='"+row[2]+".thumb.png' title='"+row[1]+"'/></a>";
	      htres+="</div>";

	      htres+="<center><a href='javascript:void(0)' onclick='ClkerDialog.inserturl(\""+small+"\")'>Sml</a> ";
	      htres+="<a href='javascript:void(0)' onclick='ClkerDialog.inserturl(\""+med+"\")'>Med</a> ";
	      htres+="<a href='javascript:void(0)' onclick='ClkerDialog.inserturl(\""+large+"\")'>Lrg</a></center><br/><br/>";
	      htres+="</td>";

	      if ( (i+1)%6 ==0 ){
		htres+="</tr><tr>";
	      }
	    }

	    htres+="</tr></table></center>";

	    el.innerHTML=htres;
        }
    }
    
    url="search.php?ps=12&page="+String(page)+"&words="+document.forms[0].searchtext.value;
    myxmlHttp.open("GET",url,true);
    myxmlHttp.send(null);

    delete myxmlHttp;
  }
};

tinyMCEPopup.onInit.add(ClkerDialog.init, ClkerDialog);
