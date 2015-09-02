<?php

/* @Goals/_addEditGoal.twig */
class __TwigTemplate_e5c62a3d8b9a24fb2f8c7348aeae89fa1cc60c09595cdaa0a2fcb8c5b5f7fea5 extends Twig_Template
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
        if (array_key_exists("onlyShowAddNewGoal", $context)) {
            // line 2
            echo "    <h2 piwik-enriched-headline>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_AddNewGoal")), "html", null, true);
            echo "</h2>
    <p>";
            // line 3
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_NewGoalIntro")), "html", null, true);
            echo "</p>
    <p>";
            // line 4
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_NewGoalDescription")), "html", null, true);
            echo "
        ";
            // line 5
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_NewWhatDoYouWantUsersToDo")), "html", null, true);
            echo "
        ";
            // line 6
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_NewGoalYouWillBeAbleTo")), "html", null, true);
            echo "</p>
    <p>";
            // line 7
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_LearnMoreAboutGoalTrackingDocumentation", "<a href='?module=Proxy&action=redirect&url=http://piwik.org/docs/tracking-goals-web-analytics/' target='_blank'>", "</a>"));
            echo "
    </p>
";
        } else {
            // line 10
            echo "    <div class=\"clear\"></div>
    <h2 piwik-enriched-headline>";
            // line 11
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_GoalsManagement")), "html", null, true);
            echo "</h2>
    <div class=\"entityList\">
        <ul class='listCircle'>
            <li><a onclick='' name='linkAddNewGoal'>";
            // line 14
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_CreateNewGOal")), "html", null, true);
            echo "</a></li>
            <li><a onclick='' name='linkEditGoals'>";
            // line 15
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_ViewAndEditGoals")), "html", null, true);
            echo "</a></li>
            <li>";
            // line 16
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_LearnMoreAboutGoalTrackingDocumentation", "<a href='?module=Proxy&action=redirect&url=http://piwik.org/docs/tracking-goals-web-analytics/' target='_blank'>", "</a>"));
            echo "</li>

            <li>
                ";
            // line 19
            if ((!(isset($context["ecommerceEnabled"]) ? $context["ecommerceEnabled"] : $this->getContext($context, "ecommerceEnabled")))) {
                // line 20
                echo "                    ";
                ob_start();
                // line 21
                echo "                        <a href='";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "SitesManager", "action" => "index"))), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SitesManager_WebsitesManagement")), "html", null, true);
                echo "</a>
                    ";
                $context["websiteManageText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 23
                echo "                    ";
                ob_start();
                // line 24
                echo "                        <a href=\"http://piwik.org/docs/ecommerce-analytics/\" target=\"_blank\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_EcommerceReports")), "html", null, true);
                echo "</a>
                    ";
                $context["ecommerceReportText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 26
                echo "                    ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_Optional")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_Ecommerce")), "html", null, true);
                echo ": ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_YouCanEnableEcommerceReports", (isset($context["ecommerceReportText"]) ? $context["ecommerceReportText"] : $this->getContext($context, "ecommerceReportText")), (isset($context["websiteManageText"]) ? $context["websiteManageText"] : $this->getContext($context, "websiteManageText"))));
                echo "
                ";
            } else {
                // line 28
                echo "                    ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SitesManager_PiwikOffersEcommerceAnalytics", "<a href=\"http://piwik.org/docs/ecommerce-analytics/\" target=\"_blank\">", "</a>"));
                echo "
                ";
            }
            // line 30
            echo "            </li>
        </ul>
    </div>
    <br/>
";
        }
        // line 35
        echo "
";
        // line 36
        $context["ajax"] = $this->env->loadTemplate("ajaxMacros.twig");
        // line 37
        echo $context["ajax"]->geterrorDiv();
        echo "
";
        // line 38
        echo $context["ajax"]->getloadingDiv("goalAjaxLoading");
        echo "

