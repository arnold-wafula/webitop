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

/* base/components/field/layout.html.twig */
class __TwigTemplate_35d97e29ca4c5bef54c084287b16f625 extends Template
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
        $context["aParams"] = twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetParams", [], "method", false, false, false, 1);
        // line 2
        echo "<div id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 2), "html", null, true);
        echo "\"
     class=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 3), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 3), "html", null, true);
        echo " ibo-field-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLayout", [], "method", false, false, false, 3), "html", null, true);
        echo "
        ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHidden", [], "method", false, false, false, 4)) {
            echo " ibo-is-hidden";
        }
        echo "\"
     data-role=\"ibo-field\"
     data-attribute-code=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAttCode", [], "method", false, false, false, 6), "html", null, true);
        echo "\"
     data-attribute-type=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAttType", [], "method", false, false, false, 7), "html", null, true);
        echo "\"
     data-attribute-label=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAttLabel", [], "method", false, false, false, 8), "html", null, true);
        echo "\"
        ";
        // line 10
        echo "        ";
        // line 11
        echo "        ";
        // line 12
        echo "     data-attribute-flag-hidden=\"";
        echo twig_escape_filter($this->env, var_export(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHidden", [], "method", false, false, false, 12)), "html", null, true);
        echo "\"
     data-attribute-flag-read-only=\"";
        // line 13
        echo twig_escape_filter($this->env, var_export(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsReadOnly", [], "method", false, false, false, 13)), "html", null, true);
        echo "\"
     data-attribute-flag-mandatory=\"";
        // line 14
        echo twig_escape_filter($this->env, var_export(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsMandatory", [], "method", false, false, false, 14)), "html", null, true);
        echo "\"
     data-attribute-flag-must-change=\"";
        // line 15
        echo twig_escape_filter($this->env, var_export(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsMustChange", [], "method", false, false, false, 15)), "html", null, true);
        echo "\"
     data-attribute-flag-must-prompt=\"";
        // line 16
        echo twig_escape_filter($this->env, var_export(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsMustPrompt", [], "method", false, false, false, 16)), "html", null, true);
        echo "\"
     data-attribute-flag-slave=\"";
        // line 17
        echo twig_escape_filter($this->env, var_export(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsSlave", [], "method", false, false, false, 17)), "html", null, true);
        echo "\"
     data-value-raw=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetValueRaw", [], "method", false, false, false, 18), "html", null, true);
        echo "\"
        ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method", false, false, false, 19)) {
            // line 20
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method", false, false, false, 20));
            foreach ($context['_seq'] as $context["sName"] => $context["sValue"]) {
                // line 21
                echo "                data-";
                echo twig_escape_filter($this->env, $context["sName"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["sValue"], "html", null, true);
                echo "\"
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['sName'], $context['sValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        ";
        }
        // line 24
        echo ">
    <div class=\"ibo-field--label\">";
        // line 25
        echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLabel", [], "method", false, false, false, 25);
        echo "
        ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasDescription", [], "method", false, false, false, 26)) {
            // line 27
            echo "            <span class=\"ibo-has-description\" data-tooltip-content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDescription", [], "method", false, false, false, 27), "html", null, true);
            echo "\" data-tooltip-max-width=\"600px\" ></span>
        ";
        }
        // line 29
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLayout", [], "method", false, false, false, 29) == twig_constant("Combodo\\iTop\\Application\\UI\\Base\\Component\\Field\\Field::ENUM_FIELD_LAYOUT_LARGE"))) {
            // line 30
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetComments", [], "method", false, false, false, 30)) {
                // line 31
                echo "                <div class=\"ibo-field--comments\">";
                echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetComments", [], "method", false, false, false, 31);
                echo "</div>
            ";
            }
            // line 33
            echo "        ";
        }
        // line 34
        echo "    </div>
    <div class=\"ibo-field--value\" ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetValueId", [], "method", false, false, false, 35)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetValueId", [], "method", false, false, false, 35), "html", null, true);
            echo "\"";
        }
        echo ">
        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
            // line 37
            echo "            ";
            echo $this->env->getFunction('render_block')->getCallable()($context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oSubBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </div>
    ";
        // line 40
        if ((twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLayout", [], "method", false, false, false, 40) != twig_constant("Combodo\\iTop\\Application\\UI\\Base\\Component\\Field\\Field::ENUM_FIELD_LAYOUT_LARGE"))) {
            // line 41
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetComments", [], "method", false, false, false, 41)) {
                // line 42
                echo "            <div class=\"ibo-field--comments\">";
                echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetComments", [], "method", false, false, false, 42);
                echo "</div>
        ";
            }
            // line 44
            echo "    ";
        }
        // line 45
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "base/components/field/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 45,  193 => 44,  187 => 42,  184 => 41,  182 => 40,  179 => 39,  170 => 37,  166 => 36,  158 => 35,  155 => 34,  152 => 33,  146 => 31,  143 => 30,  140 => 29,  134 => 27,  132 => 26,  128 => 25,  125 => 24,  122 => 23,  111 => 21,  106 => 20,  104 => 19,  100 => 18,  96 => 17,  92 => 16,  88 => 15,  84 => 14,  80 => 13,  75 => 12,  73 => 11,  71 => 10,  67 => 8,  63 => 7,  59 => 6,  52 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/field/layout.html.twig", "C:\\xampp\\htdocs\\web\\templates\\base\\components\\field\\layout.html.twig");
    }
}
