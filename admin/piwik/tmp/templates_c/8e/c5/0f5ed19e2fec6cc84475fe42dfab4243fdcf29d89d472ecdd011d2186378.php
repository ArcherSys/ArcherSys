<?php

/* @CoreUpdater/runUpdaterAndExit_done.twig */
class __TwigTemplate_8ec50f5ed19e2fec6cc84475fe42dfab4243fdcf29d89d472ecdd011d2186378 extends Twig_Template
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
        // line 2
        ob_start();
        // line 3
        echo "    ";
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_HelpMessageContent", "<a target=\"_blank\" href=\"?module=Proxy&action=redirect&url=http://piwik.org/faq/\">", "</a>", "</li><li>"));
        echo "
";
        $context["helpMessage"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        if ((isset($context["coreError"]) ? $context["coreError"] : $this->getContext($context, "coreError"))) {
            // line 8
            echo "    <br/>
    <br/>
    <div class=\"error\">
        <img src=\"plugins/Morpheus/images/error_medium.png\"/> ";
            // line 11
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_CriticalErrorDuringTheUpgradeProcess")), "html", null, true);
            echo "
        ";
            // line 12
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errorMessages"]) ? $context["errorMessages"] : $this->getContext($context, "errorMessages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 13
                echo "            <pre>";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</pre>
            <br/>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    </div>
    <br/>
    <p>";
            // line 18
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_HelpMessageIntroductionWhenError")), "html", null, true);
            echo "
    <ul>
        <li>";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["helpMessage"]) ? $context["helpMessage"] : $this->getContext($context, "helpMessage")), "html", null, true);
            echo "</li>
    </ul>
    </p>
    <p>";
            // line 23
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_ErrorDIYHelp")), "html", null, true);
            echo "
    <ul>
        <li>";
            // line 25
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_ErrorDIYHelp_1")), "html", null, true);
            echo "</li>
        <li>";
            // line 26
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_ErrorDIYHelp_2")), "html", null, true);
            echo "</li>
        <li>";
            // line 27
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_ErrorDIYHelp_3")), "html", null, true);
            echo " <a href='https://piwik.org/faq/how-to-update/#faq_179' target='_blank'>(see FAQ)</a></li>
        <li>";
            // line 28
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_ErrorDIYHelp_4")), "html", null, true);
            echo "</li>
        <li>";
            // line 29
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_ErrorDIYHelp_5")), "html", null, true);
            echo "</li>
    </ul>
    </p>
";
        } else {
            // line 33
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["warningMessages"]) ? $context["warningMessages"] : $this->getContext($context, "warningMessages"))) > 0)) {
                // line 34
                echo "        <div class=\"warning\">
            <p><img src=\"plugins/Morpheus/images/warning_medium.png\"/> ";
                // line 35
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_WarningMessages")), "html", null, true);
                echo "</p>
            ";
                // line 36
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["warningMessages"]) ? $context["warningMessages"] : $this->getContext($context, "warningMessages")));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 37
                    echo "                <pre>";
                    echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                    echo "</pre>
                <br/>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "        </div>
    ";
            }
            // line 42
            echo "
    ";
            // line 43
            if ((twig_length_filter($this->env, (isset($context["errorMessages"]) ? $context["errorMessages"] : $this->getContext($context, "errorMessages"))) > 0)) {
                // line 44
                echo "        <div class=\"warning\">
            <p><img src=\"plugins/Morpheus/images/error_medium.png\"/> ";
                // line 45
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_ErrorDuringPluginsUpdates")), "html", null, true);
                echo "</p>
            ";
                // line 46
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errorMessages"]) ? $context["errorMessages"] : $this->getContext($context, "errorMessages")));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 47
                    echo "                <pre>";
                    echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                    echo "</pre>
                <br/>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "
            ";
                // line 51
                if ((array_key_exists("deactivatedPlugins", $context) && (twig_length_filter($this->env, (isset($context["deactivatedPlugins"]) ? $context["deactivatedPlugins"] : $this->getContext($context, "deactivatedPlugins"))) > 0))) {
                    // line 52
                    echo "                ";
                    $context["listOfDeactivatedPlugins"] = twig_join_filter((isset($context["deactivatedPlugins"]) ? $context["deactivatedPlugins"] : $this->getContext($context, "deactivatedPlugins")), ", ");
                    // line 53
                    echo "                <p style=\"color:red;\">
                    <img src=\"plugins/Morpheus/images/error_medium.png\"/>
                    ";
                    // line 55
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_WeAutomaticallyDeactivatedTheFollowingPlugins", (isset($context["listOfDeactivatedPlugins"]) ? $context["listOfDeactivatedPlugins"] : $this->getContext($context, "listOfDeactivatedPlugins")))), "html", null, true);
                    echo "
                </p>
            ";
                }
                // line 58
                echo "        </div>
    ";
            }
            // line 60
            echo "
    ";
            // line 61
            if (((twig_length_filter($this->env, (isset($context["errorMessages"]) ? $context["errorMessages"] : $this->getContext($context, "errorMessages"))) > 0) || (twig_length_filter($this->env, (isset($context["warningMessages"]) ? $context["warningMessages"] : $this->getContext($context, "warningMessages"))) > 0))) {
                // line 62
                echo "        <br/>
        <p>";
                // line 63
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_HelpMessageIntroductionWhenWarning")), "html", null, true);
                echo "
        <ul>
            <li>";
                // line 65
                echo twig_escape_filter($this->env, (isset($context["helpMessage"]) ? $context["helpMessage"] : $this->getContext($context, "helpMessage")), "html", null, true);
                echo "</li>
        </ul>
        </p>
    ";
            } else {
                // line 69
                echo "        <p class=\"success\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_PiwikHasBeenSuccessfullyUpgraded")), "html", null, true);
                echo "</p>
        <div id=\"donate-form-container\">
            ";
                // line 71
                $this->env->loadTemplate("@CoreHome/_donate.twig")->display($context);
                // line 72
                echo "        </div>
    ";
            }
            // line 74
            echo "    <form action=\"index.php\">
        <input type=\"submit\" class=\"submit\" value=\"";
            // line 75
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ContinueToPiwik")), "html", null, true);
            echo "\"/>
    </form>
";
        }
    }

    public function getTemplateName()
    {
        return "@CoreUpdater/runUpdaterAndExit_done.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 75,  215 => 74,  211 => 72,  209 => 71,  203 => 69,  196 => 65,  191 => 63,  188 => 62,  186 => 61,  183 => 60,  179 => 58,  173 => 55,  169 => 53,  166 => 52,  164 => 51,  161 => 50,  151 => 47,  147 => 46,  143 => 45,  140 => 44,  138 => 43,  135 => 42,  131 => 40,  121 => 37,  117 => 36,  113 => 35,  110 => 34,  107 => 33,  100 => 29,  96 => 28,  92 => 27,  88 => 26,  84 => 25,  79 => 23,  73 => 20,  68 => 18,  64 => 16,  54 => 13,  50 => 12,  46 => 11,  41 => 8,  39 => 7,  36 => 6,  27 => 3,  25 => 2,);
    }
}
