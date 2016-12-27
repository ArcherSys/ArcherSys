<?php

/* search_body.html */
class __TwigTemplate_edfa534f2a0b0638d39fa6b59674fbfac1d373021b154e2ce8bff569f480821c extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "search_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2 class=\"solo\">";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("SEARCH");
        echo "</h2>

";
        // line 5
        // line 6
        echo "<form method=\"get\" action=\"";
        echo (isset($context["S_SEARCH_ACTION"]) ? $context["S_SEARCH_ACTION"] : null);
        echo "\" data-focus=\"keywords\">

<div class=\"panel\">
\t<div class=\"inner\">
\t<h3>";
        // line 10
        echo $this->env->getExtension('phpbb')->lang("SEARCH_QUERY");
        echo "</h3>

\t";
        // line 12
        // line 13
        echo "\t<fieldset>
\t";
        // line 14
        // line 15
        echo "\t<dl>
\t\t<dt><label for=\"keywords\">";
        // line 16
        echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"search\" class=\"inputbox\" name=\"keywords\" id=\"keywords\" size=\"40\" title=\"";
        // line 17
        echo $this->env->getExtension('phpbb')->lang("SEARCH_KEYWORDS");
        echo "\" /></dd>
\t\t<dd><label for=\"terms1\"><input type=\"radio\" name=\"terms\" id=\"terms1\" value=\"all\" checked=\"checked\" /> ";
        // line 18
        echo $this->env->getExtension('phpbb')->lang("SEARCH_ALL_TERMS");
        echo "</label></dd>
\t\t<dd><label for=\"terms2\"><input type=\"radio\" name=\"terms\" id=\"terms2\" value=\"any\" /> ";
        // line 19
        echo $this->env->getExtension('phpbb')->lang("SEARCH_ANY_TERMS");
        echo "</label></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"author\">";
        // line 22
        echo $this->env->getExtension('phpbb')->lang("SEARCH_AUTHOR");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("SEARCH_AUTHOR_EXPLAIN");
        echo "</span></dt>
\t\t<dd><input type=\"search\" class=\"inputbox\" name=\"author\" id=\"author\" size=\"40\" title=\"";
        // line 23
        echo $this->env->getExtension('phpbb')->lang("SEARCH_AUTHOR");
        echo "\" /></dd>
\t</dl>
\t";
        // line 25
        // line 26
        echo "\t</fieldset>
\t";
        // line 27
        // line 28
        echo "
\t</div>
</div>

<div class=\"panel bg2\">
\t<div class=\"inner\">

\t<h3>";
        // line 35
        echo $this->env->getExtension('phpbb')->lang("SEARCH_OPTIONS");
        echo "</h3>

\t";
        // line 37
        // line 38
        echo "\t<fieldset>
\t";
        // line 39
        // line 40
        echo "\t<dl>
