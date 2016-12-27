<?php

/* memberlist_body.html */
class __TwigTemplate_555c92ebd98bb354218178b83f03c981a7b1e35c7b8a65dcefee750483ac8cf9 extends Twig_Template
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
        if ((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null)) {
            // line 2
            echo "\t";
            $location = "simple_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_header.html", "memberlist_body.html", 2)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 3
            echo "\t";
            $location = "memberlist_search.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("memberlist_search.html", "memberlist_body.html", 3)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 4
            echo "\t<form method=\"post\" id=\"results\" action=\"";
            echo (isset($context["S_MODE_ACTION"]) ? $context["S_MODE_ACTION"] : null);
            echo "\" onsubmit=\"insert_marked_users('#results', this.user); return false;\" data-form-name=\"";
            echo (isset($context["S_FORM_NAME"]) ? $context["S_FORM_NAME"] : null);
            echo "\" data-field-name=\"";
            echo (isset($context["S_FIELD_NAME"]) ? $context["S_FIELD_NAME"] : null);
            echo "\">

";
        } else {
            // line 7
            echo "\t";
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "memberlist_body.html", 7)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 8
            echo "\t<div class=\"panel\" id=\"memberlist_search\"";
            if ( !(isset($context["S_SEARCH_USER"]) ? $context["S_SEARCH_USER"] : null)) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t";
            // line 9
            $location = "memberlist_search.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("memberlist_search.html", "memberlist_body.html", 9)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 10
            echo "\t</div>
\t<form method=\"post\" action=\"";
            // line 11
            echo (isset($context["S_MODE_ACTION"]) ? $context["S_MODE_ACTION"] : null);
            echo "\">

";
        }
        // line 14
        echo "
