// Easy Image plugin 1.0 (c) FFh Lab / Eric Lequien for TinyMCE 3.x+ (c) Moxiecode Systems AB

tinyMCEPopup.requireLangPack();

define("MARGSTD", 5);

var ezimageDialog = {
	init : function() {
		// Get the actual property of the selected image if any
		var f = document.forms[0];
		var n = tinyMCEPopup.editor.selection.getNode();

		tinyMCEPopup.resizeToInnerSize();

		if (n.nodeName == 'IMG'){
			f.src.value = n.src; 
			f.width.value = n.width;
			getImagePos(n, f);
			getImageMarg(n, f);    
			getAssociatedTexts(n, f);
			getImagePopupState(n, f);
			if (isAutomarginsCompat(f) == true)
				setAutomargins(f, true);
		} else 
			setAutomargins(f, true);

		showPrev();
	},
								 
	insert : function() {
		// Insert the defined image or update the selected one
		var ed = tinyMCEPopup.editor;
		var n = ed.selection.getNode();
		var f = document.forms[0];

		tinyMCEPopup.execCommand("mceBeginUndoLevel");

		if (f.src.value === ''){
			if (n.nodeName == 'IMG'){
				ed.dom.remove(n);
				ed.execCommand('mceRepaint');}
		} else {
			if (n.nodeName != 'IMG'){
			   	ed.execCommand('mceInsertContent', false, '<img id="_ezimage_tmp" />', {skip_undo : 1});
				n = ed.getDoc().getElementById('_ezimage_tmp');
				ed.dom.setAttrib('_ezimage_tmp', 'id', '');}

			n.src = f.src.value;
			n.width = f.width.value;
 		   	n.removeAttribute("height"); /* maintains w/h ratio */
		   	applyImageMarg(f, n);
		   	applyImagePos(f, n);
			applyAssociatedTexts(f, ed.getDoc(), n);
			applyImagePopup(f, ed.getDoc(), n);
		}

		tinyMCEPopup.execCommand("mceEndUndoLevel");
		tinyMCEPopup.close();
	}
};

