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

/* themes/theme__100208/templates/block--system-menu-block.html.twig */
class __TwigTemplate_f808d6ef3c6baf7392c0c814731c0f9f extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["heading_id"] = ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 1), 1, $this->source) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 2
        $context["theme_path"] = ($this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(($context["node"] ?? null), 2, $this->source)) . $this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath());
        // line 3
        echo " ";
        if ((((((((((((((((((((((((((((((((((((((((((($context["region"] ?? null) == "primary_menu") || ((($context["region"] ?? null) == "leftfooterarea") && (($context["menu_leftfooterarea"] ?? null) == 0))) || ((($context["region"] ?? null) == "centerfooterarea") && (($context["menu_centerfooterarea"] ?? null) == 0))) || ((($context["region"] ?? null) == "rightfooterarea") && (($context["menu_rightfooterarea"] ?? null) == 0))) || ((        // line 4
($context["region"] ?? null) == "headerabovecolumn1") && (($context["menu_headerabovecolumn1"] ?? null) == 0))) || ((        // line 5
($context["region"] ?? null) == "headerabovecolumn2") && (($context["menu_headerabovecolumn2"] ?? null) == 0))) || ((        // line 6
($context["region"] ?? null) == "headerabovecolumn3") && (($context["menu_headerabovecolumn3"] ?? null) == 0))) || ((        // line 7
($context["region"] ?? null) == "headerabovecolumn4") && (($context["menu_headerabovecolumn4"] ?? null) == 0))) || ((        // line 8
($context["region"] ?? null) == "headerbelowcolumn1") && (($context["menu_headerbelowcolumn1"] ?? null) == 0))) || ((        // line 9
($context["region"] ?? null) == "headerbelowcolumn2") && (($context["menu_headerbelowcolumn2"] ?? null) == 0))) || ((        // line 10
($context["region"] ?? null) == "headerbelowcolumn3") && (($context["menu_headerbelowcolumn3"] ?? null) == 0))) || ((        // line 11
($context["region"] ?? null) == "headerbelowcolumn4") && (($context["menu_headerbelowcolumn4"] ?? null) == 0))) || ((        // line 12
($context["region"] ?? null) == "headershape00") && (($context["menu_headershape00"] ?? null) == 0))) || ((        // line 13
($context["region"] ?? null) == "menuabovecolumn1") && (($context["menu_menuabovecolumn1"] ?? null) == 0))) || ((        // line 14
($context["region"] ?? null) == "menuabovecolumn2") && (($context["menu_menuabovecolumn2"] ?? null) == 0))) || ((        // line 15
($context["region"] ?? null) == "menuabovecolumn3") && (($context["menu_menuabovecolumn3"] ?? null) == 0))) || ((        // line 16
($context["region"] ?? null) == "menuabovecolumn4") && (($context["menu_menuabovecolumn4"] ?? null) == 0))) || ((        // line 17
($context["region"] ?? null) == "menubelowcolumn1") && (($context["menu_menubelowcolumn1"] ?? null) == 0))) || ((        // line 18
($context["region"] ?? null) == "menubelowcolumn2") && (($context["menu_menubelowcolumn2"] ?? null) == 0))) || ((        // line 19
($context["region"] ?? null) == "menubelowcolumn3") && (($context["menu_menubelowcolumn3"] ?? null) == 0))) || ((        // line 20
($context["region"] ?? null) == "menubelowcolumn4") && (($context["menu_menubelowcolumn4"] ?? null) == 0))) || ((        // line 21
($context["region"] ?? null) == "contenttopcolumn1") && (($context["menu_contenttopcolumn1"] ?? null) == 0))) || ((        // line 22
($context["region"] ?? null) == "contenttopcolumn2") && (($context["menu_contenttopcolumn2"] ?? null) == 0))) || ((        // line 23
($context["region"] ?? null) == "contenttopcolumn3") && (($context["menu_contenttopcolumn3"] ?? null) == 0))) || ((        // line 24
($context["region"] ?? null) == "contenttopcolumn4") && (($context["menu_contenttopcolumn4"] ?? null) == 0))) || ((        // line 25
($context["region"] ?? null) == "contentbottomcolumn1") && (($context["menu_contentbottomcolumn1"] ?? null) == 0))) || ((        // line 26
($context["region"] ?? null) == "contentbottomcolumn2") && (($context["menu_contentbottomcolumn2"] ?? null) == 0))) || ((        // line 27
($context["region"] ?? null) == "contentbottomcolumn3") && (($context["menu_contentbottomcolumn3"] ?? null) == 0))) || ((        // line 28
($context["region"] ?? null) == "contentbottomcolumn4") && (($context["menu_contentbottomcolumn4"] ?? null) == 0))) || ((        // line 29
($context["region"] ?? null) == "footerabovecolumn1") && (($context["menu_footerabovecolumn1"] ?? null) == 0))) || ((        // line 30
($context["region"] ?? null) == "footerabovecolumn2") && (($context["menu_footerabovecolumn2"] ?? null) == 0))) || ((        // line 31
($context["region"] ?? null) == "footerabovecolumn3") && (($context["menu_footerabovecolumn3"] ?? null) == 0))) || ((        // line 32
($context["region"] ?? null) == "footerabovecolumn4") && (($context["menu_footerabovecolumn4"] ?? null) == 0))) || ((        // line 33
($context["region"] ?? null) == "footercellcolumn1") && (($context["menu_footercellcolumn1"] ?? null) == 0))) || ((        // line 34
($context["region"] ?? null) == "footercellcolumn2") && (($context["menu_footercellcolumn2"] ?? null) == 0))) || ((        // line 35
($context["region"] ?? null) == "footercellcolumn3") && (($context["menu_footercellcolumn3"] ?? null) == 0))) || ((        // line 36
($context["region"] ?? null) == "footercellcolumn4") && (($context["menu_footercellcolumn4"] ?? null) == 0))) || ((        // line 37
($context["region"] ?? null) == "footerbelowcolumn1") && (($context["menu_footerbelowcolumn1"] ?? null) == 0))) || ((        // line 38
($context["region"] ?? null) == "footerbelowcolumn2") && (($context["menu_footerbelowcolumn2"] ?? null) == 0))) || ((        // line 39
($context["region"] ?? null) == "footerbelowcolumn3") && (($context["menu_footerbelowcolumn3"] ?? null) == 0))) || ((        // line 40
($context["region"] ?? null) == "footerbelowcolumn4") && (($context["menu_footerbelowcolumn4"] ?? null) == 0)))) {
            // line 42
            echo "<ul class=\"ttr_menu_items nav navbar-nav navbar-right\">
";
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 43, $this->source), "html", null, true);
            echo "\t
