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

/* base/components/global-search/layout.js.twig */
class __TwigTemplate_29fc70d47c1451b34a0883385dfb4e15 extends Template
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
        // line 1
        echo "\$('#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 1), "html", null, true);
        echo "').global_search({
\tinit_opened: ";
        // line 2
        echo twig_escape_filter($this->env, var_export(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasQuery", [], "method", false, false, false, 2)), "html", null, true);
        echo "
});";
    }

    public function getTemplateName()
    {
        return "base/components/global-search/layout.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/global-search/layout.js.twig", "C:\\xampp\\htdocs\\web\\templates\\base\\components\\global-search\\layout.js.twig");
    }
}
