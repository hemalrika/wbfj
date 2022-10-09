<?php

/* event-popup.twig */
class __TwigTemplate_943e432a0dcbd7fe60a569412aaad985e131799f5363073300d0a6cd788b4d71 extends Twig_Template
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
        echo "<div class=\"ai1ec-popover ai1ec-popup";
        echo twig_escape_filter($this->env, (isset($context["popup_classes"]) ? $context["popup_classes"] : null), "html", null, true);
        echo "
\tai1ec-event-instance-id-";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "instance_id"), "html", null, true);
        echo "\">";
        // line 4
        $context["category_colors"] = $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "get_runtime", array(0 => "category_colors"), "method");
        // line 5
        if ((!twig_test_empty((isset($context["category_colors"]) ? $context["category_colors"] : null)))) {
            // line 6
            echo "\t\t<div class=\"ai1ec-color-swatches\">";
            echo (isset($context["category_colors"]) ? $context["category_colors"] : null);
            echo "</div>";
        }
        // line 8
        echo "
\t<span class=\"ai1ec-popup-title\">
\t\t<a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
        echo "\"
\t\t   class=\"ai1ec-load-event\"
\t\t\t>";
        // line 12
        echo $this->env->getExtension('ai1ec')->truncate($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "filtered_title"));
        echo "</a>";
        // line 13
        if (((isset($context["show_location_in_title"]) ? $context["show_location_in_title"] : null) && (!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue"))))) {
            // line 14
            echo "\t\t\t<span class=\"ai1ec-event-location\"
\t\t\t\t>";
            // line 15
            echo twig_escape_filter($this->env, sprintf((isset($context["text_venue_separator"]) ? $context["text_venue_separator"] : null), $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "venue")), "html", null, true);
            echo "</span>";
        }
        // line 17
        if (((isset($context["is_ticket_button_enabled"]) ? $context["is_ticket_button_enabled"] : null) && (!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url"))))) {
            // line 18
            echo "\t\t\t<a class=\"ai1ec-pull-right ai1ec-btn ai1ec-btn-primary ai1ec-btn-xs
\t\t\t\tai1ec-buy-tickets\" target=\"_blank\"
\t\t\t\thref=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url"), "html_attr");
            echo "\"
\t\t\t\t>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "ticket_url_label"), "html", null, true);
            echo "</a>";
        }
        // line 23
        echo "\t</span>";
        // line 25
        if ((!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "edit_post_link")))) {
            // line 26
            echo "\t\t<a class=\"post-edit-link\" href=\"";
            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "edit_post_link");
            echo "\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-pencil\"></i>";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["text_edit"]) ? $context["text_edit"] : null), "html", null, true);
            echo "
\t\t</a>";
        }
        // line 30
        echo "
\t<div class=\"ai1ec-event-time\">";
        // line 32
        if (twig_test_empty((isset($context["popup_timespan"]) ? $context["popup_timespan"] : null))) {
            // line 33
            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "timespan_short");
        } else {
            // line 35
            echo (isset($context["popup_timespan"]) ? $context["popup_timespan"] : null);
        }
        // line 37
        echo "\t</div>";
        // line 39
        if ((!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "avatar_not_wrapped")))) {
            // line 40
            echo "\t\t<a class=\"ai1ec-load-event\"
\t\t\thref=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "permalink"), "html_attr");
            echo "\">";
            // line 42
            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "avatar_not_wrapped");
            echo "
\t\t</a>";
        }
        // line 46
        if ((!twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_excerpt")))) {
            // line 47
            echo "\t\t<div class=\"ai1ec-popup-excerpt\">";
            echo $this->getAttribute((isset($context["event"]) ? $context["event"] : null), "post_excerpt");
            echo "</div>";
        }
        // line 49
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "event-popup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 49,  113 => 47,  111 => 46,  106 => 42,  103 => 41,  98 => 39,  93 => 35,  88 => 32,  85 => 30,  80 => 27,  73 => 25,  263 => 95,  260 => 93,  257 => 84,  255 => 83,  246 => 77,  242 => 75,  238 => 73,  233 => 69,  218 => 66,  191 => 62,  189 => 59,  186 => 56,  182 => 54,  179 => 53,  177 => 52,  175 => 51,  172 => 49,  167 => 46,  165 => 45,  158 => 41,  156 => 40,  145 => 36,  143 => 35,  139 => 34,  119 => 32,  102 => 31,  97 => 29,  92 => 27,  75 => 26,  39 => 14,  22 => 3,  60 => 26,  45 => 12,  28 => 8,  84 => 30,  72 => 25,  65 => 20,  57 => 17,  53 => 15,  34 => 8,  274 => 120,  270 => 118,  262 => 114,  249 => 78,  244 => 105,  240 => 74,  236 => 72,  234 => 99,  229 => 96,  225 => 94,  221 => 91,  219 => 90,  217 => 89,  215 => 88,  210 => 85,  207 => 84,  203 => 82,  199 => 80,  195 => 79,  190 => 76,  188 => 75,  181 => 70,  176 => 67,  173 => 66,  170 => 65,  168 => 64,  160 => 42,  155 => 56,  152 => 38,  147 => 51,  142 => 50,  140 => 49,  138 => 48,  136 => 33,  134 => 46,  130 => 44,  127 => 43,  125 => 42,  123 => 41,  112 => 33,  107 => 31,  105 => 30,  100 => 40,  96 => 37,  94 => 27,  90 => 33,  87 => 25,  83 => 24,  79 => 23,  76 => 26,  69 => 18,  66 => 17,  62 => 20,  58 => 25,  54 => 14,  51 => 13,  42 => 19,  24 => 2,  43 => 16,  38 => 17,  33 => 14,  31 => 6,  35 => 10,  29 => 5,  56 => 14,  49 => 20,  44 => 11,  32 => 10,  25 => 4,  50 => 14,  46 => 18,  40 => 10,  36 => 8,  27 => 4,  23 => 3,  81 => 28,  71 => 23,  67 => 21,  63 => 20,  59 => 18,  55 => 16,  52 => 15,  48 => 13,  41 => 15,  37 => 13,  30 => 9,  26 => 5,  21 => 2,  19 => 1,);
    }
}
