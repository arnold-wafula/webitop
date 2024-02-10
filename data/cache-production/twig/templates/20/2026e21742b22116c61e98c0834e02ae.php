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

/* base/components/datatable/static/formtable/layout.html.twig */
class __TwigTemplate_dbeee006dbd75049794490b30f937614 extends Template
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
        echo "
<input type=\"hidden\" name=\"attr_";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetRef", [], "method", false, false, false, 4), "html", null, true);
        echo "\" value=\"\">

";
        // line 6
        $context["columns"] = twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetColumns", [], "method", false, false, false, 6);
        // line 7
        echo "<table id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 7), "html", null, true);
        echo "\" width=\"100%\" class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 7), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 7), "html", null, true);
        echo " listResults";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHidden", [], "method", false, false, false, 7)) {
            echo " ibo-is-hidden";
        }
        echo "\" data-role=\"ibo-datatable\" data-status=\"loading\">
    <thead>
    <tr>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["columns"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 11
            echo "            <th class=\"ibo-datatable-header\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "description", [], "any", false, false, false, 11), "html", null, true);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["column"], "label", [], "any", false, false, false, 11);
            echo "</th>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </tr>
    </thead>
    <tbody>
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetRows", [], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["oRowBlock"]) {
            // line 17
            echo "        ";
            echo $this->env->getFunction('render_block')->getCallable()($context["oRowBlock"], ["aPage" => ($context["aPage"] ?? null)]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oRowBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </tbody>
</table>

";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasRowActions", [], "method", false, false, false, 22)) {
            // line 23
            echo "    ";
            echo $this->env->getFunction('render_block')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetRowActionsTemplate", [], "method", false, false, false, 23));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "base/components/datatable/static/formtable/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 23,  100 => 22,  95 => 19,  86 => 17,  82 => 16,  77 => 13,  66 => 11,  62 => 10,  47 => 7,  45 => 6,  40 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/datatable/static/formtable/layout.html.twig", "C:\\xampp\\htdocs\\web\\templates\\base\\components\\datatable\\static\\formtable\\layout.html.twig");
    }
}
