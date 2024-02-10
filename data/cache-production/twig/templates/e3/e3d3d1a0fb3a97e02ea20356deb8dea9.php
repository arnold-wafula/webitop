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

/* base/layouts/activity-panel/tab-toolbar/activity.html.twig */
class __TwigTemplate_480c69b76862849f72cdf3384e6b2fdf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bExtraCSSClasses' => [$this, 'block_bExtraCSSClasses'],
            'bDataTabType' => [$this, 'block_bDataTabType'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base/layouts/activity-panel/tab-toolbar/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base/layouts/activity-panel/tab-toolbar/layout.html.twig", "base/layouts/activity-panel/tab-toolbar/activity.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_bExtraCSSClasses($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "ibo-activity-panel--tab-toolbar-for-activity";
    }

    // line 5
    public function block_bDataTabType($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "activity";
    }

    public function getTemplateName()
    {
        return "base/layouts/activity-panel/tab-toolbar/activity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/activity-panel/tab-toolbar/activity.html.twig", "C:\\xampp\\htdocs\\web\\templates\\base\\layouts\\activity-panel\\tab-toolbar\\activity.html.twig");
    }
}
