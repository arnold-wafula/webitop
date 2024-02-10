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

/* base/components/input/select/selectoption.html.twig */
class __TwigTemplate_6040a3e2d9105777896029d414d18f14 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<option id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 3), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetValue", [], "method", false, false, false, 3), "html", null, true);
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsSelected", [], "method", false, false, false, 3)) {
            echo "selected";
        }
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsDisabled", [], "method", false, false, false, 3)) {
            echo "disabled";
        }
        echo ">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLabel", [], "method", false, false, false, 3), "html", null, true);
        echo "</option>
";
    }

    public function getTemplateName()
    {
        return "base/components/input/select/selectoption.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/input/select/selectoption.html.twig", "C:\\xampp\\htdocs\\web\\templates\\base\\components\\input\\select\\selectoption.html.twig");
    }
}
