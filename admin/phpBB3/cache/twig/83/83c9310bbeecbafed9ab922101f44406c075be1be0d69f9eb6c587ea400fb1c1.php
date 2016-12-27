<?php

/* acp_permissions.html */
class __TwigTemplate_2b83ff137c856d403bce680c8db916e777f97eff6b26ca9f8ae5851d9d2cde9a extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_permissions.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if ((isset($context["S_INTRO"]) ? $context["S_INTRO"] : null)) {
            // line 6
            echo "
\t<h1>";
            // line 7
            echo $this->env->getExtension('phpbb')->lang("ACP_PERMISSIONS");
            echo "</h1>

\t";
            // line 9
            echo $this->env->getExtension('phpbb')->lang("ACP_PERMISSIONS_EXPLAIN");
            echo "

";
        }
        // line 12
        echo "
";
        // line 13
        if ((isset($context["S_SELECT_VICTIM"]) ? $context["S_SELECT_VICTIM"] : null)) {
            // line 14
            echo "
\t";
            // line 15
            if ((isset($context["U_BACK"]) ? $context["U_BACK"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_BACK"]) ? $context["U_BACK"] : null);
                echo "\" style=\"float: ";
                echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                echo ";\">&laquo; ";
                echo $this->env->getExtension('phpbb')->lang("BACK");
                echo "</a>";
            }
            // line 16
            echo "
\t<h1>";
            // line 17
            echo $this->env->getExtension('phpbb')->lang("TITLE");
            echo "</h1>

\t<p>";
            // line 19
            echo $this->env->getExtension('phpbb')->lang("EXPLAIN");
            echo "</p>

\t";
            // line 21
            if ((isset($context["S_FORUM_NAMES"]) ? $context["S_FORUM_NAMES"] : null)) {
                // line 22
                echo "\t\t<p><strong>";
                echo $this->env->getExtension('phpbb')->lang("FORUMS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                echo (isset($context["FORUM_NAMES"]) ? $context["FORUM_NAMES"] : null);
                echo "</p>
\t";
            }
            // line 24
            echo "
\t";
            // line 25
            if ((isset($context["S_SELECT_FORUM"]) ? $context["S_SELECT_FORUM"] : null)) {
                // line 26
                echo "
\t\t<form id=\"select_victim\" method=\"post\" action=\"";
                // line 27
                echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                echo "\">

\t\t<fieldset>
\t\t\t<legend>";
                // line 30
                echo $this->env->getExtension('phpbb')->lang("LOOK_UP_FORUM");
                echo "</legend>
\t\t\t";
                // line 31
                if ((isset($context["S_FORUM_MULTIPLE"]) ? $context["S_FORUM_MULTIPLE"] : null)) {
                    echo "<p>";
                    echo $this->env->getExtension('phpbb')->lang("LOOK_UP_FORUMS_EXPLAIN");
                    echo "</p>";
                }
                // line 32
                echo "\t\t<dl>
\t\t\t<dt>";
                // line 33
                echo "<label for=\"forum\">";
                echo $this->env->getExtension('phpbb')->lang("LOOK_UP_FORUM");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label>";
                echo "</dt>
\t\t\t<dd><select id=\"forum\" name=\"forum_id[]\"";
                // line 34
                if ((isset($context["S_FORUM_MULTIPLE"]) ? $context["S_FORUM_MULTIPLE"] : null)) {
                    echo " multiple=\"multiple\"";
                }
                echo " size=\"10\">";
                echo (isset($context["S_FORUM_OPTIONS"]) ? $context["S_FORUM_OPTIONS"] : null);
                echo "</select></dd>
\t\t\t";
                // line 35
                if ((isset($context["S_FORUM_ALL"]) ? $context["S_FORUM_ALL"] : null)) {
                    echo "<dd><label><input type=\"checkbox\" class=\"radio\" name=\"all_forums\" value=\"1\" /> ";
                    echo $this->env->getExtension('phpbb')->lang("ALL_FORUMS");
                    echo "</label></dd>";
                }
                // line 36
                echo "\t\t</dl>

\t\t<p class=\"quick\">
\t\t\t";
                // line 39
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t";
                // line 40
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
                // line 41
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" class=\"button1\" />
\t\t</p>

\t\t</fieldset>
\t\t</form>

\t\t";
                // line 47
                if ((isset($context["S_FORUM_MULTIPLE"]) ? $context["S_FORUM_MULTIPLE"] : null)) {
                    // line 48
                    echo "
\t\t\t<form id=\"select_subforum\" method=\"post\" action=\"";
                    // line 49
                    echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                    echo "\">

\t\t\t<fieldset>
\t\t\t\t<legend>";
                    // line 52
                    echo $this->env->getExtension('phpbb')->lang("LOOK_UP_FORUM");
                    echo "</legend>
\t\t\t\t<p>";
                    // line 53
                    echo $this->env->getExtension('phpbb')->lang("SELECT_FORUM_SUBFORUM_EXPLAIN");
                    echo "</p>
\t\t\t<dl>
\t\t\t\t<dt>";
                    // line 55
                    echo "<label for=\"sforum\">";
                    echo $this->env->getExtension('phpbb')->lang("LOOK_UP_FORUM");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label>";
                    echo "</dt>
\t\t\t\t<dd><select id=\"sforum\" name=\"subforum_id\">";
                    // line 56
                    echo (isset($context["S_SUBFORUM_OPTIONS"]) ? $context["S_SUBFORUM_OPTIONS"] : null);
                    echo "</select></dd>
\t\t\t</dl>

\t\t\t<p class=\"quick\">
\t\t\t\t";
                    // line 60
                    echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                    echo "
\t\t\t\t";
                    // line 61
                    echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                    echo "
\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
                    // line 62
                    echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                    echo "\" class=\"button1\" />
\t\t\t</p>

\t\t\t</fieldset>
\t\t\t</form>

\t\t";
                }
                // line 69
                echo "
\t";
            } elseif ((            // line 70
(isset($context["S_SELECT_USER"]) ? $context["S_SELECT_USER"] : null) && (isset($context["S_CAN_SELECT_USER"]) ? $context["S_CAN_SELECT_USER"] : null))) {
                // line 71
                echo "
\t\t<form id=\"select_victim\" method=\"post\" action=\"";
                // line 72
                echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                echo "\">

\t\t<fieldset>
\t\t\t<legend>";
                // line 75
                echo $this->env->getExtension('phpbb')->lang("LOOK_UP_USER");
                echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"username\">";
                // line 77
                echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><input class=\"text medium\" type=\"text\" id=\"username\" name=\"username[]\" /></dd>
\t\t\t<dd>[ <a href=\"";
                // line 79
                echo (isset($context["U_FIND_USERNAME"]) ? $context["U_FIND_USERNAME"] : null);
                echo "\" onclick=\"find_username(this.href); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
                echo "</a> ]</dd>
\t\t\t<dd class=\"full\" style=\"text-align: left;\"><label><input type=\"checkbox\" class=\"radio\" id=\"anonymous\" name=\"user_id[]\" value=\"";
                // line 80
                echo (isset($context["ANONYMOUS_USER_ID"]) ? $context["ANONYMOUS_USER_ID"] : null);
                echo "\" /> ";
                echo $this->env->getExtension('phpbb')->lang("SELECT_ANONYMOUS");
                echo "</label></dd>
\t\t</dl>

\t\t<p class=\"quick\">
\t\t\t";
                // line 84
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t";
                // line 85
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
                // line 86
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" class=\"button1\" />
\t\t</p>
\t\t</fieldset>
\t\t</form>

\t";
            } elseif ((            // line 91
(isset($context["S_SELECT_GROUP"]) ? $context["S_SELECT_GROUP"] : null) && (isset($context["S_CAN_SELECT_GROUP"]) ? $context["S_CAN_SELECT_GROUP"] : null))) {
                // line 92
                echo "
\t\t<form id=\"select_victim\" method=\"post\" action=\"";
                // line 93
                echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                echo "\">

\t\t<fieldset>
\t\t\t<legend>";
                // line 96
                echo $this->env->getExtension('phpbb')->lang("LOOK_UP_GROUP");
                echo "</legend>
\t\t<dl>
\t\t\t<dt>";
                // line 98
                echo "<label for=\"group\">";
                echo $this->env->getExtension('phpbb')->lang("LOOK_UP_GROUP");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label>";
                echo "</dt>
\t\t\t<dd><select name=\"group_id[]\" id=\"group\">";
                // line 99
                echo (isset($context["S_GROUP_OPTIONS"]) ? $context["S_GROUP_OPTIONS"] : null);
                echo "</select></dd>
\t\t</dl>

\t\t<p class=\"quick\">
\t\t\t";
                // line 103
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t";
                // line 104
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
                // line 105
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" class=\"button1\" />
\t\t</p>

\t\t</fieldset>
\t\t</form>

\t\t";
            } elseif (            // line 111
(isset($context["S_SELECT_USERGROUP"]) ? $context["S_SELECT_USERGROUP"] : null)) {
                // line 112
                echo "
\t\t<div class=\"column1\">

\t\t";
                // line 115
                if ((isset($context["S_CAN_SELECT_USER"]) ? $context["S_CAN_SELECT_USER"] : null)) {
                    // line 116
                    echo "
\t\t\t<h1>";
                    // line 117
                    echo $this->env->getExtension('phpbb')->lang("USERS");
                    echo "</h1>

\t\t\t<form id=\"users\" method=\"post\" action=\"";
                    // line 119
                    echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                    echo "\">

\t\t\t<fieldset>
\t\t\t\t<legend>";
                    // line 122
                    echo $this->env->getExtension('phpbb')->lang("MANAGE_USERS");
                    echo "</legend>
\t\t\t<dl>
\t\t\t\t<dd class=\"full\"><select style=\"width: 100%;\" name=\"user_id[]\" multiple=\"multiple\" size=\"5\">";
                    // line 124
                    echo (isset($context["S_DEFINED_USER_OPTIONS"]) ? $context["S_DEFINED_USER_OPTIONS"] : null);
                    echo "</select></dd>
\t\t\t\t";
                    // line 125
                    if ((isset($context["S_ALLOW_ALL_SELECT"]) ? $context["S_ALLOW_ALL_SELECT"] : null)) {
                        echo "<dd class=\"full\" style=\"text-align: right;\"><label><input type=\"checkbox\" class=\"radio\" name=\"all_users\" value=\"1\" /> ";
                        echo $this->env->getExtension('phpbb')->lang("ALL_USERS");
                        echo "</label></dd>";
                    }
                    // line 126
                    echo "\t\t\t</dl>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"quick\">
\t\t\t\t";
                    // line 130
                    echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                    echo "
\t\t\t\t";
                    // line 131
                    echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                    echo "
\t\t\t\t<input type=\"submit\" class=\"button2\" name=\"action[delete]\" value=\"";
                    // line 132
                    echo $this->env->getExtension('phpbb')->lang("REMOVE_PERMISSIONS");
                    echo "\" style=\"width: 46% !important;\" /> &nbsp; <input class=\"button1\" type=\"submit\" name=\"submit_edit_options\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("EDIT_PERMISSIONS");
                    echo "\" style=\"width: 46% !important;\" />
\t\t\t</fieldset>
\t\t\t</form>

\t\t\t<form id=\"add_user\" method=\"post\" action=\"";
                    // line 136
                    echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                    echo "\">

\t\t\t<fieldset>
\t\t\t\t<legend>";
                    // line 139
                    echo $this->env->getExtension('phpbb')->lang("ADD_USERS");
                    echo "</legend>
\t\t\t\t<p>";
                    // line 140
                    echo $this->env->getExtension('phpbb')->lang("USERNAMES_EXPLAIN");
                    echo "</p>
\t\t\t<dl>
\t\t\t\t<dd class=\"full\"><textarea id=\"username\" name=\"usernames\" rows=\"5\" cols=\"5\" style=\"width: 100%; height: 60px;\"></textarea></dd>
\t\t\t\t<dd class=\"full\" style=\"text-align: left;\">";
                    // line 143
                    echo "<div style=\"float: ";
                    echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                    echo ";\">[ <a href=\"";
                    echo (isset($context["U_FIND_USERNAME"]) ? $context["U_FIND_USERNAME"] : null);
                    echo "\" onclick=\"find_username(this.href); return false;\">";
                    echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
                    echo "</a> ]</div>";
                    echo "<label><input type=\"checkbox\" class=\"radio\" id=\"anonymous\" name=\"user_id[]\" value=\"";
                    echo (isset($context["ANONYMOUS_USER_ID"]) ? $context["ANONYMOUS_USER_ID"] : null);
                    echo "\" /> ";
                    echo $this->env->getExtension('phpbb')->lang("SELECT_ANONYMOUS");
                    echo "</label></dd>
\t\t\t</dl>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"quick\">
\t\t\t\t";
                    // line 148
                    echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                    echo "
\t\t\t\t";
                    // line 149
                    echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                    echo "
\t\t\t\t<input class=\"button1\" type=\"submit\" name=\"submit_add_options\" value=\"";
                    // line 150
                    echo $this->env->getExtension('phpbb')->lang("ADD_PERMISSIONS");
                    echo "\" />
\t\t\t</fieldset>
\t\t\t</form>

\t\t";
                }
                // line 155
                echo "
\t\t</div>

\t\t<div class=\"column2\">

\t\t";
                // line 160
                if ((isset($context["S_CAN_SELECT_GROUP"]) ? $context["S_CAN_SELECT_GROUP"] : null)) {
                    // line 161
                    echo "
\t\t\t<h1>";
                    // line 162
                    echo $this->env->getExtension('phpbb')->lang("USERGROUPS");
                    echo "</h1>

\t\t\t<form id=\"groups\" method=\"post\" action=\"";
                    // line 164
                    echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                    echo "\">

\t\t\t<fieldset>
\t\t\t\t<legend>";
                    // line 167
                    echo $this->env->getExtension('phpbb')->lang("MANAGE_GROUPS");
                    echo "</legend>
\t\t\t<dl>
\t\t\t\t<dd class=\"full\"><select style=\"width: 100%;\" name=\"group_id[]\" multiple=\"multiple\" size=\"5\">";
                    // line 169
                    echo (isset($context["S_DEFINED_GROUP_OPTIONS"]) ? $context["S_DEFINED_GROUP_OPTIONS"] : null);
                    echo "</select></dd>
\t\t\t\t";
                    // line 170
                    if ((isset($context["S_ALLOW_ALL_SELECT"]) ? $context["S_ALLOW_ALL_SELECT"] : null)) {
                        echo "<dd class=\"full\" style=\"text-align: right;\"><label><input type=\"checkbox\" class=\"radio\" name=\"all_groups\" value=\"1\" /> ";
                        echo $this->env->getExtension('phpbb')->lang("ALL_GROUPS");
                        echo "</label></dd>";
                    }
                    // line 171
                    echo "\t\t\t</dl>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"quick\">
\t\t\t\t";
                    // line 175
                    echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                    echo "
\t\t\t\t";
                    // line 176
                    echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                    echo "
\t\t\t\t<input class=\"button2\" type=\"submit\" name=\"action[delete]\" value=\"";
                    // line 177
                    echo $this->env->getExtension('phpbb')->lang("REMOVE_PERMISSIONS");
                    echo "\" style=\"width: 46% !important;\" /> &nbsp; <input class=\"button1\" type=\"submit\" name=\"submit_edit_options\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("EDIT_PERMISSIONS");
                    echo "\" style=\"width: 46% !important;\" />
\t\t\t</fieldset>
\t\t\t</form>

\t\t\t<form id=\"add_groups\" method=\"post\" action=\"";
                    // line 181
                    echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                    echo "\">

\t\t\t<fieldset>
\t\t\t\t<legend>";
                    // line 184
                    echo $this->env->getExtension('phpbb')->lang("ADD_GROUPS");
                    echo "</legend>
\t\t\t<dl>
\t\t\t\t<dd class=\"full\">";
                    // line 186
                    echo "<select name=\"group_id[]\" style=\"width: 100%; height: 107px;\" multiple=\"multiple\">";
                    echo (isset($context["S_ADD_GROUP_OPTIONS"]) ? $context["S_ADD_GROUP_OPTIONS"] : null);
                    echo "</select>";
                    echo "</dd>
\t\t\t</dl>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"quick\">
\t\t\t\t";
                    // line 191
                    echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                    echo "
\t\t\t\t";
                    // line 192
                    echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                    echo "
\t\t\t\t<input type=\"submit\" class=\"button1\" name=\"submit_add_options\" value=\"";
                    // line 193
                    echo $this->env->getExtension('phpbb')->lang("ADD_PERMISSIONS");
                    echo "\" />
\t\t\t</fieldset>
\t\t\t</form>

\t\t";
                }
                // line 198
                echo "
\t\t</div>

\t";
            } elseif (            // line 201
(isset($context["S_SELECT_USERGROUP_VIEW"]) ? $context["S_SELECT_USERGROUP_VIEW"] : null)) {
                // line 202
                echo "
\t\t<div class=\"column1\">

\t\t\t<h1>";
                // line 205
                echo $this->env->getExtension('phpbb')->lang("USERS");
                echo "</h1>

\t\t\t<form id=\"users\" method=\"post\" action=\"";
                // line 207
                echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                echo "\">

\t\t\t<fieldset>
\t\t\t\t<legend>";
                // line 210
                echo $this->env->getExtension('phpbb')->lang("MANAGE_USERS");
                echo "</legend>
\t\t\t<dl>
\t\t\t\t<dd class=\"full\"><select style=\"width: 100%;\" name=\"user_id[]\" multiple=\"multiple\" size=\"5\">";
                // line 212
                echo (isset($context["S_DEFINED_USER_OPTIONS"]) ? $context["S_DEFINED_USER_OPTIONS"] : null);
                echo "</select></dd>
\t\t\t</dl>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"quick\">
\t\t\t\t";
                // line 217
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t\t";
                // line 218
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t\t<input class=\"button1\" type=\"submit\" name=\"submit\" value=\"";
                // line 219
                echo $this->env->getExtension('phpbb')->lang("VIEW_PERMISSIONS");
                echo "\" />
\t\t\t</fieldset>
\t\t\t</form>

\t\t\t<form id=\"add_user\" method=\"post\" action=\"";
                // line 223
                echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                echo "\">

\t\t\t<fieldset>
\t\t\t\t<legend>";
                // line 226
                echo $this->env->getExtension('phpbb')->lang("LOOK_UP_USER");
                echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"username\">";
                // line 228
                echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><input type=\"text\" id=\"username\" name=\"username[]\" /></dd>
\t\t\t\t<dd>[ <a href=\"";
                // line 230
                echo (isset($context["U_FIND_USERNAME"]) ? $context["U_FIND_USERNAME"] : null);
                echo "\" onclick=\"find_username(this.href); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
                echo "</a> ]</dd>
\t\t\t\t<dd class=\"full\" style=\"text-align: left;\"><label><input type=\"checkbox\" class=\"radio\" id=\"anonymous\" name=\"user_id[]\" value=\"";
                // line 231
                echo (isset($context["ANONYMOUS_USER_ID"]) ? $context["ANONYMOUS_USER_ID"] : null);
                echo "\" /> ";
                echo $this->env->getExtension('phpbb')->lang("SELECT_ANONYMOUS");
                echo "</label></dd>
\t\t\t</dl>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"quick\">
\t\t\t\t";
                // line 236
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t\t";
                // line 237
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
                // line 238
                echo $this->env->getExtension('phpbb')->lang("VIEW_PERMISSIONS");
                echo "\" class=\"button1\" />
\t\t\t</fieldset>
\t\t\t</form>

\t\t</div>

\t\t<div class=\"column2\">

\t\t\t<h1>";
                // line 246
                echo $this->env->getExtension('phpbb')->lang("USERGROUPS");
                echo "</h1>

\t\t\t<form id=\"groups\" method=\"post\" action=\"";
                // line 248
                echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                echo "\">

\t\t\t<fieldset>
\t\t\t\t<legend>";
                // line 251
                echo $this->env->getExtension('phpbb')->lang("MANAGE_GROUPS");
                echo "</legend>
\t\t\t<dl>
\t\t\t\t<dd class=\"full\"><select style=\"width: 100%;\" name=\"group_id[]\" multiple=\"multiple\" size=\"5\">";
                // line 253
                echo (isset($context["S_DEFINED_GROUP_OPTIONS"]) ? $context["S_DEFINED_GROUP_OPTIONS"] : null);
                echo "</select></dd>
\t\t\t</dl>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"quick\">
\t\t\t\t";
                // line 258
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t\t";
                // line 259
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t\t<input class=\"button1\" type=\"submit\" name=\"submit\" value=\"";
                // line 260
                echo $this->env->getExtension('phpbb')->lang("VIEW_PERMISSIONS");
                echo "\" />
\t\t\t</fieldset>
\t\t\t</form>

\t\t\t<form id=\"group\" method=\"post\" action=\"";
                // line 264
                echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                echo "\">

\t\t\t<fieldset>
\t\t\t\t<legend>";
                // line 267
                echo $this->env->getExtension('phpbb')->lang("LOOK_UP_GROUP");
                echo "</legend>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"group_select\">";
                // line 269
                echo $this->env->getExtension('phpbb')->lang("LOOK_UP_GROUP");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t";
                // line 270
                // line 271
                echo "\t\t\t\t<dd><select name=\"group_id[]\" id=\"group_select\">";
                echo (isset($context["S_ADD_GROUP_OPTIONS"]) ? $context["S_ADD_GROUP_OPTIONS"] : null);
                echo "</select></dd>
\t\t\t\t";
                // line 272
                // line 273
                echo "\t\t\t\t<dd>&nbsp;</dd>
\t\t\t</dl>
\t\t\t</fieldset>

\t\t\t<fieldset class=\"quick\">
\t\t\t\t";
                // line 278
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t\t";
                // line 279
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"";
                // line 280
                echo $this->env->getExtension('phpbb')->lang("VIEW_PERMISSIONS");
                echo "\" class=\"button1\" />
\t\t\t</fieldset>
\t\t\t</form>

\t\t</div>

\t";
            }
            // line 287
            echo "
";
        }
        // line 289
        echo "
";
        // line 290
        if ((isset($context["S_VIEWING_PERMISSIONS"]) ? $context["S_VIEWING_PERMISSIONS"] : null)) {
            // line 291
            echo "
\t<h1>";
            // line 292
            echo $this->env->getExtension('phpbb')->lang("ACL_VIEW");
            echo "</h1>

\t<p>";
            // line 294
            echo $this->env->getExtension('phpbb')->lang("ACL_VIEW_EXPLAIN");
            echo "</p>

\t<fieldset class=\"quick\">
\t\t<strong>&raquo; ";
            // line 297
            echo $this->env->getExtension('phpbb')->lang("PERMISSION_TYPE");
            echo "</strong>
\t</fieldset>

\t";
            // line 300
            $location = "permission_mask.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("permission_mask.html", "acp_permissions.html", 300)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 301
            echo "
";
        }
        // line 303
        echo "
";
        // line 304
        if ((isset($context["S_SETTING_PERMISSIONS"]) ? $context["S_SETTING_PERMISSIONS"] : null)) {
            // line 305
            echo "
\t<h1>";
            // line 306
            echo $this->env->getExtension('phpbb')->lang("ACL_SET");
            echo "</h1>

\t<p>";
            // line 308
            echo $this->env->getExtension('phpbb')->lang("ACL_SET_EXPLAIN");
            echo "</p>

\t<br />

\t<fieldset class=\"quick\" style=\"float: ";
            // line 312
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo ";\">
\t\t<strong>&raquo; ";
            // line 313
            echo $this->env->getExtension('phpbb')->lang("PERMISSION_TYPE");
            echo "</strong>
\t</fieldset>

\t";
            // line 316
            if ((isset($context["S_PERMISSION_DROPDOWN"]) ? $context["S_PERMISSION_DROPDOWN"] : null)) {
                // line 317
                echo "\t\t<form id=\"pselect\" method=\"post\" action=\"";
                echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                echo "\">

\t\t<fieldset class=\"quick\" style=\"float: ";
                // line 319
                echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                echo ";\">
\t\t\t";
                // line 320
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t";
                // line 321
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t";
                // line 322
                echo $this->env->getExtension('phpbb')->lang("SELECT_TYPE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " <select name=\"type\">";
                echo (isset($context["S_PERMISSION_DROPDOWN"]) ? $context["S_PERMISSION_DROPDOWN"] : null);
                echo "</select>

\t\t\t<input class=\"button2\" type=\"submit\" name=\"submit\" value=\"";
                // line 324
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" />
\t\t</fieldset>
\t\t</form>
\t";
            }
            // line 328
            echo "
\t<br class=\"responsive-hide\" /><br class=\"responsive-hide\" />

\t<!-- include tooltip file -->
\t<script type=\"text/javascript\" src=\"style/tooltip.js\"></script>
\t<script type=\"text/javascript\">
\t// <![CDATA[
\t\twindow.onload = function(){enable_tooltips_select('set-permissions', '";
            // line 335
            echo addslashes($this->env->getExtension('phpbb')->lang("ROLE_DESCRIPTION"));
            echo "', 'role')};
\t// ]]>
\t</script>

\t<form id=\"set-permissions\" method=\"post\" action=\"";
            // line 339
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t";
            // line 341
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "

\t";
            // line 343
            $location = "permission_mask.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("permission_mask.html", "acp_permissions.html", 343)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 344
            echo "
\t<br class=\"responsive-hide\" /><br class=\"responsive-hide\" />

\t<fieldset class=\"quick\" style=\"float: ";
            // line 347
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo ";\">
\t\t<input class=\"button1\" type=\"submit\" name=\"action[apply_all_permissions]\" value=\"";
            // line 348
            echo $this->env->getExtension('phpbb')->lang("APPLY_ALL_PERMISSIONS");
            echo "\" />
\t\t<input class=\"button2\" type=\"button\" name=\"cancel\" value=\"";
            // line 349
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" onclick=\"document.forms['set-permissions'].reset(); init_colours(active_pmask + active_fmask);\" />
\t\t";
            // line 350
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>

\t<br class=\"responsive-hide\" /><br class=\"responsive-hide\" />

\t</form>

";
        }
        // line 358
        echo "
";
        // line 359
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_permissions.html", 359)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_permissions.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  897 => 359,  894 => 358,  883 => 350,  879 => 349,  875 => 348,  871 => 347,  866 => 344,  854 => 343,  849 => 341,  844 => 339,  837 => 335,  828 => 328,  821 => 324,  813 => 322,  809 => 321,  805 => 320,  801 => 319,  795 => 317,  793 => 316,  787 => 313,  783 => 312,  776 => 308,  771 => 306,  768 => 305,  766 => 304,  763 => 303,  759 => 301,  747 => 300,  741 => 297,  735 => 294,  730 => 292,  727 => 291,  725 => 290,  722 => 289,  718 => 287,  708 => 280,  704 => 279,  700 => 278,  693 => 273,  692 => 272,  687 => 271,  686 => 270,  681 => 269,  676 => 267,  670 => 264,  663 => 260,  659 => 259,  655 => 258,  647 => 253,  642 => 251,  636 => 248,  631 => 246,  620 => 238,  616 => 237,  612 => 236,  602 => 231,  596 => 230,  590 => 228,  585 => 226,  579 => 223,  572 => 219,  568 => 218,  564 => 217,  556 => 212,  551 => 210,  545 => 207,  540 => 205,  535 => 202,  533 => 201,  528 => 198,  520 => 193,  516 => 192,  512 => 191,  502 => 186,  497 => 184,  491 => 181,  482 => 177,  478 => 176,  474 => 175,  468 => 171,  462 => 170,  458 => 169,  453 => 167,  447 => 164,  442 => 162,  439 => 161,  437 => 160,  430 => 155,  422 => 150,  418 => 149,  414 => 148,  396 => 143,  390 => 140,  386 => 139,  380 => 136,  371 => 132,  367 => 131,  363 => 130,  357 => 126,  351 => 125,  347 => 124,  342 => 122,  336 => 119,  331 => 117,  328 => 116,  326 => 115,  321 => 112,  319 => 111,  310 => 105,  306 => 104,  302 => 103,  295 => 99,  288 => 98,  283 => 96,  277 => 93,  274 => 92,  272 => 91,  264 => 86,  260 => 85,  256 => 84,  247 => 80,  241 => 79,  235 => 77,  230 => 75,  224 => 72,  221 => 71,  219 => 70,  216 => 69,  206 => 62,  202 => 61,  198 => 60,  191 => 56,  184 => 55,  179 => 53,  175 => 52,  169 => 49,  166 => 48,  164 => 47,  155 => 41,  151 => 40,  147 => 39,  142 => 36,  136 => 35,  128 => 34,  121 => 33,  118 => 32,  112 => 31,  108 => 30,  102 => 27,  99 => 26,  97 => 25,  94 => 24,  85 => 22,  83 => 21,  78 => 19,  73 => 17,  70 => 16,  60 => 15,  57 => 14,  55 => 13,  52 => 12,  46 => 9,  41 => 7,  38 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <a id="maincontent"></a>*/
/* */
/* <!-- IF S_INTRO -->*/
/* */
/* 	<h1>{L_ACP_PERMISSIONS}</h1>*/
/* */
/* 	{L_ACP_PERMISSIONS_EXPLAIN}*/
/* */
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_SELECT_VICTIM -->*/
/* */
/* 	<!-- IF U_BACK --><a href="{U_BACK}" style="float: {S_CONTENT_FLOW_END};">&laquo; {L_BACK}</a><!-- ENDIF -->*/
/* */
/* 	<h1>{L_TITLE}</h1>*/
/* */
/* 	<p>{L_EXPLAIN}</p>*/
/* */
/* 	<!-- IF S_FORUM_NAMES -->*/
/* 		<p><strong>{L_FORUMS}{L_COLON}</strong> {FORUM_NAMES}</p>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_SELECT_FORUM -->*/
/* */
/* 		<form id="select_victim" method="post" action="{U_ACTION}">*/
/* */
/* 		<fieldset>*/
/* 			<legend>{L_LOOK_UP_FORUM}</legend>*/
/* 			<!-- IF S_FORUM_MULTIPLE --><p>{L_LOOK_UP_FORUMS_EXPLAIN}</p><!-- ENDIF -->*/
/* 		<dl>*/
/* 			<dt><!-- EVENT acp_permissions_select_multiple_forum_prepend --><label for="forum">{L_LOOK_UP_FORUM}{L_COLON}</label><!-- EVENT acp_permissions_select_multiple_forum_append --></dt>*/
/* 			<dd><select id="forum" name="forum_id[]"<!-- IF S_FORUM_MULTIPLE --> multiple="multiple"<!-- ENDIF --> size="10">{S_FORUM_OPTIONS}</select></dd>*/
/* 			<!-- IF S_FORUM_ALL --><dd><label><input type="checkbox" class="radio" name="all_forums" value="1" /> {L_ALL_FORUMS}</label></dd><!-- ENDIF -->*/
/* 		</dl>*/
/* */
/* 		<p class="quick">*/
/* 			{S_HIDDEN_FIELDS}*/
/* 			{S_FORM_TOKEN}*/
/* 			<input type="submit" name="submit" value="{L_SUBMIT}" class="button1" />*/
/* 		</p>*/
/* */
/* 		</fieldset>*/
/* 		</form>*/
/* */
/* 		<!-- IF S_FORUM_MULTIPLE -->*/
/* */
/* 			<form id="select_subforum" method="post" action="{U_ACTION}">*/
/* */
/* 			<fieldset>*/
/* 				<legend>{L_LOOK_UP_FORUM}</legend>*/
/* 				<p>{L_SELECT_FORUM_SUBFORUM_EXPLAIN}</p>*/
/* 			<dl>*/
/* 				<dt><!-- EVENT acp_permissions_select_forum_prepend --><label for="sforum">{L_LOOK_UP_FORUM}{L_COLON}</label><!-- EVENT acp_permissions_select_forum_append --></dt>*/
/* 				<dd><select id="sforum" name="subforum_id">{S_SUBFORUM_OPTIONS}</select></dd>*/
/* 			</dl>*/
/* */
/* 			<p class="quick">*/
/* 				{S_HIDDEN_FIELDS}*/
/* 				{S_FORM_TOKEN}*/
/* 				<input type="submit" name="submit" value="{L_SUBMIT}" class="button1" />*/
/* 			</p>*/
/* */
/* 			</fieldset>*/
/* 			</form>*/
/* */
/* 		<!-- ENDIF -->*/
/* */
/* 	<!-- ELSEIF S_SELECT_USER and S_CAN_SELECT_USER -->*/
/* */
/* 		<form id="select_victim" method="post" action="{U_ACTION}">*/
/* */
/* 		<fieldset>*/
/* 			<legend>{L_LOOK_UP_USER}</legend>*/
/* 		<dl>*/
/* 			<dt><label for="username">{L_FIND_USERNAME}{L_COLON}</label></dt>*/
/* 			<dd><input class="text medium" type="text" id="username" name="username[]" /></dd>*/
/* 			<dd>[ <a href="{U_FIND_USERNAME}" onclick="find_username(this.href); return false;">{L_FIND_USERNAME}</a> ]</dd>*/
/* 			<dd class="full" style="text-align: left;"><label><input type="checkbox" class="radio" id="anonymous" name="user_id[]" value="{ANONYMOUS_USER_ID}" /> {L_SELECT_ANONYMOUS}</label></dd>*/
/* 		</dl>*/
/* */
/* 		<p class="quick">*/
/* 			{S_HIDDEN_FIELDS}*/
/* 			{S_FORM_TOKEN}*/
/* 			<input type="submit" name="submit" value="{L_SUBMIT}" class="button1" />*/
/* 		</p>*/
/* 		</fieldset>*/
/* 		</form>*/
/* */
/* 	<!-- ELSEIF S_SELECT_GROUP and S_CAN_SELECT_GROUP -->*/
/* */
/* 		<form id="select_victim" method="post" action="{U_ACTION}">*/
/* */
/* 		<fieldset>*/
/* 			<legend>{L_LOOK_UP_GROUP}</legend>*/
/* 		<dl>*/
/* 			<dt><!-- EVENT acp_permissions_select_group_prepend --><label for="group">{L_LOOK_UP_GROUP}{L_COLON}</label><!-- EVENT acp_permissions_select_group_append --></dt>*/
/* 			<dd><select name="group_id[]" id="group">{S_GROUP_OPTIONS}</select></dd>*/
/* 		</dl>*/
/* */
/* 		<p class="quick">*/
/* 			{S_HIDDEN_FIELDS}*/
/* 			{S_FORM_TOKEN}*/
/* 			<input type="submit" name="submit" value="{L_SUBMIT}" class="button1" />*/
/* 		</p>*/
/* */
/* 		</fieldset>*/
/* 		</form>*/
/* */
/* 		<!-- ELSEIF S_SELECT_USERGROUP -->*/
/* */
/* 		<div class="column1">*/
/* */
/* 		<!-- IF S_CAN_SELECT_USER -->*/
/* */
/* 			<h1>{L_USERS}</h1>*/
/* */
/* 			<form id="users" method="post" action="{U_ACTION}">*/
/* */
/* 			<fieldset>*/
/* 				<legend>{L_MANAGE_USERS}</legend>*/
/* 			<dl>*/
/* 				<dd class="full"><select style="width: 100%;" name="user_id[]" multiple="multiple" size="5">{S_DEFINED_USER_OPTIONS}</select></dd>*/
/* 				<!-- IF S_ALLOW_ALL_SELECT --><dd class="full" style="text-align: right;"><label><input type="checkbox" class="radio" name="all_users" value="1" /> {L_ALL_USERS}</label></dd><!-- ENDIF -->*/
/* 			</dl>*/
/* 			</fieldset>*/
/* */
/* 			<fieldset class="quick">*/
/* 				{S_HIDDEN_FIELDS}*/
/* 				{S_FORM_TOKEN}*/
/* 				<input type="submit" class="button2" name="action[delete]" value="{L_REMOVE_PERMISSIONS}" style="width: 46% !important;" /> &nbsp; <input class="button1" type="submit" name="submit_edit_options" value="{L_EDIT_PERMISSIONS}" style="width: 46% !important;" />*/
/* 			</fieldset>*/
/* 			</form>*/
/* */
/* 			<form id="add_user" method="post" action="{U_ACTION}">*/
/* */
/* 			<fieldset>*/
/* 				<legend>{L_ADD_USERS}</legend>*/
/* 				<p>{L_USERNAMES_EXPLAIN}</p>*/
/* 			<dl>*/
/* 				<dd class="full"><textarea id="username" name="usernames" rows="5" cols="5" style="width: 100%; height: 60px;"></textarea></dd>*/
/* 				<dd class="full" style="text-align: left;"><!-- EVENT acp_permissions_find_username_prepend --><div style="float: {S_CONTENT_FLOW_END};">[ <a href="{U_FIND_USERNAME}" onclick="find_username(this.href); return false;">{L_FIND_USERNAME}</a> ]</div><!-- EVENT acp_permissions_find_username_append --><label><input type="checkbox" class="radio" id="anonymous" name="user_id[]" value="{ANONYMOUS_USER_ID}" /> {L_SELECT_ANONYMOUS}</label></dd>*/
/* 			</dl>*/
/* 			</fieldset>*/
/* */
/* 			<fieldset class="quick">*/
/* 				{S_HIDDEN_FIELDS}*/
/* 				{S_FORM_TOKEN}*/
/* 				<input class="button1" type="submit" name="submit_add_options" value="{L_ADD_PERMISSIONS}" />*/
/* 			</fieldset>*/
/* 			</form>*/
/* */
/* 		<!-- ENDIF -->*/
/* */
/* 		</div>*/
/* */
/* 		<div class="column2">*/
/* */
/* 		<!-- IF S_CAN_SELECT_GROUP -->*/
/* */
/* 			<h1>{L_USERGROUPS}</h1>*/
/* */
/* 			<form id="groups" method="post" action="{U_ACTION}">*/
/* */
/* 			<fieldset>*/
/* 				<legend>{L_MANAGE_GROUPS}</legend>*/
/* 			<dl>*/
/* 				<dd class="full"><select style="width: 100%;" name="group_id[]" multiple="multiple" size="5">{S_DEFINED_GROUP_OPTIONS}</select></dd>*/
/* 				<!-- IF S_ALLOW_ALL_SELECT --><dd class="full" style="text-align: right;"><label><input type="checkbox" class="radio" name="all_groups" value="1" /> {L_ALL_GROUPS}</label></dd><!-- ENDIF -->*/
/* 			</dl>*/
/* 			</fieldset>*/
/* */
/* 			<fieldset class="quick">*/
/* 				{S_HIDDEN_FIELDS}*/
/* 				{S_FORM_TOKEN}*/
/* 				<input class="button2" type="submit" name="action[delete]" value="{L_REMOVE_PERMISSIONS}" style="width: 46% !important;" /> &nbsp; <input class="button1" type="submit" name="submit_edit_options" value="{L_EDIT_PERMISSIONS}" style="width: 46% !important;" />*/
/* 			</fieldset>*/
/* 			</form>*/
/* */
/* 			<form id="add_groups" method="post" action="{U_ACTION}">*/
/* */
/* 			<fieldset>*/
/* 				<legend>{L_ADD_GROUPS}</legend>*/
/* 			<dl>*/
/* 				<dd class="full"><!-- EVENT acp_permissions_add_group_options_prepend --><select name="group_id[]" style="width: 100%; height: 107px;" multiple="multiple">{S_ADD_GROUP_OPTIONS}</select><!-- EVENT acp_permissions_add_group_options_append --></dd>*/
/* 			</dl>*/
/* 			</fieldset>*/
/* */
/* 			<fieldset class="quick">*/
/* 				{S_HIDDEN_FIELDS}*/
/* 				{S_FORM_TOKEN}*/
/* 				<input type="submit" class="button1" name="submit_add_options" value="{L_ADD_PERMISSIONS}" />*/
/* 			</fieldset>*/
/* 			</form>*/
/* */
/* 		<!-- ENDIF -->*/
/* */
/* 		</div>*/
/* */
/* 	<!-- ELSEIF S_SELECT_USERGROUP_VIEW -->*/
/* */
/* 		<div class="column1">*/
/* */
/* 			<h1>{L_USERS}</h1>*/
/* */
/* 			<form id="users" method="post" action="{U_ACTION}">*/
/* */
/* 			<fieldset>*/
/* 				<legend>{L_MANAGE_USERS}</legend>*/
/* 			<dl>*/
/* 				<dd class="full"><select style="width: 100%;" name="user_id[]" multiple="multiple" size="5">{S_DEFINED_USER_OPTIONS}</select></dd>*/
/* 			</dl>*/
/* 			</fieldset>*/
/* */
/* 			<fieldset class="quick">*/
/* 				{S_HIDDEN_FIELDS}*/
/* 				{S_FORM_TOKEN}*/
/* 				<input class="button1" type="submit" name="submit" value="{L_VIEW_PERMISSIONS}" />*/
/* 			</fieldset>*/
/* 			</form>*/
/* */
/* 			<form id="add_user" method="post" action="{U_ACTION}">*/
/* */
/* 			<fieldset>*/
/* 				<legend>{L_LOOK_UP_USER}</legend>*/
/* 			<dl>*/
/* 				<dt><label for="username">{L_FIND_USERNAME}{L_COLON}</label></dt>*/
/* 				<dd><input type="text" id="username" name="username[]" /></dd>*/
/* 				<dd>[ <a href="{U_FIND_USERNAME}" onclick="find_username(this.href); return false;">{L_FIND_USERNAME}</a> ]</dd>*/
/* 				<dd class="full" style="text-align: left;"><label><input type="checkbox" class="radio" id="anonymous" name="user_id[]" value="{ANONYMOUS_USER_ID}" /> {L_SELECT_ANONYMOUS}</label></dd>*/
/* 			</dl>*/
/* 			</fieldset>*/
/* */
/* 			<fieldset class="quick">*/
/* 				{S_HIDDEN_FIELDS}*/
/* 				{S_FORM_TOKEN}*/
/* 				<input type="submit" name="submit" value="{L_VIEW_PERMISSIONS}" class="button1" />*/
/* 			</fieldset>*/
/* 			</form>*/
/* */
/* 		</div>*/
/* */
/* 		<div class="column2">*/
/* */
/* 			<h1>{L_USERGROUPS}</h1>*/
/* */
/* 			<form id="groups" method="post" action="{U_ACTION}">*/
/* */
/* 			<fieldset>*/
/* 				<legend>{L_MANAGE_GROUPS}</legend>*/
/* 			<dl>*/
/* 				<dd class="full"><select style="width: 100%;" name="group_id[]" multiple="multiple" size="5">{S_DEFINED_GROUP_OPTIONS}</select></dd>*/
/* 			</dl>*/
/* 			</fieldset>*/
/* */
/* 			<fieldset class="quick">*/
/* 				{S_HIDDEN_FIELDS}*/
/* 				{S_FORM_TOKEN}*/
/* 				<input class="button1" type="submit" name="submit" value="{L_VIEW_PERMISSIONS}" />*/
/* 			</fieldset>*/
/* 			</form>*/
/* */
/* 			<form id="group" method="post" action="{U_ACTION}">*/
/* */
/* 			<fieldset>*/
/* 				<legend>{L_LOOK_UP_GROUP}</legend>*/
/* 			<dl>*/
/* 				<dt><label for="group_select">{L_LOOK_UP_GROUP}{L_COLON}</label></dt>*/
/* 				<!-- EVENT acp_permissions_select_group_before -->*/
/* 				<dd><select name="group_id[]" id="group_select">{S_ADD_GROUP_OPTIONS}</select></dd>*/
/* 				<!-- EVENT acp_permissions_select_group_after -->*/
/* 				<dd>&nbsp;</dd>*/
/* 			</dl>*/
/* 			</fieldset>*/
/* */
/* 			<fieldset class="quick">*/
/* 				{S_HIDDEN_FIELDS}*/
/* 				{S_FORM_TOKEN}*/
/* 				<input type="submit" name="submit" value="{L_VIEW_PERMISSIONS}" class="button1" />*/
/* 			</fieldset>*/
/* 			</form>*/
/* */
/* 		</div>*/
/* */
/* 	<!-- ENDIF -->*/
/* */
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_VIEWING_PERMISSIONS -->*/
/* */
/* 	<h1>{L_ACL_VIEW}</h1>*/
/* */
/* 	<p>{L_ACL_VIEW_EXPLAIN}</p>*/
/* */
/* 	<fieldset class="quick">*/
/* 		<strong>&raquo; {L_PERMISSION_TYPE}</strong>*/
/* 	</fieldset>*/
/* */
/* 	<!-- INCLUDE permission_mask.html -->*/
/* */
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_SETTING_PERMISSIONS -->*/
/* */
/* 	<h1>{L_ACL_SET}</h1>*/
/* */
/* 	<p>{L_ACL_SET_EXPLAIN}</p>*/
/* */
/* 	<br />*/
/* */
/* 	<fieldset class="quick" style="float: {S_CONTENT_FLOW_END};">*/
/* 		<strong>&raquo; {L_PERMISSION_TYPE}</strong>*/
/* 	</fieldset>*/
/* */
/* 	<!-- IF S_PERMISSION_DROPDOWN -->*/
/* 		<form id="pselect" method="post" action="{U_ACTION}">*/
/* */
/* 		<fieldset class="quick" style="float: {S_CONTENT_FLOW_BEGIN};">*/
/* 			{S_HIDDEN_FIELDS}*/
/* 			{S_FORM_TOKEN}*/
/* 			{L_SELECT_TYPE}{L_COLON} <select name="type">{S_PERMISSION_DROPDOWN}</select>*/
/* */
/* 			<input class="button2" type="submit" name="submit" value="{L_GO}" />*/
/* 		</fieldset>*/
/* 		</form>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<br class="responsive-hide" /><br class="responsive-hide" />*/
/* */
/* 	<!-- include tooltip file -->*/
/* 	<script type="text/javascript" src="style/tooltip.js"></script>*/
/* 	<script type="text/javascript">*/
/* 	// <![CDATA[*/
/* 		window.onload = function(){enable_tooltips_select('set-permissions', '{LA_ROLE_DESCRIPTION}', 'role')};*/
/* 	// ]]>*/
/* 	</script>*/
/* */
/* 	<form id="set-permissions" method="post" action="{U_ACTION}">*/
/* */
/* 	{S_HIDDEN_FIELDS}*/
/* */
/* 	<!-- INCLUDE permission_mask.html -->*/
/* */
/* 	<br class="responsive-hide" /><br class="responsive-hide" />*/
/* */
/* 	<fieldset class="quick" style="float: {S_CONTENT_FLOW_END};">*/
/* 		<input class="button1" type="submit" name="action[apply_all_permissions]" value="{L_APPLY_ALL_PERMISSIONS}" />*/
/* 		<input class="button2" type="button" name="cancel" value="{L_RESET}" onclick="document.forms['set-permissions'].reset(); init_colours(active_pmask + active_fmask);" />*/
/* 		{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* */
/* 	<br class="responsive-hide" /><br class="responsive-hide" />*/
/* */
/* 	</form>*/
/* */
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
