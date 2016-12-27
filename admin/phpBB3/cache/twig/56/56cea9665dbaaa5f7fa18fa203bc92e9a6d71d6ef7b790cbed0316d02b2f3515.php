<?php

/* overall_header.html */
class __TwigTemplate_b682a1b46ac833053ecad2e2918988553bed83e9d81375d98655ecbd7409303d extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo "\" lang=\"";
        echo (isset($context["S_USER_LANG"]) ? $context["S_USER_LANG"] : null);
        echo "\">
<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
";
        // line 7
        if ((isset($context["META"]) ? $context["META"] : null)) {
            echo (isset($context["META"]) ? $context["META"] : null);
        }
        // line 8
        echo "<title>";
        echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
        echo "</title>

<link href=\"style/admin.css?assets_version=";
        // line 10
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\" />

<script type=\"text/javascript\">
// <![CDATA[
var jump_page = '";
        // line 14
        echo addslashes($this->env->getExtension('phpbb')->lang("JUMP_PAGE"));
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "';
var on_page = '";
        // line 15
        echo (isset($context["CURRENT_PAGE"]) ? $context["CURRENT_PAGE"] : null);
        echo "';
var per_page = '";
        // line 16
        echo (isset($context["PER_PAGE"]) ? $context["PER_PAGE"] : null);
        echo "';
var base_url = '";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["BASE_URL"]) ? $context["BASE_URL"] : null), "js");
        echo "';

/**
* Jump to page
*/
function jumpto()
{
\tvar page = prompt(jump_page, on_page);

\tif (page !== null && !isNaN(page) && page == Math.floor(page) && page > 0)
\t{
\t\tif (base_url.indexOf('?') == -1)
\t\t{
\t\t\tdocument.location.href = base_url + '?start=' + ((page - 1) * per_page);
\t\t}
\t\telse
\t\t{
\t\t\tdocument.location.href = base_url.replace(/&amp;/g, '&') + '&start=' + ((page - 1) * per_page);
\t\t}
\t}
}

/**
* Mark/unmark checkboxes
* id = ID of parent container, name = name prefix, state = state [true/false]
*/
function marklist(id, name, state)
{
\tvar parent = document.getElementById(id) || document[id];

\tif (!parent)
\t{
\t\treturn;
\t}

\tvar rb = parent.getElementsByTagName('input');
\t
\tfor (var r = 0; r < rb.length; r++)
\t{
\t\tif (rb[r].name.substr(0, name.length) == name)
\t\t{
\t\t\trb[r].checked = state;
\t\t}
\t}
}

/**
* Find a member
*/
function find_username(url)
{
\tpopup(url, 760, 570, '_usersearch');
\treturn false;
}

/**
* Window popup
*/
function popup(url, width, height, name)
{
\tif (!name)
\t{
\t\tname = '_popup';
\t}

\twindow.open(url.replace(/&amp;/g, '&'), name, 'height=' + height + ',resizable=yes,scrollbars=yes, width=' + width);
\treturn false;
}

// ]]>
</script>

";
        // line 89
        // line 90
        echo "
";
        // line 91
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "STYLESHEETS", array());
        echo "

";
        // line 93
        // line 94
        echo "
</head>

<body class=\"";
        // line 97
        echo (isset($context["S_CONTENT_DIRECTION"]) ? $context["S_CONTENT_DIRECTION"] : null);
        echo " ";
        echo (isset($context["BODY_CLASS"]) ? $context["BODY_CLASS"] : null);
        echo " nojs\">

";
        // line 99
        // line 100
        echo "
<div id=\"wrap\">
\t<div id=\"page-header\">
\t\t<h1>";
        // line 103
        echo $this->env->getExtension('phpbb')->lang("ADMIN_PANEL");
        echo "</h1>