<div class=\"entityContainer\">
    ";
        // line 41
        if ((!array_key_exists("onlyShowAddNewGoal", $context))) {
            // line 42
            echo "        ";
            $this->env->loadTemplate("@Goals/_listGoalEdit.twig")->display($context);
            // line 43
            echo "    ";
        }
        // line 44
        echo "    ";
        $this->env->loadTemplate("@Goals/_formAddGoal.twig")->display($context);
        // line 45
        echo "    ";
        if ((!array_key_exists("onlyShowAddNewGoal", $context))) {
            // line 46
            echo "        <div class='entityCancel' style='display:none;'>
            ";
            // line 47
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OrCancel", "<a class='entityCancelLink'>", "</a>"));
            echo "
        </div>
    ";
        }
        // line 50
        echo "    <a id='bottom'></a>
</div>
<br/><br/>
<script type=\"text/javascript\">
    var mappingMatchTypeName = {
        \"url\": \"";
        // line 55
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_URL")), "html", null, true);
        echo "\",
        \"title\": \"";
        // line 56
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_PageTitle")), "html", null, true);
        echo "\",
        \"file\": \"";
        // line 57
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_Filename")), "html", null, true);
        echo "\",
        \"external_website\": \"";
        // line 58
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_ExternalWebsiteUrl")), "html", null, true);
        echo "\"
    };
    var mappingMatchTypeExamples = {
        \"url\": \"";
        // line 61
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ForExampleShort")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_Contains", "'checkout/confirmation'")), "html", null, true);
        echo " \\
\t\t<br />";
        // line 62
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ForExampleShort")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_IsExactly", "'http://example.com/thank-you.html'")), "html", null, true);
        echo " \\
\t\t<br />";
        // line 63
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ForExampleShort")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_MatchesExpression", "'(.*)\\/demo\\/(.*)'")), "html", null, true);
        echo "\",
        \"title\": \"";
        // line 64
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ForExampleShort")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_Contains", "'Order confirmation'")), "html", null, true);
        echo "\",
        \"file\": \"";
        // line 65
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ForExampleShort")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_Contains", "'files/brochure.pdf'")), "html", null, true);
        echo " \\
\t\t<br />";
        // line 66
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ForExampleShort")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_IsExactly", "'http://example.com/files/brochure.pdf'")), "html", null, true);
        echo " \\
\t\t<br />";
        // line 67
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ForExampleShort")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_MatchesExpression", "'(.*)\\.zip'")), "html", null, true);
        echo "\",
        \"external_website\": \"";
        // line 68
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ForExampleShort")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_Contains", "'amazon.com'")), "html", null, true);
        echo " \\
\t\t<br />";
        // line 69
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ForExampleShort")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_IsExactly", "'http://mypartner.com/landing.html'")), "html", null, true);
        echo " \\
\t\t<br />";
        // line 70
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ForExampleShort")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Goals_MatchesExpression", "'http://www.amazon.com\\/(.*)\\/yourAffiliateId'")), "html", null, true);
        echo "\"
    };
    bindGoalForm();

    ";
        // line 74
        if ((!array_key_exists("onlyShowAddNewGoal", $context))) {
            // line 75
            echo "        piwik.goals = ";
            echo (isset($context["goalsJSON"]) ? $context["goalsJSON"] : $this->getContext($context, "goalsJSON"));
            echo ";
        bindListGoalEdit();
    ";
        } else {
            // line 78
            echo "        initAndShowAddGoalForm();
    ";
        }
        // line 80
        echo "
</script>
";
    }

    public function getTemplateName()
    {
        return "@Goals/_addEditGoal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 80,  251 => 78,  244 => 75,  242 => 74,  233 => 70,  227 => 69,  221 => 68,  215 => 67,  209 => 66,  203 => 65,  197 => 64,  191 => 63,  185 => 62,  179 => 61,  173 => 58,  169 => 57,  165 => 56,  161 => 55,  154 => 50,  148 => 47,  145 => 46,  142 => 45,  139 => 44,  136 => 43,  133 => 42,  131 => 41,  125 => 38,  121 => 37,  119 => 36,  116 => 35,  109 => 30,  103 => 28,  93 => 26,  87 => 24,  84 => 23,  76 => 21,  73 => 20,  71 => 19,  65 => 16,  61 => 15,  57 => 14,  51 => 11,  48 => 10,  42 => 7,  38 => 6,  34 => 5,  30 => 4,  26 => 3,  37 => 9,  31 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
