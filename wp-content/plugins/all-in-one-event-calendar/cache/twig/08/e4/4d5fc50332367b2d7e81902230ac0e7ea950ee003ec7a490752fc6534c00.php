<?php

/* navigation.twig */
class __TwigTemplate_08e44d5fc50332367b2d7e81902230ac0e7ea950ee003ec7a490752fc6534c00 extends Twig_Template
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
        echo "<div class=\"ai1ec-clearfix\">";
        // line 2
        echo (isset($context["views_dropdown"]) ? $context["views_dropdown"] : null);
        echo "
\t<div class=\"ai1ec-title-buttons ai1ec-btn-toolbar\">";
        // line 4
        echo (isset($context["before_pagination"]) ? $context["before_pagination"] : null);
        // line 5
        echo (isset($context["pagination_links"]) ? $context["pagination_links"] : null);
        // line 6
        echo (isset($context["after_pagination"]) ? $context["after_pagination"] : null);
        // line 7
        if (array_key_exists("contribution_buttons", $context)) {
            // line 8
            echo (isset($context["contribution_buttons"]) ? $context["contribution_buttons"] : null);
        }
        // line 10
        echo "\t</div>";
        // line 11
        if (array_key_exists("below_toolbar", $context)) {
            // line 12
            echo (isset($context["below_toolbar"]) ? $context["below_toolbar"] : null);
        }
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "navigation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 14,  38 => 11,  33 => 8,  31 => 7,  35 => 12,  29 => 6,  56 => 14,  49 => 11,  44 => 8,  32 => 5,  25 => 4,  50 => 12,  46 => 11,  40 => 12,  36 => 10,  27 => 5,  23 => 4,  81 => 26,  71 => 21,  67 => 19,  63 => 18,  59 => 17,  55 => 16,  52 => 15,  48 => 14,  41 => 7,  37 => 6,  30 => 7,  26 => 5,  21 => 2,  19 => 1,);
    }
}
