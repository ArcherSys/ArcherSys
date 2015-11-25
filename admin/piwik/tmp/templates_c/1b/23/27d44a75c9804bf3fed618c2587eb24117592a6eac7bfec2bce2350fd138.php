<?php

/* @CorePluginsAdmin/macros.twig */
class __TwigTemplate_1b2327d44a75c9804bf3fed618c2587eb24117592a6eac7bfec2bce2350fd138 extends Twig_Template
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
        // line 54
        echo "
";
        // line 58
        echo "
";
        // line 65
        echo "
";
        // line 95
        echo "
";
        // line 109
        echo "
";
        // line 128
        echo "
";
    }

    // line 1
    public function gettablePluginUpdates($_pluginsHavingUpdate = null, $_nonce = null, $_isTheme = null)
    {
        $context = $this->env->mergeGlobals(array(
            "pluginsHavingUpdate" => $_pluginsHavingUpdate,
            "nonce" => $_nonce,
            "isTheme" => $_isTheme,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "
    <div class='entityContainer'>
        <table class=\"dataTable entityTable\">
            <thead>
            <tr>
                <th>";
            // line 7
            if ((isset($context["isTheme"]) ? $context["isTheme"] : $this->getContext($context, "isTheme"))) {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Theme")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Plugin")), "html", null, true);
            }
            echo "</th>
                <th class=\"num\">";
            // line 8
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Version")), "html", null, true);
            echo "</th>
                <th>";
            // line 9
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Description")), "html", null, true);
            echo "</th>
                <th class=\"status\">";
            // line 10
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Status")), "html", null, true);
            echo "</th>
                <th class=\"action-links\">";
            // line 11
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Action")), "html", null, true);
            echo "</th>
            </tr>
            </thead>
            <tbody id=\"plugins\">
            ";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pluginsHavingUpdate"]) ? $context["pluginsHavingUpdate"] : $this->getContext($context, "pluginsHavingUpdate")));
            foreach ($context['_seq'] as $context["name"] => $context["plugin"]) {
                // line 16
                echo "                <tr ";
                if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "isActivated")) {
                    echo "class=\"active-plugin\"";
                } else {
                    echo "class=\"inactive-plugin\"";
                }
                echo ">
                    <td class=\"name\">
                        <a href=\"javascript:void(0);\" data-pluginName=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "name"), "html_attr");
                echo "\">
                            ";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "name"), "html", null, true);
                echo "
                        </a>
                    </td>
                    <td class=\"vers\">
                        ";
                // line 23
                if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "repositoryChangelogUrl")) {
                    // line 24
                    echo "                            <a href=\"javascript:void(0);\" title=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Changelog")), "html", null, true);
                    echo "\" data-activePluginTab=\"changelog\" data-pluginName=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "name"), "html_attr");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "currentVersion"), "html", null, true);
                    echo " => ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "latestVersion"), "html", null, true);
                    echo "</a>
                        ";
                } else {
                    // line 26
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "currentVersion"), "html", null, true);
                    echo " => ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "latestVersion"), "html", null, true);
                    echo "
                        ";
                }
                // line 28
                echo "                    </td>
                    <td class=\"desc\">
                        ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "description"), "html", null, true);
                echo "
                        ";
                // line 31
                echo $this->getAttribute($this, "missingRequirementsPleaseUpdateNotice", array(0 => (isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin"))), "method");
                echo "
                    </td>
                    <td class=\"status\">
                        ";
                // line 34
                if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "isActivated")) {
                    // line 35
                    echo "                            ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Active")), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 37
                    echo "                            ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Inactive")), "html", null, true);
                    echo "
                        ";
                }
                // line 39
                echo "                    </td>
                    <td class=\"togl action-links\">
                        ";
                // line 41
                if ((0 == twig_length_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "missingRequirements")))) {
                    // line 42
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("action" => "updatePlugin", "pluginName" => $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "name"), "nonce" => (isset($context["nonce"]) ? $context["nonce"] : $this->getContext($context, "nonce"))))), "html", null, true);
                    echo "\">Update</a>
                        ";
                } else {
                    // line 44
                    echo "                            -
                        ";
                }
                // line 46
                echo "                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "            </tbody>
        </table>
    </div>

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 55
    public function getpluginDeveloper($_owner = null)
    {
        $context = $this->env->mergeGlobals(array(
            "owner" => $_owner,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 56
            echo "    ";
            if (("piwik" == (isset($context["owner"]) ? $context["owner"] : $this->getContext($context, "owner")))) {
                echo "<img title=\"Piwik\" alt=\"Piwik\" style=\"padding-bottom:2px;height:11px;\" src=\"plugins/Morpheus/images/logo-marketplace.png\"/>";
            } else {
                echo twig_escape_filter($this->env, (isset($context["owner"]) ? $context["owner"] : $this->getContext($context, "owner")), "html", null, true);
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 59
    public function getfeaturedIcon($_align = "")
    {
        $context = $this->env->mergeGlobals(array(
            "align" => $_align,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 60
            echo "    <img class=\"featuredIcon\"
         title=\"";
            // line 61
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_FeaturedPlugin")), "html", null, true);
            echo "\"
         src=\"plugins/CorePluginsAdmin/images/rating_important.png\"
         align=\"";
            // line 63
            echo twig_escape_filter($this->env, (isset($context["align"]) ? $context["align"] : $this->getContext($context, "align")), "html", null, true);
            echo "\" />
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 66
    public function getpluginsFilter($_isTheme = null, $_isMarketplaceEnabled = null)
    {
        $context = $this->env->mergeGlobals(array(
            "isTheme" => $_isTheme,
            "isMarketplaceEnabled" => $_isMarketplaceEnabled,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 67
            echo "
    <p class=\"pluginsFilter entityContainer\">
        <span class=\"origin\">
            <strong>";
            // line 70
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Origin")), "html", null, true);
            echo "</strong>
            <a data-filter-origin=\"all\" href=\"#\" class=\"active\">";
            // line 71
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_All")), "html", null, true);
            echo "<span class=\"counter\"></span></a> |
            <a data-filter-origin=\"core\" href=\"#\">";
            // line 72
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_OriginCore")), "html", null, true);
            echo "<span class=\"counter\"></span></a> |
            <a data-filter-origin=\"noncore\" href=\"#\">";
            // line 73
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_OriginThirdParty")), "html", null, true);
            echo "<span class=\"counter\"></span></a>
        </span>

        <span class=\"status\">
            <strong>";
            // line 77
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Status")), "html", null, true);
            echo "</strong>
            <a data-filter-status=\"all\" href=\"#\" class=\"active\">";
            // line 78
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_All")), "html", null, true);
            echo "<span class=\"counter\"></span></a> |
            <a data-filter-status=\"active\" href=\"#\">";
            // line 79
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Active")), "html", null, true);
            echo "<span class=\"counter\"></span></a> |
            <a data-filter-status=\"inactive\" href=\"#\">";
            // line 80
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Inactive")), "html", null, true);
            echo "<span class=\"counter\"></span></a>
        </span>

        ";
            // line 83
            if ((isset($context["isMarketplaceEnabled"]) ? $context["isMarketplaceEnabled"] : $this->getContext($context, "isMarketplaceEnabled"))) {
                // line 84
                echo "            <span class=\"getNewPlugins\">
                ";
                // line 85
                if ((isset($context["isTheme"]) ? $context["isTheme"] : $this->getContext($context, "isTheme"))) {
                    // line 86
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("action" => "browseThemes", "sort" => ""))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_InstallNewThemes")), "html", null, true);
                    echo "</a>
                ";
                } else {
                    // line 88
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("action" => "browsePlugins", "sort" => ""))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_InstallNewPlugins")), "html", null, true);
                    echo "</a>
                ";
                }
                // line 90
                echo "            </span>
        ";
            }
            // line 92
            echo "    </p>

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 96
    public function getmissingRequirementsPleaseUpdateNotice($_plugin = null)
    {
        $context = $this->env->mergeGlobals(array(
            "plugin" => $_plugin,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 97
            echo "    ";
            if (($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "missingRequirements") && (0 < twig_length_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "missingRequirements"))))) {
                // line 98
                echo "        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "missingRequirements"));
                foreach ($context['_seq'] as $context["_key"] => $context["req"]) {
                    // line 99
                    echo "<p class=\"missingRequirementsNotice\">
                ";
                    // line 100
                    $context["requirement"] = twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["req"]) ? $context["req"] : $this->getContext($context, "req")), "requirement"));
                    // line 101
                    echo "                ";
                    if (("Php" == (isset($context["requirement"]) ? $context["requirement"] : $this->getContext($context, "requirement")))) {
                        // line 102
                        echo "                    ";
                        $context["requirement"] = "PHP";
                        // line 103
                        echo "                ";
                    }
                    // line 104
                    echo "                ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_MissingRequirementsNotice", (isset($context["requirement"]) ? $context["requirement"] : $this->getContext($context, "requirement")), $this->getAttribute((isset($context["req"]) ? $context["req"] : $this->getContext($context, "req")), "actualVersion"), $this->getAttribute((isset($context["req"]) ? $context["req"] : $this->getContext($context, "req")), "requiredVersion"))), "html", null, true);
                    echo "
            </p>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['req'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 110
    public function getmissingRequirementsInfo($_pluginName = null, $_metadata = null, $_missingRequirements = null, $_marketplacePluginNames = null)
    {
        $context = $this->env->mergeGlobals(array(
            "pluginName" => $_pluginName,
            "metadata" => $_metadata,
            "missingRequirements" => $_missingRequirements,
            "marketplacePluginNames" => $_marketplacePluginNames,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 111
            echo "    ";
            $context["causedBy"] = "";
            // line 112
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["missingRequirements"]) ? $context["missingRequirements"] : $this->getContext($context, "missingRequirements")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["dependency"]) {
                // line 113
                echo "        ";
                $context["causedBy"] = ((((isset($context["causedBy"]) ? $context["causedBy"] : $this->getContext($context, "causedBy")) . twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["dependency"]) ? $context["dependency"] : $this->getContext($context, "dependency")), "requirement"))) . " ") . $this->getAttribute((isset($context["dependency"]) ? $context["dependency"] : $this->getContext($context, "dependency")), "causedBy"));
                // line 114
                echo "        ";
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                    // line 115
                    echo "            ";
                    $context["causedBy"] = ((isset($context["causedBy"]) ? $context["causedBy"] : $this->getContext($context, "causedBy")) . ", ");
                    // line 116
                    echo "        ";
                }
                // line 117
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dependency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "
    ";
            // line 119
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_PluginRequirement", (isset($context["pluginName"]) ? $context["pluginName"] : $this->getContext($context, "pluginName")), (isset($context["causedBy"]) ? $context["causedBy"] : $this->getContext($context, "causedBy")))), "html", null, true);
            echo "

    ";
            // line 121
            if ((((array_key_exists("metadata", $context) && $this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : null), "support", array(), "any", true, true)) && $this->getAttribute($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : $this->getContext($context, "metadata")), "support"), "email")) && !twig_in_filter((isset($context["pluginName"]) ? $context["pluginName"] : $this->getContext($context, "pluginName")), (isset($context["marketplacePluginNames"]) ? $context["marketplacePluginNames"] : $this->getContext($context, "marketplacePluginNames"))))) {
                // line 125
                echo "        ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_EmailToEnquireUpdatedVersion", (((("<a href=\"mailto:" . twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : $this->getContext($context, "metadata")), "support"), "email"), "html_attr")) . "\">") . $this->getAttribute($this->getAttribute((isset($context["metadata"]) ? $context["metadata"] : $this->getContext($context, "metadata")), "support"), "email")) . "</a>"), (isset($context["pluginName"]) ? $context["pluginName"] : $this->getContext($context, "pluginName"))));
                echo "
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 129
    public function gettablePlugins($_pluginsInfo = null, $_pluginNamesHavingSettings = null, $_activateNonce = null, $_deactivateNonce = null, $_uninstallNonce = null, $_isTheme = null, $_marketplacePluginNames = null, $_displayAdminLinks = null)
    {
        $context = $this->env->mergeGlobals(array(
            "pluginsInfo" => $_pluginsInfo,
            "pluginNamesHavingSettings" => $_pluginNamesHavingSettings,
            "activateNonce" => $_activateNonce,
            "deactivateNonce" => $_deactivateNonce,
            "uninstallNonce" => $_uninstallNonce,
            "isTheme" => $_isTheme,
            "marketplacePluginNames" => $_marketplacePluginNames,
            "displayAdminLinks" => $_displayAdminLinks,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 130
            echo "
<div id=\"confirmUninstallPlugin\" class=\"ui-confirm\">

    <h2 id=\"uninstallPluginConfirm\">";
            // line 133
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_UninstallConfirm")), "html", null, true);
            echo "</h2>
    <input role=\"yes\" type=\"button\" value=\"";
            // line 134
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "\"/>
    <input role=\"no\" type=\"button\" value=\"";
            // line 135
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "\"/>

</div>

<div class='entityContainer'>
    <table class=\"dataTable entityTable\">
        <thead>
        <tr>
            <th>";
            // line 143
            if ((isset($context["isTheme"]) ? $context["isTheme"] : $this->getContext($context, "isTheme"))) {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Theme")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Plugin")), "html", null, true);
            }
            echo "</th>
            <th>";
            // line 144
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Description")), "html", null, true);
            echo "</th>
            <th class=\"status\">";
            // line 145
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Status")), "html", null, true);
            echo "</th>
            ";
            // line 146
            if ((isset($context["displayAdminLinks"]) ? $context["displayAdminLinks"] : $this->getContext($context, "displayAdminLinks"))) {
                // line 147
                echo "            <th class=\"action-links\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Action")), "html", null, true);
                echo "</th>
            ";
            }
            // line 149
            echo "        </tr>
        </thead>
        <tbody id=\"plugins\">
        ";
            // line 152
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pluginsInfo"]) ? $context["pluginsInfo"] : $this->getContext($context, "pluginsInfo")));
            foreach ($context['_seq'] as $context["name"] => $context["plugin"]) {
                // line 153
                echo "            ";
                $context["isDefaultTheme"] = ((isset($context["isTheme"]) ? $context["isTheme"] : $this->getContext($context, "isTheme")) && ((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) == "Morpheus"));
                // line 154
                echo "            ";
                if ((($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "alwaysActivated", array(), "any", true, true) && (!$this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "alwaysActivated"))) || (isset($context["isTheme"]) ? $context["isTheme"] : $this->getContext($context, "isTheme")))) {
                    // line 155
                    echo "                <tr ";
                    if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "activated")) {
                        echo "class=\"active-plugin\"";
                    } else {
                        echo "class=\"inactive-plugin\"";
                    }
                    echo " data-filter-status=\"";
                    if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "activated")) {
                        echo "active";
                    } else {
                        echo "inactive";
                    }
                    echo "\" data-filter-origin=\"";
                    if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "isCorePlugin")) {
                        echo "core";
                    } else {
                        echo "noncore";
                    }
                    echo "\">
                    <td class=\"name\" style=\"white-space:nowrap;\">
                        <a name=\"";
                    // line 157
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html_attr");
                    echo "\"></a>
                        ";
                    // line 158
                    if (((!$this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "isCorePlugin")) && twig_in_filter((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), (isset($context["marketplacePluginNames"]) ? $context["marketplacePluginNames"] : $this->getContext($context, "marketplacePluginNames"))))) {
                        // line 159
                        echo "<a href=\"javascript:void(0);\"
                               data-pluginName=\"";
                        // line 160
                        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html_attr");
                        echo "\"
                               >";
                        // line 161
                        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                        echo "</a>";
                    } else {
                        // line 163
                        echo "                            ";
                        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                        echo "
                        ";
                    }
                    // line 165
                    echo "                        <span class=\"plugin-version\" ";
                    if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "isCorePlugin")) {
                        echo "title=\"";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_CorePluginTooltip")), "html", null, true);
                        echo "\"";
                    }
                    echo ">(";
                    if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "isCorePlugin")) {
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_OriginCore")), "html", null, true);
                    } else {
                        echo "v";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "info"), "version"), "html", null, true);
                    }
                    echo ")</span>

                        ";
                    // line 167
                    if (twig_in_filter((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), (isset($context["pluginNamesHavingSettings"]) ? $context["pluginNamesHavingSettings"] : $this->getContext($context, "pluginNamesHavingSettings")))) {
                        // line 168
                        echo "                            <br /><br />
                            <a href=\"";
                        // line 169
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "CoreAdminHome", "action" => "pluginSettings"))), "html", null, true);
                        echo "#";
                        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html_attr");
                        echo "\" class=\"settingsLink\">";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Settings")), "html", null, true);
                        echo "</a>
                        ";
                    }
                    // line 171
                    echo "                    </td>
                    <td class=\"desc\">
                        <div class=\"plugin-desc-missingrequirements\">
                            ";
                    // line 174
                    if (($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "missingRequirements", array(), "any", true, true) && $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "missingRequirements"))) {
                        // line 175
                        echo "                                ";
                        echo $this->getAttribute($this, "missingRequirementsInfo", array(0 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), 1 => $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "info"), 2 => $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "missingRequirements"), 3 => (isset($context["marketplacePluginNames"]) ? $context["marketplacePluginNames"] : $this->getContext($context, "marketplacePluginNames"))), "method");
                        echo "
                                <br />
                            ";
                    }
                    // line 178
                    echo "                        </div>
                        <div class=\"plugin-desc-text\">

                            ";
                    // line 181
                    echo nl2br($this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "info"), "description"));
                    echo "

                            ";
                    // line 183
                    if (((!twig_test_empty((($this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "info", array(), "any", false, true), "homepage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "info", array(), "any", false, true), "homepage"))) : ("")))) && !twig_in_filter($this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "info"), "homepage"), array(0 => "http://piwik.org", 1 => "http://www.piwik.org", 2 => "http://piwik.org/", 3 => "http://www.piwik.org/")))) {
                        // line 186
                        echo "                            <span class=\"plugin-homepage\">
                                <a href=\"";
                        // line 187
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "info"), "homepage"), "html", null, true);
                        echo "\">(";
                        echo strtr(call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_PluginHomepage")), array(" " => "&nbsp;"));
                        echo ")</a>
                            </span>
                            ";
                    }
                    // line 190
                    echo "                        </div>
                        ";
                    // line 191
                    if ($this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "info", array(), "any", false, true), "license", array(), "any", true, true)) {
                        // line 192
                        echo "                        <div class=\"plugin-license\">
                            ";
                        // line 193
                        if ($this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "info", array(), "any", false, true), "license_homepage", array(), "any", true, true)) {
                            echo "<a title=\"";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_LicenseHomepage")), "html", null, true);
                            echo "\" target=\"_blank\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "info"), "license_homepage"), "html", null, true);
                            echo "\">";
                        }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "info"), "license"), "html", null, true);
                        if ($this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "info", array(), "any", false, true), "license_homepage", array(), "any", true, true)) {
                            echo "</a>";
                        }
                        // line 194
                        echo "                        </div>
                        ";
                    }
                    // line 196
                    echo "                        ";
                    if ($this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "info", array(), "any", false, true), "authors", array(), "any", true, true)) {
                        // line 197
                        echo "                        <div class=\"plugin-author\">
                            <cite>By
                            ";
                        // line 199
                        if ($this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "info", array(), "any", false, true), "authors", array(), "any", true, true)) {
                            // line 200
                            ob_start();
                            // line 201
                            echo "                            ";
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "info"), "authors"));
                            $context['loop'] = array(
                              'parent' => $context['_parent'],
                              'index0' => 0,
                              'index'  => 1,
                              'first'  => true,
                            );
                            foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                                if ($this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "name")) {
                                    // line 202
                                    echo "                                ";
                                    if ($this->getAttribute((isset($context["author"]) ? $context["author"] : null), "homepage", array(), "any", true, true)) {
                                        // line 203
                                        echo "                                    <a title=\"";
                                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_AuthorHomepage")), "html", null, true);
                                        echo "\" href=\"";
                                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "homepage"), "html", null, true);
                                        echo "\" target=\"_blank\">";
                                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "name"), "html", null, true);
                                        echo "</a>
                                ";
                                    } else {
                                        // line 205
                                        echo "                                    ";
                                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "name"), "html", null, true);
                                        echo "
                                ";
                                    }
                                    // line 207
                                    echo "                                ";
                                    if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") < twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "info"), "authors")))) {
                                        // line 208
                                        echo "                                        ,
                                    ";
                                    }
                                    // line 210
                                    echo "                            ";
                                    ++$context['loop']['index0'];
                                    ++$context['loop']['index'];
                                    $context['loop']['first'] = false;
                                }
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 211
                            echo "                            ";
                            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                        }
                        // line 212
                        echo ".</cite>
                        </div>
                        ";
                    }
                    // line 215
                    echo "                    </td>
                    <td class=\"status\" ";
                    // line 216
                    if ((isset($context["isDefaultTheme"]) ? $context["isDefaultTheme"] : $this->getContext($context, "isDefaultTheme"))) {
                        echo "style=\"border-left-width:0px;\"";
                    }
                    echo ">
                        ";
                    // line 217
                    if ((!(isset($context["isDefaultTheme"]) ? $context["isDefaultTheme"] : $this->getContext($context, "isDefaultTheme")))) {
                        // line 219
                        if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "activated")) {
                            // line 220
                            echo "                            ";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Active")), "html", null, true);
                            echo "
                        ";
                        } else {
                            // line 222
                            echo "                            ";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Inactive")), "html", null, true);
                            echo "
                            ";
                            // line 223
                            if (($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "uninstallable") && (isset($context["displayAdminLinks"]) ? $context["displayAdminLinks"] : $this->getContext($context, "displayAdminLinks")))) {
                                echo " <br/> - <a data-pluginName=\"";
                                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html_attr");
                                echo "\" class=\"uninstall\" href='index.php?module=CorePluginsAdmin&action=uninstall&pluginName=";
                                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                                echo "&nonce=";
                                echo twig_escape_filter($this->env, (isset($context["uninstallNonce"]) ? $context["uninstallNonce"] : $this->getContext($context, "uninstallNonce")), "html", null, true);
                                echo "'>";
                                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_ActionUninstall")), "html", null, true);
                                echo "</a>";
                            }
                            // line 224
                            echo "                        ";
                        }
                    }
                    // line 227
                    echo "                    </td>

                    ";
                    // line 229
                    if ((isset($context["displayAdminLinks"]) ? $context["displayAdminLinks"] : $this->getContext($context, "displayAdminLinks"))) {
                        // line 230
                        echo "                    <td class=\"togl action-links\" ";
                        if ((isset($context["isDefaultTheme"]) ? $context["isDefaultTheme"] : $this->getContext($context, "isDefaultTheme"))) {
                            echo "style=\"border-left-width:0px;\"";
                        }
                        echo ">
                        ";
                        // line 231
                        if ((!(isset($context["isDefaultTheme"]) ? $context["isDefaultTheme"] : $this->getContext($context, "isDefaultTheme")))) {
                            // line 233
                            if (($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : null), "invalid", array(), "any", true, true) || $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "alwaysActivated"))) {
                                // line 234
                                echo "                            -
                        ";
                            } else {
                                // line 236
                                echo "                            ";
                                if ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "activated")) {
                                    // line 237
                                    echo "                                <a href='index.php?module=CorePluginsAdmin&action=deactivate&pluginName=";
                                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                                    echo "&nonce=";
                                    echo twig_escape_filter($this->env, (isset($context["deactivateNonce"]) ? $context["deactivateNonce"] : $this->getContext($context, "deactivateNonce")), "html", null, true);
                                    echo "'>";
                                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Deactivate")), "html", null, true);
                                    echo "</a>
                            ";
                                } elseif ($this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "missingRequirements")) {
                                    // line 239
                                    echo "                                -
                            ";
                                } else {
                                    // line 241
                                    echo "                                <a href='index.php?module=CorePluginsAdmin&action=activate&pluginName=";
                                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                                    echo "&nonce=";
                                    echo twig_escape_filter($this->env, (isset($context["activateNonce"]) ? $context["activateNonce"] : $this->getContext($context, "activateNonce")), "html", null, true);
                                    echo "'>";
                                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Activate")), "html", null, true);
                                    echo "</a>
                            ";
                                }
                                // line 243
                                echo "                        ";
                            }
                        }
                        // line 246
                        echo "                    </td>
                    ";
                    }
                    // line 248
                    echo "                </tr>
            ";
                }
                // line 250
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 251
            echo "        </tbody>
    </table>
