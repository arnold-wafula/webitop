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

/* base/components/datatable/static/formtablerow/layout.html.twig */
class __TwigTemplate_2da1b1cfc939e0081163cbaac5466460 extends Template
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
<tr id=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetRef", [], "method", false, false, false, 4), "html", null, true);
        echo "_row_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetRowId", [], "method", false, false, false, 4), "html", null, true);
        echo "\" ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetData", [], "method", false, false, false, 4));
        foreach ($context['_seq'] as $context["cellName"] => $context["cellValue"]) {
            // line 5
            echo "        ";
            if (($context["cellName"] === "@class")) {
                echo " class=\"";
                echo twig_escape_filter($this->env, $context["cellValue"], "html", null, true);
                echo "\"";
            }
            // line 6
            echo "        ";
            if (($context["cellName"] === "@meta")) {
                echo " ";
                echo $context["cellValue"];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['cellName'], $context['cellValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo ">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetColumns", [], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["colName"] => $context["column"]) {
            // line 9
            echo "        <td>
            ";
            // line 10
            $context["cellValueHtml"] = "";
            // line 11
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetData", [], "method", false, false, false, 11));
            foreach ($context['_seq'] as $context["cellName"] => $context["cellValue"]) {
                // line 12
                echo "                ";
                if (($context["cellName"] == $context["colName"])) {
                    // line 13
                    echo "                    ";
                    $context["cellValueHtml"] = $context["cellValue"];
                    // line 14
                    echo "                ";
                }
                // line 15
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['cellName'], $context['cellValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "            ";
            if (twig_test_empty(($context["cellValueHtml"] ?? null))) {
                // line 17
                echo "                ";
                $context["cellValueHtml"] = "&nbsp;";
                // line 18
                echo "            ";
            }
            // line 19
            echo "            ";
            echo ($context["cellValueHtml"] ?? null);
            echo "
        </td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['colName'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</tr>";
    }

    public function getTemplateName()
    {
        return "base/components/datatable/static/formtablerow/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 22,  106 => 19,  103 => 18,  100 => 17,  97 => 16,  91 => 15,  88 => 14,  85 => 13,  82 => 12,  77 => 11,  75 => 10,  72 => 9,  68 => 8,  65 => 7,  55 => 6,  48 => 5,  40 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/datatable/static/formtablerow/layout.html.twig", "C:\\xampp\\htdocs\\web\\templates\\base\\components\\datatable\\static\\formtablerow\\layout.html.twig");
    }
}