function define(name, value) {
    // Defines a constant (const being not well implemented in all browsers)
    // REF : v903.3016 from http://phpjs.org/functions/define
    //      (org. by Paulo Ricardo F. Santos, rev. by Andrea Giammarchi, revamp by Brett Zamir)
    var defn, replace, script, that = this, d = this.window.document;
    var toString = function (name, value) {
        return 'const ' + name + '=' + (
            /^(null|true|false|(\+|\-)?\d+(\.\d+)?)$/.test(value = String(value)) ? value : '"' + replace(value) + '"'
            ); };
    try {
        eval('const e=1');
        replace = function (value){
            var replace = {"\x08":"b", "\x0A":"\\n", "\x0B":"v", "\x0C":"f", "\x0D":"\\r", '"':'"', "\\":"\\"};
            return value.replace(/\x08|[\x0A-\x0D]|"|\\/g, function(value){return "\\"+replace[value];});};

	   defn = function (name, value){
	        if (d.createElementNS) {
	            script = d.createElementNS('http://www.w3.org/1999/xhtml', 'script');
	        } else {script = d.createElement('script');}
	
	        script.type = 'text/javascript';
	        script.appendChild(d.createTextNode(toString(name, value)));
	        d.documentElement.appendChild(script);
	        d.documentElement.removeChild(script);};
	} catch (e){
	    replace = function (value) {var replace = {"\x0A":"\\n", "\x0D":"\\r"};
	        return value.replace(/"/g, '""').replace(/\n|\r/g, function(value){return replace[value];});};

        defn = (this.execScript ?
            function (name, value){
                that.execScript(toString(name, value), 'VBScript');
            }:
            function (name, value){
                eval(toString(name, value).substring(6));
            });
    }
    defn(name, value);
}

function Left(str, n){
	// Extract the n first left chars of the given string
	if (n <= 0)
	    return "";
	else if (n > String(str).length)
	    return str;
	else
	    return String(str).substring(0,n);
}

function Right(str, n){
	// Extract the n last right chars of the given string
    if (n <= 0)
       return "";
    else if (n > String(str).length)
       return str;
    else {
       var iLen = String(str).length;
       return String(str).substring(iLen, iLen - n);
    }
}

function isNumeric(s){ 
	// Indique si une chaine est une valeur numérique
	var valid = "0123456789."; 
	var ret = true; var ch; var i;

	for (i = 0 ; i < s.length && ret == true ; i++){ 
		ch = s.charAt(i); 
		if (valid.indexOf(ch) == -1) 
			ret = false;} 
	return ret;} 

function getRadio(r) {
	// Indicate the checked value in a given radio buttons group
	if(!r)return;

	var l = r.length;
	
	if(l == undefined)
		if(r.checked)
			return r.value;
		else
			return "";
	
	for(var i = 0; i < l; i++){
		if(r[i].checked){
			return r[i].value;}}

	return "";
}

function setRadio(r, val) {
	// Select a button in a given radio buttons group (unckeck all if unexisting value)
	if(!r) return;

	var l = r.length;

	if(l == undefined){
		r.checked = (r.value == val.toString());
		return;}

	for(var i = 0; i < l; i++){
		r[i].checked = false;
		if(r[i].value == val.toString()){
			r[i].checked = true;}}
}

function getFloat(n){
	// Cross-browser way to retrieve float style value of given node
	return (typeof n.style.cssFloat === 'string') ? n.style.cssFloat : n.style.styleFloat;
}

function setFloat(n, v){
	// Cross-browser way to define float style value of given node
	if (typeof n.style.cssFloat === 'string')
		n.style.cssFloat = v;
	else
		n.style.styleFloat = v;
}

function getTxtInside(n){
	// Cross-browser way to retrieve inner-text of given node
	return (typeof n.innerText === 'string') ? n.innerText : n.textContent;
}

function setTxtInside(n, v){
	// Cross-browser way to define inner-text of given node
	if (typeof n.innerText === 'string')
		n.innerText = v;
	else
		n.textContent = v;
}

function getImagePos(n, f){                
	// Détermine le style rassemblant style display/text-align/[margin] de centrage, propriété align et style float courants
	// (priorité : style float -> prop. align -> style display/text-align)
	var pos = 'left'; /* default */	  
	var flt = getFloat(n);

	/* analyse d'une éventuelle combinaison de style display/text-align existante */
	if (n.style.display == 'block' && n.style.textAlign == 'center')
		pos = 'center';

	/* analyse d'éventuelle propriété align existante (aspect vertical ignoré) */
	if (n.align != 'undefined' && n.align != "")
		pos = (n.align == 'right') ? 'right' : 'left';

	/* analyse d'un éventuel style float existant */	
	if (flt != "")
		pos = (flt != 'none') ? flt : 'left';
	
    /* renseignement des champs de boîte */
	setRadio(f.optpos, pos);
}

function getImageMarg(n, f){
	// Détermine le style rassemblant propriétés [h|v]space et style margin[-*] courants
	// (priorité : style margin sur div wrapper -> style margin-* sur img -> style margin sur img -> prop. hspace/vspace)
	var m; var mt; var mr; var mb; var ml; 
	var arr = new Array(); var i; var l; var p;

	/* analyse d'eventuelles propriétés hspace & vspace existantes */
	ml = (n.hspace != 'undefined') ? n.hspace : 0;
	mr = (n.hspace != 'undefined') ? n.hspace : 0;
	mt = (n.vspace != 'undefined') ? n.vspace : 0;
	mb = (n.vspace != 'undefined') ? n.vspace : 0;

	/* analyse d'un éventuel style margin global existant */
	if (n.style.margin != ""){
		arr = n.style.margin.split(" ", 4);
		l = arr.length;

		if (l == 1)
			mt = mr = mb = ml = arr[0];
		else if (l == 2){
			mt = mb = arr[0];
			mr = ml = arr[1];}
		else if (l == 3){
			mt = arr[0];
			mr = ml = arr[1];
			mb = arr[2];}
		else{ // >= 4
            mt = arr[0];
			mr = arr[1];
			mb = arr[2];
			ml = arr[3];}}

	/* analyse d'un éventuel style en margin-* isolés existant */
	if (n.style.marginTop != ""){
		mt = n.style.marginTop;}
	if (n.style.marginRight != ""){
		mr = n.style.marginRight;}
	if (n.style.marginBottom != ""){
		mb = n.style.marginBottom;}
	if (n.style.marginLeft != ""){
		ml = n.style.marginLeft;}

	/* analyse d'un éventuel style margin global existant sur un div wrapper */
	if (n.parentNode.className == 'imgwrapper' && n.parentNode.style.margin != ""){
		arr = n.parentNode.style.margin.split(" ", 4);
		l = arr.length;

		if (l == 1)
			mt = mr = mb = ml = arr[0];
		else if (l == 2){
			mt = mb = arr[0];
			mr = ml = arr[1];}
		else if (l == 3){
			mt = arr[0];
			mr = ml = arr[1];
			mb = arr[2];}
		else{ // >= 4
            mt = arr[0];
			mr = arr[1];
			mb = arr[2];
			ml = arr[3];}}

	/* suppression d'une unité éventuelle (ie. 'px') */
	if (Right(mt, 2) == 'px' && mt != 'auto')
		mt = Left(mt, mt.length - 2);
	if (Right(mr, 2) == 'px' && mr != 'auto')
		mr = Left(mr, mr.length - 2);
	if (Right(mb, 2) == 'px' && mb != 'auto')
		mb = Left(mb, mb.length - 2);
	if (Right(ml, 2) == 'px' && ml != 'auto')
		ml = Left(ml, ml.length - 2);

    /* renseignement des champs de boîte */
	f.margtop.value = mt;
	f.margright.value = mr;
	f.margbottom.value = mb;
	f.margleft.value = ml;
}

function getAssociatedTexts(n, f){            
	// Détermine les textes associés à l'image et options afférentes
	// knowing txt can comes from title or caption in parent-div, priority is given to caption (wich is more visible)
	var alt = ""; var txt = "";
	var opttxt = 'caption'; 
	var altastxt;

	/* analyse */
	if (n.alt != 'undefined')
		alt = n.alt;

	if (n.title != 'undefined'){
		txt = n.title;
		if (n.title != "")
			opttxt = 'title';}

	if (n.parentNode.tagName.toLowerCase() == 'div'){
		if (n.parentNode.className == 'imgwrapper'){
			txt = getTxtInside(n.parentNode);
			opttxt = 'caption';}}

	altastxt = (alt == txt) ? true : false;

	/* renseignement des champs de boîte */
	f.txt.value = txt;
	setRadio(f.opttxt, opttxt);

	f.alt.value = alt;
	f.altastxt.checked = altastxt;
	adjustAltDisplay();
}

function getImagePopupState(n, f){
	// Détermine si l'image actuelle procure la fonctionnalité de popup vers image originale
	if (n.onclick)
		f.popimg.checked = (n.onclick.toString().indexOf("window.open") != -1) ? true : false;
	else	
		f.popimg.checked = false;
}

function isAutomarginsCompat(f){
	// déterminate if current margins match what automargins would be for current position
    // (if margins are all zero, we consider it's compat, but caller has to call setAutomargin)
	var pos = getRadio(f.optpos);
	var mt = f.margtop.value;
	var mr = f.margright.value;
	var mb = f.margbottom.value;
	var ml = f.margleft.value;

	if (pos == 'left'){
		if ((mt == 0 && mr == MARGSTD && mb == MARGSTD && ml == 0)
			|| (mt == 0 && mr == 0 && mb == 0 && ml == 0)) return true;
	} else if (pos == 'right'){
		if ((mt == 0 && mr == 0 && mb == MARGSTD && ml == MARGSTD)
			|| (mt == 0 && mr == 0 && mb == 0 && ml == 0)) return true;
	} else { /* center */
		if ((mt == MARGSTD && mr == 'auto' && mb == MARGSTD && ml == 'auto')
			|| (mt == 0 && mr == 0 && mb == 0 && ml == 0)) return true;}

	return false;
}

function setAutomargins(f, op){
	// ON/OFF automargins ; déterminate and apply right automargins for current position when op:true  
	// (forced ON at every pos* option change ; ie. click on a pos* radio button)
	var pos = getRadio(f.optpos);

	if (op == true){
		if (f.automarg.checked == false) f.automarg.checked = true; /* check if not done */
		f.margtop.setAttribute("readOnly", "readonly");
		f.margright.setAttribute("readOnly", "readonly");
		f.margbottom.setAttribute("readOnly", "readonly");
		f.margleft.setAttribute("readOnly", "readonly");
		f.margtop.style.background = "#C0C0C0";
		f.margright.style.background = "#C0C0C0";
		f.margbottom.style.background = "#C0C0C0";
		f.margleft.style.background = "#C0C0C0";
	
		if (pos == 'left'){
			f.margtop.value = f.margleft.value = 0;
			f.margright.value = f.margbottom.value = MARGSTD;
		} else if (pos == 'right'){
			f.margtop.value = f.margright.value = 0;
			f.margleft.value = f.margbottom.value = MARGSTD;
		} else { /* center */
			f.margtop.value = f.margbottom.value = MARGSTD;
			f.margleft.value  = f.margright.value = 'auto';}
	} else {
		if (f.automarg.checked == true) f.automarg.checked = false; /* unchecked if necessary */
		f.margtop.removeAttribute("readOnly");
		f.margright.removeAttribute("readOnly");
		f.margbottom.removeAttribute("readOnly");
		f.margleft.removeAttribute("readOnly");
		f.margtop.style.background = "#FFFFFF";
		f.margright.style.background = "#FFFFFF";
		f.margbottom.style.background = "#FFFFFF";
		f.margleft.style.background = "#FFFFFF";}
}   

function applyImagePos(f, n){
	// Application effective de la position choisie pour l'image
	var pos = getRadio(f.optpos);

	/* reset */
	if (n.align != 'undefined') n.removeAttribute("align");
	if (getFloat(n) != "") setFloat(n, "");
	if (n.style.display != "") n.style.display = "";
	if (n.style.textAlign != "") n.style.textAlign = "";

	/* apply */
	if (pos == 'left' || pos == 'right'){
		tinyMCEPopup.editor.dom.setStyle(n, 'float', pos);
	} else { /* center */
		tinyMCEPopup.editor.dom.setStyle(n, 'display', 'block');
		tinyMCEPopup.editor.dom.setStyle(n, 'text-align', 'center');}
}

function applyImageMarg(f, n){
	// Application effective des marges choisies pour l'image
    
	/* reset */
	if (n.hspace != 'undefined') n.removeAttribute("hspace");
	if (n.vspace != 'undefined') n.removeAttribute("vspace");
	if (n.style.margin != "") n.style.margin = "";
	if (n.style.marginTop != "") n.style.marginTop = "";
	if (n.style.marginRight != "") n.style.marginRight = "";
	if (n.style.marginBottom != "") n.style.marginBottom = "";
	if (n.style.marginLeft != "") n.style.marginLeft = "";

   	/* concatène */ 
    mt = (isNumeric(f.margtop.value) == true) ? f.margtop.value + "px" : f.margtop.value;
    mr = (isNumeric(f.margright.value) == true) ? f.margright.value + "px" : f.margright.value;
    mb = (isNumeric(f.margbottom.value) == true) ? f.margbottom.value + "px" : f.margbottom.value;
    ml = (isNumeric(f.margleft.value) == true) ? f.margleft.value + "px" : f.margleft.value;

    m = mt + " " + mr + " " + mb + " " + ml;

	/* apply */		 
	tinyMCEPopup.editor.dom.setStyle(n, 'margin', m);
}

function adjustAltDisplay(){
	// Called on every onclick event on altastxt checkbox
	var op = (document.forms[0].altastxt.checked == true) ? 'none' : 'inline';
	display('alt', op);
}

function applyAssociatedTexts(f, doc, n){
	// Application effective de la légende (attention, 'doc' doit être celui contenant 'n')
	var ed = tinyMCEPopup.editor;
	var flt = getFloat(n);	
	var wrapper; var bwrapped = false; 
	var caption;

	/* reset & apply alt/title */
	if (n.alt != 'undefined') n.removeAttribute("alt");
	if (n.title != 'undefined') n.removeAttribute("title");

	if (f.altastxt.checked == true){
		if (f.txt.value != "")
			n.alt = f.txt.value;
	} else {
		if (f.alt.value != "")
			n.alt = f.alt.value;}

	if (f.txt.value != "" && getRadio(f.opttxt) == 'title')
		n.title = f.txt.value;

	/* reset & apply caption */
	if (n.parentNode.className == 'imgwrapper'){
		if (getRadio(f.opttxt) != 'caption' || (getRadio(f.opttxt) == 'caption' && f.txt.value == "")){
			ed.dom.setStyle(n, 'margin', n.parentNode.style.margin);
			ed.dom.setOuterHTML(n.parentNode, n.outerHTML);
		} else {
			bwrapped = true;}}

	if (f.txt.value != "" && getRadio(f.opttxt) == 'caption'){
		var margin = n.style.margin;
		ed.dom.setStyle(n, 'margin', "");

		if (bwrapped == false){
			wrapper = doc.createElement("div");
			wrapper.className = 'imgwrapper';
			n.parentNode.replaceChild(wrapper, n);
		} else {
			wrapper = n.parentNode;
			wrapper.innerHTML = "";}

		wrapper.appendChild(n);
		caption = doc.createTextNode(f.txt.value);
		wrapper.appendChild(caption);

		ed.dom.setStyle(wrapper, 'width', n.width);
		ed.dom.setStyle(wrapper, 'text-align', 'center');
	
		ed.dom.setStyle(wrapper, 'float', flt);
		ed.dom.setStyle(wrapper, 'margin', margin);}
}

function applyImagePopup(f, doc, n){
	// Mise en place effective ou annulation de la fonctionnalité de popup vers image en taille originale
	if (f.popimg.checked == true){
		var ed = tinyMCEPopup.editor;
		var u = f.src.value; 
		var w; var h; var wmax; var hmax; 
		var wimg; var himg; 
		var wmarg = 20;	var hmarg = 25;
		var scroll = 0; var wscroll = 17; var hscroll = 22;

		/* compute dimensions */
		setImageOrg(f);
		wimg = f._ezimage_org.width;
		himg = f._ezimage_org.height;
		wmax = screen.availWidth;
		hmax = screen.availHeight;
		w = (wimg + wmarg <= wmax) ? wimg + wmarg : wmax;
		h = (himg + hmarg <= hmax) ? himg + hmarg : hmax;
		if (h == hmax){scroll = 1; w += wscroll;}
		if (w == wmax){scroll = 1; h += hscroll;}
		if (h > hmax) h = hmax;
		if (w > wmax) w = wmax;
		
		/* apply */
		if (doc == document) /* to dialog preview */
			tinymce.dom.Event.add(n, 'click', function(e){window.open(u, 'pop', 'toolbar=0, location=0, directories=0, status=0, menubar=0, scrollbars=' + scroll + ', copyhistory=0, resizable=1, width=' + w + ', height=' + h + ', left=0, top=0'); if((navigator.appName=='Microsoft Internet Explorer' && navigator.appVersion.substring(0,3)=='4.0')==false) pop.focus();});
		else				 /* to editor content */
			ed.dom.setAttrib(n, "onclick", "window.open('" + u + "', 'pop', 'toolbar=0, location=0, directories=0, status=0, menubar=0, scrollbars=" + scroll + ", copyhistory=0, resizable=1, width=" + w + ", height=" + h + ", left=0, top=0'); if((navigator.appName=='Microsoft Internet Explorer' && navigator.appVersion.substring(0,3)=='4.0')==false) pop.focus();");

		ed.dom.setStyle(n, "cursor", "pointer");
	} else {
		n.style.cursor = "";
		n.removeAttribute("onclick");
		tinymce.dom.Event.remove(n, 'click');}
}   

function setImageOrg(f){
	// Installe l'image originale en référence dans un div en masqué (utile aux calcul de dimensions)
	tinyMCEPopup.dom.setHTML('org', "<img id='_ezimage_org' src='" + f.src.value + "' border='0' />");
}

function showPrev(){
	// Met à jour l'aperçu (et ajuste la taille si elle est à zéro ou indéfinie)
	var i; var itag;
	var f = document.forms[0];      
	var ed = tinyMCEPopup.editor;
	var n = ed.selection.getNode();

	var u = f.src.value;  
	var w = f.width.value;
	var b = (n.border) ? n.border : 0;

	var t = "<font color='#808080'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla id sapien odio, feugiat elementum mi. Quisque semper sem ut eros mattis pulvinar. Nulla facilisi. Ut pellentesque, arcu accumsan lobortis interdum, felis quam elementum enim, eget iaculis libero neque nec libero. Nunc nisi leo, ullamcorper nec malesuada aliquam, pretium quis enim. Phasellus et varius tortor. Sed sit amet mauris tellus, vitae venenatis arcu. Praesent tristique molestie vulputate. Etiam non neque sed leo bibendum mattis nec nec lectus. In molestie, felis tristique purus dictum est.</font>";

	if (!u){
		tinyMCEPopup.dom.setHTML('prev', '');
		return;} 
           
	setImageOrg(f); 
	if (!w || w <= 0){ 
		f.width.value = f._ezimage_org.width;
		w = f.width.value;}

	itag = "<img id='_ezimage_prev' src='" + u + "' border='" + b + "' width='" + w + "' />";
	tinyMCEPopup.dom.setHTML('prev', (w <= 350) ? itag + t : itag);	
	i = f._ezimage_prev;

	if (w <= 350){
	   	applyImageMarg(f, i);
	   	applyImagePos(f, i);
		applyAssociatedTexts(f, document, i);
		display('prevmsg','hidden');
	} else
		display('prevmsg','visible');
    
	applyImagePopup(f, document, i);
	display('pophlp', (f.popimg.checked == true) ? 'inline' : 'none');
}

function display(id, op){
	// Montre/cache un élément du document courant
	// (pour masquer en conservant l'emplacement, passer "hidden" plutôt que "none")
	var elt = document.getElementById(id);
	
	if (op != "hidden" && op != "visible") elt.style.display = op;
	elt.style.visibility = (op == "none" || op == "hidden") ? "hidden" : "visible";
}

tinyMCEPopup.onInit.add(ezimageDialog.init, ezimageDialog);