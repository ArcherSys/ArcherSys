/**
 * LineBreak Button plug-in for TinyMCE version 3.x
 * @author     Josh Lobe
 * @version    1.0
 * @package    LineBreak Button
 * @link http://www.joshlobe.com/
 * LineBreak Button plugin for TinyMCE
 */
(function(){

    tinymce.PluginManager.requireLangPack('linebreak');
    
    tinymce.create('tinymce.plugins.linebreak', {
    
        init : function(ed, url){
            ed.addCommand('jwlLineBreakButton', function(){
				
                linebreak_sel_content = tinyMCE.activeEditor.selection.getContent();
                tinyMCE.activeEditor.selection.setContent('<br class="none" />');
            });
            ed.addButton('linebreak', {
                title: ed.getLang('linebreak.title'),
                //image: url + '/linebreak.png',
                cmd: 'jwlLineBreakButton'
            });
            //ed.addShortcut('alt+ctrl+l', ed.getLang('linebreak.php'), 'jwlLineBreakButton');			
        },
        createControl : function(n, cm){
            return null;
        },
        getInfo : function(){
            return {
                longname: 'Tinymce LineBreak Button',
                author: 'Josh Lobe',
                authorurl: 'http://joshlobe.com/',
                infourl: 'http://joshlobe.com/',
                version: "1.0"
            };
        }
    });
    tinymce.PluginManager.add('linebreak', tinymce.plugins.linebreak);
})();



