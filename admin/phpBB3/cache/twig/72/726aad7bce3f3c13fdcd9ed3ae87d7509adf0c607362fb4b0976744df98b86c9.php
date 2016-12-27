<?php

/* message_body.html */
class __TwigTemplate_dda7aaccb15952334288f3704129dfc28806c82857e32552c4af2def9715307c extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "message_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<div ";
        // line 3
        if ((isset($context["S_USER_NOTICE"]) ? $context["S_USER_NOTICE"] : null)) {
            echo "class=\"successbox\"";
        } else {
            echo "class=\"errorbox\"";
        }
        echo ">
\t<h3>";
        // line 4
        echo (isset($context["MESSAGE_TITLE"]) ? $context["MESSAGE_TITLE"] : null);
        echo "</h3>
\t<p>";
        // line 5
        echo (isset($context["MESSAGE_TEXT"]) ? $context["MESSAGE_TEXT"] : null);
        echo "</p>
</div>

";
        // line 8
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "message_body.html", 8)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "message_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  46 => 5,  42 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <div <!-- IF S_USER_NOTICE -->class="successbox"<!-- ELSE -->class="errorbox"<!-- ENDIF -->>*/
/* 	<h3>{MESSAGE_TITLE}</h3>*/
/* 	<p>{MESSAGE_TEXT}</p>*/
/* </div>*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
