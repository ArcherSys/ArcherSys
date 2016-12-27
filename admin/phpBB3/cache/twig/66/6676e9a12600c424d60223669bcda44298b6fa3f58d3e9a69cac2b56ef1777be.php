<?php

/* posting_editor.html */
class __TwigTemplate_71f76baf57506163a2342ea604a5554dbc1d1931c582390d9d9b5100bbb31662 extends Twig_Template
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
        echo "<fieldset class=\"fields1\">
\t";
        // line 2
        if ((isset($context["ERROR"]) ? $context["ERROR"] : null)) {
            echo "<p class=\"error\">";
            echo (isset($context["ERROR"]) ? $context["ERROR"] : null);
            echo "</p>";
        }
        // line 3
        echo "
\t";
        // line 4
        if (((isset($context["S_SHOW_TOPIC_ICONS"]) ? $context["S_SHOW_TOPIC_ICONS"] : null) || (isset($context["S_SHOW_PM_ICONS"]) ? $context["S_SHOW_PM_ICONS"] : null))) {
            // line 5
            echo "\t<dl>
\t\t<dt><label for=\"icon\">";
            // line 6
            echo $this->env->getExtension('phpbb')->lang("ICON");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd>
\t\t\t<label for=\"icon\"><input type=\"radio\" name=\"icon\" id=\"icon\" value=\"0\" checked=\"checked\" tabindex=\"1\" /> ";
            // line 8
            if ((isset($context["S_SHOW_TOPIC_ICONS"]) ? $context["S_SHOW_TOPIC_ICONS"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("NO_TOPIC_ICON");
            } else {
                echo $this->env->getExtension('phpbb')->lang("NO_PM_ICON");
            }
            echo "</label>
\t\t\t";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topic_icon", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["topic_icon"]) {
                echo "<label for=\"icon-";
                echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                echo "\"><input type=\"radio\" name=\"icon\" id=\"icon-";
                echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                echo "\" value=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_ID", array());
                echo "\" ";
                echo $this->getAttribute($context["topic_icon"], "S_ICON_CHECKED", array());
                echo " tabindex=\"1\" /><img src=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_IMG", array());
                echo "\" width=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_WIDTH", array());
                echo "\" height=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_HEIGHT", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["topic_icon"], "ICON_NAME", array());
                echo "\" title=\"\" /></label> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "\t\t</dd>
\t</dl>
\t";
        }
        // line 13
        echo "
\t";
        // line 14
        if (( !(isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null) && (isset($context["S_DISPLAY_USERNAME"]) ? $context["S_DISPLAY_USERNAME"] : null))) {
            // line 15
            echo "\t<dl style=\"clear: left;\">
\t\t<dt><label for=\"username\">";
            // line 16
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"25\" value=\"";
            // line 17
            echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
            echo "\" class=\"inputbox autowidth\" /></dd>
\t</dl>
\t";
        }
        // line 20
        echo "
\t";
        // line 21
        // line 22
        echo "
\t";
        // line 23
        if ((((isset($context["S_POST_ACTION"]) ? $context["S_POST_ACTION"] : null) || (isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null)) || (isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null))) {
            // line 24
            echo "\t<dl style=\"clear: left;\">
\t\t<dt><label for=\"subject\">";
            // line 25
            echo $this->env->getExtension('phpbb')->lang("SUBJECT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd>
\t\t\t";
            // line 27
            // line 28
            echo "\t\t\t<input type=\"text\" name=\"subject\" id=\"subject\" size=\"45\" maxlength=\"";
            if ((isset($context["S_NEW_MESSAGE"]) ? $context["S_NEW_MESSAGE"] : null)) {
                echo "120";
            } else {
                echo "124";
            }
            echo "\" tabindex=\"2\" value=\"";
            echo (isset($context["SUBJECT"]) ? $context["SUBJECT"] : null);
            echo (isset($context["DRAFT_SUBJECT"]) ? $context["DRAFT_SUBJECT"] : null);
            echo "\" class=\"inputbox autowidth\" />
\t\t\t";
            // line 29
            // line 30
            echo "\t\t</dd>
\t</dl>
\t";
            // line 32
            if (((isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null) && (isset($context["S_CONFIRM_CODE"]) ? $context["S_CONFIRM_CODE"] : null))) {
                // line 33
                echo "\t\t";
                $value = 3;
                $context['definition']->set('CAPTCHA_TAB_INDEX', $value);
                // line 34
                echo "\t\t";
                $location = (("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . "");
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate((("" . (isset($context["CAPTCHA_TEMPLATE"]) ? $context["CAPTCHA_TEMPLATE"] : null)) . ""), "posting_editor.html", 34)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 35
                echo "\t";
            }
            // line 36
            echo "\t";
        }
        // line 37
        echo "
\t";
        // line 38
        // line 39
        echo "
\t";
        // line 40
        $location = "posting_buttons.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("posting_buttons.html", "posting_editor.html", 40)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 41
        echo "
\t<div id=\"smiley-box\">
\t\t";
        // line 43
        echo "\t
\t\t";
        // line 44
        if (((isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "smiley", array())))) {
            // line 45
            echo "\t\t\t<strong>";
            echo $this->env->getExtension('phpbb')->lang("SMILIES");
            echo "</strong><br />
\t\t\t";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "smiley", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["smiley"]) {
                // line 47
                echo "\t\t\t\t<a href=\"#\" onclick=\"insert_text('";
                echo $this->getAttribute($context["smiley"], "A_SMILEY_CODE", array());
                echo "', true); return false;\"><img src=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_IMG", array());
                echo "\" width=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_WIDTH", array());
                echo "\" height=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_HEIGHT", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_CODE", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["smiley"], "SMILEY_DESC", array());
                echo "\" /></a>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smiley'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "\t\t";
        }
        // line 50
        echo "\t\t";
        if (((isset($context["S_SHOW_SMILEY_LINK"]) ? $context["S_SHOW_SMILEY_LINK"] : null) && (isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null))) {
            // line 51
            echo "\t\t\t<br /><a href=\"";
            echo (isset($context["U_MORE_SMILIES"]) ? $context["U_MORE_SMILIES"] : null);
            echo "\" onclick=\"popup(this.href, 750, 350, '_phpbbsmilies'); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("MORE_SMILIES");
            echo "</a>
\t\t";
        }
        // line 53
        echo "\t\t";
        // line 54
        echo "\t\t";
        if ((isset($context["BBCODE_STATUS"]) ? $context["BBCODE_STATUS"] : null)) {
            // line 55
            echo "\t\t<div class=\"bbcode-status\">
\t\t\t";
            // line 56
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "smiley", array()))) {
                echo "<hr />";
            }
            // line 57
            echo "\t\t\t";
            echo (isset($context["BBCODE_STATUS"]) ? $context["BBCODE_STATUS"] : null);
            echo "<br />
