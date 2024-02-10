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

/* base/layouts/activity-panel/activity-entry/layout.html.twig */
class __TwigTemplate_5f6e9ee95f3cb6adaf2aa3405a2e3aac extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'iboActivityEntryExtraClasses' => [$this, 'block_iboActivityEntryExtraClasses'],
            'iboActivityEntryType' => [$this, 'block_iboActivityEntryType'],
            'iboActivityEntryExtraDataAttributes' => [$this, 'block_iboActivityEntryExtraDataAttributes'],
            'iboActivityEntryMedallion' => [$this, 'block_iboActivityEntryMedallion'],
            'iboActivityEntryInformation' => [$this, 'block_iboActivityEntryInformation'],
            'iboActivityEntryMainInformationIcon' => [$this, 'block_iboActivityEntryMainInformationIcon'],
            'iboActivityEntryMainInformationContent' => [$this, 'block_iboActivityEntryMainInformationContent'],
            'iboActivityEntrySubInformation' => [$this, 'block_iboActivityEntrySubInformation'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetBlocksInheritanceCSSClassesAsString", [], "method", false, false, false, 1), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAdditionalCSSClassesAsString", [], "method", false, false, false, 1), "html", null, true);
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "IsFromCurrentUser", [], "method", false, false, false, 1)) {
            echo "ibo-is-current-user";
        }
        echo " ";
        $this->displayBlock('iboActivityEntryExtraClasses', $context, $blocks);
        echo "\"
     data-role=\"ibo-activity-entry\"
     data-entry-type=\"";
        // line 3
        $this->displayBlock('iboActivityEntryType', $context, $blocks);
        echo "\"
     data-entry-datetime-raw=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetRawDateTime", [], "method", false, false, false, 4), "html", null, true);
        echo "\"
\t data-entry-author-login=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAuthorLogin", [], "method", false, false, false, 5), "html", null, true);
        echo "\"
     data-entry-origin=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOrigin", [], "method", false, false, false, 6), "html", null, true);
        echo "\"
\t ";
        // line 7
        $this->displayBlock('iboActivityEntryExtraDataAttributes', $context, $blocks);
        echo ">
\t<div class=\"ibo-activity-entry--medallion ";
        // line 8
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAuthorPictureAbsUrl", [], "method", false, false, false, 8))) {
            echo "ibo-has-image";
        }
        echo "\" data-role=\"ibo-activity-entry--medallion\" data-tooltip-content=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAuthorFriendlyname", [], "method", false, false, false, 8), "html", null, true);
        echo "\">
\t\t";
        // line 9
        $this->displayBlock('iboActivityEntryMedallion', $context, $blocks);
        // line 16
        echo "\t</div>
\t<div class=\"ibo-activity-entry--information\" data-role=\"ibo-activity-entry--information\">
\t\t";
        // line 18
        $this->displayBlock('iboActivityEntryInformation', $context, $blocks);
        // line 54
        echo "\t</div>
</div>";
    }

    // line 1
    public function block_iboActivityEntryExtraClasses($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 3
    public function block_iboActivityEntryType($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetType", [], "method", false, false, false, 3), "html", null, true);
    }

    // line 7
    public function block_iboActivityEntryExtraDataAttributes($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 9
    public function block_iboActivityEntryMedallion($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "\t\t\t";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAuthorPictureAbsUrl", [], "method", false, false, false, 10))) {
            // line 11
            echo "\t\t\t\t<img class=\"ibo-activity-entry--author-picture\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAuthorPictureAbsUrl", [], "method", false, false, false, 11), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAuthorInitials", [], "method", false, false, false, 11), "html", null, true);
            echo "\">
\t\t\t";
        } else {
            // line 13
            echo "\t\t\t\t<div class=\"ibo-activity-entry--author-initials\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAuthorInitials", [], "method", false, false, false, 13), 0, 3), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 15
        echo "\t\t";
    }

    // line 18
    public function block_iboActivityEntryInformation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "\t\t\t<div class=\"ibo-activity-entry--main-information\" data-role=\"ibo-activity-entry--main-information\">
