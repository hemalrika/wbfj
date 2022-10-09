<?php

/* categories.twig */
class __TwigTemplate_b5633d95de14839f5641ad75e89a427aa6fdfc24b529c6a3f1d8e24779f6f79f extends Twig_Template
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
        echo "<li class=\"ai1ec-dropdown ai1ec-category-filter ai1ec-cat-filter";
        // line 2
        if ((!twig_test_empty((isset($context["selected_cat_ids"]) ? $context["selected_cat_ids"] : null)))) {
            echo "ai1ec-active";
        }
        echo "\"
\tdata-slug=\"cat\">
\t<a class=\"ai1ec-dropdown-toggle\" data-toggle=\"ai1ec-dropdown\">
\t\t<i class=\"ai1ec-fa ai1ec-fa-folder-open\"></i>
\t\t<span class=\"ai1ec-clear-filter ai1ec-tooltip-trigger\"
\t\t\tdata-href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["clear_filter"]) ? $context["clear_filter"] : null), "html", null, true);
        echo "\"";
        // line 8
        echo (isset($context["data_type"]) ? $context["data_type"] : null);
        echo "
\t\t\ttitle=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["text_clear_category_filter"]) ? $context["text_clear_category_filter"] : null), "html", null, true);
        echo "\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-times-circle\"></i>
\t\t</span>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["text_categories"]) ? $context["text_categories"] : null), "html", null, true);
        echo "
\t\t<span class=\"ai1ec-caret\"></span>
\t</a>
\t<div class=\"ai1ec-dropdown-menu\">";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["term"]) {
            // line 17
            echo "\t\t\t<div data-term=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "term_id"), "html", null, true);
            echo "\"";
            // line 18
            if (twig_in_filter($this->getAttribute((isset($context["term"]) ? $context["term"] : null), "term_id"), (isset($context["selected_cat_ids"]) ? $context["selected_cat_ids"] : null))) {
                // line 19
                echo "\t\t\t\t\tclass=\"ai1ec-active\"";
            }
            // line 20
            echo ">
\t\t\t\t<a class=\"ai1ec-load-view ai1ec-category ai1ec-cat\"";
            // line 22
            if ((!twig_test_empty($this->getAttribute((isset($context["term"]) ? $context["term"] : null), "description")))) {
                // line 23
                echo "\t\t\t\t\t\ttitle=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "description"), "html_attr");
                echo "\"";
            }
            // line 25
            echo (isset($context["data_type"]) ? $context["data_type"] : null);
            echo "
\t\t\t\t\thref=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "href"), "html", null, true);
            echo "\">";
            // line 27
            if (twig_test_empty($this->getAttribute((isset($context["term"]) ? $context["term"] : null), "color"))) {
                // line 28
                echo "\t\t\t\t\t\t<span class=\"ai1ec-color-swatch-empty\"></span>";
            } else {
                // line 30
                echo $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "color");
            }
            // line 32
            echo $this->getAttribute((isset($context["term"]) ? $context["term"] : null), "name");
            echo "
\t\t\t\t</a>
\t\t\t</div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['term'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t</div>
</li>

";
    }

    public function getTemplateName()
    {
        return "categories.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 30,  72 => 25,  65 => 22,  57 => 18,  53 => 17,  34 => 8,  274 => 120,  270 => 118,  262 => 114,  249 => 108,  244 => 105,  240 => 103,  236 => 100,  234 => 99,  229 => 96,  225 => 94,  221 => 91,  219 => 90,  217 => 89,  215 => 88,  210 => 85,  207 => 84,  203 => 82,  199 => 80,  195 => 79,  190 => 76,  188 => 75,  181 => 70,  176 => 67,  173 => 66,  170 => 65,  168 => 64,  160 => 61,  155 => 56,  152 => 54,  147 => 51,  142 => 50,  140 => 49,  138 => 48,  136 => 47,  134 => 46,  130 => 44,  127 => 43,  125 => 42,  123 => 41,  112 => 33,  107 => 31,  105 => 30,  100 => 29,  96 => 36,  94 => 27,  90 => 26,  87 => 32,  83 => 24,  79 => 27,  76 => 26,  69 => 18,  66 => 17,  62 => 20,  58 => 15,  54 => 14,  51 => 13,  42 => 10,  24 => 3,  43 => 12,  38 => 9,  33 => 6,  31 => 7,  35 => 12,  29 => 4,  56 => 14,  49 => 16,  44 => 11,  32 => 5,  25 => 4,  50 => 12,  46 => 11,  40 => 12,  36 => 7,  27 => 5,  23 => 4,  81 => 28,  71 => 19,  67 => 23,  63 => 18,  59 => 19,  55 => 16,  52 => 15,  48 => 14,  41 => 10,  37 => 6,  30 => 7,  26 => 4,  21 => 2,  19 => 1,);
    }
}
