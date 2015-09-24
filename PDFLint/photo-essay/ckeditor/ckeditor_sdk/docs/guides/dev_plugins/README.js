Ext.data.JsonP.dev_plugins({"guide":"<!--\n<div class='toc'>\n<p><strong>Contents</strong></p>\n<ol>\n<li><a href='#!/guide/dev_plugins-section-where-to-look-for-plugins%3F'>Where to Look for Plugins?</a></li>\n<li>\n<a href='#!/guide/dev_plugins-section-online-builder-installation'>Online Builder Installation</a><ol>\n<li>\n<a href='#!/guide/dev_plugins-section-through-ckbuilder'>Through CKBuilder</a></li>\n<li>\n<a href='#!/guide/dev_plugins-section-through-add-on-repository'>Through Add-on Repository</a></li>\n</ol>\n<li>\n<a href='#!/guide/dev_plugins-section-manual-installation'>Manual Installation</a></li></ol>\n</div>\nCopyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.\nFor licensing, see LICENSE.md.\n-->\n\n\n<h1 id='dev_plugins-section-installing-plugins'>Installing Plugins</h1>\n\n<p>CKEditor has plugin-based architecture. In fact, initially the editor core is an empty box, which is then filled with features provided by plugins. Even the editor interface, like toolbars, buttons, and the editing area, are plugins, too!</p>\n\n<p>The default installation of CKEditor (that you are probably using now) includes a selection of plugins. At any moment you can enrich your editor with additional plugins and as a result, bring new useful features to your users.</p>\n\n<h2 id='dev_plugins-section-where-to-look-for-plugins%3F'>Where to Look for Plugins?</h2>\n\n<p>The <a href=\"http://ckeditor.com/addons/plugins\">CKEditor Add-ons Repository</a> is an online service designed to find and share editor plugins. Its structure, with plugin categories, comprehensive descriptions, and screenshots, makes it easy to understand the plugin features and the comment system lets you socialize with the CKEditor community or provide instant feedback. If you are a plugin developer, the repository is also the best place to showcase your skills and reach a large user base.</p>\n\n<h2 id='dev_plugins-section-online-builder-installation'>Online Builder Installation</h2>\n\n<p>If you found some interesting plugins in the Add-ons Repository, you can easily add them to your custom build.</p>\n\n<h3 id='dev_plugins-section-through-ckbuilder'>Through CKBuilder</h3>\n\n<p>The easiest method is to visit the <a href=\"http://ckeditor.com/builder\">CKBuilder</a> page and find the plugins that you wish to have in the <strong>Available Plugins</strong> list on the right.</p>\n\n<p><img src=\"guides/dev_plugins/add_plugin_ckbuilder_3.png\" alt=\"Selected Plugins and Available Plugins lists in CKBuilder\" width=\"778\" height=\"494\"></p>\n\n<p>Drag the plugins that you want to add to the <strong>Selected Plugins</strong> list on the left. All plugin dependencies will be resolved automatically for you and the required plugins will be added by the builder. When you are happy with your configuration, click the <strong>Download</strong> button at the bottom of the CKBuilder page to download your custom build with all selected plugins included.</p>\n\n<p>When you install your custom build, you will see that the additional plugins (in this example: <a href=\"http://ckeditor.com/addon/language\">Language</a>) are available in your CKEditor.</p>\n\n<p><img src=\"guides/dev_plugins/add_plugin_ckbuilder_4.png\" alt=\"A custom CKEditor build with the Language plugin\" width=\"502\" height=\"205\"></p>\n\n<h3 id='dev_plugins-section-through-add-on-repository'>Through Add-on Repository</h3>\n\n<p>Visit the plugin page in the <a href=\"http://ckeditor.com/addons/plugins/all\">Add-ons Repository</a> and click the \"<strong>Add to my editor</strong>\" button.</p>\n\n<p><img src=\"guides/dev_plugins/add_plugin_ckbuilder_1.png\" alt=\"Adding a plugin to the editor build\" width=\"416\" height=\"146\"></p>\n\n<p>When you are ready, click the \"<strong>Build my editor</strong>\" button on the right to go to CKBuilder. The plugin that you have just added will be counted as \"selected\".</p>\n\n<p><img src=\"guides/dev_plugins/add_plugin_ckbuilder_2.png\" alt=\"Building a custom CKEditor version\" width=\"159\" height=\"234\"></p>\n\n<p>Please note that in CKBuilder all plugin dependencies will be resolved automatically for you. You can fine-tune your build and when you are happy with your configuration, click the <strong>Download</strong> button at the bottom of the CKBuilder page to download your custom build with selected plugins included.</p>\n\n<h2 id='dev_plugins-section-manual-installation'>Manual Installation</h2>\n\n<p>Using CKBuilder is a recommended solution, however, if you have plugins developed by yourself or by third parties, you can add plugins to your local installation manually by following the steps described below:</p>\n\n<ol>\n<li><p><strong>Extract</strong> the plugin <code>.zip</code> archive.</p></li>\n<li><p><strong>Copy</strong> the plugin files to the <code>plugins</code> folder of your CKEditor installation. Each plugin must be placed in a sub-folder that matches its \"technical\" name.</p>\n\n<p> For example, the <a href=\"http://ckeditor.com/addon/language\">Language plugin</a> would be installed into this folder: <code>&lt;CKEditor folder&gt;/plugins/language</code>.</p></li>\n<li><p><strong>Check and resolve plugin dependencies.</strong> If a plugin needs others to work, you will need to add these manually as well.</p></li>\n<li><p><strong>Enable the plugin.</strong> Use the extraPlugins setting to add the plugin to your confiuration:</p>\n\n<pre><code> config.extraPlugins = 'language';\n</code></pre>\n\n<p> If a plugin has any dependencies, you will need to enable these, too.</p></li>\n</ol>\n\n\n<p>Your plugin will now be available in your CKEditor installation.</p>\n\n<p class=\"tip\">\n    To avoid the manual installation process <a href=\"http://ckeditor.com/add/plugin\">submit your plugins to the Add-ons Repository</a> and encourage third-party developers to do so. In this way you will be able to both give something to the community and get valuable feedback on your work.\n</p>\n\n","title":"Installing Plugins","meta_description":"How to download, install, and use CKEditor plugins.","meta_keywords":"ckeditor, editor, plugins, plugin, download, install, installation"});