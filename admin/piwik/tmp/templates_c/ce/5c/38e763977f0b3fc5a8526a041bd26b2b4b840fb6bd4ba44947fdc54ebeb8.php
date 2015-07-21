<?php

/* @Login/login.twig */
class __TwigTemplate_ce5c38e763977f0b3fc5a8526a041bd26b2b4b840fb6bd4ba44947fdc54ebeb8 extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if lt IE 9 ]>
<html class=\"old-ie\"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html><!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
\t<meta http-equiv=\"x-ua-compatible\" content=\"IE=EDGE,chrome=1\" >
    <title>";
        // line 9
        if (((isset($context["isCustomLogo"]) ? $context["isCustomLogo"] : $this->getContext($context, "isCustomLogo")) == false)) {
            echo "Piwik &rsaquo; ";
        }
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
        echo "</title>

    ";
        // line 11
        $this->env->loadTemplate("@CoreHome/_favicon.twig")->display($context);
        // line 12
        echo "    ";
        // line 13
        echo "    ";
        echo call_user_func_array($this->env->getFunction('includeAssets')->getCallable(), array(array("type" => "css")));
        echo "
    ";
        // line 15
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Login/stylesheets/login.css\"/>
    <meta name=\"description\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OpenSourceWebAnalytics")), "html", null, true);
        echo "\"/>
    <meta name=\"apple-itunes-app\" content=\"app-id=737216887\" />
    <meta name=\"google-play-app\" content=\"app-id=org.piwik.mobile2\">
    ";
        // line 19
        $this->env->loadTemplate("_jsCssIncludes.twig")->display($context);
        // line 20
        echo "    <script type=\"text/javascript\" src=\"libs/jquery/jquery.placeholder.js\"></script>
    <!--[if lt IE 9]>
    <script src=\"libs/html5shiv/html5shiv.js\"></script>
    <![endif]-->
    <script type=\"text/javascript\" src=\"libs/jquery/jquery.smartbanner.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"libs/jquery/stylesheets/jquery.smartbanner.css\" />

    <script type=\"text/javascript\">
        \$(function () {
            \$('#form_login').focus();
            \$('input').placeholder();
            \$.smartbanner({title: \"Piwik Mobile 2\", author: \"Piwik team\", icon: \"plugins/CoreHome/images/googleplay.png\"});
        });
\t</script>
\t</head>
\t<body id=\"loginPage\">
    ";
        // line 36
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.beforeTopBar", "login"));
        echo "
    ";
        // line 37
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.beforeContent", "login"));
        echo "

    ";
        // line 39
        $this->env->loadTemplate("_iframeBuster.twig")->display($context);
        // line 40
        echo "
    <div id=\"notificationContainer\">
    </div>

    <div id=\"logo\">
        ";
        // line 45
        if (((isset($context["isCustomLogo"]) ? $context["isCustomLogo"] : $this->getContext($context, "isCustomLogo")) == false)) {
            // line 46
            echo "            <a href=\"http://piwik.org\" title=\"";
            echo twig_escape_filter($this->env, (isset($context["linkTitle"]) ? $context["linkTitle"] : $this->getContext($context, "linkTitle")), "html", null, true);
            echo "\">
        ";
        }
        // line 48
        echo "        ";
        if ((isset($context["hasSVGLogo"]) ? $context["hasSVGLogo"] : $this->getContext($context, "hasSVGLogo"))) {
            // line 49
            echo "            <img src='";
            echo twig_escape_filter($this->env, (isset($context["logoSVG"]) ? $context["logoSVG"] : $this->getContext($context, "logoSVG")), "html", null, true);
            echo "' title=\"";
            echo twig_escape_filter($this->env, (isset($context["linkTitle"]) ? $context["linkTitle"] : $this->getContext($context, "linkTitle")), "html", null, true);
            echo "\" alt=\"Piwik\" class=\"ie-hide\"/>
            <!--[if lt IE 9]>
        ";
        }
        // line 52
        echo "        <img src='";
        echo twig_escape_filter($this->env, (isset($context["logoLarge"]) ? $context["logoLarge"] : $this->getContext($context, "logoLarge")), "html", null, true);
        echo "' title=\"";
        echo twig_escape_filter($this->env, (isset($context["linkTitle"]) ? $context["linkTitle"] : $this->getContext($context, "linkTitle")), "html", null, true);
        echo "\" alt=\"Piwik\" />
        ";
        // line 53
        if ((isset($context["hasSVGLogo"]) ? $context["hasSVGLogo"] : $this->getContext($context, "hasSVGLogo"))) {
            echo "<![endif]-->";
        }
        // line 54
        echo "
        ";
        // line 55
        if ((isset($context["isCustomLogo"]) ? $context["isCustomLogo"] : $this->getContext($context, "isCustomLogo"))) {
            // line 56
            echo "            ";
            ob_start();
            // line 57
            echo "            <i><a href=\"http://piwik.org/\" target=\"_blank\">";
            echo twig_escape_filter($this->env, (isset($context["linkTitle"]) ? $context["linkTitle"] : $this->getContext($context, "linkTitle")), "html", null, true);
            echo "</a></i>
            ";
            $context["poweredByPiwik"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 59
            echo "        ";
        }
        // line 60
        echo "
        ";
        // line 61
        if (((isset($context["isCustomLogo"]) ? $context["isCustomLogo"] : $this->getContext($context, "isCustomLogo")) == false)) {
            // line 62
            echo "            </a>
            <div class=\"description\">
                <a href=\"http://piwik.org\" title=\"";
            // line 64
            echo twig_escape_filter($this->env, (isset($context["linkTitle"]) ? $context["linkTitle"] : $this->getContext($context, "linkTitle")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["linkTitle"]) ? $context["linkTitle"] : $this->getContext($context, "linkTitle")), "html", null, true);
            echo "</a>
                <div class=\"arrow\"></div>
            </div>
        ";
        }
        // line 68
        echo "    </div>

    <section class=\"loginSection\">

        ";
        // line 73
        echo "        ";
        if (((array_key_exists("isValidHost", $context) && array_key_exists("invalidHostMessage", $context)) && ((isset($context["isValidHost"]) ? $context["isValidHost"] : $this->getContext($context, "isValidHost")) == false))) {
            // line 74
            echo "            ";
            $this->env->loadTemplate("@CoreHome/_warningInvalidHost.twig")->display($context);
            // line 75
            echo "        ";
        } else {
            // line 76
            echo "            <div id=\"message_container\">
                ";
            // line 77
            if ($this->getAttribute((isset($context["form_data"]) ? $context["form_data"] : $this->getContext($context, "form_data")), "errors")) {
                // line 78
                echo "                    <div class=\"message_error\">
                        ";
                // line 79
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form_data"]) ? $context["form_data"] : $this->getContext($context, "form_data")), "errors"));
                foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                    // line 80
                    echo "                            <strong>";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Error")), "html", null, true);
                    echo "</strong>: ";
                    echo (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"));
                    echo "<br/>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "                    </div>
                ";
            }
            // line 84
            echo "
                ";
            // line 85
            if ((isset($context["AccessErrorString"]) ? $context["AccessErrorString"] : $this->getContext($context, "AccessErrorString"))) {
                // line 86
                echo "                    <div class=\"message_error\">
                        <strong>";
                // line 87
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Error")), "html", null, true);
                echo "</strong>: ";
                echo (isset($context["AccessErrorString"]) ? $context["AccessErrorString"] : $this->getContext($context, "AccessErrorString"));
                echo "<br/>
                    </div>
                ";
            }
            // line 90
            echo "
                ";
            // line 91
            if ((isset($context["infoMessage"]) ? $context["infoMessage"] : $this->getContext($context, "infoMessage"))) {
                // line 92
                echo "                    <p class=\"message\">";
                echo (isset($context["infoMessage"]) ? $context["infoMessage"] : $this->getContext($context, "infoMessage"));
                echo "</p>
                ";
            }
            // line 94
            echo "            </div>
            <form ";
            // line 95
            echo $this->getAttribute((isset($context["form_data"]) ? $context["form_data"] : $this->getContext($context, "form_data")), "attributes");
            echo ">
                <h1>";
            // line 96
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
            echo "</h1>
                <fieldset class=\"inputs\">
                    <input type=\"text\" name=\"form_login\" id=\"login_form_login\" class=\"input\" value=\"\" size=\"20\"
                           tabindex=\"10\"
                           placeholder=\"";
            // line 100
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Username")), "html", null, true);
            echo "\" autofocus=\"autofocus\"/>
                    <input type=\"password\" name=\"form_password\" id=\"login_form_password\" class=\"input\" value=\"\" size=\"20\"
                           tabindex=\"20\"
                           placeholder=\"";
            // line 103
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Password")), "html", null, true);
            echo "\"/>
                    <input type=\"hidden\" name=\"form_nonce\" id=\"login_form_nonce\" value=\"";
            // line 104
            echo twig_escape_filter($this->env, (isset($context["nonce"]) ? $context["nonce"] : $this->getContext($context, "nonce")), "html", null, true);
            echo "\"/>
                </fieldset>

                <fieldset class=\"actions\">
                    <input name=\"form_rememberme\" type=\"checkbox\" id=\"login_form_rememberme\" value=\"1\" tabindex=\"90\"
                           ";
            // line 109
            if ($this->getAttribute($this->getAttribute((isset($context["form_data"]) ? $context["form_data"] : $this->getContext($context, "form_data")), "form_rememberme"), "value")) {
                echo "checked=\"checked\" ";
            }
            echo "/>
                    <label for=\"login_form_rememberme\">";
            // line 110
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_RememberMe")), "html", null, true);
            echo "</label>
                    <input class=\"submit\" id='login_form_submit' type=\"submit\" value=\"";
            // line 111
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
            echo "\"
                           tabindex=\"100\"/>
                </fieldset>
            </form>
            <form id=\"reset_form\" style=\"display:none;\">
                <fieldset class=\"inputs\">
                    <input type=\"text\" name=\"form_login\" id=\"reset_form_login\" class=\"input\" value=\"\" size=\"20\"
                           tabindex=\"10\"
                           placeholder=\"";
            // line 119
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LoginOrEmail")), "html", null, true);
            echo "\"/>
                    <input type=\"hidden\" name=\"form_nonce\" id=\"reset_form_nonce\" value=\"";
            // line 120
            echo twig_escape_filter($this->env, (isset($context["nonce"]) ? $context["nonce"] : $this->getContext($context, "nonce")), "html", null, true);
            echo "\"/>

                    <input type=\"password\" name=\"form_password\" id=\"reset_form_password\" class=\"input\" value=\"\" size=\"20\"
                           tabindex=\"20\" autocomplete=\"off\"
                           placeholder=\"";
            // line 124
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Password")), "html", null, true);
            echo "\"/>

                    <input type=\"password\" name=\"form_password_bis\" id=\"reset_form_password_bis\" class=\"input\" value=\"\"
                           size=\"20\" tabindex=\"30\" autocomplete=\"off\"
                           placeholder=\"";
            // line 128
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_PasswordRepeat")), "html", null, true);
            echo "\"/>
                </fieldset>

                <fieldset class=\"actions\">
                    <span class=\"loadingPiwik\" style=\"display:none;\">
                        <img alt=\"Loading\" src=\"plugins/Morpheus/images/loading-blue.gif\"/>
                    </span>
                    <input class=\"submit\" id='reset_form_submit' type=\"submit\"
                           value=\"";
            // line 136
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ChangePassword")), "html", null, true);
            echo "\" tabindex=\"100\"/>
                </fieldset>

                <input type=\"hidden\" name=\"module\" value=\"";
            // line 139
            echo twig_escape_filter($this->env, (isset($context["loginModule"]) ? $context["loginModule"] : $this->getContext($context, "loginModule")), "html", null, true);
            echo "\"/>
                <input type=\"hidden\" name=\"action\" value=\"resetPassword\"/>
            </form>
            <p id=\"nav\">
                <a id=\"login_form_nav\" href=\"#\"
                   title=\"";
            // line 144
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LostYourPassword")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LostYourPassword")), "html", null, true);
            echo "</a>
                <a id=\"alternate_reset_nav\" href=\"#\" style=\"display:none;\"
                   title=\"";
            // line 146
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
            echo "</a>
                <a id=\"reset_form_nav\" href=\"#\" style=\"display:none;\"
                   title=\"";
            // line 148
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Mobile_NavigationBack")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Cancel")), "html", null, true);
            echo "</a>
            </p>
            ";
            // line 150
            if (array_key_exists("poweredByPiwik", $context)) {
                // line 151
                echo "                <p id=\"piwik\">
                    ";
                // line 152
                echo twig_escape_filter($this->env, (isset($context["poweredByPiwik"]) ? $context["poweredByPiwik"] : $this->getContext($context, "poweredByPiwik")), "html", null, true);
                echo "
                </p>
            ";
            }
            // line 155
            echo "            <div id=\"lost_password_instructions\" style=\"display:none;\">
                <p class=\"message\">";
            // line 156
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_ResetPasswordInstructions")), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        // line 159
        echo "    </section>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "@Login/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 159,  359 => 156,  356 => 155,  350 => 152,  347 => 151,  345 => 150,  338 => 148,  331 => 146,  324 => 144,  316 => 139,  310 => 136,  299 => 128,  292 => 124,  285 => 120,  281 => 119,  270 => 111,  266 => 110,  260 => 109,  252 => 104,  248 => 103,  242 => 100,  235 => 96,  231 => 95,  228 => 94,  222 => 92,  220 => 91,  217 => 90,  209 => 87,  206 => 86,  204 => 85,  201 => 84,  197 => 82,  186 => 80,  182 => 79,  179 => 78,  177 => 77,  174 => 76,  171 => 75,  168 => 74,  165 => 73,  159 => 68,  150 => 64,  146 => 62,  144 => 61,  141 => 60,  138 => 59,  132 => 57,  129 => 56,  127 => 55,  124 => 54,  120 => 53,  113 => 52,  104 => 49,  101 => 48,  95 => 46,  93 => 45,  86 => 40,  84 => 39,  79 => 37,  75 => 36,  57 => 20,  55 => 19,  49 => 16,  46 => 15,  41 => 13,  39 => 12,  37 => 11,  29 => 9,  19 => 1,);
    }
}
