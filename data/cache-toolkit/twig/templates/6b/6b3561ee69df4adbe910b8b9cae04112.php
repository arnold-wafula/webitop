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

/* base/components/collapsible-section/layout.html.twig */
class __TwigTemplate_2634f09e8cb7b1b2d686c3785187105e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'iboPanelBody' => [$this, 'block_iboPanelBody'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 1), "html", null, true);
        echo "\"
\t class=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 2), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 2), "html", null, true);
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsOpenedByDefault", [], "method", false, false, false, 2)) {
            echo " ibo-is-opened";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHidden", [], "method", false, false, false, 2)) {
            echo " ibo-is-hidden";
        }
        echo "\"
     data-role=\"ibo-collapsible-section\">
\t<div class=\"ibo-collapsible-section--header\" data-role=\"ibo-collapsible-section--collapse-toggler\">
\t\t<div class=\"ibo-collapsible-section--action-button ibo-collapsible-section--maximize-button\"><i class=\"fas fa-caret-down\"></i></div>
\t\t<div class=\"ibo-collapsible-section--action-button ibo-collapsible-section--minimize-button\"><i class=\"fas fa-caret-up\"></i></div>
\t\t<div class=\"ibo-collapsible-section--title\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTitle", [], "method", false, false, false, 7), "html", null, true);
        echo "</div>
\t</div>
\t<div class=\"ibo-collapsible-section--body\" data-role=\"ibo-collapsible-section--body\">
\t\t";
        // line 10
        $this->displayBlock('iboPanelBody', $context, $blocks);
        // line 15
        echo "\t</div>
</div>";
    }

    // line 10
    public function block_iboPanelBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["oMainBlock"]) {
            // line 12
            echo "\t\t\t\t";
            echo $this->env->getFunction('render_block')->getCallable()($context["oMainBlock"], ["aPage" => ($context["aPage"] ?? null)]);
            echo "
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oMainBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "base/components/collapsible-section/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 14,  82 => 12,  77 => 11,  73 => 10,  68 => 15,  66 => 10,  60 => 7,  43 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/collapsible-section/layout.html.twig", "C:\\xampp\\htdocs\\web\\templates\\base\\components\\collapsible-section\\layout.html.twig");
    }
}
