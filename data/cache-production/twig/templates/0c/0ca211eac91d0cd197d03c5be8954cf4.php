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

/* base/components/datatable/static/formtable/layout.ready.js.twig */
class __TwigTemplate_a82ea571ee36c92b2c32d2da886950cb extends Template
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
        $context["sListId"] = twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 1);
        // line 2
        $context["sListIDForVarSuffix"] = $this->env->getFilter('sanitize')->getCallable()(("" . ($context["sListId"] ?? null)), twig_constant("utils::ENUM_SANITIZATION_FILTER_VARIABLE_NAME"));
        // line 3
        echo "
var oTable";
        // line 4
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo " = \$('#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 4), "html", null, true);
        echo "').DataTable({
    language: {
        emptyTable: \"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Message:EmptyList:UseAdd"), "html", null, true);
        echo "\"
    },
    scrollX: true,
    scrollCollapse: true,
    paging: false,
    filter: false,
    search: false,
    dom: \"t\",
    \"order\": [],
    ";
        // line 15
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "select_mode"], "method", false, false, false, 15))) {
            // line 16
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "select_mode"], "method", false, false, false, 16) != "custom")) {
                // line 17
                echo "    select: {
        style: \"";
                // line 18
                if ((twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "select_mode"], "method", false, false, false, 18) == "multiple")) {
                    echo "multi";
                } else {
                    echo "single";
                }
                echo "\",
        info: false
    },
    ";
            }
            // line 22
            echo "    columnDefs: [
        {orderable: false, targets: 0},
        ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "HasRowActions", [], "method", false, false, false, 24)) {
                // line 25
                echo "            getRowActionsColumnDefinition('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 25), "html", null, true);
                echo "', ";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetColumnsCount", [], "method", false, false, false, 25) - 1), "html", null, true);
                echo "),
        ";
            }
            // line 27
            echo "    ],
    ";
        }
        // line 29
        echo "    drawCallback: function (settings) {
        if(settings.json)
        {
            \$(this).closest('.ibo-panel').find('.ibo-datatable--result-count').html(settings.json.recordsTotal);
        }
        // Hiding pagination if only one page
        if (\$(this).closest('.dataTables_wrapper').find('.dataTables_paginate:last .paginate_button:not(.previous):not(.next)').length < 2)
        {
            \$(this).closest('.dataTables_wrapper').find('.dataTables_paginate, .dataTables_info').hide();
        }
        else
        {
            \$(this).closest('.dataTables_wrapper').find('.dataTables_paginate, .dataTables_info').show();
        }

        // Disable hyperlinks if necessary
        ";
        // line 45
        if (((twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "disable_hyperlinks"], "method", false, false, false, 45) === true) || ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "select_mode"], "method", false, false, false, 45)) &&  !(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "disable_hyperlinks"], "method", false, false, false, 45) === false)))) {
            // line 46
            echo "        \$(\"#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 46), "html", null, true);
            echo " a\").on('click', function (e) {
            e.preventDefault();
        });
        ";
        }
        // line 50
        echo "    },
    createdRow: function (row, data, dataIndex) {
        if (data['@class'] !== undefined)
        {
            \$(row).addClass(data['@class']);
        }
    },

    initComplete: function () {
        if (this.api().page.info().pages < 2)
        {
            this.closest('.dataTables_wrapper').find('.dataTables_length').hide();
        }

        // Set header and body datatables status as loaded
        this.attr('data-status', 'loaded');
        this.closest('.dataTables_scroll').find('.dataTables_scrollHead .ibo-datatable').attr('data-status', 'loaded');
    },
});

";
        // line 70
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "bFullscreen"], "method", false, false, false, 70)) {
            // line 71
            echo "var heightS";
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo " = 0;
var heightD";
            // line 72
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo " = 0;
if (\$(\"#";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 73), "html", null, true);
            echo "\").height() > 0)
{
    heightD";
            // line 75
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo " = \$(\"#ibo-main-content\").height()-\$(\"#ibo-main-content\")[0].scrollHeight+\$(\"#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 75), "html", null, true);
            echo "\").height();
    heightS";
            // line 76
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo " = \$(\"#ibo-main-content\").height();
    if (heightD";
            // line 77
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo " > 200)
    {
        \$(\"#";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 79), "html", null, true);
            echo "_wrapper\").find(\".dataTables_scrollBody\").height(heightD";
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo ");
    }
}
";
        }
        // line 83
        echo "
