<?php

/* login_body.html */
class __TwigTemplate_6702ade0e78a4ea99ecc01022f9dd071cd6915dc9eb3d1717f8e4deb1596f8e7 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "login_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form action=\"";
        // line 3
        echo (isset($context["S_LOGIN_ACTION"]) ? $context["S_LOGIN_ACTION"] : null);
        echo "\" method=\"post\" id=\"login\" data-focus=\"";
        if ((isset($context["S_ADMIN_AUTH"]) ? $context["S_ADMIN_AUTH"] : null)) {
            echo (isset($context["PASSWORD_CREDENTIAL"]) ? $context["PASSWORD_CREDENTIAL"] : null);
        } else {
            echo (isset($context["USERNAME_CREDENTIAL"]) ? $context["USERNAME_CREDENTIAL"] : null);
        }
        echo "\">
<div class=\"panel\">
\t<div class=\"inner\">

\t<div class=\"content\">
\t\t<h2 class=\"login-title\">";
        // line 8
        if ((isset($context["LOGIN_EXPLAIN"]) ? $context["LOGIN_EXPLAIN"] : null)) {
            echo (isset($context["LOGIN_EXPLAIN"]) ? $context["LOGIN_EXPLAIN"] : null);
        } else {
            echo $this->env->getExtension('phpbb')->lang("LOGIN");
        }
        echo "</h2>

\t\t<fieldset ";
        // line 10
        if ( !(isset($context["S_CONFIRM_CODE"]) ? $context["S_CONFIRM_CODE"] : null)) {
            echo "class=\"fields1\"";
        } else {
            echo "class=\"fields2\"";
        }
        echo ">
\t\t";
        // line 11
        if ((isset($context["LOGIN_ERROR"]) ? $context["LOGIN_ERROR"] : null)) {
            echo "<div class=\"error\">";
            echo (isset($context["LOGIN_ERROR"]) ? $context["LOGIN_ERROR"] : null);
            echo "</div>";
        }
        // line 12
        echo "\t\t<dl>
