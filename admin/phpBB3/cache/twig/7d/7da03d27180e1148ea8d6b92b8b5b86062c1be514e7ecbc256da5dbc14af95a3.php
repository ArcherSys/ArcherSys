<?php

/* posting_buttons.html */
class __TwigTemplate_3f98f452e70de1a426c21212035e894ac1e6326c4c6a9abaafbe506d5d5fb31a extends Twig_Template
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
        echo "
<script type=\"text/javascript\">
// <![CDATA[
\tvar form_name = 'postform';
\tvar text_name = ";
        // line 5
        if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SIG_EDIT", array())) {
            echo "'signature'";
        } else {
            echo "'message'";
        }
        echo ";
\tvar load_draft = false;
\tvar upload = false;

\t// Define the bbCode tags
\tvar bbcode = new Array();
\tvar bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]','[flash=]', '[/flash]','[size=]','[/size]'";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            echo ", ";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_NAME", array());
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ");
\tvar imageTag = false;

\t// Helpline messages
\tvar help_line = {
\t\tb: '";
        // line 16
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_B_HELP"));
        echo "',
\t\ti: '";
        // line 17
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_I_HELP"));
        echo "',
\t\tu: '";
        // line 18
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_U_HELP"));
        echo "',
\t\tq: '";
        // line 19
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_Q_HELP"));
        echo "',
\t\tc: '";
        // line 20
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_C_HELP"));
        echo "',
\t\tl: '";
        // line 21
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_L_HELP"));
        echo "',
\t\to: '";
        // line 22
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_O_HELP"));
        echo "',
\t\tp: '";
        // line 23
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_P_HELP"));
        echo "',
\t\tw: '";
        // line 24
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_W_HELP"));
        echo "',
\t\ta: '";
        // line 25
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_A_HELP"));
        echo "',
\t\ts: '";
        // line 26
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_S_HELP"));
        echo "',
\t\tf: '";
        // line 27
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_F_HELP"));
        echo "',
\t\ty: '";
        // line 28
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_Y_HELP"));
        echo "',
\t\td: '";
        // line 29
        echo addslashes($this->env->getExtension('phpbb')->lang("BBCODE_D_HELP"));
        echo "'
\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
            // line 31
            echo "\t\t\t,cb_";
            echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
            echo ": '";
            echo $this->getAttribute($context["custom_tags"], "A_BBCODE_HELPLINE", array());
            echo "'
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t}

\tfunction change_palette()
\t{
\t\tphpbb.toggleDisplay('colour_palette');
\t\te = document.getElementById('colour_palette');

\t\tif (e.style.display == 'block')
\t\t{
\t\t\tdocument.getElementById('bbpalette').value = '";
        // line 42
        echo addslashes($this->env->getExtension('phpbb')->lang("FONT_COLOR_HIDE"));
        echo "';
\t\t}
\t\telse
\t\t{
\t\t\tdocument.getElementById('bbpalette').value = '";
        // line 46
        echo addslashes($this->env->getExtension('phpbb')->lang("FONT_COLOR"));
        echo "';
\t\t}
\t}

// ]]>
</script>
";
        // line 52
        $asset_file = (("" . (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null)) . "/javascript/editor.js");
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('4');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 53
        echo "