if (window.ResizeObserver)
{
    let oFromTable";
        // line 86
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo "ResizeTimeout = null;
    const oFromTable";
        // line 87
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo "Resize = new ResizeObserver(function () {
        clearTimeout(oFromTable";
        // line 88
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo "ResizeTimeout);
        oFromTable";
        // line 89
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo "ResizeTimeout = setTimeout(function () {
            \$('#";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 90), "html", null, true);
        echo "').DataTable().columns.adjust();
        }, 120);
    });
    oFromTable";
        // line 93
        echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
        echo "Resize.observe(\$('#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 93), "html", null, true);
        echo "')[0]);

    ";
        // line 95
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOption", [0 => "bFullscreen"], "method", false, false, false, 95)) {
            // line 96
            echo "    let heightScreen";
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo " = heightS";
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo ";
    let heightDatatable";
            // line 97
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo " = heightD";
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo ";
    let oFromScreen";
            // line 98
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo "ResizeTimeout = null;
    const oFromScreen";
            // line 99
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo "Resize = new ResizeObserver(function () {
        clearTimeout(oFromScreen";
            // line 100
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo "ResizeTimeout);
        oFromScreen";
            // line 101
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo "ResizeTimeout = setTimeout(function () {
            if (\$(\"#";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 102), "html", null, true);
            echo "_wrapper\").height() > 0)
            {
                if (heightDatatable";
            // line 104
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo "> 0)
                {
                    let calcul = \$(\"#ibo-main-content\").height()+heightDatatable";
            // line 106
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo "-heightScreen";
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo ";
                    if (calcul > 200)
                    {
                        \$(\"#";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 109), "html", null, true);
            echo "_wrapper\").find(\".dataTables_scrollBody\").height(calcul);
                    }
                }
                else
                {
                    heightDatatable";
            // line 114
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo " = \$(\"#ibo-main-content\").height()-\$(\"#ibo-main-content\")[0].scrollHeight+\$(\"#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 114), "html", null, true);
            echo "_wrapper\").height();
                    heightScreen";
            // line 115
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo " = \$(\"#ibo-main-content\").height();
                    if (heightDatatable";
            // line 116
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo " > 200)
                    {
                        \$(\"#";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 118), "html", null, true);
            echo "_wrapper\").find(\".dataTables_scrollBody\").height(heightDatatable";
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo ");
                    }
                }

            }
        }, 120);
    });
    oFromScreen";
            // line 125
            echo twig_escape_filter($this->env, ($context["sListIDForVarSuffix"] ?? null), "html", null, true);
            echo "Resize.observe(\$('#ibo-main-content')[0]);

    ";
        }
        // line 128
        echo "
}

";
        // line 131
        $this->loadTemplate("base/components/datatable/row-actions/handler.js.twig", "base/components/datatable/static/formtable/layout.ready.js.twig", 131)->display($context);
    }

    public function getTemplateName()
    {
        return "base/components/datatable/static/formtable/layout.ready.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 131,  314 => 128,  308 => 125,  296 => 118,  291 => 116,  287 => 115,  281 => 114,  273 => 109,  265 => 106,  260 => 104,  255 => 102,  251 => 101,  247 => 100,  243 => 99,  239 => 98,  233 => 97,  226 => 96,  224 => 95,  217 => 93,  211 => 90,  207 => 89,  203 => 88,  199 => 87,  195 => 86,  190 => 83,  181 => 79,  176 => 77,  172 => 76,  166 => 75,  161 => 73,  157 => 72,  152 => 71,  150 => 70,  128 => 50,  120 => 46,  118 => 45,  100 => 29,  96 => 27,  88 => 25,  86 => 24,  82 => 22,  71 => 18,  68 => 17,  65 => 16,  63 => 15,  51 => 6,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/datatable/static/formtable/layout.ready.js.twig", "C:\\xampp\\htdocs\\web\\templates\\base\\components\\datatable\\static\\formtable\\layout.ready.js.twig");
    }
}
