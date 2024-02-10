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

/* base/layouts/page-content/with-side-content.ready.js.twig */
class __TwigTemplate_9395027e825741fa210028ee67ceebc2 extends Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["aPage"] ?? null), "isPrintable", [], "any", false, false, false, 3)) {
            // line 4
            echo "\toHiddeableChapters['ibo-side-content'] = '";
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:Tab:Activity:Title"), "html", null, true);
            echo "';
";
        }
        // line 6
        echo "
";
    }

    public function getTemplateName()
    {
        return "base/layouts/page-content/with-side-content.ready.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  39 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/page-content/with-side-content.ready.js.twig", "C:\\xampp\\htdocs\\web\\templates\\base\\layouts\\page-content\\with-side-content.ready.js.twig");
    }
}
