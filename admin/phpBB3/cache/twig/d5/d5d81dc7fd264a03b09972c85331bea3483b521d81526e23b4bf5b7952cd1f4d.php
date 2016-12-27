<?php

/* ucp_pm_message_header.html */
class __TwigTemplate_294a16059a70e4bcd29304d19e9575765d010c8b96fbf80241a90a501de57546 extends Twig_Template
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
        echo "<h2>";
        echo $this->env->getExtension('phpbb')->lang("TITLE");
        if ((isset($context["CUR_FOLDER_NAME"]) ? $context["CUR_FOLDER_NAME"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " ";
            echo (isset($context["CUR_FOLDER_NAME"]) ? $context["CUR_FOLDER_NAME"] : null);
        }
        echo "</h2>

<form id=\"viewfolder\" method=\"post\" action=\"";
        // line 3
        echo (isset($context["S_PM_ACTION"]) ? $context["S_PM_ACTION"] : null);
        echo "\">

<div class=\"panel\">
\t<div class=\"inner\">
\t";
        // line 7
        if (((isset($context["FOLDER_STATUS"]) ? $context["FOLDER_STATUS"] : null) && ((isset($context["FOLDER_MAX_MESSAGES"]) ? $context["FOLDER_MAX_MESSAGES"] : null) != 0))) {
            echo "<p>";
            echo (isset($context["FOLDER_STATUS"]) ? $context["FOLDER_STATUS"] : null);
            echo "</p>";
        }
        // line 8
        echo "
\t<div class=\"action-bar top\">
\t";
        // line 10
        if ((((isset($context["U_POST_REPLY_PM"]) ? $context["U_POST_REPLY_PM"] : null) || (isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null)) || (isset($context["U_FORWARD_PM"]) ? $context["U_FORWARD_PM"] : null))) {
            // line 11
            echo "\t\t<div class=\"buttons\">
\t\t\t";
            // line 12
            if ((isset($context["U_POST_REPLY_PM"]) ? $context["U_POST_REPLY_PM"] : null)) {
                // line 13
                echo "\t\t\t\t<a title=\"";
                echo $this->env->getExtension('phpbb')->lang("POST_REPLY_PM");
                echo "\" href=\"";
                echo (isset($context["U_POST_REPLY_PM"]) ? $context["U_POST_REPLY_PM"] : null);
                echo "\" class=\"button icon-button pmreply-icon\">
\t\t\t\t\t";
                // line 14
                echo $this->env->getExtension('phpbb')->lang("BUTTON_PM_REPLY");
                echo "
\t\t\t\t</a>
\t\t\t";
            } elseif (            // line 16
(isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null)) {
                // line 17
                echo "\t\t\t\t<a href=\"";
                echo (isset($context["U_POST_NEW_TOPIC"]) ? $context["U_POST_NEW_TOPIC"] : null);
                echo "\" accesskey=\"n\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("UCP_PM_COMPOSE");
                echo "\" class=\"button icon-button newpm-icon\">
\t\t\t\t\t";
                // line 18
                echo $this->env->getExtension('phpbb')->lang("BUTTON_PM_NEW");
                echo "
\t\t\t\t</a>
\t\t\t";
            }
            // line 21
            echo "\t\t\t";
            if ((isset($context["U_FORWARD_PM"]) ? $context["U_FORWARD_PM"] : null)) {
                // line 22
                echo "\t\t\t\t<a title=\"";
                echo $this->env->getExtension('phpbb')->lang("POST_FORWARD_PM");
                echo "\" href=\"";
                echo (isset($context["U_FORWARD_PM"]) ? $context["U_FORWARD_PM"] : null);
                echo "\" class=\"button icon-button forwardpm-icon\">
\t\t\t\t\t";
                // line 23
                echo $this->env->getExtension('phpbb')->lang("BUTTON_PM_FORWARD");
                echo "
\t\t\t\t</a>
\t\t\t";
            }
            // line 26
            echo "\t\t\t";
            if (((isset($context["U_POST_REPLY_PM"]) ? $context["U_POST_REPLY_PM"] : null) && ((isset($context["S_PM_RECIPIENTS"]) ? $context["S_PM_RECIPIENTS"] : null) > 1))) {
                // line 27
                echo "\t\t\t\t<a title=\"";
                echo $this->env->getExtension('phpbb')->lang("REPLY_TO_ALL");
                echo "\" href=\"";
                echo (isset($context["U_POST_REPLY_ALL"]) ? $context["U_POST_REPLY_ALL"] : null);
                echo "\" class=\"button icon-button reply-all\">
\t\t\t\t\t";
                // line 28
                echo $this->env->getExtension('phpbb')->lang("BUTTON_PM_REPLY_ALL");
                echo "
\t\t\t\t</a>
\t\t\t";
            }
            // line 31
            echo "\t\t</div>
\t";
        }
        // line 33
        echo "
\t";
        // line 34
        if (( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null) && (isset($context["U_PRINT_PM"]) ? $context["U_PRINT_PM"] : null))) {
            // line 35
            echo "\t\t<div class=\"dropdown-container dropdown-button-control topic-tools\">
\t\t\t<span title=\"";
            // line 36
            echo $this->env->getExtension('phpbb')->lang("PM_TOOLS");
            echo "\" class=\"dropdown-trigger dropdown-select button icon-button tools-icon\"></span>
\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t\t";
            // line 40
            if ((isset($context["U_PRINT_PM"]) ? $context["U_PRINT_PM"] : null)) {
                echo "<li class=\"small-icon icon-print\"><a href=\"";
                echo (isset($context["U_PRINT_PM"]) ? $context["U_PRINT_PM"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("PRINT_PM");
                echo "\" accesskey=\"p\">";
                echo $this->env->getExtension('phpbb')->lang("PRINT_PM");
                echo "</a></li>";
            }
            // line 41
            echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 45
        echo "
\t";
        // line 46
        if (((isset($context["TOTAL_MESSAGES"]) ? $context["TOTAL_MESSAGES"] : null) || (isset($context["S_VIEW_MESSAGE"]) ? $context["S_VIEW_MESSAGE"] : null))) {
            // line 47
            echo "\t\t<div class=\"pagination\">
\t\t\t";
            // line 48
            if ((isset($context["S_VIEW_MESSAGE"]) ? $context["S_VIEW_MESSAGE"] : null)) {
                // line 49
                echo "\t\t\t\t<a class=\"arrow-";
                echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                echo "\" href=\"";
                echo (isset($context["U_CURRENT_FOLDER"]) ? $context["U_CURRENT_FOLDER"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("RETURN_TO_FOLDER");
                echo "</a>
\t\t\t";
            } elseif ((            // line 50
(isset($context["FOLDER_CUR_MESSAGES"]) ? $context["FOLDER_CUR_MESSAGES"] : null) != 0)) {
                // line 51
                echo "\t\t\t\t";
                if ((isset($context["U_MARK_ALL"]) ? $context["U_MARK_ALL"] : null)) {
                    echo "<a href=\"";
                    echo (isset($context["U_MARK_ALL"]) ? $context["U_MARK_ALL"] : null);
                    echo "\" class=\"mark\">";
                    echo $this->env->getExtension('phpbb')->lang("PM_MARK_ALL_READ");
                    echo "</a> &bull; ";
                }
                // line 52
                echo "\t\t\t\t";
                echo (isset($context["TOTAL_MESSAGES"]) ? $context["TOTAL_MESSAGES"] : null);
                echo "
\t\t\t\t";
                // line 53
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                    // line 54
                    echo "\t\t\t\t\t";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "ucp_pm_message_header.html", 54)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 55
                    echo "\t\t\t\t";
                } else {
                    // line 56
                    echo "\t\t\t\t\t &bull; ";
                    echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                    echo "
\t\t\t\t";
                }
                // line 58
                echo "\t\t\t";
            }
            // line 59
            echo "\t\t</div>
\t";
        }
        // line 61
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "ucp_pm_message_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 61,  210 => 59,  207 => 58,  201 => 56,  198 => 55,  185 => 54,  183 => 53,  178 => 52,  169 => 51,  167 => 50,  158 => 49,  156 => 48,  153 => 47,  151 => 46,  148 => 45,  142 => 41,  132 => 40,  125 => 36,  122 => 35,  120 => 34,  117 => 33,  113 => 31,  107 => 28,  100 => 27,  97 => 26,  91 => 23,  84 => 22,  81 => 21,  75 => 18,  68 => 17,  66 => 16,  61 => 14,  54 => 13,  52 => 12,  49 => 11,  47 => 10,  43 => 8,  37 => 7,  30 => 3,  19 => 1,);
    }
}
/* <h2>{L_TITLE}<!-- IF CUR_FOLDER_NAME -->{L_COLON} {CUR_FOLDER_NAME}<!-- ENDIF --></h2>*/
/* */
/* <form id="viewfolder" method="post" action="{S_PM_ACTION}">*/
/* */
/* <div class="panel">*/
/* 	<div class="inner">*/
/* 	<!-- IF FOLDER_STATUS and FOLDER_MAX_MESSAGES neq 0 --><p>{FOLDER_STATUS}</p><!-- ENDIF -->*/
/* */
/* 	<div class="action-bar top">*/
/* 	<!-- IF U_POST_REPLY_PM or U_POST_NEW_TOPIC or U_FORWARD_PM -->*/
/* 		<div class="buttons">*/
/* 			<!-- IF U_POST_REPLY_PM -->*/
/* 				<a title="{L_POST_REPLY_PM}" href="{U_POST_REPLY_PM}" class="button icon-button pmreply-icon">*/
/* 					{L_BUTTON_PM_REPLY}*/
/* 				</a>*/
/* 			<!-- ELSEIF U_POST_NEW_TOPIC -->*/
/* 				<a href="{U_POST_NEW_TOPIC}" accesskey="n" title="{L_UCP_PM_COMPOSE}" class="button icon-button newpm-icon">*/
/* 					{L_BUTTON_PM_NEW}*/
/* 				</a>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF U_FORWARD_PM -->*/
/* 				<a title="{L_POST_FORWARD_PM}" href="{U_FORWARD_PM}" class="button icon-button forwardpm-icon">*/
/* 					{L_BUTTON_PM_FORWARD}*/
/* 				</a>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF U_POST_REPLY_PM and S_PM_RECIPIENTS gt 1 -->*/
/* 				<a title="{L_REPLY_TO_ALL}" href="{U_POST_REPLY_ALL}" class="button icon-button reply-all">*/
/* 					{L_BUTTON_PM_REPLY_ALL}*/
/* 				</a>*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF not S_IS_BOT and U_PRINT_PM -->*/
/* 		<div class="dropdown-container dropdown-button-control topic-tools">*/
/* 			<span title="{L_PM_TOOLS}" class="dropdown-trigger dropdown-select button icon-button tools-icon"></span>*/
/* 			<div class="dropdown hidden">*/
/* 				<div class="pointer"><div class="pointer-inner"></div></div>*/
/* 				<ul class="dropdown-contents">*/
/* 					<!-- IF U_PRINT_PM --><li class="small-icon icon-print"><a href="{U_PRINT_PM}" title="{L_PRINT_PM}" accesskey="p">{L_PRINT_PM}</a></li><!-- ENDIF -->*/
/* 				</ul>*/
/* 			</div>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF TOTAL_MESSAGES or S_VIEW_MESSAGE -->*/
/* 		<div class="pagination">*/
/* 			<!-- IF S_VIEW_MESSAGE -->*/
/* 				<a class="arrow-{S_CONTENT_FLOW_BEGIN}" href="{U_CURRENT_FOLDER}">{L_RETURN_TO_FOLDER}</a>*/
/* 			<!-- ELSEIF FOLDER_CUR_MESSAGES neq 0 -->*/
/* 				<!-- IF U_MARK_ALL --><a href="{U_MARK_ALL}" class="mark">{L_PM_MARK_ALL_READ}</a> &bull; <!-- ENDIF -->*/
/* 				{TOTAL_MESSAGES}*/
/* 				<!-- IF .pagination -->*/
/* 					<!-- INCLUDE pagination.html -->*/
/* 				<!-- ELSE -->*/
/* 					 &bull; {PAGE_NUMBER}*/
/* 				<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* 	</div>*/
/* */
