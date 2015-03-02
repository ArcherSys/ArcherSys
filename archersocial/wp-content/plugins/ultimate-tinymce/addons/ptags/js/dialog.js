tinyMCEPopup.requireLangPack();

var ptagsDialog = {
	
	insert : function(file, title) {
		var ed = tinyMCEPopup.editor, dom = ed.dom;

		tinyMCEPopup.execCommand('mceInsertContent', false, '');

		tinyMCEPopup.close();
	}
};

tinyMCEPopup.onInit.add(ptagsDialog.init, ptagsDialog);