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

/* base/components/datatable/layout.live.js.twig */
class __TwigTemplate_7a01dd0e3a22201adb6f44e29e83ba9f extends Template
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
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "select_mode"], "method", false, false, false, 1))) {
            // line 2
            echo "    var oSelectedItems";
            echo twig_escape_filter($this->env, $this->env->getFilter('sanitize')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "sListId"], "method", false, false, false, 2), twig_constant("utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME")), "html", null, true);
            echo " = [];
    ";
            // line 3
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "sSelectedRows"], "method", false, false, false, 3))) {
                // line 4
                echo "        oSelectedItems";
                echo twig_escape_filter($this->env, $this->env->getFilter('sanitize')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "sListId"], "method", false, false, false, 4), twig_constant("utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME")), "html", null, true);
                echo " = ";
                echo twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "sSelectedRows"], "method", false, false, false, 4);
                echo ";
    ";
            }
        }
        // line 7
        echo "
var bSelectAllowed";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getFilter('sanitize')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 8), twig_constant("utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME")), "html", null, true);
        echo " = false;

";
    }

    public function getTemplateName()
    {
        return "base/components/datatable/layout.live.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 8,  55 => 7,  46 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/datatable/layout.live.js.twig", "C:\\xampp\\htdocs\\web\\templates\\base\\components\\datatable\\layout.live.js.twig");
    }
}
