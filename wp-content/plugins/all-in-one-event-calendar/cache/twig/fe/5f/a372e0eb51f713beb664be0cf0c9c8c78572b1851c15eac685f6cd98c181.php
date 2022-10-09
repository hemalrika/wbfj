<?php

/* calendar.twig */
class __TwigTemplate_fe5fa372e0eb51f713beb664be0cf0c9c8c78572b1851c15eac685f6cd98c181 extends Twig_Template
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
        // line 2
        echo "<!-- START All-in-One Event Calendar Plugin - Version";
        echo (isset($context["version"]) ? $context["version"] : null);
        echo " -->
<div id=\"ai1ec-container\"
\t class=\"ai1ec-main-container";
        // line 4
        echo (isset($context["ai1ec_calendar_classes"]) ? $context["ai1ec_calendar_classes"] : null);
        echo "\">
\t<!-- AI1EC_PAGE_CONTENT_PLACEHOLDER -->
\t<div id=\"ai1ec-calendar\" class=\"timely ai1ec-calendar\">";
        // line 7
        if (array_key_exists("ai1ec_above_calendar", $context)) {
            // line 8
            echo (isset($context["ai1ec_above_calendar"]) ? $context["ai1ec_above_calendar"] : null);
        }
        // line 10
        echo (isset($context["filter_menu"]) ? $context["filter_menu"] : null);
        echo "
\t\t<div id=\"ai1ec-calendar-view-container\"
\t\t\t class=\"ai1ec-calendar-view-container\">
\t\t\t<div id=\"ai1ec-calendar-view-loading\"
\t\t\t\t class=\"ai1ec-loading ai1ec-calendar-view-loading\"></div>
\t\t\t<div id=\"ai1ec-calendar-view\" class=\"ai1ec-calendar-view\">";
        // line 16
        echo (isset($context["view"]) ? $context["view"] : null);
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ai1ec-subscribe-container ai1ec-pull-right ai1ec-btn-group\">";
        // line 20
        echo (isset($context["subscribe_buttons"]) ? $context["subscribe_buttons"] : null);
        echo "
\t\t</div>";
        // line 22
        echo (isset($context["after_view"]) ? $context["after_view"] : null);
        echo "
\t</div><!-- /.timely -->
</div>";
        // line 25
        if ((!twig_test_empty((isset($context["inline_js_calendar"]) ? $context["inline_js_calendar"] : null)))) {
            // line 26
            echo "\t<script type=\"text/javascript\">";
            echo (isset($context["inline_js_calendar"]) ? $context["inline_js_calendar"] : null);
            echo "</script>";
        }
        // line 28
        echo "<!-- END All-in-One Event Calendar Plugin -->";
        // line 30
        echo "

";
    }

    public function getTemplateName()
    {
        return "calendar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 26,  45 => 21,  28 => 6,  84 => 30,  72 => 25,  65 => 28,  57 => 18,  53 => 22,  34 => 8,  274 => 120,  270 => 118,  262 => 114,  249 => 108,  244 => 105,  240 => 103,  236 => 100,  234 => 99,  229 => 96,  225 => 94,  221 => 91,  219 => 90,  217 => 89,  215 => 88,  210 => 85,  207 => 84,  203 => 82,  199 => 80,  195 => 79,  190 => 76,  188 => 75,  181 => 70,  176 => 67,  173 => 66,  170 => 65,  168 => 64,  160 => 61,  155 => 56,  152 => 54,  147 => 51,  142 => 50,  140 => 49,  138 => 48,  136 => 47,  134 => 46,  130 => 44,  127 => 43,  125 => 42,  123 => 41,  112 => 33,  107 => 31,  105 => 30,  100 => 29,  96 => 36,  94 => 27,  90 => 26,  87 => 32,  83 => 24,  79 => 27,  76 => 26,  69 => 18,  66 => 17,  62 => 20,  58 => 25,  54 => 14,  51 => 13,  42 => 19,  24 => 3,  43 => 16,  38 => 17,  33 => 14,  31 => 7,  35 => 10,  29 => 4,  56 => 14,  49 => 20,  44 => 11,  32 => 8,  25 => 4,  50 => 24,  46 => 11,  40 => 18,  36 => 16,  27 => 5,  23 => 3,  81 => 28,  71 => 19,  67 => 30,  63 => 18,  59 => 19,  55 => 16,  52 => 15,  48 => 23,  41 => 10,  37 => 6,  30 => 7,  26 => 5,  21 => 2,  19 => 2,);
    }
}
