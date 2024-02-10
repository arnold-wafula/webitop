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

/* base/layouts/object/object-details/layout.js.twig */
class __TwigTemplate_c07c1c77bec1c11d0d169ea66fea584d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'iboWidgetInstantiation' => [$this, 'block_iboWidgetInstantiation'],
            'iboMiscHandlers' => [$this, 'block_iboMiscHandlers'],
            'iboKeyboardShortcutsHandlers' => [$this, 'block_iboKeyboardShortcutsHandlers'],
            'iboPanelHeaderRightActionsHandlers' => [$this, 'block_iboPanelHeaderRightActionsHandlers'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "base/components/panel/layout.js.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base/components/panel/layout.js.twig", "base/layouts/object/object-details/layout.js.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_iboWidgetInstantiation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    \$('#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 6), "html", null, true);
        echo "').object_details({
        is_header_visible_on_scroll: ";
        // line 7
        echo twig_escape_filter($this->env, var_export(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsHeaderVisibleOnScroll", [], "any", false, false, false, 7)), "html", null, true);
        echo "
    });
";
    }

    // line 11
    public function block_iboMiscHandlers($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    ";
        $this->displayParentBlock("iboMiscHandlers", $context, $blocks);
        echo "

    ";
        // line 14
        $this->displayBlock('iboKeyboardShortcutsHandlers', $context, $blocks);
        // line 63
        echo "
    ";
        // line 64
        $this->displayBlock('iboPanelHeaderRightActionsHandlers', $context, $blocks);
    }

    // line 14
    public function block_iboKeyboardShortcutsHandlers($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "        \$('#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 15), "html", null, true);
        echo "').on('edit_object', function(){
            let oFavoriteButton = \$(this).find('#UIMenuModify');
            if(oFavoriteButton[0]){
                oFavoriteButton[0].click();
            }
            else{
                let oPopupItemButton = \$('[data-role=\"ibo-popover-menu\"]').find('[data-resource-id=\"UI:Menu:Modify\"]');
                if(oPopupItemButton[0]){
                    oPopupItemButton[0].click();
                }
            }
        });

        \$('#";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 28), "html", null, true);
        echo "').on('delete_object', function(){
            let oFavoriteButton = \$(this).find('#UIMenuDelete');
            if(oFavoriteButton[0]){
                oFavoriteButton[0].click();
            }
            else{
                let oPopupItemButton = \$('[data-role=\"ibo-popover-menu\"]').find('[data-resource-id=\"UI:Menu:Delete\"]');
                if(oPopupItemButton[0]){
                    oPopupItemButton[0].click();
                }
            }
        });

        \$('#";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 41), "html", null, true);
        echo "').on('new_object', function(){
            let oFavoriteButton = \$(this).find('#UIMenuNew');
            if(oFavoriteButton[0]){
                oFavoriteButton[0].click();
            }
            else{
                let oPopupItemButton = \$('[data-role=\"ibo-popover-menu\"]').find('[data-resource-id=\"UI:Menu:New\"]');
                if(oPopupItemButton[0]){
                    oPopupItemButton[0].click();
                }
            }
        });
        ";
        // line 53
        if (((twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetObjectMode", [], "method", false, false, false, 53) == twig_constant("cmdbAbstractObject::ENUM_DISPLAY_MODE_EDIT")) || (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetObjectMode", [], "method", false, false, false, 53) == twig_constant("cmdbAbstractObject::ENUM_DISPLAY_MODE_CREATE")))) {
            // line 54
            echo "            \$('#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 54), "html", null, true);
            echo "').on('save_object', function(){
                \$(this).find('button[type=\"submit\"][name=\"\"][value=\"\"]').click();
            });
        ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 57
($context["oUIBlock"] ?? null), "GetObjectMode", [], "method", false, false, false, 57) == twig_constant("cmdbAbstractObject::ENUM_DISPLAY_MODE_STIMULUS"))) {
            // line 58
            echo "            \$('#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 58), "html", null, true);
            echo "').on('save_object', function(){
                \$(this).find('button[type=\"submit\"][name=\"submit\"][value=\"submit\"]').click();
            });
        ";
        }
        // line 62
        echo "    ";
    }

    // line 64
    public function block_iboPanelHeaderRightActionsHandlers($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "        // Keep URL's hash parameters when clicking on a link of the header
        \$('#";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetId", [], "method", false, false, false, 66), "html", null, true);
        echo "').on('click', '[data-role=\"ibo-panel--header-right\"] a', function() {
            const aMatches = /#(.*)\$/.exec(window.location.href);
            if (aMatches != null) {
                currentHash = aMatches[1];
                if (/#(.*)\$/.test(this.href)) {
                    this.href = this.href.replace(/#(.*)\$/, '#'+currentHash);
                }
            }
        });
    ";
    }

    public function getTemplateName()
    {
        return "base/layouts/object/object-details/layout.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 66,  163 => 65,  159 => 64,  155 => 62,  147 => 58,  145 => 57,  138 => 54,  136 => 53,  121 => 41,  105 => 28,  88 => 15,  84 => 14,  80 => 64,  77 => 63,  75 => 14,  69 => 12,  65 => 11,  58 => 7,  53 => 6,  49 => 5,  38 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/object/object-details/layout.js.twig", "C:\\xampp\\htdocs\\web\\templates\\base\\layouts\\object\\object-details\\layout.js.twig");
    }
}
