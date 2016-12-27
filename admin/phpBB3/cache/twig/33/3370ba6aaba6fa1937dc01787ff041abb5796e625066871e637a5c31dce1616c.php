<?php

/* @pcgf_pmnamesuggestions/event/overall_header_head_append.html */
class __TwigTemplate_6fcf612c34cb5cccf7c50a1447484e1adb45ba7dcad18a3981d0053475255092 extends Twig_Template
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
        if ((isset($context["PM_NAME_SUGGESTIONS"]) ? $context["PM_NAME_SUGGESTIONS"] : null)) {
            // line 2
            echo "    ";
            $asset_file = "@pcgf_pmnamesuggestions/namesuggestions.css";
            $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
            if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
                $asset_path = $asset->get_path();                $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
                if (!file_exists($local_file)) {
                    $local_file = $this->getEnvironment()->findTemplate($asset_path);
                    $asset->set_path($local_file, true);
                $asset->add_assets_version('4');
                $asset_file = $asset->get_url();
                }
            }
            $context['definition']->append('STYLESHEETS', '<link href="' . $asset_file . '" rel="stylesheet" type="text/css" media="screen" />
');
        }
    }

    public function getTemplateName()
    {
        return "@pcgf_pmnamesuggestions/event/overall_header_head_append.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
/* <!-- IF PM_NAME_SUGGESTIONS -->*/
/*     <!-- INCLUDECSS @pcgf_pmnamesuggestions/namesuggestions.css -->*/
/* <!-- ENDIF -->*/
