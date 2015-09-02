<?php

/* @CoreHome/_headerMessage.twig */
class __TwigTemplate_939df66b372f9c9f293d9a2890e1081f3655cbfd97b9f6d019f6c1c030dbaa2a extends Twig_Template
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
        // line 2
        $context["test_latest_version_available"] = "3.0";
        // line 3
        $context["test_piwikUrl"] = "http://demo.piwik.org/";
        // line 4
        ob_start();
        echo twig_escape_filter($this->env, (((isset($context["piwikUrl"]) ? $context["piwikUrl"] : $this->getContext($context, "piwikUrl")) == "http://demo.piwik.org/") || ((isset($context["piwikUrl"]) ? $context["piwikUrl"] : $this->getContext($context, "piwikUrl")) == "https://demo.piwik.org/")), "html", null, true);
        $context["isPiwikDemo"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 5
        echo "
";
        // line 6
        ob_start();
        // line 7
        echo "<div id=\"updateCheckLinkContainer\">
    <span class='loadingPiwik' style=\"display:none;\"><img src='plugins/Morpheus/images/loading-blue.gif'/></span>
    <img class=\"icon\" src=\"plugins/Morpheus/images/reload.png\"/>
    <a href=\"#\" id=\"checkForUpdates\"><em>";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_CheckForUpdates")), "html", null, true);
        echo "</em></a>
</div>
";
        $context["updateCheck"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 13
        echo "
";
        // line 14
        if ((((isset($context["isPiwikDemo"]) ? $context["isPiwikDemo"] : $this->getContext($context, "isPiwikDemo")) || (((isset($context["latest_version_available"]) ? $context["latest_version_available"] : $this->getContext($context, "latest_version_available")) && (isset($context["hasSomeViewAccess"]) ? $context["hasSomeViewAccess"] : $this->getContext($context, "hasSomeViewAccess"))) && (!(isset($context["isUserIsAnonymous"]) ? $context["isUserIsAnonymous"] : $this->getContext($context, "isUserIsAnonymous"))))) || (((isset($context["isSuperUser"]) ? $context["isSuperUser"] : $this->getContext($context, "isSuperUser")) && array_key_exists("adminMenu", $context)) && (isset($context["adminMenu"]) ? $context["adminMenu"] : $this->getContext($context, "adminMenu"))))) {
            // line 15
            echo "<span id=\"header_message\" class=\"";
            if (((isset($context["isPiwikDemo"]) ? $context["isPiwikDemo"] : $this->getContext($context, "isPiwikDemo")) || (!(isset($context["latest_version_available"]) ? $context["latest_version_available"] : $this->getContext($context, "latest_version_available"))))) {
                echo "header_info";
            } else {
                echo "header_alert";
            }
            echo "\">
    <span class=\"header_short\">
        ";
            // line 17
            if ((isset($context["isPiwikDemo"]) ? $context["isPiwikDemo"] : $this->getContext($context, "isPiwikDemo"))) {
                // line 18
                echo "            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_YouAreViewingDemoShortMessage")), "html", null, true);
                echo "
        ";
            } elseif ((isset($context["latest_version_available"]) ? $context["latest_version_available"] : $this->getContext($context, "latest_version_available"))) {
                // line 20
                echo "            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NewUpdatePiwikX", (isset($context["latest_version_available"]) ? $context["latest_version_available"] : $this->getContext($context, "latest_version_available")))), "html", null, true);
                echo "
        ";
            } elseif ((((isset($context["isSuperUser"]) ? $context["isSuperUser"] : $this->getContext($context, "isSuperUser")) && array_key_exists("adminMenu", $context)) && (isset($context["adminMenu"]) ? $context["adminMenu"] : $this->getContext($context, "adminMenu")))) {
                // line 22
                echo "            ";
                echo (isset($context["updateCheck"]) ? $context["updateCheck"] : $this->getContext($context, "updateCheck"));
                echo "
        ";
            }
            // line 24
            echo "    </span>

    <span class=\"header_full\">
        ";
            // line 27
            if ((isset($context["isPiwikDemo"]) ? $context["isPiwikDemo"] : $this->getContext($context, "isPiwikDemo"))) {
                // line 28
                echo "            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_YouAreViewingDemoShortMessage")), "html", null, true);
                echo "
            <br />
            ";
                // line 30
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_DownloadFullVersion", "<a href='http://piwik.org/'>", "</a>", "<a href='http://piwik.org'>piwik.org</a>"));
                echo "
            <br/>
        ";
            }
            // line 33
            echo "        ";
            if (((isset($context["latest_version_available"]) ? $context["latest_version_available"] : $this->getContext($context, "latest_version_available")) && (isset($context["isSuperUser"]) ? $context["isSuperUser"] : $this->getContext($context, "isSuperUser")))) {
                // line 34
                echo "            ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_PiwikXIsAvailablePleaseUpdateNow", (isset($context["latest_version_available"]) ? $context["latest_version_available"] : $this->getContext($context, "latest_version_available")), "<br /><a href='index.php?module=CoreUpdater&amp;action=newVersionAvailable'>", "</a>", "<a href='?module=Proxy&amp;action=redirect&amp;url=http://piwik.org/changelog/' target='_blank'>", "</a>"));
                echo "
            <br/>
            ";
                // line 36
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_YouAreCurrentlyUsing", (isset($context["piwik_version"]) ? $context["piwik_version"] : $this->getContext($context, "piwik_version")))), "html", null, true);
                echo "
        ";
            } elseif (((((isset($context["latest_version_available"]) ? $context["latest_version_available"] : $this->getContext($context, "latest_version_available")) && (!(isset($context["isPiwikDemo"]) ? $context["isPiwikDemo"] : $this->getContext($context, "isPiwikDemo")))) && (isset($context["hasSomeViewAccess"]) ? $context["hasSomeViewAccess"] : $this->getContext($context, "hasSomeViewAccess"))) && (!(isset($context["isUserIsAnonymous"]) ? $context["isUserIsAnonymous"] : $this->getContext($context, "isUserIsAnonymous"))))) {
                // line 38
                echo "            ";
                $context["updateSubject"] = twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NewUpdatePiwikX", (isset($context["latest_version_available"]) ? $context["latest_version_available"] : $this->getContext($context, "latest_version_available")))), "url");
                // line 39
                echo "            ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_PiwikXIsAvailablePleaseNotifyPiwikAdmin", (("<a href='?module=Proxy&action=redirect&url=http://piwik.org/' target='_blank'>Piwik</a> <a href='?module=Proxy&action=redirect&url=http://piwik.org/changelog/' target='_blank'>" . (isset($context["latest_version_available"]) ? $context["latest_version_available"] : $this->getContext($context, "latest_version_available"))) . "</a>"), (((("<a href='mailto:" . (isset($context["superUserEmails"]) ? $context["superUserEmails"] : $this->getContext($context, "superUserEmails"))) . "?subject=") . (isset($context["updateSubject"]) ? $context["updateSubject"] : $this->getContext($context, "updateSubject"))) . "'>"), "</a>"));
                echo "
        ";
            } elseif ((((isset($context["isSuperUser"]) ? $context["isSuperUser"] : $this->getContext($context, "isSuperUser")) && array_key_exists("adminMenu", $context)) && (isset($context["adminMenu"]) ? $context["adminMenu"] : $this->getContext($context, "adminMenu")))) {
                // line 41
                echo "            ";
                echo (isset($context["updateCheck"]) ? $context["updateCheck"] : $this->getContext($context, "updateCheck"));
                echo "
            <br />
            ";
                // line 43
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_YouAreCurrentlyUsing", (isset($context["piwik_version"]) ? $context["piwik_version"] : $this->getContext($context, "piwik_version")))), "html", null, true);
                echo "
        ";
            }
            // line 45
            echo "    </span>
