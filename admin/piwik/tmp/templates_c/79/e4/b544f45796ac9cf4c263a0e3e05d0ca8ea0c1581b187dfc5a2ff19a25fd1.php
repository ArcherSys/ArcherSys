<?php

/* @CoreUpdater/layout.twig */
class __TwigTemplate_79e4b544f45796ac9cf4c263a0e3e05d0ca8ea0c1581b187dfc5a2ff19a25fd1 extends Twig_Template
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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_UpdateTitle")), "html", null, true);
        echo "</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=EDGE,chrome=1\"/>
    <meta name=\"viewport\" content=\"initial-scale=1.0\" />

    <link rel=\"stylesheet\" type=\"text/css\" href=\"libs/jquery/themes/base/jquery-ui.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"index.php?module=Installation&action=getBaseCss\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Morpheus/stylesheets/simple_structure.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/CoreHome/stylesheets/jquery.ui.autocomplete.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/CoreUpdater/stylesheets/updateLayout.css\" />

    <script type=\"text/javascript\" src=\"libs/jquery/jquery.js\"></script>
    <script type=\"text/javascript\" src=\"libs/jquery/jquery-ui.js\"></script>
    <script type=\"text/javascript\" src=\"plugins/CoreHome/javascripts/donate.js\"></script>
    <script type=\"text/javascript\" src=\"plugins/CoreUpdater/javascripts/updateLayout.js\"></script>

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

    <script type=\"text/javascript\">";
        // line 35
        echo call_user_func_array($this->env->getFunction('getJavascriptTranslations')->getCallable(), array());
        echo "</script>
    ";
        // line 36
        if ((call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_LayoutDirection")) == "rtl")) {
            // line 37
            echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Morpheus/stylesheets/rtl.css\"/>
    ";
        }
        // line 39
        echo "
    ";
        // line 40
        $this->env->loadTemplate("@CoreHome/_favicon.twig")->display($context);
        // line 41
        echo "</head>
<body id=\"simple\" ng-app=\"app\">
<div id=\"contentsimple\">
    <div id=\"title\">
        <img title='Piwik' alt=\"Piwik\" src=\"plugins/Morpheus/images/logo-header.png\" style=\"margin-left:10px;\"/>
        <span id=\"subh1\"> # ";
        // line 46
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OpenSourceWebAnalytics")), "html", null, true);
        echo "</span>
    </div>
    ";
        // line 48
        $this->displayBlock('content', $context, $blocks);
        // line 50
        echo "</div>
</body>
</html>
";
    }

    // line 48
    public function block_content($context, array $blocks = array())
    {
        // line 49
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@CoreUpdater/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 49,  95 => 48,  88 => 50,  86 => 48,  81 => 46,  74 => 41,  72 => 40,  65 => 37,  63 => 36,  59 => 35,  29 => 8,  20 => 1,  129 => 40,  126 => 39,  122 => 37,  120 => 36,  112 => 35,  109 => 34,  104 => 32,  99 => 29,  97 => 28,  94 => 27,  89 => 24,  80 => 22,  76 => 21,  69 => 39,  67 => 17,  64 => 16,  58 => 13,  54 => 12,  49 => 11,  43 => 9,  41 => 8,  36 => 6,  33 => 5,  30 => 4,  25 => 2,);
    }
}
