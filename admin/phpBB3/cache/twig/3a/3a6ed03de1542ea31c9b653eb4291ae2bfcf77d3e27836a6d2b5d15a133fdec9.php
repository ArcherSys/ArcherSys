<?php

/* @vinny_shareon/event/overall_header_head_append.html */
class __TwigTemplate_cbb797e436c3612a46f08f8891732771a292053c4b806dc5d056bcf2351d4eaa extends Twig_Template
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
        if (((isset($context["S_SO_STATUS"]) ? $context["S_SO_STATUS"] : null) && (isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null))) {
            // line 2
            echo "\t";
            $asset_file = "@vinny_shareon/shareon.css";
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
        return "@vinny_shareon/event/overall_header_head_append.html";
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
/* <!-- IF S_SO_STATUS and S_VIEWTOPIC -->*/
/* 	<!-- INCLUDECSS @vinny_shareon/shareon.css -->*/
/* <!-- ENDIF -->*/
