<?php

/* @CoreHome/_periodSelect.twig */
class __TwigTemplate_41e35a358d12f3412f230cd1a4584842d8485ca8db2096dd7e08d3f1d809774c extends Twig_Template
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
        echo "<div id=\"periodString\" class=\"piwikTopControl periodSelector\">
    <div id=\"date\">";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_DateRange")), "html", null, true);
        echo " <strong>";
        echo twig_escape_filter($this->env, (isset($context["prettyDate"]) ? $context["prettyDate"] : $this->getContext($context, "prettyDate")), "html", null, true);
        echo "</strong></div>
    <div class=\"calendar-icon\"></div>
    <div id=\"periodMore\">
        <div class=\"period-date\">
            <h6>";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Date")), "html", null, true);
        echo "</h6>

            <div id=\"datepicker\"></div>
        </div>
        <div class=\"period-range\" style=\"display:none;\">
            <div id=\"calendarRangeFrom\">
                <h6>";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_DateRangeFrom")), "html", null, true);
        echo "<input tabindex=\"1\" type=\"text\" id=\"inputCalendarFrom\" name=\"inputCalendarFrom\"/></h6>

                <div id=\"calendarFrom\"></div>
            </div>
            <div id=\"calendarRangeTo\">
                <h6>";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_DateRangeTo")), "html", null, true);
        echo "<input tabindex=\"2\" type=\"text\" id=\"inputCalendarTo\" name=\"inputCalendarTo\"/></h6>

                <div id=\"calendarTo\"></div>
            </div>
        </div>
        <div class=\"period-type\">
            <h6>";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Period")), "html", null, true);
        echo "</h6>
\t\t\t<span id=\"otherPeriods\">
            ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["periodsNames"]) ? $context["periodsNames"] : $this->getContext($context, "periodsNames")));
        foreach ($context['_seq'] as $context["label"] => $context["thisPeriod"]) {
            // line 26
            echo "                <input type=\"radio\" name=\"period\" id=\"period_id_";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("period" => (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))), "html", null, true);
            echo "\"";
            if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) == (isset($context["period"]) ? $context["period"] : $this->getContext($context, "period")))) {
                echo " checked=\"checked\"";
            }
            echo " />
                <label for=\"period_id_";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thisPeriod"]) ? $context["thisPeriod"] : $this->getContext($context, "thisPeriod")), "singular"), "html", null, true);
            echo "</label>
                <br/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['thisPeriod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t\t</span>
            <input tabindex=\"3\" type=\"submit\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ApplyDateRange")), "html", null, true);
        echo "\" id=\"calendarRangeApply\"/>
            ";
        // line 32
        $context["ajax"] = $this->env->loadTemplate("ajaxMacros.twig");
        // line 33
        echo "            ";
        echo $context["ajax"]->getloadingDiv("ajaxLoadingCalendar");
        echo "
        </div>
    </div>
    <div class=\"period-click-tooltip\" style=\"display:none;\">";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ClickToChangePeriod")), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_periodSelect.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 33,  95 => 32,  91 => 31,  88 => 30,  66 => 26,  106 => 18,  103 => 17,  38 => 2,  55 => 15,  36 => 7,  64 => 18,  57 => 23,  46 => 10,  28 => 5,  272 => 29,  266 => 28,  260 => 27,  256 => 26,  250 => 25,  247 => 24,  233 => 23,  227 => 75,  219 => 73,  211 => 71,  209 => 70,  203 => 66,  192 => 64,  186 => 62,  183 => 61,  173 => 59,  168 => 58,  165 => 57,  159 => 55,  156 => 54,  154 => 53,  151 => 52,  147 => 50,  145 => 49,  142 => 48,  125 => 45,  119 => 43,  113 => 41,  102 => 36,  98 => 35,  93 => 32,  90 => 22,  81 => 19,  72 => 16,  70 => 19,  67 => 14,  60 => 12,  26 => 4,  49 => 12,  33 => 6,  52 => 5,  21 => 2,  24 => 3,  144 => 38,  138 => 36,  131 => 47,  128 => 46,  108 => 39,  104 => 36,  100 => 25,  96 => 24,  87 => 21,  85 => 21,  80 => 20,  77 => 27,  71 => 14,  68 => 13,  62 => 25,  59 => 16,  31 => 6,  27 => 1,  23 => 3,  19 => 1,  143 => 46,  140 => 45,  136 => 35,  133 => 36,  130 => 35,  123 => 22,  121 => 31,  116 => 29,  114 => 17,  112 => 20,  110 => 40,  105 => 13,  92 => 16,  89 => 8,  86 => 7,  78 => 22,  75 => 17,  73 => 45,  69 => 8,  63 => 6,  58 => 38,  53 => 10,  50 => 9,  48 => 17,  44 => 9,  41 => 8,  39 => 8,  35 => 6,  32 => 5,  30 => 7,  22 => 2,  56 => 35,  54 => 11,  51 => 10,  47 => 8,  45 => 7,  42 => 9,  40 => 12,  37 => 7,  34 => 3,  29 => 4,);
    }
}
