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

/* base/layouts/activity-panel/layout.html.twig */
class __TwigTemplate_9d091fb5b86eee6cda43dfa56edbe4be extends Template
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
        echo "<div id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 1), "html", null, true);
        echo "\"
     class=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 2), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 2), "html", null, true);
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsExpanded", [], "method", false, false, false, 2)) {
            echo "ibo-is-expanded";
        }
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsClosed", [], "method", false, false, false, 2)) {
            echo "ibo-is-closed";
        }
        echo "\"
     data-role=\"ibo-activity-panel\"
     data-object-class=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetObjectClass", [], "method", false, false, false, 4), "html", null, true);
        echo "\"
     data-object-id=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetObjectId", [], "method", false, false, false, 5), "html", null, true);
        echo "\"
     data-object-mode=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetObjectMode", [], "method", false, false, false, 6), "html", null, true);
        echo "\">
    <div class=\"ibo-activity-panel--header\" data-role=\"ibo-activity-panel--header\">
        <div class=\"ibo-activity-panel--tabs-togglers\" data-role=\"ibo-activity-panel--tabs-togglers\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetCaseLogTabs", [], "method", false, false, false, 9));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["sCaseLogAttCode"] => $context["aCaseLogData"]) {
            // line 10
            echo "                ";
            $context["sExtraCSSClass"] = (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 10) == 1)) ? ("ibo-is-active") : (""));
            // line 11
            echo "                <div class=\"ibo-activity-panel--tab-toggler ibo-activity-panel--tab-toggler-for-caselog ibo-activity-panel--tab-toggler-for-caselog-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 11), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["sExtraCSSClass"] ?? null), "html", null, true);
            echo "\"
                     data-role=\"ibo-activity-panel--tab-toggler\"
                     data-tab-type=\"caselog\"
                     data-caselog-attribute-code=\"";
            // line 14
            echo twig_escape_filter($this->env, $context["sCaseLogAttCode"], "html", null, true);
            echo "\"
                     data-caselog-attribute-label=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aCaseLogData"], "title", [], "any", false, false, false, 15), "html", null, true);
            echo "\"
                     data-caselog-rank=\"";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 16), "html", null, true);
            echo "\">
                    <a href=\"#\" class=\"ibo-activity-panel--tab-title\" data-role=\"ibo-activity-panel--tab-title\">
                        <span class=\"ibo-activity-panel--tab-title-decoration\" data-role=\"ibo-activity-panel--tab-title-decoration\"></span>
                        <span class=\"ibo-activity-panel--tab-title-text\" data-role=\"ibo-activity-panel--tab-title-text\" title=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aCaseLogData"], "title", [], "any", false, false, false, 19), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aCaseLogData"], "title", [], "any", false, false, false, 19), "html", null, true);
            echo "</span>
                        <span class=\"ibo-activity-panel--tab-title-messages-count\" data-role=\"ibo-activity-panel--tab-title-messages-count\" data-messages-count=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aCaseLogData"], "total_messages_count", [], "any", false, false, false, 20), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aCaseLogData"], "total_messages_count", [], "any", false, false, false, 20), "html", null, true);
            echo "</span>
                        <span class=\"ibo-activity-panel--tab-title-draft-indicator\"
                              data-role=\"ibo-activity-panel--tab-title-draft-indicator\"
                              data-tooltip-content=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:Tab:Log:DraftIndicator:Tooltip"), "html", null, true);
            echo "\">
                            <span class=\"fas fa-pen\"></span>
                        </span>
                    </a>
                </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['sCaseLogAttCode'], $context['aCaseLogData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            ";
        $context["sExtraCSSClass"] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetCaseLogTabs", [], "method", false, false, false, 29))) ? ("ibo-is-active") : (""));
        // line 30
        echo "            <div class=\"ibo-activity-panel--tab-toggler ibo-activity-panel--tab-toggler-for-activity ";
        echo twig_escape_filter($this->env, ($context["sExtraCSSClass"] ?? null), "html", null, true);
        echo "\"
                 data-role=\"ibo-activity-panel--tab-toggler\"
                 data-tab-type=\"activity\">
                <a href=\"#\" class=\"ibo-activity-panel--tab-title\" data-role=\"ibo-activity-panel--tab-title\">
                    <span class=\"ibo-activity-panel--tab-title-text\" title=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:Tab:Activity:Title"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:Tab:Activity:Title"), "html", null, true);
        echo "</span>
                </a>
            </div>
            <div class=\"ibo-activity-panel--togglers\" data-role=\"ibo-activity-panel--togglers\">
                <a href=\"#\" class=\"ibo-activity-panel--expand-icon\"
                   data-role=\"ibo-activity-panel--expand-icon\"
                   data-tooltip-content=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:SizeToggler:Expand:Tooltip"), "html", null, true);
        echo "\"
                   aria-label=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:SizeToggler:Expand:Tooltip"), "html", null, true);
        echo "\">
                    <span class=\"fas fa-fw fa-expand-alt\"></span>
                </a>
                <a href=\"#\" class=\"ibo-activity-panel--reduce-icon\"
                   data-role=\"ibo-activity-panel--reduce-icon\"
                   data-tooltip-content=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:SizeToggler:Reduce:Tooltip"), "html", null, true);
        echo "\"
                   aria-label=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:SizeToggler:Reduce:Tooltip"), "html", null, true);
        echo "\">
                    <span class=\"fas fa-fw fa-compress-alt\"></span>
                </a>
                <a href=\"#\" class=\"ibo-activity-panel--close-icon\"
                   data-role=\"ibo-activity-panel--close-icon\"
                   data-tooltip-content=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:DisplayToggler:Close:Tooltip"), "html", null, true);
        echo "\"
                   aria-label=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:DisplayToggler:Close:Tooltip"), "html", null, true);
        echo "\">
                    <span class=\"fas fa-fw fa-chevron-right\"></span>
                </a>
            </div>
        </div>
        <div class=\"ibo-activity-panel--tabs-toolbars\" data-role=\"ibo-activity-panel--tabs-toolbars\">
            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetCaseLogTabs", [], "method", false, false, false, 59));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["sCaseLogAttCode"] => $context["aCaseLogData"]) {
            // line 60
            echo "                ";
            echo twig_include($this->env, $context, "base/layouts/activity-panel/tab-toolbar/caselog.html.twig", ["oUIBlock" => ($context["oUIBlock"] ?? null), "iRank" => twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 60), "bIsActive" => (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 60) == 1), "sAttCode" => $context["sCaseLogAttCode"], "aData" => $context["aCaseLogData"], "aFilteredCaseLogsAttCodes" => [0 => $context["sCaseLogAttCode"]]]);
            echo "
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['sCaseLogAttCode'], $context['aCaseLogData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "            ";
        echo twig_include($this->env, $context, "base/layouts/activity-panel/tab-toolbar/activity.html.twig", ["oUIBlock" => ($context["oUIBlock"] ?? null), "bIsActive" => (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetCaseLogTabs", [], "method", false, false, false, 62)) == 0), "bPrefilterStateChanges" => true, "bPrefilterEdits" => true]);
        echo "
            <div class=\"ibo-activity-panel--entry-forms-confirmation-dialog\" data-role=\"ibo-activity-panel--entry-forms-confirmation-dialog\" title=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:MultipleEntriesSaveConfirmation:Title"), "html", null, true);
        echo "\">
                <div class=\"ibo-activity-panel--entry-forms-confirmation-explanation\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:MultipleEntriesSaveConfirmation:Explanation"), "html", null, true);
        echo "</div>
                <label class=\"ibo-activity-panel--entry-forms-confirmation-preference\">
                    <input type=\"checkbox\" class=\"ibo-activity-panel--entry-forms-confirmation-preference-input\" data-role=\"ibo-activity-panel--entry-forms-confirmation-preference-input\">
                    <span class=\"ibo-activity-panel--entry-forms-confirmation-preference-text\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:UserPref:DoNotShowAgain"), "html", null, true);
        echo "</span>
                </label>
            </div>
        </div>
    </div>
    ";
        // line 72
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsComposeButtonEnabled", [], "method", false, false, false, 72)) {
            // line 73
            echo "        <a href=\"#\"
           id=\"ibo-activity-panel--add-caselog-entry-button\"
           class=\"ibo-activity-panel--add-caselog-entry-button ";
            // line 75
            if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsEntryFormOpened", [], "method", false, false, false, 75)) {
                echo "ibo-is-hidden";
            }
            echo "\"
           data-role=\"ibo-activity-panel--add-caselog-entry-button\"
           data-tooltip-content=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:ComposeButton:Tooltip"), "html", null, true);
            echo "\"
           aria-label=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:ComposeButton:Tooltip"), "html", null, true);
            echo "\">
            <i class=\"fas fa-feather\"></i>
        </a>
        ";
            // line 81
            if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasComposeMenu", [], "method", false, false, false, 81)) {
                // line 82
                echo "            ";
                echo $this->env->getFunction('render_block')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetComposeMenu", [], "method", false, false, false, 82));
                echo "
        ";
            }
            // line 84
            echo "    ";
        }
        // line 85
        echo "    <div class=\"ibo-activity-panel--body\" data-role=\"ibo-activity-panel--body\">
        ";
        // line 86
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetGroupedEntries", [], "method", false, false, false, 86)) > 0)) {
            // line 87
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetGroupedEntries", [], "method", false, false, false, 87));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["aEntryGroup"]) {
                // line 88
                echo "                ";
                echo twig_include($this->env, $context, "base/layouts/activity-panel/entry-group.html.twig", ["aEntryGroup" => $context["aEntryGroup"]]);
                echo "
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aEntryGroup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasMoreEntriesToLoad", [], "method", false, false, false, 90)) {
                // line 91
                echo "                <div class=\"ibo-activity-panel--load-more-entries-container\" data-role=\"ibo-activity-panel--load-more-entries-container\">
                    ";
                // line 93
                echo "                    ";
                // line 94
                echo "                    <a href=\"#\" class=\"ibo-activity-panel--load-more-entries ibo-activity-panel--load-entries-button\" data-role=\"ibo-activity-panel--load-more-entries\" data-tooltip-content=\"";
                echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:LoadMoreEntries:Tooltip"), "html", null, true);
                echo "\">
                        <span class=\"ibo-activity-panel--load-entries-icon fas fa-fw fa-angle-down\" data-role=\"ibo-activity-panel--load-more-entries-icon\"></span>
                    </a>
                    <a href=\"#\" class=\"ibo-activity-panel--load-all-entries ibo-activity-panel--load-entries-button\" data-role=\"ibo-activity-panel--load-all-entries\" data-tooltip-content=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:LoadAllEntries:Tooltip"), "html", null, true);
                echo "\">
                        <span class=\"ibo-activity-panel--load-entries-icon fas fa-fw fa-angle-double-down\" data-role=\"ibo-activity-panel--load-all-entries-icon\"></span>
                    </a>
                </div>
            ";
            }
            // line 102
            echo "        ";
        } else {
            // line 103
            echo "            <div class=\"ibo-activity-panel--body--placeholder\">
                <div class=\"ibo-activity-panel--body--placeholder-image ibo-svg-illustration--container\">
                    ";
            // line 105
            echo twig_source($this->env, "illustrations/undraw_reading_time.svg");
            echo "
                </div>
                <div class=\"ibo-activity-panel--body--placeholder-hint\">";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:NoEntry:Placeholder:Hint"), "html", null, true);
            echo "</div>
            </div>
        ";
        }
        // line 110
        echo "    </div>
    <div class=\"ibo-activity-panel--closed-cover\" data-role=\"ibo-activity-panel--closed-cover\" data-tooltip-content=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:ClosedCover:Tooltip"), "html", null, true);
        echo "\" data-tooltip-placement=\"left\">
        <span class=\"ibo-activity-panel--closed-content-container\" data-role=\"ibo-activity-panel--closed-content-container\">
            <span class=\"ibo-activity-panel--closed-title\" data-role=\"ibo-activity-panel--closed-title\">";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:ClosedCover:Title"), "html", null, true);
        echo "</span>
            <span class=\"ibo-activity-panel--open-icon\" data-role=\"ibo-activity-panel--open-icon\">
                <span class=\"fas fa-fw fa-chevron-up\"></span>
            </span>
        </span>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "base/layouts/activity-panel/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 113,  382 => 111,  379 => 110,  373 => 107,  368 => 105,  364 => 103,  361 => 102,  353 => 97,  346 => 94,  344 => 93,  341 => 91,  338 => 90,  321 => 88,  303 => 87,  301 => 86,  298 => 85,  295 => 84,  289 => 82,  287 => 81,  281 => 78,  277 => 77,  270 => 75,  266 => 73,  264 => 72,  256 => 67,  250 => 64,  246 => 63,  241 => 62,  224 => 60,  207 => 59,  198 => 53,  194 => 52,  186 => 47,  182 => 46,  174 => 41,  170 => 40,  159 => 34,  151 => 30,  148 => 29,  128 => 23,  120 => 20,  114 => 19,  108 => 16,  104 => 15,  100 => 14,  91 => 11,  88 => 10,  71 => 9,  65 => 6,  61 => 5,  57 => 4,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/activity-panel/layout.html.twig", "C:\\xampp\\htdocs\\web\\templates\\base\\layouts\\activity-panel\\layout.html.twig");
    }
}
