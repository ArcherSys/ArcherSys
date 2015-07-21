<?php

/* _iframeBuster.twig */
class __TwigTemplate_a9f3119c81b882c7fab125855d806bda6909d91ca3c8f40f46404ab21d937b4b extends Twig_Template
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
        if ((array_key_exists("enableFrames", $context) && ((isset($context["enableFrames"]) ? $context["enableFrames"] : $this->getContext($context, "enableFrames")) == false))) {
            // line 2
            echo "    <script type=\"text/javascript\">
        \$(function () {
        \$('body').css(\"display\", \"none\");
        if (self == top) {
            var theBody = document.getElementsByTagName('body')[0];
            theBody.style.display = 'block';
        } else { top.location = self.location; }
    });
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "_iframeBuster.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  28 => 5,  24 => 3,  27 => 4,  21 => 2,  365 => 159,  359 => 156,  356 => 155,  350 => 152,  347 => 151,  345 => 150,  338 => 148,  331 => 146,  324 => 144,  316 => 139,  310 => 136,  299 => 128,  292 => 124,  285 => 120,  281 => 119,  270 => 111,  266 => 110,  260 => 109,  252 => 104,  248 => 103,  242 => 100,  235 => 96,  231 => 95,  228 => 94,  222 => 92,  220 => 91,  217 => 90,  209 => 87,  206 => 86,  204 => 85,  201 => 84,  197 => 82,  186 => 80,  182 => 79,  179 => 78,  177 => 77,  174 => 76,  171 => 75,  168 => 74,  165 => 73,  159 => 68,  150 => 64,  146 => 62,  144 => 61,  141 => 60,  138 => 59,  132 => 57,  129 => 56,  127 => 55,  124 => 54,  120 => 53,  113 => 52,  104 => 49,  101 => 48,  95 => 46,  93 => 45,  86 => 40,  84 => 39,  79 => 37,  75 => 36,  57 => 20,  55 => 19,  49 => 16,  46 => 15,  41 => 13,  39 => 12,  37 => 11,  29 => 9,  19 => 1,);
    }
}