</div>

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@CorePluginsAdmin/macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  885 => 251,  879 => 250,  875 => 248,  871 => 246,  867 => 243,  857 => 241,  853 => 239,  843 => 237,  840 => 236,  836 => 234,  834 => 233,  832 => 231,  825 => 230,  823 => 229,  819 => 227,  815 => 224,  803 => 223,  798 => 222,  792 => 220,  790 => 219,  788 => 217,  782 => 216,  779 => 215,  774 => 212,  770 => 211,  760 => 210,  756 => 208,  753 => 207,  747 => 205,  737 => 203,  734 => 202,  722 => 201,  720 => 200,  718 => 199,  714 => 197,  711 => 196,  707 => 194,  695 => 193,  692 => 192,  690 => 191,  687 => 190,  679 => 187,  676 => 186,  674 => 183,  669 => 181,  664 => 178,  657 => 175,  655 => 174,  650 => 171,  641 => 169,  638 => 168,  636 => 167,  619 => 165,  613 => 163,  609 => 161,  605 => 160,  602 => 159,  600 => 158,  596 => 157,  574 => 155,  571 => 154,  568 => 153,  564 => 152,  559 => 149,  553 => 147,  551 => 146,  547 => 145,  543 => 144,  535 => 143,  524 => 135,  520 => 134,  516 => 133,  511 => 130,  493 => 129,  478 => 125,  476 => 121,  471 => 119,  468 => 118,  454 => 117,  451 => 116,  448 => 115,  445 => 114,  442 => 113,  424 => 112,  421 => 111,  407 => 110,  395 => 107,  386 => 104,  383 => 103,  380 => 102,  377 => 101,  375 => 100,  372 => 99,  367 => 98,  364 => 97,  353 => 96,  340 => 92,  336 => 90,  328 => 88,  320 => 86,  318 => 85,  315 => 84,  313 => 83,  307 => 80,  303 => 79,  299 => 78,  295 => 77,  288 => 73,  284 => 72,  280 => 71,  276 => 70,  271 => 67,  259 => 66,  246 => 63,  241 => 61,  238 => 60,  227 => 59,  211 => 56,  200 => 55,  185 => 49,  177 => 46,  173 => 44,  167 => 42,  165 => 41,  161 => 39,  155 => 37,  149 => 35,  147 => 34,  141 => 31,  137 => 30,  133 => 28,  125 => 26,  113 => 24,  111 => 23,  100 => 18,  90 => 16,  79 => 11,  75 => 10,  71 => 9,  52 => 2,  39 => 1,  34 => 128,  31 => 109,  28 => 95,  22 => 58,  19 => 54,  98 => 49,  95 => 48,  88 => 50,  86 => 15,  81 => 46,  74 => 41,  72 => 40,  65 => 37,  63 => 36,  59 => 7,  29 => 8,  20 => 1,  129 => 40,  126 => 39,  122 => 37,  120 => 36,  112 => 35,  109 => 34,  104 => 19,  99 => 29,  97 => 28,  94 => 27,  89 => 24,  80 => 22,  76 => 21,  69 => 39,  67 => 8,  64 => 16,  58 => 13,  54 => 12,  49 => 11,  43 => 9,  41 => 8,  36 => 6,  33 => 5,  30 => 4,  25 => 65,);
    }
}
