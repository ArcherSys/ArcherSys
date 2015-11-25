(function() {
	// Load plugin specific language pack
	//tinymce.PluginManager.requireLangPack('mailto');

	tinymce.create('tinymce.plugins.MailTo', {
		/**
		 * Initializes the plugin, this will be executed after the plugin has been created.
		 * This call is done before the editor instance has finished it's initialization so use the onInit event
		 * of the editor instance to intercept that event.
		 *
		 * @param {tinymce.Editor} ed Editor instance that the plugin is initialized in.
		 * @param {string} url Absolute URL to where the plugin is located.
		 */
		init : function(ed, url) {

			ed.addButton('mailto', {
				title : ed.getLang('mailto.mailto_desc'),
				cmd : 'mceMailTo',
				//image : url + '/images/mailto.gif'
			});

      ed.addCommand('mceMailTo', function() {
       var selectedText = ed.selection.getContent({format : 'text'});
       var MailToLink = "<a href='mailto:" + selectedText + "'>" + selectedText + "</a>"
       ed.execCommand('mceInsertContent', false, MailToLink);
      });

		},

		/**
		 * Returns information about the plugin as a name/value array.
		 * The current keys are longname, author, authorurl, infourl and version.
		 *
		 * @return {Object} Name/value array containing information about the plugin.
		 */
		getInfo : function() {
			return {
				longname : 'MailTo',
				author : 'Josh Lobe',
				authorurl : 'http://joshlobe.com',
				version : "1.0"
			};
		}
	});

	// Register plugin
	tinymce.PluginManager.add('mailto', tinymce.plugins.MailTo);
})();

