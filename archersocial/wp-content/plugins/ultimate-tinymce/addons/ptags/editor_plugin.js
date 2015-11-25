/**
 * Ptags Button plug-in for TinyMCE version 3.x
 * @author     Josh Lobe
 * @version    1.0
 * @package    Ptags Button
 * @link http://www.joshlobe.com/
 * Ptags Button plugin for TinyMCE
 */
(function(){

    //tinymce.PluginManager.requireLangPack('ptags');
    
    tinymce.create('tinymce.plugins.ptags', {
    
        init : function(ed, url){
            ed.addCommand('jwlPtagsButton', function(){
				
				ed.windowManager.open({
					file : url + '/ptags.htm',
					width : 400,
					height : 300,
					inline : 1
				}, {
					plugin_url : url, // Plugin absolute URL
					some_custom_arg : 'custom arg' // Custom argument
				});
				
                ptags_sel_content = tinyMCE.activeEditor.selection.getContent();
                //tinyMCE.activeEditor.selection.setContent('<p class="none">' + ptags_sel_content + '</p>');
            });
            ed.addButton('ptags', {
                title: ed.getLang('ptags.title'),
                //image: url + '/ptags.png',
                cmd: 'jwlPtagsButton'
            });
            ed.addShortcut('alt+ctrl+p', ed.getLang('ptags.php'), 'jwlPtagsButton');			
        },
        createControl : function(n, cm){
            return null;
        },
        getInfo : function(){
            return {
                longname: 'Tinymce Ptags Button',
                author: 'Josh Lobe',
                authorurl: 'http://joshlobe.com/',
                infourl: 'http://joshlobe.com/',
                version: "1.0"
            };
        }
    });
    tinymce.PluginManager.add('ptags', tinymce.plugins.ptags);
})();



