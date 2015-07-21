<?php

/* @Dashboard/_dashboardSettings.twig */
class __TwigTemplate_f8d8a423f09dccd7d5a6e2c5b4a2bd921fc43c62b5c8151800fcd05d7b451706 extends Twig_Template
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
        echo "<span>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Dashboard_WidgetsAndDashboard")), "html", null, true);
        echo "</span>
<ul class=\"submenu\">
    <li>
        <div class=\"addWidget\">";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Dashboard_AddAWidget")), "html", null, true);
        echo " &darr;</div>
        <ul class=\"widgetpreview-categorylist\"></ul>
    </li>
    ";
        // line 7
        if ((twig_length_filter($this->env, (isset($context["dashboardActions"]) ? $context["dashboardActions"] : $this->getContext($context, "dashboardActions"))) > 0)) {
            // line 8
            echo "    <li>
        <div class=\"manageDashboard\">";
            // line 9
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Dashboard_ManageDashboard")), "html", null, true);
            echo " &darr;</div>
        <ul>
            ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dashboardActions"]) ? $context["dashboardActions"] : $this->getContext($context, "dashboardActions")));
            foreach ($context['_seq'] as $context["action"] => $context["title"]) {
                // line 12
                echo "            <li data-action=\"";
                echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")))), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['action'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ul>
    </li>
    ";
        }
        // line 17
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["generalActions"]) ? $context["generalActions"] : $this->getContext($context, "generalActions")));
        foreach ($context['_seq'] as $context["action"] => $context["title"]) {
            // line 18
            echo "    <li data-action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")))), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</ul>
<ul class=\"widgetpreview-widgetlist\"></ul>
<div class=\"widgetpreview-preview\"></div>";
    }

    public function getTemplateName()
    {
        return "@Dashboard/_dashboardSettings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 33,  95 => 32,  91 => 31,  88 => 30,  66 => 26,  106 => 18,  103 => 17,  38 => 2,  55 => 15,  36 => 7,  64 => 18,  57 => 14,  46 => 12,  28 => 5,  272 => 29,  266 => 28,  260 => 27,  256 => 26,  250 => 25,  247 => 24,  233 => 23,  227 => 75,  219 => 73,  211 => 71,  209 => 70,  203 => 66,  192 => 64,  186 => 62,  183 => 61,  173 => 59,  168 => 58,  165 => 57,  159 => 55,  156 => 54,  154 => 53,  151 => 52,  147 => 50,  145 => 49,  142 => 48,  125 => 45,  119 => 43,  113 => 41,  102 => 36,  98 => 35,  93 => 32,  90 => 22,  81 => 19,  72 => 16,  70 => 19,  67 => 18,  60 => 12,  26 => 4,  49 => 12,  33 => 6,  52 => 5,  21 => 2,  24 => 3,  144 => 38,  138 => 36,  131 => 47,  128 => 46,  108 => 39,  104 => 36,  100 => 25,  96 => 24,  87 => 21,  85 => 21,  80 => 20,  77 => 27,  71 => 14,  68 => 13,  62 => 17,  59 => 16,  31 => 6,  27 => 1,  23 => 3,  19 => 1,  143 => 46,  140 => 45,  136 => 35,  133 => 36,  130 => 35,  123 => 22,  121 => 31,  116 => 29,  114 => 17,  112 => 20,  110 => 40,  105 => 13,  92 => 16,  89 => 8,  86 => 7,  78 => 20,  75 => 17,  73 => 45,  69 => 8,  63 => 6,  58 => 38,  53 => 10,  50 => 9,  48 => 17,  44 => 9,  41 => 8,  39 => 8,  35 => 6,  32 => 7,  30 => 7,  22 => 2,  56 => 35,  54 => 11,  51 => 10,  47 => 8,  45 => 7,  42 => 11,  40 => 12,  37 => 9,  34 => 8,  29 => 4,);
    }
}
