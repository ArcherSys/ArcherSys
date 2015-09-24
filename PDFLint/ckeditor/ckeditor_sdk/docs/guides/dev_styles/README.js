Ext.data.JsonP.dev_styles({"guide":"<!--\n<div class='toc'>\n<p><strong>Contents</strong></p>\n<ol>\n<li><a href='#!/guide/dev_styles-section-defining-styles'>Defining Styles</a><ol>\n<li>\n<a href='#!/guide/dev_styles-section-using-an-external-styles-definition-file'>Using an External Styles Definition File</a></li>\n</ol>\n<li>\n<a href='#!/guide/dev_styles-section-style-rules'>Style Rules</a></li>\n<li>\n<a href='#!/guide/dev_styles-section-style-types'>Style Types</a></li>\n<li>\n<a href='#!/guide/dev_styles-section-widget-styles'>Widget Styles</a></li>\n<li>\n<a href='#!/guide/dev_styles-section-the-stylesheet-parser-plugin'>The Stylesheet Parser Plugin</a><ol>\n<li>\n<a href='#!/guide/dev_styles-section-choosing-the-css-selectors'>Choosing the CSS Selectors</a></li>\n<li>\n<a href='#!/guide/dev_styles-section-limiting-the-css-selectors'>Limiting the CSS Selectors</a></li>\n</ol>\n<li>\n<a href='#!/guide/dev_styles-section-editor-styles-demo'>Editor Styles Demo</a></li>\n<li>\n<a href='#!/guide/dev_styles-section-related-features'>Related Features</a></li></ol>\n</div>\nCopyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.\nFor licensing, see LICENSE.md.\n-->\n\n\n<h1 id='dev_styles-section-applying-styles-to-editor-content'>Applying Styles to Editor Content</h1>\n\n<p class=\"requirements\">\n    This feature is provided through the <a href=\"http://ckeditor.com/addon/stylescombo\">Styles Combo</a> plugin that is included in the Standard and Full presets available from the official CKEditor <a href=\"http://ckeditor.com/download\">Download</a> site. You can also <a href=\"#!/guide/dev_plugins\">add it to your custom build</a> with <a href=\"http://ckeditor.com/builder\">CKBuilder</a>.\n</p>\n\n\n<p>The <a href=\"http://ckeditor.com/addon/stylescombo\">Styles Combo</a> plugin adds the <strong>Styles</strong> drop-down list to the CKEditor toolbar. This list makes it easy to apply customized styles and semantic values to content created in the editor. If you want to quickly <a href=\"#!/guide/dev_removeformat\">remove inline and object styles</a> from your document, use the <strong>Remove Format</strong> button provided by the <a href=\"http://ckeditor.com/addon/removeformat\">Remove Format</a> plugin.</p>\n\n<p><p><img src=\"guides/dev_styles/styles_01.png\" alt=\"\" width=\"922\" height=\"352\"></p></p>\n\n<p>The image above shows the <strong>Styles</strong> drop-down with default styles. The entries available in the drop-down list can (and actually should!) be customized to suit your needs.</p>\n\n<h2 id='dev_styles-section-defining-styles'>Defining Styles</h2>\n\n<p>The styles definition is a JavaScript array which is registered by calling the CKEDITOR.stylesSet.add function. A unique name must be assigned to your style definition, so you can later configure each editor instance to load it. This method lets you create a single style definition which is shared by several CKEditor instances present on the page.</p>\n\n<p>The following code shows how to register a sample style definition.</p>\n\n<pre><code>CKEDITOR.stylesSet.add( 'my_styles', [\n    // Block-level styles\n    { name: 'Blue Title', element: 'h2', styles: { 'color': 'Blue' } },\n    { name: 'Red Title' , element: 'h3', styles: { 'color': 'Red' } },\n\n    // Inline styles\n    { name: 'CSS Style', element: 'span', attributes: { 'class': 'my_style' } },\n    { name: 'Marker: Yellow', element: 'span', styles: { 'background-color': 'Yellow' } }\n] );\n</code></pre>\n\n<p>The definition registration like the one above can be placed inline in the page source, or can live in an external file which is loaded \"on demand\", when needed only (see below).</p>\n\n<p>When the definitions are ready, you must instruct the editor to apply the newly registered styles by using the  CKEDITOR.config.stylesSet setting. This may be set by using <a href=\"#!/guide/dev_configuration\">any of the editor configuration methods available</a>, for example in the <code>config.js</code> file:</p>\n\n<pre><code>config.stylesSet = 'my_styles';\n</code></pre>\n\n<h3 id='dev_styles-section-using-an-external-styles-definition-file'>Using an External Styles Definition File</h3>\n\n<p>The style definition registration call can be included in an external JavaScript file. By default, CKEditor loads the style definition from the <code>styles.js</code> file included in its installation folder.</p>\n\n<p>Your style definition file can be saved in any place of your website (or somewhere in the Internet). You must, however, know the URL required to reach it. For example, you can save the file in the root of your website, and then call it as <code>/styles.js</code>, or place it somewhere else, and refer to it using its full URL, like <code>http://www.example.com/styles.js</code>.</p>\n\n<p>At that point, change the CKEDITOR.config.stylesSet setting to point the editor to your file:</p>\n\n<pre><code>config.stylesSet = 'my_styles:/styles.js';\n</code></pre>\n\n<p>or:</p>\n\n<pre><code>config.stylesSet = 'my_styles:http://www.example.com/styles.js';\n</code></pre>\n\n<p>The syntax for the style definition setting is always: <code>style definition name : file URL</code>.</p>\n\n<p>Note that you must use the unique name you have used to register the style definition in the file.</p>\n\n<h2 id='dev_styles-section-style-rules'>Style Rules</h2>\n\n<p>The entries inside a style definition are called <em>the style rules</em>. Each rule defines the display name for a single style as well as the element, attributes, and CSS styles to be used for it. The following is a generic representation of a style rule:</p>\n\n<pre><code>{\n    name: 'Name displayed in the Styles drop-down list',\n    element: 'HTML element name (for example \"span\")',\n    styles: {\n        'css-style1': 'desired value',\n        'css-style2': 'desired value',\n        ...\n    }\n    attributes: {\n        'attribute-name1': 'desired value',\n        'attribute-name2': 'desired value',\n        ...\n    }\n}\n</code></pre>\n\n<p>The <code>name</code> and <code>element</code> values are required, while other values are optional.</p>\n\n<h2 id='dev_styles-section-style-types'>Style Types</h2>\n\n<p>There are three standard style types, each one related to the element used in the style rule. Additionally, editor features may define custom style types.</p>\n\n<ul>\n<li><strong>Block-level styles</strong> &ndash; Applied to text blocks (paragraphs) as a whole, not limited to text selections. These apply to the following elements: <code>address</code>, <code>div</code>, <code>h1</code>, <code>h2</code>, <code>h3</code>, <code>h4</code>, <code>h5</code>, <code>h6</code>, <code>p</code>, and <code>pre</code>.</li>\n<li><strong>Object styles</strong> &ndash; Applied to special selectable objects (non-textual), whenever such selection is supported by the browser. These apply to the following elements: <code>a</code>, <code>embed</code>, <code>hr</code>, <code>img</code>, <code>li</code>, <code>object</code>, <code>ol</code>, <code>table</code>, <code>td</code>, <code>tr</code>, and <code>ul</code>.</li>\n<li><strong>Inline styles</strong> &ndash; Applied to text selections for style rules using elements not defined in other style types.</li>\n<li><strong>Custom styles</strong> &ndash; Plugins may define special style handlers which can be applied in certain situations. One of such custom handlers is defined for widgets and described in the <a href=\"#!/guide/dev_styles-section-widget-styles\">Widget Styles</a> section below.</li>\n</ul>\n\n\n<h2 id='dev_styles-section-widget-styles'>Widget Styles</h2>\n\n<p><a href=\"#!/guide/dev_widgets\">Widgets</a> are special rich content units and therefore standard styles (like block or object ones) cannot be applied to them. Only styles of a special type (called simply <code>'widget'</code>) work with widgets.</p>\n\n<p>To define a widget style you need to specify two additional properties in your style definition:</p>\n\n<ul>\n<li><code>type</code> &ndash; Must be set to <code>'widget'</code>. This informs the style system that this is a widget style.</li>\n<li><code>widget</code> &ndash; Must be set to the name of the widget to which this style will be applicable. Widget names can be verified by browsing the <a href=\"#!/api/CKEDITOR.plugins.widget.repository-property-registered\">editorInstance.widgets.registered</a> object in your browser's developer tools.</li>\n</ul>\n\n\n<p>Since widgets are a lot more complex structures than standard content, only classes defined in the style definition will be applied to them. Other attributes and inline styles will be ignored. Most often classes will be applied to widget's main element, but this behavior may be customized by the widget itself.</p>\n\n<p>Sample widget styles:</p>\n\n<pre><code>// Enhanced Image (http://ckeditor.com/addon/image2) style.\n{ type: 'widget', widget: 'image', attributes: { 'class': 'bigBanner' } }\n\n// Code snippet (http://ckeditor.com/addon/codesnippet) style.\n{ type: 'widget', widget: 'codeSnippet', attributes: { 'class': 'pulledSnippet narrow' } }\n</code></pre>\n\n<p>If you are interested in seeing how this works in practice, see the <a href=\"http://ckeditor.com/tmp/4.4.0/widget-styles.html\">little demo of widget styling</a> that we prepared. It contains some further explanations as well as a working editor instance that includes the Enhanced Image and Code Snippet widgets with additional styling.</p>\n\n<h2 id='dev_styles-section-the-stylesheet-parser-plugin'>The Stylesheet Parser Plugin</h2>\n\n<p class=\"requirements\">\n    This feature is provided through an optional plugin that is not included in the CKEditor presets available from the <a href=\"http://ckeditor.com/download\">Download</a> site and <a href=\"#!/guide/dev_plugins\">needs to be added to your custom build</a> with <a href=\"http://ckeditor.com/builder\">CKBuilder</a>.\n</p>\n\n\n<p>Another method of customizing the styles for the document created in CKEditor and populating the drop-down list with style definitions coming from an external CSS stylesheet file is also available. The optional <a href=\"http://ckeditor.com/addon/stylesheetparser\">Stylesheet Parser</a> plugin lets you use your existing CSS styles without the need to define the styles specifically for CKEditor in the format presented above.</p>\n\n<p class=\"tip\">\n    Please note that the Stylesheet Parser plugin is incompatible with <a href=\"#!/guide/dev_advanced_content_filter\">Advanced Content Filter</a>, so it disables the filter after installing.\n</p>\n\n\n<p>Having the Stylesheet Parser installed, you need to supply the location of the CSS file that contains your style definitions by using the CKEDITOR.config.contentsCss configuration setting:</p>\n\n<pre><code>config.contentsCss = 'sample_CSS_file.css';\n</code></pre>\n\n<p>Finally, if you want to skip loading the styles that are used in CKEditor by default, you may set the CKEDITOR.config.stylesSet option to an empty value:</p>\n\n<pre><code>config.stylesSet = [];\n</code></pre>\n\n<p>The image below shows the <strong>Styles</strong> drop-down list populated with entries coming from an external stylesheet, without default styles that were disabled in the editor configuration by setting  CKEDITOR.config.stylesSet to <code>[]</code>.</p>\n\n<p><p><img src=\"guides/dev_styles/styles_02.png\" alt=\"\" width=\"924\" height=\"368\"></p></p>\n\n<p>This solution lets you configure the editor to use existing CSS stylesheet rules without the need to create separate style definitions for CKEditor. On the other hand, the previously used approach offers more control over which styles are available for the users, so both solutions can be employed interchangeably, according to your needs.</p>\n\n<h3 id='dev_styles-section-choosing-the-css-selectors'>Choosing the CSS Selectors</h3>\n\n<p>The Stylesheet Parser plugin can be fine-tuned to only take into account the CSS selectors that match the CKEDITOR.config.stylesheetParser_validSelectors configuration value. The default regular expression accepts all CSS rules in a form of <code>element.class</code>, but you can modify it to refer to a limited set of elements, like in the example below.</p>\n\n<pre><code>// Only add rules for &lt;p&gt; and &lt;span&gt; elements.\nconfig.stylesheetParser_validSelectors = /\\^(p|span)\\.\\w+/;\n</code></pre>\n\n<h3 id='dev_styles-section-limiting-the-css-selectors'>Limiting the CSS Selectors</h3>\n\n<p>You can also further customize the Stylesheet Parser plugin by setting the CKEDITOR.config.stylesheetParser_skipSelectors configuration value. The plugin will then ignore the CSS rules that match the regular expression and will not display them in the <strong>Styles</strong> drop-down list nor use them to output the document content. The default value excludes all rules for the <code>&lt;body&gt;</code> element as well as classes defined for no specific element, but you can modify it to ignore a wider set of elements, like in the example below.</p>\n\n<pre><code>// Ignore rules for &lt;body&gt; and &lt;caption&gt; elements, classes starting with \"high\",\n// and any class defined for no specific element.\nconfig.stylesheetParser_skipSelectors = /(^body\\.|^caption\\.|\\.high|^\\.)/i;\n</code></pre>\n\n<h2 id='dev_styles-section-editor-styles-demo'>Editor Styles Demo</h2>\n\n<p>See the <a href=\"../samples/styles.html\">working \"Applying Styles to Editor Content\" sample</a> that showcases the use of default editor styles as well as a Stylesheet Parser plugin implementation.</p>\n\n<h2 id='dev_styles-section-related-features'>Related Features</h2>\n\n<p>Refer to the following resources for more information about text styling:</p>\n\n<ul>\n<li>The <a href=\"#!/guide/dev_removeformat\">Removing Text Formatting</a> article explains how to quickly remove any text formatting that is applied through inline HTML elements and CSS styles.</li>\n<li>The <a href=\"#!/guide/dev_basicstyles\">Basic Text Styles: Bold, Italic and More</a> article explains how to apply bold, italic, underline, strikethrough, subscript and superscript formatting.</li>\n<li>The <a href=\"#!/guide/dev_format\">Applying Block-Level Text Formats</a> article presents how to apply formatting to entire text blocks and not just text selections.</li>\n<li>The <a href=\"#!/guide/dev_colorbutton\">Setting Text and Background Color</a> article explains how to use and customize the <strong>Text Color</strong> and <strong>Background Color</strong> features.</li>\n</ul>\n\n","title":"Styles Drop-down","meta_description":"Applying styles to editor content and using Stylesheet Parser plugin.","meta_keywords":"ckeditor, editor, wysiwyg, style, styles, combo, list, stylesheet, parser, css, configuration, configure, modify, modification, change, customize, customization, customise, customisation"});