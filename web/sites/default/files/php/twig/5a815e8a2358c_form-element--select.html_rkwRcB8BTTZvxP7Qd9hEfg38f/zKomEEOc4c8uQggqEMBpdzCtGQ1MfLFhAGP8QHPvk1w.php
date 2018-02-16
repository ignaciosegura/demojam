<?php

/* themes/contrib/material_admin/templates/form/form-element--select.html.twig */
class __TwigTemplate_def855e53160b515462392a5baf41a47b0e8041c750c7b83fb097d56a33db264 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 12, "if" => 33, "include" => 54);
        $filters = array("clean_class" => 15);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'include'),
                array('clean_class'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 12
        $context["classes"] = array(0 => "js-form-item", 1 => "form-item", 2 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 15
($context["type"] ?? null))), 3 => ("form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 16
($context["type"] ?? null))), 4 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 17
($context["name"] ?? null))), 5 => ("form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 18
($context["name"] ?? null))), 6 => "input-field", 7 => (((        // line 20
($context["label_display"] ?? null) == "none")) ? ("form-no-label") : ("")), 8 => ((twig_in_filter(        // line 21
($context["label_display"] ?? null), array(0 => "after", 1 => "before"))) ? ("form-has-label") : ("")), 9 => (((        // line 22
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), 10 => (((        // line 23
($context["prefix"] ?? null) &&  !($context["suffix"] ?? null))) ? ("has-prefix") : ("")), 11 => (((        // line 24
($context["suffix"] ?? null) &&  !($context["prefix"] ?? null))) ? ("has-suffix") : ("")), 12 => (((        // line 25
($context["prefix"] ?? null) && ($context["suffix"] ?? null))) ? ("has-prefix-and-suffix") : ("")), 13 => ((        // line 26
($context["errors"] ?? null)) ? ("form-item--error") : ("")), 14 => ((preg_match("/value=\"[^\"]+\"/",         // line 27
($context["children"] ?? null))) ? ("has-initial-content") : ("")), 15 => ((preg_match("/placeholder=\"[^\"]+\"/",         // line 28
($context["children"] ?? null))) ? ("has-placeholder") : ("")), 16 => (((        // line 29
($context["description_display"] ?? null) == "after")) ? ("has-description-after") : ("")));
        // line 32
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 33
        if ( !twig_test_empty(($context["prefix"] ?? null))) {
            // line 34
            echo "    <span class=\"field-prefix\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true));
            echo "</span>
  ";
        }
        // line 36
        echo "  ";
        if (((($context["description_display"] ?? null) == "before") && $this->getAttribute(($context["description"] ?? null), "content", array()))) {
            // line 37
            echo "    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "attributes", array()), "html", null, true));
            echo ">
      ";
            // line 38
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["description"] ?? null), "content", array()), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 41
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true));
        echo "
  ";
        // line 42
        if ( !twig_test_empty(($context["suffix"] ?? null))) {
            // line 43
            echo "    <span class=\"field-suffix\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true));
            echo "</span>
  ";
        }
        // line 45
        echo "  ";
        if (($context["label_display"] ?? null)) {
            // line 46
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "
  ";
        }
        // line 48
        echo "  ";
        if (($context["errors"] ?? null)) {
            // line 49
            echo "    <div class=\"form-item--error-message\">
      <strong>";
            // line 50
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true));
            echo "</strong>
    </div>
  ";
        }
        // line 53
        echo "  ";
        if (twig_in_filter(($context["description_display"] ?? null), array(0 => "after", 1 => "invisible"))) {
            // line 54
            echo "    ";
            $this->loadTemplate("@material_admin/misc/description.html.twig", "themes/contrib/material_admin/templates/form/form-element--select.html.twig", 54)->display($context);
            // line 55
            echo "  ";
        }
        // line 56
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/material_admin/templates/form/form-element--select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 56,  126 => 55,  123 => 54,  120 => 53,  114 => 50,  111 => 49,  108 => 48,  102 => 46,  99 => 45,  93 => 43,  91 => 42,  86 => 41,  80 => 38,  75 => 37,  72 => 36,  66 => 34,  64 => 33,  59 => 32,  57 => 29,  56 => 28,  55 => 27,  54 => 26,  53 => 25,  52 => 24,  51 => 23,  50 => 22,  49 => 21,  48 => 20,  47 => 18,  46 => 17,  45 => 16,  44 => 15,  43 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/material_admin/templates/form/form-element--select.html.twig", "/Applications/MAMP/htdocs/contenta/web/themes/contrib/material_admin/templates/form/form-element--select.html.twig");
    }
}
