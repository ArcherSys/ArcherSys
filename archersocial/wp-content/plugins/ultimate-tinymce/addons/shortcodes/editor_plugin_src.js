(function() {
       // tinymce.PluginManager.requireLangPack('shortcodes');

        tinymce.create('tinymce.plugins.ShortcodesPlugin', {
                
                init : function(ed, url) {
                        
                        ed.addCommand('mceShortcodes', function() {
                                ed.windowManager.open({
                                        file : url + '/shortcodes.php',
                                        width : 320 + ed.getLang('shortcodes.delta_width', 0),
                                        height : 600 + ed.getLang('shortcodes.delta_height', 0),
                                        inline : 1
                                }, {
                                        plugin_url : url, 
                                        some_custom_arg : 'custom arg' 
                                });
                        });

                       
                        ed.addButton('shortcodes', {
                                title : ed.getLang('shortcodes.desc'),
                                cmd : 'mceShortcodes',
                                //image : url + '/img/shortcodes.gif'
                        });
                },
				
				
                createControl : function(n, cm) {
                        return null;
                },

                
                getInfo : function() {
                        return {
                                longname : 'Shortcodes plugin',
                                author : 'Josh Lobe',
                                authorurl : 'http://joshlobe.com',
                                infourl : 'http://plugins.joshlobe.com',
                                version : "1.0"
                        };
                }
        });

        
        tinymce.PluginManager.add('shortcodes', tinymce.plugins.ShortcodesPlugin);
})();