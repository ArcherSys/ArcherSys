<?php

/* acp_forums.html */
class __TwigTemplate_acefc49d66dd4d4ef5c4ec926e40b31b2ca52b0dbbae30cad7e934692b1f923f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "acp_forums.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if ((isset($context["S_EDIT_FORUM"]) ? $context["S_EDIT_FORUM"] : null)) {
            // line 6
            echo "
\t<script type=\"text/javascript\">
\t// <![CDATA[
\t\t/**
\t\t* Handle displaying/hiding several options based on the forum type
\t\t*/
\t\tfunction display_options(value)
\t\t{
\t\t\t";
            // line 14
            if (( !(isset($context["S_ADD_ACTION"]) ? $context["S_ADD_ACTION"] : null) && (isset($context["S_FORUM_ORIG_POST"]) ? $context["S_FORUM_ORIG_POST"] : null))) {
                // line 15
                echo "\t\t\t\tif (value == ";
                echo (isset($context["FORUM_POST"]) ? $context["FORUM_POST"] : null);
                echo ")
\t\t\t\t{
\t\t\t\t\tphpbb.toggleDisplay('type_actions', -1);
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\tphpbb.toggleDisplay('type_actions', 1);
\t\t\t\t}
\t\t\t";
            }
            // line 24
            echo "
\t\t\t";
            // line 25
            if ((( !(isset($context["S_ADD_ACTION"]) ? $context["S_ADD_ACTION"] : null) && (isset($context["S_FORUM_ORIG_CAT"]) ? $context["S_FORUM_ORIG_CAT"] : null)) && (isset($context["S_HAS_SUBFORUMS"]) ? $context["S_HAS_SUBFORUMS"] : null))) {
                // line 26
                echo "\t\t\t\tif (value == ";
                echo (isset($context["FORUM_LINK"]) ? $context["FORUM_LINK"] : null);
                echo ")
\t\t\t\t{
\t\t\t\t\tphpbb.toggleDisplay('cat_to_link_actions', 1);
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\tphpbb.toggleDisplay('cat_to_link_actions', -1);
\t\t\t\t}
\t\t\t";
            }
            // line 35
            echo "
\t\t\tif (value == ";
            // line 36
            echo (isset($context["FORUM_POST"]) ? $context["FORUM_POST"] : null);
            echo ")
\t\t\t{
\t\t\t\tphpbb.toggleDisplay('forum_post_options', 1);
\t\t\t\tphpbb.toggleDisplay('forum_link_options', -1);
\t\t\t\tphpbb.toggleDisplay('forum_rules_options', 1);
\t\t\t\tphpbb.toggleDisplay('forum_cat_options', -1);
\t\t\t}
\t\t\telse if (value == ";
            // line 43
            echo (isset($context["FORUM_LINK"]) ? $context["FORUM_LINK"] : null);
            echo ")
\t\t\t{
\t\t\t\tphpbb.toggleDisplay('forum_post_options', -1);
\t\t\t\tphpbb.toggleDisplay('forum_link_options', 1);
\t\t\t\tphpbb.toggleDisplay('forum_rules_options', -1);
\t\t\t\tphpbb.toggleDisplay('forum_cat_options', -1);
\t\t\t}
\t\t\telse if (value == ";
            // line 50
            echo (isset($context["FORUM_CAT"]) ? $context["FORUM_CAT"] : null);
            echo ")
\t\t\t{
\t\t\t\tphpbb.toggleDisplay('forum_post_options', -1);
\t\t\t\tphpbb.toggleDisplay('forum_link_options', -1);
\t\t\t\tphpbb.toggleDisplay('forum_rules_options', 1);
\t\t\t\tphpbb.toggleDisplay('forum_cat_options', 1);
\t\t\t}
\t\t}

\t\t/**
\t\t* Init the wanted display functionality if javascript is enabled.
\t\t* If javascript is not available, the user is still able to properly administer.
\t\t*/
\t\tonload = function()
\t\t{
\t\t\t";
            // line 65
            if (( !(isset($context["S_ADD_ACTION"]) ? $context["S_ADD_ACTION"] : null) && (isset($context["S_FORUM_ORIG_POST"]) ? $context["S_FORUM_ORIG_POST"] : null))) {
                // line 66
                echo "\t\t\t\t";
                if ((isset($context["S_FORUM_POST"]) ? $context["S_FORUM_POST"] : null)) {
                    // line 67
                    echo "\t\t\t\t\tphpbb.toggleDisplay('type_actions', -1);
\t\t\t\t";
                }
                // line 69
                echo "\t\t\t";
            }
            // line 70
            echo "
\t\t\t";
            // line 71
            if ((( !(isset($context["S_ADD_ACTION"]) ? $context["S_ADD_ACTION"] : null) && (isset($context["S_FORUM_ORIG_CAT"]) ? $context["S_FORUM_ORIG_CAT"] : null)) && (isset($context["S_HAS_SUBFORUMS"]) ? $context["S_HAS_SUBFORUMS"] : null))) {
                // line 72
                echo "\t\t\t\t";
                if ((isset($context["S_FORUM_CAT"]) ? $context["S_FORUM_CAT"] : null)) {
                    // line 73
                    echo "\t\t\t\t\tphpbb.toggleDisplay('cat_to_link_actions', -1);
\t\t\t\t";
                }
                // line 75
                echo "\t\t\t";
            }
            // line 76
            echo "
\t\t\t";
            // line 77
            if ( !(isset($context["S_FORUM_POST"]) ? $context["S_FORUM_POST"] : null)) {
                // line 78
                echo "\t\t\t\tphpbb.toggleDisplay('forum_post_options', -1);
\t\t\t";
            }
            // line 80
            echo "
\t\t\t";
            // line 81
            if ( !(isset($context["S_FORUM_CAT"]) ? $context["S_FORUM_CAT"] : null)) {
                // line 82
                echo "\t\t\t\tphpbb.toggleDisplay('forum_cat_options', -1);
\t\t\t";
            }
            // line 84
            echo "
\t\t\t";
            // line 85
            if ( !(isset($context["S_FORUM_LINK"]) ? $context["S_FORUM_LINK"] : null)) {
                // line 86
                echo "\t\t\t\tphpbb.toggleDisplay('forum_link_options', -1);
\t\t\t";
            }
            // line 88
            echo "
\t\t\t";
            // line 89
            if ((isset($context["S_FORUM_LINK"]) ? $context["S_FORUM_LINK"] : null)) {
                // line 90
                echo "\t\t\tphpbb.toggleDisplay('forum_rules_options', -1);
\t\t\t";
            }
            // line 92
            echo "\t\t}

\t// ]]>
\t</script>

\t<a href=\"";
            // line 97
            echo (isset($context["U_BACK"]) ? $context["U_BACK"] : null);
            echo "\" style=\"float: ";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 99
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo " ";
            if ((isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null)) {
                echo ":: ";
                echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
            }
            echo "</h1>

\t<p>";
            // line 101
            echo $this->env->getExtension('phpbb')->lang("FORUM_EDIT_EXPLAIN");
            echo "</p>

\t";
            // line 103
            if ((isset($context["S_ERROR"]) ? $context["S_ERROR"] : null)) {
                // line 104
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 105
                echo $this->env->getExtension('phpbb')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 106
                echo (isset($context["ERROR_MSG"]) ? $context["ERROR_MSG"] : null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 109
            echo "
\t<form id=\"forumedit\" method=\"post\" action=\"";
            // line 110
            echo (isset($context["U_EDIT_ACTION"]) ? $context["U_EDIT_ACTION"] : null);
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 113
            echo $this->env->getExtension('phpbb')->lang("FORUM_SETTINGS");
            echo "</legend>
\t";
            // line 114
            // line 115
            echo "\t<dl>
\t\t<dt><label for=\"forum_type\">";
            // line 116
            echo $this->env->getExtension('phpbb')->lang("FORUM_TYPE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select id=\"forum_type\" name=\"forum_type\" onchange=\"display_options(this.options[this.selectedIndex].value);\">";
            // line 117
            echo (isset($context["S_FORUM_TYPE_OPTIONS"]) ? $context["S_FORUM_TYPE_OPTIONS"] : null);
            echo "</select></dd>
\t</dl>
\t";
            // line 119
            if (( !(isset($context["S_ADD_ACTION"]) ? $context["S_ADD_ACTION"] : null) && (isset($context["S_FORUM_ORIG_POST"]) ? $context["S_FORUM_ORIG_POST"] : null))) {
                // line 120
                echo "\t<div id=\"type_actions\">
\t\t<dl>
\t\t\t<dt><label for=\"type_action\">";
                // line 122
                echo $this->env->getExtension('phpbb')->lang("DECIDE_MOVE_DELETE_CONTENT");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"type_action\" value=\"delete\"";
                // line 123
                if ( !(isset($context["S_MOVE_FORUM_OPTIONS"]) ? $context["S_MOVE_FORUM_OPTIONS"] : null)) {
                    echo " checked=\"checked\" id=\"type_action\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("DELETE_ALL_POSTS");
                echo "</label></dd>
\t\t\t";
                // line 124
                if ((isset($context["S_MOVE_FORUM_OPTIONS"]) ? $context["S_MOVE_FORUM_OPTIONS"] : null)) {
                    echo "<dd><label><input type=\"radio\" class=\"radio\" name=\"type_action\" id=\"type_action\" value=\"move\" checked=\"checked\" /> ";
                    echo $this->env->getExtension('phpbb')->lang("MOVE_POSTS_TO");
                    echo "</label> <select name=\"to_forum_id\">";
                    echo (isset($context["S_MOVE_FORUM_OPTIONS"]) ? $context["S_MOVE_FORUM_OPTIONS"] : null);
                    echo "</select></dd>";
                }
                // line 125
                echo "\t\t</dl>
\t</div>
\t";
            }
            // line 128
            echo "\t";
            if ((( !(isset($context["S_ADD_ACTION"]) ? $context["S_ADD_ACTION"] : null) && (isset($context["S_FORUM_ORIG_CAT"]) ? $context["S_FORUM_ORIG_CAT"] : null)) && (isset($context["S_HAS_SUBFORUMS"]) ? $context["S_HAS_SUBFORUMS"] : null))) {
                // line 129
                echo "\t<div id=\"cat_to_link_actions\">
\t\t<dl>
\t\t\t<dt><label for=\"action_subforums\">";
                // line 131
                echo $this->env->getExtension('phpbb')->lang("DECIDE_MOVE_DELETE_SUBFORUMS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t";
                // line 132
                if ((isset($context["S_FORUMS_LIST"]) ? $context["S_FORUMS_LIST"] : null)) {
                    // line 133
                    echo "\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"action_subforums\" name=\"action_subforums\" value=\"move\" checked=\"checked\" /> ";
                    echo $this->env->getExtension('phpbb')->lang("MOVE_SUBFORUMS_TO");
                    echo "</label> <select name=\"subforums_to_id\">";
                    echo (isset($context["S_FORUMS_LIST"]) ? $context["S_FORUMS_LIST"] : null);
                    echo "</select></dd>
\t\t\t";
                } else {
                    // line 135
                    echo "\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"action_subforums\" name=\"action_subforums\" value=\"delete\" checked=\"checked\" /> ";
                    echo $this->env->getExtension('phpbb')->lang("DELETE_SUBFORUMS");
                    echo "</label></dd>
\t\t\t";
                }
                // line 137
                echo "\t\t</dl>
\t</div>
\t";
            }
            // line 140
            echo "\t<dl>
\t\t<dt><label for=\"parent\">";
            // line 141
            echo $this->env->getExtension('phpbb')->lang("FORUM_PARENT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select id=\"parent\" name=\"forum_parent_id\"><option value=\"0\"";
            // line 142
            if ( !(isset($context["S_FORUM_PARENT_ID"]) ? $context["S_FORUM_PARENT_ID"] : null)) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo $this->env->getExtension('phpbb')->lang("NO_PARENT");
            echo "</option>";
            echo (isset($context["S_PARENT_OPTIONS"]) ? $context["S_PARENT_OPTIONS"] : null);
            echo "</select></dd>
\t</dl>
\t";
            // line 144
            if ((isset($context["S_CAN_COPY_PERMISSIONS"]) ? $context["S_CAN_COPY_PERMISSIONS"] : null)) {
                // line 145
                echo "\t\t<dl>
\t\t\t<dt><label for=\"forum_perm_from\">";
                // line 146
                echo $this->env->getExtension('phpbb')->lang("COPY_PERMISSIONS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("COPY_PERMISSIONS_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><select id=\"forum_perm_from\" name=\"forum_perm_from\"><option value=\"0\">";
                // line 147
                echo $this->env->getExtension('phpbb')->lang("NO_PERMISSIONS");
                echo "</option>";
                echo (isset($context["S_FORUM_OPTIONS"]) ? $context["S_FORUM_OPTIONS"] : null);
                echo "</select></dd>
\t\t</dl>
\t";
            }
            // line 150
            echo "\t<dl>
\t\t<dt><label for=\"forum_name\">";
            // line 151
            echo $this->env->getExtension('phpbb')->lang("FORUM_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input class=\"text medium\" type=\"text\" id=\"forum_name\" name=\"forum_name\" value=\"";
            // line 152
            echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
            echo "\" maxlength=\"255\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"forum_desc\">";
            // line 155
            echo $this->env->getExtension('phpbb')->lang("FORUM_DESC");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("FORUM_DESC_EXPLAIN");
            echo "</span></dt>
\t\t<dd><textarea id=\"forum_desc\" name=\"forum_desc\" rows=\"5\" cols=\"45\" data-bbcode=\"true\">";
            // line 156
            echo (isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null);
            echo "</textarea></dd>
\t\t<dd><label><input type=\"checkbox\" class=\"radio\" name=\"desc_parse_bbcode\"";
            // line 157
            if ((isset($context["S_DESC_BBCODE_CHECKED"]) ? $context["S_DESC_BBCODE_CHECKED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("PARSE_BBCODE");
            echo "</label>
\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"desc_parse_smilies\"";
            // line 158
            if ((isset($context["S_DESC_SMILIES_CHECKED"]) ? $context["S_DESC_SMILIES_CHECKED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("PARSE_SMILIES");
            echo "</label>
\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"desc_parse_urls\"";
            // line 159
            if ((isset($context["S_DESC_URLS_CHECKED"]) ? $context["S_DESC_URLS_CHECKED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("PARSE_URLS");
            echo "</label></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"forum_image\">";
            // line 162
            echo $this->env->getExtension('phpbb')->lang("FORUM_IMAGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("FORUM_IMAGE_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input class=\"text medium\" type=\"text\" id=\"forum_image\" name=\"forum_image\" value=\"";
            // line 163
            echo (isset($context["FORUM_IMAGE"]) ? $context["FORUM_IMAGE"] : null);
            echo "\" maxlength=\"255\" /></dd>
\t\t";
            // line 164
            if ((isset($context["FORUM_IMAGE_SRC"]) ? $context["FORUM_IMAGE_SRC"] : null)) {
                // line 165
                echo "\t\t\t<dd><img src=\"";
                echo (isset($context["FORUM_IMAGE_SRC"]) ? $context["FORUM_IMAGE_SRC"] : null);
                echo "\" alt=\"";
                echo $this->env->getExtension('phpbb')->lang("FORUM_IMAGE");
                echo "\" /></dd>
\t\t";
            }
            // line 167
            echo "\t</dl>
\t<dl>
\t\t<dt><label for=\"forum_password\">";
            // line 169
            echo $this->env->getExtension('phpbb')->lang("FORUM_PASSWORD");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("FORUM_PASSWORD_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input type=\"password\" id=\"forum_password\" name=\"forum_password\" value=\"";
            // line 170
            if ((isset($context["S_FORUM_PASSWORD_SET"]) ? $context["S_FORUM_PASSWORD_SET"] : null)) {
                echo "&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;";
            }
            echo "\" autocomplete=\"off\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"forum_password_confirm\">";
            // line 173
            echo $this->env->getExtension('phpbb')->lang("FORUM_PASSWORD_CONFIRM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("FORUM_PASSWORD_CONFIRM_EXPLAIN");
            echo "</span></dt>
\t\t<dd><input type=\"password\" id=\"forum_password_confirm\" name=\"forum_password_confirm\" value=\"";
            // line 174
            if ((isset($context["S_FORUM_PASSWORD_SET"]) ? $context["S_FORUM_PASSWORD_SET"] : null)) {
                echo "&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;";
            }
            echo "\" autocomplete=\"off\" /></dd>
\t</dl>
\t";
            // line 176
            if ((isset($context["S_FORUM_PASSWORD_SET"]) ? $context["S_FORUM_PASSWORD_SET"] : null)) {
                // line 177
                echo "\t<dl>
\t\t<dt><label for=\"forum_password_unset\">";
                // line 178
                echo $this->env->getExtension('phpbb')->lang("FORUM_PASSWORD_UNSET");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("FORUM_PASSWORD_UNSET_EXPLAIN");
                echo "</span></dt>
\t\t<dd><input id=\"forum_password_unset\" name=\"forum_password_unset\" type=\"checkbox\" /></dd>
\t</dl>
\t";
            }
            // line 182
            echo "\t<dl>
\t\t<dt><label for=\"forum_style\">";
            // line 183
            echo $this->env->getExtension('phpbb')->lang("FORUM_STYLE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select id=\"forum_style\" name=\"forum_style\"><option value=\"0\">";
            // line 184
            echo $this->env->getExtension('phpbb')->lang("DEFAULT_STYLE");
            echo "</option>";
            echo (isset($context["S_STYLES_OPTIONS"]) ? $context["S_STYLES_OPTIONS"] : null);
            echo "</select></dd>
\t</dl>
\t";
            // line 186
            // line 187
            echo "\t</fieldset>

\t<div id=\"forum_cat_options\">
\t\t<fieldset>
\t\t\t<legend>";
            // line 191
            echo $this->env->getExtension('phpbb')->lang("GENERAL_FORUM_SETTINGS");
            echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"display_active\">";
            // line 193
            echo $this->env->getExtension('phpbb')->lang("DISPLAY_ACTIVE_TOPICS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("DISPLAY_ACTIVE_TOPICS_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"display_active\" value=\"1\"";
            // line 194
            if ((isset($context["S_ENABLE_ACTIVE_TOPICS"]) ? $context["S_ENABLE_ACTIVE_TOPICS"] : null)) {
                echo " id=\"display_active\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"display_active\" value=\"0\"";
            // line 195
            if ( !(isset($context["S_ENABLE_ACTIVE_TOPICS"]) ? $context["S_ENABLE_ACTIVE_TOPICS"] : null)) {
                echo " id=\"display_active\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t</fieldset>
\t</div>

\t<div id=\"forum_post_options\">
\t\t<fieldset>
\t\t\t<legend>";
            // line 202
            echo $this->env->getExtension('phpbb')->lang("GENERAL_FORUM_SETTINGS");
            echo "</legend>
\t\t";
            // line 203
            // line 204
            echo "\t\t<dl>
\t\t\t<dt><label for=\"forum_status\">";
            // line 205
            echo $this->env->getExtension('phpbb')->lang("FORUM_STATUS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><select id=\"forum_status\" name=\"forum_status\">";
            // line 206
            echo (isset($context["S_STATUS_OPTIONS"]) ? $context["S_STATUS_OPTIONS"] : null);
            echo "</select></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"display_subforum_list\">";
            // line 209
            echo $this->env->getExtension('phpbb')->lang("LIST_SUBFORUMS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("LIST_SUBFORUMS_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"display_subforum_list\" value=\"1\"";
            // line 210
            if ((isset($context["S_DISPLAY_SUBFORUM_LIST"]) ? $context["S_DISPLAY_SUBFORUM_LIST"] : null)) {
                echo " id=\"display_subforum_list\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"display_subforum_list\" value=\"0\"";
            // line 211
            if ( !(isset($context["S_DISPLAY_SUBFORUM_LIST"]) ? $context["S_DISPLAY_SUBFORUM_LIST"] : null)) {
                echo " id=\"display_subforum_list\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"display_on_index\">";
            // line 214
            echo $this->env->getExtension('phpbb')->lang("LIST_INDEX");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("LIST_INDEX_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"display_on_index\" value=\"1\"";
            // line 215
            if ((isset($context["S_DISPLAY_ON_INDEX"]) ? $context["S_DISPLAY_ON_INDEX"] : null)) {
                echo " id=\"display_on_index\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"display_on_index\" value=\"0\"";
            // line 216
            if ( !(isset($context["S_DISPLAY_ON_INDEX"]) ? $context["S_DISPLAY_ON_INDEX"] : null)) {
                echo " id=\"display_on_index\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"enable_post_review\">";
            // line 219
            echo $this->env->getExtension('phpbb')->lang("ENABLE_POST_REVIEW");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("ENABLE_POST_REVIEW_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"enable_post_review\" value=\"1\"";
            // line 220
            if ((isset($context["S_ENABLE_POST_REVIEW"]) ? $context["S_ENABLE_POST_REVIEW"] : null)) {
                echo " id=\"enable_post_review\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"enable_post_review\" value=\"0\"";
            // line 221
            if ( !(isset($context["S_ENABLE_POST_REVIEW"]) ? $context["S_ENABLE_POST_REVIEW"] : null)) {
                echo " id=\"enable_post_review\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"enable_quick_reply\">";
            // line 224
            echo $this->env->getExtension('phpbb')->lang("ENABLE_QUICK_REPLY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("ENABLE_QUICK_REPLY_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"enable_quick_reply\" value=\"1\"";
            // line 225
            if ((isset($context["S_ENABLE_QUICK_REPLY"]) ? $context["S_ENABLE_QUICK_REPLY"] : null)) {
                echo " id=\"enable_quick_reply\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"enable_quick_reply\" value=\"0\"";
            // line 226
            if ( !(isset($context["S_ENABLE_QUICK_REPLY"]) ? $context["S_ENABLE_QUICK_REPLY"] : null)) {
                echo " id=\"enable_quick_reply\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"enable_indexing\">";
            // line 229
            echo $this->env->getExtension('phpbb')->lang("ENABLE_INDEXING");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("ENABLE_INDEXING_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"enable_indexing\" value=\"1\"";
            // line 230
            if ((isset($context["S_ENABLE_INDEXING"]) ? $context["S_ENABLE_INDEXING"] : null)) {
                echo " id=\"enable_indexing\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"enable_indexing\" value=\"0\"";
            // line 231
            if ( !(isset($context["S_ENABLE_INDEXING"]) ? $context["S_ENABLE_INDEXING"] : null)) {
                echo " id=\"enable_indexing\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"enable_icons\">";
            // line 234
            echo $this->env->getExtension('phpbb')->lang("ENABLE_TOPIC_ICONS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"enable_icons\" value=\"1\"";
            // line 235
            if ((isset($context["S_TOPIC_ICONS"]) ? $context["S_TOPIC_ICONS"] : null)) {
                echo " id=\"enable_icons\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"enable_icons\" value=\"0\"";
            // line 236
            if ( !(isset($context["S_TOPIC_ICONS"]) ? $context["S_TOPIC_ICONS"] : null)) {
                echo " id=\"enable_icons\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"display_recent\">";
            // line 239
            echo $this->env->getExtension('phpbb')->lang("ENABLE_RECENT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("ENABLE_RECENT_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"display_recent\" value=\"1\"";
            // line 240
            if ((isset($context["S_DISPLAY_ACTIVE_TOPICS"]) ? $context["S_DISPLAY_ACTIVE_TOPICS"] : null)) {
                echo " id=\"display_recent\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"display_recent\" value=\"0\"";
            // line 241
            if ( !(isset($context["S_DISPLAY_ACTIVE_TOPICS"]) ? $context["S_DISPLAY_ACTIVE_TOPICS"] : null)) {
                echo " id=\"display_recent\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"topics_per_page\">";
            // line 244
            echo $this->env->getExtension('phpbb')->lang("FORUM_TOPICS_PAGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("FORUM_TOPICS_PAGE_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input type=\"number\" id=\"topics_per_page\" name=\"topics_per_page\" value=\"";
            // line 245
            echo (isset($context["TOPICS_PER_PAGE"]) ? $context["TOPICS_PER_PAGE"] : null);
            echo "\" min=\"0\" max=\"9999\" /></dd>
\t\t</dl>
\t\t";
            // line 247
            // line 248
            echo "\t\t</fieldset>

\t\t<fieldset>
\t\t\t<legend>";
            // line 251
            echo $this->env->getExtension('phpbb')->lang("FORUM_PRUNE_SETTINGS");
            echo "</legend>
\t\t";
            // line 252
            // line 253
            echo "\t\t<dl>
\t\t\t<dt><label for=\"enable_prune\">";
            // line 254
            echo $this->env->getExtension('phpbb')->lang("FORUM_AUTO_PRUNE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("FORUM_AUTO_PRUNE_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"enable_prune\" value=\"1\"";
            // line 255
            if ((isset($context["S_PRUNE_ENABLE"]) ? $context["S_PRUNE_ENABLE"] : null)) {
                echo " id=\"enable_prune\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"enable_prune\" value=\"0\"";
            // line 256
            if ( !(isset($context["S_PRUNE_ENABLE"]) ? $context["S_PRUNE_ENABLE"] : null)) {
                echo " id=\"enable_prune\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"prune_freq\">";
            // line 259
            echo $this->env->getExtension('phpbb')->lang("AUTO_PRUNE_FREQ");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("AUTO_PRUNE_FREQ_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input type=\"number\" id=\"prune_freq\" name=\"prune_freq\" value=\"";
            // line 260
            echo (isset($context["PRUNE_FREQ"]) ? $context["PRUNE_FREQ"] : null);
            echo "\" min=\"0\" max=\"9999\" /> ";
            echo $this->env->getExtension('phpbb')->lang("DAYS");
            echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"prune_days\">";
            // line 263
            echo $this->env->getExtension('phpbb')->lang("AUTO_PRUNE_DAYS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("AUTO_PRUNE_DAYS_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input type=\"number\" id=\"prune_days\" name=\"prune_days\" value=\"";
            // line 264
            echo (isset($context["PRUNE_DAYS"]) ? $context["PRUNE_DAYS"] : null);
            echo "\" min=\"0\" max=\"9999\" /> ";
            echo $this->env->getExtension('phpbb')->lang("DAYS");
            echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"prune_viewed\">";
            // line 267
            echo $this->env->getExtension('phpbb')->lang("AUTO_PRUNE_VIEWED");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("AUTO_PRUNE_VIEWED_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input type=\"number\" id=\"prune_viewed\" name=\"prune_viewed\" value=\"";
            // line 268
            echo (isset($context["PRUNE_VIEWED"]) ? $context["PRUNE_VIEWED"] : null);
            echo "\" min=\"0\" max=\"9999\" /> ";
            echo $this->env->getExtension('phpbb')->lang("DAYS");
            echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"prune_old_polls\">";
            // line 271
            echo $this->env->getExtension('phpbb')->lang("PRUNE_OLD_POLLS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("PRUNE_OLD_POLLS_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"prune_old_polls\" value=\"1\"";
            // line 272
            if ((isset($context["S_PRUNE_OLD_POLLS"]) ? $context["S_PRUNE_OLD_POLLS"] : null)) {
                echo " id=\"prune_old_polls\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"prune_old_polls\" value=\"0\"";
            // line 273
            if ( !(isset($context["S_PRUNE_OLD_POLLS"]) ? $context["S_PRUNE_OLD_POLLS"] : null)) {
                echo " id=\"prune_old_polls\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"prune_announce\">";
            // line 276
            echo $this->env->getExtension('phpbb')->lang("PRUNE_ANNOUNCEMENTS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"prune_announce\" value=\"1\"";
            // line 277
            if ((isset($context["S_PRUNE_ANNOUNCE"]) ? $context["S_PRUNE_ANNOUNCE"] : null)) {
                echo " id=\"prune_announce\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"prune_announce\" value=\"0\"";
            // line 278
            if ( !(isset($context["S_PRUNE_ANNOUNCE"]) ? $context["S_PRUNE_ANNOUNCE"] : null)) {
                echo " id=\"prune_announce\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"prune_sticky\">";
            // line 281
            echo $this->env->getExtension('phpbb')->lang("PRUNE_STICKY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"prune_sticky\" value=\"1\"";
            // line 282
            if ((isset($context["S_PRUNE_STICKY"]) ? $context["S_PRUNE_STICKY"] : null)) {
                echo " id=\"prune_sticky\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"prune_sticky\" value=\"0\"";
            // line 283
            if ( !(isset($context["S_PRUNE_STICKY"]) ? $context["S_PRUNE_STICKY"] : null)) {
                echo " id=\"prune_sticky\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"enable_shadow_prune\">";
            // line 286
            echo $this->env->getExtension('phpbb')->lang("FORUM_PRUNE_SHADOW");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("FORUM_PRUNE_SHADOW_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"enable_shadow_prune\" value=\"1\"";
            // line 287
            if ((isset($context["S_PRUNE_SHADOW_ENABLE"]) ? $context["S_PRUNE_SHADOW_ENABLE"] : null)) {
                echo " id=\"enable_shadow_prune\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"enable_shadow_prune\" value=\"0\"";
            // line 288
            if ( !(isset($context["S_PRUNE_SHADOW_ENABLE"]) ? $context["S_PRUNE_SHADOW_ENABLE"] : null)) {
                echo " id=\"enable_shadow_prune\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"prune_shadow_freq\">";
            // line 291
            echo $this->env->getExtension('phpbb')->lang("AUTO_PRUNE_SHADOW_FREQ");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("AUTO_PRUNE_SHADOW_FREQ_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input type=\"number\" id=\"prune_shadow_freq\" name=\"prune_shadow_freq\" value=\"";
            // line 292
            echo (isset($context["PRUNE_SHADOW_FREQ"]) ? $context["PRUNE_SHADOW_FREQ"] : null);
            echo "\" min=\"0\" max=\"9999\" /> ";
            echo $this->env->getExtension('phpbb')->lang("DAYS");
            echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"prune_shadow_days\">";
            // line 295
            echo $this->env->getExtension('phpbb')->lang("AUTO_PRUNE_SHADOW_DAYS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("AUTO_PRUNE_SHADOW_DAYS_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input type=\"number\" id=\"prune_shadow_days\" name=\"prune_shadow_days\" value=\"";
            // line 296
            echo (isset($context["PRUNE_SHADOW_DAYS"]) ? $context["PRUNE_SHADOW_DAYS"] : null);
            echo "\" min=\"0\" max=\"9999\" /> ";
            echo $this->env->getExtension('phpbb')->lang("DAYS");
            echo "</dd>
\t\t</dl>
\t\t";
            // line 298
            // line 299
            echo "\t\t</fieldset>
\t</div>

\t<div id=\"forum_link_options\">
\t\t<fieldset>
\t\t\t<legend>";
            // line 304
            echo $this->env->getExtension('phpbb')->lang("GENERAL_FORUM_SETTINGS");
            echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"link_display_on_index\">";
            // line 306
            echo $this->env->getExtension('phpbb')->lang("LIST_INDEX");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("LIST_INDEX_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"link_display_on_index\" value=\"1\"";
            // line 307
            if ((isset($context["S_DISPLAY_ON_INDEX"]) ? $context["S_DISPLAY_ON_INDEX"] : null)) {
                echo " id=\"link_display_on_index\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"link_display_on_index\" value=\"0\"";
            // line 308
            if ( !(isset($context["S_DISPLAY_ON_INDEX"]) ? $context["S_DISPLAY_ON_INDEX"] : null)) {
                echo " id=\"link_display_on_index\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"forum_link\">";
            // line 311
            echo $this->env->getExtension('phpbb')->lang("FORUM_LINK");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("FORUM_LINK_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input class=\"text medium\" type=\"text\" id=\"forum_link\" name=\"forum_link\" value=\"";
            // line 312
            echo (isset($context["FORUM_DATA_LINK"]) ? $context["FORUM_DATA_LINK"] : null);
            echo "\" maxlength=\"255\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"forum_link_track\">";
            // line 315
            echo $this->env->getExtension('phpbb')->lang("FORUM_LINK_TRACK");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("FORUM_LINK_TRACK_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"forum_link_track\" value=\"1\"";
            // line 316
            if ((isset($context["S_FORUM_LINK_TRACK"]) ? $context["S_FORUM_LINK_TRACK"] : null)) {
                echo " id=\"forum_link_track\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label>
\t\t\t\t<label><input type=\"radio\" class=\"radio\" name=\"forum_link_track\" value=\"0\"";
            // line 317
            if ( !(isset($context["S_FORUM_LINK_TRACK"]) ? $context["S_FORUM_LINK_TRACK"] : null)) {
                echo " id=\"forum_link_track\" checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label></dd>
\t\t</dl>
\t\t</fieldset>
\t</div>

\t<div id=\"forum_rules_options\">
\t\t<fieldset>
\t\t\t<legend>";
            // line 324
            echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
            echo "</legend>
\t\t";
            // line 325
            // line 326
            echo "\t\t<dl>
\t\t\t<dt><label for=\"forum_rules_link\">";
            // line 327
            echo $this->env->getExtension('phpbb')->lang("FORUM_RULES_LINK");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("FORUM_RULES_LINK_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><input class=\"text medium\" type=\"text\" id=\"forum_rules_link\" name=\"forum_rules_link\" value=\"";
            // line 328
            echo (isset($context["FORUM_RULES_LINK"]) ? $context["FORUM_RULES_LINK"] : null);
            echo "\" maxlength=\"255\" /></dd>
\t\t</dl>
\t";
            // line 330
            if ((isset($context["FORUM_RULES_PREVIEW"]) ? $context["FORUM_RULES_PREVIEW"] : null)) {
                // line 331
                echo "\t\t<dl>
\t\t\t<dt><label>";
                // line 332
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES_PREVIEW");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd>";
                // line 333
                echo (isset($context["FORUM_RULES_PREVIEW"]) ? $context["FORUM_RULES_PREVIEW"] : null);
                echo "</dd>
\t\t</dl>
\t";
            }
            // line 336
            echo "\t\t<dl>
\t\t\t<dt><label for=\"forum_rules\">";
            // line 337
            echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("FORUM_RULES_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd><textarea id=\"forum_rules\" name=\"forum_rules\" rows=\"4\" cols=\"70\" data-bbcode=\"true\">";
            // line 338
            echo (isset($context["FORUM_RULES_PLAIN"]) ? $context["FORUM_RULES_PLAIN"] : null);
            echo "</textarea></dd>
\t\t\t<dd><label><input type=\"checkbox\" class=\"radio\" name=\"rules_parse_bbcode\"";
            // line 339
            if ((isset($context["S_BBCODE_CHECKED"]) ? $context["S_BBCODE_CHECKED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("PARSE_BBCODE");
            echo "</label>
\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"rules_parse_smilies\"";
            // line 340
            if ((isset($context["S_SMILIES_CHECKED"]) ? $context["S_SMILIES_CHECKED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("PARSE_SMILIES");
            echo "</label>
\t\t\t\t<label><input type=\"checkbox\" class=\"radio\" name=\"rules_parse_urls\"";
            // line 341
            if ((isset($context["S_URLS_CHECKED"]) ? $context["S_URLS_CHECKED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("PARSE_URLS");
            echo "</label></dd>
\t\t</dl>
\t\t";
            // line 343
            // line 344
            echo "\t\t</fieldset>
\t</div>
\t
\t";
            // line 347
            // line 348
            echo "
\t<fieldset class=\"submit-buttons\">
\t\t<legend>";
            // line 350
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "</legend>
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"update\" value=\"";
            // line 351
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 352
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t\t";
            // line 353
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

";
        } elseif (        // line 357
(isset($context["S_DELETE_FORUM"]) ? $context["S_DELETE_FORUM"] : null)) {
            // line 358
            echo "
\t<a href=\"";
            // line 359
            echo (isset($context["U_BACK"]) ? $context["U_BACK"] : null);
            echo "\" style=\"float: ";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 361
            echo $this->env->getExtension('phpbb')->lang("FORUM_DELETE");
            echo "</h1>

\t<p>";
            // line 363
            echo $this->env->getExtension('phpbb')->lang("FORUM_DELETE_EXPLAIN");
            echo "</p>

\t";
            // line 365
            if ((isset($context["S_ERROR"]) ? $context["S_ERROR"] : null)) {
                // line 366
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 367
                echo $this->env->getExtension('phpbb')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 368
                echo (isset($context["ERROR_MSG"]) ? $context["ERROR_MSG"] : null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 371
            echo "
\t<form id=\"acp_forum\" method=\"post\" action=\"";
            // line 372
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 375
            echo $this->env->getExtension('phpbb')->lang("FORUM_DELETE");
            echo "</legend>
\t<dl>
\t\t<dt><label>";
            // line 377
            echo $this->env->getExtension('phpbb')->lang("FORUM_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><strong>";
            // line 378
            echo (isset($context["FORUM_NAME"]) ? $context["FORUM_NAME"] : null);
            echo "</strong></dd>
\t</dl>
\t";
            // line 380
            if ((isset($context["S_FORUM_POST"]) ? $context["S_FORUM_POST"] : null)) {
                // line 381
                echo "\t\t<dl>
\t\t\t<dt><label for=\"delete_action\">";
                // line 382
                echo $this->env->getExtension('phpbb')->lang("ACTION");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"delete_action\" name=\"action_posts\" value=\"delete\" checked=\"checked\" /> ";
                // line 383
                echo $this->env->getExtension('phpbb')->lang("DELETE_ALL_POSTS");
                echo "</label></dd>
\t\t\t";
                // line 384
                if ((isset($context["S_MOVE_FORUM_OPTIONS"]) ? $context["S_MOVE_FORUM_OPTIONS"] : null)) {
                    // line 385
                    echo "\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"action_posts\" value=\"move\" /> ";
                    echo $this->env->getExtension('phpbb')->lang("MOVE_POSTS_TO");
                    echo "</label> <select name=\"posts_to_id\">";
                    echo (isset($context["S_MOVE_FORUM_OPTIONS"]) ? $context["S_MOVE_FORUM_OPTIONS"] : null);
                    echo "</select></dd>
\t\t\t";
                }
                // line 387
                echo "\t\t</dl>
\t";
            }
            // line 389
            echo "\t";
            if ((isset($context["S_HAS_SUBFORUMS"]) ? $context["S_HAS_SUBFORUMS"] : null)) {
                // line 390
                echo "\t\t<dl>
\t\t\t<dt><label for=\"sub_delete_action\">";
                // line 391
                echo $this->env->getExtension('phpbb')->lang("ACTION");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" id=\"sub_delete_action\" name=\"action_subforums\" value=\"delete\" checked=\"checked\" /> ";
                // line 392
                echo $this->env->getExtension('phpbb')->lang("DELETE_SUBFORUMS");
                echo "</label></dd>
\t\t\t";
                // line 393
                if ((isset($context["S_FORUMS_LIST"]) ? $context["S_FORUMS_LIST"] : null)) {
                    // line 394
                    echo "\t\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"action_subforums\" value=\"move\" /> ";
                    echo $this->env->getExtension('phpbb')->lang("MOVE_SUBFORUMS_TO");
                    echo "</label> <select name=\"subforums_to_id\">";
                    echo (isset($context["S_FORUMS_LIST"]) ? $context["S_FORUMS_LIST"] : null);
                    echo "</select></dd>
\t\t\t";
                }
                // line 396
                echo "\t\t</dl>
\t";
            }
            // line 398
            echo "
\t<p class=\"quick\">
\t\t<input class=\"button1\" type=\"submit\" name=\"update\" value=\"";
            // line 400
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />
\t</p>
\t";
            // line 402
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

";
        } elseif (        // line 406
(isset($context["S_CONTINUE_SYNC"]) ? $context["S_CONTINUE_SYNC"] : null)) {
            // line 407
            echo "
\t<script type=\"text/javascript\">
\t// <![CDATA[
\t\tvar close_waitscreen = 0;
\t\t// no scrollbars...
\t\tpopup('";
            // line 412
            echo (isset($context["UA_PROGRESS_BAR"]) ? $context["UA_PROGRESS_BAR"] : null);
            echo "', 400, 240, '_sync');
\t// ]]>
\t</script>

\t<h1>";
            // line 416
            echo $this->env->getExtension('phpbb')->lang("FORUM_ADMIN");
            echo "</h1>

\t<p>";
            // line 418
            echo $this->env->getExtension('phpbb')->lang("FORUM_ADMIN_EXPLAIN");
            echo "</p>

\t<p>";
            // line 420
            echo $this->env->getExtension('phpbb')->lang("PROGRESS_EXPLAIN");
            echo "</p>

";
        } else {
            // line 423
            echo "
\t<script type=\"text/javascript\">
\t// <![CDATA[
\t\t/**
\t\t* Popup search progress bar
\t\t*/
\t\tfunction popup_progress_bar()
\t\t{
\t\t\tvar close_waitscreen = 0;
\t\t\t// no scrollbars...
\t\t\tpopup('";
            // line 433
            echo (isset($context["UA_PROGRESS_BAR"]) ? $context["UA_PROGRESS_BAR"] : null);
            echo "', 400, 240, '_sync');
\t\t}
\t// ]]>
\t</script>

\t<h1>";
            // line 438
            echo $this->env->getExtension('phpbb')->lang("FORUM_ADMIN");
            echo "</h1>

\t<p>";
            // line 440
            echo $this->env->getExtension('phpbb')->lang("FORUM_ADMIN_EXPLAIN");
            echo "</p>

\t";
            // line 442
            if ((isset($context["ERROR_MSG"]) ? $context["ERROR_MSG"] : null)) {
                // line 443
                echo "\t\t<div class=\"errorbox\">
\t\t\t<h3>";
                // line 444
                echo $this->env->getExtension('phpbb')->lang("WARNING");
                echo "</h3>
\t\t\t<p>";
                // line 445
                echo (isset($context["ERROR_MSG"]) ? $context["ERROR_MSG"] : null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 448
            echo "
\t";
            // line 449
            if ((isset($context["S_RESYNCED"]) ? $context["S_RESYNCED"] : null)) {
                // line 450
                echo "\t\t<script type=\"text/javascript\">
\t\t// <![CDATA[
\t\t\tvar close_waitscreen = 1;
\t\t// ]]>
\t\t</script>

\t\t<div class=\"successbox\">
\t\t\t<h3>";
                // line 457
                echo $this->env->getExtension('phpbb')->lang("NOTIFY");
                echo "</h3>
\t\t\t<p>";
                // line 458
                echo $this->env->getExtension('phpbb')->lang("FORUM_RESYNCED");
                echo "</p>
\t\t</div>
\t";
            }
            // line 461
            echo "
\t<p><strong>";
            // line 462
            echo (isset($context["NAVIGATION"]) ? $context["NAVIGATION"] : null);
            if ((isset($context["S_NO_FORUMS"]) ? $context["S_NO_FORUMS"] : null)) {
                echo " [<a href=\"";
                echo (isset($context["U_EDIT"]) ? $context["U_EDIT"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("EDIT");
                echo "</a> | <a href=\"";
                echo (isset($context["U_DELETE"]) ? $context["U_DELETE"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("DELETE");
                echo "</a>";
                if ( !(isset($context["S_LINK"]) ? $context["S_LINK"] : null)) {
                    echo " | <a href=\"";
                    echo (isset($context["U_SYNC"]) ? $context["U_SYNC"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("RESYNC");
                    echo "</a>";
                }
                echo "]";
            }
            echo "</strong></p>

\t";
            // line 464
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "forums", array()))) {
                // line 465
                echo "\t\t<table class=\"table1 forums\">
\t\t\t<col class=\"row1\" /><col class=\"row1\" /><col class=\"row2\" />
\t\t<tbody>
\t\t";
                // line 468
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "forums", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["forums"]) {
                    // line 469
                    echo "\t\t\t<tr>
\t\t\t\t<td class=\"folder\">";
                    // line 470
                    echo $this->getAttribute($context["forums"], "FOLDER_IMAGE", array());
                    echo "</td>
\t\t\t\t<td class=\"forum-desc\">
\t\t\t\t\t";
                    // line 472
                    if ($this->getAttribute($context["forums"], "FORUM_IMAGE", array())) {
                        echo "<div style=\"float: ";
                        echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                        echo "; margin-right: 5px;\">";
                        echo $this->getAttribute($context["forums"], "FORUM_IMAGE", array());
                        echo "</div>";
                    }
                    // line 473
                    echo "\t\t\t\t\t<strong>";
                    if ($this->getAttribute($context["forums"], "S_FORUM_LINK", array())) {
                        echo $this->getAttribute($context["forums"], "FORUM_NAME", array());
                    } else {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["forums"], "U_FORUM", array());
                        echo "\">";
                        echo $this->getAttribute($context["forums"], "FORUM_NAME", array());
                        echo "</a>";
                    }
                    echo "</strong>
\t\t\t\t\t";
                    // line 474
                    if ($this->getAttribute($context["forums"], "FORUM_DESCRIPTION", array())) {
                        echo "<br /><span>";
                        echo $this->getAttribute($context["forums"], "FORUM_DESCRIPTION", array());
                        echo "</span>";
                    }
                    // line 475
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute($context["forums"], "S_FORUM_POST", array())) {
                        echo "<br /><br /><span>";
                        echo $this->env->getExtension('phpbb')->lang("TOPICS");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <strong>";
                        echo $this->getAttribute($context["forums"], "FORUM_TOPICS", array());
                        echo "</strong> / ";
                        echo $this->env->getExtension('phpbb')->lang("POSTS");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " <strong>";
                        echo $this->getAttribute($context["forums"], "FORUM_POSTS", array());
                        echo "</strong></span>";
                    }
                    // line 476
                    echo "\t\t\t\t</td>
\t\t\t\t<td class=\"actions\">
\t\t\t\t\t<span class=\"up-disabled\" style=\"display:none;\">";
                    // line 478
                    echo (isset($context["ICON_MOVE_UP_DISABLED"]) ? $context["ICON_MOVE_UP_DISABLED"] : null);
                    echo "</span>
\t\t\t\t\t<span class=\"up\"><a href=\"";
                    // line 479
                    echo $this->getAttribute($context["forums"], "U_MOVE_UP", array());
                    echo "\" data-ajax=\"row_up\">";
                    echo (isset($context["ICON_MOVE_UP"]) ? $context["ICON_MOVE_UP"] : null);
                    echo "</a></span>
\t\t\t\t\t<span class=\"down-disabled\" style=\"display:none;\">";
                    // line 480
                    echo (isset($context["ICON_MOVE_DOWN_DISABLED"]) ? $context["ICON_MOVE_DOWN_DISABLED"] : null);
                    echo "</span>
\t\t\t\t\t<span class=\"down\"><a href=\"";
                    // line 481
                    echo $this->getAttribute($context["forums"], "U_MOVE_DOWN", array());
                    echo "\" data-ajax=\"row_down\">";
                    echo (isset($context["ICON_MOVE_DOWN"]) ? $context["ICON_MOVE_DOWN"] : null);
                    echo "</a></span>
\t\t\t\t\t<a href=\"";
                    // line 482
                    echo $this->getAttribute($context["forums"], "U_EDIT", array());
                    echo "\">";
                    echo (isset($context["ICON_EDIT"]) ? $context["ICON_EDIT"] : null);
                    echo "</a>
\t\t\t\t\t";
                    // line 483
                    if ( !$this->getAttribute($context["forums"], "S_FORUM_LINK", array())) {
                        // line 484
                        echo "\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["forums"], "U_SYNC", array());
                        echo "\" onclick=\"popup_progress_bar();\">";
                        echo (isset($context["ICON_SYNC"]) ? $context["ICON_SYNC"] : null);
                        echo "</a>
\t\t\t\t\t";
                    } else {
                        // line 486
                        echo "\t\t\t\t\t\t";
                        echo (isset($context["ICON_SYNC_DISABLED"]) ? $context["ICON_SYNC_DISABLED"] : null);
                        echo "
\t\t\t\t\t";
                    }
                    // line 488
                    echo "\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["forums"], "U_DELETE", array());
                    echo "\">";
                    echo (isset($context["ICON_DELETE"]) ? $context["ICON_DELETE"] : null);
                    echo "</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forums'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 492
                echo "\t\t</tbody>
\t\t</table>
\t";
            }
            // line 495
            echo "
\t<form id=\"fselect\" method=\"post\" action=\"";
            // line 496
            echo (isset($context["U_SEL_ACTION"]) ? $context["U_SEL_ACTION"] : null);
            echo "\">

\t<fieldset class=\"quick\">
\t\t";
            // line 499
            echo $this->env->getExtension('phpbb')->lang("SELECT_FORUM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <select name=\"parent_id\" onchange=\"if(this.options[this.selectedIndex].value != -1){ this.form.submit(); }\">";
            echo (isset($context["FORUM_BOX"]) ? $context["FORUM_BOX"] : null);
            echo "</select>

\t\t";
            // line 501
            echo "<input class=\"button2\" type=\"submit\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" />";
            // line 502
            echo "\t\t";
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

\t<form id=\"forums\" method=\"post\" action=\"";
            // line 506
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<fieldset class=\"quick\">
\t\t<input type=\"hidden\" name=\"action\" value=\"add\" />

\t\t<input type=\"text\" name=\"forum_name\" value=\"\" maxlength=\"255\" />
\t\t<input class=\"button2\" name=\"addforum\" type=\"submit\" value=\"";
            // line 512
            echo $this->env->getExtension('phpbb')->lang("CREATE_FORUM");
            echo "\" />
\t\t";
            // line 513
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

";
        }
        // line 518
        echo "
";
        // line 519
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_forums.html", 519)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_forums.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1578 => 519,  1575 => 518,  1567 => 513,  1563 => 512,  1554 => 506,  1546 => 502,  1542 => 501,  1534 => 499,  1528 => 496,  1525 => 495,  1520 => 492,  1507 => 488,  1501 => 486,  1493 => 484,  1491 => 483,  1485 => 482,  1479 => 481,  1475 => 480,  1469 => 479,  1465 => 478,  1461 => 476,  1446 => 475,  1440 => 474,  1427 => 473,  1419 => 472,  1414 => 470,  1411 => 469,  1407 => 468,  1402 => 465,  1400 => 464,  1376 => 462,  1373 => 461,  1367 => 458,  1363 => 457,  1354 => 450,  1352 => 449,  1349 => 448,  1343 => 445,  1339 => 444,  1336 => 443,  1334 => 442,  1329 => 440,  1324 => 438,  1316 => 433,  1304 => 423,  1298 => 420,  1293 => 418,  1288 => 416,  1281 => 412,  1274 => 407,  1272 => 406,  1265 => 402,  1260 => 400,  1256 => 398,  1252 => 396,  1244 => 394,  1242 => 393,  1238 => 392,  1233 => 391,  1230 => 390,  1227 => 389,  1223 => 387,  1215 => 385,  1213 => 384,  1209 => 383,  1204 => 382,  1201 => 381,  1199 => 380,  1194 => 378,  1189 => 377,  1184 => 375,  1178 => 372,  1175 => 371,  1169 => 368,  1165 => 367,  1162 => 366,  1160 => 365,  1155 => 363,  1150 => 361,  1141 => 359,  1138 => 358,  1136 => 357,  1129 => 353,  1125 => 352,  1121 => 351,  1117 => 350,  1113 => 348,  1112 => 347,  1107 => 344,  1106 => 343,  1097 => 341,  1089 => 340,  1081 => 339,  1077 => 338,  1070 => 337,  1067 => 336,  1061 => 333,  1056 => 332,  1053 => 331,  1051 => 330,  1046 => 328,  1039 => 327,  1036 => 326,  1035 => 325,  1031 => 324,  1017 => 317,  1009 => 316,  1002 => 315,  996 => 312,  989 => 311,  979 => 308,  971 => 307,  964 => 306,  959 => 304,  952 => 299,  951 => 298,  944 => 296,  937 => 295,  929 => 292,  922 => 291,  912 => 288,  904 => 287,  897 => 286,  887 => 283,  879 => 282,  874 => 281,  864 => 278,  856 => 277,  851 => 276,  841 => 273,  833 => 272,  826 => 271,  818 => 268,  811 => 267,  803 => 264,  796 => 263,  788 => 260,  781 => 259,  771 => 256,  763 => 255,  756 => 254,  753 => 253,  752 => 252,  748 => 251,  743 => 248,  742 => 247,  737 => 245,  730 => 244,  720 => 241,  712 => 240,  705 => 239,  695 => 236,  687 => 235,  682 => 234,  672 => 231,  664 => 230,  657 => 229,  647 => 226,  639 => 225,  632 => 224,  622 => 221,  614 => 220,  607 => 219,  597 => 216,  589 => 215,  582 => 214,  572 => 211,  564 => 210,  557 => 209,  551 => 206,  546 => 205,  543 => 204,  542 => 203,  538 => 202,  524 => 195,  516 => 194,  509 => 193,  504 => 191,  498 => 187,  497 => 186,  490 => 184,  485 => 183,  482 => 182,  472 => 178,  469 => 177,  467 => 176,  460 => 174,  453 => 173,  445 => 170,  438 => 169,  434 => 167,  426 => 165,  424 => 164,  420 => 163,  413 => 162,  403 => 159,  395 => 158,  387 => 157,  383 => 156,  376 => 155,  370 => 152,  365 => 151,  362 => 150,  354 => 147,  347 => 146,  344 => 145,  342 => 144,  331 => 142,  326 => 141,  323 => 140,  318 => 137,  312 => 135,  304 => 133,  302 => 132,  297 => 131,  293 => 129,  290 => 128,  285 => 125,  277 => 124,  269 => 123,  264 => 122,  260 => 120,  258 => 119,  253 => 117,  248 => 116,  245 => 115,  244 => 114,  240 => 113,  234 => 110,  231 => 109,  225 => 106,  221 => 105,  218 => 104,  216 => 103,  211 => 101,  201 => 99,  192 => 97,  185 => 92,  181 => 90,  179 => 89,  176 => 88,  172 => 86,  170 => 85,  167 => 84,  163 => 82,  161 => 81,  158 => 80,  154 => 78,  152 => 77,  149 => 76,  146 => 75,  142 => 73,  139 => 72,  137 => 71,  134 => 70,  131 => 69,  127 => 67,  124 => 66,  122 => 65,  104 => 50,  94 => 43,  84 => 36,  81 => 35,  68 => 26,  66 => 25,  63 => 24,  50 => 15,  48 => 14,  38 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <a id="maincontent"></a>*/
/* */
/* <!-- IF S_EDIT_FORUM -->*/
/* */
/* 	<script type="text/javascript">*/
/* 	// <![CDATA[*/
/* 		/***/
/* 		* Handle displaying/hiding several options based on the forum type*/
/* 		*//* */
/* 		function display_options(value)*/
/* 		{*/
/* 			<!-- IF not S_ADD_ACTION and S_FORUM_ORIG_POST -->*/
/* 				if (value == {FORUM_POST})*/
/* 				{*/
/* 					phpbb.toggleDisplay('type_actions', -1);*/
/* 				}*/
/* 				else*/
/* 				{*/
/* 					phpbb.toggleDisplay('type_actions', 1);*/
/* 				}*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF not S_ADD_ACTION and S_FORUM_ORIG_CAT and S_HAS_SUBFORUMS -->*/
/* 				if (value == {FORUM_LINK})*/
/* 				{*/
/* 					phpbb.toggleDisplay('cat_to_link_actions', 1);*/
/* 				}*/
/* 				else*/
/* 				{*/
/* 					phpbb.toggleDisplay('cat_to_link_actions', -1);*/
/* 				}*/
/* 			<!-- ENDIF -->*/
/* */
/* 			if (value == {FORUM_POST})*/
/* 			{*/
/* 				phpbb.toggleDisplay('forum_post_options', 1);*/
/* 				phpbb.toggleDisplay('forum_link_options', -1);*/
/* 				phpbb.toggleDisplay('forum_rules_options', 1);*/
/* 				phpbb.toggleDisplay('forum_cat_options', -1);*/
/* 			}*/
/* 			else if (value == {FORUM_LINK})*/
/* 			{*/
/* 				phpbb.toggleDisplay('forum_post_options', -1);*/
/* 				phpbb.toggleDisplay('forum_link_options', 1);*/
/* 				phpbb.toggleDisplay('forum_rules_options', -1);*/
/* 				phpbb.toggleDisplay('forum_cat_options', -1);*/
/* 			}*/
/* 			else if (value == {FORUM_CAT})*/
/* 			{*/
/* 				phpbb.toggleDisplay('forum_post_options', -1);*/
/* 				phpbb.toggleDisplay('forum_link_options', -1);*/
/* 				phpbb.toggleDisplay('forum_rules_options', 1);*/
/* 				phpbb.toggleDisplay('forum_cat_options', 1);*/
/* 			}*/
/* 		}*/
/* */
/* 		/***/
/* 		* Init the wanted display functionality if javascript is enabled.*/
/* 		* If javascript is not available, the user is still able to properly administer.*/
/* 		*//* */
/* 		onload = function()*/
/* 		{*/
/* 			<!-- IF not S_ADD_ACTION and S_FORUM_ORIG_POST -->*/
/* 				<!-- IF S_FORUM_POST -->*/
/* 					phpbb.toggleDisplay('type_actions', -1);*/
/* 				<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF not S_ADD_ACTION and S_FORUM_ORIG_CAT and S_HAS_SUBFORUMS -->*/
/* 				<!-- IF S_FORUM_CAT -->*/
/* 					phpbb.toggleDisplay('cat_to_link_actions', -1);*/
/* 				<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF not S_FORUM_POST -->*/
/* 				phpbb.toggleDisplay('forum_post_options', -1);*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF not S_FORUM_CAT -->*/
/* 				phpbb.toggleDisplay('forum_cat_options', -1);*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF not S_FORUM_LINK -->*/
/* 				phpbb.toggleDisplay('forum_link_options', -1);*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF S_FORUM_LINK -->*/
/* 			phpbb.toggleDisplay('forum_rules_options', -1);*/
/* 			<!-- ENDIF -->*/
/* 		}*/
/* */
/* 	// ]]>*/
/* 	</script>*/
/* */
/* 	<a href="{U_BACK}" style="float: {S_CONTENT_FLOW_END};">&laquo; {L_BACK}</a>*/
/* */
/* 	<h1>{L_TITLE} <!-- IF FORUM_NAME -->:: {FORUM_NAME}<!-- ENDIF --></h1>*/
/* */
/* 	<p>{L_FORUM_EDIT_EXPLAIN}</p>*/
/* */
/* 	<!-- IF S_ERROR -->*/
/* 		<div class="errorbox">*/
/* 			<h3>{L_WARNING}</h3>*/
/* 			<p>{ERROR_MSG}</p>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<form id="forumedit" method="post" action="{U_EDIT_ACTION}">*/
/* */
/* 	<fieldset>*/
/* 		<legend>{L_FORUM_SETTINGS}</legend>*/
/* 	<!-- EVENT acp_forums_main_settings_prepend -->*/
/* 	<dl>*/
/* 		<dt><label for="forum_type">{L_FORUM_TYPE}{L_COLON}</label></dt>*/
/* 		<dd><select id="forum_type" name="forum_type" onchange="display_options(this.options[this.selectedIndex].value);">{S_FORUM_TYPE_OPTIONS}</select></dd>*/
/* 	</dl>*/
/* 	<!-- IF not S_ADD_ACTION and S_FORUM_ORIG_POST -->*/
/* 	<div id="type_actions">*/
/* 		<dl>*/
/* 			<dt><label for="type_action">{L_DECIDE_MOVE_DELETE_CONTENT}{L_COLON}</label></dt>*/
/* 			<dd><label><input type="radio" class="radio" name="type_action" value="delete"<!-- IF not S_MOVE_FORUM_OPTIONS --> checked="checked" id="type_action"<!-- ENDIF --> /> {L_DELETE_ALL_POSTS}</label></dd>*/
/* 			<!-- IF S_MOVE_FORUM_OPTIONS --><dd><label><input type="radio" class="radio" name="type_action" id="type_action" value="move" checked="checked" /> {L_MOVE_POSTS_TO}</label> <select name="to_forum_id">{S_MOVE_FORUM_OPTIONS}</select></dd><!-- ENDIF -->*/
/* 		</dl>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF not S_ADD_ACTION and S_FORUM_ORIG_CAT and S_HAS_SUBFORUMS -->*/
/* 	<div id="cat_to_link_actions">*/
/* 		<dl>*/
/* 			<dt><label for="action_subforums">{L_DECIDE_MOVE_DELETE_SUBFORUMS}{L_COLON}</label></dt>*/
/* 			<!-- IF S_FORUMS_LIST -->*/
/* 				<dd><label><input type="radio" class="radio" id="action_subforums" name="action_subforums" value="move" checked="checked" /> {L_MOVE_SUBFORUMS_TO}</label> <select name="subforums_to_id">{S_FORUMS_LIST}</select></dd>*/
/* 			<!-- ELSE -->*/
/* 				<dd><label><input type="radio" class="radio" id="action_subforums" name="action_subforums" value="delete" checked="checked" /> {L_DELETE_SUBFORUMS}</label></dd>*/
/* 			<!-- ENDIF -->*/
/* 		</dl>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* 	<dl>*/
/* 		<dt><label for="parent">{L_FORUM_PARENT}{L_COLON}</label></dt>*/
/* 		<dd><select id="parent" name="forum_parent_id"><option value="0"<!-- IF not S_FORUM_PARENT_ID --> selected="selected"<!-- ENDIF -->>{L_NO_PARENT}</option>{S_PARENT_OPTIONS}</select></dd>*/
/* 	</dl>*/
/* 	<!-- IF S_CAN_COPY_PERMISSIONS -->*/
/* 		<dl>*/
/* 			<dt><label for="forum_perm_from">{L_COPY_PERMISSIONS}{L_COLON}</label><br /><span>{L_COPY_PERMISSIONS_EXPLAIN}</span></dt>*/
/* 			<dd><select id="forum_perm_from" name="forum_perm_from"><option value="0">{L_NO_PERMISSIONS}</option>{S_FORUM_OPTIONS}</select></dd>*/
/* 		</dl>*/
/* 	<!-- ENDIF -->*/
/* 	<dl>*/
/* 		<dt><label for="forum_name">{L_FORUM_NAME}{L_COLON}</label></dt>*/
/* 		<dd><input class="text medium" type="text" id="forum_name" name="forum_name" value="{FORUM_NAME}" maxlength="255" /></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="forum_desc">{L_FORUM_DESC}{L_COLON}</label><br /><span>{L_FORUM_DESC_EXPLAIN}</span></dt>*/
/* 		<dd><textarea id="forum_desc" name="forum_desc" rows="5" cols="45" data-bbcode="true">{FORUM_DESC}</textarea></dd>*/
/* 		<dd><label><input type="checkbox" class="radio" name="desc_parse_bbcode"<!-- IF S_DESC_BBCODE_CHECKED --> checked="checked"<!-- ENDIF --> /> {L_PARSE_BBCODE}</label>*/
/* 			<label><input type="checkbox" class="radio" name="desc_parse_smilies"<!-- IF S_DESC_SMILIES_CHECKED --> checked="checked"<!-- ENDIF --> /> {L_PARSE_SMILIES}</label>*/
/* 			<label><input type="checkbox" class="radio" name="desc_parse_urls"<!-- IF S_DESC_URLS_CHECKED --> checked="checked"<!-- ENDIF --> /> {L_PARSE_URLS}</label></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="forum_image">{L_FORUM_IMAGE}{L_COLON}</label><br /><span>{L_FORUM_IMAGE_EXPLAIN}</span></dt>*/
/* 		<dd><input class="text medium" type="text" id="forum_image" name="forum_image" value="{FORUM_IMAGE}" maxlength="255" /></dd>*/
/* 		<!-- IF FORUM_IMAGE_SRC -->*/
/* 			<dd><img src="{FORUM_IMAGE_SRC}" alt="{L_FORUM_IMAGE}" /></dd>*/
/* 		<!-- ENDIF -->*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="forum_password">{L_FORUM_PASSWORD}{L_COLON}</label><br /><span>{L_FORUM_PASSWORD_EXPLAIN}</span></dt>*/
/* 		<dd><input type="password" id="forum_password" name="forum_password" value="<!-- IF S_FORUM_PASSWORD_SET -->&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;<!-- ENDIF -->" autocomplete="off" /></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="forum_password_confirm">{L_FORUM_PASSWORD_CONFIRM}{L_COLON}</label><br /><span>{L_FORUM_PASSWORD_CONFIRM_EXPLAIN}</span></dt>*/
/* 		<dd><input type="password" id="forum_password_confirm" name="forum_password_confirm" value="<!-- IF S_FORUM_PASSWORD_SET -->&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;<!-- ENDIF -->" autocomplete="off" /></dd>*/
/* 	</dl>*/
/* 	<!-- IF S_FORUM_PASSWORD_SET -->*/
/* 	<dl>*/
/* 		<dt><label for="forum_password_unset">{L_FORUM_PASSWORD_UNSET}{L_COLON}</label><br /><span>{L_FORUM_PASSWORD_UNSET_EXPLAIN}</span></dt>*/
/* 		<dd><input id="forum_password_unset" name="forum_password_unset" type="checkbox" /></dd>*/
/* 	</dl>*/
/* 	<!-- ENDIF -->*/
/* 	<dl>*/
/* 		<dt><label for="forum_style">{L_FORUM_STYLE}{L_COLON}</label></dt>*/
/* 		<dd><select id="forum_style" name="forum_style"><option value="0">{L_DEFAULT_STYLE}</option>{S_STYLES_OPTIONS}</select></dd>*/
/* 	</dl>*/
/* 	<!-- EVENT acp_forums_main_settings_append -->*/
/* 	</fieldset>*/
/* */
/* 	<div id="forum_cat_options">*/
/* 		<fieldset>*/
/* 			<legend>{L_GENERAL_FORUM_SETTINGS}</legend>*/
/* 		<dl>*/
/* 			<dt><label for="display_active">{L_DISPLAY_ACTIVE_TOPICS}{L_COLON}</label><br /><span>{L_DISPLAY_ACTIVE_TOPICS_EXPLAIN}</span></dt>*/
/* 			<dd><label><input type="radio" class="radio" name="display_active" value="1"<!-- IF S_ENABLE_ACTIVE_TOPICS --> id="display_active" checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 				<label><input type="radio" class="radio" name="display_active" value="0"<!-- IF not S_ENABLE_ACTIVE_TOPICS --> id="display_active" checked="checked"<!-- ENDIF --> /> {L_NO}</label></dd>*/
/* 		</dl>*/
/* 		</fieldset>*/
/* 	</div>*/
/* */
/* 	<div id="forum_post_options">*/
/* 		<fieldset>*/
/* 			<legend>{L_GENERAL_FORUM_SETTINGS}</legend>*/
/* 		<!-- EVENT acp_forums_normal_settings_prepend -->*/
/* 		<dl>*/
/* 			<dt><label for="forum_status">{L_FORUM_STATUS}{L_COLON}</label></dt>*/
/* 			<dd><select id="forum_status" name="forum_status">{S_STATUS_OPTIONS}</select></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="display_subforum_list">{L_LIST_SUBFORUMS}{L_COLON}</label><br /><span>{L_LIST_SUBFORUMS_EXPLAIN}</span></dt>*/
/* 			<dd><label><input type="radio" class="radio" name="display_subforum_list" value="1"<!-- IF S_DISPLAY_SUBFORUM_LIST --> id="display_subforum_list" checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 				<label><input type="radio" class="radio" name="display_subforum_list" value="0"<!-- IF not S_DISPLAY_SUBFORUM_LIST --> id="display_subforum_list" checked="checked"<!-- ENDIF --> /> {L_NO}</label></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="display_on_index">{L_LIST_INDEX}{L_COLON}</label><br /><span>{L_LIST_INDEX_EXPLAIN}</span></dt>*/
/* 			<dd><label><input type="radio" class="radio" name="display_on_index" value="1"<!-- IF S_DISPLAY_ON_INDEX --> id="display_on_index" checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 				<label><input type="radio" class="radio" name="display_on_index" value="0"<!-- IF not S_DISPLAY_ON_INDEX --> id="display_on_index" checked="checked"<!-- ENDIF --> /> {L_NO}</label></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="enable_post_review">{L_ENABLE_POST_REVIEW}{L_COLON}</label><br /><span>{L_ENABLE_POST_REVIEW_EXPLAIN}</span></dt>*/
/* 			<dd><label><input type="radio" class="radio" name="enable_post_review" value="1"<!-- IF S_ENABLE_POST_REVIEW --> id="enable_post_review" checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 				<label><input type="radio" class="radio" name="enable_post_review" value="0"<!-- IF not S_ENABLE_POST_REVIEW --> id="enable_post_review" checked="checked"<!-- ENDIF --> /> {L_NO}</label></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="enable_quick_reply">{L_ENABLE_QUICK_REPLY}{L_COLON}</label><br /><span>{L_ENABLE_QUICK_REPLY_EXPLAIN}</span></dt>*/
/* 			<dd><label><input type="radio" class="radio" name="enable_quick_reply" value="1"<!-- IF S_ENABLE_QUICK_REPLY --> id="enable_quick_reply" checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 				<label><input type="radio" class="radio" name="enable_quick_reply" value="0"<!-- IF not S_ENABLE_QUICK_REPLY --> id="enable_quick_reply" checked="checked"<!-- ENDIF --> /> {L_NO}</label></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="enable_indexing">{L_ENABLE_INDEXING}{L_COLON}</label><br /><span>{L_ENABLE_INDEXING_EXPLAIN}</span></dt>*/
/* 			<dd><label><input type="radio" class="radio" name="enable_indexing" value="1"<!-- IF S_ENABLE_INDEXING --> id="enable_indexing" checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 				<label><input type="radio" class="radio" name="enable_indexing" value="0"<!-- IF not S_ENABLE_INDEXING --> id="enable_indexing" checked="checked"<!-- ENDIF --> /> {L_NO}</label></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="enable_icons">{L_ENABLE_TOPIC_ICONS}{L_COLON}</label></dt>*/
/* 			<dd><label><input type="radio" class="radio" name="enable_icons" value="1"<!-- IF S_TOPIC_ICONS --> id="enable_icons" checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 				<label><input type="radio" class="radio" name="enable_icons" value="0"<!-- IF not S_TOPIC_ICONS --> id="enable_icons" checked="checked"<!-- ENDIF --> /> {L_NO}</label></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="display_recent">{L_ENABLE_RECENT}{L_COLON}</label><br /><span>{L_ENABLE_RECENT_EXPLAIN}</span></dt>*/
/* 			<dd><label><input type="radio" class="radio" name="display_recent" value="1"<!-- IF S_DISPLAY_ACTIVE_TOPICS --> id="display_recent" checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 				<label><input type="radio" class="radio" name="display_recent" value="0"<!-- IF not S_DISPLAY_ACTIVE_TOPICS --> id="display_recent" checked="checked"<!-- ENDIF --> /> {L_NO}</label></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="topics_per_page">{L_FORUM_TOPICS_PAGE}{L_COLON}</label><br /><span>{L_FORUM_TOPICS_PAGE_EXPLAIN}</span></dt>*/
/* 			<dd><input type="number" id="topics_per_page" name="topics_per_page" value="{TOPICS_PER_PAGE}" min="0" max="9999" /></dd>*/
/* 		</dl>*/
/* 		<!-- EVENT acp_forums_normal_settings_append -->*/
/* 		</fieldset>*/
/* */
/* 		<fieldset>*/
/* 			<legend>{L_FORUM_PRUNE_SETTINGS}</legend>*/
/* 		<!-- EVENT acp_forums_prune_settings_prepend -->*/
/* 		<dl>*/
/* 			<dt><label for="enable_prune">{L_FORUM_AUTO_PRUNE}{L_COLON}</label><br /><span>{L_FORUM_AUTO_PRUNE_EXPLAIN}</span></dt>*/
/* 			<dd><label><input type="radio" class="radio" name="enable_prune" value="1"<!-- IF S_PRUNE_ENABLE --> id="enable_prune" checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 				<label><input type="radio" class="radio" name="enable_prune" value="0"<!-- IF not S_PRUNE_ENABLE --> id="enable_prune" checked="checked"<!-- ENDIF --> /> {L_NO}</label></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="prune_freq">{L_AUTO_PRUNE_FREQ}{L_COLON}</label><br /><span>{L_AUTO_PRUNE_FREQ_EXPLAIN}</span></dt>*/
/* 			<dd><input type="number" id="prune_freq" name="prune_freq" value="{PRUNE_FREQ}" min="0" max="9999" /> {L_DAYS}</dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="prune_days">{L_AUTO_PRUNE_DAYS}{L_COLON}</label><br /><span>{L_AUTO_PRUNE_DAYS_EXPLAIN}</span></dt>*/
/* 			<dd><input type="number" id="prune_days" name="prune_days" value="{PRUNE_DAYS}" min="0" max="9999" /> {L_DAYS}</dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="prune_viewed">{L_AUTO_PRUNE_VIEWED}{L_COLON}</label><br /><span>{L_AUTO_PRUNE_VIEWED_EXPLAIN}</span></dt>*/
/* 			<dd><input type="number" id="prune_viewed" name="prune_viewed" value="{PRUNE_VIEWED}" min="0" max="9999" /> {L_DAYS}</dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="prune_old_polls">{L_PRUNE_OLD_POLLS}{L_COLON}</label><br /><span>{L_PRUNE_OLD_POLLS_EXPLAIN}</span></dt>*/
/* 			<dd><label><input type="radio" class="radio" name="prune_old_polls" value="1"<!-- IF S_PRUNE_OLD_POLLS --> id="prune_old_polls" checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 				<label><input type="radio" class="radio" name="prune_old_polls" value="0"<!-- IF not S_PRUNE_OLD_POLLS --> id="prune_old_polls" checked="checked"<!-- ENDIF --> /> {L_NO}</label></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="prune_announce">{L_PRUNE_ANNOUNCEMENTS}{L_COLON}</label></dt>*/
/* 			<dd><label><input type="radio" class="radio" name="prune_announce" value="1"<!-- IF S_PRUNE_ANNOUNCE --> id="prune_announce" checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 				<label><input type="radio" class="radio" name="prune_announce" value="0"<!-- IF not S_PRUNE_ANNOUNCE --> id="prune_announce" checked="checked"<!-- ENDIF --> /> {L_NO}</label></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="prune_sticky">{L_PRUNE_STICKY}{L_COLON}</label></dt>*/
/* 			<dd><label><input type="radio" class="radio" name="prune_sticky" value="1"<!-- IF S_PRUNE_STICKY --> id="prune_sticky" checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 				<label><input type="radio" class="radio" name="prune_sticky" value="0"<!-- IF not S_PRUNE_STICKY --> id="prune_sticky" checked="checked"<!-- ENDIF --> /> {L_NO}</label></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="enable_shadow_prune">{L_FORUM_PRUNE_SHADOW}{L_COLON}</label><br /><span>{L_FORUM_PRUNE_SHADOW_EXPLAIN}</span></dt>*/
/* 			<dd><label><input type="radio" class="radio" name="enable_shadow_prune" value="1"<!-- IF S_PRUNE_SHADOW_ENABLE --> id="enable_shadow_prune" checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 				<label><input type="radio" class="radio" name="enable_shadow_prune" value="0"<!-- IF not S_PRUNE_SHADOW_ENABLE --> id="enable_shadow_prune" checked="checked"<!-- ENDIF --> /> {L_NO}</label></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="prune_shadow_freq">{L_AUTO_PRUNE_SHADOW_FREQ}{L_COLON}</label><br /><span>{L_AUTO_PRUNE_SHADOW_FREQ_EXPLAIN}</span></dt>*/
/* 			<dd><input type="number" id="prune_shadow_freq" name="prune_shadow_freq" value="{PRUNE_SHADOW_FREQ}" min="0" max="9999" /> {L_DAYS}</dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="prune_shadow_days">{L_AUTO_PRUNE_SHADOW_DAYS}{L_COLON}</label><br /><span>{L_AUTO_PRUNE_SHADOW_DAYS_EXPLAIN}</span></dt>*/
/* 			<dd><input type="number" id="prune_shadow_days" name="prune_shadow_days" value="{PRUNE_SHADOW_DAYS}" min="0" max="9999" /> {L_DAYS}</dd>*/
/* 		</dl>*/
/* 		<!-- EVENT acp_forums_prune_settings_append -->*/
/* 		</fieldset>*/
/* 	</div>*/
/* */
/* 	<div id="forum_link_options">*/
/* 		<fieldset>*/
/* 			<legend>{L_GENERAL_FORUM_SETTINGS}</legend>*/
/* 		<dl>*/
/* 			<dt><label for="link_display_on_index">{L_LIST_INDEX}{L_COLON}</label><br /><span>{L_LIST_INDEX_EXPLAIN}</span></dt>*/
/* 			<dd><label><input type="radio" class="radio" name="link_display_on_index" value="1"<!-- IF S_DISPLAY_ON_INDEX --> id="link_display_on_index" checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 				<label><input type="radio" class="radio" name="link_display_on_index" value="0"<!-- IF not S_DISPLAY_ON_INDEX --> id="link_display_on_index" checked="checked"<!-- ENDIF --> /> {L_NO}</label></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="forum_link">{L_FORUM_LINK}{L_COLON}</label><br /><span>{L_FORUM_LINK_EXPLAIN}</span></dt>*/
/* 			<dd><input class="text medium" type="text" id="forum_link" name="forum_link" value="{FORUM_DATA_LINK}" maxlength="255" /></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="forum_link_track">{L_FORUM_LINK_TRACK}{L_COLON}</label><br /><span>{L_FORUM_LINK_TRACK_EXPLAIN}</span></dt>*/
/* 			<dd><label><input type="radio" class="radio" name="forum_link_track" value="1"<!-- IF S_FORUM_LINK_TRACK --> id="forum_link_track" checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 				<label><input type="radio" class="radio" name="forum_link_track" value="0"<!-- IF not S_FORUM_LINK_TRACK --> id="forum_link_track" checked="checked"<!-- ENDIF --> /> {L_NO}</label></dd>*/
/* 		</dl>*/
/* 		</fieldset>*/
/* 	</div>*/
/* */
/* 	<div id="forum_rules_options">*/
/* 		<fieldset>*/
/* 			<legend>{L_FORUM_RULES}</legend>*/
/* 		<!-- EVENT acp_forums_rules_settings_prepend -->*/
/* 		<dl>*/
/* 			<dt><label for="forum_rules_link">{L_FORUM_RULES_LINK}{L_COLON}</label><br /><span>{L_FORUM_RULES_LINK_EXPLAIN}</span></dt>*/
/* 			<dd><input class="text medium" type="text" id="forum_rules_link" name="forum_rules_link" value="{FORUM_RULES_LINK}" maxlength="255" /></dd>*/
/* 		</dl>*/
/* 	<!-- IF FORUM_RULES_PREVIEW -->*/
/* 		<dl>*/
/* 			<dt><label>{L_FORUM_RULES_PREVIEW}{L_COLON}</label></dt>*/
/* 			<dd>{FORUM_RULES_PREVIEW}</dd>*/
/* 		</dl>*/
/* 	<!-- ENDIF -->*/
/* 		<dl>*/
/* 			<dt><label for="forum_rules">{L_FORUM_RULES}{L_COLON}</label><br /><span>{L_FORUM_RULES_EXPLAIN}</span></dt>*/
/* 			<dd><textarea id="forum_rules" name="forum_rules" rows="4" cols="70" data-bbcode="true">{FORUM_RULES_PLAIN}</textarea></dd>*/
/* 			<dd><label><input type="checkbox" class="radio" name="rules_parse_bbcode"<!-- IF S_BBCODE_CHECKED --> checked="checked"<!-- ENDIF --> /> {L_PARSE_BBCODE}</label>*/
/* 				<label><input type="checkbox" class="radio" name="rules_parse_smilies"<!-- IF S_SMILIES_CHECKED --> checked="checked"<!-- ENDIF --> /> {L_PARSE_SMILIES}</label>*/
/* 				<label><input type="checkbox" class="radio" name="rules_parse_urls"<!-- IF S_URLS_CHECKED --> checked="checked"<!-- ENDIF --> /> {L_PARSE_URLS}</label></dd>*/
/* 		</dl>*/
/* 		<!-- EVENT acp_forums_rules_settings_append -->*/
/* 		</fieldset>*/
/* 	</div>*/
/* 	*/
/* 	<!-- EVENT acp_forums_custom_settings -->*/
/* */
/* 	<fieldset class="submit-buttons">*/
/* 		<legend>{L_SUBMIT}</legend>*/
/* 		<input class="button1" type="submit" id="submit" name="update" value="{L_SUBMIT}" />&nbsp;*/
/* 		<input class="button2" type="reset" id="reset" name="reset" value="{L_RESET}" />*/
/* 		{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* 	</form>*/
/* */
/* <!-- ELSEIF S_DELETE_FORUM -->*/
/* */
/* 	<a href="{U_BACK}" style="float: {S_CONTENT_FLOW_END};">&laquo; {L_BACK}</a>*/
/* */
/* 	<h1>{L_FORUM_DELETE}</h1>*/
/* */
/* 	<p>{L_FORUM_DELETE_EXPLAIN}</p>*/
/* */
/* 	<!-- IF S_ERROR -->*/
/* 		<div class="errorbox">*/
/* 			<h3>{L_WARNING}</h3>*/
/* 			<p>{ERROR_MSG}</p>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<form id="acp_forum" method="post" action="{U_ACTION}">*/
/* */
/* 	<fieldset>*/
/* 		<legend>{L_FORUM_DELETE}</legend>*/
/* 	<dl>*/
/* 		<dt><label>{L_FORUM_NAME}{L_COLON}</label></dt>*/
/* 		<dd><strong>{FORUM_NAME}</strong></dd>*/
/* 	</dl>*/
/* 	<!-- IF S_FORUM_POST -->*/
/* 		<dl>*/
/* 			<dt><label for="delete_action">{L_ACTION}{L_COLON}</label></dt>*/
/* 			<dd><label><input type="radio" class="radio" id="delete_action" name="action_posts" value="delete" checked="checked" /> {L_DELETE_ALL_POSTS}</label></dd>*/
/* 			<!-- IF S_MOVE_FORUM_OPTIONS -->*/
/* 				<dd><label><input type="radio" class="radio" name="action_posts" value="move" /> {L_MOVE_POSTS_TO}</label> <select name="posts_to_id">{S_MOVE_FORUM_OPTIONS}</select></dd>*/
/* 			<!-- ENDIF -->*/
/* 		</dl>*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF S_HAS_SUBFORUMS -->*/
/* 		<dl>*/
/* 			<dt><label for="sub_delete_action">{L_ACTION}{L_COLON}</label></dt>*/
/* 			<dd><label><input type="radio" class="radio" id="sub_delete_action" name="action_subforums" value="delete" checked="checked" /> {L_DELETE_SUBFORUMS}</label></dd>*/
/* 			<!-- IF S_FORUMS_LIST -->*/
/* 				<dd><label><input type="radio" class="radio" name="action_subforums" value="move" /> {L_MOVE_SUBFORUMS_TO}</label> <select name="subforums_to_id">{S_FORUMS_LIST}</select></dd>*/
/* 			<!-- ENDIF -->*/
/* 		</dl>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<p class="quick">*/
/* 		<input class="button1" type="submit" name="update" value="{L_SUBMIT}" />*/
/* 	</p>*/
/* 	{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* 	</form>*/
/* */
/* <!-- ELSEIF S_CONTINUE_SYNC -->*/
/* */
/* 	<script type="text/javascript">*/
/* 	// <![CDATA[*/
/* 		var close_waitscreen = 0;*/
/* 		// no scrollbars...*/
/* 		popup('{UA_PROGRESS_BAR}', 400, 240, '_sync');*/
/* 	// ]]>*/
/* 	</script>*/
/* */
/* 	<h1>{L_FORUM_ADMIN}</h1>*/
/* */
/* 	<p>{L_FORUM_ADMIN_EXPLAIN}</p>*/
/* */
/* 	<p>{L_PROGRESS_EXPLAIN}</p>*/
/* */
/* <!-- ELSE -->*/
/* */
/* 	<script type="text/javascript">*/
/* 	// <![CDATA[*/
/* 		/***/
/* 		* Popup search progress bar*/
/* 		*//* */
/* 		function popup_progress_bar()*/
/* 		{*/
/* 			var close_waitscreen = 0;*/
/* 			// no scrollbars...*/
/* 			popup('{UA_PROGRESS_BAR}', 400, 240, '_sync');*/
/* 		}*/
/* 	// ]]>*/
/* 	</script>*/
/* */
/* 	<h1>{L_FORUM_ADMIN}</h1>*/
/* */
/* 	<p>{L_FORUM_ADMIN_EXPLAIN}</p>*/
/* */
/* 	<!-- IF ERROR_MSG -->*/
/* 		<div class="errorbox">*/
/* 			<h3>{L_WARNING}</h3>*/
/* 			<p>{ERROR_MSG}</p>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_RESYNCED -->*/
/* 		<script type="text/javascript">*/
/* 		// <![CDATA[*/
/* 			var close_waitscreen = 1;*/
/* 		// ]]>*/
/* 		</script>*/
/* */
/* 		<div class="successbox">*/
/* 			<h3>{L_NOTIFY}</h3>*/
/* 			<p>{L_FORUM_RESYNCED}</p>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<p><strong>{NAVIGATION}<!-- IF S_NO_FORUMS --> [<a href="{U_EDIT}">{L_EDIT}</a> | <a href="{U_DELETE}">{L_DELETE}</a><!-- IF not S_LINK --> | <a href="{U_SYNC}">{L_RESYNC}</a><!-- ENDIF -->]<!-- ENDIF --></strong></p>*/
/* */
/* 	<!-- IF .forums -->*/
/* 		<table class="table1 forums">*/
/* 			<col class="row1" /><col class="row1" /><col class="row2" />*/
/* 		<tbody>*/
/* 		<!-- BEGIN forums -->*/
/* 			<tr>*/
/* 				<td class="folder">{forums.FOLDER_IMAGE}</td>*/
/* 				<td class="forum-desc">*/
/* 					<!-- IF forums.FORUM_IMAGE --><div style="float: {S_CONTENT_FLOW_BEGIN}; margin-right: 5px;">{forums.FORUM_IMAGE}</div><!-- ENDIF -->*/
/* 					<strong><!-- IF forums.S_FORUM_LINK -->{forums.FORUM_NAME}<!-- ELSE --><a href="{forums.U_FORUM}">{forums.FORUM_NAME}</a><!-- ENDIF --></strong>*/
/* 					<!-- IF forums.FORUM_DESCRIPTION --><br /><span>{forums.FORUM_DESCRIPTION}</span><!-- ENDIF -->*/
/* 					<!-- IF forums.S_FORUM_POST --><br /><br /><span>{L_TOPICS}{L_COLON} <strong>{forums.FORUM_TOPICS}</strong> / {L_POSTS}{L_COLON} <strong>{forums.FORUM_POSTS}</strong></span><!-- ENDIF -->*/
/* 				</td>*/
/* 				<td class="actions">*/
/* 					<span class="up-disabled" style="display:none;">{ICON_MOVE_UP_DISABLED}</span>*/
/* 					<span class="up"><a href="{forums.U_MOVE_UP}" data-ajax="row_up">{ICON_MOVE_UP}</a></span>*/
/* 					<span class="down-disabled" style="display:none;">{ICON_MOVE_DOWN_DISABLED}</span>*/
/* 					<span class="down"><a href="{forums.U_MOVE_DOWN}" data-ajax="row_down">{ICON_MOVE_DOWN}</a></span>*/
/* 					<a href="{forums.U_EDIT}">{ICON_EDIT}</a>*/
/* 					<!-- IF not forums.S_FORUM_LINK -->*/
/* 						<a href="{forums.U_SYNC}" onclick="popup_progress_bar();">{ICON_SYNC}</a>*/
/* 					<!-- ELSE -->*/
/* 						{ICON_SYNC_DISABLED}*/
/* 					<!-- ENDIF -->*/
/* 					<a href="{forums.U_DELETE}">{ICON_DELETE}</a>*/
/* 				</td>*/
/* 			</tr>*/
/* 		<!-- END forums -->*/
/* 		</tbody>*/
/* 		</table>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<form id="fselect" method="post" action="{U_SEL_ACTION}">*/
/* */
/* 	<fieldset class="quick">*/
/* 		{L_SELECT_FORUM}{L_COLON} <select name="parent_id" onchange="if(this.options[this.selectedIndex].value != -1){ this.form.submit(); }">{FORUM_BOX}</select>*/
/* */
/* 		<!-- EVENT acp_forums_quick_select_button_prepend --><input class="button2" type="submit" value="{L_GO}" /><!-- EVENT acp_forums_quick_select_button_append -->*/
/* 		{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* 	</form>*/
/* */
/* 	<form id="forums" method="post" action="{U_ACTION}">*/
/* */
/* 	<fieldset class="quick">*/
/* 		<input type="hidden" name="action" value="add" />*/
/* */
/* 		<input type="text" name="forum_name" value="" maxlength="255" />*/
/* 		<input class="button2" name="addforum" type="submit" value="{L_CREATE_FORUM}" />*/
/* 		{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* 	</form>*/
/* */
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
