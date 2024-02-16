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

/* pages/backoffice/extension-blocks/footer.html.twig */
class __TwigTemplate_990637aad0f1bbbd44eb06df433edb15 extends Template
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
        echo "
\t<div id=\"ibo-page-Footer\" data-role=\"ibo-page-Footer\">
\t\t";
        // line 6
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["aLayouts"] ?? null), "sFooter", [], "any", false, false, false, 6))) {
            // line 7
            echo "\t\t\t";
            echo twig_get_attribute($this->env, $this->source, ($context["aLayouts"] ?? null), "sFooter", [], "any", false, false, false, 7);
            echo "
\t\t";
        }
        // line 9
        echo "\t\t";
        echo $this->env->getFunction('render_block')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["aLayouts"] ?? null), "oFooter", [], "any", false, false, false, 9), ["aPage" => ($context["aPage"] ?? null)]);
        echo "
\t</div>

";
        $___internal_parse_8_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 3
        echo twig_spaceless($___internal_parse_8_);
    }

    public function getTemplateName()
    {
        return "pages/backoffice/extension-blocks/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 3,  51 => 9,  45 => 7,  43 => 6,  39 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/backoffice/extension-blocks/footer.html.twig", "C:\\xampp\\htdocs\\web\\templates\\pages\\backoffice\\extension-blocks\\footer.html.twig");
    }
}
