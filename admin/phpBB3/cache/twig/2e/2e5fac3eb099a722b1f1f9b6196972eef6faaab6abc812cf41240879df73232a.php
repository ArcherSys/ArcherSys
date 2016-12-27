<?php

/* ucp_profile_signature.html */
class __TwigTemplate_f5321edb393c3eab7956e0494324f8423810b2ce6524ad62d7183e36a1419f57 extends Twig_Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_profile_signature.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"postform\" method=\"post\" action=\"";
        // line 3
        echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
        echo "\"";
        echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
        echo ">

<h2>";
        // line 5
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        echo "</h2>

";
        // line 7
        if (((isset($context["SIGNATURE_PREVIEW"]) ? $context["SIGNATURE_PREVIEW"] : null) != "")) {
            // line 8
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<h3>";
            // line 10
            echo $this->env->getExtension('phpbb')->lang("SIGNATURE_PREVIEW");
            echo "</h3>
\t\t<div class=\"postbody\">
\t\t\t<div class=\"signature standalone\">";
            // line 12
            echo (isset($context["SIGNATURE_PREVIEW"]) ? $context["SIGNATURE_PREVIEW"] : null);
            echo "</div>
\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 17
        echo "
<div class=\"panel\">
\t<div class=\"inner\">

\t<p>";
        // line 21
        echo $this->env->getExtension('phpbb')->lang("SIGNATURE_EXPLAIN");
        echo "</p>

\t";
        // line 23
        $value = 1;
        $context['definition']->set('SIG_EDIT', $value);
        // line 24
        echo "\t";
        $location = "posting_editor.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("posting_editor.html", "ucp_profile_signature.html", 24)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 25
        echo "\t<h3>";
        echo $this->env->getExtension('phpbb')->lang("OPTIONS");
        echo "</h3>
\t<fieldset>
\t\t";
        // line 27
        if ((isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null)) {
            // line 28
            echo "\t\t\t<div><label for=\"disable_bbcode\"><input type=\"checkbox\" name=\"disable_bbcode\" id=\"disable_bbcode\"";
            echo (isset($context["S_BBCODE_CHECKED"]) ? $context["S_BBCODE_CHECKED"] : null);
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("DISABLE_BBCODE");
            echo "</label></div>
\t\t";
        }
        // line 30
        echo "\t\t";
        if ((isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null)) {
            // line 31
            echo "\t\t\t<div><label for=\"disable_smilies\"><input type=\"checkbox\" name=\"disable_smilies\" id=\"disable_smilies\"";
            echo (isset($context["S_SMILIES_CHECKED"]) ? $context["S_SMILIES_CHECKED"] : null);
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("DISABLE_SMILIES");
            echo "</label></div>
\t\t";
        }
        // line 33
        echo "\t\t";
        if ((isset($context["S_LINKS_ALLOWED"]) ? $context["S_LINKS_ALLOWED"] : null)) {
            // line 34
            echo "\t\t\t<div><label for=\"disable_magic_url\"><input type=\"checkbox\" name=\"disable_magic_url\" id=\"disable_magic_url\"";
            echo (isset($context["S_MAGIC_URL_CHECKED"]) ? $context["S_MAGIC_URL_CHECKED"] : null);
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("DISABLE_MAGIC_URL");
            echo "</label></div>
\t\t";
        }
        // line 36
        echo "
\t</fieldset>

\t</div>
</div>

<fieldset class=\"submit-buttons\">
\t";
        // line 43
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "
\t<input type=\"reset\" name=\"reset\" value=\"";
        // line 44
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" class=\"button2\" />&nbsp;
\t<input type=\"submit\" name=\"preview\" value=\"";
        // line 45
        echo $this->env->getExtension('phpbb')->lang("PREVIEW");
        echo "\" class=\"button2\" />&nbsp;
\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 46
        echo $this->env->getExtension('phpbb')->lang("SUBMIT");
        echo "\" class=\"button1\" />
\t";
        // line 47
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</fieldset>
</form>

";
        // line 51
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_profile_signature.html", 51)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_profile_signature.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 51,  155 => 47,  151 => 46,  147 => 45,  143 => 44,  139 => 43,  130 => 36,  122 => 34,  119 => 33,  111 => 31,  108 => 30,  100 => 28,  98 => 27,  92 => 25,  79 => 24,  76 => 23,  71 => 21,  65 => 17,  57 => 12,  52 => 10,  48 => 8,  46 => 7,  41 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE ucp_header.html -->*/
/* */
/* <form id="postform" method="post" action="{S_UCP_ACTION}"{S_FORM_ENCTYPE}>*/
/* */
/* <h2>{L_TITLE}</h2>*/
/* */
/* <!-- IF SIGNATURE_PREVIEW != '' -->*/
/* 	<div class="panel">*/
/* 		<div class="inner">*/
/* 		<h3>{L_SIGNATURE_PREVIEW}</h3>*/
/* 		<div class="postbody">*/
/* 			<div class="signature standalone">{SIGNATURE_PREVIEW}</div>*/
/* 		</div>*/
/* 		</div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* <div class="panel">*/
/* 	<div class="inner">*/
/* */
/* 	<p>{L_SIGNATURE_EXPLAIN}</p>*/
/* */
/* 	<!-- DEFINE $SIG_EDIT = 1 -->*/
/* 	<!-- INCLUDE posting_editor.html -->*/
/* 	<h3>{L_OPTIONS}</h3>*/
/* 	<fieldset>*/
/* 		<!-- IF S_BBCODE_ALLOWED -->*/
/* 			<div><label for="disable_bbcode"><input type="checkbox" name="disable_bbcode" id="disable_bbcode"{S_BBCODE_CHECKED} /> {L_DISABLE_BBCODE}</label></div>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF S_SMILIES_ALLOWED -->*/
/* 			<div><label for="disable_smilies"><input type="checkbox" name="disable_smilies" id="disable_smilies"{S_SMILIES_CHECKED} /> {L_DISABLE_SMILIES}</label></div>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF S_LINKS_ALLOWED -->*/
/* 			<div><label for="disable_magic_url"><input type="checkbox" name="disable_magic_url" id="disable_magic_url"{S_MAGIC_URL_CHECKED} /> {L_DISABLE_MAGIC_URL}</label></div>*/
/* 		<!-- ENDIF -->*/
/* */
/* 	</fieldset>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <fieldset class="submit-buttons">*/
/* 	{S_HIDDEN_FIELDS}*/
/* 	<input type="reset" name="reset" value="{L_RESET}" class="button2" />&nbsp;*/
/* 	<input type="submit" name="preview" value="{L_PREVIEW}" class="button2" />&nbsp;*/
/* 	<input type="submit" name="submit" value="{L_SUBMIT}" class="button1" />*/
/* 	{S_FORM_TOKEN}*/
/* </fieldset>*/
/* </form>*/
/* */
/* <!-- INCLUDE ucp_footer.html -->*/
/* */
