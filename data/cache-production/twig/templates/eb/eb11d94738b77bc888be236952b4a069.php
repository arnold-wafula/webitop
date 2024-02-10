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

/* base/layouts/activity-panel/activity-entry/edits-entry.html.twig */
class __TwigTemplate_b0dbc296bdaaa70dda9a37d6493bc131 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'iboActivityEntryExtraClasses' => [$this, 'block_iboActivityEntryExtraClasses'],
            'iboActivityEntryMainInformationContent' => [$this, 'block_iboActivityEntryMainInformationContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base/layouts/activity-panel/activity-entry/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base/layouts/activity-panel/activity-entry/layout.html.twig", "base/layouts/activity-panel/activity-entry/edits-entry.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_iboActivityEntryExtraClasses($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "ibo-edits-entry";
    }

    // line 5
    public function block_iboActivityEntryMainInformationContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAttributes", [], "method", false, false, false, 6)) == 1) && (twig_length_filter($this->env, (($__internal_compile_0 = twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAttributes", [], "method", false, false, false, 6))) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["descriptions"] ?? null) : null)) == 1))) {
            // line 7
            echo "        <span class=\"ibo-edits-entry--short-description\">";
            echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetShortDescriptionAsHtml", [], "method", false, false, false, 7);
            echo "</span>
    ";
        } else {
            // line 9
            echo "        <a href=\"#\" class=\"ibo-edits-entry--short-description\" data-role=\"ibo-edits-entry--long-description-toggler\">
            ";
            // line 11
            echo "            <span class=\"ibo-edits-entry--long-description-toggler-icon fa fa-caret-down\"></span>
            ";
            // line 12
            echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetShortDescriptionAsHtml", [], "method", false, false, false, 12);
            echo "
        </a>
        <ul class=\"ibo-edits-entry--long-description\" data-role=\"ibo-edits-entry--long-description\">
            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAttributes", [], "method", false, false, false, 15));
            foreach ($context['_seq'] as $context["sAttCode"] => $context["aAttData"]) {
                // line 16
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["aAttData"], "descriptions", [], "any", false, false, false, 16));
                foreach ($context['_seq'] as $context["_key"] => $context["sAttHtmlDescription"]) {
                    // line 17
                    echo "                    <li class=\"ibo-edits-entry--attribute-description\" data-attribute-code=\"";
                    echo twig_escape_filter($this->env, $context["sAttCode"], "html", null, true);
                    echo "\">";
                    echo $context["sAttHtmlDescription"];
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sAttHtmlDescription'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['sAttCode'], $context['aAttData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "base/layouts/activity-panel/activity-entry/edits-entry.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 20,  99 => 19,  88 => 17,  83 => 16,  79 => 15,  73 => 12,  70 => 11,  67 => 9,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/activity-panel/activity-entry/edits-entry.html.twig", "C:\\xampp\\htdocs\\web\\templates\\base\\layouts\\activity-panel\\activity-entry\\edits-entry.html.twig");
    }
}