</ul>
";
        } else {
            // line 46
            echo "<nav role=\"navigation\" aria-labelledby=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 46, $this->source), "html", null, true);
            echo "\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "ttr_verticalmenu"], "method", false, false, true, 46), 46, $this->source), "role", "aria-labelledby"), "html", null, true);
            echo "> 
";
            // line 47
            if ( !twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "label_display", [], "any", false, false, true, 47)) {
                // line 48
                echo "<div class=\"ttr_verticalmenu_content\">
<nav class=\"navbar\">
<ul class= \"ttr_vmenu_items nav nav-pills nav-stacked\">
";
                // line 51
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 51, $this->source), "html", null, true);
                echo "
";
                // line 52
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 52, $this->source), "html", null, true);
                echo "\t 
</ul>
</nav>
</div> 
";
            } else {
                // line 57
                echo "<div class=\"margin_collapsetop\"></div>
<div class=\"ttr_verticalmenu_header\"> 
<h3 ";
                // line 59
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "ttr_verticalmenu_heading"], "method", false, false, true, 59), 59, $this->source), "html", null, true);
                echo ">
";
                // line 60
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "label", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
                echo "</h3>
";
                // line 61
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 61, $this->source), "html", null, true);
                echo "
</div>
<div class=\"ttr_verticalmenu_content\">
";
                // line 64
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 64, $this->source), "html", null, true);
                echo "
<nav class=\"navbar\">
<ul class=\"ttr_vmenu_items nav nav-pills nav-stacked\">
";
                // line 67
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 67, $this->source), "html", null, true);
                echo "
</ul>
</nav>
</div>
</nav>
";
            }
        }
    }

    public function getTemplateName()
    {
        return "themes/theme__100208/templates/block--system-menu-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 67,  136 => 64,  130 => 61,  126 => 60,  122 => 59,  118 => 57,  110 => 52,  106 => 51,  101 => 48,  99 => 47,  92 => 46,  86 => 43,  83 => 42,  81 => 40,  80 => 39,  79 => 38,  78 => 37,  77 => 36,  76 => 35,  75 => 34,  74 => 33,  73 => 32,  72 => 31,  71 => 30,  70 => 29,  69 => 28,  68 => 27,  67 => 26,  66 => 25,  65 => 24,  64 => 23,  63 => 22,  62 => 21,  61 => 20,  60 => 19,  59 => 18,  58 => 17,  57 => 16,  56 => 15,  55 => 14,  54 => 13,  53 => 12,  52 => 11,  51 => 10,  50 => 9,  49 => 8,  48 => 7,  47 => 6,  46 => 5,  45 => 4,  43 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/theme__100208/templates/block--system-menu-block.html.twig", "C:\\xampp\\htdocs\\Company\\themes\\theme__100208\\templates\\block--system-menu-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 3);
        static $filters = array("clean_id" => 1, "escape" => 43, "without" => 46);
        static $functions = array("file_url" => 2, "active_theme_path" => 2);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_id', 'escape', 'without'],
                ['file_url', 'active_theme_path']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
