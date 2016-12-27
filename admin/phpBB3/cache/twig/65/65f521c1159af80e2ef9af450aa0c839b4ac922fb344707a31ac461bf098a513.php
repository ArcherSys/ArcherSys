<?php

/* acp_users_overview.html */
class __TwigTemplate_141c04a22de31aa1d30bc6e86418d849a857ed98fb2502fb76178ad6f0b819e9 extends Twig_Template
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
        echo "<form id=\"user_overview\" method=\"post\" action=\"";
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\">

<fieldset>
\t<legend>";
        // line 4
        echo $this->env->getExtension('phpbb')->lang("ACP_USER_OVERVIEW");
        echo "</legend>
<dl>
\t<dt><label for=\"user\">";
        // line 6
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("NAME_CHARS_EXPLAIN");
        echo "</span></dt>
\t<dd><input type=\"text\" id=\"user\" name=\"user\" value=\"";
        // line 7
        echo (isset($context["USER"]) ? $context["USER"] : null);
        echo "\" /></dd>
\t";
        // line 8
        if ((isset($context["U_SWITCH_PERMISSIONS"]) ? $context["U_SWITCH_PERMISSIONS"] : null)) {
            echo "<dd>[ <a href=\"";
            echo (isset($context["U_SWITCH_PERMISSIONS"]) ? $context["U_SWITCH_PERMISSIONS"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("USE_PERMISSIONS");
            echo "</a> ]</dd>";
        }
        // line 9
        echo "</dl>
";
        // line 10
        if ((isset($context["S_USER_INACTIVE"]) ? $context["S_USER_INACTIVE"] : null)) {
            // line 11
            echo "<dl>
\t<dt><label>";
            // line 12
            echo $this->env->getExtension('phpbb')->lang("USER_IS_INACTIVE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t<dd><strong>";
            // line 13
            echo (isset($context["USER_INACTIVE_REASON"]) ? $context["USER_INACTIVE_REASON"] : null);
            echo "</strong></dd>
</dl>
";
        }
        // line 16
        echo "<dl>
\t<dt><label>";
        // line 17
        echo $this->env->getExtension('phpbb')->lang("REGISTERED");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t<dd><strong>";
        // line 18
        echo (isset($context["USER_REGISTERED"]) ? $context["USER_REGISTERED"] : null);
        echo "</strong></dd>
</dl>
";
        // line 20
        if ((isset($context["S_USER_IP"]) ? $context["S_USER_IP"] : null)) {
            // line 21
            echo "<dl>
\t<dt><label>";
            // line 22
            echo $this->env->getExtension('phpbb')->lang("REGISTERED_IP");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t<dd><a href=\"";
            // line 23
            echo (isset($context["U_SHOW_IP"]) ? $context["U_SHOW_IP"] : null);
            echo "\">";
            echo (isset($context["REGISTERED_IP"]) ? $context["REGISTERED_IP"] : null);
            echo "</a></dd>
\t<dd>[ <a href=\"";
            // line 24
            echo (isset($context["U_WHOIS"]) ? $context["U_WHOIS"] : null);
            echo "\" onclick=\"popup(this.href, 700, 500, '_whois'); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("WHOIS");
            echo "</a> ]</dd>
</dl>
";
        }
        // line 27
        echo "<dl>
\t<dt><label>";
        // line 28
        echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t<dd><strong>";
        // line 29
        echo (isset($context["USER_LASTACTIVE"]) ? $context["USER_LASTACTIVE"] : null);
        echo "</strong></dd>
</dl>
<dl>
\t<dt><label>";
        // line 32
        echo $this->env->getExtension('phpbb')->lang("POSTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t<dd>
\t\t<strong>
\t\t\t";
        // line 35
        if (((isset($context["USER_HAS_POSTS"]) ? $context["USER_HAS_POSTS"] : null) && (isset($context["U_SEARCH_USER"]) ? $context["U_SEARCH_USER"] : null))) {
            // line 36
            echo "\t\t\t\t<a href=\"";
            echo (isset($context["U_SEARCH_USER"]) ? $context["U_SEARCH_USER"] : null);
            echo "\">";
            echo (isset($context["USER_POSTS"]) ? $context["USER_POSTS"] : null);
            echo "</a>
\t\t\t";
        } else {
            // line 38
            echo "\t\t\t\t";
            echo (isset($context["USER_POSTS"]) ? $context["USER_POSTS"] : null);
            echo "
\t\t\t";
        }
        // line 40
        echo "\t\t</strong>
\t\t";
        // line 41
        if (((isset($context["POSTS_IN_QUEUE"]) ? $context["POSTS_IN_QUEUE"] : null) && (isset($context["U_MCP_QUEUE"]) ? $context["U_MCP_QUEUE"] : null))) {
            // line 42
            echo "\t\t\t(<a href=\"";
            echo (isset($context["U_MCP_QUEUE"]) ? $context["U_MCP_QUEUE"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("POSTS_IN_QUEUE");
            echo "</a>)
\t\t";
        } elseif (        // line 43
(isset($context["POSTS_IN_QUEUE"]) ? $context["POSTS_IN_QUEUE"] : null)) {
            // line 44
            echo "\t\t\t(";
            echo $this->env->getExtension('phpbb')->lang("POSTS_IN_QUEUE");
            echo ")
\t\t";
        }
        // line 46
        echo "\t</dd>
</dl>
<dl>
\t<dt><label>";
        // line 49
        echo $this->env->getExtension('phpbb')->lang("WARNINGS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t<dd><strong>";
        // line 50
        echo (isset($context["USER_WARNINGS"]) ? $context["USER_WARNINGS"] : null);
        echo "</strong></dd>
</dl>
<dl>
\t<dt><label for=\"user_founder\">";
        // line 53
        echo $this->env->getExtension('phpbb')->lang("FOUNDER");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("FOUNDER_EXPLAIN");
        echo "</span></dt>
\t<dd><label><input type=\"radio\" class=\"radio\" name=\"user_founder\" value=\"1\"";
        // line 54
        if ((isset($context["S_USER_FOUNDER"]) ? $context["S_USER_FOUNDER"] : null)) {
            echo " id=\"user_founder\" checked=\"checked\"";
        }
        if ( !(isset($context["S_FOUNDER"]) ? $context["S_FOUNDER"] : null)) {
            echo " disabled=\"disabled\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label>
\t\t<label><input type=\"radio\" class=\"radio\" name=\"user_founder\" value=\"0\"";
        // line 55
        if ( !(isset($context["S_USER_FOUNDER"]) ? $context["S_USER_FOUNDER"] : null)) {
            echo " id=\"user_founder\" checked=\"checked\"";
        }
        if ( !(isset($context["S_FOUNDER"]) ? $context["S_FOUNDER"] : null)) {
            echo " disabled=\"disabled\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label></dd>
</dl>
<dl>
\t<dt><label for=\"user_email\">";
        // line 58
        echo $this->env->getExtension('phpbb')->lang("EMAIL");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t<dd><input class=\"text medium\" type=\"email\" id=\"user_email\" name=\"user_email\" value=\"";
        // line 59
        echo (isset($context["USER_EMAIL"]) ? $context["USER_EMAIL"] : null);
        echo "\" autocomplete=\"off\" /></dd>
</dl>
<dl>
\t<dt><label for=\"new_password\">";
        // line 62
        echo $this->env->getExtension('phpbb')->lang("NEW_PASSWORD");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("CHANGE_PASSWORD_EXPLAIN");
        echo "</span></dt>
\t<dd><input type=\"password\" id=\"new_password\" name=\"new_password\" value=\"\" autocomplete=\"off\" /></dd>
</dl>
<dl>
\t<dt><label for=\"password_confirm\">";
        // line 66
        echo $this->env->getExtension('phpbb')->lang("CONFIRM_PASSWORD");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("CONFIRM_PASSWORD_EXPLAIN");
        echo "</span></dt>
\t<dd><input type=\"password\" id=\"password_confirm\" name=\"password_confirm\" value=\"\" autocomplete=\"off\" /></dd>
</dl>
";
        // line 69
        // line 70
        echo "
<p class=\"quick\">
\t<input class=\"button1\" type=\"submit\" name=\"update\" value=\"";
        // line 72
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />
\t<input type=\"hidden\" name=\"action\" value=\"\" />
\t";
        // line 74
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</p>

</fieldset>
</form>

";
        // line 80
        if (( !(isset($context["S_USER_FOUNDER"]) ? $context["S_USER_FOUNDER"] : null) || (isset($context["S_FOUNDER"]) ? $context["S_FOUNDER"] : null))) {
            // line 81
            echo "
\t<script type=\"text/javascript\">
\t// <![CDATA[

\t\tfunction display_reason(option)
\t\t{
\t\t\tif (option != 'banuser' && option != 'banemail' && option != 'banip')
\t\t\t{
\t\t\t\tphpbb.toggleDisplay('reasons', -1);
\t\t\t\treturn;
\t\t\t}

\t\t\tphpbb.toggleDisplay('reasons', 1);

\t\t\telement = document.getElementById('user_quick_tools').ban_reason;

\t\t\tif (element.value && element.value != '";
            // line 97
            echo addslashes($this->env->getExtension('phpbb')->lang("USER_ADMIN_BAN_NAME_REASON"));
            echo "' && element.value != '";
            echo addslashes($this->env->getExtension('phpbb')->lang("USER_ADMIN_BAN_EMAIL_REASON"));
            echo "' && element.value != '";
            echo addslashes($this->env->getExtension('phpbb')->lang("USER_ADMIN_BAN_IP_REASON"));
            echo "')
\t\t\t{
\t\t\t\treturn;
\t\t\t}

\t\t\tif (option == 'banuser')
\t\t\t{
\t\t\t\telement.value = '";
            // line 104
            echo addslashes($this->env->getExtension('phpbb')->lang("USER_ADMIN_BAN_NAME_REASON"));
            echo "';
\t\t\t}
\t\t\telse if (option == 'banemail')
\t\t\t{
\t\t\t\telement.value = '";
            // line 108
            echo addslashes($this->env->getExtension('phpbb')->lang("USER_ADMIN_BAN_EMAIL_REASON"));
            echo "';
\t\t\t}
\t\t\telse if (option == 'banip')
\t\t\t{
\t\t\t\telement.value = '";
            // line 112
            echo addslashes($this->env->getExtension('phpbb')->lang("USER_ADMIN_BAN_IP_REASON"));
            echo "';
\t\t\t}
\t\t}

\t// ]]>
\t</script>

\t<form id=\"user_quick_tools\" method=\"post\" action=\"";
            // line 119
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 122
            echo $this->env->getExtension('phpbb')->lang("USER_TOOLS");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"quicktools\">";
            // line 124
            echo $this->env->getExtension('phpbb')->lang("QUICK_TOOLS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select id=\"quicktools\" name=\"action\" onchange=\"display_reason(this.options[this.selectedIndex].value);\">";
            // line 125
            echo (isset($context["S_ACTION_OPTIONS"]) ? $context["S_ACTION_OPTIONS"] : null);
            echo "</select></dd>
\t</dl>
\t<div style=\"display: none;\" id=\"reasons\">
\t\t<dl>
\t\t\t<dt><label for=\"ban_reason\">";
            // line 129
            echo $this->env->getExtension('phpbb')->lang("BAN_REASON");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><input name=\"ban_reason\" type=\"text\" class=\"text medium\" maxlength=\"3000\" id=\"ban_reason\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"ban_give_reason\">";
            // line 133
            echo $this->env->getExtension('phpbb')->lang("BAN_GIVE_REASON");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><input name=\"ban_give_reason\" type=\"text\" class=\"text medium\" maxlength=\"3000\" id=\"ban_give_reason\" /></dd>
\t\t</dl>
\t</div>

\t<p class=\"quick\">
\t\t<input class=\"button1\" type=\"submit\" name=\"update\" value=\"";
            // line 139
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />
\t\t";
            // line 140
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</p>

\t</fieldset>

\t</form>

\t";
            // line 147
            if ( !(isset($context["S_OWN_ACCOUNT"]) ? $context["S_OWN_ACCOUNT"] : null)) {
                // line 148
                echo "\t\t<form id=\"user_delete\" method=\"post\" action=\"";
                echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
                echo "\">
\t\t\t<fieldset>
\t\t\t\t<legend>";
                // line 150
                echo $this->env->getExtension('phpbb')->lang("DELETE_USER");
                echo "</legend>
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"delete_type\">";
                // line 152
                echo $this->env->getExtension('phpbb')->lang("DELETE_USER");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("DELETE_USER_EXPLAIN");
                echo "</span></dt>
\t\t\t\t\t<dd>
\t\t\t\t\t";
                // line 154
                if ((isset($context["USER_HAS_POSTS"]) ? $context["USER_HAS_POSTS"] : null)) {
                    // line 155
                    echo "\t\t\t\t\t\t<select id=\"delete_type\" name=\"delete_type\"><option class=\"sep\" value=\"\">";
                    echo $this->env->getExtension('phpbb')->lang("SELECT_OPTION");
                    echo "</option><option value=\"retain\">";
                    echo $this->env->getExtension('phpbb')->lang("RETAIN_POSTS");
                    echo "</option><option value=\"remove\">";
                    echo $this->env->getExtension('phpbb')->lang("DELETE_POSTS");
                    echo "</option></select>
\t\t\t\t\t";
                } else {
                    // line 157
                    echo "\t\t\t\t\t\t";
                    echo $this->env->getExtension('phpbb')->lang("USER_NO_POSTS_TO_DELETE");
                    echo "<input type=\"hidden\" id=\"delete_type\" name=\"delete_type\" value=\"retain\" />
\t\t\t\t\t";
                }
                // line 159
                echo "\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t\t<p class=\"quick\">
\t\t\t\t\t<input class=\"button1\" type=\"submit\" name=\"update\" value=\"";
                // line 162
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" />
\t\t\t\t\t<input type=\"hidden\" name=\"delete\" value=\"1\" />
\t\t\t\t\t";
                // line 164
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t\t</p>
\t\t\t</fieldset>
\t\t</form>
\t";
            }
        }
    }

    public function getTemplateName()
    {
        return "acp_users_overview.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  421 => 164,  416 => 162,  411 => 159,  405 => 157,  395 => 155,  393 => 154,  385 => 152,  380 => 150,  374 => 148,  372 => 147,  362 => 140,  358 => 139,  348 => 133,  340 => 129,  333 => 125,  328 => 124,  323 => 122,  317 => 119,  307 => 112,  300 => 108,  293 => 104,  279 => 97,  261 => 81,  259 => 80,  250 => 74,  245 => 72,  241 => 70,  240 => 69,  231 => 66,  221 => 62,  215 => 59,  210 => 58,  197 => 55,  186 => 54,  179 => 53,  173 => 50,  168 => 49,  163 => 46,  157 => 44,  155 => 43,  148 => 42,  146 => 41,  143 => 40,  137 => 38,  129 => 36,  127 => 35,  120 => 32,  114 => 29,  109 => 28,  106 => 27,  98 => 24,  92 => 23,  87 => 22,  84 => 21,  82 => 20,  77 => 18,  72 => 17,  69 => 16,  63 => 13,  58 => 12,  55 => 11,  53 => 10,  50 => 9,  42 => 8,  38 => 7,  31 => 6,  26 => 4,  19 => 1,);
    }
}
/* <form id="user_overview" method="post" action="{U_ACTION}">*/
/* */
/* <fieldset>*/
/* 	<legend>{L_ACP_USER_OVERVIEW}</legend>*/
/* <dl>*/
/* 	<dt><label for="user">{L_USERNAME}{L_COLON}</label><br /><span>{L_NAME_CHARS_EXPLAIN}</span></dt>*/
/* 	<dd><input type="text" id="user" name="user" value="{USER}" /></dd>*/
/* 	<!-- IF U_SWITCH_PERMISSIONS --><dd>[ <a href="{U_SWITCH_PERMISSIONS}">{L_USE_PERMISSIONS}</a> ]</dd><!-- ENDIF -->*/
/* </dl>*/
/* <!-- IF S_USER_INACTIVE -->*/
/* <dl>*/
/* 	<dt><label>{L_USER_IS_INACTIVE}{L_COLON}</label></dt>*/
/* 	<dd><strong>{USER_INACTIVE_REASON}</strong></dd>*/
/* </dl>*/
/* <!-- ENDIF -->*/
/* <dl>*/
/* 	<dt><label>{L_REGISTERED}{L_COLON}</label></dt>*/
/* 	<dd><strong>{USER_REGISTERED}</strong></dd>*/
/* </dl>*/
/* <!-- IF S_USER_IP -->*/
/* <dl>*/
/* 	<dt><label>{L_REGISTERED_IP}{L_COLON}</label></dt>*/
/* 	<dd><a href="{U_SHOW_IP}">{REGISTERED_IP}</a></dd>*/
/* 	<dd>[ <a href="{U_WHOIS}" onclick="popup(this.href, 700, 500, '_whois'); return false;">{L_WHOIS}</a> ]</dd>*/
/* </dl>*/
/* <!-- ENDIF -->*/
/* <dl>*/
/* 	<dt><label>{L_LAST_ACTIVE}{L_COLON}</label></dt>*/
/* 	<dd><strong>{USER_LASTACTIVE}</strong></dd>*/
/* </dl>*/
/* <dl>*/
/* 	<dt><label>{L_POSTS}{L_COLON}</label></dt>*/
/* 	<dd>*/
/* 		<strong>*/
/* 			<!-- IF USER_HAS_POSTS and U_SEARCH_USER -->*/
/* 				<a href="{U_SEARCH_USER}">{USER_POSTS}</a>*/
/* 			<!-- ELSE -->*/
/* 				{USER_POSTS}*/
/* 			<!-- ENDIF -->*/
/* 		</strong>*/
/* 		<!-- IF POSTS_IN_QUEUE and U_MCP_QUEUE -->*/
/* 			(<a href="{U_MCP_QUEUE}">{L_POSTS_IN_QUEUE}</a>)*/
/* 		<!-- ELSEIF POSTS_IN_QUEUE -->*/
/* 			({L_POSTS_IN_QUEUE})*/
/* 		<!-- ENDIF -->*/
/* 	</dd>*/
/* </dl>*/
/* <dl>*/
/* 	<dt><label>{L_WARNINGS}{L_COLON}</label></dt>*/
/* 	<dd><strong>{USER_WARNINGS}</strong></dd>*/
/* </dl>*/
/* <dl>*/
/* 	<dt><label for="user_founder">{L_FOUNDER}{L_COLON}</label><br /><span>{L_FOUNDER_EXPLAIN}</span></dt>*/
/* 	<dd><label><input type="radio" class="radio" name="user_founder" value="1"<!-- IF S_USER_FOUNDER --> id="user_founder" checked="checked"<!-- ENDIF --><!-- IF not S_FOUNDER --> disabled="disabled"<!-- ENDIF --> /> {L_YES}</label>*/
/* 		<label><input type="radio" class="radio" name="user_founder" value="0"<!-- IF not S_USER_FOUNDER --> id="user_founder" checked="checked"<!-- ENDIF --><!-- IF not S_FOUNDER --> disabled="disabled"<!-- ENDIF --> /> {L_NO}</label></dd>*/
/* </dl>*/
/* <dl>*/
/* 	<dt><label for="user_email">{L_EMAIL}{L_COLON}</label></dt>*/
/* 	<dd><input class="text medium" type="email" id="user_email" name="user_email" value="{USER_EMAIL}" autocomplete="off" /></dd>*/
/* </dl>*/
/* <dl>*/
/* 	<dt><label for="new_password">{L_NEW_PASSWORD}{L_COLON}</label><br /><span>{L_CHANGE_PASSWORD_EXPLAIN}</span></dt>*/
/* 	<dd><input type="password" id="new_password" name="new_password" value="" autocomplete="off" /></dd>*/
/* </dl>*/
/* <dl>*/
/* 	<dt><label for="password_confirm">{L_CONFIRM_PASSWORD}{L_COLON}</label><br /><span>{L_CONFIRM_PASSWORD_EXPLAIN}</span></dt>*/
/* 	<dd><input type="password" id="password_confirm" name="password_confirm" value="" autocomplete="off" /></dd>*/
/* </dl>*/
/* <!-- EVENT acp_users_overview_options_append -->*/
/* */
/* <p class="quick">*/
/* 	<input class="button1" type="submit" name="update" value="{L_SUBMIT}" />*/
/* 	<input type="hidden" name="action" value="" />*/
/* 	{S_FORM_TOKEN}*/
/* </p>*/
/* */
/* </fieldset>*/
/* </form>*/
/* */
/* <!-- IF not S_USER_FOUNDER or S_FOUNDER -->*/
/* */
/* 	<script type="text/javascript">*/
/* 	// <![CDATA[*/
/* */
/* 		function display_reason(option)*/
/* 		{*/
/* 			if (option != 'banuser' && option != 'banemail' && option != 'banip')*/
/* 			{*/
/* 				phpbb.toggleDisplay('reasons', -1);*/
/* 				return;*/
/* 			}*/
/* */
/* 			phpbb.toggleDisplay('reasons', 1);*/
/* */
/* 			element = document.getElementById('user_quick_tools').ban_reason;*/
/* */
/* 			if (element.value && element.value != '{LA_USER_ADMIN_BAN_NAME_REASON}' && element.value != '{LA_USER_ADMIN_BAN_EMAIL_REASON}' && element.value != '{LA_USER_ADMIN_BAN_IP_REASON}')*/
/* 			{*/
/* 				return;*/
/* 			}*/
/* */
/* 			if (option == 'banuser')*/
/* 			{*/
/* 				element.value = '{LA_USER_ADMIN_BAN_NAME_REASON}';*/
/* 			}*/
/* 			else if (option == 'banemail')*/
/* 			{*/
/* 				element.value = '{LA_USER_ADMIN_BAN_EMAIL_REASON}';*/
/* 			}*/
/* 			else if (option == 'banip')*/
/* 			{*/
/* 				element.value = '{LA_USER_ADMIN_BAN_IP_REASON}';*/
/* 			}*/
/* 		}*/
/* */
/* 	// ]]>*/
/* 	</script>*/
/* */
/* 	<form id="user_quick_tools" method="post" action="{U_ACTION}">*/
/* */
/* 	<fieldset>*/
/* 		<legend>{L_USER_TOOLS}</legend>*/
/* 	<dl>*/
/* 		<dt><label for="quicktools">{L_QUICK_TOOLS}{L_COLON}</label></dt>*/
/* 		<dd><select id="quicktools" name="action" onchange="display_reason(this.options[this.selectedIndex].value);">{S_ACTION_OPTIONS}</select></dd>*/
/* 	</dl>*/
/* 	<div style="display: none;" id="reasons">*/
/* 		<dl>*/
/* 			<dt><label for="ban_reason">{L_BAN_REASON}{L_COLON}</label></dt>*/
/* 			<dd><input name="ban_reason" type="text" class="text medium" maxlength="3000" id="ban_reason" /></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="ban_give_reason">{L_BAN_GIVE_REASON}{L_COLON}</label></dt>*/
/* 			<dd><input name="ban_give_reason" type="text" class="text medium" maxlength="3000" id="ban_give_reason" /></dd>*/
/* 		</dl>*/
/* 	</div>*/
/* */
/* 	<p class="quick">*/
/* 		<input class="button1" type="submit" name="update" value="{L_SUBMIT}" />*/
/* 		{S_FORM_TOKEN}*/
/* 	</p>*/
/* */
/* 	</fieldset>*/
/* */
/* 	</form>*/
/* */
/* 	<!-- IF not S_OWN_ACCOUNT -->*/
/* 		<form id="user_delete" method="post" action="{U_ACTION}">*/
/* 			<fieldset>*/
/* 				<legend>{L_DELETE_USER}</legend>*/
/* 				<dl>*/
/* 					<dt><label for="delete_type">{L_DELETE_USER}{L_COLON}</label><br /><span>{L_DELETE_USER_EXPLAIN}</span></dt>*/
/* 					<dd>*/
/* 					<!-- IF USER_HAS_POSTS -->*/
/* 						<select id="delete_type" name="delete_type"><option class="sep" value="">{L_SELECT_OPTION}</option><option value="retain">{L_RETAIN_POSTS}</option><option value="remove">{L_DELETE_POSTS}</option></select>*/
/* 					<!-- ELSE -->*/
/* 						{L_USER_NO_POSTS_TO_DELETE}<input type="hidden" id="delete_type" name="delete_type" value="retain" />*/
/* 					<!-- ENDIF -->*/
/* 					</dd>*/
/* 				</dl>*/
/* 				<p class="quick">*/
/* 					<input class="button1" type="submit" name="update" value="{L_SUBMIT}" />*/
/* 					<input type="hidden" name="delete" value="1" />*/
/* 					{S_FORM_TOKEN}*/
/* 				</p>*/
/* 			</fieldset>*/
/* 		</form>*/
/* 	<!-- ENDIF -->*/
/* <!-- ENDIF -->*/
/* */
