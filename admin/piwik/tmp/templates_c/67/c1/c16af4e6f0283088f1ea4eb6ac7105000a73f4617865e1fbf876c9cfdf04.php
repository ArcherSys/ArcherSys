<?php

/* @CoreUpdater/runUpdaterAndExit_welcome.twig */
class __TwigTemplate_67c1c16af4e6f0283088f1ea4eb6ac7105000a73f4617865e1fbf876c9cfdf04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@CoreUpdater/layout.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@CoreUpdater/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "<span style=\"float:right;\">";
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.topBar"));
        echo "</span>
";
        // line 6
        ob_start();
        // line 7
        echo "    ";
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_HelpMessageContent", "<a target=\"_blank\" href=\"?module=Proxy&action=redirect&url=http://piwik.org/faq/\">", "</a>", "</li><li>"));
        echo "
";
        $context["helpMessage"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        echo "
";
        // line 10
        if ((isset($context["coreError"]) ? $context["coreError"] : $this->getContext($context, "coreError"))) {
            // line 11
            echo "    <br/>
    <br/>
    <div class=\"error\">
        <img src=\"plugins/Morpheus/images/error_medium.png\"/> ";
            // line 14
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_CriticalErrorDuringTheUpgradeProcess")), "html", null, true);
            echo "
        ";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errorMessages"]) ? $context["errorMessages"] : $this->getContext($context, "errorMessages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 16
                echo "            <pre>";
                echo (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"));
                echo "</pre>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    </div>
    <br/>
    <p>";
            // line 20
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_HelpMessageIntroductionWhenError")), "html", null, true);
            echo "
    <ul>
        <li>";
            // line 22
            echo (isset($context["helpMessage"]) ? $context["helpMessage"] : $this->getContext($context, "helpMessage"));
            echo "</li>
    </ul>
    </p>
";
        } else {
            // line 26
            echo "    ";
            if ((((isset($context["coreToUpdate"]) ? $context["coreToUpdate"] : $this->getContext($context, "coreToUpdate")) || (twig_length_filter($this->env, (isset($context["pluginNamesToUpdate"]) ? $context["pluginNamesToUpdate"] : $this->getContext($context, "pluginNamesToUpdate"))) > 0)) || (twig_length_filter($this->env, (isset($context["dimensionsToUpdate"]) ? $context["dimensionsToUpdate"] : $this->getContext($context, "dimensionsToUpdate"))) > 0))) {
                // line 27
                echo "        <p style='font-size:110%;padding-top:1em;'><strong id='titleUpdate'>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_DatabaseUpgradeRequired")), "html", null, true);
                echo "</strong></p>
        <p>";
                // line 28
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_YourDatabaseIsOutOfDate")), "html", null, true);
                echo "</p>
        ";
                // line 29
                if ((isset($context["coreToUpdate"]) ? $context["coreToUpdate"] : $this->getContext($context, "coreToUpdate"))) {
                    // line 30
                    echo "            <p>";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_PiwikWillBeUpgradedFromVersionXToVersionY", (isset($context["current_piwik_version"]) ? $context["current_piwik_version"] : $this->getContext($context, "current_piwik_version")), (isset($context["new_piwik_version"]) ? $context["new_piwik_version"] : $this->getContext($context, "new_piwik_version")))), "html", null, true);
                    echo "</p>
        ";
                }
                // line 32
                echo "
        ";
                // line 33
                if ((twig_length_filter($this->env, (isset($context["pluginNamesToUpdate"]) ? $context["pluginNamesToUpdate"] : $this->getContext($context, "pluginNamesToUpdate"))) > 0)) {
                    // line 34
                    echo "            ";
                    $context["listOfPlugins"] = twig_join_filter((isset($context["pluginNamesToUpdate"]) ? $context["pluginNamesToUpdate"] : $this->getContext($context, "pluginNamesToUpdate")), ", ");
                    // line 35
                    echo "            <p>";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_TheFollowingPluginsWillBeUpgradedX", (isset($context["listOfPlugins"]) ? $context["listOfPlugins"] : $this->getContext($context, "listOfPlugins")))), "html", null, true);
                    echo "</p>
        ";
                }
                // line 37
                echo "
        ";
                // line 38
                if ((twig_length_filter($this->env, (isset($context["dimensionsToUpdate"]) ? $context["dimensionsToUpdate"] : $this->getContext($context, "dimensionsToUpdate"))) > 0)) {
                    // line 39
                    echo "            ";
                    $context["listOfDimensions"] = twig_join_filter((isset($context["dimensionsToUpdate"]) ? $context["dimensionsToUpdate"] : $this->getContext($context, "dimensionsToUpdate")), ", ");
                    // line 40
                    echo "            <p>";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_TheFollowingDimensionsWillBeUpgradedX", (isset($context["listOfDimensions"]) ? $context["listOfDimensions"] : $this->getContext($context, "listOfDimensions")))), "html", null, true);
                    echo "</p>
        ";
                }
                // line 42
                echo "
        <h3 id='titleUpdate'>";
                // line 43
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_NoteForLargePiwikInstances")), "html", null, true);
                echo "</h3>
        ";
                // line 44
                if ((isset($context["isMajor"]) ? $context["isMajor"] : $this->getContext($context, "isMajor"))) {
                    // line 45
                    echo "            <p class=\"warning normalFontSize\">
                ";
                    // line 46
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_MajorUpdateWarning1")), "html", null, true);
                    echo "<br/>
                ";
                    // line 47
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_MajorUpdateWarning2")), "html", null, true);
                    echo "
            </p>
        ";
                }
                // line 50
                echo "        <ul>
            <li>";
                // line 51
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_TheUpgradeProcessMayFailExecuteCommand", (isset($context["commandUpgradePiwik"]) ? $context["commandUpgradePiwik"] : $this->getContext($context, "commandUpgradePiwik"))));
                echo "</li>
            <li>";
                // line 52
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_HighTrafficPiwikServerEnableMaintenance", "<a target=\"_blank\" href=\"?module=Proxy&action=redirect&url=http%3A%2F%2Fpiwik.org%2Ffaq%2Fhow-to%2F%23faq_111\">", "</a>"));
                echo "</li>
            <li>";
                // line 53
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_YouCouldManuallyExecuteSqlQueries")), "html", null, true);
                echo "<br/>
                <a href=\"#titleUpdate\" id=\"showSql\" style=\"margin-left:20px;\">› ";
                // line 54
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_ClickHereToViewSqlQueries")), "html", null, true);
                echo "</a>

                <div id=\"sqlQueries\" style=\"display:none;\">
                    <br/>
                    <code>
                        # ";
                // line 59
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_NoteItIsExpectedThatQueriesFail")), "html", null, true);
                echo "<br/><br/>
                        ";
                // line 60
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["queries"]) ? $context["queries"] : $this->getContext($context, "queries")));
                foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
                    // line 61
                    echo "                        &nbsp;&nbsp;&nbsp;";
                    echo twig_escape_filter($this->env, (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "html", null, true);
                    echo "
                            <br/>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['query'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "                    </code>
                </div>
            </li>
        </ul>
        <br/>
        <br/>
        <h4 id=\"titleUpdate\">";
                // line 70
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_ReadyToGo")), "html", null, true);
                echo "</h4>
        <p>";
                // line 71
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_TheUpgradeProcessMayTakeAWhilePleaseBePatient")), "html", null, true);
                echo "</p>
    ";
            }
            // line 73
            echo "
    ";
            // line 74
            if ((twig_length_filter($this->env, (isset($context["warningMessages"]) ? $context["warningMessages"] : $this->getContext($context, "warningMessages"))) > 0)) {
                // line 75
                echo "        <p><em>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["warningMessages"]) ? $context["warningMessages"] : $this->getContext($context, "warningMessages")), 0, array(), "array"), "html", null, true);
                echo "</em>
            ";
                // line 76
                if ((twig_length_filter($this->env, (isset($context["warningMessages"]) ? $context["warningMessages"] : $this->getContext($context, "warningMessages"))) > 1)) {
                    // line 77
                    echo "                <button id=\"more-results\" class=\"ui-button ui-state-default ui-corner-all\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Details")), "html", null, true);
                    echo "</button>
            ";
                }
                // line 79
                echo "        </p>
    ";
            }
            // line 81
            echo "
    ";
            // line 82
            if ((((isset($context["coreToUpdate"]) ? $context["coreToUpdate"] : $this->getContext($context, "coreToUpdate")) || (twig_length_filter($this->env, (isset($context["pluginNamesToUpdate"]) ? $context["pluginNamesToUpdate"] : $this->getContext($context, "pluginNamesToUpdate"))) > 0)) || (twig_length_filter($this->env, (isset($context["dimensionsToUpdate"]) ? $context["dimensionsToUpdate"] : $this->getContext($context, "dimensionsToUpdate"))) > 0))) {
                // line 83
                echo "        <br/>
        <form action=\"index.php\" id=\"upgradeCorePluginsForm\">
            <input type=\"hidden\" name=\"updateCorePlugins\" value=\"1\"/>
            ";
                // line 86
                if ((twig_length_filter($this->env, (isset($context["queries"]) ? $context["queries"] : $this->getContext($context, "queries"))) == 1)) {
                    // line 87
                    echo "                <input type=\"submit\" class=\"submit\" value=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ContinueToPiwik")), "html", null, true);
                    echo "\"/>
            ";
                } else {
                    // line 89
                    echo "                <input type=\"submit\" class=\"submit\" value=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_UpgradePiwik")), "html", null, true);
                    echo "\"/>
            ";
                }
                // line 91
                echo "        </form>
    ";
            } else {
                // line 93
                echo "        ";
                if ((twig_length_filter($this->env, (isset($context["warningMessages"]) ? $context["warningMessages"] : $this->getContext($context, "warningMessages"))) == 0)) {
                    // line 94
                    echo "            <p class=\"success\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_PiwikHasBeenSuccessfullyUpgraded")), "html", null, true);
                    echo "</p>
        ";
                }
                // line 96
                echo "        <br/>
        <form action=\"index.php\">
            <input type=\"submit\" class=\"submit\" value=\"";
                // line 98
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ContinueToPiwik")), "html", null, true);
                echo "\"/>
        </form>
    ";
            }
        }
        // line 102
        echo "
