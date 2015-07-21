<?php

/* _piwikTag.twig */
class __TwigTemplate_6228b4106f5a148a8a1e445a258ce864df9a2ce623ee780c42fe3deb97b656a1 extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        if ((((isset($context["piwikUrl"]) ? $context["piwikUrl"] : $this->getContext($context, "piwikUrl")) == "http://demo.piwik.org/") || (isset($context["enableMeasurePiwikForSiteId"]) ? $context["enableMeasurePiwikForSiteId"] : $this->getContext($context, "enableMeasurePiwikForSiteId")))) {
            // line 4
            echo "    <div class=\"clear\"></div>
    <!-- Piwik -->
    <script type=\"text/javascript\">
    var _paq = _paq || [];
    _paq.push(['setTrackerUrl', 'piwik.php']);
    _paq.push(['setSiteId', ";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["enableMeasurePiwikForSiteId"]) ? $context["enableMeasurePiwikForSiteId"] : $this->getContext($context, "enableMeasurePiwikForSiteId")), "html", null, true);
            echo "]);
    _paq.push(['setCookieDomain', '*.piwik.org']);
    // set the domain the visitor landed on, in the Custom Variable
    _paq.push([function () {
    if (!this.getCustomVariable(1)) {
        this.setCustomVariable(1, \"Domain landed\", document.domain);
    }
    }]);
    // Set the selected Piwik language in a custom var
    _paq.push(['setCustomVariable', 2, \"Demo language\", piwik.languageName]);
    _paq.push(['setDocumentTitle', document.domain + \"/\" + document.title]);
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    _paq.push(['enableJSErrorTracking']);

    (function() {
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
    g.defer=true; g.async=true; g.src='js/piwik.js'; s.parentNode.insertBefore(g,s);
    })();
    </script>
    <!-- End Piwik Code -->
";
        }
    }

    public function getTemplateName()
    {
        return "_piwikTag.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  144 => 38,  138 => 36,  131 => 33,  128 => 32,  108 => 27,  104 => 26,  100 => 25,  96 => 24,  87 => 22,  85 => 21,  80 => 20,  77 => 15,  71 => 14,  68 => 13,  62 => 12,  59 => 11,  31 => 9,  27 => 4,  23 => 3,  19 => 2,  143 => 46,  140 => 45,  136 => 35,  133 => 36,  130 => 35,  123 => 22,  121 => 31,  116 => 29,  114 => 17,  112 => 28,  110 => 15,  105 => 13,  92 => 23,  89 => 8,  86 => 7,  78 => 48,  75 => 47,  73 => 45,  69 => 44,  63 => 41,  58 => 38,  53 => 10,  50 => 9,  48 => 32,  44 => 8,  41 => 7,  39 => 28,  35 => 6,  32 => 26,  30 => 7,  22 => 3,  56 => 35,  54 => 11,  51 => 10,  47 => 8,  45 => 7,  42 => 6,  40 => 5,  37 => 4,  34 => 3,  29 => 2,);
    }
}
