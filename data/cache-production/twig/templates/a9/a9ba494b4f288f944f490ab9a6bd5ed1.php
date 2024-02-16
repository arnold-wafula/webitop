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

/* pages/backoffice/extension-blocks/header.html.twig */
class __TwigTemplate_ff2cbccd8fdd18ac5f13456e62306b04 extends Template
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
        echo "    <div id=\"ibo-page-header\" data-role=\"ibo-page-header\">
        ";
        // line 5
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["aLayouts"] ?? null), "sHeader", [], "any", false, false, false, 5))) {
            // line 6
            echo "            ";
            echo twig_get_attribute($this->env, $this->source, ($context["aLayouts"] ?? null), "sHeader", [], "any", false, false, false, 6);
            echo "
        ";
        }
        // line 8
        echo "        ";
        echo $this->env->getFunction('render_block')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["aLayouts"] ?? null), "oHeader", [], "any", false, false, false, 8), ["aPage" => ($context["aPage"] ?? null)]);
        echo "
    </div>
";
        $___internal_parse_3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_parse_3_);
    }

    public function getTemplateName()
    {
        return "pages/backoffice/extension-blocks/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 3,  50 => 8,  44 => 6,  42 => 5,  39 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/backoffice/extension-blocks/header.html.twig", "C:\\xampp\\htdocs\\web\\templates\\pages\\backoffice\\extension-blocks\\header.html.twig");
    }
}