\t\t\t\t<div class=\"ibo-activity-entry--main-information-icon\" data-role=\"ibo-activity-entry--main-information-icon\">
\t\t\t\t\t";
        // line 21
        $this->displayBlock('iboActivityEntryMainInformationIcon', $context, $blocks);
        // line 26
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"ibo-activity-entry--main-information-content\" data-role=\"ibo-activity-entry--main-information-content\">
\t\t\t\t\t";
        // line 28
        $this->displayBlock('iboActivityEntryMainInformationContent', $context, $blocks);
        // line 32
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"ibo-activity-entry--sub-information\" data-role=\"ibo-activity-entry--sub-information\">
                ";
        // line 35
        ob_start(function () { return ''; });
        // line 36
        echo "                    ";
        $this->displayBlock('iboActivityEntrySubInformation', $context, $blocks);
        // line 51
        echo "                ";
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 35
        echo twig_spaceless($___internal_parse_1_);
        // line 52
        echo "\t\t\t</div>
\t\t";
    }

    // line 21
    public function block_iboActivityEntryMainInformationIcon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "\t\t\t\t\t\t";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDecorationClasses", [], "method", false, false, false, 22))) {
            // line 23
            echo "\t\t\t\t\t\t\t<span class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetDecorationClasses", [], "method", false, false, false, 23), "html", null, true);
            echo "\"></span>
\t\t\t\t\t\t";
        }
        // line 25
        echo "\t\t\t\t\t";
    }

    // line 28
    public function block_iboActivityEntryMainInformationContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "\t\t\t\t\t\t";
        // line 30
        echo "\t\t\t\t\t\t";
        echo $this->env->getFilter('render_wiki_to_html')->getCallable()(twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetContent", [], "method", false, false, false, 30));
        echo "
\t\t\t\t\t";
    }

    // line 36
    public function block_iboActivityEntrySubInformation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "                        ";
        if (( !(null === twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOrigin", [], "method", false, false, false, 37)) && (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOrigin", [], "any", false, false, false, 37) != twig_constant("Combodo\\iTop\\Core\\CMDBChange\\CMDBChangeOrigin::INTERACTIVE")))) {
            // line 38
            echo "                            <span class=\"ibo-activity-entry--origin\" data-role=\"ibo-activity-entry--origin\" data-tooltip-content=\"";
            echo twig_escape_filter($this->env, $this->env->getFilter('dict_s')->getCallable()(("Class:CMDBChange/Attribute:origin/Value:" . twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOrigin", [], "method", false, false, false, 38))), "html", null, true);
            echo "\" data-tooltip-placement=\"bottom\">
                                <span class=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetOriginDecorationClasses", [], "method", false, false, false, 39), "html", null, true);
            echo "\"></span>
                            </span>
                        ";
        }
        // line 42
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "ShowAuthorNameBelowEntries", [], "method", false, false, false, 42)) {
            // line 43
            echo "                            <span class=\"ibo-activity-entry--author-name ibo-is-hidden\" data-role=\"ibo-activity-entry--author-name\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetAuthorFriendlyname", [], "method", false, false, false, 43), "html", null, true);
            echo "</span>
                        ";
        }
        // line 45
        echo "                        <span class=\"ibo-activity-entry--datetime\" data-role=\"ibo-activity-entry--datetime\"
                              data-tooltip-content=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetFormattedDateTime", [], "method", false, false, false, 46), "html", null, true);
        echo "\"
                              data-tooltip-placement=\"bottom\"
                              data-raw-datetime=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetRawDateTime", [], "method", false, false, false, 48), "html", null, true);
        echo "\"
                              data-formatted-datetime=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetFormattedDateTime", [], "method", false, false, false, 49), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["oUIBlock"] ?? null), "GetFormattedDateTime", [], "method", false, false, false, 49), "html", null, true);
        echo "</span>
                    ";
    }

    public function getTemplateName()
    {
        return "base/layouts/activity-panel/activity-entry/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 49,  245 => 48,  240 => 46,  237 => 45,  231 => 43,  228 => 42,  222 => 39,  217 => 38,  214 => 37,  210 => 36,  203 => 30,  201 => 29,  197 => 28,  193 => 25,  187 => 23,  184 => 22,  180 => 21,  175 => 52,  173 => 35,  170 => 51,  167 => 36,  165 => 35,  160 => 32,  158 => 28,  154 => 26,  152 => 21,  148 => 19,  144 => 18,  140 => 15,  134 => 13,  126 => 11,  123 => 10,  119 => 9,  113 => 7,  106 => 3,  100 => 1,  95 => 54,  93 => 18,  89 => 16,  87 => 9,  79 => 8,  75 => 7,  71 => 6,  67 => 5,  63 => 4,  59 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/layouts/activity-panel/activity-entry/layout.html.twig", "C:\\xampp\\htdocs\\web\\templates\\base\\layouts\\activity-panel\\activity-entry\\layout.html.twig");
    }
}
