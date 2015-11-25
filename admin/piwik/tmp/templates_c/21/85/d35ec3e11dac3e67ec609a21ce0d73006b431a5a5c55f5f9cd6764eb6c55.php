<?php

/* @CoreHome/_singleReport.twig */
class __TwigTemplate_2185d35ec3e11dac3e67ec609a21ce0d73006b431a5a5c55f5f9cd6764eb6c55 extends Twig_Template
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
        echo "<h2 piwik-enriched-headline>";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h2>
";
        // line 2
        echo (isset($context["report"]) ? $context["report"] : $this->getContext($context, "report"));
    }

    public function getTemplateName()
    {
        return "@CoreHome/_singleReport.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }
}
