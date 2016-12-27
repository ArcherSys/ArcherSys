<?php

/* timezone_option.html */
class __TwigTemplate_c532984faefdfaa4e088bc8316fd29ab24bbe706ef2d94232ba4a62ab72db27a extends Twig_Template
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
        echo "<dl>
\t<dt><label for=\"timezone\">";
        // line 2
        echo $this->env->getExtension('phpbb')->lang("BOARD_TIMEZONE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t";
        // line 3
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "timezone_date", array()))) {
            // line 4
            echo "\t<dd id=\"tz_select_date\" style=\"display: none;\">
\t\t<select name=\"tz_date\" id=\"tz_date\" class=\"autowidth tz_select\">
\t\t\t<option value=\"\">";
            // line 6
            echo $this->env->getExtension('phpbb')->lang("SELECT_CURRENT_TIME");
            echo "</option>
\t\t\t";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "timezone_date", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["timezone_date"]) {
                // line 8
                echo "\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["timezone_date"], "VALUE", array());
                echo "\"";
                if ($this->getAttribute($context["timezone_date"], "SELECTED", array())) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo $this->getAttribute($context["timezone_date"], "TITLE", array());
                echo "</option>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone_date'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "\t\t</select>
\t\t<input type=\"button\" id=\"tz_select_date_suggest\" class=\"button2\" style=\"display: none;\" timezone-preselect=\"";
            // line 11
            if ((isset($context["S_TZ_PRESELECT"]) ? $context["S_TZ_PRESELECT"] : null)) {
                echo "true";
            } else {
                echo "false";
            }
            echo "\" data-l-suggestion=\"";
            echo $this->env->getExtension('phpbb')->lang("TIMEZONE_DATE_SUGGESTION");
            echo "\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("TIMEZONE_DATE_SUGGESTION");
            echo "\" />
\t</dd>
\t";
        }
        // line 14
        echo "\t<dd>
\t\t<select name=\"tz\" id=\"timezone\" class=\"autowidth tz_select\">
\t\t\t<option value=\"\">";
        // line 16
        echo $this->env->getExtension('phpbb')->lang("SELECT_TIMEZONE");
        echo "</option>
\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "timezone_select", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone_select"]) {
            // line 18
            echo "\t\t\t<optgroup label=\"";
            echo $this->getAttribute($context["timezone_select"], "LABEL", array());
            echo "\" data-tz-value=\"";
            echo $this->getAttribute($context["timezone_select"], "VALUE", array());
            echo "\">
\t\t\t\t";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["timezone_select"], "timezone_options", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["timezone_options"]) {
                // line 20
                echo "\t\t\t\t<option title=\"";
                echo $this->getAttribute($context["timezone_options"], "TITLE", array());
                echo "\" value=\"";
                echo $this->getAttribute($context["timezone_options"], "VALUE", array());
                echo "\"";
                if ($this->getAttribute($context["timezone_options"], "SELECTED", array())) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo $this->getAttribute($context["timezone_options"], "LABEL", array());
                echo "</option>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone_options'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t\t\t</optgroup>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timezone_select'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t</select>

\t\t";
        // line 26
        $asset_file = "timezone.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('4');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 27
        echo "\t</dd>
</dl>
";
    }

    public function getTemplateName()
    {
        return "timezone_option.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 27,  124 => 26,  120 => 24,  113 => 22,  96 => 20,  92 => 19,  85 => 18,  81 => 17,  77 => 16,  73 => 14,  59 => 11,  56 => 10,  41 => 8,  37 => 7,  33 => 6,  29 => 4,  27 => 3,  22 => 2,  19 => 1,);
    }
}
/* <dl>*/
/* 	<dt><label for="timezone">{L_BOARD_TIMEZONE}{L_COLON}</label></dt>*/
/* 	<!-- IF .timezone_date -->*/
/* 	<dd id="tz_select_date" style="display: none;">*/
/* 		<select name="tz_date" id="tz_date" class="autowidth tz_select">*/
/* 			<option value="">{L_SELECT_CURRENT_TIME}</option>*/
/* 			<!-- BEGIN timezone_date -->*/
/* 				<option value="{timezone_date.VALUE}"<!-- IF timezone_date.SELECTED --> selected="selected"<!-- ENDIF -->>{timezone_date.TITLE}</option>*/
/* 			<!-- END timezone_date -->*/
/* 		</select>*/
/* 		<input type="button" id="tz_select_date_suggest" class="button2" style="display: none;" timezone-preselect="<!-- IF S_TZ_PRESELECT -->true<!-- ELSE -->false<!-- ENDIF -->" data-l-suggestion="{L_TIMEZONE_DATE_SUGGESTION}" value="{L_TIMEZONE_DATE_SUGGESTION}" />*/
/* 	</dd>*/
/* 	<!-- ENDIF -->*/
/* 	<dd>*/
/* 		<select name="tz" id="timezone" class="autowidth tz_select">*/
/* 			<option value="">{L_SELECT_TIMEZONE}</option>*/
/* 			<!-- BEGIN timezone_select -->*/
/* 			<optgroup label="{timezone_select.LABEL}" data-tz-value="{timezone_select.VALUE}">*/
/* 				<!-- BEGIN timezone_options -->*/
/* 				<option title="{timezone_select.timezone_options.TITLE}" value="{timezone_select.timezone_options.VALUE}"<!-- IF timezone_select.timezone_options.SELECTED --> selected="selected"<!-- ENDIF -->>{timezone_select.timezone_options.LABEL}</option>*/
/* 				<!-- END timezone_options -->*/
/* 			</optgroup>*/
/* 			<!-- END timezone_select -->*/
/* 		</select>*/
/* */
/* 		<!-- INCLUDEJS timezone.js -->*/
/* 	</dd>*/
/* </dl>*/
/* */
