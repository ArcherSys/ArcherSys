Ext.data.JsonP.plugin_sdk_sample_1({"guide":"<!--\n<div class='toc'>\n<p><strong>Contents</strong></p>\n<ol>\n<li><a href='#!/guide/plugin_sdk_sample_1-section-plugin-files'>Plugin Files</a></li>\n<li>\n<a href='#!/guide/plugin_sdk_sample_1-section-plugin-source-code'>Plugin Source Code</a></li>\n<li>\n<a href='#!/guide/plugin_sdk_sample_1-section-creating-an-editor-command'>Creating an Editor Command</a></li>\n<li>\n<a href='#!/guide/plugin_sdk_sample_1-section-creating-the-toolbar-button'>Creating the Toolbar Button</a></li>\n<li>\n<a href='#!/guide/plugin_sdk_sample_1-section-ckeditor-initialization'>CKEditor Initialization</a></li>\n<li>\n<a href='#!/guide/plugin_sdk_sample_1-section-plugin-dialog-window'>Plugin Dialog Window</a><ol>\n<li>\n<a href='#!/guide/plugin_sdk_sample_1-section-the-dialog-defintion'>The Dialog Defintion</a></li>\n<li>\n<a href='#!/guide/plugin_sdk_sample_1-section-dialog-window-tabs'>Dialog Window Tabs</a></li>\n<li>\n<a href='#!/guide/plugin_sdk_sample_1-section-dialog-window-tabs-elements'>Dialog Window Tabs Elements</a></li>\n</ol>\n<li>\n<a href='#!/guide/plugin_sdk_sample_1-section-plugin-behavior'>Plugin Behavior</a></li>\n<li>\n<a href='#!/guide/plugin_sdk_sample_1-section-full-source-code'>Full Source Code</a></li>\n<li>\n<a href='#!/guide/plugin_sdk_sample_1-section-working-example'>Working Example</a></li>\n<li>\n<a href='#!/guide/plugin_sdk_sample_1-section-further-enhancements'>Further Enhancements</a></li>\n<li>\n<a href='#!/guide/plugin_sdk_sample_1-section-further-reading'>Further Reading</a></li></ol>\n</div>\nCopyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.\nFor licensing, see LICENSE.md.\n-->\n\n\n<h1 id='plugin_sdk_sample_1-section-creating-a-simple-ckeditor-plugin-%28part-1%29'>Creating a Simple CKEditor Plugin (Part 1)</h1>\n\n<p>The aim of this tutorial is to demonstrate how to create a basic CKEditor plugin.</p>\n\n<p>We are going to develop an <strong>abbreviation plugin</strong> that lets the users insert abbreviations\ninto their documents. The abbreviations will be using the <code>&lt;abbr&gt;</code> HTML element and\nwill be added through a dialog window that is opened after clicking a dedicated\ntoolbar button.</p>\n\n<p>The plugin will be named <strong>abbr</strong>, just like the name of the corresponding HTML\nelement that we are going to use in its implementation.</p>\n\n<h2 id='plugin_sdk_sample_1-section-plugin-files'>Plugin Files</h2>\n\n<p>Firstly, we will need to create the <code>abbr</code> folder inside the <code>plugins</code> directory of\nthe CKEditor installation.</p>\n\n<p class=\"tip\">\n    Remember that for CKEditor the name of the plugin folder is important and has to\n    be the same as the name of the plugin, otherwise the editor will not be able to\n    recognize it.\n</p>\n\n\n<p>Inside the newly created <code>abbr</code> folder we are going to place the <code>plugin.js</code> file that\nwill contain the plugin logic. Apart from that, since we will also need a toolbar\nicon for our plugin, we are going to add an <code>icons</code> folder and subsequently\nplace the <code>abbr.png</code> file inside. Finally, we will create the <code>dialogs</code> folder with the\n<code>abbr.js</code> file, which will store the definition for the dialog we will use in our plugin.</p>\n\n<p>To sum up, we will need the following file structure for our plugin to work:</p>\n\n<ul>\n<li><code>ckeditor root/</code>\n\n<ul>\n<li><code>plugins/</code>\n\n<ul>\n<li><code>abbr/</code>\n\n<ul>\n<li><code>icons/</code>\n\n<ul>\n<li><code>abbr.png</code></li>\n</ul>\n</li>\n<li><code>dialogs/</code>\n\n<ul>\n<li><code>abbr.js</code></li>\n</ul>\n</li>\n<li><code>plugin.js</code></li>\n</ul>\n</li>\n</ul>\n</li>\n</ul>\n</li>\n</ul>\n\n\n<h2 id='plugin_sdk_sample_1-section-plugin-source-code'>Plugin Source Code</h2>\n\n<p>With the following structure ready, it is time to open the <code>plugin.js</code> file in\na text editor and to start creating the source code of the plugin.</p>\n\n<pre><code>CKEDITOR.plugins.add( 'abbr', {\n    icons: 'abbr',\n    init: function( editor ) {\n        // Plugin logic goes here...\n    }\n});\n</code></pre>\n\n<p>All CKEditor plugins are created by using the CKEDITOR.plugins.add function.\nThis function should contain the plugin name &mdash; <code>'abbr'</code> &mdash; and the plugin logic\nplaced inside the CKEDITOR.pluginDefinition.init function that is\ncalled upon the initialization of the editor instance.</p>\n\n<p>Additionally, as we are going to define a toolbar button, the <code>icons</code> property is set, including the name of the icon file (important: matching the <strong>button name</strong>, in lowercase).</p>\n\n<h2 id='plugin_sdk_sample_1-section-creating-an-editor-command'>Creating an Editor Command</h2>\n\n<p>We want our plugin to have a dialog window, so we need to define an editor\ncommand that opens a new dialog window. To do this, we will need to use\nthe editor.addCommand  function to register the\n<code>abbr</code> command.</p>\n\n<pre><code>editor.addCommand( 'abbr', new CKEDITOR.dialogCommand( 'abbrDialog' ) );\n</code></pre>\n\n<p>This command opens the <code>abbrDialog</code> dialog that we are going to define in a moment by using the CKEDITOR.dialogCommand class.</p>\n\n<h2 id='plugin_sdk_sample_1-section-creating-the-toolbar-button'>Creating the Toolbar Button</h2>\n\n<p>The plugin dialog window is to be opened by using a toolbar button. To this\nend, we need to define a button that will be associated with the dialog\nwindow.</p>\n\n<pre><code>editor.ui.addButton( 'Abbr', {\n    label: 'Insert Abbreviation',\n    command: 'abbr',\n    toolbar: 'insert'\n});\n</code></pre>\n\n<p>The above CKEDITOR.ui.addButton function call created a button named <code>'Abbr'</code> with the following properties:</p>\n\n<ul>\n<li><code>label</code> &ndash; the textual part of the button (if visible) and its tooltip.</li>\n<li><code>command</code> &ndash; the command to be executed once the button is activated. This is the command we created in the previous step.</li>\n<li><code>toolbar</code> &ndash; the <a href=\"#!/guide/dev_toolbar-section-toolbar-groups-configuration\">toolbar group</a> into which the button will be added.</li>\n</ul>\n\n\n<p>Please note that you can influence the position of the button in the toolbar group by providing an optional index, for example:</p>\n\n<pre><code>// This could position the button at the beginning of the \"insert\" group.\ntoolbar: 'insert,0'\n\n// This could position the button at the end of the \"insert\" group.\ntoolbar: 'insert,100'\n</code></pre>\n\n<p>Note: The exact position depends on the indexes defined by other buttons available in your toolbar, so it may take some experimenting with index values to create a perfect button sequence within a group.</p>\n\n<h2 id='plugin_sdk_sample_1-section-ckeditor-initialization'>CKEditor Initialization</h2>\n\n<p>It is now time to tell CKEditor to load our plugin. To do so we have to add its name to the\nCKEDITOR.config.extraPlugins configuration option:</p>\n\n<pre><code>config.extraPlugins = 'abbr';\n</code></pre>\n\n<p class=\"tip alert\">\n    Please note that <strong>since CKEditor 4.1 all editor plugins that create content\n    should be integrated with <a href=\"#!/guide/dev_acf\">Advanced Content Filter</a>\n    (ACF)</strong>.\n    <br>\n\n    To follow this guide and at the same time comply with the new CKEditor 4.1 requirements you\n    need to either set <code>config.allowedContent = true;</code> in order to disable\n    <a href=\"#!/guide/dev_advanced_content_filter\">content filtering</a> or\n    <a href=\"#!/guide/plugin_sdk_integration_with_acf\">integrate your plugin with ACF</a>.\n    For more information, please refer to the official\n    <a href=\"#!/guide/plugin_sdk_integration_with_acf\">Advanced Content Filter integration guide</a>.\n</p>\n\n\n<p>Now load a CKEditor sample page. You should be able to see the new plugin toolbar button in the toolbar. For example:</p>\n\n<p><p><img src=\"guides/plugin_sdk_sample_1/abbr1PluginLoaded.png\" alt=\"Abbreviation plugin has been loaded\" width=\"607\" height=\"279\"></p></p>\n\n<h2 id='plugin_sdk_sample_1-section-plugin-dialog-window'>Plugin Dialog Window</h2>\n\n<p>Clicking the button should open the <code>abbrDialog</code> dialog window. One interesting aspect of it is that it is possible to define dialogs in separate files which are loaded on demand. In our case, we will tell the editor to load the dialog from the <code>dialogs/abbr.js</code> file when the button is clicked. To do so, we need to add the following line to the <code>init</code> function:</p>\n\n<pre><code>CKEDITOR.dialog.add( 'abbrDialog', this.path + 'dialogs/abbr.js' );\n</code></pre>\n\n<p>In the code above we registered the <code>abbrDialog</code> dialog name, telling the editor to load the dialog definition from the <code>dialog/abbr.js</code> file out of the plugin installation folder (<code>this.path</code>).</p>\n\n<h3 id='plugin_sdk_sample_1-section-the-dialog-defintion'>The Dialog Defintion</h3>\n\n<p>It is time to work on the <code>dialogs/abbr.js</code> file itself. First, we will simply repeat the CKEDITOR.dialog.add call, but now we will return the dialog definition to the editor:</p>\n\n<pre><code>CKEDITOR.dialog.add( 'abbrDialog', function ( editor ) {\n    return {\n        ... The dialog defition comes here ...\n    };\n});\n</code></pre>\n\n<p>Check the CKEDITOR.dialog.definition object documentation for a full reference on editor dialog definition.</p>\n\n<p>In our case we will give the dialog window a name (<code>'abbrDialog'</code>) and use the\ntitle,\nminWidth, and\nminHeight parameters to define its\ntitle and minimum dimensions, respectively.</p>\n\n<p class=\"tip\">\n    The name selected for the dialog window is the dialog name that appears in the\n    <code>addCommand</code> function above.\n</p>\n\n\n<h3 id='plugin_sdk_sample_1-section-dialog-window-tabs'>Dialog Window Tabs</h3>\n\n<p>The dialog window should also contain some\ncontents, so we will begin with\nadding two tabs along with their labels. Note that by default CKEditor also adds\nthe standard <strong>OK</strong> and <strong>Cancel</strong> buttons.</p>\n\n<p>In order to create the Abbreviation plugin dialog window along with two tabs,\nadd the following code in the <code>dialogs/abbr.js</code> file below the plugin definition:</p>\n\n<pre><code>CKEDITOR.dialog.add( 'abbrDialog', function( editor ) {\n    return {\n        title: 'Abbreviation Properties',\n        minWidth: 400,\n        minHeight: 200,\n\n        contents: [\n            {\n                id: 'tab-basic',\n                label: 'Basic Settings',\n                elements: [\n                    // UI elements of the first tab will be defined here.\n                ]\n            },\n            {\n                id: 'tab-adv',\n                label: 'Advanced Settings',\n                elements: [\n                    // UI elements of the second tab will be defined here.\n                ]\n            }\n        ]\n    };\n});\n</code></pre>\n\n<p>The result of this change can be seen immediately. Click the <strong>Insert Abbreviation</strong>\ntoolbar button in order to open the newly created <strong>Abbreviation Properties</strong>\ndialog window containing two (empty) tabs.</p>\n\n<p><p><img src=\"guides/plugin_sdk_sample_1/abbr1PluginDialog1.png\" alt=\"A plugin dialog window with two tabs added\" width=\"426\" height=\"327\"></p></p>\n\n<h3 id='plugin_sdk_sample_1-section-dialog-window-tabs-elements'>Dialog Window Tabs Elements</h3>\n\n<p>User interface elements that can be added to a dialog window tab are defined in\nthe elements parameter, which is an\narray of CKEDITOR.dialog.definition.uiElement objects.</p>\n\n<p>The <strong>Basic Settings</strong> tab will contain two mandatory text fields (<code>type: 'text'</code>)\nwith  the abbreviation and its explanation. Since both fields are obligatory, it is\nuseful to add a simple validation mechanism in order to ensure that the user\nfills them.</p>\n\n<p>The <strong>Advanced Settings</strong> tab will contain a single optional text field that allows\nthe user to assign an ID to the abbreviation element.</p>\n\n<p>The code snippet presented below shows a full definition of the contents of both\nplugin tabs.</p>\n\n<pre><code>contents: [\n    {\n        id: 'tab-basic',\n        label: 'Basic Settings',\n        elements: [\n            {\n                type: 'text',\n                id: 'abbr',\n                label: 'Abbreviation',\n                validate: CKEDITOR.dialog.validate.notEmpty( \"Abbreviation field cannot be empty.\" )\n            },\n            {\n                type: 'text',\n                id: 'title',\n                label: 'Explanation',\n                validate: CKEDITOR.dialog.validate.notEmpty( \"Explanation field cannot be empty.\" )\n            }\n        ]\n    },\n    {\n        id: 'tab-adv',\n        label: 'Advanced Settings',\n        elements: [\n            {\n                type: 'text',\n                id: 'id',\n                label: 'Id'\n            }\n        ]\n    }\n]\n</code></pre>\n\n<p>When you reload the editor instance and open the <strong>Abbreviation Properties</strong> dialog\nwindow, the <strong>Basic Settings</strong> tab will now contain two mandatory text fields.</p>\n\n<p><p><img src=\"guides/plugin_sdk_sample_1/abbr1PluginDialog2.png\" alt=\"Basic Settings tab of the Abbreviation plugin\" width=\"428\" height=\"327\"></p></p>\n\n<p>The <strong>Advanced Settings</strong> tab only contains a single <strong>Id</strong> text field that can be left empty.</p>\n\n<p><p><img src=\"guides/plugin_sdk_sample_1/abbr1PluginDialog3.png\" alt=\"Advanced Settings tab of the Abbreviation plugin\" width=\"427\" height=\"328\"></p></p>\n\n<h2 id='plugin_sdk_sample_1-section-plugin-behavior'>Plugin Behavior</h2>\n\n<p>The presentation layer of the plugin is now ready, so we can define the plugin\nbehavior to actually make it work.</p>\n\n<p>The onOk method is invoked once the user\naccepts the changes introduced in the\ndialog window by clicking the <strong>OK</strong> button or pressing the <kbd>Enter</kbd> key on the\nkeyboard. Since the plugin adds a new <code>&lt;abbr&gt;</code> element to the DOM tree, we\ncan use the createElement function to\ncreate a new DOM element.</p>\n\n<p>With the new DOM element created, we can now retrieve the values of the\n<code>title</code> and (optional) <code>id</code> fields with the\ngetValueOf function and pass them to\nappropriate <code>&lt;abbr&gt;</code> element attributes by using the\nsetAttribute function.</p>\n\n<p>Finally, we will pass the text entered into the <code>abbr</code> text field as the contents\nof the <code>&lt;abbr&gt;</code> element by using the\nsetText function.</p>\n\n<p>With the contents of the <code>&lt;abbr&gt;</code> element ready, we can insert it into the\ndocument at the location of the cursor by using the\ninsertElement function.</p>\n\n<p>Add the following <code>onOk</code> function code to your dialog window definition, below\nthe code that creates the content of the dialog.</p>\n\n<pre><code>onOk: function() {\n    var dialog = this;\n    var abbr = editor.document.createElement( 'abbr' );\n\n    abbr.setAttribute( 'title', dialog.getValueOf( 'tab-basic', 'title' ) );\n    abbr.setText( dialog.getValueOf( 'tab-basic', 'abbr' ) );\n\n    var id = dialog.getValueOf( 'tab-adv', 'id' );\n    if ( id )\n        abbr.setAttribute( 'id', id );\n\n    editor.insertElement( abbr );\n}\n</code></pre>\n\n<p class=\"tip\">\n    Please note that another way to insert HTML code into CKEditor is by using the\n    <a href=\"#!/api/CKEDITOR.editor-method-insertHtml\">insertHtml</a> function that adds\n    HTML code at the location of the cursor in the document: <code>editor.insertHtml( '&lt;h2>This is a sample header&lt;/h2>&lt;p>This is a sample paragraph.&lt;/p>' );</code>\n</p>\n\n\n<h2 id='plugin_sdk_sample_1-section-full-source-code'>Full Source Code</h2>\n\n<p>The complete content of the <code>plugin.js</code> file is as follows:</p>\n\n<pre><code>CKEDITOR.plugins.add( 'abbr', {\n    icons: 'abbr',\n    init: function( editor ) {\n        editor.addCommand( 'abbr', new CKEDITOR.dialogCommand( 'abbrDialog' ) );\n        editor.ui.addButton( 'Abbr', {\n            label: 'Insert Abbreviation',\n            command: 'abbr',\n            toolbar: 'insert'\n        });\n\n        CKEDITOR.dialog.add( 'abbrDialog', this.path + 'dialogs/abbr.js' );\n    }\n});\n</code></pre>\n\n<p>This is what we have in the <code>dialogs/abbr.js</code> file:</p>\n\n<pre><code>CKEDITOR.dialog.add( 'abbrDialog', function( editor ) {\n    return {\n        title: 'Abbreviation Properties',\n        minWidth: 400,\n        minHeight: 200,\n        contents: [\n            {\n                id: 'tab-basic',\n                label: 'Basic Settings',\n                elements: [\n                    {\n                        type: 'text',\n                        id: 'abbr',\n                        label: 'Abbreviation',\n                        validate: CKEDITOR.dialog.validate.notEmpty( \"Abbreviation field cannot be empty.\" )\n                    },\n                    {\n                        type: 'text',\n                        id: 'title',\n                        label: 'Explanation',\n                        validate: CKEDITOR.dialog.validate.notEmpty( \"Explanation field cannot be empty.\" )\n                    }\n                ]\n            },\n            {\n                id: 'tab-adv',\n                label: 'Advanced Settings',\n                elements: [\n                    {\n                        type: 'text',\n                        id: 'id',\n                        label: 'Id'\n                    }\n                ]\n            }\n        ],\n        onOk: function() {\n            var dialog = this;\n\n            var abbr = editor.document.createElement( 'abbr' );\n            abbr.setAttribute( 'title', dialog.getValueOf( 'tab-basic', 'title' ) );\n            abbr.setText( dialog.getValueOf( 'tab-basic', 'abbr' ) );\n\n            var id = dialog.getValueOf( 'tab-adv', 'id' );\n            if ( id )\n                abbr.setAttribute( 'id', id );\n\n            editor.insertElement( abbr );\n        }\n    };\n});\n</code></pre>\n\n<p class=\"tip\">\n    You can also <a href=\"https://github.com/ckeditor/ckeditor-docs-samples/tree/master/tutorial-abbr-1\">download the\n    entire plugin folder</a> inluding the icon and the fully commented source code.\n</p>\n\n\n<h2 id='plugin_sdk_sample_1-section-working-example'>Working Example</h2>\n\n<p>The plugin code is now ready. When you click the <strong>Insert Abbreviation</strong> toolbar\nbutton, the <strong>Abbreviation Properties</strong> dialog window will open. Fill in the\nobligatory <strong>Abbreviation</strong> and <strong>Explanation</strong> fields and click the <strong>OK</strong> button.</p>\n\n<p><p><img src=\"guides/plugin_sdk_sample_1/abbr1WorkingExample1.png\" alt=\"Abbreviation added in the dialog window\" width=\"607\" height=\"437\"></p></p>\n\n<p>The newly added abbreviation will be inserted into the document and will be\ndisplayed using the default styling of your browser. In Firefox, for example,\nthe abbreviation will be underlined using a dotted line and the explanation\nwill be displayed in a tooltip.</p>\n\n<p><p><img src=\"guides/plugin_sdk_sample_1/abbr1WorkingExample2.png\" alt=\"Abbreviation added in the dialog window\" width=\"606\" height=\"254\"></p></p>\n\n<h2 id='plugin_sdk_sample_1-section-further-enhancements'>Further Enhancements</h2>\n\n<p>The Abbreviation plugin is now able to add a new <code>&lt;abbr&gt;</code> element to the document,\nbut does not make it possible to edit an already existing element. For this\nfeature along with the context menu support check the\n<a href=\"#!/guide/plugin_sdk_sample_2\">second part of the tutorial</a>.</p>\n\n<h2 id='plugin_sdk_sample_1-section-further-reading'>Further Reading</h2>\n\n<p>Refer to the following resources for more information about creating CKEditor plugins:</p>\n\n<ul>\n<li><a href=\"#!/guide/plugin_sdk_sample\">Creating a CKEditor Plugin in 20 Lines of Code</a> &ndash; Create your first CKEditor plugin that inserts a piece of HTML code into the document.</li>\n<li><a href=\"#!/guide/plugin_sdk_sample_2\">Simple Plugin, Part 2</a> &ndash; Modify the Abbreviation plugin by adding a custom context menu and abbreviation editing capabilities.</li>\n<li><a href=\"#!/guide/plugin_sdk_integration_with_acf\">Integrating Plugins with Advanced Content Filter</a> &ndash; Learn how to implement Advanced Content Filter support in your plugins.</li>\n<li><a href=\"#!/guide/plugin_sdk_styles\">Plugin Stylesheets</a> &ndash; Tips on how to integrate custom plugin stylesheets with CKEditor.</li>\n</ul>\n\n","title":"Simple Plugin (Part 1)","meta_description":"Learn by creating a simple plugin, part 1.","meta_keywords":"ckeditor, editor, wysiwyg, plugin, plugins, addon, add-on, sdk, custom, development, tutorial, example, sample, abbr, abbreviation"});