<?php

/* @VisitsSummary/index.twig */
class __TwigTemplate_56debbcb7f80e69df2c7ec9c37374f555a30ac68d50c238576c33466a20ccac8 extends Twig_Template
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
        echo "<h2 piwik-enriched-headline
    data-graph-id=\"VisitsSummary.getEvolutionGraph\"
        >";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_EvolutionOverPeriod")), "html", null, true);
        echo "</h2>

";
        // line 6
        echo (isset($context["graphEvolutionVisitsSummary"]) ? $context["graphEvolutionVisitsSummary"] : $this->getContext($context, "graphEvolutionVisitsSummary"));
        echo "

<h2 class=\"visitsSummaryReportTitle\">";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Report")), "html", null, true);
        echo "</h2>
";
        // line 9
        $this->env->loadTemplate("@VisitsSummary/_sparklines.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "@VisitsSummary/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 9,  33 => 8,  28 => 6,  23 => 4,  19 => 2,);
    }
}
