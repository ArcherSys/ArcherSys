<?php

/* @Goals/_formAddGoal.twig */
class __TwigTemplate_93431c8923f60bf86dcbf4afe5f2aad7af2d7d10e28731987c811ad737f57087 extends Twig_Template
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
        echo "<div class='entityAddContainer' style=\"display:none;\">
    <form>
        <table class=\"dataTable entityTable\">
            <thead>
            <tr class=\"first\">
                <th colspan=\"2\">";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_AddNewGoal")), "html", null, true);
        echo "</th>
            <tr>
            </thead>
            <tbody>
            <tr>
                <td class=\"first\">";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_GoalName")), "html", null, true);
        echo " </td>
                <td><input type=\"text\" name=\"name\" value=\"\" size=\"28\" id=\"goal_name\" class=\"inp\"/></td>
            </tr>
            <tr>
                <td style='width:260px;' class=\"first\">";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_GoalIsTriggered")), "html", null, true);
        echo "
                    <select name=\"trigger_type\" class=\"inp\">
                        <option value=\"visitors\">";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_WhenVisitors")), "html", null, true);
        echo "</option>
                        <option value=\"manually\">";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_Manually")), "html", null, true);
        echo "</option>
                    </select>
                </td>
                <td>
                    <input type=\"radio\" id=\"match_attribute_url\" value=\"url\" name=\"match_attribute\"/>
                    <label for=\"match_attribute_url\">";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_VisitUrl")), "html", null, true);
        echo "</label>
                    <br/>
                    <input type=\"radio\" id=\"match_attribute_title\" value=\"title\" name=\"match_attribute\"/>
                    <label for=\"match_attribute_title\">";
        // line 26
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_VisitPageTitle")), "html", null, true);
        echo "</label>
                    <br/>
                    <input type=\"radio\" id=\"match_attribute_file\" value=\"file\" name=\"match_attribute\"/>
                    <label for=\"match_attribute_file\">";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_Download")), "html", null, true);
        echo "</label>
                    <br/>
                    <input type=\"radio\" id=\"match_attribute_external_website\" value=\"external_website\" name=\"match_attribute\"/>
                    <label for=\"match_attribute_external_website\">";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_ClickOutlink")), "html", null, true);
        echo "</label>
                </td>
            </tr>
            </tbody>
            <tbody id=\"match_attribute_section\">
            <tr>
                <td class=\"first\">";
        // line 38
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_WhereThe")), "html", null, true);
        echo " <span id=\"match_attribute_name\"></span></td>
                <td>
                    <select name=\"pattern_type\" class=\"inp\">
                        <option value=\"contains\">";
        // line 41
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_Contains", "")), "html", null, true);
        echo "</option>
                        <option value=\"exact\">";
        // line 42
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_IsExactly", "")), "html", null, true);
        echo "</option>
                        <option value=\"regex\">";
        // line 43
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_MatchesExpression", "")), "html", null, true);
        echo "</option>
                    </select>

                    <input type=\"text\" name=\"pattern\" value=\"\" size=\"16\" class=\"inp\"/>
                    <br/>

                    <div id=\"examples_pattern\" class=\"entityInlineHelp\"></div>
                    <br/>
\t\t\t\t<span style=\"float:right;\">
                    ";
        // line 52
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_Optional")), "html", null, true);
        echo " <input type=\"checkbox\" id=\"case_sensitive\"/>
                    <label for=\"case_sensitive\">";
        // line 53
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_CaseSensitive")), "html", null, true);
        echo "</label>
\t\t\t\t</span>
                </td>
            </tr>
            </tbody>
            <tbody id=\"manual_trigger_section\" style=\"display:none;\">
            <tr>
                <td colspan=\"2\" class=\"first\">
                    ";
        // line 61
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_WhereVisitedPageManuallyCallsJavascriptTrackerLearnMore", "<a target='_blank' href='?module=Proxy&action=redirect&url=http://piwik.org/docs/javascript-tracking/%23toc-manually-trigger-a-conversion-for-a-goal'>", "</a>"));
        echo "
                </td>
            </tr>
            </tbody>
            <tbody>
            <tr>
                <td class=\"first\"> ";
        // line 67
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_AllowMultipleConversionsPerVisit")), "html", null, true);
        echo " </td>
                <td>
                    <input type=\"radio\" id=\"allow_multiple_0\" value=\"0\" name=\"allow_multiple\"/>
                    <label for=\"allow_multiple_0\">";
        // line 70
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_DefaultGoalConvertedOncePerVisit")), "html", null, true);
        echo "</label>

                    <div class=\"entityInlineHelp\">
                        ";
        // line 73
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_HelpOneConversionPerVisit")), "html", null, true);
        echo "
                    </div>
                    <br/>

                    <input type=\"radio\" id=\"allow_multiple_1\" value=\"1\" name=\"allow_multiple\"/>
                    <label for=\"allow_multiple_1\">";
        // line 78
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_AllowGoalConvertedMoreThanOncePerVisit")), "html", null, true);
        echo "</label>
                    <br/><br/>
            </tr>
            <tr>
            </tbody>
            <tbody>
            <tr>
                <td class=\"first\">";
        // line 85
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_Optional")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_DefaultRevenue")), "html", null, true);
        echo "</td>
                <td>";
        // line 86
        echo call_user_func_array($this->env->getFilter('money')->getCallable(), array(" <input type=\"text\" name=\"revenue\" size=\"2\" value=\"0\" class=\"inp\" /> ", (isset($context["idSite"]) ? $context["idSite"] : $this->getContext($context, "idSite"))));
        echo "
                    <div class=\"entityInlineHelp\"> ";
        // line 87
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_DefaultRevenueHelp")), "html", null, true);
        echo " </div>
                </td>
            </tr>
            <tr>
            </tbody>
        </table>
        <input type=\"hidden\" name=\"methodGoalAPI\" value=\"\"/>
        <input type=\"hidden\" name=\"goalIdUpdate\" value=\"\"/>
        <input type=\"submit\" value=\"\" name=\"submit\" id=\"goal_submit\" class=\"submit\"/>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Goals/_formAddGoal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 87,  171 => 86,  155 => 78,  147 => 73,  141 => 70,  135 => 67,  126 => 61,  115 => 53,  111 => 52,  99 => 43,  95 => 42,  91 => 41,  85 => 38,  70 => 29,  64 => 26,  58 => 23,  50 => 18,  46 => 17,  41 => 15,  255 => 80,  251 => 78,  244 => 75,  242 => 74,  233 => 70,  227 => 69,  221 => 68,  215 => 67,  209 => 66,  203 => 65,  197 => 64,  191 => 63,  185 => 62,  179 => 61,  173 => 58,  169 => 57,  165 => 85,  161 => 55,  154 => 50,  148 => 47,  145 => 46,  142 => 45,  139 => 44,  136 => 43,  133 => 42,  131 => 41,  125 => 38,  121 => 37,  119 => 36,  116 => 35,  109 => 30,  103 => 28,  93 => 26,  87 => 24,  84 => 23,  76 => 32,  73 => 20,  71 => 19,  65 => 16,  61 => 15,  57 => 14,  51 => 11,  48 => 10,  42 => 7,  38 => 6,  34 => 11,  30 => 4,  26 => 6,  37 => 9,  31 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
