<?php

/* themes/contrib/material_admin/templates/admin/admin-block.html.twig */
class __TwigTemplate_457b643bea09622aee55ede4d5f493d7f16322e04f6c924a4becb4adc0b393c2 extends Twig_Template
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
        $tags = array("if" => 15);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
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

        // line 15
        echo " ";
        if ($this->getAttribute(($context["block"] ?? null), "title", array())) {
            // line 16
            echo "<div class=\"panel collection with-header\">
   <div class=\"collection-header\"> <h5 class=\"panel__title\">";
            // line 17
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["block"] ?? null), "title", array()), "html", null, true));
            echo "</h5></div>
  ";
        }
        // line 19
        echo "  ";
        if ($this->getAttribute(($context["block"] ?? null), "content", array())) {
            // line 20
            echo "\t\t";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["block"] ?? null), "content", array()), "html", null, true));
            echo "
  ";
        } elseif ($this->getAttribute(        // line 21
($context["block"] ?? null), "description", array())) {
            // line 22
            echo "    <div class=\"panel__description\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["block"] ?? null), "description", array()), "html", null, true));
            echo "</div>
  ";
        }
        // line 24
        echo " ";
        if ($this->getAttribute(($context["block"] ?? null), "title", array())) {
            // line 25
            echo "</div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/material_admin/templates/admin/admin-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 25,  70 => 24,  64 => 22,  62 => 21,  57 => 20,  54 => 19,  49 => 17,  46 => 16,  43 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/material_admin/templates/admin/admin-block.html.twig", "/Applications/MAMP/htdocs/contenta/web/themes/contrib/material_admin/templates/admin/admin-block.html.twig");
    }
}
