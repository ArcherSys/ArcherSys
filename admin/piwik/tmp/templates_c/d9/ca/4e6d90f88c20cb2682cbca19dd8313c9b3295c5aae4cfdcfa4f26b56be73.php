<?php

/* _jsGlobalVariables.twig */
class __TwigTemplate_d9ca4e6d90f88c20cb2682cbca19dd8313c9b3295c5aae4cfdcfa4f26b56be73 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    var piwik = {};
    piwik.token_auth = \"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["token_auth"]) ? $context["token_auth"] : $this->getContext($context, "token_auth")), "html", null, true);
        echo "\";
    piwik.piwik_url = \"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["piwikUrl"]) ? $context["piwikUrl"] : $this->getContext($context, "piwikUrl")), "html", null, true);
        echo "\";
    piwik.cacheBuster = \"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["cacheBuster"]) ? $context["cacheBuster"] : $this->getContext($context, "cacheBuster")), "html", null, true);
        echo "\";
    ";
        // line 6
        if ((isset($context["userLogin"]) ? $context["userLogin"] : $this->getContext($context, "userLogin"))) {
            echo "piwik.userLogin = \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["userLogin"]) ? $context["userLogin"] : $this->getContext($context, "userLogin")), "js"), "html", null, true);
            echo "\";";
        }
        // line 7
        echo "
    ";
        // line 8
        if (array_key_exists("idSite", $context)) {
            echo "piwik.idSite = \"";
            echo twig_escape_filter($this->env, (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite")), "html", null, true);
            echo "\";";
        }
        // line 9
        echo "
    ";
        // line 10
        if (array_key_exists("siteName", $context)) {
            echo "piwik.siteName = \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["siteName"]) ? $context["siteName"] : $this->getContext($context, "siteName")), "js"), "html", null, true);
            echo "\";";
        }
        // line 11
        echo "
    ";
        // line 12
        if (array_key_exists("siteMainUrl", $context)) {
            echo "piwik.siteMainUrl = \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["siteMainUrl"]) ? $context["siteMainUrl"] : $this->getContext($context, "siteMainUrl")), "js"), "html", null, true);
            echo "\";";
        }
        // line 13
        echo "
    ";
        // line 14
        if (array_key_exists("period", $context)) {
            echo "piwik.period = \"";
            echo twig_escape_filter($this->env, (isset($context["period"]) ? $context["period"] : $this->getContext($context, "period")), "html", null, true);
            echo "\";";
        }
        // line 15
        echo "
";
        // line 20
        echo "    piwik.currentDateString = \"";
        echo twig_escape_filter($this->env, ((array_key_exists("date", $context)) ? (_twig_default_filter((isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")), ((array_key_exists("endDate", $context)) ? (_twig_default_filter((isset($context["endDate"]) ? $context["endDate"] : $this->getContext($context, "endDate")), "")) : ("")))) : (((array_key_exists("endDate", $context)) ? (_twig_default_filter((isset($context["endDate"]) ? $context["endDate"] : $this->getContext($context, "endDate")), "")) : ("")))), "html", null, true);
        echo "\";
";
        // line 21
        if (array_key_exists("startDate", $context)) {
            // line 22
            echo "    piwik.startDateString = \"";
            echo twig_escape_filter($this->env, (isset($context["startDate"]) ? $context["startDate"] : $this->getContext($context, "startDate")), "html", null, true);
            echo "\";
    piwik.endDateString = \"";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["endDate"]) ? $context["endDate"] : $this->getContext($context, "endDate")), "html", null, true);
            echo "\";
    piwik.minDateYear = ";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["minDateYear"]) ? $context["minDateYear"] : $this->getContext($context, "minDateYear")), "html", null, true);
            echo ";
    piwik.minDateMonth = parseInt(\"";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["minDateMonth"]) ? $context["minDateMonth"] : $this->getContext($context, "minDateMonth")), "html", null, true);
            echo "\", 10);
    piwik.minDateDay = parseInt(\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["minDateDay"]) ? $context["minDateDay"] : $this->getContext($context, "minDateDay")), "html", null, true);
            echo "\", 10);
    piwik.maxDateYear = ";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["maxDateYear"]) ? $context["maxDateYear"] : $this->getContext($context, "maxDateYear")), "html", null, true);
            echo ";
    piwik.maxDateMonth = parseInt(\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["maxDateMonth"]) ? $context["maxDateMonth"] : $this->getContext($context, "maxDateMonth")), "html", null, true);
            echo "\", 10);
    piwik.maxDateDay = parseInt(\"";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["maxDateDay"]) ? $context["maxDateDay"] : $this->getContext($context, "maxDateDay")), "html", null, true);
            echo "\", 10);
";
        }
        // line 31
        echo "    ";
        if (array_key_exists("language", $context)) {
            echo "piwik.language = \"";
            echo twig_escape_filter($this->env, (isset($context["language"]) ? $context["language"] : $this->getContext($context, "language")), "html", null, true);
            echo "\";";
        }
        // line 32
        echo "
    piwik.hasSuperUserAccess = ";
        // line 33
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, ((array_key_exists("hasSuperUserAccess", $context)) ? (_twig_default_filter((isset($context["hasSuperUserAccess"]) ? $context["hasSuperUserAccess"] : $this->getContext($context, "hasSuperUserAccess")), 0)) : (0)), "js"), "html", null, true);
        echo ";
    piwik.config = {};
";
        // line 35
        if (array_key_exists("clientSideConfig", $context)) {
            // line 36
            echo "    piwik.config = ";
            echo twig_jsonencode_filter((isset($context["clientSideConfig"]) ? $context["clientSideConfig"] : $this->getContext($context, "clientSideConfig")));
            echo ";
";
        }
        // line 38
        echo "    ";
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.jsGlobalVariables"));
        echo "
</script>
";
    }

    public function getTemplateName()
    {
        return "_jsGlobalVariables.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 38,  138 => 36,  131 => 33,  128 => 32,  108 => 27,  104 => 26,  100 => 25,  96 => 24,  87 => 22,  85 => 21,  80 => 20,  77 => 15,  71 => 14,  68 => 13,  62 => 12,  59 => 11,  31 => 5,  27 => 4,  23 => 3,  19 => 1,  143 => 46,  140 => 45,  136 => 35,  133 => 36,  130 => 35,  123 => 22,  121 => 31,  116 => 29,  114 => 17,  112 => 28,  110 => 15,  105 => 13,  92 => 23,  89 => 8,  86 => 7,  78 => 48,  75 => 47,  73 => 45,  69 => 44,  63 => 41,  58 => 38,  53 => 10,  50 => 9,  48 => 32,  44 => 8,  41 => 7,  39 => 28,  35 => 6,  32 => 26,  30 => 7,  22 => 1,  56 => 35,  54 => 11,  51 => 10,  47 => 8,  45 => 7,  42 => 6,  40 => 5,  37 => 4,  34 => 3,  29 => 2,);
    }
}
