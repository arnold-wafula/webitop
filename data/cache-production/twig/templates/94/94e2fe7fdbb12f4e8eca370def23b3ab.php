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

/* base/components/datatable/row-actions/handler.js.twig */
class __TwigTemplate_83d1f6fb880e9ee65de64fb4cb572403 extends Template
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
        echo "
// for each row action...
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetRowActions", [], "method", false, false, false, 5));
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
        foreach ($context['_seq'] as $context["_key"] => $context["aAction"]) {
            // line 6
            echo "

    // register action buttons click
    \$('body').on('click', 'button[data-table-id=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 9), "html", null, true);
            echo "\"][data-action-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 9), "html", null, true);
            echo "\"]', function() {

        // variables accessible from action row js
        let oDatatable = \$('#";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 12), "html", null, true);
            echo "').DataTable();
        let oTrElement = \$(this).closest('tr');
        let sLabel = \$(this).data('label');
        let iActionId = \$(this).data('action-id');
        let aRowData = oDatatable.row(oTrElement).data();
        let sConfirmButtonClass = 'ibo-is-primary';

        ";
            // line 19
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["aAction"], "confirmation", [], "any", false, false, false, 19), "confirm_button_class", [], "any", false, false, false, 19))) {
                // line 20
                echo "            sConfirmButtonClass = '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["aAction"], "confirmation", [], "any", false, false, false, 20), "confirm_button_class", [], "any", false, false, false, 20), "html", null, true);
                echo "';
        ";
            }
            // line 22
            echo "
        ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, $context["aAction"], "confirmation", [], "any", true, true, false, 23)) {
                // line 24
                echo "
            // Prepare confirmation title
            let sTitle = '";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Datatables:RowActions:ConfirmationDialog"), "html", null, true);
                echo "';
            ";
                // line 27
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["aAction"], "confirmation", [], "any", false, true, false, 27), "title", [], "any", true, true, false, 27)) {
                    // line 28
                    echo "                sTitle = '";
                    echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["aAction"], "confirmation", [], "any", false, false, false, 28), "title", [], "any", false, false, false, 28)), "html", null, true);
                    echo "';
            ";
                }
                // line 30
                echo "            sTitle = sTitle.replaceAll('{item}', aRowData['";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["aAction"], "confirmation", [], "any", false, false, false, 30), "row_data", [], "any", false, false, false, 30), "html", null, true);
                echo "']);

            // Prepare confirmation message
            let sMessage = '";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()("UI:Datatables:RowActions:ConfirmationMessage"), "html", null, true);
                echo "';
            ";
                // line 34
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["aAction"], "confirmation", [], "any", false, true, false, 34), "message", [], "any", true, true, false, 34)) {
                    // line 35
                    echo "                sMessage = '";
                    echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["aAction"], "confirmation", [], "any", false, false, false, 35), "message", [], "any", false, false, false, 35)), "html", null, true);
                    echo "';
            ";
                }
                // line 37
                echo "            sMessage = sMessage.replaceAll('{item}', aRowData['";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["aAction"], "confirmation", [], "any", false, false, false, 37), "row_data", [], "any", false, false, false, 37), "html", null, true);
                echo "']);

            // Handle action row with confirmation modal
            CombodoModal.OpenConfirmationModal({
                title: sTitle,
                content: sMessage,
                callback_on_confirm: ActionRowFunction";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 43), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 43), "html", null, true);
                echo ",
                buttons: {
                    confirm: {
                        text: sLabel,
                        classes: [sConfirmButtonClass]
                    }
                },
                ";
                // line 50
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["aAction"], "confirmation", [], "any", false, true, false, 50), "do_not_show_again_pref_key", [], "any", true, true, false, 50)) {
                    // line 51
                    echo "                do_not_show_again_pref_key: '";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["aAction"], "confirmation", [], "any", false, false, false, 51), "do_not_show_again_pref_key", [], "any", false, false, false, 51), "html", null, true);
                    echo "',
                ";
                }
                // line 53
                echo "            }, [oDatatable, oTrElement, iActionId, aRowData]);

        ";
            } else {
                // line 56
                echo "
            // Handle action row without confirmation
            ActionRowFunction";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 58), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 58), "html", null, true);
                echo "(oDatatable, oTrElement, iActionId, aRowData);

        ";
            }
            // line 61
            echo "
    });

    // action row function declaration
    function ActionRowFunction";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 65), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 65), "html", null, true);
            echo "(oDatatable, oTrElement, iActionId, aRowData){
        ";
            // line 66
            echo twig_get_attribute($this->env, $this->source, $context["aAction"], "js_row_action", [], "any", false, false, false, 66);
            echo ";
        return true;
    }

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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aAction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "base/components/datatable/row-actions/handler.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 66,  180 => 65,  174 => 61,  167 => 58,  163 => 56,  158 => 53,  152 => 51,  150 => 50,  139 => 43,  129 => 37,  123 => 35,  121 => 34,  117 => 33,  110 => 30,  104 => 28,  102 => 27,  98 => 26,  94 => 24,  92 => 23,  89 => 22,  83 => 20,  81 => 19,  71 => 12,  63 => 9,  58 => 6,  41 => 5,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/components/datatable/row-actions/handler.js.twig", "C:\\xampp\\htdocs\\web\\templates\\base\\components\\datatable\\row-actions\\handler.js.twig");
    }
}