";
        // line 54
        if ((isset($context["S_BBCODE_ALLOWED"]) ? $context["S_BBCODE_ALLOWED"] : null)) {
            // line 55
            echo "<div id=\"colour_palette\" style=\"display: none;\">
\t<dl style=\"clear: left;\">
\t\t<dt><label>";
            // line 57
            echo $this->env->getExtension('phpbb')->lang("FONT_COLOR");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd id=\"color_palette_placeholder\" data-orientation=\"h\" data-height=\"12\" data-width=\"15\" data-bbcode=\"true\"></dd>
\t</dl>
</div>

";
            // line 62
            // line 63
            echo "<div id=\"format-buttons\">
\t<input type=\"button\" class=\"button2 bbcode-b\" accesskey=\"b\" name=\"addbbcode0\" value=\" B \" style=\"font-weight:bold; width: 30px\" onclick=\"bbstyle(0)\" title=\"";
            // line 64
            echo $this->env->getExtension('phpbb')->lang("BBCODE_B_HELP");
            echo "\" />
\t<input type=\"button\" class=\"button2 bbcode-i\" accesskey=\"i\" name=\"addbbcode2\" value=\" i \" style=\"font-style:italic; width: 30px\" onclick=\"bbstyle(2)\" title=\"";
            // line 65
            echo $this->env->getExtension('phpbb')->lang("BBCODE_I_HELP");
            echo "\" />
\t<input type=\"button\" class=\"button2 bbcode-u\" accesskey=\"u\" name=\"addbbcode4\" value=\" u \" style=\"text-decoration: underline; width: 30px\" onclick=\"bbstyle(4)\" title=\"";
            // line 66
            echo $this->env->getExtension('phpbb')->lang("BBCODE_U_HELP");
            echo "\" />
\t";
            // line 67
            if ((isset($context["S_BBCODE_QUOTE"]) ? $context["S_BBCODE_QUOTE"] : null)) {
                // line 68
                echo "\t\t<input type=\"button\" class=\"button2 bbcode-quote\" accesskey=\"q\" name=\"addbbcode6\" value=\"Quote\" style=\"width: 50px\" onclick=\"bbstyle(6)\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BBCODE_Q_HELP");
                echo "\" />
\t";
            }
            // line 70
            echo "\t<input type=\"button\" class=\"button2 bbcode-code\" accesskey=\"c\" name=\"addbbcode8\" value=\"Code\" style=\"width: 40px\" onclick=\"bbstyle(8)\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("BBCODE_C_HELP");
            echo "\" />
\t<input type=\"button\" class=\"button2 bbcode-list\" accesskey=\"l\" name=\"addbbcode10\" value=\"List\" style=\"width: 40px\" onclick=\"bbstyle(10)\" title=\"";
            // line 71
            echo $this->env->getExtension('phpbb')->lang("BBCODE_L_HELP");
            echo "\" />
\t<input type=\"button\" class=\"button2 bbcode-list-\" accesskey=\"o\" name=\"addbbcode12\" value=\"List=\" style=\"width: 40px\" onclick=\"bbstyle(12)\" title=\"";
            // line 72
            echo $this->env->getExtension('phpbb')->lang("BBCODE_O_HELP");
            echo "\" />
\t<input type=\"button\" class=\"button2 bbcode-asterisk\" accesskey=\"y\" name=\"addlistitem\" value=\"[*]\" style=\"width: 40px\" onclick=\"bbstyle(-1)\" title=\"";
            // line 73
            echo $this->env->getExtension('phpbb')->lang("BBCODE_LISTITEM_HELP");
            echo "\" />
\t";
            // line 74
            if ((isset($context["S_BBCODE_IMG"]) ? $context["S_BBCODE_IMG"] : null)) {
                // line 75
                echo "\t\t<input type=\"button\" class=\"button2 bbcode-img\" accesskey=\"p\" name=\"addbbcode14\" value=\"Img\" style=\"width: 40px\" onclick=\"bbstyle(14)\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BBCODE_P_HELP");
                echo "\" />
\t";
            }
            // line 77
            echo "\t";
            if ((isset($context["S_LINKS_ALLOWED"]) ? $context["S_LINKS_ALLOWED"] : null)) {
                // line 78
                echo "\t\t<input type=\"button\" class=\"button2 bbcode-url\" accesskey=\"w\" name=\"addbbcode16\" value=\"URL\" style=\"text-decoration: underline; width: 40px\" onclick=\"bbstyle(16)\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BBCODE_W_HELP");
                echo "\" />
\t";
            }
            // line 80
            echo "\t";
            if ((isset($context["S_BBCODE_FLASH"]) ? $context["S_BBCODE_FLASH"] : null)) {
                // line 81
                echo "\t\t<input type=\"button\" class=\"button2 bbcode-flash\" accesskey=\"d\" name=\"addbbcode18\" value=\"Flash\" onclick=\"bbstyle(18)\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BBCODE_D_HELP");
                echo "\" />
