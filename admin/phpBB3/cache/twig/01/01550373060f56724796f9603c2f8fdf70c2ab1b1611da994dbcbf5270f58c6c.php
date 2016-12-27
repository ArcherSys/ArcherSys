<?php

/* ucp_pm_viewfolder.html */
class __TwigTemplate_2d81c9e2732d1324892a0fe8b9e69bc3092817f97424d4daee1203d2c4ae51af extends Twig_Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_pm_viewfolder.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
";
        // line 3
        if ( !(isset($context["PROMPT"]) ? $context["PROMPT"] : null)) {
            // line 4
            echo "\t";
            $location = "ucp_pm_message_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("ucp_pm_message_header.html", "ucp_pm_viewfolder.html", 4)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 6
        echo "
";
        // line 7
        if ((isset($context["PROMPT"]) ? $context["PROMPT"] : null)) {
            // line 8
            echo "\t<h2>";
            echo $this->env->getExtension('phpbb')->lang("EXPORT_AS_CSV");
            echo "</h2>
\t<form id=\"viewfolder\" method=\"post\" action=\"";
            // line 9
            echo (isset($context["S_PM_ACTION"]) ? $context["S_PM_ACTION"] : null);
            echo "\">
\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<h3>";
            // line 12
            echo $this->env->getExtension('phpbb')->lang("OPTIONS");
            echo "</h3>
\t\t<fieldset>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"delimiter\">";
            // line 15
            echo $this->env->getExtension('phpbb')->lang("DELIMITER");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox\" type=\"text\" id=\"delimiter\" name=\"delimiter\" value=\",\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"enclosure\">";
            // line 19
            echo $this->env->getExtension('phpbb')->lang("ENCLOSURE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox\" type=\"text\" id=\"enclosure\" name=\"enclosure\" value=\"&#034;\" /></dd>
\t\t\t</dl>
\t\t</fieldset>
\t\t</div>
\t</div>
\t<fieldset class=\"submit-buttons\">
\t\t<input type=\"hidden\" name=\"export_option\" value=\"CSV\" />
\t\t<input class=\"button1\" type=\"submit\" name=\"submit_export\" value=\"";
            // line 27
            echo $this->env->getExtension('phpbb')->lang("EXPORT_FOLDER");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" value=\"";
            // line 28
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" name=\"reset\" />&nbsp;
\t\t";
            // line 29
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>

";
        } else {
            // line 34
            echo "
\t";
            // line 35
            if ((isset($context["NUM_REMOVED"]) ? $context["NUM_REMOVED"] : null)) {
                // line 36
                echo "\t\t<div class=\"notice\">
\t\t\t<p>";
                // line 37
                echo (isset($context["RULE_REMOVED_MESSAGES"]) ? $context["RULE_REMOVED_MESSAGES"] : null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 40
            echo "
\t";
            // line 41
            if ((isset($context["NUM_NOT_MOVED"]) ? $context["NUM_NOT_MOVED"] : null)) {
                // line 42
                echo "\t\t<div class=\"notice\">
\t\t\t<p>";
                // line 43
                echo (isset($context["NOT_MOVED_MESSAGES"]) ? $context["NOT_MOVED_MESSAGES"] : null);
                echo "<br />";
                echo (isset($context["RELEASE_MESSAGE_INFO"]) ? $context["RELEASE_MESSAGE_INFO"] : null);
                echo "</p>
\t\t</div>
\t";
            }
            // line 46
            echo "
\t";
            // line 47
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "messagerow", array()))) {
                // line 48
                echo "\t\t<ul class=\"topiclist two-columns\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 51
                echo $this->env->getExtension('phpbb')->lang("MESSAGE");
                echo "</div></dt>
\t\t\t\t\t<dd class=\"mark\">";
                // line 52
                echo $this->env->getExtension('phpbb')->lang("MARK");
                echo "</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist cplist pmlist responsive-show-all ";
                // line 56
                if ((isset($context["S_SHOW_RECIPIENTS"]) ? $context["S_SHOW_RECIPIENTS"] : null)) {
                    echo "missing-column";
                } else {
                    echo "two-columns";
                }
                echo "\">

\t\t";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "messagerow", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["messagerow"]) {
                    // line 59
                    echo "\t\t\t<li class=\"row";
                    if (($this->getAttribute($context["messagerow"], "S_ROW_COUNT", array()) % 2 == 1)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    if ($this->getAttribute($context["messagerow"], "PM_CLASS", array())) {
                        echo " ";
                        echo $this->getAttribute($context["messagerow"], "PM_CLASS", array());
                    }
                    echo "\">
\t\t\t\t<dl class=\"icon ";
                    // line 60
                    echo $this->getAttribute($context["messagerow"], "FOLDER_IMG_STYLE", array());
                    echo "\">
\t\t\t\t\t<dt";
                    // line 61
                    if (($this->getAttribute($context["messagerow"], "PM_ICON_URL", array()) && (isset($context["S_PM_ICONS"]) ? $context["S_PM_ICONS"] : null))) {
                        echo " style=\"background-image: url(";
                        echo $this->getAttribute($context["messagerow"], "PM_ICON_URL", array());
                        echo "); background-repeat: no-repeat;\"";
                    }
                    echo ">
\t\t\t\t\t\t";
                    // line 62
                    if (($this->getAttribute($context["messagerow"], "S_PM_UNREAD", array()) &&  !$this->getAttribute($context["messagerow"], "S_PM_DELETED", array()))) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["messagerow"], "U_VIEW_PM", array());
                        echo "\" class=\"icon-link\"></a>";
                    }
                    // line 63
                    echo "\t\t\t\t\t\t<div class=\"list-inner\">

\t\t\t\t\t\t";
                    // line 65
                    if ($this->getAttribute($context["messagerow"], "S_PM_DELETED", array())) {
                        // line 66
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["messagerow"], "U_REMOVE_PM", array());
                        echo "\" class=\"topictitle\">";
                        echo $this->env->getExtension('phpbb')->lang("DELETE_MESSAGE");
                        echo "</a><br />
\t\t\t\t\t\t\t<span class=\"error\">";
                        // line 67
                        echo $this->env->getExtension('phpbb')->lang("MESSAGE_REMOVED_FROM_OUTBOX");
                        echo "</span>
\t\t\t\t\t\t";
                    } else {
                        // line 69
                        echo "\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["messagerow"], "U_VIEW_PM", array());
                        echo "\" class=\"topictitle\">";
                        echo $this->getAttribute($context["messagerow"], "SUBJECT", array());
                        echo "</a>
\t\t\t\t\t\t";
                    }
                    // line 71
                    echo "\t\t\t\t\t\t";
                    if ($this->getAttribute($context["messagerow"], "S_AUTHOR_DELETED", array())) {
                        // line 72
                        echo "\t\t\t\t\t\t\t<br /><em class=\"small\">";
                        echo $this->env->getExtension('phpbb')->lang("PM_FROM_REMOVED_AUTHOR");
                        echo "</em>
\t\t\t\t\t\t";
                    }
                    // line 74
                    echo "
\t\t\t\t\t\t";
                    // line 75
                    if ($this->getAttribute($context["messagerow"], "S_PM_REPORTED", array())) {
                        echo "<a href=\"";
                        echo $this->getAttribute($context["messagerow"], "U_MCP_REPORT", array());
                        echo "\">";
                        echo (isset($context["REPORTED_IMG"]) ? $context["REPORTED_IMG"] : null);
                        echo "</a>";
                    }
                    echo " ";
                    echo $this->getAttribute($context["messagerow"], "ATTACH_ICON_IMG", array());
                    echo "<br />
\t\t\t\t\t\t";
                    // line 76
                    if ((isset($context["S_SHOW_RECIPIENTS"]) ? $context["S_SHOW_RECIPIENTS"] : null)) {
                        echo $this->env->getExtension('phpbb')->lang("MESSAGE_TO");
                        echo " ";
                        echo $this->getAttribute($context["messagerow"], "RECIPIENTS", array());
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("MESSAGE_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["messagerow"], "MESSAGE_AUTHOR_FULL", array());
                        echo " &raquo; ";
                        echo $this->getAttribute($context["messagerow"], "SENT_TIME", array());
                    }
                    // line 77
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t";
                    // line 80
                    if ((isset($context["S_SHOW_RECIPIENTS"]) ? $context["S_SHOW_RECIPIENTS"] : null)) {
                        echo "<dd class=\"info\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("SENT_AT");
                        echo $this->env->getExtension('phpbb')->lang("COLON");
                        echo " ";
                        echo $this->getAttribute($context["messagerow"], "SENT_TIME", array());
                        echo "</span></dd>";
                    }
                    // line 81
                    echo "\t\t\t\t\t";
                    if ((isset($context["S_UNREAD"]) ? $context["S_UNREAD"] : null)) {
                        echo "<dd class=\"info\">";
                        if ($this->getAttribute($context["messagerow"], "FOLDER", array())) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["messagerow"], "U_FOLDER", array());
                            echo "\">";
                            echo $this->getAttribute($context["messagerow"], "FOLDER", array());
                            echo "</a>";
                        } else {
                            echo $this->env->getExtension('phpbb')->lang("UNKNOWN_FOLDER");
                        }
                        echo "</dd>";
                    }
                    // line 82
                    echo "\t\t\t\t\t<dd class=\"mark\"><input type=\"checkbox\" name=\"marked_msg_id[]\" value=\"";
                    echo $this->getAttribute($context["messagerow"], "MESSAGE_ID", array());
                    echo "\" /></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['messagerow'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "
