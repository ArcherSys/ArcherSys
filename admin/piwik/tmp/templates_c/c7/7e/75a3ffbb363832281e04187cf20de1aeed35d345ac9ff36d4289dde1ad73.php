<?php

/* @Dashboard/_widgetFactoryTemplate.twig */
class __TwigTemplate_c77e75a3ffbb363832281e04187cf20de1aeed35d345ac9ff36d4289dde1ad73 extends Twig_Template
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
        echo "<div id=\"widgetTemplate\" style=\"display:none;\">
  <div class=\"widget\">
    <div class=\"widgetTop\">
      <div class=\"button\" id=\"close\">
        <img src=\"plugins/Morpheus/images/close.png\" title=\"";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Close")), "html", null, true);
        echo "\" />
      </div>
      <div class=\"button\" id=\"maximise\">
        <img src=\"plugins/Morpheus/images/maximise.png\" title=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Dashboard_Maximise")), "html", null, true);
        echo "\" />
      </div>
      <div class=\"button\" id=\"minimise\">
        <img src=\"plugins/Morpheus/images/minimise.png\" title=\"";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Dashboard_Minimise")), "html", null, true);
        echo "\" />
      </div>
      <div class=\"button\" id=\"refresh\">
        <img src=\"plugins/Morpheus/images/refresh.png\" title=\"";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Refresh")), "html", null, true);
        echo "\" />
      </div>
      <div class=\"widgetName\">";
        // line 16
        if (array_key_exists("widgetName", $context)) {
            echo twig_escape_filter($this->env, (isset($context["widgetName"]) ? $context["widgetName"] : $this->getContext($context, "widgetName")), "html", null, true);
        }
        echo "</div>
    </div>
    <div class=\"widgetContent\">
      <div class=\"widgetLoading\">";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Dashboard_LoadingWidget")), "html", null, true);
        echo "</div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@Dashboard/_widgetFactoryTemplate.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 16,  43 => 14,  31 => 8,  25 => 5,  261 => 99,  259 => 98,  253 => 95,  249 => 94,  245 => 93,  240 => 91,  233 => 87,  229 => 86,  224 => 84,  218 => 81,  212 => 78,  206 => 75,  202 => 73,  196 => 70,  192 => 69,  186 => 66,  181 => 64,  175 => 61,  172 => 60,  170 => 59,  164 => 56,  160 => 55,  154 => 52,  149 => 50,  142 => 46,  139 => 45,  132 => 43,  123 => 41,  119 => 40,  116 => 39,  112 => 38,  106 => 35,  99 => 31,  95 => 30,  91 => 29,  84 => 25,  80 => 24,  76 => 23,  69 => 19,  65 => 18,  60 => 17,  56 => 19,  52 => 15,  45 => 11,  41 => 10,  37 => 11,  27 => 4,  22 => 2,  19 => 1,);
    }
}