\t";
        // line 15
        if ((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) {
            // line 16
            echo "\t\t<h2 class=\"group-title\"";
            if ((isset($context["GROUP_COLOR"]) ? $context["GROUP_COLOR"] : null)) {
                echo " style=\"color:#";
                echo (isset($context["GROUP_COLOR"]) ? $context["GROUP_COLOR"] : null);
                echo ";\"";
            }
            echo ">";
            echo (isset($context["GROUP_NAME"]) ? $context["GROUP_NAME"] : null);
            echo "</h2>
\t\t";
            // line 17
            if ((isset($context["U_MANAGE"]) ? $context["U_MANAGE"] : null)) {
                // line 18
                echo "\t\t\t<p class=\"right responsive-center manage rightside\"><a href=\"";
                echo (isset($context["U_MANAGE"]) ? $context["U_MANAGE"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("MANAGE_GROUP");
                echo "</a></p>
\t\t";
            }
            // line 20
            echo "\t\t<p>";
            echo (isset($context["GROUP_DESC"]) ? $context["GROUP_DESC"] : null);
            echo " ";
            echo (isset($context["GROUP_TYPE"]) ? $context["GROUP_TYPE"] : null);
            echo "</p>

\t\t<p>
\t\t\t";
            // line 23
            if ((isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null)) {
                echo (isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null);
            }
            // line 24
            echo "\t\t\t";
            if ((isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null)) {
                echo (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null);
            }
            // line 25
            echo "\t\t\t";
            if ((isset($context["GROUP_RANK"]) ? $context["GROUP_RANK"] : null)) {
                echo (isset($context["GROUP_RANK"]) ? $context["GROUP_RANK"] : null);
            }
            // line 26
            echo "\t\t</p>
\t";
        } else {
            // line 28
            echo "\t\t<h2 class=\"solo\">";
            echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
            if ((isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " <a href=\"";
                echo (isset($context["U_SEARCH_WORDS"]) ? $context["U_SEARCH_WORDS"] : null);
                echo "\">";
                echo (isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null);
                echo "</a>";
            }
            echo "</h2>

\t\t<div class=\"action-bar top\">
\t\t\t<div class=\"member-search panel\">
\t\t\t\t";
            // line 32
            if (((isset($context["U_FIND_MEMBER"]) ? $context["U_FIND_MEMBER"] : null) &&  !(isset($context["S_SEARCH_USER"]) ? $context["S_SEARCH_USER"] : null))) {
                echo "<a href=\"";
                echo (isset($context["U_FIND_MEMBER"]) ? $context["U_FIND_MEMBER"] : null);
                echo "\" id=\"member_search\" data-alt-text=\"";
                echo addslashes($this->env->getExtension('phpbb')->lang("HIDE_MEMBER_SEARCH"));
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
                echo "</a> &bull; ";
            } elseif ((((isset($context["S_SEARCH_USER"]) ? $context["S_SEARCH_USER"] : null) && (isset($context["U_HIDE_FIND_MEMBER"]) ? $context["U_HIDE_FIND_MEMBER"] : null)) &&  !(isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null))) {
                echo "<a href=\"";
                echo (isset($context["U_HIDE_FIND_MEMBER"]) ? $context["U_HIDE_FIND_MEMBER"] : null);
                echo "\" id=\"member_search\" data-alt-text=\"";
                echo addslashes($this->env->getExtension('phpbb')->lang("FIND_USERNAME"));
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("HIDE_MEMBER_SEARCH");
                echo "</a> &bull; ";
            }
            // line 33
            echo "\t\t\t\t<strong>
\t\t\t\t";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "first_char", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["first_char"]) {
                // line 35
                echo "\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["first_char"], "U_SORT", array());
                echo "\">";
                echo $this->getAttribute($context["first_char"], "DESC", array());
                echo "</a>&nbsp;
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['first_char'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "\t\t\t\t</strong>
\t\t\t</div>
\t\t
\t\t\t<div class=\"pagination\">
\t\t\t\t";
            // line 41
            echo (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null);
            echo "
\t\t\t\t";
            // line 42
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                echo " 
\t\t\t\t\t";
                // line 43
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "memberlist_body.html", 43)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 44
                echo "\t\t\t\t";
            } else {
                echo " 
\t\t\t\t\t &bull; ";
                // line 45
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "
\t\t\t\t";
            }
            // line 47
            echo "\t\t\t</div>
\t\t</div>
\t";
        }
        // line 50
        echo "
\t";
        // line 51
        if ((((isset($context["S_LEADERS_SET"]) ? $context["S_LEADERS_SET"] : null) ||  !(isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) ||  !twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "memberrow", array())))) {
            // line 52
            echo "\t<div class=\"forumbg forumbg-table\">
\t\t<div class=\"inner\">

\t\t<table class=\"table1\" id=\"memberlist\">
\t\t<thead>
\t\t<tr>
\t\t\t<th class=\"name\" data-dfn=\"";
            // line 58
            echo $this->env->getExtension('phpbb')->lang("RANK");
            echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
            if (((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "memberrow", array())))) {
                echo $this->env->getExtension('phpbb')->lang("GROUP_LEADER");
            } else {
                echo $this->env->getExtension('phpbb')->lang("USERNAME");
            }
            echo "\"><span class=\"rank-img\"><a href=\"";
            echo (isset($context["U_SORT_RANK"]) ? $context["U_SORT_RANK"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("RANK");
            echo "</a></span><a href=\"";
            echo (isset($context["U_SORT_USERNAME"]) ? $context["U_SORT_USERNAME"] : null);
            echo "\">";
            if (((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "memberrow", array())))) {
                echo $this->env->getExtension('phpbb')->lang("GROUP_LEADER");
            } else {
                echo $this->env->getExtension('phpbb')->lang("USERNAME");
            }
            echo "</a></th>
\t\t\t<th class=\"posts\"><a href=\"";
            // line 59
            echo (isset($context["U_SORT_POSTS"]) ? $context["U_SORT_POSTS"] : null);
            echo "#memberlist\">";
            echo $this->env->getExtension('phpbb')->lang("POSTS");
            echo "</a></th>
\t\t\t<th class=\"info\">";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                if ( !$this->getAttribute($context["custom_fields"], "S_FIRST_ROW", array())) {
                    echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                    echo " ";
                }
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</th>
\t\t\t<th class=\"joined\"><a href=\"";
            // line 61
            echo (isset($context["U_SORT_JOINED"]) ? $context["U_SORT_JOINED"] : null);
            echo "#memberlist\">";
            echo $this->env->getExtension('phpbb')->lang("JOINED");
            echo "</a></th>
\t\t\t";
            // line 62
            if ((isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null)) {
                echo "<th class=\"active\"><a href=\"";
                echo (isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null);
                echo "#memberlist\">";
                echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
                echo "</a></th>";
            }
            // line 63
            echo "\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t";
        }
        // line 67
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "memberrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["memberrow"]) {
            // line 68
            echo "\t\t\t";
            if ((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) {
                // line 69
                echo "\t\t\t\t";
                if (( !$this->getAttribute($context["memberrow"], "S_GROUP_LEADER", array()) &&  !$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "S_MEMBER_HEADER", array()))) {
                    // line 70
                    echo "\t\t\t\t";
                    if (((isset($context["S_LEADERS_SET"]) ? $context["S_LEADERS_SET"] : null) && $this->getAttribute($context["memberrow"], "S_FIRST_ROW", array()))) {
                        // line 71
                        echo "\t\t\t\t<tr class=\"bg1\">
\t\t\t\t\t<td colspan=\"";
                        // line 72
                        if ((isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null)) {
                            echo "5";
                        } else {
                            echo "4";
                        }
                        echo "\">&nbsp;</td>
\t\t\t\t</tr>
\t\t\t\t";
                    }
                    // line 75
                    if ((isset($context["S_LEADERS_SET"]) ? $context["S_LEADERS_SET"] : null)) {
                        // line 76
                        echo "\t\t</tbody>
\t\t</table>

\t</div>
</div>
";
                    }
                    // line 82
                    echo "<div class=\"forumbg forumbg-table\">
\t<div class=\"inner\">

\t<table class=\"table1\">
\t<thead>
\t<tr>
\t";
                    // line 88
                    if ( !(isset($context["S_LEADERS_SET"]) ? $context["S_LEADERS_SET"] : null)) {
                        // line 89
                        echo "\t\t<th class=\"name\" data-dfn=\"";
                        echo $this->env->getExtension('phpbb')->lang("RANK");
                        echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                        echo $this->env->getExtension('phpbb')->lang("USERNAME");
                        echo "\"><span class=\"rank-img\"><a href=\"";
                        echo (isset($context["U_SORT_RANK"]) ? $context["U_SORT_RANK"] : null);
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("RANK");
                        echo "</a></span><a href=\"";
                        echo (isset($context["U_SORT_USERNAME"]) ? $context["U_SORT_USERNAME"] : null);
                        echo "\">";
                        if ((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) {
                            echo $this->env->getExtension('phpbb')->lang("GROUP_MEMBERS");
                        } else {
                            echo $this->env->getExtension('phpbb')->lang("USERNAME");
                        }
                        echo "</a></th>
\t\t\t<th class=\"posts\"><a href=\"";
                        // line 90
                        echo (isset($context["U_SORT_POSTS"]) ? $context["U_SORT_POSTS"] : null);
                        echo "#memberlist\">";
                        echo $this->env->getExtension('phpbb')->lang("POSTS");
                        echo "</a></th>
\t\t\t<th class=\"info\">";
                        // line 91
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["memberrow"], "custom_fields", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                            if ( !$this->getAttribute($context["custom_fields"], "S_FIRST_ROW", array())) {
                                echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                                echo " ";
                            }
                            echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</th>
\t\t\t<th class=\"joined\"><a href=\"";
                        // line 92
                        echo (isset($context["U_SORT_JOINED"]) ? $context["U_SORT_JOINED"] : null);
                        echo "#memberlist\">";
                        echo $this->env->getExtension('phpbb')->lang("JOINED");
                        echo "</a></th>
\t\t\t";
                        // line 93
                        if ((isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null)) {
                            echo "<th class=\"active\"><a href=\"";
                            echo (isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null);
                            echo "#memberlist\">";
                            echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
                            echo "</a></th>";
                        }
                        // line 94
                        echo "\t";
                    } elseif ((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) {
                        // line 95
                        echo "\t\t<th class=\"name\">";
                        echo $this->env->getExtension('phpbb')->lang("GROUP_MEMBERS");
                        echo "</th>
\t\t<th class=\"posts\">";
                        // line 96
                        echo $this->env->getExtension('phpbb')->lang("POSTS");
                        echo "</th>
\t\t<th class=\"info\">";
                        // line 97
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["memberrow"], "custom_fields", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                            if ( !$this->getAttribute($context["custom_fields"], "S_FIRST_ROW", array())) {
                                echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                                echo " ";
                            }
                            echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</th>
\t\t<th class=\"joined\">";
                        // line 98
                        echo $this->env->getExtension('phpbb')->lang("JOINED");
                        echo "</th>
\t\t";
                        // line 99
                        if ((isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null)) {
                            echo "<th class=\"active\">";
                            echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
                            echo "</th>";
                        }
                        // line 100
                        echo "\t";
                    }
                    // line 101
                    echo "\t</tr>
\t</thead>
\t<tbody>
\t\t\t\t\t";
                    // line 104
                    $value = 1;
                    $context['definition']->set('S_MEMBER_HEADER', $value);
                    // line 105
                    echo "\t\t\t\t";
                }
                // line 106
                echo "\t\t\t";
            }
            // line 107
            echo "
\t<tr class=\"";
            // line 108
            if (($this->getAttribute($context["memberrow"], "S_ROW_COUNT", array()) % 2 == 0)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            if ($this->getAttribute($context["memberrow"], "S_INACTIVE", array())) {
                echo " inactive";
            }
            echo "\">
\t\t<td><span class=\"rank-img\">";
            // line 109
            if ($this->getAttribute($context["memberrow"], "RANK_IMG", array())) {
                echo $this->getAttribute($context["memberrow"], "RANK_IMG", array());
            } else {
                echo $this->getAttribute($context["memberrow"], "RANK_TITLE", array());
            }
            echo "</span>";
            if (((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null) &&  !(isset($context["S_SELECT_SINGLE"]) ? $context["S_SELECT_SINGLE"] : null))) {
                echo "<input type=\"checkbox\" name=\"user\" value=\"";
                echo $this->getAttribute($context["memberrow"], "USERNAME", array());
                echo "\" /> ";
            }
            echo $this->getAttribute($context["memberrow"], "USERNAME_FULL", array());
            if ($this->getAttribute($context["memberrow"], "S_INACTIVE", array())) {
                echo " (";
                echo $this->env->getExtension('phpbb')->lang("INACTIVE");
                echo ")";
            }
            if ((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null)) {
                echo "<br />[&nbsp;<a href=\"#\" onclick=\"insert_single_user('#results', '";
                echo $this->getAttribute($context["memberrow"], "A_USERNAME", array());
                echo "'); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("SELECT");
                echo "</a>&nbsp;]";
            }
            echo "</td>
\t\t<td class=\"posts\">";
            // line 110
            if (($this->getAttribute($context["memberrow"], "POSTS", array()) && (isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null))) {
                echo "<a href=\"";
                echo $this->getAttribute($context["memberrow"], "U_SEARCH_USER", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_USER_POSTS");
                echo "\">";
                echo $this->getAttribute($context["memberrow"], "POSTS", array());
                echo "</a>";
            } else {
                echo $this->getAttribute($context["memberrow"], "POSTS", array());
            }
            echo "</td>
\t\t<td class=\"info\">";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["memberrow"], "custom_fields", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                echo "<div>";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                echo "</div>";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                echo "&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
\t\t<td>";
            // line 112
            echo $this->getAttribute($context["memberrow"], "JOINED", array());
            echo "</td>
\t\t";
            // line 113
            if ((isset($context["S_VIEWONLINE"]) ? $context["S_VIEWONLINE"] : null)) {
                echo "<td>";
                echo $this->getAttribute($context["memberrow"], "LAST_ACTIVE", array());
                echo "&nbsp;</td>";
            }
            // line 114
            echo "\t</tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 116
            echo "\t<tr class=\"bg1\">
\t\t<td colspan=\"";
            // line 117
            if ((isset($context["S_VIEWONLINE"]) ? $context["S_VIEWONLINE"] : null)) {
                echo "5";
            } else {
                echo "4";
            }
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("NO_MEMBERS");
            echo "</td>
\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['memberrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "\t</tbody>
\t</table>

\t</div>
</div>

";
        // line 126
        if (((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null) &&  !(isset($context["S_SELECT_SINGLE"]) ? $context["S_SELECT_SINGLE"] : null))) {
            // line 127
            echo "<fieldset class=\"display-actions\">
\t<input type=\"submit\" name=\"submit\" value=\"";
            // line 128
            echo $this->env->getExtension('phpbb')->lang("SELECT_MARKED");
            echo "\" class=\"button2\" />
\t<div><a href=\"#\" onclick=\"marklist('results', 'user', true); return false;\">";
            // line 129
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "</a> &bull; <a href=\"#\" onclick=\"marklist('results', 'user', false); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "</a></div>
</fieldset>
";
        }
        // line 132
        echo "
";
        // line 133
        if ((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null)) {
            // line 134
            echo "</form>
<form method=\"post\" id=\"sort-results\" action=\"";
            // line 135
            echo (isset($context["S_MODE_ACTION"]) ? $context["S_MODE_ACTION"] : null);
            echo "\">
";
        }
        // line 137
        echo "
";
        // line 138
        if (((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null) &&  !(isset($context["S_SEARCH_USER"]) ? $context["S_SEARCH_USER"] : null))) {
            // line 139
            echo "<fieldset class=\"display-options\">
\t<label for=\"sk\">";
            // line 140
            echo $this->env->getExtension('phpbb')->lang("SELECT_SORT_METHOD");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <select name=\"sk\" id=\"sk\">";
            echo (isset($context["S_MODE_SELECT"]) ? $context["S_MODE_SELECT"] : null);
            echo "</select></label>
\t<label for=\"sd\">";
            // line 141
            echo $this->env->getExtension('phpbb')->lang("ORDER");
            echo " <select name=\"sd\" id=\"sd\">";
            echo (isset($context["S_ORDER_SELECT"]) ? $context["S_ORDER_SELECT"] : null);
            echo "</select></label>
\t<input type=\"submit\" name=\"sort\" value=\"";
            // line 142
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" class=\"button2\" />
</fieldset>
";
        }
        // line 145
        echo "
</form>

<div class=\"action-bar bottom\">
\t<div class=\"pagination\">
\t\t";
        // line 150
        echo (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null);
        echo "
\t\t";
        // line 151
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
            echo " 
\t\t\t";
            // line 152
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "memberlist_body.html", 152)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 153
            echo "\t\t";
        } else {
            echo " 
\t\t\t &bull; ";
            // line 154
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "
\t\t";
        }
        // line 156
        echo "\t</div>
</div>

";
        // line 159
        if ((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null)) {
            // line 160
            echo "\t";
            $location = "simple_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_footer.html", "memberlist_body.html", 160)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        } else {
            // line 162
            echo "\t";
            $location = "jumpbox.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("jumpbox.html", "memberlist_body.html", 162)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 163
            echo "\t";
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "memberlist_body.html", 163)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "memberlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  720 => 163,  707 => 162,  693 => 160,  691 => 159,  686 => 156,  681 => 154,  676 => 153,  664 => 152,  660 => 151,  656 => 150,  649 => 145,  643 => 142,  637 => 141,  630 => 140,  627 => 139,  625 => 138,  622 => 137,  617 => 135,  614 => 134,  612 => 133,  609 => 132,  601 => 129,  597 => 128,  594 => 127,  592 => 126,  584 => 120,  569 => 117,  566 => 116,  560 => 114,  554 => 113,  550 => 112,  532 => 111,  518 => 110,  491 => 109,  480 => 108,  477 => 107,  474 => 106,  471 => 105,  468 => 104,  463 => 101,  460 => 100,  454 => 99,  450 => 98,  435 => 97,  431 => 96,  426 => 95,  423 => 94,  415 => 93,  409 => 92,  394 => 91,  388 => 90,  369 => 89,  367 => 88,  359 => 82,  351 => 76,  349 => 75,  339 => 72,  336 => 71,  333 => 70,  330 => 69,  327 => 68,  321 => 67,  315 => 63,  307 => 62,  301 => 61,  286 => 60,  280 => 59,  258 => 58,  250 => 52,  248 => 51,  245 => 50,  240 => 47,  235 => 45,  230 => 44,  218 => 43,  214 => 42,  210 => 41,  204 => 37,  193 => 35,  189 => 34,  186 => 33,  168 => 32,  152 => 28,  148 => 26,  143 => 25,  138 => 24,  134 => 23,  125 => 20,  117 => 18,  115 => 17,  104 => 16,  102 => 15,  99 => 14,  93 => 11,  90 => 10,  78 => 9,  71 => 8,  58 => 7,  47 => 4,  34 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_IN_SEARCH_POPUP -->*/
/* 	<!-- INCLUDE simple_header.html -->*/
/* 	<!-- INCLUDE memberlist_search.html -->*/
/* 	<form method="post" id="results" action="{S_MODE_ACTION}" onsubmit="insert_marked_users('#results', this.user); return false;" data-form-name="{S_FORM_NAME}" data-field-name="{S_FIELD_NAME}">*/
/* */
/* <!-- ELSE -->*/
/* 	<!-- INCLUDE overall_header.html -->*/
/* 	<div class="panel" id="memberlist_search"<!-- IF not S_SEARCH_USER --> style="display: none;"<!-- ENDIF -->>*/
/* 	<!-- INCLUDE memberlist_search.html -->*/
/* 	</div>*/
/* 	<form method="post" action="{S_MODE_ACTION}">*/
/* */
/* <!-- ENDIF -->*/
/* */
/* 	<!-- IF S_SHOW_GROUP -->*/
/* 		<h2 class="group-title"<!-- IF GROUP_COLOR --> style="color:#{GROUP_COLOR};"<!-- ENDIF -->>{GROUP_NAME}</h2>*/
/* 		<!-- IF U_MANAGE -->*/
/* 			<p class="right responsive-center manage rightside"><a href="{U_MANAGE}">{L_MANAGE_GROUP}</a></p>*/
/* 		<!-- ENDIF -->*/
/* 		<p>{GROUP_DESC} {GROUP_TYPE}</p>*/
/* */
/* 		<p>*/
/* 			<!-- IF AVATAR_IMG -->{AVATAR_IMG}<!-- ENDIF -->*/
/* 			<!-- IF RANK_IMG -->{RANK_IMG}<!-- ENDIF -->*/
/* 			<!-- IF GROUP_RANK -->{GROUP_RANK}<!-- ENDIF -->*/
/* 		</p>*/
/* 	<!-- ELSE -->*/
/* 		<h2 class="solo">{PAGE_TITLE}<!-- IF SEARCH_WORDS -->{L_COLON} <a href="{U_SEARCH_WORDS}">{SEARCH_WORDS}</a><!-- ENDIF --></h2>*/
/* */
/* 		<div class="action-bar top">*/
/* 			<div class="member-search panel">*/
/* 				<!-- IF U_FIND_MEMBER and not S_SEARCH_USER --><a href="{U_FIND_MEMBER}" id="member_search" data-alt-text="{LA_HIDE_MEMBER_SEARCH}">{L_FIND_USERNAME}</a> &bull; <!-- ELSEIF S_SEARCH_USER and U_HIDE_FIND_MEMBER and not S_IN_SEARCH_POPUP --><a href="{U_HIDE_FIND_MEMBER}" id="member_search" data-alt-text="{LA_FIND_USERNAME}">{L_HIDE_MEMBER_SEARCH}</a> &bull; <!-- ENDIF -->*/
/* 				<strong>*/
/* 				<!-- BEGIN first_char -->*/
/* 					<a href="{first_char.U_SORT}">{first_char.DESC}</a>&nbsp;*/
/* 				<!-- END first_char -->*/
/* 				</strong>*/
/* 			</div>*/
/* 		*/
/* 			<div class="pagination">*/
/* 				{TOTAL_USERS}*/
/* 				<!-- IF .pagination --> */
/* 					<!-- INCLUDE pagination.html -->*/
/* 				<!-- ELSE --> */
/* 					 &bull; {PAGE_NUMBER}*/
/* 				<!-- ENDIF -->*/
/* 			</div>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_LEADERS_SET or not S_SHOW_GROUP or not .memberrow -->*/
/* 	<div class="forumbg forumbg-table">*/
/* 		<div class="inner">*/
/* */
/* 		<table class="table1" id="memberlist">*/
/* 		<thead>*/
/* 		<tr>*/
/* 			<th class="name" data-dfn="{L_RANK}{L_COMMA_SEPARATOR}<!-- IF S_SHOW_GROUP and .memberrow -->{L_GROUP_LEADER}<!-- ELSE -->{L_USERNAME}<!-- ENDIF -->"><span class="rank-img"><a href="{U_SORT_RANK}">{L_RANK}</a></span><a href="{U_SORT_USERNAME}"><!-- IF S_SHOW_GROUP and .memberrow -->{L_GROUP_LEADER}<!-- ELSE -->{L_USERNAME}<!-- ENDIF --></a></th>*/
/* 			<th class="posts"><a href="{U_SORT_POSTS}#memberlist">{L_POSTS}</a></th>*/
/* 			<th class="info"><!-- BEGIN custom_fields --><!-- IF not custom_fields.S_FIRST_ROW -->{L_COMMA_SEPARATOR} <!-- ENDIF -->{custom_fields.PROFILE_FIELD_NAME}<!-- END custom_fields --></th>*/
/* 			<th class="joined"><a href="{U_SORT_JOINED}#memberlist">{L_JOINED}</a></th>*/
/* 			<!-- IF U_SORT_ACTIVE --><th class="active"><a href="{U_SORT_ACTIVE}#memberlist">{L_LAST_ACTIVE}</a></th><!-- ENDIF -->*/
/* 		</tr>*/
/* 		</thead>*/
/* 		<tbody>*/
/* 	<!-- ENDIF -->*/
/* 		<!-- BEGIN memberrow -->*/
/* 			<!-- IF S_SHOW_GROUP -->*/
/* 				<!-- IF not memberrow.S_GROUP_LEADER and not $S_MEMBER_HEADER -->*/
/* 				<!-- IF S_LEADERS_SET and memberrow.S_FIRST_ROW -->*/
/* 				<tr class="bg1">*/
/* 					<td colspan="<!-- IF U_SORT_ACTIVE -->5<!-- ELSE -->4<!-- ENDIF -->">&nbsp;</td>*/
/* 				</tr>*/
/* 				<!-- ENDIF -->*/
/* <!-- IF S_LEADERS_SET -->*/
/* 		</tbody>*/
/* 		</table>*/
/* */
/* 	</div>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* <div class="forumbg forumbg-table">*/
/* 	<div class="inner">*/
/* */
/* 	<table class="table1">*/
/* 	<thead>*/
/* 	<tr>*/
/* 	<!-- IF not S_LEADERS_SET -->*/
/* 		<th class="name" data-dfn="{L_RANK}{L_COMMA_SEPARATOR}{L_USERNAME}"><span class="rank-img"><a href="{U_SORT_RANK}">{L_RANK}</a></span><a href="{U_SORT_USERNAME}"><!-- IF S_SHOW_GROUP -->{L_GROUP_MEMBERS}<!-- ELSE -->{L_USERNAME}<!-- ENDIF --></a></th>*/
/* 			<th class="posts"><a href="{U_SORT_POSTS}#memberlist">{L_POSTS}</a></th>*/
/* 			<th class="info"><!-- BEGIN custom_fields --><!-- IF not custom_fields.S_FIRST_ROW -->{L_COMMA_SEPARATOR} <!-- ENDIF -->{custom_fields.PROFILE_FIELD_NAME}<!-- END custom_fields --></th>*/
/* 			<th class="joined"><a href="{U_SORT_JOINED}#memberlist">{L_JOINED}</a></th>*/
/* 			<!-- IF U_SORT_ACTIVE --><th class="active"><a href="{U_SORT_ACTIVE}#memberlist">{L_LAST_ACTIVE}</a></th><!-- ENDIF -->*/
/* 	<!-- ELSEIF S_SHOW_GROUP -->*/
/* 		<th class="name">{L_GROUP_MEMBERS}</th>*/
/* 		<th class="posts">{L_POSTS}</th>*/
/* 		<th class="info"><!-- BEGIN custom_fields --><!-- IF not custom_fields.S_FIRST_ROW -->{L_COMMA_SEPARATOR} <!-- ENDIF -->{custom_fields.PROFILE_FIELD_NAME}<!-- END custom_fields --></th>*/
/* 		<th class="joined">{L_JOINED}</th>*/
/* 		<!-- IF U_SORT_ACTIVE --><th class="active">{L_LAST_ACTIVE}</th><!-- ENDIF -->*/
/* 	<!-- ENDIF -->*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 					<!-- DEFINE $S_MEMBER_HEADER = 1 -->*/
/* 				<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* */
/* 	<tr class="<!-- IF memberrow.S_ROW_COUNT is even -->bg1<!-- ELSE -->bg2<!-- ENDIF --><!-- IF memberrow.S_INACTIVE --> inactive<!-- ENDIF -->">*/
/* 		<td><span class="rank-img"><!-- EVENT memberlist_body_rank_prepend --><!-- IF memberrow.RANK_IMG -->{memberrow.RANK_IMG}<!-- ELSE -->{memberrow.RANK_TITLE}<!-- ENDIF --><!-- EVENT memberlist_body_rank_append --></span><!-- IF S_IN_SEARCH_POPUP and not S_SELECT_SINGLE --><input type="checkbox" name="user" value="{memberrow.USERNAME}" /> <!-- ENDIF --><!-- EVENT memberlist_body_username_prepend -->{memberrow.USERNAME_FULL}<!-- IF memberrow.S_INACTIVE --> ({L_INACTIVE})<!-- ENDIF --><!-- EVENT memberlist_body_username_append --><!-- IF S_IN_SEARCH_POPUP --><br />[&nbsp;<a href="#" onclick="insert_single_user('#results', '{memberrow.A_USERNAME}'); return false;">{L_SELECT}</a>&nbsp;]<!-- ENDIF --></td>*/
/* 		<td class="posts"><!-- IF memberrow.POSTS and S_DISPLAY_SEARCH --><a href="{memberrow.U_SEARCH_USER}" title="{L_SEARCH_USER_POSTS}">{memberrow.POSTS}</a><!-- ELSE -->{memberrow.POSTS}<!-- ENDIF --></td>*/
/* 		<td class="info"><!-- BEGIN custom_fields --><div>{memberrow.custom_fields.PROFILE_FIELD_VALUE}</div><!-- BEGINELSE -->&nbsp;<!-- END custom_fields --></td>*/
/* 		<td>{memberrow.JOINED}</td>*/
/* 		<!-- IF S_VIEWONLINE --><td>{memberrow.LAST_ACTIVE}&nbsp;</td><!-- ENDIF -->*/
/* 	</tr>*/
/* 		<!-- BEGINELSE -->*/
/* 	<tr class="bg1">*/
/* 		<td colspan="<!-- IF S_VIEWONLINE -->5<!-- ELSE -->4<!-- ENDIF -->">{L_NO_MEMBERS}</td>*/
/* 	</tr>*/
/* 		<!-- END memberrow -->*/
/* 	</tbody>*/
/* 	</table>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <!-- IF S_IN_SEARCH_POPUP and not S_SELECT_SINGLE -->*/
/* <fieldset class="display-actions">*/
/* 	<input type="submit" name="submit" value="{L_SELECT_MARKED}" class="button2" />*/
/* 	<div><a href="#" onclick="marklist('results', 'user', true); return false;">{L_MARK_ALL}</a> &bull; <a href="#" onclick="marklist('results', 'user', false); return false;">{L_UNMARK_ALL}</a></div>*/
/* </fieldset>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_IN_SEARCH_POPUP -->*/
/* </form>*/
/* <form method="post" id="sort-results" action="{S_MODE_ACTION}">*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_IN_SEARCH_POPUP and not S_SEARCH_USER -->*/
/* <fieldset class="display-options">*/
/* 	<label for="sk">{L_SELECT_SORT_METHOD}{L_COLON} <select name="sk" id="sk">{S_MODE_SELECT}</select></label>*/
/* 	<label for="sd">{L_ORDER} <select name="sd" id="sd">{S_ORDER_SELECT}</select></label>*/
/* 	<input type="submit" name="sort" value="{L_SUBMIT}" class="button2" />*/
/* </fieldset>*/
/* <!-- ENDIF -->*/
/* */
/* </form>*/
/* */
/* <div class="action-bar bottom">*/
/* 	<div class="pagination">*/
/* 		{TOTAL_USERS}*/
/* 		<!-- IF .pagination --> */
/* 			<!-- INCLUDE pagination.html -->*/
/* 		<!-- ELSE --> */
/* 			 &bull; {PAGE_NUMBER}*/
/* 		<!-- ENDIF -->*/
/* 	</div>*/
/* </div>*/
/* */
/* <!-- IF S_IN_SEARCH_POPUP -->*/
/* 	<!-- INCLUDE simple_footer.html -->*/
/* <!-- ELSE -->*/
/* 	<!-- INCLUDE jumpbox.html -->*/
/* 	<!-- INCLUDE overall_footer.html -->*/
/* <!-- ENDIF -->*/
/* */
