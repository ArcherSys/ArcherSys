(function() {
	// Load plugin specific language pack
	//tinymce.PluginManager.requireLangPack('clear');

	tinymce.create('tinymce.plugins.Clear', {
		/**
		 * Initializes the plugin, this will be executed after the plugin has been created.
		 * This call is done before the editor instance has finished it's initialization so use the onInit event
		 * of the editor instance to intercept that event.
		 *
		 * @param {tinymce.Editor} ed Editor instance that the plugin is initialized in.
		 * @param {string} url Absolute URL to where the plugin is located.
		 */
		init : function(ed, url) {

			ed.addButton('clearleft', {
				/*title : 'clear.clearleft_desc',*/
				title : ed.getLang('div.clearleft_desc'),
				cmd : 'clearLeft',
				image : url + '/images/clearleft_button.gif'
			});
			ed.addButton('clearright', {
				/*title : 'clear.clearright_desc',*/
				title : ed.getLang('div.clearright_desc'),
				cmd : 'clearRight',
				image : url + '/images/clearright_button.gif'
			});
			ed.addButton('clearboth', {
				/*title : 'clear.clearboth_desc',*/
				title : ed.getLang('div.clearboth_desc'),
				cmd : 'clearBoth',
				image : url + '/images/clearboth_button.gif'
			});

			var clearHTML = '<img src="' + url + '/images/trans.gif" style="clear:$1;" class="mceClear mceClear$1 mceItemNoResize" title="'+ed.getLang('clear.clear_alt')+'" />';
            var insertClear = function(clear){
				var html = clearHTML.replace(/\$1/g, clear);
                ed.execCommand('mceInsertContent', false, html);
                // ed.selection.setContent('');
            };
			
			ed.addCommand('clearLeft', function(){ insertClear('left'); });
			ed.addCommand('clearRight', function(){ insertClear('right'); });
			ed.addCommand('clearBoth', function(){ insertClear('both'); });

			// Set active buttons if user selected pagebreak or more break
			ed.onNodeChange.add(function(ed, cm, n) {
				cm.setActive('clearleft', n.nodeName === 'IMG' && ed.dom.hasClass(n, 'mceClearleft'));
				cm.setActive('clearright', n.nodeName === 'IMG' && ed.dom.hasClass(n, 'mceClearright'));
				cm.setActive('clearboth', n.nodeName === 'IMG' && ed.dom.hasClass(n, 'mceClearboth'));
			});

			// Load plugin specific CSS into editor
			ed.onInit.add(function() {
				ed.dom.loadCSS(url + '/css/clear.css');
			});

			// Display clear instead if img in element path
			ed.onPostRender.add(function() {
				if (ed.theme.onResolveName) {
					ed.theme.onResolveName.add(function(th, o) {
						if (o.node.nodeName == 'IMG') {
							if ( ed.dom.hasClass(o.node, 'mceClearleft') )
								o.name = 'clear.left';
                            else if ( ed.dom.hasClass(o.node, 'mceClearright') )
								o.name = 'clear.right';
                            else if ( ed.dom.hasClass(o.node, 'mceClearboth') )
								o.name = 'clear.both';
						}
					});
				}
			});

			// Replace clear with images
			ed.onBeforeSetContent.add(function(ed, o) {
				o.content = o.content.replace(/<div clear=" *([^" ]+) *"><\/div>/g, clearHTML);
				o.content = o.content.replace(/<div style="clear: *([^"; ]+) *;?"><\/div>/g, clearHTML);
			});

			// Replace images with clear
			ed.onPostProcess.add(function(ed, o) {
				if (o.get){
					o.content = o.content.replace(/<img[^>]+>/g, function(html) {
						if (html.indexOf('class="mceClear') !== -1) {
							var m, clear = (m = html.match(/mceClear([a-z]+)/)) ? m[1] : '';
							html = '<div style="clear:'+clear+';"></div>';
						}
						return html;
					});
                }
			});
		},


		/**
		 * Creates control instances based in the incomming name. This method is normally not
		 * needed since the addButton method of the tinymce.Editor class is a more easy way of adding buttons
		 * but you sometimes need to create more complex controls like listboxes, split buttons etc then this
		 * method can be used to create those.
		 *
		 * @param {String} n Name of the control to create.
		 * @param {tinymce.ControlManager} cm Control manager to use inorder to create new control.
		 * @return {tinymce.ui.Control} New control instance or null if no control was created.
		 */
		createControl : function(n, cm) {
			return null;
		},

		/**
		 * Returns information about the plugin as a name/value array.
		 * The current keys are longname, author, authorurl, infourl and version.
		 *
		 * @return {Object} Name/value array containing information about the plugin.
		 */
		getInfo : function() {
			return {
				longname : 'Clear',
				author : 'Miguel Ibero',
				authorurl : 'http://www.peix.org',
				infourl : 'http://www.peix.org/code',
				version : "1.0"
			};
		}
	});

	// Register plugin
	tinymce.PluginManager.add('clear', tinymce.plugins.Clear);
})();

