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

/* base/layouts/activity-panel/layout.js.twig */
class __TwigTemplate_6a0a177b7a50225bb40e2beca7aa6816 extends Template
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
        echo "\$('#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 1), "html", null, true);
        echo "').activity_panel({
    datetime_format: ";
        // line 2
        echo json_encode(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDateTimeFormatForJSWidget", [], "method", false, false, false, 2));
        echo ",
    datetimes_reformat_limit: ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDatetimesReformatLimit", [], "method", false, false, false, 3), "html", null, true);
        echo ",
    ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasTransactionId", [], "method", false, false, false, 4)) {
            echo "transaction_id: ";
            echo twig_escape_filter($this->env, var_export(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetTransactionId", [], "method", false, false, false, 4)), "html", null, true);
            echo ",";
        }
        // line 5
        echo "    lock_enabled: ";
        echo twig_escape_filter($this->env, var_export(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsLockEnabled", [], "method", false, false, false, 5)), "html", null, true);
        echo ",
    lock_watcher_period: ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLockWatcherPeriod", [], "method", false, false, false, 6), "html", null, true);
        echo ",
    lock_endpoint: ";
        // line 7
        echo var_export(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLockEndpoint", [], "method", false, false, false, 7));
        echo ",
    show_multiple_entries_submit_confirmation: ";
        // line 8
        echo twig_escape_filter($this->env, var_export(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetShowMultipleEntriesSubmitConfirmation", [], "method", false, false, false, 8)), "html", null, true);
        echo ",
    save_state_endpoint: ";
        // line 9
        echo var_export(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetSaveStateEndpoint", [], "method", false, false, false, 9));
        echo ",
    last_loaded_entries_ids: ";
        // line 10
        echo json_encode(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLastEntryIds", [], "method", false, false, false, 10));
        echo ",
    load_more_entries_endpoint: ";
        // line 11
        echo var_export(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetLoadMoreEntriesEndpoint", [], "method", false, false, false, 11));
        echo ",
});";
    }

    public function getTemplateName()
    {
        return "base/layouts/activity-panel/layout.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 11,  77 => 10,  73 => 9,  69 => 8,  65 => 7,  61 => 6,  56 => 5,  50 => 4,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/activity-panel/layout.js.twig", "C:\\xampp\\htdocs\\web\\templates\\base\\layouts\\activity-panel\\layout.js.twig");
    }
}
