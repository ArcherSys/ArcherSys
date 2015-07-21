<?php

/* @CoreHome/_topBarTopMenu.twig */
class __TwigTemplate_df7a3be0f764e9515bc84019a9bcfaf67db8a07909b4ebcaa3f9b227ef635271 extends Twig_Template
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
        echo "<div id=\"topRightBar\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topMenu"]) ? $context["topMenu"] : $this->getContext($context, "topMenu")));
        foreach ($context['_seq'] as $context["label"] => $context["menu"]) {
            // line 3
            echo "        ";
            if ($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "_html", array(), "any", true, true)) {
                // line 4
                echo "            ";
                echo $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "_html");
                echo "
        ";
            } elseif ((($this->getAttribute($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "_url"), "module") == (isset($context["currentModule"]) ? $context["currentModule"] : $this->getContext($context, "currentModule"))) && (twig_test_empty($this->getAttribute($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "_url"), "action")) || ($this->getAttribute($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "_url"), "action") == (isset($context["currentAction"]) ? $context["currentAction"] : $this->getContext($context, "currentAction")))))) {
                // line 6
                echo "            <span class=\"topBarElem topBarElemActive\"><strong>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))), "html", null, true);
                echo "</strong></span>
        ";
            } else {
                // line 8
                echo "            <span class=\"topBarElem\" ";
                if ($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "_tooltip", array(), "any", true, true)) {
                    echo "title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "_tooltip"), "html", null, true);
                    echo "\"";
                }
                echo ">
                <a id=\"topmenu-";
                // line 9
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "_url"), "module")), "html", null, true);
                echo "\" href=\"index.php";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), array($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "_url"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))), "html", null, true);
                echo "</a>
            </span>
        ";
            }
            // line 12
            echo "        |
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
    ";
        // line 15
        ob_start();
        // line 16
        echo "    ";
        if ((!twig_test_empty((isset($context["userAlias"]) ? $context["userAlias"] : $this->getContext($context, "userAlias"))))) {
            // line 17
            echo "        ";
            echo (isset($context["userAlias"]) ? $context["userAlias"] : $this->getContext($context, "userAlias"));
            echo "
    ";
        } else {
            // line 19
            echo "        ";
            echo (isset($context["userLogin"]) ? $context["userLogin"] : $this->getContext($context, "userLogin"));
            echo "
    ";
        }
        // line 21
        echo "    ";
        $context["helloAlias"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        echo "
    ";
        // line 32
        echo "
    <span class=\"topBarElem\">
        <div id=\"userMenu\"
             tooltip=\"";
        // line 35
        echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), array(call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_HelloUser", trim((isset($context["helloAlias"]) ? $context["helloAlias"] : $this->getContext($context, "helloAlias")))))));
        echo "\"
             menu-title=\"";
        // line 36
        echo twig_escape_filter($this->env, trim((isset($context["helloAlias"]) ? $context["helloAlias"] : $this->getContext($context, "helloAlias"))), "html", null, true);
        echo "\"
             piwik-menudropdown>

            ";
        // line 39
        if (((isset($context["userLogin"]) ? $context["userLogin"] : $this->getContext($context, "userLogin")) != "anonymous")) {
            // line 40
            echo "                ";
            if (((array_key_exists("isAdminLayout", $context) && ((isset($context["currentModule"]) ? $context["currentModule"] : $this->getContext($context, "currentModule")) == "UsersManager")) && ((isset($context["currentAction"]) ? $context["currentAction"] : $this->getContext($context, "currentAction")) == "userSettings"))) {
                // line 41
                echo "                    <a class=\"item active\" href=\"index.php?module=CoreAdminHome\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Settings")), "html", null, true);
                echo "</a>
                ";
            } else {
                // line 43
                echo "                    <a class=\"item\" href=\"index.php?module=CoreAdminHome\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Settings")), "html", null, true);
                echo "</a>
                ";
            }
            // line 45
            echo "            ";
        }
        // line 46
        echo "
            ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userMenu"]) ? $context["userMenu"] : $this->getContext($context, "userMenu")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["lev1UserLabel"] => $context["lev1UserMenu"]) {
            if ((twig_slice($this->env, (isset($context["lev1UserLabel"]) ? $context["lev1UserLabel"] : $this->getContext($context, "lev1UserLabel")), 0, 1) != "_")) {
                // line 48
                echo "
                ";
                // line 49
                if ((((isset($context["userLogin"]) ? $context["userLogin"] : $this->getContext($context, "userLogin")) != "anonymous") || (!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first")))) {
                    // line 50
                    echo "                    <hr class=\"item separator\"/>
                ";
                }
                // line 52
                echo "
                ";
                // line 53
                if (($this->getAttribute((isset($context["lev1UserMenu"]) ? $context["lev1UserMenu"] : null), "_hasSubmenu", array(), "any", true, true) && $this->getAttribute((isset($context["lev1UserMenu"]) ? $context["lev1UserMenu"] : $this->getContext($context, "lev1UserMenu")), "_hasSubmenu"))) {
                    // line 54
                    echo "                    ";
                    if ((isset($context["lev1UserLabel"]) ? $context["lev1UserLabel"] : $this->getContext($context, "lev1UserLabel"))) {
                        // line 55
                        echo "                        <a class=\"item disabled category\">";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array((isset($context["lev1UserLabel"]) ? $context["lev1UserLabel"] : $this->getContext($context, "lev1UserLabel")))), "html", null, true);
                        echo "</a>
                    ";
                    }
                    // line 57
                    echo "
                    ";
                    // line 58
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["lev1UserMenu"]) ? $context["lev1UserMenu"] : $this->getContext($context, "lev1UserMenu")));
                    foreach ($context['_seq'] as $context["lev2Label"] => $context["lev2Menu"]) {
                        if ((twig_slice($this->env, (isset($context["lev2Label"]) ? $context["lev2Label"] : $this->getContext($context, "lev2Label")), 0, 1) != "_")) {
                            // line 59
                            echo "                        ";
                            echo $this->getAttribute($this, "userMenuItem", array(0 => (isset($context["lev2Label"]) ? $context["lev2Label"] : $this->getContext($context, "lev2Label")), 1 => (isset($context["lev2Menu"]) ? $context["lev2Menu"] : $this->getContext($context, "lev2Menu")), 2 => (isset($context["currentModule"]) ? $context["currentModule"] : $this->getContext($context, "currentModule")), 3 => (isset($context["currentAction"]) ? $context["currentAction"] : $this->getContext($context, "currentAction"))), "method");
                            echo "
                    ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['lev2Label'], $context['lev2Menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 61
                    echo "                ";
                } else {
                    // line 62
                    echo "                    ";
                    echo $this->getAttribute($this, "userMenuItem", array(0 => (isset($context["lev1UserLabel"]) ? $context["lev1UserLabel"] : $this->getContext($context, "lev1UserLabel")), 1 => (isset($context["lev1UserMenu"]) ? $context["lev1UserMenu"] : $this->getContext($context, "lev1UserMenu")), 2 => (isset($context["currentModule"]) ? $context["currentModule"] : $this->getContext($context, "currentModule")), 3 => (isset($context["currentAction"]) ? $context["currentAction"] : $this->getContext($context, "currentAction"))), "method");
                    echo "
                ";
                }
                // line 64
                echo "
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['lev1UserLabel'], $context['lev1UserMenu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "        </div>
    </span>

    | <span class=\"topBarElem\">
        ";
        // line 70
        if (((isset($context["userLogin"]) ? $context["userLogin"] : $this->getContext($context, "userLogin")) == "anonymous")) {
            // line 71
            echo "            <a href='index.php?module=";
            echo twig_escape_filter($this->env, (isset($context["loginModule"]) ? $context["loginModule"] : $this->getContext($context, "loginModule")), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 73
            echo "            <a href='index.php?module=";
            echo twig_escape_filter($this->env, (isset($context["loginModule"]) ? $context["loginModule"] : $this->getContext($context, "loginModule")), "html", null, true);
            echo "&amp;action=logout'>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Logout")), "html", null, true);
            echo "</a>
        ";
        }
        // line 75
        echo "    </span>
</div>
";
    }

    // line 23
    public function getuserMenuItem($_label = null, $_menu = null, $_currentModule = null, $_currentAction = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $_label,
            "menu" => $_menu,
            "currentModule" => $_currentModule,
            "currentAction" => $_currentAction,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 24
            echo "
        <a class=\"item ";
            // line 25
            if ((($this->getAttribute($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "_url"), "module") == (isset($context["currentModule"]) ? $context["currentModule"] : $this->getContext($context, "currentModule"))) && (twig_test_empty($this->getAttribute($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "_url"), "action")) || ($this->getAttribute($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "_url"), "action") == (isset($context["currentAction"]) ? $context["currentAction"] : $this->getContext($context, "currentAction")))))) {
                echo "active";
            }
            echo "\"
           href=\"index.php";
            // line 26
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), array($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "_url"))), "html", null, true);
            echo "\"
           id=\"usermenu-";
            // line 27
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "_url"), "module")), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "_url", array(), "any", false, true), "action", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "_url", array(), "any", false, true), "action"), "index")) : ("index"))), "html", null, true);
            echo "\"
           ";
            // line 28
            if ($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "_tooltip", array(), "any", true, true)) {
                echo "title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "_tooltip"), "html", null, true);
                echo "\"";
            }
            // line 29
            echo "                >";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))), "html", null, true);
            echo "</a>

    ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@CoreHome/_topBarTopMenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 29,  266 => 28,  260 => 27,  256 => 26,  250 => 25,  247 => 24,  233 => 23,  227 => 75,  219 => 73,  211 => 71,  209 => 70,  203 => 66,  192 => 64,  186 => 62,  183 => 61,  173 => 59,  168 => 58,  165 => 57,  159 => 55,  156 => 54,  154 => 53,  151 => 52,  147 => 50,  145 => 49,  142 => 48,  125 => 45,  119 => 43,  113 => 41,  102 => 36,  98 => 35,  93 => 32,  90 => 22,  81 => 19,  72 => 16,  70 => 15,  67 => 14,  60 => 12,  26 => 3,  49 => 7,  33 => 4,  52 => 17,  21 => 3,  24 => 3,  144 => 38,  138 => 36,  131 => 47,  128 => 46,  108 => 39,  104 => 26,  100 => 25,  96 => 24,  87 => 21,  85 => 21,  80 => 20,  77 => 15,  71 => 14,  68 => 13,  62 => 12,  59 => 8,  31 => 3,  27 => 4,  23 => 3,  19 => 1,  143 => 46,  140 => 45,  136 => 35,  133 => 36,  130 => 35,  123 => 22,  121 => 31,  116 => 29,  114 => 17,  112 => 28,  110 => 40,  105 => 13,  92 => 23,  89 => 8,  86 => 7,  78 => 48,  75 => 17,  73 => 45,  69 => 44,  63 => 9,  58 => 38,  53 => 10,  50 => 9,  48 => 15,  44 => 8,  41 => 8,  39 => 28,  35 => 6,  32 => 26,  30 => 7,  22 => 2,  56 => 35,  54 => 11,  51 => 10,  47 => 8,  45 => 7,  42 => 6,  40 => 5,  37 => 10,  34 => 3,  29 => 4,);
    }
}
