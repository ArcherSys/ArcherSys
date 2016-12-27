<?php

/* ucp_agreement.html */
class __TwigTemplate_d392573b89a36a7dd5a63096de9ce88dcf950a1f6544538d4d0b0628179c5047 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "ucp_agreement.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if (((isset($context["S_SHOW_COPPA"]) ? $context["S_SHOW_COPPA"] : null) || (isset($context["S_REGISTRATION"]) ? $context["S_REGISTRATION"] : null))) {
            // line 4
            echo "
";
            // line 5
            if ((isset($context["S_LANG_OPTIONS"]) ? $context["S_LANG_OPTIONS"] : null)) {
                // line 6
                echo "<script type=\"text/javascript\">
// <![CDATA[
\t/**
\t* Change language
\t*/
\tfunction change_language(lang_iso)
\t{
\t\tdocument.cookie = '";
                // line 13
                echo (isset($context["COOKIE_NAME"]) ? $context["COOKIE_NAME"] : null);
                echo "_lang=' + lang_iso + '; path=";
                echo (isset($context["COOKIE_PATH"]) ? $context["COOKIE_PATH"] : null);
                echo "';
\t\tdocument.forms['register'].change_lang.value = lang_iso;
\t\tdocument.forms['register'].submit();
\t}

// ]]>
</script>

\t<form method=\"post\" action=\"";
                // line 21
                echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
                echo "\" id=\"register\">
\t\t<p class=\"rightside\">
\t\t\t<label for=\"lang\">";
                // line 23
                echo $this->env->getExtension('phpbb')->lang("LANGUAGE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><select name=\"lang\" id=\"lang\" onchange=\"change_language(this.value); return false;\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("LANGUAGE");
                echo "\">";
                echo (isset($context["S_LANG_OPTIONS"]) ? $context["S_LANG_OPTIONS"] : null);
                echo "</select>
\t\t\t";
                // line 24
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t</p>
\t</form>

\t<div class=\"clear\"></div>

";
            }
            // line 31
            echo "
\t<form method=\"post\" action=\"";
            // line 32
            echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
            echo "\" id=\"agreement\">

\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<div class=\"content\">
\t\t\t<h2 class=\"sitename-title\">";
            // line 37
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
            echo " - ";
            echo $this->env->getExtension('phpbb')->lang("REGISTRATION");
            echo "</h2>
\t\t\t";
            // line 38
            // line 39
            echo "\t\t\t<p>";
            if ((isset($context["S_SHOW_COPPA"]) ? $context["S_SHOW_COPPA"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("COPPA_BIRTHDAY");
            } else {
                echo $this->env->getExtension('phpbb')->lang("TERMS_OF_USE");
            }
            echo "</p>
\t\t\t";
            // line 40
            // line 41
            echo "\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<fieldset class=\"submit-buttons\">
\t\t\t";
            // line 48
            if ((isset($context["S_SHOW_COPPA"]) ? $context["S_SHOW_COPPA"] : null)) {
                // line 49
                echo "\t\t\t<strong><a href=\"";
                echo (isset($context["U_COPPA_NO"]) ? $context["U_COPPA_NO"] : null);
                echo "\" class=\"button1\">";
                echo $this->env->getExtension('phpbb')->lang("COPPA_NO");
                echo "</a></strong>&nbsp; <a href=\"";
                echo (isset($context["U_COPPA_YES"]) ? $context["U_COPPA_YES"] : null);
                echo "\" class=\"button2\">";
                echo $this->env->getExtension('phpbb')->lang("COPPA_YES");
                echo "</a>
\t\t\t";
            } else {
                // line 51
                echo "\t\t\t<input type=\"submit\" name=\"agreed\" id=\"agreed\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("AGREE");
                echo "\" class=\"button1\" />&nbsp;
\t\t\t<input type=\"submit\" name=\"not_agreed\" value=\"";
                // line 52
                echo $this->env->getExtension('phpbb')->lang("NOT_AGREE");
                echo "\" class=\"button2\" />
\t\t\t";
            }
            // line 54
            echo "\t\t\t";
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t\t\t";
            // line 55
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t</fieldset>
\t\t</div>
\t</div>
\t</form>

";
        } elseif (        // line 61
(isset($context["S_AGREEMENT"]) ? $context["S_AGREEMENT"] : null)) {
            // line 62
            echo "
\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<div class=\"content\">
\t\t\t<h2 class=\"sitename-title\">";
            // line 66
            echo (isset($context["SITENAME"]) ? $context["SITENAME"] : null);
            echo " - ";
            echo (isset($context["AGREEMENT_TITLE"]) ? $context["AGREEMENT_TITLE"] : null);
            echo "</h2>
\t\t\t<p>";
            // line 67
            echo (isset($context["AGREEMENT_TEXT"]) ? $context["AGREEMENT_TEXT"] : null);
            echo "</p>
\t\t\t<hr class=\"dashed\" />
\t\t\t<p><a href=\"";
            // line 69
            echo (isset($context["U_BACK"]) ? $context["U_BACK"] : null);
            echo "\" class=\"button2\">";
            echo $this->env->getExtension('phpbb')->lang("BACK");
            echo "</a></p>
\t\t</div>
\t\t</div>
\t</div>

";
        }
        // line 75
        echo "
";
        // line 76
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "ucp_agreement.html", 76)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_agreement.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 76,  192 => 75,  181 => 69,  176 => 67,  170 => 66,  164 => 62,  162 => 61,  153 => 55,  148 => 54,  143 => 52,  138 => 51,  126 => 49,  124 => 48,  115 => 41,  114 => 40,  105 => 39,  104 => 38,  98 => 37,  90 => 32,  87 => 31,  77 => 24,  68 => 23,  63 => 21,  50 => 13,  41 => 6,  39 => 5,  36 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <!-- IF S_SHOW_COPPA or S_REGISTRATION -->*/
/* */
/* <!-- IF S_LANG_OPTIONS -->*/
/* <script type="text/javascript">*/
/* // <![CDATA[*/
/* 	/***/
/* 	* Change language*/
/* 	*//* */
/* 	function change_language(lang_iso)*/
/* 	{*/
/* 		document.cookie = '{COOKIE_NAME}_lang=' + lang_iso + '; path={COOKIE_PATH}';*/
/* 		document.forms['register'].change_lang.value = lang_iso;*/
/* 		document.forms['register'].submit();*/
/* 	}*/
/* */
/* // ]]>*/
/* </script>*/
/* */
/* 	<form method="post" action="{S_UCP_ACTION}" id="register">*/
/* 		<p class="rightside">*/
/* 			<label for="lang">{L_LANGUAGE}{L_COLON}</label><select name="lang" id="lang" onchange="change_language(this.value); return false;" title="{L_LANGUAGE}">{S_LANG_OPTIONS}</select>*/
/* 			{S_HIDDEN_FIELDS}*/
/* 		</p>*/
/* 	</form>*/
/* */
/* 	<div class="clear"></div>*/
/* */
/* <!-- ENDIF -->*/
/* */
/* 	<form method="post" action="{S_UCP_ACTION}" id="agreement">*/
/* */
/* 	<div class="panel">*/
/* 		<div class="inner">*/
/* 		<div class="content">*/
/* 			<h2 class="sitename-title">{SITENAME} - {L_REGISTRATION}</h2>*/
/* 			<!-- EVENT ucp_agreement_terms_before -->*/
/* 			<p><!-- IF S_SHOW_COPPA -->{L_COPPA_BIRTHDAY}<!-- ELSE -->{L_TERMS_OF_USE}<!-- ENDIF --></p>*/
/* 			<!-- EVENT ucp_agreement_terms_after -->*/
/* 		</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="panel">*/
/* 		<div class="inner">*/
/* 		<fieldset class="submit-buttons">*/
/* 			<!-- IF S_SHOW_COPPA -->*/
/* 			<strong><a href="{U_COPPA_NO}" class="button1">{L_COPPA_NO}</a></strong>&nbsp; <a href="{U_COPPA_YES}" class="button2">{L_COPPA_YES}</a>*/
/* 			<!-- ELSE -->*/
/* 			<input type="submit" name="agreed" id="agreed" value="{L_AGREE}" class="button1" />&nbsp;*/
/* 			<input type="submit" name="not_agreed" value="{L_NOT_AGREE}" class="button2" />*/
/* 			<!-- ENDIF -->*/
/* 			{S_HIDDEN_FIELDS}*/
/* 			{S_FORM_TOKEN}*/
/* 		</fieldset>*/
/* 		</div>*/
/* 	</div>*/
/* 	</form>*/
/* */
/* <!-- ELSEIF S_AGREEMENT -->*/
/* */
/* 	<div class="panel">*/
/* 		<div class="inner">*/
/* 		<div class="content">*/
/* 			<h2 class="sitename-title">{SITENAME} - {AGREEMENT_TITLE}</h2>*/
/* 			<p>{AGREEMENT_TEXT}</p>*/
/* 			<hr class="dashed" />*/
/* 			<p><a href="{U_BACK}" class="button2">{L_BACK}</a></p>*/
/* 		</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* <!-- ENDIF -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