\t\t\t<dt><label for=\"";
        // line 13
        echo (isset($context["USERNAME_CREDENTIAL"]) ? $context["USERNAME_CREDENTIAL"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"";
        // line 14
        echo (isset($context["USERNAME_CREDENTIAL"]) ? $context["USERNAME_CREDENTIAL"] : null);
        echo "\" id=\"";
        echo (isset($context["USERNAME_CREDENTIAL"]) ? $context["USERNAME_CREDENTIAL"] : null);
        echo "\" size=\"25\" value=\"";
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "\" class=\"inputbox autowidth\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"";
        // line 17
        echo (isset($context["PASSWORD_CREDENTIAL"]) ? $context["PASSWORD_CREDENTIAL"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("PASSWORD");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t\t<dd><input type=\"password\" tabindex=\"2\" id=\"";
        // line 18
        echo (isset($context["PASSWORD_CREDENTIAL"]) ? $context["PASSWORD_CREDENTIAL"] : null);
        echo "\" name=\"";
        echo (isset($context["PASSWORD_CREDENTIAL"]) ? $context["PASSWORD_CREDENTIAL"] : null);
        echo "\" size=\"25\" class=\"inputbox autowidth\" autocomplete=\"off\" /></dd>
\t\t\t";
        // line 19
        if (((isset($context["S_DISPLAY_FULL_LOGIN"]) ? $context["S_DISPLAY_FULL_LOGIN"] : null) && ((isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null) || (isset($context["U_RESEND_ACTIVATION"]) ? $context["U_RESEND_ACTIVATION"] : null)))) {
            // line 20
            echo "\t\t\t\t";
            if ((isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null)) {
                echo "<dd><a href=\"";
                echo (isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FORGOT_PASS");
                echo "</a></dd>";
            }
            // line 21
            echo "\t\t\t\t";
            if ((isset($context["U_RESEND_ACTIVATION"]) ? $context["U_RESEND_ACTIVATION"] : null)) {
                echo "<dd><a href=\"";
                echo (isset($context["U_RESEND_ACTIVATION"]) ? $context["U_RESEND_ACTIVATION"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("RESEND_ACTIVATION");
                echo "</a></dd>";
            }
            // line 22
            echo "\t\t\t";
        }
        // line 23
        echo "\t\t</dl>
\t\t";
        // line 24
        if (((isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null) && (isset($context["S_CONFIRM_CODE"]) ? $context["S_CONFIRM_CODE"] : null))) {
            // line 25
            echo "\t\t\t";
            $value = 3;
            $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
            // line 26
            echo "\t\t\t";
            $location = (("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . ""), "login_body.html", 26)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 27
            echo "\t\t";
        }
        // line 28
        echo "\t\t";
        if ((isset($context["S_DISPLAY_FULL_LOGIN"]) ? $context["S_DISPLAY_FULL_LOGIN"] : null)) {
            // line 29
            echo "\t\t<dl>
\t\t\t";
            // line 30
            if ((isset($context["S_AUTOLOGIN_ENABLED"]) ? $context["S_AUTOLOGIN_ENABLED"] : null)) {
                echo "<dd><label for=\"autologin\"><input type=\"checkbox\" name=\"autologin\" id=\"autologin\" tabindex=\"4\" /> ";
                echo $this->env->getExtension('phpbb')->lang("LOG_ME_IN");
                echo "</label></dd>";
            }
            // line 31
            echo "\t\t\t<dd><label for=\"viewonline\"><input type=\"checkbox\" name=\"viewonline\" id=\"viewonline\" tabindex=\"5\" /> ";
            echo $this->env->getExtension('phpbb')->lang("HIDE_ME");
            echo "</label></dd>
\t\t</dl>
\t\t";
        }
        // line 34
        echo "
\t\t";
        // line 35
        echo (isset($context["S_LOGIN_REDIRECT"]) ? $context["S_LOGIN_REDIRECT"] : null);
        echo "
\t\t<dl>
\t\t\t<dt>&nbsp;</dt>
\t\t\t<dd>";
        // line 38
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "<input type=\"submit\" name=\"login\" tabindex=\"6\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("LOGIN");
        echo "\" class=\"button1\" /></dd>
\t\t</dl>
\t\t</fieldset>
\t</div>

\t";
        // line 43
        if (( !(isset($context["S_ADMIN_AUTH"]) ? $context["S_ADMIN_AUTH"] : null) && (isset($context["PROVIDER_TEMPLATE_FILE"]) ? $context["PROVIDER_TEMPLATE_FILE"] : null))) {
            // line 44
            echo "\t\t";
            $location = (("" . (isset($context["PROVIDER_TEMPLATE_FILE"]) ? $context["PROVIDER_TEMPLATE_FILE"] : null)) . "");
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate((("" . (isset($context["PROVIDER_TEMPLATE_FILE"]) ? $context["PROVIDER_TEMPLATE_FILE"] : null)) . ""), "login_body.html", 44)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 45
            echo "\t";
        }
        // line 46
        echo "\t</div>
</div>


";
        // line 50
        if (( !(isset($context["S_ADMIN_AUTH"]) ? $context["S_ADMIN_AUTH"] : null) && (isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null))) {
            // line 51
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<div class=\"content\">
\t\t\t<h3>";
            // line 55
            echo $this->env->getExtension('phpbb')->lang("REGISTER");
            echo "</h3>
\t\t\t<p>";
            // line 56
            echo $this->env->getExtension('phpbb')->lang("LOGIN_INFO");
            echo "</p>
\t\t\t<p><strong><a href=\"";
            // line 57
            echo (isset($context["U_TERMS_USE"]) ? $context["U_TERMS_USE"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("TERMS_USE");
            echo "</a> | <a href=\"";
            echo (isset($context["U_PRIVACY"]) ? $context["U_PRIVACY"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("PRIVACY");
            echo "</a></strong></p>
\t\t\t<hr class=\"dashed\" />
\t\t\t<p><a href=\"";
            // line 59
            echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
            echo "\" class=\"button2\">";
            echo $this->env->getExtension('phpbb')->lang("REGISTER");
            echo "</a></p>
\t\t</div>

\t\t</div>
\t</div>
";
        }
        // line 65
        echo "
</form>

";
        // line 68
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "login_body.html", 68)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "login_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 68,  252 => 65,  241 => 59,  230 => 57,  226 => 56,  222 => 55,  216 => 51,  214 => 50,  208 => 46,  205 => 45,  192 => 44,  190 => 43,  180 => 38,  174 => 35,  171 => 34,  164 => 31,  158 => 30,  155 => 29,  152 => 28,  149 => 27,  136 => 26,  132 => 25,  130 => 24,  127 => 23,  124 => 22,  115 => 21,  106 => 20,  104 => 19,  98 => 18,  91 => 17,  81 => 14,  74 => 13,  71 => 12,  65 => 11,  57 => 10,  48 => 8,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <form action="{S_LOGIN_ACTION}" method="post" id="login" data-focus="<!-- IF S_ADMIN_AUTH -->{PASSWORD_CREDENTIAL}<!-- ELSE -->{USERNAME_CREDENTIAL}<!-- ENDIF -->">*/
/* <div class="panel">*/
/* 	<div class="inner">*/
/* */
/* 	<div class="content">*/
/* 		<h2 class="login-title"><!-- IF LOGIN_EXPLAIN -->{LOGIN_EXPLAIN}<!-- ELSE -->{L_LOGIN}<!-- ENDIF --></h2>*/
/* */
/* 		<fieldset <!-- IF not S_CONFIRM_CODE -->class="fields1"<!-- ELSE -->class="fields2"<!-- ENDIF -->>*/
/* 		<!-- IF LOGIN_ERROR --><div class="error">{LOGIN_ERROR}</div><!-- ENDIF -->*/
/* 		<dl>*/
/* 			<dt><label for="{USERNAME_CREDENTIAL}">{L_USERNAME}{L_COLON}</label></dt>*/
/* 			<dd><input type="text" tabindex="1" name="{USERNAME_CREDENTIAL}" id="{USERNAME_CREDENTIAL}" size="25" value="{USERNAME}" class="inputbox autowidth" /></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="{PASSWORD_CREDENTIAL}">{L_PASSWORD}{L_COLON}</label></dt>*/
/* 			<dd><input type="password" tabindex="2" id="{PASSWORD_CREDENTIAL}" name="{PASSWORD_CREDENTIAL}" size="25" class="inputbox autowidth" autocomplete="off" /></dd>*/
/* 			<!-- IF S_DISPLAY_FULL_LOGIN and (U_SEND_PASSWORD or U_RESEND_ACTIVATION) -->*/
/* 				<!-- IF U_SEND_PASSWORD --><dd><a href="{U_SEND_PASSWORD}">{L_FORGOT_PASS}</a></dd><!-- ENDIF -->*/
/* 				<!-- IF U_RESEND_ACTIVATION --><dd><a href="{U_RESEND_ACTIVATION}">{L_RESEND_ACTIVATION}</a></dd><!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* 		</dl>*/
/* 		<!-- IF CAPTCHA_TEMPLATE and S_CONFIRM_CODE -->*/
/* 			<!-- DEFINE $CAPTCHA_TAB_INDEX = 3 -->*/
/* 			<!-- INCLUDE {CAPTCHA_TEMPLATE} -->*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF S_DISPLAY_FULL_LOGIN -->*/
/* 		<dl>*/
/* 			<!-- IF S_AUTOLOGIN_ENABLED --><dd><label for="autologin"><input type="checkbox" name="autologin" id="autologin" tabindex="4" /> {L_LOG_ME_IN}</label></dd><!-- ENDIF -->*/
/* 			<dd><label for="viewonline"><input type="checkbox" name="viewonline" id="viewonline" tabindex="5" /> {L_HIDE_ME}</label></dd>*/
/* 		</dl>*/
/* 		<!-- ENDIF -->*/
/* */
/* 		{S_LOGIN_REDIRECT}*/
/* 		<dl>*/
/* 			<dt>&nbsp;</dt>*/
/* 			<dd>{S_HIDDEN_FIELDS}<input type="submit" name="login" tabindex="6" value="{L_LOGIN}" class="button1" /></dd>*/
/* 		</dl>*/
/* 		</fieldset>*/
/* 	</div>*/
/* */
/* 	<!-- IF not S_ADMIN_AUTH and PROVIDER_TEMPLATE_FILE -->*/
/* 		<!-- INCLUDE {PROVIDER_TEMPLATE_FILE} -->*/
/* 	<!-- ENDIF -->*/
/* 	</div>*/
/* </div>*/
/* */
/* */
/* <!-- IF not S_ADMIN_AUTH and S_REGISTER_ENABLED -->*/
/* 	<div class="panel">*/
/* 		<div class="inner">*/
/* */
/* 		<div class="content">*/
/* 			<h3>{L_REGISTER}</h3>*/
/* 			<p>{L_LOGIN_INFO}</p>*/
/* 			<p><strong><a href="{U_TERMS_USE}">{L_TERMS_USE}</a> | <a href="{U_PRIVACY}">{L_PRIVACY}</a></strong></p>*/
/* 			<hr class="dashed" />*/
/* 			<p><a href="{U_REGISTER}" class="button2">{L_REGISTER}</a></p>*/
/* 		</div>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* <!-- ENDIF -->*/
/* */
/* </form>*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