\t\t\t";
            // line 58
            if ((isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null)) {
                // line 59
                echo "\t\t\t\t";
                echo (isset($context["IMG_STATUS"]) ? $context["IMG_STATUS"] : null);
                echo "<br />
\t\t\t\t";
                // line 60
                echo (isset($context["FLASH_STATUS"]) ? $context["FLASH_STATUS"] : null);
                echo "<br />
\t\t\t\t";
                // line 61
                echo (isset($context["URL_STATUS"]) ? $context["URL_STATUS"] : null);
                echo "<br />
\t\t\t";
            }
            // line 63
            echo "\t\t\t";
            echo (isset($context["SMILIES_STATUS"]) ? $context["SMILIES_STATUS"] : null);
            echo "
\t\t</div>
\t\t";
        }
        // line 66
        echo "\t\t";
        // line 67
        echo "\t\t";
        if (((isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null) || (isset($context["S_DISPLAY_REVIEW"]) ? $context["S_DISPLAY_REVIEW"] : null))) {
            // line 68
            echo "\t\t\t";
            if ((isset($context["S_DISPLAY_REVIEW"]) ? $context["S_DISPLAY_REVIEW"] : null)) {
                echo "<hr />";
            }
            // line 69
            echo "\t\t\t";
            if ((isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null)) {
                echo "<strong><a href=\"";
                echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("BACK_TO_DRAFTS");
                echo "</a></strong>";
            }
            // line 70
            echo "\t\t\t";
            if ((isset($context["S_DISPLAY_REVIEW"]) ? $context["S_DISPLAY_REVIEW"] : null)) {
                echo "<strong><a href=\"#review\">";
                echo $this->env->getExtension('phpbb')->lang("TOPIC_REVIEW");
                echo "</a></strong>";
            }
            // line 71
            echo "\t\t";
        }
        // line 72
        echo "\t</div>

\t";
        // line 74
        // line 75
        echo "
\t<div id=\"message-box\">
\t\t<textarea ";
        // line 77
        if ((((isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null) &&  !(isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null)) &&  !(isset($context["S_EDIT_DRAFT"]) ? $context["S_EDIT_DRAFT"] : null))) {
            echo "name=\"signature\" id=\"signature\" style=\"height: 9em;\"";
        } else {
            echo "name=\"message\" id=\"message\"";
        }
        echo " rows=\"15\" cols=\"76\" tabindex=\"4\" onselect=\"storeCaret(this);\" onclick=\"storeCaret(this);\" onkeyup=\"storeCaret(this);\" onfocus=\"initInsertions();\" class=\"inputbox\">";
        echo (isset($context["MESSAGE"]) ? $context["MESSAGE"] : null);
        echo (isset($context["DRAFT_MESSAGE"]) ? $context["DRAFT_MESSAGE"] : null);
        echo (isset($context["SIGNATURE"]) ? $context["SIGNATURE"] : null);
        echo "</textarea>
\t</div>

\t";
        // line 80
        // line 81
        echo "\t</fieldset>

