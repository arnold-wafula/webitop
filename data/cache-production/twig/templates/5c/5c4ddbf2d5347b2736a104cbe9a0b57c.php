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

/* base/layouts/object/object-details/layout.html.twig */
class __TwigTemplate_0ef9680b7bdce8c840a2489b8907ae6a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'iboPanelMetaData' => [$this, 'block_iboPanelMetaData'],
            'iboPanelSubTitle' => [$this, 'block_iboPanelSubTitle'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "base/components/panel/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base/components/panel/layout.html.twig", "base/layouts/object/object-details/layout.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_iboPanelMetaData($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    data-object-class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetClassName", [], "method", false, false, false, 6), "html", null, true);
        echo "\"
    data-object-id=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetObjectId", [], "method", false, false, false, 7), "html", null, true);
        echo "\"
    data-object-mode=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetObjectMode", [], "method", false, false, false, 8), "html", null, true);
        echo "\"
    ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasStatus", [], "method", false, false, false, 9)) {
            echo "data-object-state=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetStatusCode", [], "method", false, false, false, 9), "html", null, true);
            echo "\"";
        }
        // line 10
        echo "    data-role=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlockCode", [], "method", false, false, false, 10), "html", null, true);
        echo "\"
";
    }

    // line 13
    public function block_iboPanelSubTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetStatusLabel", [], "method", false, false, false, 14))) {
            // line 15
            echo "        <span class=\"ibo-object-details--status\" data-role=\"ibo-object-details--status\" data-status-code=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetStatusCode", [], "method", false, false, false, 15), "html", null, true);
            echo "\">
            <span class=\"ibo-object-details--status-dot\" data-role=\"ibo-object-details--status-dot\" style=\"background-color: ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetStatusColor", [], "method", false, false, false, 16), "html", null, true);
            echo ";\"></span>
            <span class=\"ibo-object-details--status-label\" data-role=\"ibo-object-details--status-label\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetStatusLabel", [], "method", false, false, false, 17), "html", null, true);
            echo "</span>
        </span>
    ";
        }
        // line 20
        echo "    <span class=\"ibo-object-details--object-class\" data-role=\"ibo-object-details--object-class\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetClassLabel", [], "method", false, false, false, 20), "html", null, true);
        echo "</span>
    ";
        // line 21
        $this->displayParentBlock("iboPanelSubTitle", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "base/layouts/object/object-details/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 21,  99 => 20,  93 => 17,  89 => 16,  84 => 15,  81 => 14,  77 => 13,  70 => 10,  64 => 9,  60 => 8,  56 => 7,  51 => 6,  47 => 5,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/object/object-details/layout.html.twig", "C:\\xampp\\htdocs\\web\\templates\\base\\layouts\\object\\object-details\\layout.html.twig");
    }
}
