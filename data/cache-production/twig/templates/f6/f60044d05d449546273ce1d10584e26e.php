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

/* application/links/indirect/block-indirect-linkset-edit-table/layout.js.twig */
class __TwigTemplate_c472e6961faa081e004a1aa21a0fadd8 extends Template
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
        ob_start(function () { return ''; });
        // line 4
        echo "oWidget";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 4), "GetInputId", [], "method", false, false, false, 4), "html", null, true);
        echo " = new LinksWidget(
        '";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 5), "GetLinkedSetId", [], "method", false, false, false, 5), "html", null, true);
        echo "',
        '";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 6), "GetClass", [], "method", false, false, false, 6), "html", null, true);
        echo "',
        '";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 7), "GetAttCode", [], "method", false, false, false, 7), "html", null, true);
        echo "',
        '";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 8), "GetInputId", [], "method", false, false, false, 8), "html", null, true);
        echo "',
        '";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 9), "GetNameSuffix", [], "method", false, false, false, 9), "html", null, true);
        echo "',
        ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sDuplicates", [], "any", false, false, false, 10), "html", null, true);
        echo ",
        ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sWizHelper", [], "any", false, false, false, 11), "html", null, true);
        echo ",
        '";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 12), "GetExternalKeyToRemote", [], "method", false, false, false, 12), "html", null, true);
        echo "',
        ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "sJSDoSearch", [], "any", false, false, false, 13), "html", null, true);
        echo ",
        ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "iMaxAddedId", [], "any", false, false, false, 14), "html", null, true);
        echo ",
        ";
        // line 15
        echo json_encode(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "aRemoved", [], "any", false, false, false, 15));
        echo "
);
oWidget";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "oUILinksWidget", [], "any", false, false, false, 17), "GetInputId", [], "method", false, false, false, 17), "html", null, true);
        echo ".Init();
";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_parse_0_);
    }

    public function getTemplateName()
    {
        return "application/links/indirect/block-indirect-linkset-edit-table/layout.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 3,  89 => 17,  84 => 15,  80 => 14,  76 => 13,  72 => 12,  68 => 11,  64 => 10,  60 => 9,  56 => 8,  52 => 7,  48 => 6,  44 => 5,  39 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "application/links/indirect/block-indirect-linkset-edit-table/layout.js.twig", "C:\\xampp\\htdocs\\web\\templates\\application\\links\\indirect\\block-indirect-linkset-edit-table\\layout.js.twig");
    }
}
