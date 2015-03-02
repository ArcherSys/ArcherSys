/**
 * Span Button plug-in for TinyMCE version 3.x
 * @author     Josh Lobe
 * @version    1.0
 * @package    Span Button
 * @link http://www.joshlobe.com/
 * Span Button plugin for TinyMCE
 */
(function(){

    //tinymce.PluginManager.requireLangPack('jwlspan');
    
    tinymce.create('tinymce.plugins.jwlspan', {
    
        init : function(ed, url){
            ed.addCommand('jwlSpanButton', function(){
                jwl_sel_content = tinyMCE.activeEditor.selection.getContent();
                tinyMCE.activeEditor.selection.setContent('<span>' + jwl_sel_content + '</span>');
            });
            ed.addButton('jwlSpan', {
                title: ed.getLang('jwlspan.title'),
                //image: url + '/span.png',
                cmd: 'jwlSpanButton'
            });
			//set button to pressed when cursor is within a span tag
			ed.onNodeChange.add(function(ed, cm, n) {
				cm.setActive('jwlSpan', n.nodeName == 'SPAN');
			});
            //ed.addShortcut('alt+ctrl+x', ed.getLang('jwlspan.php'), 'jwlSpanButton');			
        },
        createControl : function(n, cm){
            return null;
        },
        getInfo : function(){
            return {
                longname: 'Tinymce Span Button',
                author: 'Josh Lobe',
                authorurl: 'http://joshlobe.com/',
                infourl: 'http://joshlobe.com/',
                version: "1.0"
            };
        }
    });
    tinymce.PluginManager.add('jwlspan', tinymce.plugins.jwlspan);
})();