\t\t</ul>
\t";
            } else {
                // line 89
                echo "\t\t<p><strong>
\t\t\t";
                // line 90
                if (((isset($context["S_COMPOSE_PM_VIEW"]) ? $context["S_COMPOSE_PM_VIEW"] : null) && (isset($context["S_NO_AUTH_SEND_MESSAGE"]) ? $context["S_NO_AUTH_SEND_MESSAGE"] : null))) {
                    // line 91
                    echo "\t\t\t\t";
                    if ((isset($context["S_USER_NEW"]) ? $context["S_USER_NEW"] : null)) {
                        echo $this->env->getExtension('phpbb')->lang("USER_NEW_PERMISSION_DISALLOWED");
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("NO_AUTH_SEND_MESSAGE");
                    }
                    // line 92
                    echo "\t\t\t";
                } else {
                    // line 93
                    echo "\t\t\t\t";
                    echo $this->env->getExtension('phpbb')->lang("NO_MESSAGES");
                    echo "
\t\t\t";
                }
                // line 95
                echo "\t\t</strong></p>
\t";
            }
            // line 97
            echo "
\t";
            // line 98
            if (((isset($context["FOLDER_CUR_MESSAGES"]) ? $context["FOLDER_CUR_MESSAGES"] : null) != 0)) {
                // line 99
                echo "\t\t<fieldset class=\"display-actions\">
\t\t\t<div class=\"left-box\"><label for=\"export_option\">";
                // line 100
                echo $this->env->getExtension('phpbb')->lang("EXPORT_FOLDER");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " <select name=\"export_option\" id=\"export_option\"><option value=\"CSV\">";
                echo $this->env->getExtension('phpbb')->lang("EXPORT_AS_CSV");
                echo "</option><option value=\"CSV_EXCEL\">";
                echo $this->env->getExtension('phpbb')->lang("EXPORT_AS_CSV_EXCEL");
                echo "</option><option value=\"XML\">";
                echo $this->env->getExtension('phpbb')->lang("EXPORT_AS_XML");
                echo "</option></select></label> <input class=\"button2\" type=\"submit\" name=\"submit_export\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" /><br /></div>
\t\t\t<select name=\"mark_option\">";
                // line 101
                echo (isset($context["S_MARK_OPTIONS"]) ? $context["S_MARK_OPTIONS"] : null);
                echo (isset($context["S_MOVE_MARKED_OPTIONS"]) ? $context["S_MOVE_MARKED_OPTIONS"] : null);
                echo "</select> <input class=\"button2\" type=\"submit\" name=\"submit_mark\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" />
\t\t\t<div><a href=\"#\" onclick=\"marklist('viewfolder', 'marked_msg', true); return false;\">";
                // line 102
                echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
                echo "</a> &bull; <a href=\"#\" onclick=\"marklist('viewfolder', 'marked_msg', false); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
                echo "</a></div>
\t\t</fieldset>
\t
\t\t<hr />
\t
\t\t<div class=\"action-bar bottom\">
\t\t\t<div class=\"pagination\">
\t\t\t\t";
                // line 109
                echo (isset($context["TOTAL_MESSAGES"]) ? $context["TOTAL_MESSAGES"] : null);
                echo "
\t\t\t\t";
                // line 110
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                    echo " 
\t\t\t\t\t";
                    // line 111
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "ucp_pm_viewfolder.html", 111)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 112
                    echo "\t\t\t\t";
                } else {
                    echo " 
\t\t\t\t\t &bull; ";
                    // line 113
                    echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                    echo "
\t\t\t\t";
                }
                // line 115
                echo "\t\t\t</div>
