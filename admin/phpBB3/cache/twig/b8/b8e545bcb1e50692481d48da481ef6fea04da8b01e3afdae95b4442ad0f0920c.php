<?php

/* captcha_default.html */
class __TwigTemplate_f4a8df3d8bd44a532cef9d4d13a8d0f54455f864fafb8582cc92ecee285bf0d5 extends Twig_Template
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
        if (((isset($context["S_TYPE"]) ? $context["S_TYPE"] : null) == 1)) {
            // line 2
            echo "<div class=\"panel captcha-panel\">
\t<div class=\"inner\">

\t<h3 class=\"captcha-title\">";
            // line 5
            echo $this->env->getExtension('phpbb')->lang("CONFIRMATION");
            echo "</h3>
\t<p>";
            // line 6
            echo $this->env->getExtension('phpbb')->lang("CONFIRM_EXPLAIN");
            echo "</p>

\t<fieldset class=\"fields2\">
";
        }
        // line 10
        echo "
\t<dl>
\t\t<dt><label for=\"confirm_code\">";
        // line 12
        echo $this->env->getExtension('phpbb')->lang("CONFIRM_CODE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd class=\"captcha captcha-image\"><img src=\"";
        // line 13
        echo (isset($context["CONFIRM_IMAGE_LINK"]) ? $context["CONFIRM_IMAGE_LINK"] : null);
        echo "\" alt=\"";
        echo $this->env->getExtension('phpbb')->lang("CONFIRM_CODE");
        echo "\" /></dd>
\t\t<dd><input type=\"text\" name=\"confirm_code\" id=\"confirm_code\" size=\"8\" maxlength=\"8\" tabindex=\"";
        // line 14
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "CAPTCHA_TAB_INDEX", array());
        echo "\" class=\"inputbox narrow\" title=\"";
        echo $this->env->getExtension('phpbb')->lang("CONFIRM_CODE");
        echo "\" />
\t\t";
        // line 15
        if ((isset($context["S_CONFIRM_REFRESH"]) ? $context["S_CONFIRM_REFRESH"] : null)) {
            echo "<input type=\"submit\" name=\"refresh_vc\" id=\"refresh_vc\" class=\"button2\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("VC_REFRESH");
            echo "\" />";
        }
        // line 16
        echo "\t\t<input type=\"hidden\" name=\"confirm_id\" id=\"confirm_id\" value=\"";
        echo (isset($context["CONFIRM_ID"]) ? $context["CONFIRM_ID"] : null);
        echo "\" /></dd>
\t\t<dd>";
        // line 17
        echo $this->env->getExtension('phpbb')->lang("CONFIRM_CODE_EXPLAIN");
        echo "</dd>
\t</dl>

";
        // line 20
        if (((isset($context["S_TYPE"]) ? $context["S_TYPE"] : null) == 1)) {
            // line 21
            echo "\t</fieldset>
\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "captcha_default.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 21,  75 => 20,  69 => 17,  64 => 16,  58 => 15,  52 => 14,  46 => 13,  41 => 12,  37 => 10,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_TYPE == 1 -->*/
/* <div class="panel captcha-panel">*/
/* 	<div class="inner">*/
/* */
/* 	<h3 class="captcha-title">{L_CONFIRMATION}</h3>*/
/* 	<p>{L_CONFIRM_EXPLAIN}</p>*/
/* */
/* 	<fieldset class="fields2">*/
/* <!-- ENDIF -->*/
/* */
/* 	<dl>*/
/* 		<dt><label for="confirm_code">{L_CONFIRM_CODE}{L_COLON}</label></dt>*/
/* 		<dd class="captcha captcha-image"><img src="{CONFIRM_IMAGE_LINK}" alt="{L_CONFIRM_CODE}" /></dd>*/
/* 		<dd><input type="text" name="confirm_code" id="confirm_code" size="8" maxlength="8" tabindex="{$CAPTCHA_TAB_INDEX}" class="inputbox narrow" title="{L_CONFIRM_CODE}" />*/
/* 		<!-- IF S_CONFIRM_REFRESH --><input type="submit" name="refresh_vc" id="refresh_vc" class="button2" value="{L_VC_REFRESH}" /><!-- ENDIF -->*/
/* 		<input type="hidden" name="confirm_id" id="confirm_id" value="{CONFIRM_ID}" /></dd>*/
/* 		<dd>{L_CONFIRM_CODE_EXPLAIN}</dd>*/
/* 	</dl>*/
/* */
/* <!-- IF S_TYPE == 1 -->*/
/* 	</fieldset>*/
/* 	</div>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* */
