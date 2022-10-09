<?php

/* buttons.twig */
class __TwigTemplate_a93238b4edfff2b09421aaa142e63cdb68db832b987dbd8259d76df8c9157ceb extends Twig_Template
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
        echo "<div class=\"ai1ec-sas-actions ai1ec-btn-group ai1ec-clearfix\">";
        // line 2
        echo (isset($context["action_buttons"]) ? $context["action_buttons"] : null);
        if ((isset($context["tickets_button"]) ? $context["tickets_button"] : null)) {
            // line 3
            echo "<a href=\"#\" target=\"_blank\" class=\"ai1ec-sas-action ai1ec-btn ai1ec-btn-primary";
            // line 4
            if ((isset($context["single"]) ? $context["single"] : null)) {
                echo "ai1ec-btn-sm";
            } else {
                echo "ai1ec-btn-xs";
            }
            // line 5
            echo "\t\t\tai1ec-btn-sm ai1ec-sas-action-tickets\">
\t\t\t<i class=\"ai1ec-fa ai1ec-fa-ticket\"></i>
\t\t\t<span class=\"ai1ec-hidden-xs\">";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["text_tickets"]) ? $context["text_tickets"] : null), "html", null, true);
            echo "</span>
\t\t</a>";
        }
        // line 10
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  43 => 14,  38 => 11,  33 => 8,  31 => 7,  35 => 12,  29 => 6,  56 => 14,  49 => 11,  44 => 8,  32 => 5,  25 => 4,  50 => 12,  46 => 11,  40 => 12,  36 => 7,  27 => 5,  23 => 4,  81 => 26,  71 => 21,  67 => 19,  63 => 18,  59 => 17,  55 => 16,  52 => 15,  48 => 14,  41 => 10,  37 => 6,  30 => 7,  26 => 4,  21 => 2,  19 => 1,);
    }
}
