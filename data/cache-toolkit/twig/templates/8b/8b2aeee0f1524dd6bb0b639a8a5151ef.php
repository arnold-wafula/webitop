<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base/components/input/input-textarea.html.twig */
class __TwigTemplate_991aed36616415abace6b6b4c8ccf7e9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'iboInputLabel' => [$this, 'block_iboInputLabel'],
            'iboInput' => [$this, 'block_iboInput'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('iboInputLabel', $context, $blocks);
        // line 3
        $this->displayBlock('iboInput', $context, $blocks);
    }

    // line 1
    public function block_iboInputLabel($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 3
    public function block_iboInput($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <textarea
            id=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 5), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetName", [], "method", false, false, false, 5), "html", null, true);
        echo "\"
            cols=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetCols", [], "method", false, false, false, 6), "html", null, true);
        echo "\" rows=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetRows", [], "method", false, false, false, 6), "html", null, true);
        echo "\"
              ";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method", false, false, false, 7)) {
            // line 8
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method", false, false, false, 8));
            foreach ($context['_seq'] as $context["sName"] => $context["sValue"]) {
                // line 9
                echo "                      data-";
                echo twig_escape_filter($this->env, $context["sName"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["sValue"], "html", null, true);
                echo "\"
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['sName'], $context['sValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "              ";
        }
        // line 12
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 12)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 12), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 12), "html", null, true);
            echo "\"";
        }
        // line 13
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetPlaceHolder", [], "method", false, false, false, 13)) {
            echo "  placeholder=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetPlaceHolder", [], "method", false, false, false, 13), "html", null, true);
            echo "\" ";
        }
        // line 14
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsDisabled", [], "method", false, false, false, 14)) {
            echo " disabled ";
        }
        // line 15
        echo "\t>";
        echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetValue", [], "method", false, false, false, 15);
        echo "</textarea>
";
    }

    public function getTemplateName()
    {
        return "base/components/input/input-textarea.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  112 => 15,  107 => 14,  100 => 13,  91 => 12,  88 => 11,  77 => 9,  72 => 8,  70 => 7,  64 => 6,  58 => 5,  55 => 4,  51 => 3,  45 => 1,  41 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/input/input-textarea.html.twig", "C:\\xampp\\htdocs\\web\\templates\\base\\components\\input\\input-textarea.html.twig");
    }
}