\t\t<p><a href=\"";
        // line 104
        echo (isset($context["U_ADM_INDEX"]) ? $context["U_ADM_INDEX"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("ADMIN_INDEX");
        echo "</a> &bull; <a href=\"";
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("FORUM_INDEX");
        echo "</a></p>
\t\t<p id=\"skip\"><a href=\"#acp\">";
        // line 105
        echo $this->env->getExtension('phpbb')->lang("SKIP");
        echo "</a></p>
\t</div>
\t
\t<div id=\"page-body\">
\t\t<div id=\"tabs\">
\t\t\t<ul>
\t\t\t";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "t_block1", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["t_block1"]) {
            // line 112
            echo "\t\t\t\t<li class=\"tab";
            if ($this->getAttribute($context["t_block1"], "S_SELECTED", array())) {
                echo " activetab";
            }
            echo "\"><a href=\"";
            echo $this->getAttribute($context["t_block1"], "U_TITLE", array());
            echo "\">";
            echo $this->getAttribute($context["t_block1"], "L_TITLE", array());
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "\t\t\t</ul>
\t\t</div>

\t\t<div id=\"acp\">
\t\t\t\t<div id=\"content\">
\t\t\t\t\t<div id=\"menu\">
\t\t\t\t\t\t<p>";
        // line 120
        echo $this->env->getExtension('phpbb')->lang("LOGGED_IN_AS");
        echo "<br /><strong>";
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "</strong> [&nbsp;<a href=\"";
        echo (isset($context["U_LOGOUT"]) ? $context["U_LOGOUT"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("LOGOUT");
        echo "</a>&nbsp;][&nbsp;<a href=\"";
        echo (isset($context["U_ADM_LOGOUT"]) ? $context["U_ADM_LOGOUT"] : null);
        echo "\">";
        echo $this->env->getExtension('phpbb')->lang("ADM_LOGOUT");
        echo "</a>&nbsp;]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
\t\t\t\t\t\t";
        // line 121
        $value = 0;
        $context['definition']->set('LI_USED', $value);
        // line 122
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "l_block1", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["l_block1"]) {
            // line 123
            echo "\t\t\t\t\t\t\t";
            if ($this->getAttribute($context["l_block1"], "S_SELECTED", array())) {
                // line 124
                echo "\t
\t\t\t\t\t\t";
                // line 125
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["l_block1"], "l_block2", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["l_block2"]) {
                    // line 126
                    echo "\t\t\t\t\t\t\t";
                    if (twig_length_filter($this->env, $this->getAttribute($context["l_block2"], "l_block3", array()))) {
                        // line 127
                        echo "\t\t\t\t\t\t\t";
                        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LI_USED", array())) {
                            echo "</ul></div>";
                        }
                        // line 128
                        echo "\t\t\t\t\t\t\t<div class=\"menu-block\">
\t\t\t\t\t\t\t\t<a class=\"header\" href=\"javascript:void(0);\">";
                        // line 129
                        echo $this->getAttribute($context["l_block2"], "L_TITLE", array());
                        echo "</a>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                        // line 131
                        $value = 1;
                        $context['definition']->set('LI_USED', $value);
                        // line 132
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 133
                    echo "\t
\t\t\t\t\t\t\t";
                    // line 134
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["l_block2"], "l_block3", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["l_block3"]) {
                        // line 135
                        echo "\t\t\t\t\t\t\t\t<li";
                        if ($this->getAttribute($context["l_block3"], "S_SELECTED", array())) {
                            echo " id=\"activemenu\"";
                        }
                        echo "><a href=\"";
                        echo $this->getAttribute($context["l_block3"], "U_TITLE", array());
                        echo "\"><span>";
                        echo $this->getAttribute($context["l_block3"], "L_TITLE", array());
                        echo "</span></a></li>
\t\t\t\t\t\t\t\t";
                        // line 136
                        $value = 1;
                        $context['definition']->set('LI_USED', $value);
                        // line 137
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block3'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 138
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 139
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t";
            }
            // line 141
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "\t\t\t\t\t\t";
        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "LI_USED", array())) {
            // line 143
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 146
        echo "\t\t\t\t\t</div>
\t
\t\t\t\t\t<div id=\"main\">
\t\t\t\t\t\t<div class=\"main\">
";
    }

    public function getTemplateName()
    {
        return "overall_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 146,  315 => 143,  312 => 142,  306 => 141,  302 => 139,  296 => 138,  290 => 137,  287 => 136,  276 => 135,  272 => 134,  269 => 133,  266 => 132,  263 => 131,  258 => 129,  255 => 128,  250 => 127,  247 => 126,  243 => 125,  240 => 124,  237 => 123,  232 => 122,  229 => 121,  215 => 120,  207 => 114,  192 => 112,  188 => 111,  179 => 105,  169 => 104,  165 => 103,  160 => 100,  159 => 99,  152 => 97,  147 => 94,  146 => 93,  141 => 91,  138 => 90,  137 => 89,  62 => 17,  58 => 16,  54 => 15,  49 => 14,  42 => 10,  36 => 8,  32 => 7,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="{S_CONTENT_DIRECTION}" lang="{S_USER_LANG}">*/
/* <head>*/
/* <meta charset="utf-8">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1" />*/
/* <!-- IF META -->{META}<!-- ENDIF -->*/
/* <title>{PAGE_TITLE}</title>*/
/* */
/* <link href="style/admin.css?assets_version={T_ASSETS_VERSION}" rel="stylesheet" type="text/css" media="screen" />*/
/* */
/* <script type="text/javascript">*/
/* // <![CDATA[*/
/* var jump_page = '{LA_JUMP_PAGE}{L_COLON}';*/
/* var on_page = '{CURRENT_PAGE}';*/
/* var per_page = '{PER_PAGE}';*/
/* var base_url = '{BASE_URL|e('js')}';*/
/* */
/* /***/
/* * Jump to page*/
/* *//* */
/* function jumpto()*/
/* {*/
/* 	var page = prompt(jump_page, on_page);*/
/* */
/* 	if (page !== null && !isNaN(page) && page == Math.floor(page) && page > 0)*/
/* 	{*/
/* 		if (base_url.indexOf('?') == -1)*/
/* 		{*/
/* 			document.location.href = base_url + '?start=' + ((page - 1) * per_page);*/
/* 		}*/
/* 		else*/
/* 		{*/
/* 			document.location.href = base_url.replace(/&amp;/g, '&') + '&start=' + ((page - 1) * per_page);*/
/* 		}*/
/* 	}*/
/* }*/
/* */
/* /***/
/* * Mark/unmark checkboxes*/
/* * id = ID of parent container, name = name prefix, state = state [true/false]*/
/* *//* */
/* function marklist(id, name, state)*/
/* {*/
/* 	var parent = document.getElementById(id) || document[id];*/
/* */
/* 	if (!parent)*/
/* 	{*/
/* 		return;*/
/* 	}*/
/* */
/* 	var rb = parent.getElementsByTagName('input');*/
/* 	*/
/* 	for (var r = 0; r < rb.length; r++)*/
/* 	{*/
/* 		if (rb[r].name.substr(0, name.length) == name)*/
/* 		{*/
/* 			rb[r].checked = state;*/
/* 		}*/
/* 	}*/
/* }*/
/* */
/* /***/
/* * Find a member*/
/* *//* */
/* function find_username(url)*/
/* {*/
/* 	popup(url, 760, 570, '_usersearch');*/
/* 	return false;*/
/* }*/
/* */
/* /***/
/* * Window popup*/
/* *//* */
/* function popup(url, width, height, name)*/
/* {*/
/* 	if (!name)*/
/* 	{*/
/* 		name = '_popup';*/
/* 	}*/
/* */
/* 	window.open(url.replace(/&amp;/g, '&'), name, 'height=' + height + ',resizable=yes,scrollbars=yes, width=' + width);*/
/* 	return false;*/
/* }*/
/* */
/* // ]]>*/
/* </script>*/
/* */
/* <!-- EVENT acp_overall_header_head_append -->*/
/* */
/* {$STYLESHEETS}*/
/* */
/* <!-- EVENT acp_overall_header_stylesheets_after -->*/
/* */
/* </head>*/
/* */
/* <body class="{S_CONTENT_DIRECTION} {BODY_CLASS} nojs">*/
/* */
/* <!-- EVENT acp_overall_header_body_before -->*/
/* */
/* <div id="wrap">*/
/* 	<div id="page-header">*/
/* 		<h1>{L_ADMIN_PANEL}</h1>*/
/* 		<p><a href="{U_ADM_INDEX}">{L_ADMIN_INDEX}</a> &bull; <a href="{U_INDEX}">{L_FORUM_INDEX}</a></p>*/
/* 		<p id="skip"><a href="#acp">{L_SKIP}</a></p>*/
/* 	</div>*/
/* 	*/
/* 	<div id="page-body">*/
/* 		<div id="tabs">*/
/* 			<ul>*/
/* 			<!-- BEGIN t_block1 -->*/
/* 				<li class="tab<!-- IF t_block1.S_SELECTED --> activetab<!-- ENDIF -->"><a href="{t_block1.U_TITLE}">{t_block1.L_TITLE}</a></li>*/
/* 			<!-- END t_block1 -->*/
/* 			</ul>*/
/* 		</div>*/
/* */
/* 		<div id="acp">*/
/* 				<div id="content">*/
/* 					<div id="menu">*/
/* 						<p>{L_LOGGED_IN_AS}<br /><strong>{USERNAME}</strong> [&nbsp;<a href="{U_LOGOUT}">{L_LOGOUT}</a>&nbsp;][&nbsp;<a href="{U_ADM_LOGOUT}">{L_ADM_LOGOUT}</a>&nbsp;]&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>*/
/* 						<!-- DEFINE $LI_USED = 0 -->*/
/* 						<!-- BEGIN l_block1 -->*/
/* 							<!-- IF l_block1.S_SELECTED -->*/
/* 	*/
/* 						<!-- BEGIN l_block2 -->*/
/* 							<!-- IF .l_block1.l_block2.l_block3 -->*/
/* 							<!-- IF $LI_USED --></ul></div><!-- ENDIF -->*/
/* 							<div class="menu-block">*/
/* 								<a class="header" href="javascript:void(0);">{l_block1.l_block2.L_TITLE}</a>*/
/* 								<ul>*/
/* 							<!-- DEFINE $LI_USED = 1 -->*/
/* 							<!-- ENDIF -->*/
/* 	*/
/* 							<!-- BEGIN l_block3 -->*/
/* 								<li<!-- IF l_block1.l_block2.l_block3.S_SELECTED --> id="activemenu"<!-- ENDIF -->><a href="{l_block1.l_block2.l_block3.U_TITLE}"><span>{l_block1.l_block2.l_block3.L_TITLE}</span></a></li>*/
/* 								<!-- DEFINE $LI_USED = 1 -->*/
/* 							<!-- END l_block3 -->*/
/* 						<!-- END l_block2 -->*/
/* 						*/
/* 							<!-- ENDIF -->*/
/* 						<!-- END l_block1 -->*/
/* 						<!-- IF $LI_USED -->*/
/* 								</ul>*/
/* 							</div>*/
/* 						<!-- ENDIF -->*/
/* 					</div>*/
/* 	*/
/* 					<div id="main">*/
/* 						<div class="main">*/
/* */
