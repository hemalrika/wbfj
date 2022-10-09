<?php

/* widget.twig */
class __TwigTemplate_5dd773750481354d81ed8097491f321553b77d6cdc59276d9122a7dde91c0eb3 extends Twig_Template
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
        echo (isset($context["before_widget"]) ? $context["before_widget"] : null);
        // line 3
        if ((!twig_test_empty((isset($context["title"]) ? $context["title"] : null)))) {
            // line 4
            echo (((isset($context["before_title"]) ? $context["before_title"] : null) . (isset($context["title"]) ? $context["title"] : null)) . (isset($context["after_title"]) ? $context["after_title"] : null));
        }
        // line 7
        echo (isset($context["widget_html"]) ? $context["widget_html"] : null);
        // line 9
        echo (isset($context["after_widget"]) ? $context["after_widget"] : null);
    }

    public function getTemplateName()
    {
        return "widget.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 86,  185 => 81,  180 => 78,  169 => 70,  163 => 69,  151 => 62,  124 => 52,  116 => 47,  70 => 28,  61 => 24,  118 => 49,  113 => 47,  111 => 46,  106 => 44,  103 => 41,  98 => 39,  93 => 35,  88 => 36,  85 => 30,  80 => 31,  73 => 25,  263 => 95,  260 => 93,  257 => 84,  255 => 83,  246 => 77,  242 => 75,  238 => 73,  233 => 69,  218 => 66,  191 => 62,  189 => 59,  186 => 56,  182 => 79,  179 => 53,  177 => 52,  175 => 51,  172 => 49,  167 => 46,  165 => 45,  158 => 41,  156 => 40,  145 => 61,  143 => 35,  139 => 34,  119 => 32,  102 => 31,  97 => 29,  92 => 27,  75 => 26,  39 => 14,  22 => 3,  60 => 26,  45 => 12,  28 => 9,  84 => 30,  72 => 25,  65 => 20,  57 => 17,  53 => 15,  34 => 6,  274 => 120,  270 => 118,  262 => 114,  249 => 78,  244 => 105,  240 => 74,  236 => 72,  234 => 99,  229 => 96,  225 => 94,  221 => 91,  219 => 90,  217 => 89,  215 => 88,  210 => 85,  207 => 84,  203 => 82,  199 => 80,  195 => 79,  190 => 76,  188 => 75,  181 => 70,  176 => 67,  173 => 72,  170 => 65,  168 => 64,  160 => 42,  155 => 64,  152 => 38,  147 => 51,  142 => 60,  140 => 59,  138 => 48,  136 => 33,  134 => 55,  130 => 53,  127 => 43,  125 => 42,  123 => 41,  112 => 45,  107 => 31,  105 => 30,  100 => 40,  96 => 37,  94 => 37,  90 => 33,  87 => 25,  83 => 24,  79 => 23,  76 => 29,  69 => 18,  66 => 17,  62 => 20,  58 => 25,  54 => 14,  51 => 17,  42 => 19,  24 => 2,  43 => 12,  38 => 17,  33 => 14,  31 => 6,  35 => 10,  29 => 5,  56 => 14,  49 => 20,  44 => 11,  32 => 10,  25 => 4,  50 => 14,  46 => 14,  40 => 10,  36 => 8,  27 => 5,  23 => 4,  81 => 28,  71 => 23,  67 => 21,  63 => 25,  59 => 23,  55 => 20,  52 => 15,  48 => 15,  41 => 11,  37 => 13,  30 => 9,  26 => 7,  21 => 3,  19 => 1,);
    }
}
