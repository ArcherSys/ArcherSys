<?php

/* ajaxMacros.twig */
class __TwigTemplate_0bfdda4f074e4deebf5a8d597c0f4ae59249afc4685d3a72bdbf8890f708390c extends Twig_Template
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
        // line 4
        echo "
";
        // line 15
        echo "
";
    }

    // line 1
    public function geterrorDiv($_id = "ajaxError")
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $_id,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <div id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" style=\"display:none\"></div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 5
    public function getloadingDiv($_id = "ajaxLoadingDiv")
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $_id,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 6
            echo "<div id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" style=\"display:none;\">
    <div class=\"loadingPiwik\">
        <img src=\"plugins/Morpheus/images/loading-blue.gif\" alt=\"";
            // line 8
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_LoadingData")), "html", null, true);
            echo "\" />";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_LoadingData")), "html", null, true);
            echo "
    </div>
    <div class=\"loadingSegment\">
        ";
            // line 11
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_LoadingSegmentedDataMayTakeSomeTime")), "html", null, true);
            echo "
    </div>
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 16
    public function getrequestErrorDiv($_emailSuperUser = null)
    {
        $context = $this->env->mergeGlobals(array(
            "emailSuperUser" => $_emailSuperUser,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 17
            echo "    ";
            if ((array_key_exists("emailSuperUser", $context) && (isset($context["emailSuperUser"]) ? $context["emailSuperUser"] : $this->getContext($context, "emailSuperUser")))) {
                // line 18
                echo "        <div id=\"loadingError\">";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ErrorRequest", (("<a href=\"mailto:" . (isset($context["emailSuperUser"]) ? $context["emailSuperUser"] : $this->getContext($context, "emailSuperUser"))) . "\">"), "</a>"));
                echo "</div>
    ";
            } else {
                // line 20
                echo "        <div id=\"loadingError\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ErrorRequest", "", "")), "html", null, true);
                echo "</div>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "ajaxMacros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 18,  103 => 17,  38 => 2,  55 => 15,  36 => 7,  64 => 18,  57 => 14,  46 => 10,  28 => 5,  272 => 29,  266 => 28,  260 => 27,  256 => 26,  250 => 25,  247 => 24,  233 => 23,  227 => 75,  219 => 73,  211 => 71,  209 => 70,  203 => 66,  192 => 64,  186 => 62,  183 => 61,  173 => 59,  168 => 58,  165 => 57,  159 => 55,  156 => 54,  154 => 53,  151 => 52,  147 => 50,  145 => 49,  142 => 48,  125 => 45,  119 => 43,  113 => 41,  102 => 36,  98 => 35,  93 => 32,  90 => 22,  81 => 19,  72 => 16,  70 => 19,  67 => 14,  60 => 12,  26 => 4,  49 => 12,  33 => 6,  52 => 5,  21 => 2,  24 => 3,  144 => 38,  138 => 36,  131 => 47,  128 => 46,  108 => 39,  104 => 26,  100 => 25,  96 => 24,  87 => 21,  85 => 21,  80 => 20,  77 => 11,  71 => 14,  68 => 13,  62 => 12,  59 => 16,  31 => 6,  27 => 1,  23 => 3,  19 => 4,  143 => 46,  140 => 45,  136 => 35,  133 => 36,  130 => 35,  123 => 22,  121 => 31,  116 => 29,  114 => 17,  112 => 20,  110 => 40,  105 => 13,  92 => 16,  89 => 8,  86 => 7,  78 => 22,  75 => 17,  73 => 45,  69 => 8,  63 => 6,  58 => 38,  53 => 10,  50 => 9,  48 => 15,  44 => 8,  41 => 8,  39 => 8,  35 => 6,  32 => 26,  30 => 7,  22 => 15,  56 => 35,  54 => 11,  51 => 10,  47 => 8,  45 => 7,  42 => 9,  40 => 5,  37 => 7,  34 => 3,  29 => 5,);
    }
}
