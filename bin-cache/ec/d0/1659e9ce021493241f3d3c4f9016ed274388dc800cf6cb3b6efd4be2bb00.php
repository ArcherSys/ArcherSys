<?php

/* asosmenu.twig */
class __TwigTemplate_ecd01659e9ce021493241f3d3c4f9016ed274388dc800cf6cb3b6efd4be2bb00 extends Twig_Template
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
        echo "
<div id=\"bar\">
  <ul>
";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["asosbar"]) ? $context["asosbar"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "    <li class=\"menuItem\">
       ";
            // line 6
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array(), "array") == "menu")) {
                // line 7
                echo "      <ul class=\"submenu\">
        ";
                // line 8
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "submenu", array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["subi"]) {
                    echo "  
         <li>";
                    // line 9
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["subi"]) ? $context["subi"] : null), "title", array()), "html", null, true);
                    echo "</li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subi'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "      </ul>
      ";
            } else {
                // line 13
                echo "    </li>
   <li class=\"menuItem\">";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), "html", null, true);
                echo "</li>
  ";
            }
            // line 16
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</ul>
</div>";
    }

    public function getTemplateName()
    {
        return "asosmenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 17,  62 => 16,  57 => 14,  54 => 13,  50 => 11,  42 => 9,  36 => 8,  33 => 7,  31 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
