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

/* themes/theme__100329/templates/views-view-grid.html.twig */
class __TwigTemplate_8544f3a3cb2357ed355e696506087e92 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "columns", [], "any", true, true, true, 1)) {
            // line 2
            $context["lg"] = twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "columns", [], "any", false, false, true, 2);
        } else {
            // line 4
            $context["lg"] = 4;
        }
        // line 6
        $context["md"] = 4;
        // line 7
        $context["xs"] = 1;
        // line 8
        $context["class_suffix_lg"] = twig_round((12 / ($context["lg"] ?? null)));
        // line 9
        $context["class_suffix_md"] = twig_round((12 / ($context["md"] ?? null)));
        // line 10
        $context["class_suffix_xs"] = twig_round((12 / ($context["xs"] ?? null)));
        // line 11
        $context["classes"] = [0 => "views-view-grid", 1 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "alignment", [], "any", false, false, true, 11), 2 => ("cols-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "columns", [], "any", false, false, true, 11), 11, $this->source)), 3 => "clearfix", 4 => "row"];
        // line 12
        if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "row_class_default", [], "any", false, false, true, 12)) {
            // line 14
            $context["row_classes"] = [0 => "views-row", 1 => (((twig_get_attribute($this->env, $this->source,             // line 16
($context["options"] ?? null), "alignment", [], "any", false, false, true, 16) == "horizontal")) ? ("clearfix") : (""))];
        }
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "col_class_default", [], "any", false, false, true, 20)) {
            // line 22
            $context["col_classes"] = [0 => "views-col", 1 => (((twig_get_attribute($this->env, $this->source,             // line 24
($context["options"] ?? null), "alignment", [], "any", false, false, true, 24) == "vertical")) ? ("clearfix") : (""))];
        }
        // line 27
        if (($context["title"] ?? null)) {
            // line 28
            echo "<h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 28, $this->source), "html", null, true);
            echo "</h3>
";
        }
        // line 30
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 30), 30, $this->source), "html", null, true);
        echo ">
";
        // line 31
        $context["columncounter"] = 0;
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 33
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 33)) {
                // line 34
                $context["first_col_item"] = true;
            } else {
                // line 36
                $context["first_col_item"] = false;
            }
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 38));
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
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 39
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, true, 39)) {
                    // line 40
                    $context["first_row_item"] = true;
                } else {
                    // line 42
                    $context["first_row_item"] = false;
                }
                // line 44
                $context["data"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 44), 44, $this->source)));
                // line 45
                if ((twig_in_filter("ttnode--sticky", ($context["data"] ?? null)) || (($context["first_col_item"] ?? null) && ($context["first_row_item"] ?? null)))) {
                    // line 46
                    echo "<div class=\"col-xl-12 col-lg-12 col-md-12 col-xs-12 col-12\">
";
                } else {
                    // line 48
                    echo "<div class=\"col-xl-";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class_suffix_lg"] ?? null), 48, $this->source), "html", null, true);
                    echo " col-lg-";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class_suffix_lg"] ?? null), 48, $this->source), "html", null, true);
                    echo " col-md-";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class_suffix_md"] ?? null), 48, $this->source), "html", null, true);
                    echo " col-sm-";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class_suffix_xs"] ?? null), 48, $this->source), "html", null, true);
                    echo " col-xs-";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class_suffix_xs"] ?? null), 48, $this->source), "html", null, true);
                    echo " col-";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class_suffix_xs"] ?? null), 48, $this->source), "html", null, true);
                    echo "\">
";
                }
                // line 50
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                echo "
</div>
";
                // line 52
                $context["columncounter"] = (($context["columncounter"] ?? null) + 1);
                // line 53
                if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "columns", [], "any", true, true, true, 53)) {
                    // line 54
                    if (((($context["columncounter"] ?? null) % twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "columns", [], "any", false, false, true, 54)) == 0)) {
                        // line 55
                        echo "<div class=\" visible-lg-block d-xl-block d-lg-block\" style=\"clear:both;\"></div>
";
                    }
                } elseif (((                // line 57
($context["columncounter"] ?? null) % ($context["lg"] ?? null)) == 0)) {
                    // line 58
                    echo "<div class=\" visible-sm-block d-sm-block visible-xs-block d-block\" style=\"clear:both;\"></div>
<div class=\" visible-lg-block d-lg-block\" style=\"clear:both;\"></div>
";
                }
                // line 61
                if (((($context["columncounter"] ?? null) % ($context["md"] ?? null)) == 0)) {
                    // line 62
                    echo "<div class=\" visible-md-block d-md-block\" style=\"clear:both;\"></div>
";
                }
                // line 64
                if (((($context["columncounter"] ?? null) % ($context["xs"] ?? null)) == 0)) {
                    // line 65
                    echo "<div class=\" visible-xs-block d-block\" style=\"clear:both;\"></div>
";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/theme__100329/templates/views-view-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 69,  191 => 65,  189 => 64,  185 => 62,  183 => 61,  178 => 58,  176 => 57,  172 => 55,  170 => 54,  168 => 53,  166 => 52,  160 => 50,  144 => 48,  140 => 46,  138 => 45,  136 => 44,  133 => 42,  130 => 40,  128 => 39,  111 => 38,  108 => 36,  105 => 34,  103 => 33,  86 => 32,  84 => 31,  79 => 30,  73 => 28,  71 => 27,  68 => 24,  67 => 22,  65 => 20,  62 => 16,  61 => 14,  59 => 12,  57 => 11,  55 => 10,  53 => 9,  51 => 8,  49 => 7,  47 => 6,  44 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/theme__100329/templates/views-view-grid.html.twig", "C:\\xampp\\htdocs\\Company\\themes\\theme__100329\\templates\\views-view-grid.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 2, "for" => 32);
        static $filters = array("round" => 8, "escape" => 28, "render" => 44);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['round', 'escape', 'render'],
                []
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