\t\t<dt><label for=\"search_forum\">";
        // line 41
        echo $this->env->getExtension('phpbb')->lang("SEARCH_FORUMS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb')->lang("SEARCH_FORUMS_EXPLAIN");
        echo "</span></dt>
\t\t<dd><select name=\"fid[]\" id=\"search_forum\" multiple=\"multiple\" size=\"8\" title=\"";
        // line 42
        echo $this->env->getExtension('phpbb')->lang("SEARCH_FORUMS");
        echo "\">";
        echo (isset($context["S_FORUM_OPTIONS"]) ? $context["S_FORUM_OPTIONS"] : null);
        echo "</select></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"search_child1\">";
        // line 45
        echo $this->env->getExtension('phpbb')->lang("SEARCH_SUBFORUMS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"search_child1\"><input type=\"radio\" name=\"sc\" id=\"search_child1\" value=\"1\" checked=\"checked\" /> ";
        // line 47
        echo $this->env->getExtension('phpbb')->lang("YES");
        echo "</label>
\t\t\t<label for=\"search_child2\"><input type=\"radio\" name=\"sc\" id=\"search_child2\" value=\"0\" /> ";
        // line 48
        echo $this->env->getExtension('phpbb')->lang("NO");
        echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"sf1\">";
        // line 52
        echo $this->env->getExtension('phpbb')->lang("SEARCH_WITHIN");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><label for=\"sf1\"><input type=\"radio\" name=\"sf\" id=\"sf1\" value=\"all\" checked=\"checked\" /> ";
        // line 53
        echo $this->env->getExtension('phpbb')->lang("SEARCH_TITLE_MSG");
        echo "</label></dd>
\t\t<dd><label for=\"sf2\"><input type=\"radio\" name=\"sf\" id=\"sf2\" value=\"msgonly\" /> ";
        // line 54
        echo $this->env->getExtension('phpbb')->lang("SEARCH_MSG_ONLY");
        echo "</label></dd>
\t\t<dd><label for=\"sf3\"><input type=\"radio\" name=\"sf\" id=\"sf3\" value=\"titleonly\" /> ";
        // line 55
        echo $this->env->getExtension('phpbb')->lang("SEARCH_TITLE_ONLY");
        echo "</label></dd>
\t\t<dd><label for=\"sf4\"><input type=\"radio\" name=\"sf\" id=\"sf4\" value=\"firstpost\" /> ";
        // line 56
        echo $this->env->getExtension('phpbb')->lang("SEARCH_FIRST_POST");
        echo "</label></dd>
\t</dl>
\t";
        // line 58
        // line 59
        echo "
\t<hr class=\"dashed\" />

\t";
        // line 62
        // line 63
        echo "\t<dl>
\t\t<dt><label for=\"show_results1\">";
        // line 64
        echo $this->env->getExtension('phpbb')->lang("DISPLAY_RESULTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"show_results1\"><input type=\"radio\" name=\"sr\" id=\"show_results1\" value=\"posts\" checked=\"checked\" /> ";
        // line 66
        echo $this->env->getExtension('phpbb')->lang("POSTS");
        echo "</label>
\t\t\t<label for=\"show_results2\"><input type=\"radio\" name=\"sr\" id=\"show_results2\" value=\"topics\" /> ";
        // line 67
        echo $this->env->getExtension('phpbb')->lang("TOPICS");
        echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"sd\">";
        // line 71
        echo $this->env->getExtension('phpbb')->lang("RESULT_SORT");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd>";
        // line 72
        echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
        echo "&nbsp;
\t\t\t<label for=\"sa\"><input type=\"radio\" name=\"sd\" id=\"sa\" value=\"a\" /> ";
        // line 73
        echo $this->env->getExtension('phpbb')->lang("SORT_ASCENDING");
        echo "</label>
\t\t\t<label for=\"sd\"><input type=\"radio\" name=\"sd\" id=\"sd\" value=\"d\" checked=\"checked\" /> ";
        // line 74
        echo $this->env->getExtension('phpbb')->lang("SORT_DESCENDING");
        echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label>";
        // line 78
        echo $this->env->getExtension('phpbb')->lang("RESULT_DAYS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd>";
        // line 79
        echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
        echo "</dd>
\t</dl>
\t<dl>
\t\t<dt><label>";
        // line 82
        echo $this->env->getExtension('phpbb')->lang("RETURN_FIRST");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><select name=\"ch\" title=\"";
        // line 83
        echo $this->env->getExtension('phpbb')->lang("RETURN_FIRST");
        echo "\">";
        echo (isset($context["S_CHARACTER_OPTIONS"]) ? $context["S_CHARACTER_OPTIONS"] : null);
        echo "</select> ";
        echo $this->env->getExtension('phpbb')->lang("POST_CHARACTERS");
        echo "</dd>
\t</dl>
\t";
        // line 85
        // line 86
        echo "\t</fieldset>
\t";
        // line 87
        // line 88
        echo "
\t</div>
</div>

<div class=\"panel bg3\">
\t<div class=\"inner\">

\t<fieldset class=\"submit-buttons\">
\t\t";
        // line 96
        echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
        echo "<input type=\"reset\" value=\"";
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" />&nbsp;
\t\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 97
        echo $this->env->getExtension('phpbb')->lang("SEARCH");
        echo "\" class=\"button1\" />
\t</fieldset>

\t</div>
</div>

</form>
";
        // line 104
        // line 105
        echo "
";
        // line 106
        // line 107
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "recentsearch", array()))) {
            // line 108
            echo "<div class=\"forumbg forumbg-table\">
\t<div class=\"inner\">

\t<table class=\"table1\">
\t<thead>
\t<tr>
\t\t<th colspan=\"2\" class=\"name\">";
            // line 114
            echo $this->env->getExtension('phpbb')->lang("RECENT_SEARCHES");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "recentsearch", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["recentsearch"]) {
                // line 119
                echo "\t\t<tr class=\"";
                if (($this->getAttribute($context["recentsearch"], "S_ROW_COUNT", array()) % 2 == 0)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                echo "\">
\t\t\t<td><a href=\"";
                // line 120
                echo $this->getAttribute($context["recentsearch"], "U_KEYWORDS", array());
                echo "\">";
                echo $this->getAttribute($context["recentsearch"], "KEYWORDS", array());
                echo "</a></td>
\t\t\t<td class=\"active\">";
                // line 121
                echo $this->getAttribute($context["recentsearch"], "TIME", array());
                echo "</td>
\t\t</tr>
\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 124
                echo "\t\t<tr class=\"bg1\">
\t\t\t<td colspan=\"2\">";
                // line 125
                echo $this->env->getExtension('phpbb')->lang("NO_RECENT_SEARCHES");
                echo "</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recentsearch'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "\t</tbody>
\t</table>

\t</div>
</div>
";
        }
        // line 134
        // line 135
        echo "
";
        // line 136
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "search_body.html", 136)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "search_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 136,  349 => 135,  348 => 134,  340 => 128,  331 => 125,  328 => 124,  320 => 121,  314 => 120,  305 => 119,  300 => 118,  293 => 114,  285 => 108,  283 => 107,  282 => 106,  279 => 105,  278 => 104,  268 => 97,  262 => 96,  252 => 88,  251 => 87,  248 => 86,  247 => 85,  238 => 83,  233 => 82,  227 => 79,  222 => 78,  215 => 74,  211 => 73,  207 => 72,  202 => 71,  195 => 67,  191 => 66,  185 => 64,  182 => 63,  181 => 62,  176 => 59,  175 => 58,  170 => 56,  166 => 55,  162 => 54,  158 => 53,  153 => 52,  146 => 48,  142 => 47,  136 => 45,  128 => 42,  121 => 41,  118 => 40,  117 => 39,  114 => 38,  113 => 37,  108 => 35,  99 => 28,  98 => 27,  95 => 26,  94 => 25,  89 => 23,  82 => 22,  76 => 19,  72 => 18,  68 => 17,  61 => 16,  58 => 15,  57 => 14,  54 => 13,  53 => 12,  48 => 10,  40 => 6,  39 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <h2 class="solo">{L_SEARCH}</h2>*/
/* */
/* <!-- EVENT search_body_form_before -->*/
/* <form method="get" action="{S_SEARCH_ACTION}" data-focus="keywords">*/
/* */
/* <div class="panel">*/
/* 	<div class="inner">*/
/* 	<h3>{L_SEARCH_QUERY}</h3>*/
/* */
/* 	<!-- EVENT search_body_search_query_before -->*/
/* 	<fieldset>*/
/* 	<!-- EVENT search_body_search_query_prepend -->*/
/* 	<dl>*/
/* 		<dt><label for="keywords">{L_SEARCH_KEYWORDS}{L_COLON}</label><br /><span>{L_SEARCH_KEYWORDS_EXPLAIN}</span></dt>*/
/* 		<dd><input type="search" class="inputbox" name="keywords" id="keywords" size="40" title="{L_SEARCH_KEYWORDS}" /></dd>*/
/* 		<dd><label for="terms1"><input type="radio" name="terms" id="terms1" value="all" checked="checked" /> {L_SEARCH_ALL_TERMS}</label></dd>*/
/* 		<dd><label for="terms2"><input type="radio" name="terms" id="terms2" value="any" /> {L_SEARCH_ANY_TERMS}</label></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="author">{L_SEARCH_AUTHOR}{L_COLON}</label><br /><span>{L_SEARCH_AUTHOR_EXPLAIN}</span></dt>*/
/* 		<dd><input type="search" class="inputbox" name="author" id="author" size="40" title="{L_SEARCH_AUTHOR}" /></dd>*/
/* 	</dl>*/
/* 	<!-- EVENT search_body_search_query_append -->*/
/* 	</fieldset>*/
/* 	<!-- EVENT search_body_search_query_after -->*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <div class="panel bg2">*/
/* 	<div class="inner">*/
/* */
/* 	<h3>{L_SEARCH_OPTIONS}</h3>*/
/* */
/* 	<!-- EVENT search_body_search_options_before -->*/
/* 	<fieldset>*/
/* 	<!-- EVENT search_body_search_options_prepend -->*/
/* 	<dl>*/
/* 		<dt><label for="search_forum">{L_SEARCH_FORUMS}{L_COLON}</label><br /><span>{L_SEARCH_FORUMS_EXPLAIN}</span></dt>*/
/* 		<dd><select name="fid[]" id="search_forum" multiple="multiple" size="8" title="{L_SEARCH_FORUMS}">{S_FORUM_OPTIONS}</select></dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="search_child1">{L_SEARCH_SUBFORUMS}{L_COLON}</label></dt>*/
/* 		<dd>*/
/* 			<label for="search_child1"><input type="radio" name="sc" id="search_child1" value="1" checked="checked" /> {L_YES}</label>*/
/* 			<label for="search_child2"><input type="radio" name="sc" id="search_child2" value="0" /> {L_NO}</label>*/
/* 		</dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="sf1">{L_SEARCH_WITHIN}{L_COLON}</label></dt>*/
/* 		<dd><label for="sf1"><input type="radio" name="sf" id="sf1" value="all" checked="checked" /> {L_SEARCH_TITLE_MSG}</label></dd>*/
/* 		<dd><label for="sf2"><input type="radio" name="sf" id="sf2" value="msgonly" /> {L_SEARCH_MSG_ONLY}</label></dd>*/
/* 		<dd><label for="sf3"><input type="radio" name="sf" id="sf3" value="titleonly" /> {L_SEARCH_TITLE_ONLY}</label></dd>*/
/* 		<dd><label for="sf4"><input type="radio" name="sf" id="sf4" value="firstpost" /> {L_SEARCH_FIRST_POST}</label></dd>*/
/* 	</dl>*/
/* 	<!-- EVENT search_body_search_options_append -->*/
/* */
/* 	<hr class="dashed" />*/
/* */
/* 	<!-- EVENT search_body_search_display_options_prepend -->*/
/* 	<dl>*/
/* 		<dt><label for="show_results1">{L_DISPLAY_RESULTS}{L_COLON}</label></dt>*/
/* 		<dd>*/
/* 			<label for="show_results1"><input type="radio" name="sr" id="show_results1" value="posts" checked="checked" /> {L_POSTS}</label>*/
/* 			<label for="show_results2"><input type="radio" name="sr" id="show_results2" value="topics" /> {L_TOPICS}</label>*/
/* 		</dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="sd">{L_RESULT_SORT}{L_COLON}</label></dt>*/
/* 		<dd>{S_SELECT_SORT_KEY}&nbsp;*/
/* 			<label for="sa"><input type="radio" name="sd" id="sa" value="a" /> {L_SORT_ASCENDING}</label>*/
/* 			<label for="sd"><input type="radio" name="sd" id="sd" value="d" checked="checked" /> {L_SORT_DESCENDING}</label>*/
/* 		</dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label>{L_RESULT_DAYS}{L_COLON}</label></dt>*/
/* 		<dd>{S_SELECT_SORT_DAYS}</dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label>{L_RETURN_FIRST}{L_COLON}</label></dt>*/
/* 		<dd><select name="ch" title="{L_RETURN_FIRST}">{S_CHARACTER_OPTIONS}</select> {L_POST_CHARACTERS}</dd>*/
/* 	</dl>*/
/* 	<!-- EVENT search_body_search_display_options_append -->*/
/* 	</fieldset>*/
/* 	<!-- EVENT search_body_search_options_after -->*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <div class="panel bg3">*/
/* 	<div class="inner">*/
/* */
/* 	<fieldset class="submit-buttons">*/
/* 		{S_HIDDEN_FIELDS}<input type="reset" value="{L_RESET}" name="reset" class="button2" />&nbsp;*/
/* 		<input type="submit" name="submit" value="{L_SEARCH}" class="button1" />*/
/* 	</fieldset>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* </form>*/
/* <!-- EVENT search_body_form_after -->*/
/* */
/* <!-- EVENT search_body_recent_search_before -->*/
/* <!-- IF .recentsearch -->*/
/* <div class="forumbg forumbg-table">*/
/* 	<div class="inner">*/
/* */
/* 	<table class="table1">*/
/* 	<thead>*/
/* 	<tr>*/
/* 		<th colspan="2" class="name">{L_RECENT_SEARCHES}</th>*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	<!-- BEGIN recentsearch -->*/
/* 		<tr class="<!-- IF recentsearch.S_ROW_COUNT is even -->bg1<!-- ELSE -->bg2<!-- ENDIF -->">*/
/* 			<td><a href="{recentsearch.U_KEYWORDS}">{recentsearch.KEYWORDS}</a></td>*/
/* 			<td class="active">{recentsearch.TIME}</td>*/
/* 		</tr>*/
/* 	<!-- BEGINELSE -->*/
/* 		<tr class="bg1">*/
/* 			<td colspan="2">{L_NO_RECENT_SEARCHES}</td>*/
/* 		</tr>*/
/* 	<!-- END recentsearch -->*/
/* 	</tbody>*/
/* 	</table>*/
/* */
/* 	</div>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* <!-- EVENT search_body_recent_search_after -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
