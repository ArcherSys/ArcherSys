Ext.data.JsonP.dev_howtos_interface({"guide":"<!--\n<div class='toc'>\n<p><strong>Contents</strong></p>\n<ol>\n<li><a href='#!/guide/dev_howtos_interface-section-how-do-i-remove-the-elements-path%3F'>How Do I Remove the Elements Path?</a></li>\n<li>\n<a href='#!/guide/dev_howtos_interface-section-how-do-i-change-the-size-of-the-editor%3F'>How Do I Change the Size of the Editor?</a></li>\n<li>\n<a href='#!/guide/dev_howtos_interface-section-how-do-i-change-the-size-of-the-editor-on-the-fly%3F'>How Do I Change the Size of the Editor on the Fly?</a></li>\n<li>\n<a href='#!/guide/dev_howtos_interface-section-how-do-i-remove-the-ability-to-resize-ckeditor%3F'>How Do I Remove the Ability to Resize CKEditor?</a></li>\n<li>\n<a href='#!/guide/dev_howtos_interface-section-how-do-i-limit-the-width-and-height-for-ckeditor-resizing%3F'>How Do I Limit the Width and Height for CKEditor Resizing?</a></li>\n<li>\n<a href='#!/guide/dev_howtos_interface-section-how-do-i-limit-the-directions-for-ckeditor-resizing-to-horizontal-or-vertical-only%3F'>How Do I Limit the Directions for CKEditor Resizing to Horizontal or Vertical Only?</a></li>\n<li>\n<a href='#!/guide/dev_howtos_interface-section-how-do-i-add-the-toolbar-collapse-button%3F'>How Do I Add the Toolbar Collapse Button?</a></li>\n<li>\n<a href='#!/guide/dev_howtos_interface-section-how-do-i-add-or-remove-toolbar-buttons%3F'>How Do I Add or Remove Toolbar Buttons?</a></li>\n<li>\n<a href='#!/guide/dev_howtos_interface-section-how-do-i-navigate-ckeditor-using-the-keyboard%3F'>How Do I Navigate CKEditor Using the Keyboard?</a></li>\n<li>\n<a href='#!/guide/dev_howtos_interface-section-how-do-i-configure-ckeditor-to-use-the-arrow-keys-to-navigate-between-all-toolbar-buttons%3F'>How Do I Configure CKEditor to Use the Arrow Keys to Navigate Between All Toolbar Buttons?</a></li></ol>\n</div>\nCopyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.\nFor licensing, see LICENSE.md.\n-->\n\n\n<h1 id='dev_howtos_interface-section-interface'>Interface</h1>\n\n<h2 id='dev_howtos_interface-section-how-do-i-remove-the-elements-path%3F'>How Do I Remove the Elements Path?</h2>\n\n<p>The <strong>elements path</strong> displays information about the HTML elements of the document for the position of the cursor.</p>\n\n<p><p><img src=\"guides/dev_howtos_interface/ui_elements_path.png\" alt=\"The elements path of CKEditor\" width=\"934\" height=\"254\"></p></p>\n\n<p>If you want to get rid of it, use the CKEDITOR.config.removePlugins setting to remove the <code>elementspath</code> plugin.</p>\n\n<pre><code>config.removePlugins = 'elementspath';\n</code></pre>\n\n<h2 id='dev_howtos_interface-section-how-do-i-change-the-size-of-the-editor%3F'>How Do I Change the Size of the Editor?</h2>\n\n<p>Refer to the <a href=\"#!/guide/dev_size\">Setting Editor Size</a> article.</p>\n\n<h2 id='dev_howtos_interface-section-how-do-i-change-the-size-of-the-editor-on-the-fly%3F'>How Do I Change the Size of the Editor on the Fly?</h2>\n\n<p>Refer to the <a href=\"#!/guide/dev_resize\">Editor Resizing Customization</a> article.</p>\n\n<h2 id='dev_howtos_interface-section-how-do-i-remove-the-ability-to-resize-ckeditor%3F'>How Do I Remove the Ability to Resize CKEditor?</h2>\n\n<p>Refer to the <a href=\"#!/guide/dev_resize\">Editor Resizing Customization</a> article.</p>\n\n<h2 id='dev_howtos_interface-section-how-do-i-limit-the-width-and-height-for-ckeditor-resizing%3F'>How Do I Limit the Width and Height for CKEditor Resizing?</h2>\n\n<p>Refer to the <a href=\"#!/guide/dev_resize\">Editor Resizing Customization</a> article.</p>\n\n<h2 id='dev_howtos_interface-section-how-do-i-limit-the-directions-for-ckeditor-resizing-to-horizontal-or-vertical-only%3F'>How Do I Limit the Directions for CKEditor Resizing to Horizontal or Vertical Only?</h2>\n\n<p>Refer to the <a href=\"#!/guide/dev_resize\">Editor Resizing Customization</a> article.</p>\n\n<h2 id='dev_howtos_interface-section-how-do-i-add-the-toolbar-collapse-button%3F'>How Do I Add the Toolbar Collapse Button?</h2>\n\n<p>CKEditor toolbar can be collapsed and restored by using the <strong>Collapse Toolbar</strong> button located in the bottom right-hand corner of the toolbar (for RTL languages — in the bottom left-hand corner).</p>\n\n<p><p><img src=\"guides/dev_howtos_interface/ui_collapse.png\" alt=\"The Collapse Toolbar button in CKEditor\" width=\"923\" height=\"254\"></p></p>\n\n<p>If you want to enable this feature, you need to set the toolbarCanCollapse parameter to <code>true</code>.</p>\n\n<pre><code>config.toolbarCanCollapse = true;\n</code></pre>\n\n<h2 id='dev_howtos_interface-section-how-do-i-add-or-remove-toolbar-buttons%3F'>How Do I Add or Remove Toolbar Buttons?</h2>\n\n<p>CKEditor toolbar is an array of button elements that you can freely add or remove.</p>\n\n<p><p><img src=\"guides/dev_howtos_interface/ui_toolbar.png\" alt=\"The CKEditor toolbar\" width=\"923\" height=\"111\"></p></p>\n\n<p>Check the <a href=\"#!/guide/dev_toolbar\">Toolbar Customization</a> section of this guide for more information on how to customize it.</p>\n\n<h2 id='dev_howtos_interface-section-how-do-i-navigate-ckeditor-using-the-keyboard%3F'>How Do I Navigate CKEditor Using the Keyboard?</h2>\n\n<p><a href=\"http://docs.cksource.com/CKEditor_3.x/Accessibility\">CKEditor Accessibility Guide</a> contains lots of useful information on using the CKEditor interface with your keyboard or with assistive devices such as screen readers.</p>\n\n<p>Many functions in CKEditor have their equivalent keyboard shortcuts. This is one of the reasons why working with the editor is simple and efficient.</p>\n\n<p>The <a href=\"http://docs.cksource.com/CKEditor_3.x/Users_Guide/Keyboard_Shortcuts\">Keyboard Shortcuts</a> article describes available keyboard shortcuts grouped by problem areas.</p>\n\n<h2 id='dev_howtos_interface-section-how-do-i-configure-ckeditor-to-use-the-arrow-keys-to-navigate-between-all-toolbar-buttons%3F'>How Do I Configure CKEditor to Use the Arrow Keys to Navigate Between All Toolbar Buttons?</h2>\n\n<p>In <a href=\"http://ckeditor.com/blog/CKEditor_3.6_released\">CKEditor 3.6</a> the concept of <strong>toolbar button groups</strong> was introduced to enable faster and more efficient navigation using the keyboard or assistive devices. In all previous versions of the editor, the <code>Tab</code> and <code>Shift+Tab</code> keys had the same effect as using the <code>Right</code> and <code>Left Arrow</code> keys and were used to cycle between consecutive toolbar buttons.</p>\n\n<p>Since CKEditor 3.6, Tab and <code>Shift+Tab</code> navigate between toolbar button groups, while the <code>Arrow</code> keys are used to cycle between the buttons within a group.</p>\n\n<p>In order to change the new default toolbar navigation mode and use the <code>Arrow</code> keys as an equivalent to <code>Tab</code> and <code>Shift+Tab</code>, use the following toolbarGroupCycling configuration setting:</p>\n\n<pre><code>config.toolbarGroupCycling = false;\n</code></pre>\n","title":"Interface","meta_description":"Most frequently asked question and answers about CKEditor interface.","meta_keywords":"ckeditor, editor, wysiwyg, howto, howtos, faq, questions, answers, interface, user, ui, toolbar, size, width, height, resize, resizing, button, buttons, keyboard, navigation"});