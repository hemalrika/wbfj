<?php

/* pagination.twig */
class __TwigTemplate_f927e9ebb965697e227fa8ba7991946a80bc34917fe8e437edbc0c4567956326 extends Twig_Template
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
        echo "<div class=\"ai1ec-pagination ai1ec-btn-group\">";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 3
            if (twig_test_iterable((isset($context["link"]) ? $context["link"] : null))) {
                // line 4
                echo "\t\t\t<a class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "class"), "html", null, true);
                echo " ai1ec-load-view ai1ec-btn ai1ec-btn-sm
\t\t\t\tai1ec-btn-default";
                // line 5
                if ((!$this->getAttribute((isset($context["link"]) ? $context["link"] : null), "enabled"))) {
                    echo "ai1ec-disabled";
                }
                echo "\"";
                // line 6
                echo (isset($context["data_type"]) ? $context["data_type"] : null);
                echo "
\t\t\t\thref=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "href"), "html_attr");
                echo "\">";
                // line 8
                echo $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "text");
                echo "
\t\t\t</a>";
            } else {
                // line 11
                echo (isset($context["link"]) ? $context["link"] : null);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "pagination.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  49 => 11,  44 => 8,  32 => 5,  25 => 3,  50 => 12,  46 => 11,  40 => 8,  36 => 7,  27 => 4,  23 => 4,  81 => 26,  71 => 21,  67 => 19,  63 => 18,  59 => 17,  55 => 16,  52 => 15,  48 => 14,  41 => 7,  37 => 6,  30 => 7,  26 => 5,  21 => 2,  19 => 1,);
    }
}
