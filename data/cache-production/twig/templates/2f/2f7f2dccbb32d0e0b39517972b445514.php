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

/* base/layouts/activity-panel/entry-group.html.twig */
class __TwigTemplate_f211c7542e9753fcaae1e5575b4d237f extends Template
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
        $context["oFirstEntry"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["aEntryGroup"] ?? null), "entries", [], "any", false, false, false, 1));
        // line 4
        echo "<div class=\"ibo-activity-panel--entry-group ";
        if (twig_get_attribute($this->env, $this->source, ($context["oFirstEntry"] ?? null), "IsFromCurrentUser", [], "method", false, false, false, 4)) {
            echo "ibo-is-current-user";
        }
        echo " ibo-is-hidden\"
     data-role=\"ibo-activity-panel--entry-group\"
     data-entry-group-author-login=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oFirstEntry"] ?? null), "GetAuthorLogin", [], "method", false, false, false, 6), "html", null, true);
        echo "\">
\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["aEntryGroup"] ?? null), "entries", [], "any", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["oEntry"]) {
            // line 8
            echo "\t\t";
            echo $this->env->getFunction('render_block')->getCallable()($context["oEntry"]);
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['oEntry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "base/layouts/activity-panel/entry-group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  55 => 8,  51 => 7,  47 => 6,  39 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/activity-panel/entry-group.html.twig", "C:\\xampp\\htdocs\\web\\templates\\base\\layouts\\activity-panel\\entry-group.html.twig");
    }
}
