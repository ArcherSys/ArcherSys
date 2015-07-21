<?php

/* dashboard.twig */
class __TwigTemplate_024ab36d299f2a4113b2075933bd4578c12de152f8c8d6fa892585c74c33ca8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'notification' => array($this, 'block_notification'),
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
        ";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 26
        echo "    </head>
    <body ng-app=\"app\" class=\"";
        // line 27
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.bodyClass", "dashboard"));
        echo "\">
    ";
        // line 28
        $this->env->loadTemplate("_iframeBuster.twig")->display($context);
        // line 29
        echo "    ";
        $this->env->loadTemplate("@CoreHome/_javaScriptDisabled.twig")->display($context);
        // line 30
        echo "
    <div id=\"root\">
        ";
        // line 32
        $this->env->loadTemplate("@CoreHome/_warningInvalidHost.twig")->display($context);
        // line 33
        echo "        ";
        $this->env->loadTemplate("@CoreHome/_topScreen.twig")->display($context);
        // line 34
        echo "
        ";
        // line 35
        $this->displayBlock('notification', $context, $blocks);
        // line 38
        echo "
        <div class=\"ui-confirm\" id=\"alert\">
            <h2></h2>
            <input role=\"yes\" type=\"button\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Ok")), "html", null, true);
        echo "\"/>
        </div>

    ";
        // line 44
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.beforeContent", "dashboard", (isset($context["currentModule"]) ? $context["currentModule"] : $this->getContext($context, "currentModule"))));
        echo "
        ";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "    </div>
    ";
        // line 48
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.footer"));
        echo "
    </body>
</html>
";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        // line 8
        echo "            <meta charset=\"utf-8\">
            <title>";
        // line 9
        echo (isset($context["siteName"]) ? $context["siteName"] : $this->getContext($context, "siteName"));
        echo " - ";
        if (((isset($context["isCustomLogo"]) ? $context["isCustomLogo"] : $this->getContext($context, "isCustomLogo")) == false)) {
            echo "Piwik &rsaquo; ";
        }
        echo " ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_WebAnalyticsReports")), "html", null, true);
        echo "</title>
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=EDGE,chrome=1\"/>
            <meta name=\"viewport\" content=\"initial-scale=1.0\" />
            <meta name=\"generator\" content=\"Piwik - free/libre analytics platform\"/>
            <meta name=\"description\" content=\"Web Analytics report for '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["siteName"]) ? $context["siteName"] : $this->getContext($context, "siteName")), "html_attr");
        echo "' - Piwik\"/>
            <meta name=\"apple-itunes-app\" content=\"app-id=737216887\" />
";
        // line 15
        $this->env->loadTemplate("@CoreHome/_favicon.twig")->display($context);
        // line 16
        $this->env->loadTemplate("_jsGlobalVariables.twig")->display($context);
        // line 17
        $this->env->loadTemplate("_piwikTag.twig")->display($context);
        // line 18
        echo "            <!--[if lt IE 9]>
            <script language=\"javascript\" type=\"text/javascript\" src=\"libs/jqplot/excanvas.min.js\"></script>
            <![endif]-->
";
        // line 21
        $this->env->loadTemplate("_jsCssIncludes.twig")->display($context);
        // line 22
        echo "            <!--[if IE]>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Morpheus/stylesheets/ieonly.css\"/>
            <![endif]-->
        ";
    }

    // line 35
    public function block_notification($context, array $blocks = array())
    {
        // line 36
        echo "            ";
        $this->env->loadTemplate("@CoreHome/_notifications.twig")->display($context);
        // line 37
        echo "        ";
    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
        // line 46
        echo "        ";
    }

    public function getTemplateName()
    {
        return "dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 46,  140 => 45,  136 => 37,  133 => 36,  130 => 35,  123 => 22,  121 => 21,  116 => 18,  114 => 17,  112 => 16,  110 => 15,  105 => 13,  92 => 9,  89 => 8,  86 => 7,  78 => 48,  75 => 47,  73 => 45,  69 => 44,  63 => 41,  58 => 38,  53 => 34,  50 => 33,  48 => 32,  44 => 30,  41 => 29,  39 => 28,  35 => 27,  32 => 26,  30 => 7,  22 => 1,  56 => 35,  54 => 11,  51 => 10,  47 => 8,  45 => 7,  42 => 6,  40 => 5,  37 => 4,  34 => 3,  29 => 2,);
    }
}
