<?php

/* acp_ext_list.html */
class __TwigTemplate_aadb12e6cad89f98be1cfe4617c1ec1321297d82ee3df7adbee0d0a201a698bf extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "acp_ext_list.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

\t<h1>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("EXTENSIONS_ADMIN");
        echo "</h1>

\t<p>";
        // line 7
        echo $this->env->getExtension('phpbb')->lang("EXTENSIONS_EXPLAIN");
        echo "</p>

\t<fieldset class=\"quick\">
\t\t<span class=\"small\"><a href=\"https://www.phpbb.com/go/customise/extensions/3.1\" target=\"_blank\">";
        // line 10
        echo $this->env->getExtension('phpbb')->lang("BROWSE_EXTENSIONS_DATABASE");
        echo "</a> &bull; <a href=\"";
        echo (isset($context["U_VERSIONCHECK_FORCE"]) ? $context["U_VERSIONCHECK_FORCE"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("VERSIONCHECK_FORCE_UPDATE_ALL");
        echo "</a> &bull; <a href=\"javascript:phpbb.toggleDisplay('version_check_settings');\">";
        echo $this->env->getExtension('phpbb')->lang("SETTINGS");
        echo "</a></span>
\t</fieldset>

\t<form id=\"version_check_settings\" method=\"post\" action=\"";
        // line 13
        echo (isset($context["U_ACTION"]) ? $context["U_ACTION"] : null);
        echo "\" style=\"display:none\">

\t<fieldset>
\t\t<legend>";
        // line 16
        echo $this->env->getExtension('phpbb')->lang("EXTENSIONS_VERSION_CHECK_SETTINGS");
        echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"force_unstable\">";
        // line 18
        echo $this->env->getExtension('phpbb')->lang("FORCE_UNSTABLE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd>
\t\t\t\t<label><input type=\"radio\" id=\"force_unstable\" name=\"force_unstable\" class=\"radio\" value=\"1\"";
        // line 20
        if ((isset($context["FORCE_UNSTABLE"]) ? $context["FORCE_UNSTABLE"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label>
\t\t\t\t<label><input type=\"radio\" name=\"force_unstable\" class=\"radio\" value=\"0\"";
        // line 21
        if ( !(isset($context["FORCE_UNSTABLE"]) ? $context["FORCE_UNSTABLE"] : null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t\t\t</dd>
\t\t</dl>

\t\t<p class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" name=\"update\" value=\"";
        // line 26
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" />&nbsp;
\t\t\t<input class=\"button2\" type=\"reset\" name=\"reset\" value=\"";
        // line 27
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" />
\t\t\t<input type=\"hidden\" name=\"action\" value=\"set_config_version_check_force_unstable\" />
\t\t\t";
        // line 29
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t\t</p>
\t</fieldset>
\t</form>

\t<table class=\"table1\">
\t\t<col class=\"row1\" ><col class=\"row1\" ><col class=\"row2\" ><col class=\"row2\" >
\t<thead>
\t\t<tr>
\t\t\t<th>";
        // line 38
        echo $this->env->getExtension('phpbb')->lang("EXTENSION_NAME");
        echo "</th>
\t\t\t<th style=\"text-align: center; width: 20%;\">";
        // line 39
        echo $this->env->getExtension('phpbb')->lang("CURRENT_VERSION");
        echo "</th>
\t\t\t<th style=\"text-align: center; width: 10%;\">";
        // line 40
        echo $this->env->getExtension('phpbb')->lang("EXTENSION_OPTIONS");
        echo "</th>
\t\t\t<th style=\"text-align: center; width: 25%;\">";
        // line 41
        echo $this->env->getExtension('phpbb')->lang("EXTENSION_ACTIONS");
        echo "</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 45
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "enabled", array()))) {
            // line 46
            echo "\t\t<tr>
\t\t\t<td class=\"row3\" colspan=\"4\"><strong>";
            // line 47
            echo $this->env->getExtension('phpbb')->lang("EXTENSIONS_ENABLED");
            echo "</strong></td>
\t\t</tr>
\t\t";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "enabled", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["enabled"]) {
                // line 50
                echo "\t\t<tr class=\"ext_enabled row-highlight\">
\t\t\t<td><strong title=\"";
                // line 51
                echo $this->getAttribute($context["enabled"], "NAME", array());
                echo "\">";
                echo $this->getAttribute($context["enabled"], "META_DISPLAY_NAME", array());
                echo "</strong></td>
\t\t\t<td style=\"text-align: center;\">
\t\t\t\t";
                // line 53
                if ($this->getAttribute($context["enabled"], "S_VERSIONCHECK", array())) {
                    // line 54
                    echo "\t\t\t\t<strong ";
                    if ($this->getAttribute($context["enabled"], "S_UP_TO_DATE", array())) {
                        echo "style=\"color: #228822;\"";
                    } else {
                        echo "style=\"color: #BC2A4D;\"";
                    }
                    echo ">";
                    echo $this->getAttribute($context["enabled"], "META_VERSION", array());
                    echo "</strong>
\t\t\t\t";
                } else {
                    // line 56
                    echo "\t\t\t\t";
                    echo $this->getAttribute($context["enabled"], "META_VERSION", array());
                    echo "
\t\t\t\t";
                }
                // line 58
                echo "\t\t\t</td>
\t\t\t<td style=\"text-align: center;\"><a href=\"";
                // line 59
                echo $this->getAttribute($context["enabled"], "U_DETAILS", array());
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("DETAILS");
                echo "</a></td>
\t\t\t<td style=\"text-align: center;\">
\t\t\t\t";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["enabled"], "actions", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
                    // line 62
                    echo "\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["actions"], "U_ACTION", array());
                    echo "\"";
                    if ($this->getAttribute($context["actions"], "L_ACTION_EXPLAIN", array())) {
                        echo " title=\"";
                        echo $this->getAttribute($context["actions"], "L_ACTION_EXPLAIN", array());
                        echo "\"";
                    }
                    echo ">";
                    echo $this->getAttribute($context["actions"], "L_ACTION", array());
                    echo "</a>
\t\t\t\t\t";
                    // line 63
                    if ( !$this->getAttribute($context["actions"], "S_LAST_ROW", array())) {
                        echo "&nbsp;|&nbsp;";
                    }
                    // line 64
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "\t\t\t</td>
\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enabled'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "\t\t";
        }
        // line 69
        echo "
\t\t";
        // line 70
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "disabled", array()))) {
            // line 71
            echo "\t\t<tr>
\t\t\t<td class=\"row3\" colspan=\"4\"><strong>";
            // line 72
            echo $this->env->getExtension('phpbb')->lang("EXTENSIONS_DISABLED");
            echo "</strong></td>
\t\t</tr>
\t\t";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "disabled", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["disabled"]) {
                // line 75
                echo "\t\t<tr class=\"ext_disabled row-highlight\">
\t\t\t<td><strong title=\"";
                // line 76
                echo $this->getAttribute($context["disabled"], "NAME", array());
                echo "\">";
                echo $this->getAttribute($context["disabled"], "META_DISPLAY_NAME", array());
                echo "</strong></td>
\t\t\t<td style=\"text-align: center;\">
\t\t\t\t";
                // line 78
                if ($this->getAttribute($context["disabled"], "S_VERSIONCHECK", array())) {
                    // line 79
                    echo "\t\t\t\t<strong ";
                    if ($this->getAttribute($context["disabled"], "S_UP_TO_DATE", array())) {
                        echo "style=\"color: #228822;\"";
                    } else {
                        echo "style=\"color: #BC2A4D;\"";
                    }
                    echo ">";
                    echo $this->getAttribute($context["disabled"], "META_VERSION", array());
                    echo "</strong>
\t\t\t\t";
                } else {
                    // line 81
                    echo "\t\t\t\t";
                    echo $this->getAttribute($context["disabled"], "META_VERSION", array());
                    echo "
\t\t\t\t";
                }
                // line 83
                echo "\t\t\t</td>
\t\t\t<td style=\"text-align: center;\">
\t\t\t\t";
                // line 85
                if ($this->getAttribute($context["disabled"], "U_DETAILS", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["disabled"], "U_DETAILS", array());
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("DETAILS");
                    echo "</a>";
                }
                // line 86
                echo "\t\t\t</td>
\t\t\t<td style=\"text-align: center;\">
\t\t\t\t";
                // line 88
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["disabled"], "actions", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
                    // line 89
                    echo "\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["actions"], "U_ACTION", array());
                    echo "\"";
                    if ($this->getAttribute($context["actions"], "L_ACTION_EXPLAIN", array())) {
                        echo " title=\"";
                        echo $this->getAttribute($context["actions"], "L_ACTION_EXPLAIN", array());
                        echo "\"";
                    }
                    echo ">";
                    echo $this->getAttribute($context["actions"], "L_ACTION", array());
                    echo "</a>
\t\t\t\t\t";
                    // line 90
                    if ( !$this->getAttribute($context["actions"], "S_LAST_ROW", array())) {
                        echo "&nbsp;|&nbsp;";
                    }
                    // line 91
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 92
                echo "\t\t\t</td>
\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['disabled'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "\t\t";
        }
        // line 96
        echo "\t</tbody>
\t</table>

\t<table class=\"table1\">
\t<tr>
\t\t<th>";
        // line 101
        echo $this->env->getExtension('phpbb')->lang("EXTENSION_INSTALL_HEADLINE");
        echo "</th>
\t</tr>
\t<tr>
\t\t<td class=\"row3\">";
        // line 104
        echo $this->env->getExtension('phpbb')->lang("EXTENSION_INSTALL_EXPLAIN");
        echo "</td>
\t</tr>
\t<tr>
\t\t<th>";
        // line 107
        echo $this->env->getExtension('phpbb')->lang("EXTENSION_UPDATE_HEADLINE");
        echo "</th>
\t</tr>
\t<tr>
\t\t<td class=\"row3\">";
        // line 110
        echo $this->env->getExtension('phpbb')->lang("EXTENSION_UPDATE_EXPLAIN");
        echo "</td>
\t</tr>
\t<tr>
\t\t<th>";
        // line 113
        echo $this->env->getExtension('phpbb')->lang("EXTENSION_REMOVE_HEADLINE");
        echo "</th>
\t</tr>
\t<tr>
\t\t<td class=\"row3\">";
        // line 116
        echo $this->env->getExtension('phpbb')->lang("EXTENSION_REMOVE_EXPLAIN");
        echo "</td>
\t</tr>
\t</tbody>
\t</table>

";
        // line 121
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_ext_list.html", 121)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_ext_list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 121,  366 => 116,  360 => 113,  354 => 110,  348 => 107,  342 => 104,  336 => 101,  329 => 96,  326 => 95,  318 => 92,  312 => 91,  308 => 90,  295 => 89,  291 => 88,  287 => 86,  279 => 85,  275 => 83,  269 => 81,  257 => 79,  255 => 78,  248 => 76,  245 => 75,  241 => 74,  236 => 72,  233 => 71,  231 => 70,  228 => 69,  225 => 68,  217 => 65,  211 => 64,  207 => 63,  194 => 62,  190 => 61,  183 => 59,  180 => 58,  174 => 56,  162 => 54,  160 => 53,  153 => 51,  150 => 50,  146 => 49,  141 => 47,  138 => 46,  136 => 45,  129 => 41,  125 => 40,  121 => 39,  117 => 38,  105 => 29,  100 => 27,  96 => 26,  84 => 21,  76 => 20,  70 => 18,  65 => 16,  59 => 13,  47 => 10,  41 => 7,  36 => 5,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <a id="maincontent"></a>*/
/* */
/* 	<h1>{L_EXTENSIONS_ADMIN}</h1>*/
/* */
/* 	<p>{L_EXTENSIONS_EXPLAIN}</p>*/
/* */
/* 	<fieldset class="quick">*/
/* 		<span class="small"><a href="https://www.phpbb.com/go/customise/extensions/3.1" target="_blank">{L_BROWSE_EXTENSIONS_DATABASE}</a> &bull; <a href="{U_VERSIONCHECK_FORCE}">{L_VERSIONCHECK_FORCE_UPDATE_ALL}</a> &bull; <a href="javascript:phpbb.toggleDisplay('version_check_settings');">{L_SETTINGS}</a></span>*/
/* 	</fieldset>*/
/* */
/* 	<form id="version_check_settings" method="post" action="{U_ACTION}" style="display:none">*/
/* */
/* 	<fieldset>*/
/* 		<legend>{L_EXTENSIONS_VERSION_CHECK_SETTINGS}</legend>*/
/* 		<dl>*/
/* 			<dt><label for="force_unstable">{L_FORCE_UNSTABLE}{L_COLON}</label></dt>*/
/* 			<dd>*/
/* 				<label><input type="radio" id="force_unstable" name="force_unstable" class="radio" value="1"<!-- IF FORCE_UNSTABLE --> checked="checked"<!-- ENDIF --> /> {L_YES}</label>*/
/* 				<label><input type="radio" name="force_unstable" class="radio" value="0"<!-- IF not FORCE_UNSTABLE --> checked="checked"<!-- ENDIF --> /> {L_NO}</label>*/
/* 			</dd>*/
/* 		</dl>*/
/* */
/* 		<p class="submit-buttons">*/
/* 			<input class="button1" type="submit" name="update" value="{L_SUBMIT}" />&nbsp;*/
/* 			<input class="button2" type="reset" name="reset" value="{L_RESET}" />*/
/* 			<input type="hidden" name="action" value="set_config_version_check_force_unstable" />*/
/* 			{S_FORM_TOKEN}*/
/* 		</p>*/
/* 	</fieldset>*/
/* 	</form>*/
/* */
/* 	<table class="table1">*/
/* 		<col class="row1" ><col class="row1" ><col class="row2" ><col class="row2" >*/
/* 	<thead>*/
/* 		<tr>*/
/* 			<th>{L_EXTENSION_NAME}</th>*/
/* 			<th style="text-align: center; width: 20%;">{L_CURRENT_VERSION}</th>*/
/* 			<th style="text-align: center; width: 10%;">{L_EXTENSION_OPTIONS}</th>*/
/* 			<th style="text-align: center; width: 25%;">{L_EXTENSION_ACTIONS}</th>*/
/* 		</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 		<!-- IF .enabled -->*/
/* 		<tr>*/
/* 			<td class="row3" colspan="4"><strong>{L_EXTENSIONS_ENABLED}</strong></td>*/
/* 		</tr>*/
/* 		<!-- BEGIN enabled -->*/
/* 		<tr class="ext_enabled row-highlight">*/
/* 			<td><strong title="{enabled.NAME}">{enabled.META_DISPLAY_NAME}</strong></td>*/
/* 			<td style="text-align: center;">*/
/* 				<!-- IF enabled.S_VERSIONCHECK -->*/
/* 				<strong <!-- IF enabled.S_UP_TO_DATE -->style="color: #228822;"<!-- ELSE -->style="color: #BC2A4D;"<!-- ENDIF -->>{enabled.META_VERSION}</strong>*/
/* 				<!-- ELSE -->*/
/* 				{enabled.META_VERSION}*/
/* 				<!-- ENDIF -->*/
/* 			</td>*/
/* 			<td style="text-align: center;"><a href="{enabled.U_DETAILS}">{L_DETAILS}</a></td>*/
/* 			<td style="text-align: center;">*/
/* 				<!-- BEGIN actions -->*/
/* 					<a href="{enabled.actions.U_ACTION}"<!-- IF enabled.actions.L_ACTION_EXPLAIN --> title="{enabled.actions.L_ACTION_EXPLAIN}"<!-- ENDIF -->>{enabled.actions.L_ACTION}</a>*/
/* 					<!-- IF not enabled.actions.S_LAST_ROW -->&nbsp;|&nbsp;<!-- ENDIF -->*/
/* 				<!-- END actions -->*/
/* 			</td>*/
/* 		</tr>*/
/* 		<!-- END enabled -->*/
/* 		<!-- ENDIF -->*/
/* */
/* 		<!-- IF .disabled -->*/
/* 		<tr>*/
/* 			<td class="row3" colspan="4"><strong>{L_EXTENSIONS_DISABLED}</strong></td>*/
/* 		</tr>*/
/* 		<!-- BEGIN disabled -->*/
/* 		<tr class="ext_disabled row-highlight">*/
/* 			<td><strong title="{disabled.NAME}">{disabled.META_DISPLAY_NAME}</strong></td>*/
/* 			<td style="text-align: center;">*/
/* 				<!-- IF disabled.S_VERSIONCHECK -->*/
/* 				<strong <!-- IF disabled.S_UP_TO_DATE -->style="color: #228822;"<!-- ELSE -->style="color: #BC2A4D;"<!-- ENDIF -->>{disabled.META_VERSION}</strong>*/
/* 				<!-- ELSE -->*/
/* 				{disabled.META_VERSION}*/
/* 				<!-- ENDIF -->*/
/* 			</td>*/
/* 			<td style="text-align: center;">*/
/* 				<!-- IF disabled.U_DETAILS --><a href="{disabled.U_DETAILS}">{L_DETAILS}</a><!-- ENDIF -->*/
/* 			</td>*/
/* 			<td style="text-align: center;">*/
/* 				<!-- BEGIN actions -->*/
/* 					<a href="{disabled.actions.U_ACTION}"<!-- IF disabled.actions.L_ACTION_EXPLAIN --> title="{disabled.actions.L_ACTION_EXPLAIN}"<!-- ENDIF -->>{disabled.actions.L_ACTION}</a>*/
/* 					<!-- IF not disabled.actions.S_LAST_ROW -->&nbsp;|&nbsp;<!-- ENDIF -->*/
/* 				<!-- END actions -->*/
/* 			</td>*/
/* 		</tr>*/
/* 		<!-- END disabled -->*/
/* 		<!-- ENDIF -->*/
/* 	</tbody>*/
/* 	</table>*/
/* */
/* 	<table class="table1">*/
/* 	<tr>*/
/* 		<th>{L_EXTENSION_INSTALL_HEADLINE}</th>*/
/* 	</tr>*/
/* 	<tr>*/
/* 		<td class="row3">{L_EXTENSION_INSTALL_EXPLAIN}</td>*/
/* 	</tr>*/
/* 	<tr>*/
/* 		<th>{L_EXTENSION_UPDATE_HEADLINE}</th>*/
/* 	</tr>*/
/* 	<tr>*/
/* 		<td class="row3">{L_EXTENSION_UPDATE_EXPLAIN}</td>*/
/* 	</tr>*/
/* 	<tr>*/
/* 		<th>{L_EXTENSION_REMOVE_HEADLINE}</th>*/
/* 	</tr>*/
/* 	<tr>*/
/* 		<td class="row3">{L_EXTENSION_REMOVE_EXPLAIN}</td>*/
/* 	</tr>*/
/* 	</tbody>*/
/* 	</table>*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
