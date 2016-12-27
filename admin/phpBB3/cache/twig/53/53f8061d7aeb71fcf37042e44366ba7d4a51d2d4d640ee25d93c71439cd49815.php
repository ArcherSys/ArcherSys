<?php

/* memberlist_view.html */
class __TwigTemplate_c81c0149c6ca5bcced398becd5affb34f1cb8136500fdab12deacfe2f4e78899 extends Twig_Template
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
        $this->loadTemplate("overall_header.html", "memberlist_view.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2 class=\"memberlist-title\">";
        // line 3
        echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
        echo "</h2>

";
        // line 5
        // line 6
        echo "
<form method=\"post\" action=\"";
        // line 7
        echo (isset($context["S_PROFILE_ACTION"]) ? $context["S_PROFILE_ACTION"] : null);
        echo "\" id=\"viewprofile\">
<div class=\"panel bg1";
        // line 8
        if ((isset($context["S_ONLINE"]) ? $context["S_ONLINE"] : null)) {
            echo " online";
        }
        echo "\">
\t<div class=\"inner\">

\t";
        // line 11
        if ((isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null)) {
            // line 12
            echo "\t\t<dl class=\"left-box\">
\t\t\t<dt class=\"profile-avatar\">";
            // line 13
            echo (isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null);
            echo "</dt>
\t\t\t";
            // line 14
            // line 15
            echo "\t\t\t";
            if ((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null)) {
                echo "<dd style=\"text-align: center;\">";
                echo (isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null);
                echo "</dd>";
            }
            // line 16
            echo "\t\t\t";
            if ((isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null)) {
                echo "<dd style=\"text-align: center;\">";
                echo (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null);
                echo "</dd>";
            }
            // line 17
            echo "\t\t\t";
            // line 18
            echo "\t\t</dl>
\t";
        }
        // line 20
        echo "
\t<dl class=\"left-box details profile-details\">
\t\t<dt>";
        // line 22
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</dt>
\t\t<dd>
\t\t\t";
        // line 24
        if ((isset($context["USER_COLOR"]) ? $context["USER_COLOR"] : null)) {
            echo "<span style=\"color: ";
            echo (isset($context["USER_COLOR"]) ? $context["USER_COLOR"] : null);
            echo "; font-weight: bold;\">";
        } else {
            echo "<span>";
        }
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "</span>
\t\t\t";
        // line 25
        if ((isset($context["U_EDIT_SELF"]) ? $context["U_EDIT_SELF"] : null)) {
            echo " [ <a href=\"";
            echo (isset($context["U_EDIT_SELF"]) ? $context["U_EDIT_SELF"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("EDIT_PROFILE");
            echo "</a> ]";
        }
        // line 26
        echo "\t\t\t";
        if ((isset($context["U_USER_ADMIN"]) ? $context["U_USER_ADMIN"] : null)) {
            echo " [ <a href=\"";
            echo (isset($context["U_USER_ADMIN"]) ? $context["U_USER_ADMIN"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("USER_ADMIN");
            echo "</a> ]";
        }
        // line 27
        echo "\t\t\t";
        if ((isset($context["U_USER_BAN"]) ? $context["U_USER_BAN"] : null)) {
            echo " [ <a href=\"";
            echo (isset($context["U_USER_BAN"]) ? $context["U_USER_BAN"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("USER_BAN");
            echo "</a> ]";
        }
        // line 28
        echo "\t\t\t";
        if ((isset($context["U_SWITCH_PERMISSIONS"]) ? $context["U_SWITCH_PERMISSIONS"] : null)) {
            echo " [ <a href=\"";
            echo (isset($context["U_SWITCH_PERMISSIONS"]) ? $context["U_SWITCH_PERMISSIONS"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("USE_PERMISSIONS");
            echo "</a> ]";
        }
        // line 29
        echo "\t\t</dd>
\t\t";
        // line 30
        if ( !(isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null)) {
            // line 31
            echo "\t\t\t";
            // line 32
            echo "\t\t\t";
            if ((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null)) {
                echo "<dt>";
                echo $this->env->getExtension('phpbb')->lang("RANK");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</dt> <dd>";
                echo (isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null);
                echo "</dd>";
            }
            // line 33
            echo "\t\t\t";
            if ((isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null)) {
                echo "<dt>";
                if ((isset($context["RANK_TITLE"]) ? $context["RANK_TITLE"] : null)) {
                    echo "&nbsp;";
                } else {
                    echo $this->env->getExtension('phpbb')->lang("RANK");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                }
                echo "</dt> <dd>";
                echo (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null);
                echo "</dd>";
            }
            // line 34
            echo "\t\t\t";
            // line 35
            echo "\t\t";
        }
        // line 36
        echo "\t\t";
        if ((isset($context["S_USER_INACTIVE"]) ? $context["S_USER_INACTIVE"] : null)) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("USER_IS_INACTIVE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            echo (isset($context["USER_INACTIVE_REASON"]) ? $context["USER_INACTIVE_REASON"] : null);
            echo "</dd>";
        }
        // line 37
        echo "\t\t";
        if (((isset($context["AGE"]) ? $context["AGE"] : null) !== "")) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("AGE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            echo (isset($context["AGE"]) ? $context["AGE"] : null);
            echo "</dd>";
        }
        // line 38
        echo "\t\t";
        if ((isset($context["S_GROUP_OPTIONS"]) ? $context["S_GROUP_OPTIONS"] : null)) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("USERGROUPS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd><select name=\"g\">";
            echo (isset($context["S_GROUP_OPTIONS"]) ? $context["S_GROUP_OPTIONS"] : null);
            echo "</select> <input type=\"submit\" name=\"submit\" value=\"";
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" class=\"button2\" /></dd>";
        }
        // line 39
        echo "\t\t";
        // line 40
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 41
            echo "\t\t\t";
            if ( !$this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                // line 42
                echo "\t\t\t\t<dt>";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</dt> <dd>";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                echo "</dd>
\t\t\t";
            }
            // line 44
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t";
        // line 46
        echo "\t\t";
        // line 47
        echo "\t\t";
        if (((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) && (isset($context["S_ZEBRA"]) ? $context["S_ZEBRA"] : null))) {
            // line 48
            echo "\t\t\t";
            if ((isset($context["U_REMOVE_FRIEND"]) ? $context["U_REMOVE_FRIEND"] : null)) {
                // line 49
                echo "\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                echo (isset($context["U_REMOVE_FRIEND"]) ? $context["U_REMOVE_FRIEND"] : null);
                echo "\" data-ajax=\"zebra\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("REMOVE_FRIEND");
                echo "</strong></a></dd>
\t\t\t";
            } elseif (            // line 50
(isset($context["U_REMOVE_FOE"]) ? $context["U_REMOVE_FOE"] : null)) {
                // line 51
                echo "\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                echo (isset($context["U_REMOVE_FOE"]) ? $context["U_REMOVE_FOE"] : null);
                echo "\" data-ajax=\"zebra\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("REMOVE_FOE");
                echo "</strong></a></dd>
\t\t\t";
            } else {
                // line 53
                echo "\t\t\t\t";
                if ((isset($context["U_ADD_FRIEND"]) ? $context["U_ADD_FRIEND"] : null)) {
                    // line 54
                    echo "\t\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                    echo (isset($context["U_ADD_FRIEND"]) ? $context["U_ADD_FRIEND"] : null);
                    echo "\" data-ajax=\"zebra\"><strong>";
                    echo $this->env->getExtension('phpbb')->lang("ADD_FRIEND");
                    echo "</strong></a></dd>
\t\t\t\t";
                }
                // line 56
                echo "\t\t\t\t";
                if ((isset($context["U_ADD_FOE"]) ? $context["U_ADD_FOE"] : null)) {
                    // line 57
                    echo "\t\t\t\t\t<dt>&nbsp;</dt> <dd class=\"zebra\"><a href=\"";
                    echo (isset($context["U_ADD_FOE"]) ? $context["U_ADD_FOE"] : null);
                    echo "\" data-ajax=\"zebra\"><strong>";
                    echo $this->env->getExtension('phpbb')->lang("ADD_FOE");
                    echo "</strong></a></dd>
\t\t\t\t";
                }
                // line 59
                echo "\t\t\t";
            }
            // line 60
            echo "\t\t";
        }
        // line 61
        echo "\t\t";
        // line 62
        echo "\t</dl>

\t</div>
</div>

";
        // line 67
        // line 68
        echo "<div class=\"panel bg2\">
\t<div class=\"inner\">

\t<div class=\"column1\">
\t\t<h3>";
        // line 72
        echo $this->env->getExtension('phpbb')->lang("CONTACT_USER");
        echo "</h3>

\t\t<dl class=\"details\">
\t\t";
        // line 75
        if ((isset($context["U_EMAIL"]) ? $context["U_EMAIL"] : null)) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("EMAIL_ADDRESS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd><a href=\"";
            echo (isset($context["U_EMAIL"]) ? $context["U_EMAIL"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEND_EMAIL_USER");
            echo "</a></dd>";
        }
        // line 76
        echo "\t\t";
        if ((isset($context["U_PM"]) ? $context["U_PM"] : null)) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("PM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd><a href=\"";
            echo (isset($context["U_PM"]) ? $context["U_PM"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEND_PRIVATE_MESSAGE");
            echo "</a></dd>";
        }
        // line 77
        echo "\t\t";
        if (((isset($context["U_JABBER"]) ? $context["U_JABBER"] : null) && (isset($context["S_JABBER_ENABLED"]) ? $context["S_JABBER_ENABLED"] : null))) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("JABBER");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd><a href=\"";
            echo (isset($context["U_JABBER"]) ? $context["U_JABBER"] : null);
            echo "\" onclick=\"popup(this.href, 750, 320); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("SEND_JABBER_MESSAGE");
            echo "</a></dd>";
        } elseif ((isset($context["USER_JABBER"]) ? $context["USER_JABBER"] : null)) {
            echo "<dt>";
            echo $this->env->getExtension('phpbb')->lang("JABBER");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            echo (isset($context["USER_JABBER"]) ? $context["USER_JABBER"] : null);
            echo "</dd>";
        }
        // line 78
        echo "\t\t";
        // line 79
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
            // line 80
            echo "\t\t\t";
            if ($this->getAttribute($context["custom_fields"], "S_PROFILE_CONTACT", array())) {
                // line 81
                echo "\t\t\t\t<dt>";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</dt>
\t\t\t\t";
                // line 82
                if ($this->getAttribute($context["custom_fields"], "PROFILE_FIELD_CONTACT", array())) {
                    // line 83
                    echo "\t\t\t\t\t<dd><a href=\"";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_CONTACT", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_DESC", array());
                    echo "</a></dd>
\t\t\t\t";
                } else {
                    // line 85
                    echo "\t\t\t\t\t<dd>";
                    echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                    echo "</dd>
\t\t\t\t";
                }
                // line 87
                echo "\t\t\t";
            }
            // line 88
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "\t\t";
        // line 90
        echo "\t\t";
        if ((isset($context["S_PROFILE_FIELD1"]) ? $context["S_PROFILE_FIELD1"] : null)) {
            // line 91
            echo "\t\t\t<!-- NOTE: Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t<dt>";
            // line 92
            echo (isset($context["PROFILE_FIELD1_NAME"]) ? $context["PROFILE_FIELD1_NAME"] : null);
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            echo (isset($context["PROFILE_FIELD1_VALUE"]) ? $context["PROFILE_FIELD1_VALUE"] : null);
            echo "</dd>
\t\t";
        }
        // line 94
        echo "\t\t</dl>
\t</div>

\t<div class=\"column2\">
\t\t<h3>";
        // line 98
        echo $this->env->getExtension('phpbb')->lang("USER_FORUM");
        echo "</h3>
\t\t<dl class=\"details\">
\t\t\t";
        // line 100
        // line 101
        echo "\t\t\t<dt>";
        echo $this->env->getExtension('phpbb')->lang("JOINED");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</dt> <dd>";
        echo (isset($context["JOINED"]) ? $context["JOINED"] : null);
        echo "</dd>
\t\t\t<dt>";
        // line 102
        echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</dt> <dd>";
        echo (isset($context["LAST_ACTIVE"]) ? $context["LAST_ACTIVE"] : null);
        echo "</dd>
\t\t\t";
        // line 103
        if ((isset($context["S_WARNINGS"]) ? $context["S_WARNINGS"] : null)) {
            // line 104
            echo "\t\t\t<dt>";
            echo $this->env->getExtension('phpbb')->lang("WARNINGS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " </dt>
\t\t\t<dd><strong>";
            // line 105
            echo (isset($context["WARNINGS"]) ? $context["WARNINGS"] : null);
            echo "</strong>";
            if (((isset($context["U_NOTES"]) ? $context["U_NOTES"] : null) || (isset($context["U_WARN"]) ? $context["U_WARN"] : null))) {
                echo " [ ";
                if ((isset($context["U_NOTES"]) ? $context["U_NOTES"] : null)) {
                    echo "<a href=\"";
                    echo (isset($context["U_NOTES"]) ? $context["U_NOTES"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("VIEW_NOTES");
                    echo "</a>";
                }
                echo " ";
                if ((isset($context["U_WARN"]) ? $context["U_WARN"] : null)) {
                    if ((isset($context["U_NOTES"]) ? $context["U_NOTES"] : null)) {
                        echo " | ";
                    }
                    echo "<a href=\"";
                    echo (isset($context["U_WARN"]) ? $context["U_WARN"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("WARN_USER");
                    echo "</a>";
                }
                echo " ]";
            }
            echo "</dd>
\t\t\t";
        }
        // line 107
        echo "\t\t\t<dt>";
        echo $this->env->getExtension('phpbb')->lang("TOTAL_POSTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</dt>
\t\t\t\t<dd>";
        // line 108
        echo (isset($context["POSTS"]) ? $context["POSTS"] : null);
        echo " ";
        if ((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null)) {
            echo "| <strong><a href=\"";
            echo (isset($context["U_SEARCH_USER"]) ? $context["U_SEARCH_USER"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_USER_POSTS");
            echo "</a></strong>";
        }
        // line 109
        echo "\t\t\t\t\t";
        if ((isset($context["POSTS_PCT"]) ? $context["POSTS_PCT"] : null)) {
            echo "<br />(";
            echo (isset($context["POSTS_PCT"]) ? $context["POSTS_PCT"] : null);
            echo " / ";
            echo (isset($context["POSTS_DAY"]) ? $context["POSTS_DAY"] : null);
            echo ")";
        }
        // line 110
        echo "\t\t\t\t\t";
        if (((isset($context["POSTS_IN_QUEUE"]) ? $context["POSTS_IN_QUEUE"] : null) && (isset($context["U_MCP_QUEUE"]) ? $context["U_MCP_QUEUE"] : null))) {
            echo "<br />(<a href=\"";
            echo (isset($context["U_MCP_QUEUE"]) ? $context["U_MCP_QUEUE"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("POSTS_IN_QUEUE");
            echo "</a>)";
        } elseif ((isset($context["POSTS_IN_QUEUE"]) ? $context["POSTS_IN_QUEUE"] : null)) {
            echo "<br />(";
            echo $this->env->getExtension('phpbb')->lang("POSTS_IN_QUEUE");
            echo ")";
        }
        // line 111
        echo "\t\t\t\t</dd>
\t\t\t";
        // line 112
        if (((isset($context["S_SHOW_ACTIVITY"]) ? $context["S_SHOW_ACTIVITY"] : null) && (isset($context["POSTS"]) ? $context["POSTS"] : null))) {
            // line 113
            echo "\t\t\t\t<dt>";
            echo $this->env->getExtension('phpbb')->lang("ACTIVE_IN_FORUM");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            if (((isset($context["ACTIVE_FORUM"]) ? $context["ACTIVE_FORUM"] : null) != "")) {
                echo "<strong><a href=\"";
                echo (isset($context["U_ACTIVE_FORUM"]) ? $context["U_ACTIVE_FORUM"] : null);
                echo "\">";
                echo (isset($context["ACTIVE_FORUM"]) ? $context["ACTIVE_FORUM"] : null);
                echo "</a></strong><br />(";
                echo (isset($context["ACTIVE_FORUM_POSTS"]) ? $context["ACTIVE_FORUM_POSTS"] : null);
                echo " / ";
                echo (isset($context["ACTIVE_FORUM_PCT"]) ? $context["ACTIVE_FORUM_PCT"] : null);
                echo ")";
            } else {
                echo " - ";
            }
            echo "</dd>
\t\t\t\t<dt>";
            // line 114
            echo $this->env->getExtension('phpbb')->lang("ACTIVE_IN_TOPIC");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</dt> <dd>";
            if (((isset($context["ACTIVE_TOPIC"]) ? $context["ACTIVE_TOPIC"] : null) != "")) {
                echo "<strong><a href=\"";
                echo (isset($context["U_ACTIVE_TOPIC"]) ? $context["U_ACTIVE_TOPIC"] : null);
                echo "\">";
                echo (isset($context["ACTIVE_TOPIC"]) ? $context["ACTIVE_TOPIC"] : null);
                echo "</a></strong><br />(";
                echo (isset($context["ACTIVE_TOPIC_POSTS"]) ? $context["ACTIVE_TOPIC_POSTS"] : null);
                echo " / ";
                echo (isset($context["ACTIVE_TOPIC_PCT"]) ? $context["ACTIVE_TOPIC_PCT"] : null);
                echo ")";
            } else {
                echo " - ";
            }
            echo "</dd>
\t\t\t";
        }
        // line 116
        echo "\t\t\t";
        // line 117
        echo "\t\t</dl>
\t</div>

\t</div>
</div>
";
        // line 122
        // line 123
        echo "
";
        // line 124
        if ((isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null)) {
            // line 125
            echo "<div class=\"panel bg1\">
\t<div class=\"inner\">

\t\t<h3>";
            // line 128
            echo $this->env->getExtension('phpbb')->lang("SIGNATURE");
            echo "</h3>

\t\t<div class=\"postbody\"><div class=\"signature standalone\">";
            // line 130
            echo (isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null);
            echo "</div></div>

\t</div>
</div>
";
        }
        // line 135
        echo "
</form>

";
        // line 138
        // line 139
        echo "
";
        // line 140
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("jumpbox.html", "memberlist_view.html", 140)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 141
        echo "
";
        // line 142
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "memberlist_view.html", 142)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "memberlist_view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  613 => 142,  610 => 141,  598 => 140,  595 => 139,  594 => 138,  589 => 135,  581 => 130,  576 => 128,  571 => 125,  569 => 124,  566 => 123,  565 => 122,  558 => 117,  556 => 116,  536 => 114,  516 => 113,  514 => 112,  511 => 111,  498 => 110,  489 => 109,  479 => 108,  473 => 107,  445 => 105,  439 => 104,  437 => 103,  430 => 102,  422 => 101,  421 => 100,  416 => 98,  410 => 94,  402 => 92,  399 => 91,  396 => 90,  394 => 89,  388 => 88,  385 => 87,  379 => 85,  371 => 83,  369 => 82,  363 => 81,  360 => 80,  355 => 79,  353 => 78,  334 => 77,  322 => 76,  311 => 75,  305 => 72,  299 => 68,  298 => 67,  291 => 62,  289 => 61,  286 => 60,  283 => 59,  275 => 57,  272 => 56,  264 => 54,  261 => 53,  253 => 51,  251 => 50,  244 => 49,  241 => 48,  238 => 47,  236 => 46,  234 => 45,  228 => 44,  219 => 42,  216 => 41,  211 => 40,  209 => 39,  197 => 38,  187 => 37,  177 => 36,  174 => 35,  172 => 34,  158 => 33,  148 => 32,  146 => 31,  144 => 30,  141 => 29,  132 => 28,  123 => 27,  114 => 26,  106 => 25,  95 => 24,  89 => 22,  85 => 20,  81 => 18,  79 => 17,  72 => 16,  65 => 15,  64 => 14,  60 => 13,  57 => 12,  55 => 11,  47 => 8,  43 => 7,  40 => 6,  39 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* */
/* <h2 class="memberlist-title">{PAGE_TITLE}</h2>*/
/* */
/* <!-- EVENT memberlist_view_content_prepend -->*/
/* */
/* <form method="post" action="{S_PROFILE_ACTION}" id="viewprofile">*/
/* <div class="panel bg1<!-- IF S_ONLINE --> online<!-- ENDIF -->">*/
/* 	<div class="inner">*/
/* */
/* 	<!-- IF AVATAR_IMG -->*/
/* 		<dl class="left-box">*/
/* 			<dt class="profile-avatar">{AVATAR_IMG}</dt>*/
/* 			<!-- EVENT memberlist_view_rank_avatar_before -->*/
/* 			<!-- IF RANK_TITLE --><dd style="text-align: center;">{RANK_TITLE}</dd><!-- ENDIF -->*/
/* 			<!-- IF RANK_IMG --><dd style="text-align: center;">{RANK_IMG}</dd><!-- ENDIF -->*/
/* 			<!-- EVENT memberlist_view_rank_avatar_after -->*/
/* 		</dl>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<dl class="left-box details profile-details">*/
/* 		<dt>{L_USERNAME}{L_COLON}</dt>*/
/* 		<dd>*/
/* 			<!-- IF USER_COLOR --><span style="color: {USER_COLOR}; font-weight: bold;"><!-- ELSE --><span><!-- ENDIF -->{USERNAME}</span>*/
/* 			<!-- IF U_EDIT_SELF --> [ <a href="{U_EDIT_SELF}">{L_EDIT_PROFILE}</a> ]<!-- ENDIF -->*/
/* 			<!-- IF U_USER_ADMIN --> [ <a href="{U_USER_ADMIN}">{L_USER_ADMIN}</a> ]<!-- ENDIF -->*/
/* 			<!-- IF U_USER_BAN --> [ <a href="{U_USER_BAN}">{L_USER_BAN}</a> ]<!-- ENDIF -->*/
/* 			<!-- IF U_SWITCH_PERMISSIONS --> [ <a href="{U_SWITCH_PERMISSIONS}">{L_USE_PERMISSIONS}</a> ]<!-- ENDIF -->*/
/* 		</dd>*/
/* 		<!-- IF not AVATAR_IMG -->*/
/* 			<!-- EVENT memberlist_view_rank_no_avatar_before -->*/
/* 			<!-- IF RANK_TITLE --><dt>{L_RANK}{L_COLON}</dt> <dd>{RANK_TITLE}</dd><!-- ENDIF -->*/
/* 			<!-- IF RANK_IMG --><dt><!-- IF RANK_TITLE -->&nbsp;<!-- ELSE -->{L_RANK}{L_COLON}<!-- ENDIF --></dt> <dd>{RANK_IMG}</dd><!-- ENDIF -->*/
/* 			<!-- EVENT memberlist_view_rank_no_avatar_after -->*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF S_USER_INACTIVE --><dt>{L_USER_IS_INACTIVE}{L_COLON}</dt> <dd>{USER_INACTIVE_REASON}</dd><!-- ENDIF -->*/
/* 		<!-- IF AGE !== '' --><dt>{L_AGE}{L_COLON}</dt> <dd>{AGE}</dd><!-- ENDIF -->*/
/* 		<!-- IF S_GROUP_OPTIONS --><dt>{L_USERGROUPS}{L_COLON}</dt> <dd><select name="g">{S_GROUP_OPTIONS}</select> <input type="submit" name="submit" value="{L_GO}" class="button2" /></dd><!-- ENDIF -->*/
/* 		<!-- EVENT memberlist_view_non_contact_custom_fields_before -->*/
/* 		<!-- BEGIN custom_fields -->*/
/* 			<!-- IF not custom_fields.S_PROFILE_CONTACT -->*/
/* 				<dt>{custom_fields.PROFILE_FIELD_NAME}{L_COLON}</dt> <dd>{custom_fields.PROFILE_FIELD_VALUE}</dd>*/
/* 			<!-- ENDIF -->*/
/* 		<!-- END custom_fields -->*/
/* 		<!-- EVENT memberlist_view_non_contact_custom_fields_after -->*/
/* 		<!-- EVENT memberlist_view_zebra_before -->*/
/* 		<!-- IF S_USER_LOGGED_IN and S_ZEBRA -->*/
/* 			<!-- IF U_REMOVE_FRIEND -->*/
/* 				<dt>&nbsp;</dt> <dd class="zebra"><a href="{U_REMOVE_FRIEND}" data-ajax="zebra"><strong>{L_REMOVE_FRIEND}</strong></a></dd>*/
/* 			<!-- ELSEIF U_REMOVE_FOE -->*/
/* 				<dt>&nbsp;</dt> <dd class="zebra"><a href="{U_REMOVE_FOE}" data-ajax="zebra"><strong>{L_REMOVE_FOE}</strong></a></dd>*/
/* 			<!-- ELSE -->*/
/* 				<!-- IF U_ADD_FRIEND -->*/
/* 					<dt>&nbsp;</dt> <dd class="zebra"><a href="{U_ADD_FRIEND}" data-ajax="zebra"><strong>{L_ADD_FRIEND}</strong></a></dd>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF U_ADD_FOE -->*/
/* 					<dt>&nbsp;</dt> <dd class="zebra"><a href="{U_ADD_FOE}" data-ajax="zebra"><strong>{L_ADD_FOE}</strong></a></dd>*/
/* 				<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* 		<!-- ENDIF -->*/
/* 		<!-- EVENT memberlist_view_zebra_after -->*/
/* 	</dl>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <!-- EVENT memberlist_view_contact_before -->*/
/* <div class="panel bg2">*/
/* 	<div class="inner">*/
/* */
/* 	<div class="column1">*/
/* 		<h3>{L_CONTACT_USER}</h3>*/
/* */
/* 		<dl class="details">*/
/* 		<!-- IF U_EMAIL --><dt>{L_EMAIL_ADDRESS}{L_COLON}</dt> <dd><a href="{U_EMAIL}">{L_SEND_EMAIL_USER}</a></dd><!-- ENDIF -->*/
/* 		<!-- IF U_PM --><dt>{L_PM}{L_COLON}</dt> <dd><a href="{U_PM}">{L_SEND_PRIVATE_MESSAGE}</a></dd><!-- ENDIF -->*/
/* 		<!-- IF U_JABBER and S_JABBER_ENABLED --><dt>{L_JABBER}{L_COLON}</dt> <dd><a href="{U_JABBER}" onclick="popup(this.href, 750, 320); return false;">{L_SEND_JABBER_MESSAGE}</a></dd><!-- ELSEIF USER_JABBER --><dt>{L_JABBER}{L_COLON}</dt> <dd>{USER_JABBER}</dd><!-- ENDIF -->*/
/* 		<!-- EVENT memberlist_view_contact_custom_fields_before -->*/
/* 		<!-- BEGIN custom_fields -->*/
/* 			<!-- IF custom_fields.S_PROFILE_CONTACT -->*/
/* 				<dt>{custom_fields.PROFILE_FIELD_NAME}{L_COLON}</dt>*/
/* 				<!-- IF custom_fields.PROFILE_FIELD_CONTACT -->*/
/* 					<dd><a href="{custom_fields.PROFILE_FIELD_CONTACT}">{custom_fields.PROFILE_FIELD_DESC}</a></dd>*/
/* 				<!-- ELSE -->*/
/* 					<dd>{custom_fields.PROFILE_FIELD_VALUE}</dd>*/
/* 				<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* 		<!-- END custom_fields -->*/
/* 		<!-- EVENT memberlist_view_contact_custom_fields_after -->*/
/* 		<!-- IF S_PROFILE_FIELD1 -->*/
/* 			<!-- NOTE: Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->*/
/* 			<dt>{PROFILE_FIELD1_NAME}{L_COLON}</dt> <dd>{PROFILE_FIELD1_VALUE}</dd>*/
/* 		<!-- ENDIF -->*/
/* 		</dl>*/
/* 	</div>*/
/* */
/* 	<div class="column2">*/
/* 		<h3>{L_USER_FORUM}</h3>*/
/* 		<dl class="details">*/
/* 			<!-- EVENT memberlist_view_user_statistics_before -->*/
/* 			<dt>{L_JOINED}{L_COLON}</dt> <dd>{JOINED}</dd>*/
/* 			<dt>{L_LAST_ACTIVE}{L_COLON}</dt> <dd>{LAST_ACTIVE}</dd>*/
/* 			<!-- IF S_WARNINGS -->*/
/* 			<dt>{L_WARNINGS}{L_COLON} </dt>*/
/* 			<dd><strong>{WARNINGS}</strong><!-- IF U_NOTES or U_WARN --> [ <!-- IF U_NOTES --><a href="{U_NOTES}">{L_VIEW_NOTES}</a><!-- ENDIF --> <!-- IF U_WARN --><!-- IF U_NOTES --> | <!-- ENDIF --><a href="{U_WARN}">{L_WARN_USER}</a><!-- ENDIF --> ]<!-- ENDIF --></dd>*/
/* 			<!-- ENDIF -->*/
/* 			<dt>{L_TOTAL_POSTS}{L_COLON}</dt>*/
/* 				<dd>{POSTS} <!-- IF S_DISPLAY_SEARCH -->| <strong><a href="{U_SEARCH_USER}">{L_SEARCH_USER_POSTS}</a></strong><!-- ENDIF -->*/
/* 					<!-- IF POSTS_PCT --><br />({POSTS_PCT} / {POSTS_DAY})<!-- ENDIF -->*/
/* 					<!-- IF POSTS_IN_QUEUE and U_MCP_QUEUE --><br />(<a href="{U_MCP_QUEUE}">{L_POSTS_IN_QUEUE}</a>)<!-- ELSEIF POSTS_IN_QUEUE --><br />({L_POSTS_IN_QUEUE})<!-- ENDIF -->*/
/* 				</dd>*/
/* 			<!-- IF S_SHOW_ACTIVITY and POSTS -->*/
/* 				<dt>{L_ACTIVE_IN_FORUM}{L_COLON}</dt> <dd><!-- IF ACTIVE_FORUM != '' --><strong><a href="{U_ACTIVE_FORUM}">{ACTIVE_FORUM}</a></strong><br />({ACTIVE_FORUM_POSTS} / {ACTIVE_FORUM_PCT})<!-- ELSE --> - <!-- ENDIF --></dd>*/
/* 				<dt>{L_ACTIVE_IN_TOPIC}{L_COLON}</dt> <dd><!-- IF ACTIVE_TOPIC != '' --><strong><a href="{U_ACTIVE_TOPIC}">{ACTIVE_TOPIC}</a></strong><br />({ACTIVE_TOPIC_POSTS} / {ACTIVE_TOPIC_PCT})<!-- ELSE --> - <!-- ENDIF --></dd>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- EVENT memberlist_view_user_statistics_after -->*/
/* 		</dl>*/
/* 	</div>*/
/* */
/* 	</div>*/
/* </div>*/
/* <!-- EVENT memberlist_view_contact_after -->*/
/* */
/* <!-- IF SIGNATURE -->*/
/* <div class="panel bg1">*/
/* 	<div class="inner">*/
/* */
/* 		<h3>{L_SIGNATURE}</h3>*/
/* */
/* 		<div class="postbody"><div class="signature standalone">{SIGNATURE}</div></div>*/
/* */
/* 	</div>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* */
/* </form>*/
/* */
/* <!-- EVENT memberlist_view_content_append -->*/
/* */
/* <!-- INCLUDE jumpbox.html -->*/
/* */
/* <!-- INCLUDE overall_footer.html -->*/
/* */
