<?php

/* @CorePluginsAdmin/safemode.twig */
class __TwigTemplate_cc02a41e5c546523aa847b6c0b82a9ba8744370874019fdfeb6e7159b6554a13 extends Twig_Template
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
        echo "<html>
    <head>
        <style type=\"text/css\">
            html, body {
                background-color: white;
            }
            td {
                border: 1px solid #ccc;
                border-collapse: collapse;
                padding: 5px;
            }
            table {
                border-collapse: collapse;
                border: 0px;
            }
            a {
                text-decoration: none;
            }
            a:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>

        <h1>A fatal error occurred</h1>

        <div style=\"width: 640px\">

        ";
        // line 30
        if ((!(isset($context["isAnonymousUser"]) ? $context["isAnonymousUser"] : $this->getContext($context, "isAnonymousUser")))) {
            // line 31
            echo "            <p>
                The following error just broke Piwik";
            // line 32
            if ((isset($context["showVersion"]) ? $context["showVersion"] : $this->getContext($context, "showVersion"))) {
                echo " (v";
                echo twig_escape_filter($this->env, (isset($context["piwikVersion"]) ? $context["piwikVersion"] : $this->getContext($context, "piwikVersion")), "html", null, true);
                echo ")";
            }
            echo ":
                <pre>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lastError"]) ? $context["lastError"] : $this->getContext($context, "lastError")), "message"), "html", null, true);
            echo "</pre>
                in
                <pre>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lastError"]) ? $context["lastError"] : $this->getContext($context, "lastError")), "file"), "html", null, true);
            echo " line ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lastError"]) ? $context["lastError"] : $this->getContext($context, "lastError")), "line"), "html", null, true);
            echo "</pre>
            </p>

            <hr>
            <h3>Troubleshooting</h3>

            Follow these steps to solve the issue or report it to the team:
            <ul>
                <li>
                    If you have just updated Piwik to the latest version, please try to restart your web server.
                    This will clear the PHP opcache which may solve the problem.
                </li>
                <li>
                    If this is the first time you see this error, please try refresh the page.
                </li>
                <li>
                    <strong>If this error continues to happen</strong>, we appreciate if you send the
                    <a href=\"mailto:hello@piwik.org?subject=";
            // line 52
            echo twig_escape_filter($this->env, ("Fatal error in Piwik " . twig_escape_filter($this->env, (isset($context["piwikVersion"]) ? $context["piwikVersion"] : $this->getContext($context, "piwikVersion")), "url")), "html", null, true);
            echo "&body=";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["lastError"]) ? $context["lastError"] : $this->getContext($context, "lastError")), "message"), "url"), "html", null, true);
            echo "%20in%20";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["lastError"]) ? $context["lastError"] : $this->getContext($context, "lastError")), "file"), "url"), "html", null, true);
            echo "%20";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["lastError"]) ? $context["lastError"] : $this->getContext($context, "lastError")), "line"), "url"), "html", null, true);
            echo "%20using%20PHP%20";
            echo twig_escape_filter($this->env, twig_constant("PHP_VERSION"), "html", null, true);
            echo "\">error report</a>
                    to the Piwik team.
                </li>
            </ul>
            <hr/>

        ";
        }
        // line 59
        echo "
        ";
        // line 60
        if ((isset($context["isSuperUser"]) ? $context["isSuperUser"] : $this->getContext($context, "isSuperUser"))) {
            // line 61
            echo "
            <h3>Further troubleshooting</h3>
            <p>
                If this error continues to happen, you may be able to fix this issue by disabling one or more of
                the Third-Party plugins. You can enable them again in the
                <a target=\"_blank\" href=\"index.php?module=CorePluginsAdmin&action=plugins\">Plugins</a> or <a target=\"_blank\" href=\"index.php?module=CorePluginsAdmin&action=themes\">Themes</a> page under
                settings at any time.

                ";
            // line 69
            if ((isset($context["pluginCausesIssue"]) ? $context["pluginCausesIssue"] : $this->getContext($context, "pluginCausesIssue"))) {
                // line 70
                echo "                    Based on the error message, the issue is probably caused by the plugin <strong>";
                echo twig_escape_filter($this->env, (isset($context["pluginCausesIssue"]) ? $context["pluginCausesIssue"] : $this->getContext($context, "pluginCausesIssue")), "html", null, true);
                echo "</strong>.
                ";
            }
            // line 72
            echo "            </p>
            <table>
                ";
            // line 74
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plugins"]) ? $context["plugins"] : $this->getContext($context, "plugins")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["pluginName"] => $context["plugin"]) {
                if (($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "uninstallable") && $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "activated"))) {
                    // line 75
                    echo "                    <tr ";
                    if ((0 == $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 2)) {
                        echo "style=\"background-color: #eeeeee\"";
                    }
                    echo ">
                        <td style=\"min-width:200px;\">
                            ";
                    // line 77
                    echo twig_escape_filter($this->env, (isset($context["pluginName"]) ? $context["pluginName"] : $this->getContext($context, "pluginName")), "html", null, true);
                    echo "
                        </td>
                        <td>
                            <a href=\"index.php?module=CorePluginsAdmin&action=deactivate&pluginName=";
                    // line 80
                    echo twig_escape_filter($this->env, (isset($context["pluginName"]) ? $context["pluginName"] : $this->getContext($context, "pluginName")), "html", null, true);
                    echo "&nonce=";
                    echo twig_escape_filter($this->env, (isset($context["deactivateNonce"]) ? $context["deactivateNonce"] : $this->getContext($context, "deactivateNonce")), "html", null, true);
                    echo "\"
                               target=\"_blank\">deactivate</a>
                        </td>
                    </tr>
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['pluginName'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "            </table>

            ";
            // line 87
            $context["uninstalledPluginsFound"] = false;
            // line 88
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plugins"]) ? $context["plugins"] : $this->getContext($context, "plugins")));
            foreach ($context['_seq'] as $context["pluginName"] => $context["plugin"]) {
                if (($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "uninstallable") && (!$this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "activated")))) {
                    // line 89
                    echo "                ";
                    $context["uninstalledPluginsFound"] = true;
                    // line 90
                    echo "            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['pluginName'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "
            ";
            // line 92
            if ((isset($context["uninstalledPluginsFound"]) ? $context["uninstalledPluginsFound"] : $this->getContext($context, "uninstalledPluginsFound"))) {
                // line 93
                echo "
                <p>
                    If this error still occurs after disabling all plugins, you might want to consider uninstalling some
                    plugins. Keep in mind: The plugin will be completely removed from your platform.
                </p>

                <table>
                    ";
                // line 100
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["plugins"]) ? $context["plugins"] : $this->getContext($context, "plugins")));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                foreach ($context['_seq'] as $context["pluginName"] => $context["plugin"]) {
                    if (($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "uninstallable") && (!$this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "activated")))) {
                        // line 101
                        echo "                        <tr ";
                        if ((0 == $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 2)) {
                            echo "style=\"background-color: #eeeeee\"";
                        }
                        echo ">
                            <td style=\"min-width:200px;\">
                                ";
                        // line 103
                        echo twig_escape_filter($this->env, (isset($context["pluginName"]) ? $context["pluginName"] : $this->getContext($context, "pluginName")), "html", null, true);
                        echo "
                            </td>
                            <td>
                                <a href=\"index.php?module=CorePluginsAdmin&action=uninstall&pluginName=";
                        // line 106
                        echo twig_escape_filter($this->env, (isset($context["pluginName"]) ? $context["pluginName"] : $this->getContext($context, "pluginName")), "html", null, true);
                        echo "&nonce=";
                        echo twig_escape_filter($this->env, (isset($context["uninstallNonce"]) ? $context["uninstallNonce"] : $this->getContext($context, "uninstallNonce")), "html", null, true);
                        echo "\"
                                   target=\"_blank\" onclick=\"return confirm('";
                        // line 107
                        echo twig_escape_filter($this->env, twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_UninstallConfirm", (isset($context["pluginName"]) ? $context["pluginName"] : $this->getContext($context, "pluginName")))), "js"), "html", null, true);
                        echo "')\">uninstall</a>
                            </td>
                        </tr>
                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['pluginName'], $context['plugin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                echo "                </table>
            ";
            }
            // line 113
            echo "
        ";
        } elseif ((isset($context["isAnonymousUser"]) ? $context["isAnonymousUser"] : $this->getContext($context, "isAnonymousUser"))) {
            // line 115
            echo "
            <p>Please contact the system administrator, or login to Piwik to learn more.</p>

        ";
        } else {
            // line 119
            echo "            <p>
                If this error continues to happen you may want to send an
                <a href=\"mailto:";
            // line 121
            echo twig_escape_filter($this->env, (isset($context["emailSuperUser"]) ? $context["emailSuperUser"] : $this->getContext($context, "emailSuperUser")), "html", null, true);
            echo "?subject=";
            echo twig_escape_filter($this->env, ("Fatal error in Piwik " . twig_escape_filter($this->env, (isset($context["piwikVersion"]) ? $context["piwikVersion"] : $this->getContext($context, "piwikVersion")), "url")), "html", null, true);
            echo "&body=";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["lastError"]) ? $context["lastError"] : $this->getContext($context, "lastError")), "message"), "url"), "html", null, true);
            echo "%20in%20";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["lastError"]) ? $context["lastError"] : $this->getContext($context, "lastError")), "file"), "url"), "html", null, true);
            echo "%20";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute((isset($context["lastError"]) ? $context["lastError"] : $this->getContext($context, "lastError")), "line"), "url"), "html", null, true);
            echo "%20using%20PHP%20";
            echo twig_escape_filter($this->env, twig_constant("PHP_VERSION"), "html", null, true);
            echo "\">error report</a>
                to your system administrator.
            </p>
        ";
        }
        // line 125
        echo "
        </div>

    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "@CorePluginsAdmin/safemode.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 125,  276 => 121,  272 => 119,  266 => 115,  262 => 113,  258 => 111,  244 => 107,  238 => 106,  232 => 103,  224 => 101,  213 => 100,  204 => 93,  202 => 92,  199 => 91,  192 => 90,  189 => 89,  183 => 88,  181 => 87,  177 => 85,  160 => 80,  154 => 77,  146 => 75,  135 => 74,  131 => 72,  125 => 70,  123 => 69,  113 => 61,  111 => 60,  108 => 59,  90 => 52,  68 => 35,  63 => 33,  55 => 32,  52 => 31,  50 => 30,  19 => 1,);
    }
}
