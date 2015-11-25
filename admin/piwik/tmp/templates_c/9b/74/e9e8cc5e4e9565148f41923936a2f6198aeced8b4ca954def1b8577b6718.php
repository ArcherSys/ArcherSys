<?php

/* @LanguagesManager/getLanguagesSelector.twig */
class __TwigTemplate_9b74e9e8cc5e4e9565148f41923936a2f6198aeced8b4ca954def1b8577b6718 extends Twig_Template
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
        echo "<span class=\"topBarElem\">
    <div class=\"languageSelection\"
         menu-title=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["currentLanguageName"]) ? $context["currentLanguageName"] : $this->getContext($context, "currentLanguageName")), "html_attr");
        echo "\"
         piwik-menudropdown>
        <a class=\"item\"
            href=\"?module=Proxy&amp;action=redirect&amp;url=http://piwik.org/translations/\">";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("LanguagesManager_AboutPiwikTranslations")), "html", null, true);
        echo "</a>
        ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : $this->getContext($context, "languages")));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 8
            echo "            <a class=\"item ";
            if (($this->getAttribute((isset($context["language"]) ? $context["language"] : $this->getContext($context, "language")), "code") == (isset($context["currentLanguageCode"]) ? $context["currentLanguageCode"] : $this->getContext($context, "currentLanguageCode")))) {
                echo "active";
            }
            echo "\"
               value=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["language"]) ? $context["language"] : $this->getContext($context, "language")), "code"), "html", null, true);
            echo "\"
               title=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["language"]) ? $context["language"] : $this->getContext($context, "language")), "name"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["language"]) ? $context["language"] : $this->getContext($context, "language")), "english_name"), "html", null, true);
            echo ")\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["language"]) ? $context["language"] : $this->getContext($context, "language")), "name"), "html", null, true);
            echo "</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
        <form action=\"index.php?module=LanguagesManager&amp;action=saveLanguage\" method=\"post\">
            <input type=\"hidden\" name=\"language\" id=\"language\">
            ";
        // line 16
        echo "            ";
        if (array_key_exists("token_auth", $context)) {
            echo "<input type=\"hidden\" name=\"token_auth\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["token_auth"]) ? $context["token_auth"] : $this->getContext($context, "token_auth")), "html", null, true);
            echo "\"/>";
        }
        // line 17
        echo "        </form>
    </div>
</span>";
    }

    public function getTemplateName()
    {
        return "@LanguagesManager/getLanguagesSelector.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 17,  65 => 16,  60 => 12,  48 => 10,  44 => 9,  37 => 8,  33 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }
}
