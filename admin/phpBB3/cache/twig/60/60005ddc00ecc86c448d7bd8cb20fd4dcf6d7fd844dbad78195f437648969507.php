<?php

/* faq_body.html */
class __TwigTemplate_736c2bc1040a93c5ede1abbddda19f7180339b3ccba2de617b090b61351fa74f extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "faq_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2 class=\"faq-title\">";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("FAQ_TITLE");
        echo "</h2>


<div class=\"panel bg1\" id=\"faqlinks\">
\t<div class=\"inner\">
\t\t<div class=\"column1\">
\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "faq_block", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["faq_block"]) {
            // line 10
            echo "\t\t\t";
            if (($this->getAttribute($context["faq_block"], "SWITCH_COLUMN", array()) || ((isset($context["SWITCH_COLUMN_MANUALLY"]) ? $context["SWITCH_COLUMN_MANUALLY"] : null) && ($this->getAttribute($context["faq_block"], "S_ROW_COUNT", array()) == 4)))) {
                // line 11
                echo "\t\t\t\t</div>

\t\t\t\t<div class=\"column2\">
\t\t\t";
            }
            // line 15
            echo "
\t\t\t<dl class=\"faq\">
\t\t\t\t<dt><strong>";
            // line 17
            echo $this->getAttribute($context["faq_block"], "BLOCK_TITLE", array());
            echo "</strong></dt>
\t\t\t\t";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["faq_block"], "faq_row", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["faq_row"]) {
                // line 19
                echo "\t\t\t\t\t<dd><a href=\"#f";
                echo $this->getAttribute($context["faq_block"], "S_ROW_COUNT", array());
                echo "r";
                echo $this->getAttribute($context["faq_row"], "S_ROW_COUNT", array());
                echo "\">";
                echo $this->getAttribute($context["faq_row"], "FAQ_QUESTION", array());
                echo "</a></dd>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq_row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "\t\t\t</dl>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq_block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t</div>
\t</div>
</div>

";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "faq_block", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["faq_block"]) {
            // line 28
            echo "\t<div class=\"panel ";
            if (($this->getAttribute($context["faq_block"], "S_ROW_COUNT", array()) % 2 == 1)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t<div class=\"content\">
\t\t\t<h2 class=\"faq-title\">";
            // line 32
            echo $this->getAttribute($context["faq_block"], "BLOCK_TITLE", array());
            echo "</h2>
\t\t\t";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["faq_block"], "faq_row", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["faq_row"]) {
                // line 34
                echo "\t\t\t\t<dl class=\"faq\">
\t\t\t\t\t<dt id=\"f";
                // line 35
                echo $this->getAttribute($context["faq_block"], "S_ROW_COUNT", array());
                echo "r";
                echo $this->getAttribute($context["faq_row"], "S_ROW_COUNT", array());
                echo "\"><strong>";
                echo $this->getAttribute($context["faq_row"], "FAQ_QUESTION", array());
                echo "</strong></dt>
\t\t\t\t\t<dd>";
                // line 36
                echo $this->getAttribute($context["faq_row"], "FAQ_ANSWER", array());
                echo "</dd>
\t\t\t\t\t<dd><a href=\"#faqlinks\" class=\"top2\">";
                // line 37
                echo $this->env->getExtension('phpbb')->lang("BACK_TO_TOP");
                echo "</a></dd>
\t\t\t\t</dl>
\t\t\t\t";
                // line 39
                if ( !$this->getAttribute($context["faq_row"], "S_LAST_ROW", array())) {
                    echo "<hr class=\"dashed\" />";
                }
                // line 40
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq_row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t</div>

\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq_block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
";
        // line 47
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "faq_body.html", 47)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 48
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "faq_body.html", 48)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "faq_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 48,  161 => 47,  158 => 46,  148 => 41,  142 => 40,  138 => 39,  133 => 37,  129 => 36,  121 => 35,  118 => 34,  114 => 33,  110 => 32,  98 => 28,  94 => 27,  88 => 23,  81 => 21,  68 => 19,  64 => 18,  60 => 17,  56 => 15,  50 => 11,  47 => 10,  43 => 9,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <h2 class="faq-title">{L_FAQ_TITLE}</h2>*/
/* */
/* */
/* <div class="panel bg1" id="faqlinks">*/
/* 	<div class="inner">*/
/* 		<div class="column1">*/
/* 		<!-- BEGIN faq_block -->*/
/* 			<!-- IF faq_block.SWITCH_COLUMN or (SWITCH_COLUMN_MANUALLY and faq_block.S_ROW_COUNT == 4) -->*/
/* 				</div>*/
/* */
/* 				<div class="column2">*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<dl class="faq">*/
/* 				<dt><strong>{faq_block.BLOCK_TITLE}</strong></dt>*/
/* 				<!-- BEGIN faq_row -->*/
/* 					<dd><a href="#f{faq_block.S_ROW_COUNT}r{faq_block.faq_row.S_ROW_COUNT}">{faq_block.faq_row.FAQ_QUESTION}</a></dd>*/
/* 				<!-- END faq_row -->*/
/* 			</dl>*/
/* 		<!-- END faq_block -->*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
/* */
/* <!-- BEGIN faq_block -->*/
/* 	<div class="panel <!-- IF faq_block.S_ROW_COUNT is odd -->bg1<!-- ELSE -->bg2<!-- ENDIF -->">*/
/* 		<div class="inner">*/
/* */
/* 		<div class="content">*/
/* 			<h2 class="faq-title">{faq_block.BLOCK_TITLE}</h2>*/
/* 			<!-- BEGIN faq_row -->*/
/* 				<dl class="faq">*/
/* 					<dt id="f{faq_block.S_ROW_COUNT}r{faq_block.faq_row.S_ROW_COUNT}"><strong>{faq_block.faq_row.FAQ_QUESTION}</strong></dt>*/
/* 					<dd>{faq_block.faq_row.FAQ_ANSWER}</dd>*/
/* 					<dd><a href="#faqlinks" class="top2">{L_BACK_TO_TOP}</a></dd>*/
/* 				</dl>*/
/* 				<!-- IF not faq_block.faq_row.S_LAST_ROW --><hr class="dashed" /><!-- ENDIF -->*/
/* 			<!-- END faq_row -->*/
/* 		</div>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* <!-- END faq_block -->*/
/* */
/* <!-- INCLUDE jumpbox.html -->*/
/* <!-- INCLUDE overall_footer.html -->*/
/* */
