Ext.data.JsonP.dev_codesnippet({"guide":"<!--\n<div class='toc'>\n<p><strong>Contents</strong></p>\n<ol>\n<li><a href='#!/guide/dev_codesnippet-section-enabling-syntax-highlighting'>Enabling Syntax Highlighting</a><ol>\n<li>\n<a href='#!/guide/dev_codesnippet-section-inline-and-div-based-editors'>Inline and div-based Editors</a></li>\n<li>\n<a href='#!/guide/dev_codesnippet-section-target-page'>Target Page</a></li>\n</ol>\n<li>\n<a href='#!/guide/dev_codesnippet-section-changing-highlighter-theme'>Changing Highlighter Theme</a></li>\n<li>\n<a href='#!/guide/dev_codesnippet-section-changing-supported-languages'>Changing Supported Languages</a></li>\n<li>\n<a href='#!/guide/dev_codesnippet-section-hooking-a-custom-syntax-highlighter'>Hooking a Custom Syntax Highlighter</a></li>\n<li>\n<a href='#!/guide/dev_codesnippet-section-server-side-highlighter'>Server-side Highlighter</a></li>\n<li>\n<a href='#!/guide/dev_codesnippet-section-internet-explorer-8-support'>Internet Explorer 8 Support</a></li>\n<li>\n<a href='#!/guide/dev_codesnippet-section-code-snippets-demo'>Code Snippets Demo</a></li></ol>\n</div>\nCopyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.\nFor licensing, see LICENSE.md.\n-->\n\n\n<h1 id='dev_codesnippet-section-inserting-code-snippets'>Inserting Code Snippets</h1>\n\n<p class=\"requirements\">\n    This feature was introduced in <strong>CKEditor 4.4</strong>. It is provided through an optional plugin that is not included in the CKEditor presets available from the <a href=\"http://ckeditor.com/download\">Download</a> site and <a href=\"#!/guide/dev_widget_installation\">needs to be added to your custom build</a> with <a href=\"http://ckeditor.com/builder\">CKBuilder</a>.\n</p>\n\n\n<p>The optional <a href=\"http://ckeditor.com/addon/codesnippet\">Code Snippet</a> plugin allows you to insert rich code fragments and see a live preview with highlighted syntax. Its original implementation uses the <a href=\"http://highlightjs.org\">highlight.js</a> library, but the plugin exposes a convenient <a href=\"#!/api/CKEDITOR.plugins.codesnippet.highlighter\">interface</a> for hooking any other library, even a server-side one.</p>\n\n<p><p><img src=\"guides/dev_codesnippet/codesnippet_01.png\" alt=\"\" width=\"966\" height=\"376\"></p></p>\n\n<h2 id='dev_codesnippet-section-enabling-syntax-highlighting'>Enabling Syntax Highlighting</h2>\n\n<p>If you are using the <a href=\"#!/guide/dev_framed\">classic editor</a>, you do not need to perform any additional steps other than <a href=\"#!/guide/dev_plugins\">adding</a> the optional <a href=\"http://ckeditor.com/addon/codesnippet\">Code Snippet</a> plugin to your build to enable syntax highlighting inside CKEditor.</p>\n\n<h3 id='dev_codesnippet-section-inline-and-div-based-editors'>Inline and div-based Editors</h3>\n\n<p>If you use the <a href=\"#!/guide/dev_inline\">inline</a> or <a href=\"http://ckeditor.com/addon/divarea\">div-based</a> editor, you will need to perform an additional step after installing the plugin, since the highlighter stylesheet will not be loaded automatically by the editor. You will thus need to link the stylesheet for the chosen <code>highlight.js</code> theme in the <code>&lt;head&gt;</code> section of your page. The following code will load the default theme:</p>\n\n<pre><code>&lt;head&gt;\n    ...\n    &lt;link href=\"ckeditor/plugins/codesnippet/lib/highlight/styles/default.css\" rel=\"stylesheet\"&gt;\n&lt;/head&gt;\n</code></pre>\n\n<p class=\"tip\">\n    You can preview themes in the Code Snippet sample that is added to the <code>samples</code> folder of each CKEditor build that includes the plugin. You can also browse them on the <a href=\"http://highlightjs.org/static/test.html\">highlight.js demo page</a>.\n</p>\n\n\n<h3 id='dev_codesnippet-section-target-page'>Target Page</h3>\n\n<p>To see the highlighter styles on the target page where CKEditor content is displayed, you will need to load the <code>highlight.js</code> script and theme's stylesheet on this page. You can either reuse a copy of <code>highlight.js</code> placed in the <code>ckeditor/plugins/codesnippet/lib/highlight</code> directory or download your own copy from the <a href=\"http://highlightjs.org/download\">highlight.js download page</a>.</p>\n\n<p>Attach it to the <code>&lt;head&gt;</code> section of your page. The following code will load the <code>highlight.js</code> library and the stylesheet for the default theme:</p>\n\n<pre><code>&lt;head&gt;\n    ...\n    &lt;link href=\"ckeditor/plugins/codesnippet/lib/highlight/styles/default.css\" rel=\"stylesheet\"&gt;\n    &lt;script src=\"ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js\"&gt;&lt;/script&gt;\n&lt;/head&gt;\n</code></pre>\n\n<p>Inititalize <code>highlight.js</code> on all <code>&lt;pre&gt;&lt;code&gt; .. &lt;/code&gt;&lt;/pre&gt;</code> elements with the following code:</p>\n\n<pre><code>&lt;script&gt;hljs.initHighlightingOnLoad();&lt;/script&gt;\n</code></pre>\n\n<p class=\"tip\">\n    You might also want to initialize the highlighter only on selected elements. In this case you will need to use the <code>hljs.highlightBlock()</code> method on each DOM element containing the code to highlight. See the \"Custom Initialization\" section on the <a href=\"http://highlightjs.org/usage\">highlight.js Usage</a> page for more information.</p>\n\n\n<p>After performing the steps described above, all the code snippets created with CKEditor will be highlighted.</p>\n\n<h2 id='dev_codesnippet-section-changing-highlighter-theme'>Changing Highlighter Theme</h2>\n\n<p>In <a href=\"#!/guide/dev_framed\">classic editor</a> use the CKEDITOR.config.codeSnippet_theme option. For example:</p>\n\n<pre><code>config.codeSnippet_theme = 'school_book';\n</code></pre>\n\n<p>For a complete list of available themes see the Code Snippet sample that is added to the <code>samples</code> folder of each CKEditor build that includes the plugin or the <a href=\"http://highlightjs.org/static/test.html\">highlight.js's demo page</a>.</p>\n\n<p><p><img src=\"guides/dev_codesnippet/codesnippet_05.png\" alt=\"\" width=\"964\" height=\"360\"></p></p>\n\n<p>In <a href=\"#!/guide/dev_inline\">inline</a> or <a href=\"http://ckeditor.com/addon/divarea\">div-based</a> editor and on the target page that displays content created with CKEditor you can switch between themes by loading the different theme's stylesheets. See the <a href=\"#!/guide/dev_codesnippet-section-enabling-syntax-highlighting\">Enabling Syntax Highlighting</a> section for more information.</p>\n\n<h2 id='dev_codesnippet-section-changing-supported-languages'>Changing Supported Languages</h2>\n\n<p>You can customize the list of languages with syntax highlighting support by setting the CKEDITOR.config.codeSnippet_languages option.</p>\n\n<p>The following example will reduce the languages list to JavaScript and PHP only.</p>\n\n<pre><code>config.codeSnippet_languages = {\n    javascript: 'JavaScript',\n    php: 'PHP'\n};\n</code></pre>\n\n<p><p><img src=\"guides/dev_codesnippet/codesnippet_06.png\" alt=\"\" width=\"830\" height=\"142\"></p></p>\n\n<h2 id='dev_codesnippet-section-hooking-a-custom-syntax-highlighter'>Hooking a Custom Syntax Highlighter</h2>\n\n<p>For more information on how to implement a custom highlighter check the <a href=\"#!/api/CKEDITOR.plugins.codesnippet.highlighter\">Code Snippet Highlighter API</a> documentation.</p>\n\n<h2 id='dev_codesnippet-section-server-side-highlighter'>Server-side Highlighter</h2>\n\n<p>The Code Snippet plugin interface was designed with extensibility in mind. As a sample implementation the <a href=\"http://qbnz.com/highlighter/\">GeSHi</a> highlighter integration was created and is available as a separate <a href=\"http://ckeditor.com/addon/codesnippetgeshi\">Code Snippet GeSHi</a> plugin.</p>\n\n<p>Full installation instructions can be found in the <a href=\"#!/guide/dev_codesnippetgeshi\">Iserting Code Snippets Using GeSHi</a> article.</p>\n\n<h2 id='dev_codesnippet-section-internet-explorer-8-support'>Internet Explorer 8 Support</h2>\n\n<p>Since <strong>Internet Explorer 8</strong> support was dropped in <a href=\"http://highlightjs.org\">highlight.js</a> 7.3 (see the <a href=\"https://github.com/isagalaev/highlight.js/issues/280\">GitHub ticket</a>), the default implementation of the Code Snippet plugin will not provide any higlighting in this browser version. To solve this problem use a custom highlighter.</p>\n\n<h2 id='dev_codesnippet-section-code-snippets-demo'>Code Snippets Demo</h2>\n\n<p>See the <a href=\"../samples/codesnippet.html\">working \"Inserting Code Snippets\" sample</a> that shows a few instances of the code snippet widgets as well as the syntax highlighter themes which are available in the default implementation.</p>\n","title":"Code Snippets","meta_description":"Using syntax highlighting in CKEditor.","meta_keywords":"ckeditor, editor, wysiwyg, code, snippet, snippets, coloring, syntax, highlighting, widget, widgets, configure, configuration, setup, settings, options, customization, customize, customise, customisation, config, modification, modify, change"});