\t";
            }
            // line 83
            echo "\t<select name=\"addbbcode20\" class=\"bbcode-size\" onchange=\"bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]');this.form.addbbcode20.selectedIndex = 2;\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("BBCODE_F_HELP");
            echo "\">
\t\t<option value=\"50\">";
            // line 84
            echo $this->env->getExtension('phpbb')->lang("FONT_TINY");
            echo "</option>
\t\t<option value=\"85\">";
            // line 85
            echo $this->env->getExtension('phpbb')->lang("FONT_SMALL");
            echo "</option>
\t\t<option value=\"100\" selected=\"selected\">";
            // line 86
            echo $this->env->getExtension('phpbb')->lang("FONT_NORMAL");
            echo "</option>
\t\t";
            // line 87
            if (( !(isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) || ((isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) >= 150))) {
                // line 88
                echo "\t\t\t<option value=\"150\">";
                echo $this->env->getExtension('phpbb')->lang("FONT_LARGE");
                echo "</option>
\t\t\t";
                // line 89
                if (( !(isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) || ((isset($context["MAX_FONT_SIZE"]) ? $context["MAX_FONT_SIZE"] : null) >= 200))) {
                    // line 90
                    echo "\t\t\t\t<option value=\"200\">";
                    echo $this->env->getExtension('phpbb')->lang("FONT_HUGE");
                    echo "</option>
\t\t\t";
                }
                // line 92
                echo "\t\t";
            }
            // line 93
            echo "\t</select>
\t<input type=\"button\" class=\"button2 bbcode-color\" name=\"bbpalette\" id=\"bbpalette\" value=\"";
            // line 94
            echo $this->env->getExtension('phpbb')->lang("FONT_COLOR");
            echo "\" onclick=\"change_palette();\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("BBCODE_S_HELP");
            echo "\" />

\t";
            // line 96
            // line 97
            echo "
