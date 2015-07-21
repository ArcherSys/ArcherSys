/**
 * editor_plugin_src.js
 *
 * Copyright 2009, Moxiecode Systems AB
 * Released under LGPL License.
 *
 * License: http://tinymce.moxiecode.com/license
 * Contributing: http://tinymce.moxiecode.com/contributing
 */

(function() {
	tinymce.create('tinymce.plugins.AdvancedLinkPlugin', {
		init : function(ed, url) {
			this.editor = ed;

			// Register commands
			ed.addCommand('mceAdvLink', function() {
				var se = ed.selection;

				// No selection and not in link
				if (se.isCollapsed() && !ed.dom.getParent(se.getNode(), 'A'))
					return;

				ed.windowManager.open({
					file : url + '/link.htm',
					width : 480 + parseInt(ed.getLang('advlink.delta_width', 0)),
					height : 400 + parseInt(ed.getLang('advlink.delta_height', 0)),
					inline : 1
				}, {
					plugin_url : url
				});
			});

			// Register buttons
			ed.addButton('advlink', {
				/*title : 'advlink.link_desc',*/
				title: ed.getLang('advlink.link_desc'),
				cmd : 'mceAdvLink',
				//image: url + '/img/advlink.png'
			});

			ed.addShortcut('ctrl+k', 'advlink.advlink_desc', 'mceAdvLink');

			ed.onNodeChange.add(function(ed, cm, n, co) {
				cm.setDisabled('advlink', co && n.nodeName != 'A');
				cm.setActive('advlink', n.nodeName == 'A' && !n.name);
			});
		},

		getInfo : function() {
			return {
				longname : 'Advanced link',
				author : 'Moxiecode Systems AB',
				authorurl : 'http://tinymce.moxiecode.com',
				infourl : 'http://wiki.moxiecode.com/index.php/TinyMCE:Plugins/advlink',
				version : tinymce.majorVersion + "." + tinymce.minorVersion
			};
		}
	});

	// Register plugin
	tinymce.PluginManager.add('advlink', tinymce.plugins.AdvancedLinkPlugin);
})();