<?php

/* filter-menu.twig */
class __TwigTemplate_1f25bacc16e82305cef35f2d4954e3a58cf88f86b74ba3bdfdb3edd107c03a6d extends Twig_Template
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
        if ((!array_key_exists("hide_toolbar", $context))) {
            // line 2
            if (array_key_exists("ai1ec_before_filter_menu", $context)) {
                // line 3
                echo (isset($context["ai1ec_before_filter_menu"]) ? $context["ai1ec_before_filter_menu"] : null);
            }
            // line 5
            echo "\t<div class=\"timely ai1ec-calendar-toolbar ai1ec-clearfix";
            // line 6
            if (((((twig_test_empty((isset($context["categories"]) ? $context["categories"] : null)) && twig_test_empty((isset($context["tags"]) ? $context["tags"] : null))) && (!array_key_exists("additional_filters", $context))) && twig_test_empty((isset($context["contribution_buttons"]) ? $context["contribution_buttons"] : null))) && (!array_key_exists("additional_buttons", $context)))) {
                // line 12
                echo "\t\tai1ec-hidden";
            }
            // line 14
            echo "\t\">
\t\t<ul class=\"ai1ec-nav ai1ec-nav-pills ai1ec-pull-left ai1ec-filters\">";
            // line 16
            echo (isset($context["categories"]) ? $context["categories"] : null);
            // line 17
            echo (isset($context["tags"]) ? $context["tags"] : null);
            // line 18
            if (array_key_exists("additional_filters", $context)) {
                // line 19
                echo (isset($context["additional_filters"]) ? $context["additional_filters"] : null);
            }
            // line 21
            echo "\t\t</ul>
\t\t<div class=\"ai1ec-pull-right\">";
            // line 23
            if (array_key_exists("additional_buttons", $context)) {
                // line 24
                echo (isset($context["additional_buttons"]) ? $context["additional_buttons"] : null);
            }
            // line 26
            echo "\t\t</div>
\t</div>";
        }
    }

    public function getTemplateName()
    {
        return "filter-menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 21,  28 => 6,  84 => 30,  72 => 25,  65 => 22,  57 => 18,  53 => 26,  34 => 8,  274 => 120,  270 => 118,  262 => 114,  249 => 108,  244 => 105,  240 => 103,  236 => 100,  234 => 99,  229 => 96,  225 => 94,  221 => 91,  219 => 90,  217 => 89,  215 => 88,  210 => 85,  207 => 84,  203 => 82,  199 => 80,  195 => 79,  190 => 76,  188 => 75,  181 => 70,  176 => 67,  173 => 66,  170 => 65,  168 => 64,  160 => 61,  155 => 56,  152 => 54,  147 => 51,  142 => 50,  140 => 49,  138 => 48,  136 => 47,  134 => 46,  130 => 44,  127 => 43,  125 => 42,  123 => 41,  112 => 33,  107 => 31,  105 => 30,  100 => 29,  96 => 36,  94 => 27,  90 => 26,  87 => 32,  83 => 24,  79 => 27,  76 => 26,  69 => 18,  66 => 17,  62 => 20,  58 => 15,  54 => 14,  51 => 13,  42 => 19,  24 => 3,  43 => 12,  38 => 17,  33 => 14,  31 => 7,  35 => 12,  29 => 4,  56 => 14,  49 => 16,  44 => 11,  32 => 5,  25 => 4,  50 => 24,  46 => 11,  40 => 18,  36 => 16,  27 => 5,  23 => 3,  81 => 28,  71 => 19,  67 => 23,  63 => 18,  59 => 19,  55 => 16,  52 => 15,  48 => 23,  41 => 10,  37 => 6,  30 => 12,  26 => 5,  21 => 2,  19 => 1,);
    }
}