\t\t</div>
\t";
            }
            // line 118
            echo "
\t\t</div>
\t</div>

\t";
            // line 122
            if (((isset($context["FOLDER_CUR_MESSAGES"]) ? $context["FOLDER_CUR_MESSAGES"] : null) != 0)) {
                // line 123
                echo "\t<fieldset class=\"display-options\">
\t\t<label>";
                // line 124
                echo $this->env->getExtension('phpbb')->lang("DISPLAY");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
                echo "</label>
\t\t<label>";
                // line 125
                echo $this->env->getExtension('phpbb')->lang("SORT_BY");
                echo " ";
                echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
                echo "</label>
\t\t<label>";
                // line 126
                echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
                echo "</label>
\t\t<input type=\"submit\" name=\"sort\" value=\"";
                // line 127
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" class=\"button2\" />
\t\t<input type=\"hidden\" name=\"cur_folder_id\" value=\"";
                // line 128
                echo (isset($context["CUR_FOLDER_ID"]) ? $context["CUR_FOLDER_ID"] : null);
                echo "\" />
\t</fieldset>
\t";
            }
            // line 131
            echo "
\t";
            // line 132
            $location = "ucp_pm_message_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("ucp_pm_message_footer.html", "ucp_pm_viewfolder.html", 132)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 134
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_pm_viewfolder.html", 134)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_pm_viewfolder.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  464 => 134,  451 => 132,  448 => 131,  442 => 128,  438 => 127,  434 => 126,  428 => 125,  421 => 124,  418 => 123,  416 => 122,  410 => 118,  405 => 115,  400 => 113,  395 => 112,  383 => 111,  379 => 110,  375 => 109,  363 => 102,  356 => 101,  343 => 100,  340 => 99,  338 => 98,  335 => 97,  331 => 95,  325 => 93,  322 => 92,  315 => 91,  313 => 90,  310 => 89,  305 => 86,  294 => 82,  279 => 81,  270 => 80,  265 => 77,  253 => 76,  241 => 75,  238 => 74,  232 => 72,  229 => 71,  221 => 69,  216 => 67,  209 => 66,  207 => 65,  203 => 63,  197 => 62,  189 => 61,  185 => 60,  172 => 59,  168 => 58,  159 => 56,  152 => 52,  148 => 51,  143 => 48,  141 => 47,  138 => 46,  130 => 43,  127 => 42,  125 => 41,  122 => 40,  116 => 37,  113 => 36,  111 => 35,  108 => 34,  100 => 29,  96 => 28,  92 => 27,  80 => 19,  72 => 15,  66 => 12,  60 => 9,  55 => 8,  53 => 7,  50 => 6,  36 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE ucp_header.html -->*/
/* */
/* <!-- IF not PROMPT -->*/
/* 	<!-- INCLUDE ucp_pm_message_header.html -->*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF PROMPT -->*/
/* 	<h2>{L_EXPORT_AS_CSV}</h2>*/
/* 	<form id="viewfolder" method="post" action="{S_PM_ACTION}">*/
/* 	<div class="panel">*/
/* 		<div class="inner">*/
/* 		<h3>{L_OPTIONS}</h3>*/
/* 		<fieldset>*/
/* 			<dl>*/
/* 				<dt><label for="delimiter">{L_DELIMITER}{L_COLON}</label></dt>*/
/* 				<dd><input class="inputbox" type="text" id="delimiter" name="delimiter" value="," /></dd>*/
/* 			</dl>*/
/* 			<dl>*/
/* 				<dt><label for="enclosure">{L_ENCLOSURE}{L_COLON}</label></dt>*/
/* 				<dd><input class="inputbox" type="text" id="enclosure" name="enclosure" value="&#034;" /></dd>*/
/* 			</dl>*/
/* 		</fieldset>*/
/* 		</div>*/
/* 	</div>*/
/* 	<fieldset class="submit-buttons">*/
/* 		<input type="hidden" name="export_option" value="CSV" />*/
/* 		<input class="button1" type="submit" name="submit_export" value="{L_EXPORT_FOLDER}" />&nbsp;*/
/* 		<input class="button2" type="reset" value="{L_RESET}" name="reset" />&nbsp;*/
/* 		{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* 	</form>*/
/* */
/* <!-- ELSE -->*/
/* */
/* 	<!-- IF NUM_REMOVED -->*/
/* 		<div class="notice">*/
/* 			<p>{RULE_REMOVED_MESSAGES}</p>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF NUM_NOT_MOVED -->*/
/* 		<div class="notice">*/
/* 			<p>{NOT_MOVED_MESSAGES}<br />{RELEASE_MESSAGE_INFO}</p>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF .messagerow -->*/
/* 		<ul class="topiclist two-columns">*/
/* 			<li class="header">*/
/* 				<dl>*/
/* 					<dt><div class="list-inner">{L_MESSAGE}</div></dt>*/
/* 					<dd class="mark">{L_MARK}</dd>*/
/* 				</dl>*/
/* 			</li>*/
/* 		</ul>*/
/* 		<ul class="topiclist cplist pmlist responsive-show-all <!-- IF S_SHOW_RECIPIENTS -->missing-column<!-- ELSE -->two-columns<!-- ENDIF -->">*/
/* */
/* 		<!-- BEGIN messagerow -->*/
/* 			<li class="row<!-- IF messagerow.S_ROW_COUNT is odd --> bg1<!-- ELSE --> bg2<!-- ENDIF --><!-- IF messagerow.PM_CLASS --> {messagerow.PM_CLASS}<!-- ENDIF -->">*/
/* 				<dl class="icon {messagerow.FOLDER_IMG_STYLE}">*/
/* 					<dt<!-- IF messagerow.PM_ICON_URL and S_PM_ICONS --> style="background-image: url({messagerow.PM_ICON_URL}); background-repeat: no-repeat;"<!-- ENDIF -->>*/
/* 						<!-- IF messagerow.S_PM_UNREAD and not messagerow.S_PM_DELETED --><a href="{messagerow.U_VIEW_PM}" class="icon-link"></a><!-- ENDIF -->*/
/* 						<div class="list-inner">*/
/* */
/* 						<!-- IF messagerow.S_PM_DELETED -->*/
/* 							<a href="{messagerow.U_REMOVE_PM}" class="topictitle">{L_DELETE_MESSAGE}</a><br />*/
/* 							<span class="error">{L_MESSAGE_REMOVED_FROM_OUTBOX}</span>*/
/* 						<!-- ELSE -->*/
/* 							<a href="{messagerow.U_VIEW_PM}" class="topictitle">{messagerow.SUBJECT}</a>*/
/* 						<!-- ENDIF -->*/
/* 						<!-- IF messagerow.S_AUTHOR_DELETED -->*/
/* 							<br /><em class="small">{L_PM_FROM_REMOVED_AUTHOR}</em>*/
/* 						<!-- ENDIF -->*/
/* */
/* 						<!-- IF messagerow.S_PM_REPORTED --><a href="{messagerow.U_MCP_REPORT}">{REPORTED_IMG}</a><!-- ENDIF --> {messagerow.ATTACH_ICON_IMG}<br />*/
/* 						<!-- IF S_SHOW_RECIPIENTS -->{L_MESSAGE_TO} {messagerow.RECIPIENTS}<!-- ELSE -->{L_MESSAGE_BY_AUTHOR} {messagerow.MESSAGE_AUTHOR_FULL} &raquo; {messagerow.SENT_TIME}<!-- ENDIF -->*/
/* */
/* 						</div>*/
/* 					</dt>*/
/* 					<!-- IF S_SHOW_RECIPIENTS --><dd class="info"><span>{L_SENT_AT}{L_COLON} {messagerow.SENT_TIME}</span></dd><!-- ENDIF -->*/
/* 					<!-- IF S_UNREAD --><dd class="info"><!-- IF messagerow.FOLDER --><a href="{messagerow.U_FOLDER}">{messagerow.FOLDER}</a><!-- ELSE -->{L_UNKNOWN_FOLDER}<!-- ENDIF --></dd><!-- ENDIF -->*/
/* 					<dd class="mark"><input type="checkbox" name="marked_msg_id[]" value="{messagerow.MESSAGE_ID}" /></dd>*/
/* 				</dl>*/
/* 			</li>*/
/* 		<!-- END messagerow -->*/
/* */
/* 		</ul>*/
/* 	<!-- ELSE -->*/
/* 		<p><strong>*/
/* 			<!-- IF S_COMPOSE_PM_VIEW and S_NO_AUTH_SEND_MESSAGE -->*/
/* 				<!-- IF S_USER_NEW -->{L_USER_NEW_PERMISSION_DISALLOWED}<!-- ELSE -->{L_NO_AUTH_SEND_MESSAGE}<!-- ENDIF -->*/
/* 			<!-- ELSE -->*/
/* 				{L_NO_MESSAGES}*/
/* 			<!-- ENDIF -->*/
/* 		</strong></p>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF FOLDER_CUR_MESSAGES neq 0 -->*/
/* 		<fieldset class="display-actions">*/
/* 			<div class="left-box"><label for="export_option">{L_EXPORT_FOLDER}{L_COLON} <select name="export_option" id="export_option"><option value="CSV">{L_EXPORT_AS_CSV}</option><option value="CSV_EXCEL">{L_EXPORT_AS_CSV_EXCEL}</option><option value="XML">{L_EXPORT_AS_XML}</option></select></label> <input class="button2" type="submit" name="submit_export" value="{L_GO}" /><br /></div>*/
/* 			<select name="mark_option">{S_MARK_OPTIONS}{S_MOVE_MARKED_OPTIONS}</select> <input class="button2" type="submit" name="submit_mark" value="{L_GO}" />*/
/* 			<div><a href="#" onclick="marklist('viewfolder', 'marked_msg', true); return false;">{L_MARK_ALL}</a> &bull; <a href="#" onclick="marklist('viewfolder', 'marked_msg', false); return false;">{L_UNMARK_ALL}</a></div>*/
/* 		</fieldset>*/
/* 	*/
/* 		<hr />*/
/* 	*/
/* 		<div class="action-bar bottom">*/
/* 			<div class="pagination">*/
/* 				{TOTAL_MESSAGES}*/
/* 				<!-- IF .pagination --> */
/* 					<!-- INCLUDE pagination.html -->*/
/* 				<!-- ELSE --> */
/* 					 &bull; {PAGE_NUMBER}*/
/* 				<!-- ENDIF -->*/
/* 			</div>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<!-- IF FOLDER_CUR_MESSAGES neq 0 -->*/
/* 	<fieldset class="display-options">*/
/* 		<label>{L_DISPLAY}{L_COLON} {S_SELECT_SORT_DAYS}</label>*/
/* 		<label>{L_SORT_BY} {S_SELECT_SORT_KEY}</label>*/
/* 		<label>{S_SELECT_SORT_DIR}</label>*/
/* 		<input type="submit" name="sort" value="{L_GO}" class="button2" />*/
/* 		<input type="hidden" name="cur_folder_id" value="{CUR_FOLDER_ID}" />*/
/* 	</fieldset>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- INCLUDE ucp_pm_message_footer.html -->*/
/* <!-- ENDIF -->*/
/* <!-- INCLUDE ucp_footer.html -->*/
/* */
