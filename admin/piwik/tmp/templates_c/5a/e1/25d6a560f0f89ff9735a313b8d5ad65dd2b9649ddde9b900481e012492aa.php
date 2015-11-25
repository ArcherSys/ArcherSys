<?php

/* @CoreHome/_menu.twig */
class __TwigTemplate_5ae125d6a560f0f89ff9735a313b8d5ad65dd2b9649ddde9b900481e012492aa extends Twig_Template
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
        echo "<div class=\"Menu--dashboard\">

    <ul class=\"Menu-tabList\">
        ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")));
        foreach ($context['_seq'] as $context["level1"] => $context["level2"]) {
            // line 5
            echo "            <li id=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), array($this->getAttribute((isset($context["level2"]) ? $context["level2"] : $this->getContext($context, "level2")), "_url"))), "html", null, true);
            echo "\">
                <a href=\"#";
            // line 6
            echo twig_escape_filter($this->env, twig_slice($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), array($this->getAttribute((isset($context["level2"]) ? $context["level2"] : $this->getContext($context, "level2")), "_url"))), 1), "html", null, true);
            echo "\"
                   onclick=\"return piwikMenu.onItemClick(this);\">";
            // line 7
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array((isset($context["level1"]) ? $context["level1"] : $this->getContext($context, "level1")))), "html", null, true);
            echo "</a>
                <ul>
                ";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["level2"]) ? $context["level2"] : $this->getContext($context, "level2")));
            foreach ($context['_seq'] as $context["name"] => $context["urlParameters"]) {
                // line 10
                echo "                    ";
                if ((twig_slice($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), 0, 1) != "_")) {
                    // line 11
                    echo "                        <li>
                            <a href='#";
                    // line 12
                    echo twig_escape_filter($this->env, twig_slice($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), array($this->getAttribute((isset($context["urlParameters"]) ? $context["urlParameters"] : $this->getContext($context, "urlParameters")), "_url"))), 1), "html", null, true);
                    echo "'
                               onclick='return piwikMenu.onItemClick(this);'>
                                ";
                    // line 14
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
                    echo "
                            </a>
                        </li>
                    ";
                }
                // line 18
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['urlParameters'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                </ul>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['level1'], $context['level2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        <li id=\"Searchmenu\">
            <span piwik-quick-access></span>
        </li>
    </ul>

</div>
<div class=\"nav_sep\"></div>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 18,  57 => 14,  46 => 10,  28 => 5,  272 => 29,  266 => 28,  260 => 27,  256 => 26,  250 => 25,  247 => 24,  233 => 23,  227 => 75,  219 => 73,  211 => 71,  209 => 70,  203 => 66,  192 => 64,  186 => 62,  183 => 61,  173 => 59,  168 => 58,  165 => 57,  159 => 55,  156 => 54,  154 => 53,  151 => 52,  147 => 50,  145 => 49,  142 => 48,  125 => 45,  119 => 43,  113 => 41,  102 => 36,  98 => 35,  93 => 32,  90 => 22,  81 => 19,  72 => 16,  70 => 19,  67 => 14,  60 => 12,  26 => 2,  49 => 11,  33 => 6,  52 => 12,  21 => 3,  24 => 4,  144 => 38,  138 => 36,  131 => 47,  128 => 46,  108 => 39,  104 => 26,  100 => 25,  96 => 24,  87 => 21,  85 => 21,  80 => 20,  77 => 15,  71 => 14,  68 => 13,  62 => 12,  59 => 8,  31 => 3,  27 => 4,  23 => 3,  19 => 1,  143 => 46,  140 => 45,  136 => 35,  133 => 36,  130 => 35,  123 => 22,  121 => 31,  116 => 29,  114 => 17,  112 => 28,  110 => 40,  105 => 13,  92 => 23,  89 => 8,  86 => 7,  78 => 22,  75 => 17,  73 => 45,  69 => 44,  63 => 9,  58 => 38,  53 => 10,  50 => 9,  48 => 15,  44 => 8,  41 => 8,  39 => 28,  35 => 6,  32 => 26,  30 => 7,  22 => 2,  56 => 35,  54 => 11,  51 => 10,  47 => 8,  45 => 7,  42 => 9,  40 => 5,  37 => 7,  34 => 3,  29 => 4,);
    }
}