</span>
";
        }
    }

    public function getTemplateName()
    {
        return "@CoreHome/_headerMessage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 43,  120 => 41,  111 => 38,  83 => 27,  43 => 13,  97 => 33,  95 => 32,  91 => 30,  88 => 30,  66 => 20,  106 => 36,  103 => 17,  38 => 2,  55 => 15,  36 => 7,  64 => 18,  57 => 14,  46 => 14,  28 => 5,  272 => 29,  266 => 28,  260 => 27,  256 => 26,  250 => 25,  247 => 24,  233 => 23,  227 => 75,  219 => 73,  211 => 71,  209 => 70,  203 => 66,  192 => 64,  186 => 62,  183 => 61,  173 => 59,  168 => 58,  165 => 57,  159 => 55,  156 => 54,  154 => 53,  151 => 52,  147 => 50,  145 => 49,  142 => 48,  125 => 45,  119 => 43,  113 => 41,  102 => 36,  98 => 35,  93 => 32,  90 => 22,  81 => 19,  72 => 22,  70 => 19,  67 => 18,  60 => 18,  26 => 4,  49 => 12,  33 => 6,  52 => 5,  21 => 3,  24 => 3,  144 => 38,  138 => 36,  131 => 45,  128 => 46,  108 => 39,  104 => 36,  100 => 34,  96 => 24,  87 => 21,  85 => 28,  80 => 20,  77 => 27,  71 => 14,  68 => 13,  62 => 17,  59 => 16,  31 => 6,  27 => 5,  23 => 4,  19 => 2,  143 => 46,  140 => 45,  136 => 35,  133 => 36,  130 => 35,  123 => 22,  121 => 31,  116 => 29,  114 => 39,  112 => 20,  110 => 40,  105 => 13,  92 => 16,  89 => 8,  86 => 7,  78 => 24,  75 => 17,  73 => 45,  69 => 8,  63 => 6,  58 => 17,  53 => 10,  50 => 9,  48 => 15,  44 => 9,  41 => 8,  39 => 8,  35 => 6,  32 => 7,  30 => 6,  22 => 2,  56 => 35,  54 => 11,  51 => 10,  47 => 8,  45 => 7,  42 => 11,  40 => 12,  37 => 10,  34 => 8,  29 => 4,);
    }
}