";
        // line 83
        if (($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "EXTRA_POSTING_OPTIONS", array()) == 1)) {
            // line 84
            echo "
\t";
            // line 85
            if ( !(isset($context["S_SHOW_DRAFTS"]) ? $context["S_SHOW_DRAFTS"] : null)) {
                // line 86
                echo "\t\t</div>
\t</div>
\t";
            }
            // line 89
            echo "
\t";
            // line 90
            if (( !(isset($context["S_SHOW_DRAFTS"]) ? $context["S_SHOW_DRAFTS"] : null) && ( !$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SIG_EDIT", array()) == 1))) {
                // line 91
                echo "\t<div class=\"panel bg2\">
\t\t<div class=\"inner\">
\t\t<fieldset class=\"submit-buttons\">
\t\t\t";
                // line 94
                echo (isset($context["S_HIDDEN_ADDRESS_FIELD"]) ? $context["S_HIDDEN_ADDRESS_FIELD"] : null);
                echo "
\t\t\t";
                // line 95
                echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
                echo "
\t\t\t";
                // line 96
                // line 97
                echo "\t\t\t";
                if ((isset($context["S_HAS_DRAFTS"]) ? $context["S_HAS_DRAFTS"] : null)) {
                    echo "<input type=\"submit\" accesskey=\"d\" tabindex=\"8\" name=\"load\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("LOAD_DRAFT");
                    echo "\" class=\"button2\" onclick=\"load_draft = true;\" />&nbsp; ";
                }
                // line 98
                echo "\t\t\t";
                if ((isset($context["S_SAVE_ALLOWED"]) ? $context["S_SAVE_ALLOWED"] : null)) {
                    echo "<input type=\"submit\" accesskey=\"k\" tabindex=\"7\" name=\"save\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("SAVE_DRAFT");
                    echo "\" class=\"button2\" />&nbsp; ";
                }
                // line 99
                echo "\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"preview\" value=\"";
                echo $this->env->getExtension('phpbb')->lang("PREVIEW");
                echo "\" class=\"button1\"";
                if ( !(isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null)) {
                    echo " onclick=\"document.getElementById('postform').action += '#preview';\"";
                }
                echo " />&nbsp;
\t\t\t<input type=\"submit\" accesskey=\"s\" tabindex=\"6\" name=\"post\" value=\"";
                // line 100
                echo $this->env->getExtension('phpbb')->lang("SUBMIT");
                echo "\" class=\"button1 default-submit-action\" />&nbsp;

\t\t</fieldset>

\t\t</div>
\t</div>
\t";
            }
            // line 107
            echo "
\t";
            // line 108
            if ((( !(isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null) &&  !(isset($context["S_SHOW_DRAFTS"]) ? $context["S_SHOW_DRAFTS"] : null)) && ( !$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SIG_EDIT", array()) == 1))) {
                // line 109
                echo "\t\t<div id=\"tabs\" class=\"sub-panels\" data-show-panel=\"";
                if ((isset($context["SHOW_PANEL"]) ? $context["SHOW_PANEL"] : null)) {
                    echo (isset($context["SHOW_PANEL"]) ? $context["SHOW_PANEL"] : null);
                } else {
                    echo "options-panel";
                }
                echo "\" role=\"tablist\">
\t\t\t<ul>
\t\t\t\t<li id=\"options-panel-tab\" class=\"tab activetab\"><a href=\"#tabs\" data-subpanel=\"options-panel\" role=\"tab\" aria-controls=\"options-panel\"><span>";
                // line 111
                echo $this->env->getExtension('phpbb')->lang("OPTIONS");
                echo "</span></a></li>
\t\t\t\t";
                // line 112
                if ((isset($context["S_SHOW_ATTACH_BOX"]) ? $context["S_SHOW_ATTACH_BOX"] : null)) {
                    // line 113
                    echo "\t\t\t\t\t<li id=\"attach-panel-tab\" class=\"tab\">
\t\t\t\t\t\t<a href=\"#tabs\" data-subpanel=\"attach-panel\" role=\"tab\" aria-controls=\"attach-panel\">
\t\t\t\t\t\t\t";
                    // line 115
                    echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
                    echo " <strong id=\"file-total-progress\"><strong id=\"file-total-progress-bar\"></strong></strong>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 119
                echo "\t\t\t\t";
                if (((isset($context["S_SHOW_POLL_BOX"]) ? $context["S_SHOW_POLL_BOX"] : null) || (isset($context["S_POLL_DELETE"]) ? $context["S_POLL_DELETE"] : null))) {
                    // line 120
                    echo "\t\t\t\t\t<li id=\"poll-panel-tab\" class=\"tab\">
\t\t\t\t\t\t<a href=\"#tabs\" data-subpanel=\"poll-panel\" role=\"tab\" aria-controls=\"poll-panel\">";
                    // line 121
                    echo $this->env->getExtension('phpbb')->lang("ADD_POLL");
                    echo "</a>
\t\t\t\t\t</li>
\t\t\t\t";
                }
                // line 124
                echo "\t\t\t\t";
                // line 125
                echo "\t\t\t</ul>
\t\t</div>
\t";
            }
            // line 128
            echo "
\t";
            // line 129
            if (( !(isset($context["S_SHOW_DRAFTS"]) ? $context["S_SHOW_DRAFTS"] : null) && ( !$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SIG_EDIT", array()) == 1))) {
                // line 130
                echo "\t<div class=\"panel bg3\" id=\"options-panel\">
\t\t<div class=\"inner\">

\t\t<fieldset class=\"fields1\">
\t\t\t";
                // line 134
                // line 135
                echo "\t\t\t";
                if ((isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null)) {
                    // line 136
                    echo "\t\t\t\t<div><label for=\"disable_bbcode\"><input type=\"checkbox\" name=\"disable_bbcode\" id=\"disable_bbcode\"";
                    echo (isset($context["S_BBCODE_CHECKED"]) ? $context["S_BBCODE_CHECKED"] : null);
                    echo " /> ";
                    echo $this->env->getExtension('phpbb')->lang("DISABLE_BBCODE");
                    echo "</label></div>
\t\t\t";
                }
                // line 138
                echo "\t\t\t";
                if ((isset($context["S_SMILIES_ALLOWED"]) ? $context["S_SMILIES_ALLOWED"] : null)) {
                    // line 139
                    echo "\t\t\t\t<div><label for=\"disable_smilies\"><input type=\"checkbox\" name=\"disable_smilies\" id=\"disable_smilies\"";
                    echo (isset($context["S_SMILIES_CHECKED"]) ? $context["S_SMILIES_CHECKED"] : null);
                    echo " /> ";
                    echo $this->env->getExtension('phpbb')->lang("DISABLE_SMILIES");
                    echo "</label></div>
\t\t\t";
                }
                // line 141
                echo "\t\t\t";
                if ((isset($context["S_LINKS_ALLOWED"]) ? $context["S_LINKS_ALLOWED"] : null)) {
                    // line 142
                    echo "\t\t\t\t<div><label for=\"disable_magic_url\"><input type=\"checkbox\" name=\"disable_magic_url\" id=\"disable_magic_url\"";
                    echo (isset($context["S_MAGIC_URL_CHECKED"]) ? $context["S_MAGIC_URL_CHECKED"] : null);
                    echo " /> ";
                    echo $this->env->getExtension('phpbb')->lang("DISABLE_MAGIC_URL");
                    echo "</label></div>
\t\t\t";
                }
                // line 144
                echo "\t\t\t";
                if ((isset($context["S_SIG_ALLOWED"]) ? $context["S_SIG_ALLOWED"] : null)) {
                    // line 145
                    echo "\t\t\t\t<div><label for=\"attach_sig\"><input type=\"checkbox\" name=\"attach_sig\" id=\"attach_sig\"";
                    echo (isset($context["S_SIGNATURE_CHECKED"]) ? $context["S_SIGNATURE_CHECKED"] : null);
                    echo " /> ";
                    echo $this->env->getExtension('phpbb')->lang("ATTACH_SIG");
                    echo "</label></div>
\t\t\t";
                }
                // line 147
                echo "\t\t\t";
                if ((isset($context["S_NOTIFY_ALLOWED"]) ? $context["S_NOTIFY_ALLOWED"] : null)) {
                    // line 148
                    echo "\t\t\t\t<div><label for=\"notify\"><input type=\"checkbox\" name=\"notify\" id=\"notify\"";
                    echo (isset($context["S_NOTIFY_CHECKED"]) ? $context["S_NOTIFY_CHECKED"] : null);
                    echo " /> ";
                    echo $this->env->getExtension('phpbb')->lang("NOTIFY_REPLY");
                    echo "</label></div>
\t\t\t";
                }
                // line 150
                echo "\t\t\t";
                if ((isset($context["S_LOCK_TOPIC_ALLOWED"]) ? $context["S_LOCK_TOPIC_ALLOWED"] : null)) {
                    // line 151
                    echo "\t\t\t\t<div><label for=\"lock_topic\"><input type=\"checkbox\" name=\"lock_topic\" id=\"lock_topic\"";
                    echo (isset($context["S_LOCK_TOPIC_CHECKED"]) ? $context["S_LOCK_TOPIC_CHECKED"] : null);
                    echo " /> ";
                    echo $this->env->getExtension('phpbb')->lang("LOCK_TOPIC");
                    echo "</label></div>
\t\t\t";
                }
                // line 153
                echo "\t\t\t";
                if ((isset($context["S_LOCK_POST_ALLOWED"]) ? $context["S_LOCK_POST_ALLOWED"] : null)) {
                    // line 154
                    echo "\t\t\t\t<div><label for=\"lock_post\"><input type=\"checkbox\" name=\"lock_post\" id=\"lock_post\"";
                    echo (isset($context["S_LOCK_POST_CHECKED"]) ? $context["S_LOCK_POST_CHECKED"] : null);
                    echo " /> ";
                    echo $this->env->getExtension('phpbb')->lang("LOCK_POST");
                    echo " [";
                    echo $this->env->getExtension('phpbb')->lang("LOCK_POST_EXPLAIN");
                    echo "]</label></div>
\t\t\t";
                }
                // line 156
                echo "
\t\t\t";
                // line 157
                if ((((isset($context["S_TYPE_TOGGLE"]) ? $context["S_TYPE_TOGGLE"] : null) || (isset($context["S_TOPIC_TYPE_ANNOUNCE"]) ? $context["S_TOPIC_TYPE_ANNOUNCE"] : null)) || (isset($context["S_TOPIC_TYPE_STICKY"]) ? $context["S_TOPIC_TYPE_STICKY"] : null))) {
                    // line 158
                    echo "\t\t\t<hr class=\"dashed\" />
\t\t\t";
                }
                // line 160
                echo "
\t\t\t";
                // line 161
                if ((isset($context["S_TYPE_TOGGLE"]) ? $context["S_TYPE_TOGGLE"] : null)) {
                    // line 162
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"topic_type-0\">";
                    // line 163
                    if ((isset($context["S_EDIT_POST"]) ? $context["S_EDIT_POST"] : null)) {
                        echo $this->env->getExtension('phpbb')->lang("CHANGE_TOPIC_TO");
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("POST_TOPIC_AS");
                    }
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label></dt>
\t\t\t\t<dd>";
                    // line 164
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "topic_type", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["topic_type"]) {
                        echo "<label for=\"topic_type-";
                        echo $this->getAttribute($context["topic_type"], "VALUE", array());
                        echo "\"><input type=\"radio\" name=\"topic_type\" id=\"topic_type-";
                        echo $this->getAttribute($context["topic_type"], "VALUE", array());
                        echo "\" value=\"";
                        echo $this->getAttribute($context["topic_type"], "VALUE", array());
                        echo "\"";
                        echo $this->getAttribute($context["topic_type"], "S_CHECKED", array());
                        echo " />";
                        echo $this->getAttribute($context["topic_type"], "L_TOPIC_TYPE", array());
                        echo "</label> ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topic_type'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 167
                echo "
\t\t\t";
                // line 168
                if (((isset($context["S_TOPIC_TYPE_ANNOUNCE"]) ? $context["S_TOPIC_TYPE_ANNOUNCE"] : null) || (isset($context["S_TOPIC_TYPE_STICKY"]) ? $context["S_TOPIC_TYPE_STICKY"] : null))) {
                    // line 169
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"topic_time_limit\">";
                    // line 170
                    echo $this->env->getExtension('phpbb')->lang("STICK_TOPIC_FOR");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label></dt>
\t\t\t\t<dd><label for=\"topic_time_limit\"><input type=\"number\" min=\"0\" max=\"999\" name=\"topic_time_limit\" id=\"topic_time_limit\" value=\"";
                    // line 171
                    echo (isset($context["TOPIC_TIME_LIMIT"]) ? $context["TOPIC_TIME_LIMIT"] : null);
                    echo "\" class=\"inputbox autowidth\" /> ";
                    echo $this->env->getExtension('phpbb')->lang("DAYS");
                    echo "</label></dd>
\t\t\t\t<dd>";
                    // line 172
                    echo $this->env->getExtension('phpbb')->lang("STICK_TOPIC_FOR_EXPLAIN");
                    echo "</dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 175
                echo "
\t\t\t";
                // line 176
                if (((isset($context["S_SOFTDELETE_ALLOWED"]) ? $context["S_SOFTDELETE_ALLOWED"] : null) || (isset($context["S_DELETE_ALLOWED"]) ? $context["S_DELETE_ALLOWED"] : null))) {
                    // line 177
                    echo "\t\t\t\t<hr class=\"dashed\" />
\t\t\t\t<dl>
\t\t\t\t\t<dt><label for=\"delete\">";
                    // line 179
                    echo $this->env->getExtension('phpbb')->lang("DELETE_POST");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label></dt>
\t\t\t\t\t<dd><label for=\"delete\"><input type=\"checkbox\" name=\"delete\" id=\"delete\" ";
                    // line 180
                    echo (isset($context["S_SOFTDELETE_CHECKED"]) ? $context["S_SOFTDELETE_CHECKED"] : null);
                    echo " /> ";
                    echo $this->env->getExtension('phpbb')->lang("DELETE_POST_WARN");
                    echo "</label></dd>
\t\t\t\t\t";
                    // line 181
                    if (((isset($context["S_DELETE_ALLOWED"]) ? $context["S_DELETE_ALLOWED"] : null) && (isset($context["S_SOFTDELETE_ALLOWED"]) ? $context["S_SOFTDELETE_ALLOWED"] : null))) {
                        // line 182
                        echo "\t\t\t\t\t\t<dd><label for=\"delete_permanent\"><input type=\"checkbox\" name=\"delete_permanent\" id=\"delete_permanent\" /> ";
                        echo $this->env->getExtension('phpbb')->lang("DELETE_POST_PERMANENTLY");
                        echo "</label></dd>
\t\t\t\t\t";
                    }
                    // line 184
                    echo "\t\t\t\t</dl>
\t\t\t";
                }
                // line 186
                echo "
\t\t\t";
                // line 187
                if ((isset($context["S_EDIT_REASON"]) ? $context["S_EDIT_REASON"] : null)) {
                    // line 188
                    echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"edit_reason\">";
                    // line 189
                    echo $this->env->getExtension('phpbb')->lang("EDIT_REASON");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</label></dt>
\t\t\t\t<dd><input type=\"text\" name=\"edit_reason\" id=\"edit_reason\" value=\"";
                    // line 190
                    echo (isset($context["EDIT_REASON"]) ? $context["EDIT_REASON"] : null);
                    echo "\" class=\"inputbox\" /></dd>
\t\t\t</dl>
\t\t\t";
                }
                // line 193
                echo "\t\t</fieldset>
\t\t";
            }
            // line 195
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "posting_editor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  662 => 195,  658 => 193,  652 => 190,  647 => 189,  644 => 188,  642 => 187,  639 => 186,  635 => 184,  629 => 182,  627 => 181,  621 => 180,  616 => 179,  612 => 177,  610 => 176,  607 => 175,  601 => 172,  595 => 171,  590 => 170,  587 => 169,  585 => 168,  582 => 167,  559 => 164,  550 => 163,  547 => 162,  545 => 161,  542 => 160,  538 => 158,  536 => 157,  533 => 156,  523 => 154,  520 => 153,  512 => 151,  509 => 150,  501 => 148,  498 => 147,  490 => 145,  487 => 144,  479 => 142,  476 => 141,  468 => 139,  465 => 138,  457 => 136,  454 => 135,  453 => 134,  447 => 130,  445 => 129,  442 => 128,  437 => 125,  435 => 124,  429 => 121,  426 => 120,  423 => 119,  416 => 115,  412 => 113,  410 => 112,  406 => 111,  396 => 109,  394 => 108,  391 => 107,  381 => 100,  372 => 99,  365 => 98,  358 => 97,  357 => 96,  353 => 95,  349 => 94,  344 => 91,  342 => 90,  339 => 89,  334 => 86,  332 => 85,  329 => 84,  327 => 83,  323 => 81,  322 => 80,  308 => 77,  304 => 75,  303 => 74,  299 => 72,  296 => 71,  289 => 70,  280 => 69,  275 => 68,  272 => 67,  270 => 66,  263 => 63,  258 => 61,  254 => 60,  249 => 59,  247 => 58,  242 => 57,  238 => 56,  235 => 55,  232 => 54,  230 => 53,  222 => 51,  219 => 50,  216 => 49,  197 => 47,  193 => 46,  188 => 45,  186 => 44,  183 => 43,  179 => 41,  167 => 40,  164 => 39,  163 => 38,  160 => 37,  157 => 36,  154 => 35,  141 => 34,  137 => 33,  135 => 32,  131 => 30,  130 => 29,  118 => 28,  117 => 27,  111 => 25,  108 => 24,  106 => 23,  103 => 22,  102 => 21,  99 => 20,  93 => 17,  88 => 16,  85 => 15,  83 => 14,  80 => 13,  75 => 10,  50 => 9,  42 => 8,  36 => 6,  33 => 5,  31 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }
}
/* <fieldset class="fields1">*/
/* 	<!-- IF ERROR --><p class="error">{ERROR}</p><!-- ENDIF -->*/
/* */
/* 	<!-- IF S_SHOW_TOPIC_ICONS or S_SHOW_PM_ICONS -->*/
/* 	<dl>*/
/* 		<dt><label for="icon">{L_ICON}{L_COLON}</label></dt>*/
/* 		<dd>*/
/* 			<label for="icon"><input type="radio" name="icon" id="icon" value="0" checked="checked" tabindex="1" /> <!-- IF S_SHOW_TOPIC_ICONS -->{L_NO_TOPIC_ICON}<!-- ELSE -->{L_NO_PM_ICON}<!-- ENDIF --></label>*/
/* 			<!-- BEGIN topic_icon --><label for="icon-{topic_icon.ICON_ID}"><input type="radio" name="icon" id="icon-{topic_icon.ICON_ID}" value="{topic_icon.ICON_ID}" {topic_icon.S_ICON_CHECKED} tabindex="1" /><img src="{topic_icon.ICON_IMG}" width="{topic_icon.ICON_WIDTH}" height="{topic_icon.ICON_HEIGHT}" alt="{topic_icon.ICON_NAME}" title="" /></label> <!-- END topic_icon -->*/
/* 		</dd>*/
/* 	</dl>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF not S_PRIVMSGS and S_DISPLAY_USERNAME -->*/
/* 	<dl style="clear: left;">*/
/* 		<dt><label for="username">{L_USERNAME}{L_COLON}</label></dt>*/
/* 		<dd><input type="text" tabindex="1" name="username" id="username" size="25" value="{USERNAME}" class="inputbox autowidth" /></dd>*/
/* 	</dl>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- EVENT posting_editor_subject_before -->*/
/* */
/* 	<!-- IF S_POST_ACTION or S_PRIVMSGS or S_EDIT_DRAFT -->*/
/* 	<dl style="clear: left;">*/
/* 		<dt><label for="subject">{L_SUBJECT}{L_COLON}</label></dt>*/
/* 		<dd>*/
/* 			<!-- EVENT posting_editor_subject_prepend -->*/
/* 			<input type="text" name="subject" id="subject" size="45" maxlength="<!-- IF S_NEW_MESSAGE -->120<!-- ELSE -->124<!-- ENDIF -->" tabindex="2" value="{SUBJECT}{DRAFT_SUBJECT}" class="inputbox autowidth" />*/
/* 			<!-- EVENT posting_editor_subject_append -->*/
/* 		</dd>*/
/* 	</dl>*/
/* 	<!-- IF CAPTCHA_TEMPLATE and S_CONFIRM_CODE -->*/
/* 		<!-- DEFINE $CAPTCHA_TAB_INDEX = 3 -->*/
/* 		<!-- INCLUDE {CAPTCHA_TEMPLATE} -->*/
/* 	<!-- ENDIF -->*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- EVENT posting_editor_subject_after -->*/
/* */
/* 	<!-- INCLUDE posting_buttons.html -->*/
/* */
/* 	<div id="smiley-box">*/
/* 		<!-- EVENT posting_editor_smilies_before -->	*/
/* 		<!-- IF S_SMILIES_ALLOWED and .smiley -->*/
/* 			<strong>{L_SMILIES}</strong><br />*/
/* 			<!-- BEGIN smiley -->*/
/* 				<a href="#" onclick="insert_text('{smiley.A_SMILEY_CODE}', true); return false;"><img src="{smiley.SMILEY_IMG}" width="{smiley.SMILEY_WIDTH}" height="{smiley.SMILEY_HEIGHT}" alt="{smiley.SMILEY_CODE}" title="{smiley.SMILEY_DESC}" /></a>*/
/* 			<!-- END smiley -->*/
/* 		<!-- ENDIF -->*/
/* 		<!-- IF S_SHOW_SMILEY_LINK and S_SMILIES_ALLOWED -->*/
/* 			<br /><a href="{U_MORE_SMILIES}" onclick="popup(this.href, 750, 350, '_phpbbsmilies'); return false;">{L_MORE_SMILIES}</a>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- EVENT posting_editor_smilies_after -->*/
/* 		<!-- IF BBCODE_STATUS -->*/
/* 		<div class="bbcode-status">*/
/* 			<!-- IF .smiley --><hr /><!-- ENDIF -->*/
/* 			{BBCODE_STATUS}<br />*/
/* 			<!-- IF S_BBCODE_ALLOWED -->*/
/* 				{IMG_STATUS}<br />*/
/* 				{FLASH_STATUS}<br />*/
/* 				{URL_STATUS}<br />*/
/* 			<!-- ENDIF -->*/
/* 			{SMILIES_STATUS}*/
/* 		</div>*/
/* 		<!-- ENDIF -->*/
/* 		<!-- EVENT posting_editor_bbcode_status_after -->*/
/* 		<!-- IF S_EDIT_DRAFT || S_DISPLAY_REVIEW -->*/
/* 			<!-- IF S_DISPLAY_REVIEW --><hr /><!-- ENDIF -->*/
/* 			<!-- IF S_EDIT_DRAFT --><strong><a href="{S_UCP_ACTION}">{L_BACK_TO_DRAFTS}</a></strong><!-- ENDIF -->*/
/* 			<!-- IF S_DISPLAY_REVIEW --><strong><a href="#review">{L_TOPIC_REVIEW}</a></strong><!-- ENDIF -->*/
/* 		<!-- ENDIF -->*/
/* 	</div>*/
/* */
/* 	<!-- EVENT posting_editor_message_before -->*/
/* */
/* 	<div id="message-box">*/
/* 		<textarea <!-- IF S_UCP_ACTION and not S_PRIVMSGS and not S_EDIT_DRAFT -->name="signature" id="signature" style="height: 9em;"<!-- ELSE -->name="message" id="message"<!-- ENDIF --> rows="15" cols="76" tabindex="4" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);" onfocus="initInsertions();" class="inputbox">{MESSAGE}{DRAFT_MESSAGE}{SIGNATURE}</textarea>*/
/* 	</div>*/
/* */
/* 	<!-- EVENT posting_editor_message_after -->*/
/* 	</fieldset>*/
/* */
/* <!-- IF $EXTRA_POSTING_OPTIONS eq 1 -->*/
/* */
/* 	<!-- IF not S_SHOW_DRAFTS -->*/
/* 		</div>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF not S_SHOW_DRAFTS and not $SIG_EDIT eq 1 -->*/
/* 	<div class="panel bg2">*/
/* 		<div class="inner">*/
/* 		<fieldset class="submit-buttons">*/
/* 			{S_HIDDEN_ADDRESS_FIELD}*/
/* 			{S_HIDDEN_FIELDS}*/
/* 			<!-- EVENT posting_editor_submit_buttons -->*/
/* 			<!-- IF S_HAS_DRAFTS --><input type="submit" accesskey="d" tabindex="8" name="load" value="{L_LOAD_DRAFT}" class="button2" onclick="load_draft = true;" />&nbsp; <!-- ENDIF -->*/
/* 			<!-- IF S_SAVE_ALLOWED --><input type="submit" accesskey="k" tabindex="7" name="save" value="{L_SAVE_DRAFT}" class="button2" />&nbsp; <!-- ENDIF -->*/
/* 			<input type="submit" tabindex="5" name="preview" value="{L_PREVIEW}" class="button1"<!-- IF not S_PRIVMSGS --> onclick="document.getElementById('postform').action += '#preview';"<!-- ENDIF --> />&nbsp;*/
/* 			<input type="submit" accesskey="s" tabindex="6" name="post" value="{L_SUBMIT}" class="button1 default-submit-action" />&nbsp;*/
/* */
/* 		</fieldset>*/
/* */
/* 		</div>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF not S_PRIVMSGS and not S_SHOW_DRAFTS and not $SIG_EDIT eq 1 -->*/
/* 		<div id="tabs" class="sub-panels" data-show-panel="<!-- IF SHOW_PANEL -->{SHOW_PANEL}<!-- ELSE -->options-panel<!-- ENDIF -->" role="tablist">*/
/* 			<ul>*/
/* 				<li id="options-panel-tab" class="tab activetab"><a href="#tabs" data-subpanel="options-panel" role="tab" aria-controls="options-panel"><span>{L_OPTIONS}</span></a></li>*/
/* 				<!-- IF S_SHOW_ATTACH_BOX -->*/
/* 					<li id="attach-panel-tab" class="tab">*/
/* 						<a href="#tabs" data-subpanel="attach-panel" role="tab" aria-controls="attach-panel">*/
/* 							{L_ATTACHMENTS} <strong id="file-total-progress"><strong id="file-total-progress-bar"></strong></strong>*/
/* 						</a>*/
/* 					</li>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- IF S_SHOW_POLL_BOX || S_POLL_DELETE -->*/
/* 					<li id="poll-panel-tab" class="tab">*/
/* 						<a href="#tabs" data-subpanel="poll-panel" role="tab" aria-controls="poll-panel">{L_ADD_POLL}</a>*/
/* 					</li>*/
/* 				<!-- ENDIF -->*/
/* 				<!-- EVENT posting_editor_add_panel_tab -->*/
/* 			</ul>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF not S_SHOW_DRAFTS and not $SIG_EDIT eq 1 -->*/
/* 	<div class="panel bg3" id="options-panel">*/
/* 		<div class="inner">*/
/* */
/* 		<fieldset class="fields1">*/
/* 			<!-- EVENT posting_editor_options_prepend -->*/
/* 			<!-- IF S_BBCODE_ALLOWED -->*/
/* 				<div><label for="disable_bbcode"><input type="checkbox" name="disable_bbcode" id="disable_bbcode"{S_BBCODE_CHECKED} /> {L_DISABLE_BBCODE}</label></div>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF S_SMILIES_ALLOWED -->*/
/* 				<div><label for="disable_smilies"><input type="checkbox" name="disable_smilies" id="disable_smilies"{S_SMILIES_CHECKED} /> {L_DISABLE_SMILIES}</label></div>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF S_LINKS_ALLOWED -->*/
/* 				<div><label for="disable_magic_url"><input type="checkbox" name="disable_magic_url" id="disable_magic_url"{S_MAGIC_URL_CHECKED} /> {L_DISABLE_MAGIC_URL}</label></div>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF S_SIG_ALLOWED -->*/
/* 				<div><label for="attach_sig"><input type="checkbox" name="attach_sig" id="attach_sig"{S_SIGNATURE_CHECKED} /> {L_ATTACH_SIG}</label></div>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF S_NOTIFY_ALLOWED -->*/
/* 				<div><label for="notify"><input type="checkbox" name="notify" id="notify"{S_NOTIFY_CHECKED} /> {L_NOTIFY_REPLY}</label></div>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF S_LOCK_TOPIC_ALLOWED -->*/
/* 				<div><label for="lock_topic"><input type="checkbox" name="lock_topic" id="lock_topic"{S_LOCK_TOPIC_CHECKED} /> {L_LOCK_TOPIC}</label></div>*/
/* 			<!-- ENDIF -->*/
/* 			<!-- IF S_LOCK_POST_ALLOWED -->*/
/* 				<div><label for="lock_post"><input type="checkbox" name="lock_post" id="lock_post"{S_LOCK_POST_CHECKED} /> {L_LOCK_POST} [{L_LOCK_POST_EXPLAIN}]</label></div>*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF S_TYPE_TOGGLE or S_TOPIC_TYPE_ANNOUNCE or S_TOPIC_TYPE_STICKY -->*/
/* 			<hr class="dashed" />*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF S_TYPE_TOGGLE -->*/
/* 			<dl>*/
/* 				<dt><label for="topic_type-0"><!-- IF S_EDIT_POST -->{L_CHANGE_TOPIC_TO}<!-- ELSE -->{L_POST_TOPIC_AS}<!-- ENDIF -->{L_COLON}</label></dt>*/
/* 				<dd><!-- BEGIN topic_type --><label for="topic_type-{topic_type.VALUE}"><input type="radio" name="topic_type" id="topic_type-{topic_type.VALUE}" value="{topic_type.VALUE}"{topic_type.S_CHECKED} />{topic_type.L_TOPIC_TYPE}</label> <!-- END topic_type --></dd>*/
/* 			</dl>*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF S_TOPIC_TYPE_ANNOUNCE or S_TOPIC_TYPE_STICKY -->*/
/* 			<dl>*/
/* 				<dt><label for="topic_time_limit">{L_STICK_TOPIC_FOR}{L_COLON}</label></dt>*/
/* 				<dd><label for="topic_time_limit"><input type="number" min="0" max="999" name="topic_time_limit" id="topic_time_limit" value="{TOPIC_TIME_LIMIT}" class="inputbox autowidth" /> {L_DAYS}</label></dd>*/
/* 				<dd>{L_STICK_TOPIC_FOR_EXPLAIN}</dd>*/
/* 			</dl>*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF S_SOFTDELETE_ALLOWED or S_DELETE_ALLOWED -->*/
/* 				<hr class="dashed" />*/
/* 				<dl>*/
/* 					<dt><label for="delete">{L_DELETE_POST}{L_COLON}</label></dt>*/
/* 					<dd><label for="delete"><input type="checkbox" name="delete" id="delete" {S_SOFTDELETE_CHECKED} /> {L_DELETE_POST_WARN}</label></dd>*/
/* 					<!-- IF S_DELETE_ALLOWED and S_SOFTDELETE_ALLOWED -->*/
/* 						<dd><label for="delete_permanent"><input type="checkbox" name="delete_permanent" id="delete_permanent" /> {L_DELETE_POST_PERMANENTLY}</label></dd>*/
/* 					<!-- ENDIF -->*/
/* 				</dl>*/
/* 			<!-- ENDIF -->*/
/* */
/* 			<!-- IF S_EDIT_REASON -->*/
/* 			<dl>*/
/* 				<dt><label for="edit_reason">{L_EDIT_REASON}{L_COLON}</label></dt>*/
/* 				<dd><input type="text" name="edit_reason" id="edit_reason" value="{EDIT_REASON}" class="inputbox" /></dd>*/
/* 			</dl>*/
/* 			<!-- ENDIF -->*/
/* 		</fieldset>*/
/* 		<!-- ENDIF -->*/
/* */
/* <!-- ENDIF -->*/
/* */
