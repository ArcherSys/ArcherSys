
(function () {
	//tinymce.PluginManager.requireLangPack('clear');
	tinymce.create('tinymce.plugins.Clear', {
		init: function (ed, url) {
			ed.addButton('clearleft', {
				/*title : 'clear.clearleft_desc',*/
				title : ed.getLang('div.clearleft_desc'),
				cmd: 'clearLeft',
				//image: url + '/images/clearleft_button.gif'
			});
			ed.addButton('clearright', {
				/*title : 'clear.clearright_desc',*/
				title : ed.getLang('div.clearright_desc'),
				cmd: 'clearRight',
				//image: url + '/images/clearright_button.gif'
			});
			ed.addButton('clearboth', {
				/*title : 'clear.clearboth_desc',*/
				title : ed.getLang('div.clearboth_desc'),
				cmd: 'clearBoth',
				//image: url + '/images/clearboth_button.gif'
			});
			var clearHTML = '<img src="' + url + '/images/trans.gif" style="clear:$1;" class="mceClear mceClear$1 mceItemNoResize" title="' + ed.getLang('clear.clear_alt') + '" />';
			var insertClear = function (clear) {
				var html = clearHTML.replace(/\$1/g, clear);
				ed.execCommand('mceInsertContent', false, html);
			};
			ed.addCommand('clearLeft', function () {
				insertClear('left');
			});
			ed.addCommand('clearRight', function () {
				insertClear('right');
			});
			ed.addCommand('clearBoth', function () {
				insertClear('both');
			});
			ed.onNodeChange.add(function (ed, cm, n) {
				cm.setActive('clearleft', n.nodeName === 'IMG' && ed.dom.hasClass(n, 'mceClearleft'));
				cm.setActive('clearright', n.nodeName === 'IMG' && ed.dom.hasClass(n, 'mceClearright'));
				cm.setActive('clearboth', n.nodeName === 'IMG' && ed.dom.hasClass(n, 'mceClearboth'));
			});
			ed.onInit.add(function () {
				ed.dom.loadCSS(url + '/css/clear.css');
			});
			ed.onPostRender.add(function () {
				if (ed.theme.onResolveName) {
					ed.theme.onResolveName.add(function (th, o) {
						if (o.node.nodeName == 'IMG') {
							if (ed.dom.hasClass(o.node, 'mceClearleft')) o.name = 'clear.left';
							else if (ed.dom.hasClass(o.node, 'mceClearright')) o.name = 'clear.right';
							else if (ed.dom.hasClass(o.node, 'mceClearboth')) o.name = 'clear.both';
						}
					});
				}
			});
			ed.onBeforeSetContent.add(function (ed, o) {
				o.content = o.content.replace(/<div clear=" *([^" ]+) *"><\/div>/g, clearHTML);
				o.content = o.content.replace(/<div style="clear: *([^"; ]+) *;?"><\/div>/g, clearHTML);
			});
			ed.onPostProcess.add(function (ed, o) {
				if (o.get) o.content = o.content.replace(/<img[^>]+>/g, function (html) {
					if (html.indexOf('class="mceClear') !== -1) {
						var m, clear = (m = html.match(/mceClear([a-z]+)/)) ? m[1] : '';
						html = '<div style="clear:' + clear + ';"></div>';
					}
					return html;
				});
			});
		},
		createControl: function (n, cm) {
			return null;
		},
		getInfo: function () {
			return {
				longname: 'Clear',
				author: 'Miguel Ibero',
				authorurl: 'http://www.peix.org',
				infourl: 'http://www.peix.org/code',
				version: "1.0"
			};
		}
	});
	tinymce.PluginManager.add('clear', tinymce.plugins.Clear);
})();