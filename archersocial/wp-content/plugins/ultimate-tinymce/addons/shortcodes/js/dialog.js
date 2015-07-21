//tinyMCEPopup.requireLangPack();

var ShortcodesDialog = {
	
	insert : function(file, title) {
		var ed = tinyMCEPopup.editor, dom = ed.dom;

		tinyMCEPopup.execCommand('mceInsertContent', false, '');

		tinyMCEPopup.close();
	}
};

tinyMCEPopup.onInit.add(ShortcodesDialog.init, ShortcodesDialog);