";
        // line 103
        $this->env->loadTemplate("@Installation/_integrityDetails.twig")->display($context);
        // line 104
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "@CoreUpdater/runUpdaterAndExit_welcome.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 104,  290 => 103,  287 => 102,  280 => 98,  276 => 96,  270 => 94,  267 => 93,  263 => 91,  257 => 89,  251 => 87,  249 => 86,  244 => 83,  242 => 82,  239 => 81,  235 => 79,  229 => 77,  227 => 76,  222 => 75,  220 => 74,  217 => 73,  212 => 71,  208 => 70,  200 => 64,  190 => 61,  186 => 60,  182 => 59,  174 => 54,  170 => 53,  166 => 52,  162 => 51,  159 => 50,  153 => 47,  149 => 46,  146 => 45,  144 => 44,  140 => 43,  137 => 42,  131 => 40,  128 => 39,  126 => 38,  123 => 37,  117 => 35,  114 => 34,  112 => 33,  109 => 32,  103 => 30,  101 => 29,  97 => 28,  92 => 27,  89 => 26,  82 => 22,  77 => 20,  73 => 18,  64 => 16,  60 => 15,  56 => 14,  51 => 11,  49 => 10,  46 => 9,  40 => 7,  38 => 6,  33 => 5,  31 => 4,  28 => 3,);
    }
}
