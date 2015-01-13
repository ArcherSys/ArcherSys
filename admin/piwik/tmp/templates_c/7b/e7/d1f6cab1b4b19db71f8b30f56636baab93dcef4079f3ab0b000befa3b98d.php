<?php

/* @MultiSites/getSitesInfo.twig */
class __TwigTemplate_7be7d1f6cab1b4b19db71f8b30f56636baab93dcef4079f3ab0b000befa3b98d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((((isset($context["isWidgetized"]) ? $context["isWidgetized"] : $this->getContext($context, "isWidgetized"))) ? ("empty.twig") : ("dashboard.twig")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        if ((!(isset($context["isWidgetized"]) ? $context["isWidgetized"] : $this->getContext($context, "isWidgetized")))) {
            // line 5
            echo "    <div class=\"top_controls\">
        ";
            // line 6
            $this->env->loadTemplate("@CoreHome/_periodSelect.twig")->display($context);
            // line 7
            echo "        ";
            $this->env->loadTemplate("@CoreHome/_headerMessage.twig")->display($context);
            // line 8
            echo "    </div>
";
        }
        // line 10
        echo "
<div class=\"pageWrap\" id=\"multisites\">
    <div id=\"main\">
        <div piwik-multisites-dashboard
             class=\"centerLargeDiv\"
             display-revenue-column=\"";
        // line 15
        if ((isset($context["displayRevenueColumn"]) ? $context["displayRevenueColumn"] : $this->getContext($context, "displayRevenueColumn"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\"
             page-size=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit")), "html", null, true);
        echo "\"
             show-sparklines=\"";
        // line 17
        if ((isset($context["show_sparklines"]) ? $context["show_sparklines"] : $this->getContext($context, "show_sparklines"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\"
             date-sparkline=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["dateSparkline"]) ? $context["dateSparkline"] : $this->getContext($context, "dateSparkline")), "html", null, true);
        echo "\"
             auto-refresh-today-report=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["autoRefreshTodayReport"]) ? $context["autoRefreshTodayReport"] : $this->getContext($context, "autoRefreshTodayReport")), "html", null, true);
        echo "\">
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@MultiSites/getSitesInfo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 19,  70 => 18,  62 => 17,  58 => 16,  50 => 15,  43 => 10,  39 => 8,  36 => 7,  34 => 6,  31 => 5,  29 => 4,  26 => 3,);
    }
}
