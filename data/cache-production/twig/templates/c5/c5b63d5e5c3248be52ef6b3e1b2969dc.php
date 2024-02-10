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

/* base/components/input/select/select.html.twig */
class __TwigTemplate_9362615f8d22227bc99e12f664c71acf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'iboInput' => [$this, 'block_iboInput'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $this->displayBlock('iboInput', $context, $blocks);
    }

    public function block_iboInput($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasLabel", [], "method", false, false, false, 4) && twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsLabelBefore", [], "method", false, false, false, 4))) {
            // line 5
            echo "        ";
            $this->loadTemplate("base/components/input/inputlabel.html.twig", "base/components/input/select/select.html.twig", 5)->display($context);
            // line 6
            echo "    ";
        }
        // line 7
        echo "    <select id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 7), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetName", [], "method", false, false, false, 7), "html", null, true);
        echo "\"
            ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubmitOnChange", [], "method", false, false, false, 8)) {
            echo " onChange=\"this.form.submit();\" ";
        }
        // line 9
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsMultiple", [], "method", false, false, false, 9)) {
            echo " multiple ";
        }
        // line 10
        echo "            class=\"";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHidden", [], "method", false, false, false, 10)) {
            echo "ibo-is-hidden";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 10)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 10), "html", null, true);
        }
        echo "\"
            ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method", false, false, false, 11)) {
            // line 12
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDataAttributes", [], "method", false, false, false, 12));
            foreach ($context['_seq'] as $context["sName"] => $context["sValue"]) {
                // line 13
                echo "                    data-";
                echo twig_escape_filter($this->env, $context["sName"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["sValue"], "html", null, true);
                echo "\"
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['sName'], $context['sValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "            ";
        }
        // line 16
        echo "    >
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSubBlocks", [], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
            // line 18
            echo "            ";
            echo $this->env->getFunction('render_block')->getCallable()($context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oSubBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </select>
    ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasLabel", [], "method", false, false, false, 21) &&  !twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsLabelBefore", [], "method", false, false, false, 21))) {
            // line 22
            echo "        ";
            $this->loadTemplate("base/components/input/inputlabel.html.twig", "base/components/input/select/select.html.twig", 22)->display($context);
            // line 23
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "base/components/input/select/select.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  126 => 23,  123 => 22,  121 => 21,  118 => 20,  109 => 18,  105 => 17,  102 => 16,  99 => 15,  88 => 13,  83 => 12,  81 => 11,  70 => 10,  65 => 9,  61 => 8,  54 => 7,  51 => 6,  48 => 5,  45 => 4,  38 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/input/select/select.html.twig", "C:\\xampp\\htdocs\\web\\templates\\base\\components\\input\\select\\select.html.twig");
    }
}
