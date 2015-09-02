(function() {
        //tinymce.PluginManager.requireLangPack('tagwrap');

        tinymce.create('tinymce.plugins.TagwrapPlugin', {
                
                init : function(ed, url) {
                        
                        ed.addCommand('mceTagwrap', function() {
                                ed.windowManager.open({
                                        file : url + '/tagwrap.htm',
                                        width : 920 + ed.getLang('tagwrap.delta_width', 0),
                                        height : 740 + ed.getLang('tagwrap.delta_height', 0),
                                        inline : 1
                                }, {
                                        plugin_url : url, 
                                        some_custom_arg : 'custom arg' 
                                });
                        });

                       
                        ed.addButton('tagwrap', {
                                title : ed.getLang('tagwrap.desc'),
                                cmd : 'mceTagwrap',
                                //image : url + '/img/tagwrap.png'
                        });
                },
				
				
                createControl : function(n, cm) {
                        return null;
                },

                
                getInfo : function() {
                        return {
                                longname : 'TagWrap plugin',
                                author : 'Josh Lobe',
                                authorurl : 'http://joshlobe.com',
                                infourl : 'http://plugins.joshlobe.com',
                                version : "1.0"
                        };
                }
        });

        
        tinymce.PluginManager.add('tagwrap', tinymce.plugins.TagwrapPlugin);
})();