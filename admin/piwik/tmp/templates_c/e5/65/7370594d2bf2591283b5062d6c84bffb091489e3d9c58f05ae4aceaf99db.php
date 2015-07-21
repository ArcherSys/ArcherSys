<?php

/* @CoreHome/_topBar.twig */
class __TwigTemplate_e5657370594d2bf2591283b5062d6c84bffb091489e3d9c58f05ae4aceaf99db extends Twig_Template
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
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.beforeTopBar", (isset($context["userAlias"]) ? $context["userAlias"] : $this->getContext($context, "userAlias")), (isset($context["userLogin"]) ? $context["userLogin"] : $this->getContext($context, "userLogin")), (isset($context["topMenu"]) ? $context["topMenu"] : $this->getContext($context, "topMenu")), (isset($context["userMenu"]) ? $context["userMenu"] : $this->getContext($context, "userMenu"))));
        echo "
<div id=\"topBars\">
    ";
        // line 3
        $this->env->loadTemplate("@CoreHome/_topBarTopMenu.twig")->display($context);
        // line 4
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_topBar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  49 => 7,  33 => 4,  52 => 17,  21 => 3,  24 => 3,  144 => 38,  138 => 36,  131 => 33,  128 => 32,  108 => 27,  104 => 26,  100 => 25,  96 => 24,  87 => 22,  85 => 21,  80 => 20,  77 => 15,  71 => 14,  68 => 13,  62 => 12,  59 => 8,  31 => 3,  27 => 4,  23 => 3,  19 => 1,  143 => 46,  140 => 45,  136 => 35,  133 => 36,  130 => 35,  123 => 22,  121 => 31,  116 => 29,  114 => 17,  112 => 28,  110 => 15,  105 => 13,  92 => 23,  89 => 8,  86 => 7,  78 => 48,  75 => 47,  73 => 45,  69 => 44,  63 => 9,  58 => 38,  53 => 10,  50 => 9,  48 => 15,  44 => 8,  41 => 11,  39 => 28,  35 => 6,  32 => 26,  30 => 7,  22 => 2,  56 => 35,  54 => 11,  51 => 10,  47 => 8,  45 => 7,  42 => 6,  40 => 5,  37 => 10,  34 => 3,  29 => 2,);
    }
}
