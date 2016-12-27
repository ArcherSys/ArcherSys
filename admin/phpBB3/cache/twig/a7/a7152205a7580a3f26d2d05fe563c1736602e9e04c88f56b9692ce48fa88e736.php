<?php

/* acp_bbcodes.html */
class __TwigTemplate_1d4cb05ba65372b9ffdff4cfcfa5251e7c0977aa00d2446a0f078370d7c20306 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_bbcodes.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if ((isset($context["S_EDIT_BBCODE"]) ? $context["S_EDIT_BBCODE"] : null)) {
            // line 6
            echo "
\t<a href=\"";
            // line 7
            echo (isset($context["U_BACK"]) ? $context["U_BACK"] : null);
            echo "\" style=\"float: ";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a>

\t<h1>";
            // line 9
            echo $this->env->getExtension('phpbb')->lang("ACP_BBCODES");
            echo "</h1>

\t<p>";
            // line 11
            echo $this->env->getExtension('phpbb')->lang("ACP_BBCODES_EXPLAIN");
            echo "</p>

\t<form id=\"acp_bbcodes\" method=\"post\" action=\"";
            // line 13
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">

\t<fieldset>
\t\t<legend>";
            // line 16
            echo $this->env->getExtension('phpbb')->lang("BBCODE_USAGE");
            echo "</legend>
\t\t<p>";
            // line 17
            echo $this->env->getExtension('phpbb')->lang("BBCODE_USAGE_EXPLAIN");
            echo "</p>
\t<dl>
\t\t<dt><label for=\"bbcode_match\">";
            // line 19
            echo $this->env->getExtension('phpbb')->lang("EXAMPLES");
            echo "</label><br /><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("BBCODE_USAGE_EXAMPLE");
            echo "</span></dt>
\t\t<dd><textarea id=\"bbcode_match\" name=\"bbcode_match\" cols=\"60\" rows=\"5\">";
            // line 20
            echo (isset($context["BBCODE_MATCH"]) ? $context["BBCODE_MATCH"] : null);
            echo "</textarea></dd>
\t</dl>
\t</fieldset>

\t<fieldset>
\t\t<legend>";
            // line 25
            echo $this->env->getExtension('phpbb')->lang("HTML_REPLACEMENT");
            echo "</legend>
\t\t<p>";
            // line 26
            echo $this->env->getExtension('phpbb')->lang("HTML_REPLACEMENT_EXPLAIN");
            echo "</p>
\t<dl>
\t\t<dt><label for=\"bbcode_tpl\">";
            // line 28
            echo $this->env->getExtension('phpbb')->lang("EXAMPLES");
            echo "</label><br /><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("HTML_REPLACEMENT_EXAMPLE");
            echo "</span></dt>
\t\t<dd><textarea id=\"bbcode_tpl\" name=\"bbcode_tpl\" cols=\"60\" rows=\"8\">";
            // line 29
            echo (isset($context["BBCODE_TPL"]) ? $context["BBCODE_TPL"] : null);
            echo "</textarea></dd>
\t</dl>
\t</fieldset>

\t<fieldset>
\t\t<legend>";
            // line 34
            echo $this->env->getExtension('phpbb')->lang("BBCODE_HELPLINE");
            echo "</legend>
\t\t<p>";
            // line 35
            echo $this->env->getExtension('phpbb')->lang("BBCODE_HELPLINE_EXPLAIN");
            echo "</p>
\t<dl>
\t\t<dt><label for=\"bbcode_helpline\">";
            // line 37
            echo $this->env->getExtension('phpbb')->lang("BBCODE_HELPLINE_TEXT");
            echo "</label></dt>
\t\t<dd><input type=\"text\" id=\"bbcode_helpline\" name=\"bbcode_helpline\" size=\"60\" maxlength=\"255\" value=\"";
            // line 38
            echo (isset($context["BBCODE_HELPLINE"]) ? $context["BBCODE_HELPLINE"] : null);
            echo "\" /></dd>
\t</dl>
\t</fieldset>

\t<fieldset>
\t\t<legend>";
            // line 43
            echo $this->env->getExtension('phpbb')->lang("SETTINGS");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"display_on_posting\">";
            // line 45
            echo $this->env->getExtension('phpbb')->lang("DISPLAY_ON_POSTING");
            echo "</label></dt>
\t\t<dd><input type=\"checkbox\" class=\"radio\" name=\"display_on_posting\" id=\"display_on_posting\" value=\"1\"";
            // line 46
            if ((isset($context["DISPLAY_ON_POSTING"]) ? $context["DISPLAY_ON_POSTING"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /></dd>
\t</dl>
\t</fieldset>

\t";
            // line 50
            // line 51
            echo "
\t<fieldset class=\"submit-buttons\">
\t\t<legend>";
            // line 53
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "</legend>
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 54
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 55
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" />
\t\t";
            // line 56
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t
\t<br />

\t<table class=\"table1\" id=\"down\">
\t<thead>
\t<tr>
\t\t<th colspan=\"2\">";
            // line 64
            echo $this->env->getExtension('phpbb')->lang("TOKENS");
            echo "</th>
\t</tr>
\t<tr>
\t\t<td class=\"row3\" colspan=\"2\">";
            // line 67
            echo $this->env->getExtension('phpbb')->lang("TOKENS_EXPLAIN");
            echo "</td>
\t</tr>
\t<tr>
\t\t<th>";
            // line 70
            echo $this->env->getExtension('phpbb')->lang("TOKEN");
            echo "</th>
\t\t<th>";
            // line 71
            echo $this->env->getExtension('phpbb')->lang("TOKEN_DEFINITION");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "token", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["token"]) {
                // line 76
                echo "\t\t<tr style=\"vertical-align: top;\">
\t\t\t<td class=\"row1\">";
                // line 77
                echo $this->getAttribute($context["token"], "TOKEN", array());
                echo "</td>
\t\t\t<td class=\"row2\">";
                // line 78
                echo $this->getAttribute($context["token"], "EXPLAIN", array());
                echo "</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['token'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "\t</tbody>
\t</table>
\t</form>

";
        } else {
            // line 86
            echo "
\t<h1>";
            // line 87
            echo $this->env->getExtension('phpbb')->lang("ACP_BBCODES");
            echo "</h1>

\t<p>";
            // line 89
            echo $this->env->getExtension('phpbb')->lang("ACP_BBCODES_EXPLAIN");
            echo "</p>
\t
\t<form id=\"acp_bbcodes\" method=\"post\" action=\"";
            // line 91
            echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
            echo "\">
\t<fieldset class=\"tabulated\">
\t<legend>";
            // line 93
            echo $this->env->getExtension('phpbb')->lang("ACP_BBCODES");
            echo "</legend>

\t<table class=\"table1 zebra-table\" id=\"down\">
\t<thead>
\t<tr>
\t\t<th>";
            // line 98
            echo $this->env->getExtension('phpbb')->lang("BBCODE_TAG");
            echo "</th>
\t\t<th>";
            // line 99
            echo $this->env->getExtension('phpbb')->lang("ACTION");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "bbcodes", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["bbcodes"]) {
                // line 104
                echo "\t\t<tr>
\t\t\t<td style=\"text-align: center;\">";
                // line 105
                echo $this->getAttribute($context["bbcodes"], "BBCODE_TAG", array());
                echo "</td>
\t\t\t<td class=\"actions\">";
                // line 106
                echo " <a href=\"";
                echo $this->getAttribute($context["bbcodes"], "U_EDIT", array());
                echo "\">";
                echo (isset($context["ICON_EDIT"]) ? $context["ICON_EDIT"] : null);
                echo "</a> <a href=\"";
                echo $this->getAttribute($context["bbcodes"], "U_DELETE", array());
                echo "\" data-ajax=\"row_delete\">";
                echo (isset($context["ICON_DELETE"]) ? $context["ICON_DELETE"] : null);
                echo "</a> ";
                echo "</td>
\t\t</tr>
\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 109
                echo "\t\t<tr class=\"row3\">
\t\t\t<td colspan=\"2\">";
                // line 110
                echo $this->env->getExtension('phpbb')->lang("ACP_NO_ITEMS");
                echo "</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bbcodes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "\t</tbody>
\t</table>

\t<p class=\"quick\">
\t\t<input class=\"button2\" name=\"submit\" type=\"submit\" value=\"";
            // line 117
            echo $this->env->getExtension('phpbb')->lang("ADD_BBCODE");
            echo "\" />
\t</p>
\t";
            // line 119
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>

\t</form>

";
        }
        // line 125
        echo "
";
        // line 126
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_bbcodes.html", 126)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_bbcodes.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 126,  326 => 125,  317 => 119,  312 => 117,  306 => 113,  297 => 110,  294 => 109,  278 => 106,  274 => 105,  271 => 104,  266 => 103,  259 => 99,  255 => 98,  247 => 93,  242 => 91,  237 => 89,  232 => 87,  229 => 86,  222 => 81,  213 => 78,  209 => 77,  206 => 76,  202 => 75,  195 => 71,  191 => 70,  185 => 67,  179 => 64,  168 => 56,  164 => 55,  160 => 54,  156 => 53,  152 => 51,  151 => 50,  142 => 46,  138 => 45,  133 => 43,  125 => 38,  121 => 37,  116 => 35,  112 => 34,  104 => 29,  98 => 28,  93 => 26,  89 => 25,  81 => 20,  75 => 19,  70 => 17,  66 => 16,  60 => 13,  55 => 11,  50 => 9,  41 => 7,  38 => 6,  36 => 5,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <a id="maincontent"></a>*/
/* */
/* <!-- IF S_EDIT_BBCODE -->*/
/* */
/* 	<a href="{U_BACK}" style="float: {S_CONTENT_FLOW_END};">&laquo; {L_BACK}</a>*/
/* */
/* 	<h1>{L_ACP_BBCODES}</h1>*/
/* */
/* 	<p>{L_ACP_BBCODES_EXPLAIN}</p>*/
/* */
/* 	<form id="acp_bbcodes" method="post" action="{U_ACTION}">*/
/* */
/* 	<fieldset>*/
/* 		<legend>{L_BBCODE_USAGE}</legend>*/
/* 		<p>{L_BBCODE_USAGE_EXPLAIN}</p>*/
/* 	<dl>*/
/* 		<dt><label for="bbcode_match">{L_EXAMPLES}</label><br /><br /><span>{L_BBCODE_USAGE_EXAMPLE}</span></dt>*/
/* 		<dd><textarea id="bbcode_match" name="bbcode_match" cols="60" rows="5">{BBCODE_MATCH}</textarea></dd>*/
/* 	</dl>*/
/* 	</fieldset>*/
/* */
/* 	<fieldset>*/
/* 		<legend>{L_HTML_REPLACEMENT}</legend>*/
/* 		<p>{L_HTML_REPLACEMENT_EXPLAIN}</p>*/
/* 	<dl>*/
/* 		<dt><label for="bbcode_tpl">{L_EXAMPLES}</label><br /><br /><span>{L_HTML_REPLACEMENT_EXAMPLE}</span></dt>*/
/* 		<dd><textarea id="bbcode_tpl" name="bbcode_tpl" cols="60" rows="8">{BBCODE_TPL}</textarea></dd>*/
/* 	</dl>*/
/* 	</fieldset>*/
/* */
/* 	<fieldset>*/
/* 		<legend>{L_BBCODE_HELPLINE}</legend>*/
/* 		<p>{L_BBCODE_HELPLINE_EXPLAIN}</p>*/
/* 	<dl>*/
/* 		<dt><label for="bbcode_helpline">{L_BBCODE_HELPLINE_TEXT}</label></dt>*/
/* 		<dd><input type="text" id="bbcode_helpline" name="bbcode_helpline" size="60" maxlength="255" value="{BBCODE_HELPLINE}" /></dd>*/
/* 	</dl>*/
/* 	</fieldset>*/
/* */
/* 	<fieldset>*/
/* 		<legend>{L_SETTINGS}</legend>*/
/* 	<dl>*/
/* 		<dt><label for="display_on_posting">{L_DISPLAY_ON_POSTING}</label></dt>*/
/* 		<dd><input type="checkbox" class="radio" name="display_on_posting" id="display_on_posting" value="1"<!-- IF DISPLAY_ON_POSTING --> checked="checked"<!-- ENDIF --> /></dd>*/
/* 	</dl>*/
/* 	</fieldset>*/
/* */
/* 	<!-- EVENT acp_bbcodes_edit_fieldsets_after -->*/
/* */
/* 	<fieldset class="submit-buttons">*/
/* 		<legend>{L_SUBMIT}</legend>*/
/* 		<input class="button1" type="submit" id="submit" name="submit" value="{L_SUBMIT}" />&nbsp;*/
/* 		<input class="button2" type="reset" id="reset" name="reset" value="{L_RESET}" />*/
/* 		{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* 	*/
/* 	<br />*/
/* */
/* 	<table class="table1" id="down">*/
/* 	<thead>*/
/* 	<tr>*/
/* 		<th colspan="2">{L_TOKENS}</th>*/
/* 	</tr>*/
/* 	<tr>*/
/* 		<td class="row3" colspan="2">{L_TOKENS_EXPLAIN}</td>*/
/* 	</tr>*/
/* 	<tr>*/
/* 		<th>{L_TOKEN}</th>*/
/* 		<th>{L_TOKEN_DEFINITION}</th>*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	<!-- BEGIN token -->*/
/* 		<tr style="vertical-align: top;">*/
/* 			<td class="row1">{token.TOKEN}</td>*/
/* 			<td class="row2">{token.EXPLAIN}</td>*/
/* 		</tr>*/
/* 	<!-- END token -->*/
/* 	</tbody>*/
/* 	</table>*/
/* 	</form>*/
/* */
/* <!-- ELSE -->*/
/* */
/* 	<h1>{L_ACP_BBCODES}</h1>*/
/* */
/* 	<p>{L_ACP_BBCODES_EXPLAIN}</p>*/
/* 	*/
/* 	<form id="acp_bbcodes" method="post" action="{U_ACTION}">*/
/* 	<fieldset class="tabulated">*/
/* 	<legend>{L_ACP_BBCODES}</legend>*/
/* */
/* 	<table class="table1 zebra-table" id="down">*/
/* 	<thead>*/
/* 	<tr>*/
/* 		<th>{L_BBCODE_TAG}</th>*/
/* 		<th>{L_ACTION}</th>*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	<!-- BEGIN bbcodes -->*/
/* 		<tr>*/
/* 			<td style="text-align: center;">{bbcodes.BBCODE_TAG}</td>*/
/* 			<td class="actions"><!-- EVENT acp_bbcodes_actions_prepend --> <a href="{bbcodes.U_EDIT}">{ICON_EDIT}</a> <a href="{bbcodes.U_DELETE}" data-ajax="row_delete">{ICON_DELETE}</a> <!-- EVENT acp_bbcodes_actions_append --></td>*/
/* 		</tr>*/
/* 	<!-- BEGINELSE -->*/
/* 		<tr class="row3">*/
/* 			<td colspan="2">{L_ACP_NO_ITEMS}</td>*/
/* 		</tr>*/
/* 	<!-- END bbcodes -->*/
/* 	</tbody>*/
/* 	</table>*/
/* */
/* 	<p class="quick">*/
/* 		<input class="button2" name="submit" type="submit" value="{L_ADD_BBCODE}" />*/
/* 	</p>*/
/* 	{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* */
/* 	</form>*/
/* */
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
