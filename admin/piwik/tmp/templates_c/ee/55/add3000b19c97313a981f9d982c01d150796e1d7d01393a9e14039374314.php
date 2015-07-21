<?php

/* @Installation/_allSteps.twig */
class __TwigTemplate_ee55add3000b19c97313a981f9d982c01d150796e1d7d01393a9e14039374314 extends Twig_Template
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
        echo "<ul>
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allStepsTitle"]) ? $context["allStepsTitle"] : $this->getContext($context, "allStepsTitle")));
        foreach ($context['_seq'] as $context["stepId"] => $context["stepName"]) {
            // line 3
            echo "        ";
            if (((isset($context["currentStepId"]) ? $context["currentStepId"] : $this->getContext($context, "currentStepId")) > (isset($context["stepId"]) ? $context["stepId"] : $this->getContext($context, "stepId")))) {
                // line 4
                echo "            <li class=\"pastStep\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array((isset($context["stepName"]) ? $context["stepName"] : $this->getContext($context, "stepName")))), "html", null, true);
                echo "</li>
        ";
            } elseif (((isset($context["currentStepId"]) ? $context["currentStepId"] : $this->getContext($context, "currentStepId")) == (isset($context["stepId"]) ? $context["stepId"] : $this->getContext($context, "stepId")))) {
                // line 6
                echo "            <li class=\"actualStep\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array((isset($context["stepName"]) ? $context["stepName"] : $this->getContext($context, "stepName")))), "html", null, true);
                echo "</li>
        ";
            } else {
                // line 8
                echo "            <li class=\"futureStep\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array((isset($context["stepName"]) ? $context["stepName"] : $this->getContext($context, "stepName")))), "html", null, true);
                echo "</li>
        ";
            }
            // line 10
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['stepId'], $context['stepName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "@Installation/_allSteps.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  41 => 8,  35 => 6,  26 => 3,  22 => 2,  19 => 1,  149 => 57,  139 => 71,  135 => 70,  130 => 68,  121 => 61,  115 => 59,  112 => 58,  109 => 57,  103 => 55,  100 => 54,  92 => 51,  89 => 50,  87 => 49,  72 => 40,  65 => 36,  57 => 30,  53 => 11,  51 => 27,  29 => 4,  20 => 1,  85 => 37,  82 => 46,  80 => 45,  58 => 15,  52 => 12,  45 => 9,  39 => 7,  37 => 6,  31 => 4,  28 => 3,);
    }
}
