<?php

/* @Installation/layout.twig */
class __TwigTemplate_a29c1d845ed220fbf792ea2c97687af42ede2e1767720b55d98ed0c6b493ff09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 9 ]>
<html class=\"old-ie\" id=\"ng-app\" ng-app=\"piwikApp\"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html id=\"ng-app\" ng-app=\"piwikApp\"><!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <title>Piwik &rsaquo; ";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Installation_Installation")), "html", null, true);
        echo "</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"libs/jquery/themes/base/jquery-ui.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"index.php?module=Installation&action=getBaseCss\"/>
    <link rel=\"shortcut icon\" href=\"plugins/CoreHome/images/favicon.ico\"/>
    <script type=\"text/javascript\" src=\"libs/jquery/jquery.js\"></script>
    <script type=\"text/javascript\" src=\"libs/jquery/jquery-ui.js\"></script>
    <script type=\"text/javascript\" src=\"libs/angularjs/angular.min.js\"></script>
    <script type=\"text/javascript\" src=\"libs/angularjs/angular-sanitize.min.js\"></script>
    <script type=\"text/javascript\" src=\"libs/angularjs/angular-animate.min.js\"></script>
    <script type=\"text/javascript\" src=\"libs/angularjs/angular-cookies.min.js\"></script>
    <script type=\"text/javascript\" src=\"plugins/CoreHome/angularjs/common/services/service.js\"></script>
    <script type=\"text/javascript\" src=\"plugins/CoreHome/angularjs/common/filters/filter.js\"></script>
    <script type=\"text/javascript\" src=\"plugins/CoreHome/angularjs/common/directives/directive.js\"></script>
    <script type=\"text/javascript\" src=\"plugins/CoreHome/angularjs/common/directives/focus-anywhere-but-here.js\"></script>
    <script type=\"text/javascript\" src=\"plugins/CoreHome/angularjs/piwikAppConfig.js\"></script>
    <script type=\"text/javascript\" src=\"plugins/CoreHome/angularjs/piwikApp.js\"></script>
    <script type=\"text/javascript\" src=\"plugins/Installation/javascripts/installation.js\"></script>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Installation/stylesheets/installation.css\"/>
    ";
        // line 27
        if ((call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_LayoutDirection")) == "rtl")) {
            // line 28
            echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Morpheus/stylesheets/rtl.css\"/>
    ";
        }
        // line 30
        echo "</head>
<body ng-app=\"app\">
<div id=\"installationPage\">
    <div id=\"content\">
        <div id=\"logo\">
            <img id=\"title\" src=\"plugins/Morpheus/images/logo.png\"/> &nbsp;&nbsp;&nbsp;<span
                    id=\"subtitle\"># ";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OpenSourceWebAnalytics")), "html", null, true);
        echo "</span>
        </div>
        <div style=\"float:right;\" id=\"topRightBar\">
            <br/>
            ";
        // line 40
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.topBar"));
        echo "
        </div>
        <div class=\"both\"></div>

        <div id=\"generalInstall\">
            ";
        // line 45
        $this->env->loadTemplate("@Installation/_allSteps.twig")->display($context);
        // line 46
        echo "        </div>

        <div id=\"detailInstall\">
            ";
        // line 49
        ob_start();
        // line 50
        echo "            <p class=\"nextStep\">
                <a class=\"submit\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("action" => (isset($context["nextModuleName"]) ? $context["nextModuleName"] : $this->getContext($context, "nextModuleName")), "token_auth" => null, "method" => null))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Next")), "html", null, true);
        echo " &raquo;</a>
            </p>
            ";
        $context["nextButton"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 54
        echo "            ";
        if ((array_key_exists("showNextStepAtTop", $context) && (isset($context["showNextStepAtTop"]) ? $context["showNextStepAtTop"] : $this->getContext($context, "showNextStepAtTop")))) {
            // line 55
            echo "                ";
            echo twig_escape_filter($this->env, (isset($context["nextButton"]) ? $context["nextButton"] : $this->getContext($context, "nextButton")), "html", null, true);
            echo "
            ";
        }
        // line 57
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "            ";
        if ((isset($context["showNextStep"]) ? $context["showNextStep"] : $this->getContext($context, "showNextStep"))) {
            // line 59
            echo "                ";
            echo twig_escape_filter($this->env, (isset($context["nextButton"]) ? $context["nextButton"] : $this->getContext($context, "nextButton")), "html", null, true);
            echo "
            ";
        }
        // line 61
        echo "        </div>

        <div class=\"both\"></div>

        <br/>
        <br/>

        <h3>";
        // line 68
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Installation_InstallationStatus")), "html", null, true);
        echo "</h3>

        <div id=\"progressbar\" data-progress=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["percentDone"]) ? $context["percentDone"] : $this->getContext($context, "percentDone")), "html", null, true);
        echo "\"></div>
        ";
        // line 71
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Installation_PercentDone", (isset($context["percentDone"]) ? $context["percentDone"] : $this->getContext($context, "percentDone")))), "html", null, true);
        echo "
    </div>
</div>
</body>
</html>
";
    }

    // line 57
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "@Installation/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 57,  139 => 71,  135 => 70,  130 => 68,  121 => 61,  115 => 59,  112 => 58,  109 => 57,  103 => 55,  100 => 54,  92 => 51,  89 => 50,  87 => 49,  72 => 40,  65 => 36,  57 => 30,  53 => 28,  51 => 27,  29 => 8,  20 => 1,  85 => 37,  82 => 46,  80 => 45,  58 => 15,  52 => 12,  45 => 9,  39 => 7,  37 => 6,  31 => 4,  28 => 3,);
    }
}