\t";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_tags"]) {
                // line 99
                echo "\t\t<input type=\"button\" class=\"button2 bbcode-";
                echo $this->getAttribute($context["custom_tags"], "BBCODE_TAG_CLEAN", array());
                echo "\" name=\"addbbcode";
                echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
                echo "\" value=\"";
                echo $this->getAttribute($context["custom_tags"], "BBCODE_TAG", array());
                echo "\" onclick=\"bbstyle(";
                echo $this->getAttribute($context["custom_tags"], "BBCODE_ID", array());
                echo ")\" title=\"";
                echo $this->getAttribute($context["custom_tags"], "BBCODE_HELPLINE", array());
                echo "\" />
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_tags'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "</div>
";
            // line 102
        }
    }

    public function getTemplateName()
    {
        return "posting_buttons.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 102,  322 => 101,  305 => 99,  301 => 98,  298 => 97,  297 => 96,  290 => 94,  287 => 93,  284 => 92,  278 => 90,  276 => 89,  271 => 88,  269 => 87,  265 => 86,  261 => 85,  257 => 84,  252 => 83,  246 => 81,  243 => 80,  237 => 78,  234 => 77,  228 => 75,  226 => 74,  222 => 73,  218 => 72,  214 => 71,  209 => 70,  203 => 68,  201 => 67,  197 => 66,  193 => 65,  189 => 64,  186 => 63,  185 => 62,  176 => 57,  172 => 55,  170 => 54,  167 => 53,  152 => 52,  143 => 46,  136 => 42,  125 => 33,  114 => 31,  110 => 30,  106 => 29,  102 => 28,  98 => 27,  94 => 26,  90 => 25,  86 => 24,  82 => 23,  78 => 22,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  38 => 11,  25 => 5,  19 => 1,);
    }
}
/* */
/* <script type="text/javascript">*/
/* // <![CDATA[*/
/* 	var form_name = 'postform';*/
/* 	var text_name = <!-- IF $SIG_EDIT -->'signature'<!-- ELSE -->'message'<!-- ENDIF -->;*/
/* 	var load_draft = false;*/
/* 	var upload = false;*/
/* */
/* 	// Define the bbCode tags*/
/* 	var bbcode = new Array();*/
/* 	var bbtags = new Array('[b]','[/b]','[i]','[/i]','[u]','[/u]','[quote]','[/quote]','[code]','[/code]','[list]','[/list]','[list=]','[/list]','[img]','[/img]','[url]','[/url]','[flash=]', '[/flash]','[size=]','[/size]'<!-- BEGIN custom_tags -->, {custom_tags.BBCODE_NAME}<!-- END custom_tags -->);*/
/* 	var imageTag = false;*/
/* */
/* 	// Helpline messages*/
/* 	var help_line = {*/
/* 		b: '{LA_BBCODE_B_HELP}',*/
/* 		i: '{LA_BBCODE_I_HELP}',*/
/* 		u: '{LA_BBCODE_U_HELP}',*/
/* 		q: '{LA_BBCODE_Q_HELP}',*/
/* 		c: '{LA_BBCODE_C_HELP}',*/
/* 		l: '{LA_BBCODE_L_HELP}',*/
/* 		o: '{LA_BBCODE_O_HELP}',*/
/* 		p: '{LA_BBCODE_P_HELP}',*/
/* 		w: '{LA_BBCODE_W_HELP}',*/
/* 		a: '{LA_BBCODE_A_HELP}',*/
/* 		s: '{LA_BBCODE_S_HELP}',*/
/* 		f: '{LA_BBCODE_F_HELP}',*/
/* 		y: '{LA_BBCODE_Y_HELP}',*/
/* 		d: '{LA_BBCODE_D_HELP}'*/
/* 		<!-- BEGIN custom_tags -->*/
/* 			,cb_{custom_tags.BBCODE_ID}: '{custom_tags.A_BBCODE_HELPLINE}'*/
/* 		<!-- END custom_tags -->*/
/* 	}*/
/* */
/* 	function change_palette()*/
/* 	{*/
/* 		phpbb.toggleDisplay('colour_palette');*/
/* 		e = document.getElementById('colour_palette');*/
/* */
/* 		if (e.style.display == 'block')*/
/* 		{*/
/* 			document.getElementById('bbpalette').value = '{LA_FONT_COLOR_HIDE}';*/
/* 		}*/
/* 		else*/
/* 		{*/
/* 			document.getElementById('bbpalette').value = '{LA_FONT_COLOR}';*/
/* 		}*/
/* 	}*/
/* */
/* // ]]>*/
/* </script>*/
/* <!-- INCLUDEJS {T_ASSETS_PATH}/javascript/editor.js -->*/
/* */
/* <!-- IF S_BBCODE_ALLOWED -->*/
/* <div id="colour_palette" style="display: none;">*/
/* 	<dl style="clear: left;">*/
/* 		<dt><label>{L_FONT_COLOR}{L_COLON}</label></dt>*/
/* 		<dd id="color_palette_placeholder" data-orientation="h" data-height="12" data-width="15" data-bbcode="true"></dd>*/
/* 	</dl>*/
/* </div>*/
/* */
/* <!-- EVENT posting_editor_buttons_before -->*/
/* <div id="format-buttons">*/
/* 	<input type="button" class="button2 bbcode-b" accesskey="b" name="addbbcode0" value=" B " style="font-weight:bold; width: 30px" onclick="bbstyle(0)" title="{L_BBCODE_B_HELP}" />*/
/* 	<input type="button" class="button2 bbcode-i" accesskey="i" name="addbbcode2" value=" i " style="font-style:italic; width: 30px" onclick="bbstyle(2)" title="{L_BBCODE_I_HELP}" />*/
/* 	<input type="button" class="button2 bbcode-u" accesskey="u" name="addbbcode4" value=" u " style="text-decoration: underline; width: 30px" onclick="bbstyle(4)" title="{L_BBCODE_U_HELP}" />*/
/* 	<!-- IF S_BBCODE_QUOTE -->*/
/* 		<input type="button" class="button2 bbcode-quote" accesskey="q" name="addbbcode6" value="Quote" style="width: 50px" onclick="bbstyle(6)" title="{L_BBCODE_Q_HELP}" />*/
/* 	<!-- ENDIF -->*/
/* 	<input type="button" class="button2 bbcode-code" accesskey="c" name="addbbcode8" value="Code" style="width: 40px" onclick="bbstyle(8)" title="{L_BBCODE_C_HELP}" />*/
/* 	<input type="button" class="button2 bbcode-list" accesskey="l" name="addbbcode10" value="List" style="width: 40px" onclick="bbstyle(10)" title="{L_BBCODE_L_HELP}" />*/
/* 	<input type="button" class="button2 bbcode-list-" accesskey="o" name="addbbcode12" value="List=" style="width: 40px" onclick="bbstyle(12)" title="{L_BBCODE_O_HELP}" />*/
/* 	<input type="button" class="button2 bbcode-asterisk" accesskey="y" name="addlistitem" value="[*]" style="width: 40px" onclick="bbstyle(-1)" title="{L_BBCODE_LISTITEM_HELP}" />*/
/* 	<!-- IF S_BBCODE_IMG -->*/
/* 		<input type="button" class="button2 bbcode-img" accesskey="p" name="addbbcode14" value="Img" style="width: 40px" onclick="bbstyle(14)" title="{L_BBCODE_P_HELP}" />*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF S_LINKS_ALLOWED -->*/
/* 		<input type="button" class="button2 bbcode-url" accesskey="w" name="addbbcode16" value="URL" style="text-decoration: underline; width: 40px" onclick="bbstyle(16)" title="{L_BBCODE_W_HELP}" />*/
/* 	<!-- ENDIF -->*/
/* 	<!-- IF S_BBCODE_FLASH -->*/
/* 		<input type="button" class="button2 bbcode-flash" accesskey="d" name="addbbcode18" value="Flash" onclick="bbstyle(18)" title="{L_BBCODE_D_HELP}" />*/
/* 	<!-- ENDIF -->*/
/* 	<select name="addbbcode20" class="bbcode-size" onchange="bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]');this.form.addbbcode20.selectedIndex = 2;" title="{L_BBCODE_F_HELP}">*/
/* 		<option value="50">{L_FONT_TINY}</option>*/
/* 		<option value="85">{L_FONT_SMALL}</option>*/
/* 		<option value="100" selected="selected">{L_FONT_NORMAL}</option>*/
/* 		<!-- IF not MAX_FONT_SIZE or MAX_FONT_SIZE >= 150 -->*/
/* 			<option value="150">{L_FONT_LARGE}</option>*/
/* 			<!-- IF not MAX_FONT_SIZE or MAX_FONT_SIZE >= 200 -->*/
/* 				<option value="200">{L_FONT_HUGE}</option>*/
/* 			<!-- ENDIF -->*/
/* 		<!-- ENDIF -->*/
/* 	</select>*/
/* 	<input type="button" class="button2 bbcode-color" name="bbpalette" id="bbpalette" value="{L_FONT_COLOR}" onclick="change_palette();" title="{L_BBCODE_S_HELP}" />*/
/* */
/* 	<!-- EVENT posting_editor_buttons_custom_tags_before -->*/
/* */
/* 	<!-- BEGIN custom_tags -->*/
/* 		<input type="button" class="button2 bbcode-{custom_tags.BBCODE_TAG_CLEAN}" name="addbbcode{custom_tags.BBCODE_ID}" value="{custom_tags.BBCODE_TAG}" onclick="bbstyle({custom_tags.BBCODE_ID})" title="{custom_tags.BBCODE_HELPLINE}" />*/
/* 	<!-- END custom_tags -->*/
/* </div>*/
/* <!-- EVENT posting_editor_buttons_after -->*/
/* <!-- ENDIF -->*/
/* */
