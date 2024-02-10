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

/* base/layouts/activity-panel/tab-toolbar/layout.html.twig */
class __TwigTemplate_7354e581fa19438e8955ff8bf28efef5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'bExtraCSSClasses' => [$this, 'block_bExtraCSSClasses'],
            'bDataTabType' => [$this, 'block_bDataTabType'],
            'bExtraDataAttributes' => [$this, 'block_bExtraDataAttributes'],
            'bTabToolbarFirstRow' => [$this, 'block_bTabToolbarFirstRow'],
            'bTabToolbarSecondRow' => [$this, 'block_bTabToolbarSecondRow'],
            'bTabToolbarActions' => [$this, 'block_bTabToolbarActions'],
            'bTabToolbarLeftActions' => [$this, 'block_bTabToolbarLeftActions'],
            'bTabToolbarRightActions' => [$this, 'block_bTabToolbarRightActions'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"ibo-activity-panel--tab-toolbar ";
        if ((($context["bIsActive"] ?? null) == true)) {
            echo "ibo-is-active";
        }
        echo " ";
        $this->displayBlock('bExtraCSSClasses', $context, $blocks);
        echo "\"
     data-role=\"ibo-activity-panel--tab-toolbar\"
     data-tab-type=\"";
        // line 3
        $this->displayBlock('bDataTabType', $context, $blocks);
        echo "\"
\t ";
        // line 4
        $this->displayBlock('bExtraDataAttributes', $context, $blocks);
        echo ">
\t";
        // line 5
        $this->displayBlock('bTabToolbarFirstRow', $context, $blocks);
        // line 7
        echo "\t";
        $this->displayBlock('bTabToolbarSecondRow', $context, $blocks);
        // line 89
        echo "</div>";
    }

    // line 1
    public function block_bExtraCSSClasses($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 3
    public function block_bDataTabType($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 4
    public function block_bExtraDataAttributes($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 5
    public function block_bTabToolbarFirstRow($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t";
    }

    // line 7
    public function block_bTabToolbarSecondRow($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "        <div class=\"ibo-activity-panel--tab-toolbar-actions\">
            ";
        // line 9
        $this->displayBlock('bTabToolbarActions', $context, $blocks);
        // line 87
        echo "        </div>
    ";
    }

    // line 9
    public function block_bTabToolbarActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                <div class=\"ibo-activity-panel--tab-toolbar-left-actions\">
                    ";
        // line 11
        $this->displayBlock('bTabToolbarLeftActions', $context, $blocks);
        // line 25
        echo "                </div>
                <div class=\"ibo-activity-panel--tab-toolbar-middle-actions\">
                    ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasCaseLogTabs", [], "method", false, false, false, 27)) {
            // line 28
            echo "                        <label class=\"ibo-activity-panel--tab-toolbar-action\" data-role=\"ibo-activity-panel--tab-toolbar-action\"
                               data-tooltip-content=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:Tab:Toolbar:Filter:Logs:Tooltip"), "html", null, true);
            echo "\">
                            <input type=\"checkbox\" name=\"caselogs\" data-role=\"ibo-activity-panel--filter\" data-target-entry-types=\"caselog\"
                                   ";
            // line 31
            if ((( !array_key_exists("aFilteredCaseLogsAttCodes", $context) || twig_test_empty(($context["aFilteredCaseLogsAttCodes"] ?? null))) || (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetPrefilterOnlyCurrentLog", [], "method", false, false, false, 31) == false))) {
                echo "checked";
            }
            echo ">
                            ";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:Tab:Toolbar:Filter:Logs:Title"), "html", null, true);
            echo "
                            ";
            // line 33
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetCaseLogTabs", [], "method", false, false, false, 33)) > 0)) {
                // line 34
                echo "                                <a class=\"ibo-activity-panel--filter-options-toggler ibo-is-closed\" href=\"#\"
                                    data-role=\"ibo-activity-panel--filter-options-toggler\"
                                    aria-label=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:Tab:Toolbar:Filter:Logs:Menu:Hint"), "html", null, true);
                echo "\">
                                    <span class=\"fas fa-caret-up\"></span>
                                </a>
                                <div class=\"ibo-activity-panel--filter-options\" data-role=\"ibo-activity-panel--filter-options\">
                                    ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetCaseLogTabs", [], "method", false, false, false, 40));
                foreach ($context['_seq'] as $context["sCaseLogAttCode"] => $context["aCaseLogData"]) {
                    // line 41
                    echo "                                        <label class=\"ibo-activity-panel--filter-option\" data-role=\"ibo-activity-panel--filter-option\"
                                               title=\"";
                    // line 42
                    echo twig_escape_filter($this->env, (($__internal_compile_0 = $context["aCaseLogData"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["title"] ?? null) : null), "html", null, true);
                    echo "\">
                                            <input type=\"checkbox\" name=\"caselog\" value=\"";
                    // line 43
                    echo twig_escape_filter($this->env, $context["sCaseLogAttCode"], "html", null, true);
                    echo "\"
                                                   class=\"ibo-activity-panel--filter-option-input\"
                                                   data-role=\"ibo-activity-panel--filter-option-input\"
                                                   ";
                    // line 46
                    if ((( !array_key_exists("aFilteredCaseLogsAttCodes", $context) || twig_in_filter($context["sCaseLogAttCode"], ($context["aFilteredCaseLogsAttCodes"] ?? null))) || (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetPrefilterOnlyCurrentLog", [], "method", false, false, false, 46) == false))) {
                        echo "checked";
                    }
                    echo ">
                                            ";
                    // line 47
                    echo twig_escape_filter($this->env, (($__internal_compile_1 = $context["aCaseLogData"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["title"] ?? null) : null), "html", null, true);
                    echo "
                                        </label>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['sCaseLogAttCode'], $context['aCaseLogData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "                                </div>
                            ";
            }
            // line 52
            echo "                        </label>
                    ";
        }
        // line 54
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasStates", [], "method", false, false, false, 54)) {
            // line 55
            echo "                        <label class=\"ibo-activity-panel--tab-toolbar-action\"
                               data-tooltip-content=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:Tab:Toolbar:Filter:Transitions:Tooltip"), "html", null, true);
            echo "\">
                            <input type=\"checkbox\" name=\"transitions\" data-role=\"ibo-activity-panel--filter\"
                                   data-target-entry-types=\"transition\" ";
            // line 58
            if (((array_key_exists("bPrefilterStateChanges", $context) && (($context["bPrefilterStateChanges"] ?? null) == true)) || (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetPrefilterStateChangesOnLogs", [], "method", false, false, false, 58) == true))) {
                echo "checked";
            }
            echo ">
                            ";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:Tab:Toolbar:Filter:Transitions:Title"), "html", null, true);
            echo "
                        </label>
                    ";
        }
        // line 62
        echo "                    <label class=\"ibo-activity-panel--tab-toolbar-action\"
                           data-tooltip-content=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:Tab:Toolbar:Filter:Edits:Tooltip"), "html", null, true);
        echo "\">
                        <input type=\"checkbox\" name=\"edits\" data-role=\"ibo-activity-panel--filter\" data-target-entry-types=\"edits\" ";
        // line 64
        if (((array_key_exists("bPrefilterEdits", $context) && (($context["bPrefilterEdits"] ?? null) == true)) || (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetPrefilterEditsOnLogs", [], "method", false, false, false, 64) == true))) {
            echo "checked";
        }
        echo ">
                        ";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:Tab:Toolbar:Filter:Edits:Title"), "html", null, true);
        echo "
                    </label>
                </div>
                <div class=\"ibo-activity-panel--tab-toolbar-right-actions\">
                    ";
        // line 69
        $this->displayBlock('bTabToolbarRightActions', $context, $blocks);
        // line 85
        echo "                </div>
            ";
    }

    // line 11
    public function block_bTabToolbarLeftActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "                        <a href=\"#\" class=\"ibo-activity-panel--tab-toolbar-action ibo-activity-panel--tab-toolbar-action-open-all\"
                           data-role=\"ibo-activity-panel--caselog-open-all\"
                           data-tooltip-content=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:Tab:Toolbar:Action:OpenAll:Tooltip"), "html", null, true);
        echo "\"
                           aria-label=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:Tab:Toolbar:Action:OpenAll:Tooltip"), "html", null, true);
        echo "\">
                            <span class=\"fas fa-book-open\"></span>
                        </a>
                        <a href=\"#\" class=\"ibo-activity-panel--tab-toolbar-action ibo-activity-panel--tab-toolbar-action-close-all\"
                           data-role=\"ibo-activity-panel--caselog-close-all\"
                           data-tooltip-content=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:Tab:Toolbar:Action:CloseAll:Tooltip"), "html", null, true);
        echo "\"
                           aria-label=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:Tab:Toolbar:Action:CloseAll:Tooltip"), "html", null, true);
        echo "\">
                            <span class=\"fas fa-book\"></span>
                        </a>
                    ";
    }

    // line 69
    public function block_bTabToolbarRightActions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "                        <span class=\"ibo-activity-panel--tab-toolbar-info\"
                              data-tooltip-content=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:Tab:Toolbar:Info:AuthorsCount:Tooltip"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<span class=\"ibo-activity-panel--tab-toolbar-info-text ibo-activity-panel--tab-toolbar-info-authors-count\"
                                  data-role=\"ibo-activity-panel--tab-toolbar-info-authors-count\">-</span>
\t\t\t\t\t\t\t<span class=\"ibo-activity-panel--tab-toolbar-info-icon fas fa-users\"></span>
\t\t\t\t\t\t</span>
                        ";
        // line 76
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasCaseLogTabs", [], "method", false, false, false, 76)) {
            // line 77
            echo "                            <span class=\"ibo-activity-panel--tab-toolbar-info\"
                                  data-tooltip-content=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Layout:ActivityPanel:Tab:Toolbar:Info:MessagesCount:Tooltip"), "html", null, true);
            echo "\">
                                <span class=\"ibo-activity-panel--tab-toolbar-info-text ibo-activity-panel--tab-toolbar-info-messages-count\"
                                      data-role=\"ibo-activity-panel--tab-toolbar-info-messages-count\">-</span>
                                <span class=\"ibo-activity-panel--tab-toolbar-info-icon fas fa-comment-alt\"></span>
                            </span>
                        ";
        }
        // line 84
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "base/layouts/activity-panel/tab-toolbar/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 84,  300 => 78,  297 => 77,  295 => 76,  287 => 71,  284 => 70,  280 => 69,  272 => 21,  268 => 20,  260 => 15,  256 => 14,  252 => 12,  248 => 11,  243 => 85,  241 => 69,  234 => 65,  228 => 64,  224 => 63,  221 => 62,  215 => 59,  209 => 58,  204 => 56,  201 => 55,  198 => 54,  194 => 52,  190 => 50,  181 => 47,  175 => 46,  169 => 43,  165 => 42,  162 => 41,  158 => 40,  151 => 36,  147 => 34,  145 => 33,  141 => 32,  135 => 31,  130 => 29,  127 => 28,  125 => 27,  121 => 25,  119 => 11,  116 => 10,  112 => 9,  107 => 87,  105 => 9,  102 => 8,  98 => 7,  94 => 6,  90 => 5,  84 => 4,  78 => 3,  72 => 1,  68 => 89,  65 => 7,  63 => 5,  59 => 4,  55 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/activity-panel/tab-toolbar/layout.html.twig", "C:\\xampp\\htdocs\\web\\templates\\base\\layouts\\activity-panel\\tab-toolbar\\layout.html.twig");
    }
}
