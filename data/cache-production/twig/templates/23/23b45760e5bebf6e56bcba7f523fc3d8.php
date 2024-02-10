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

/* base/layouts/page-content/with-side-content.html.twig */
class __TwigTemplate_549ee6711aa85cb9542689d22b792953 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'iboPageCenterContainerExtraClasses' => [$this, 'block_iboPageCenterContainerExtraClasses'],
            'iboPageCenterContainer' => [$this, 'block_iboPageCenterContainer'],
            'iboPageSideContent' => [$this, 'block_iboPageSideContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base/layouts/page-content/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base/layouts/page-content/layout.html.twig", "base/layouts/page-content/with-side-content.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_iboPageCenterContainerExtraClasses($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t";
        $this->displayParentBlock("iboPageCenterContainerExtraClasses", $context, $blocks);
        echo "
\t";
        // line 5
        if ( !twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "isPrintable", [], "any", false, false, false, 5)) {
            echo " ibo-center-container--with-side-content";
        }
    }

    // line 8
    public function block_iboPageCenterContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "\t";
        $this->displayParentBlock("iboPageCenterContainer", $context, $blocks);
        echo "
\t<aside id=\"ibo-side-content\" data-role=\"ibo-side-content\">
\t\t";
        // line 11
        $this->displayBlock('iboPageSideContent', $context, $blocks);
        // line 16
        echo "\t</aside>
";
    }

    // line 11
    public function block_iboPageSideContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSideBlocks", [], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["oSubBlock"]) {
            // line 13
            echo "\t\t\t\t";
            echo $this->env->getFunction('render_block')->getCallable()($context["oSubBlock"], ["aPage" => ($context["aPage"] ?? null)]);
            echo "
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oSubBlock'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "base/layouts/page-content/with-side-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 15,  89 => 13,  84 => 12,  80 => 11,  75 => 16,  73 => 11,  67 => 9,  63 => 8,  57 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/page-content/with-side-content.html.twig", "C:\\xampp\\htdocs\\web\\templates\\base\\layouts\\page-content\\with-side-content.html.twig");
    }
}
