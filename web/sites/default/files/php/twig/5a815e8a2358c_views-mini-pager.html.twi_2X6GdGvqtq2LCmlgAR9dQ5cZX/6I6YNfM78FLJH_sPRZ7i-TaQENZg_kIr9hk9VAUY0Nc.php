<?php

/* themes/contrib/material_admin/templates/views/views-mini-pager.html.twig */
class __TwigTemplate_c04f929b79c07df21e2d7bf7bfa82ff0ff069ac0ad043b92511783c805011323 extends Twig_Template
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
        $tags = array("if" => 12, "trans" => 24);
        $filters = array("t" => 14, "without" => 17);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'trans'),
                array('t', 'without'),
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
        if (($this->getAttribute(($context["items"] ?? null), "previous", array()) || $this->getAttribute(($context["items"] ?? null), "next", array()))) {
            // line 13
            echo "  <nav class=\"pager\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h4 class=\"pager__heading visually-hidden\">";
            // line 14
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Pagination")));
            echo "</h4>
    <ul class=\"pagination\">
      ";
            // line 16
            if ($this->getAttribute(($context["items"] ?? null), "previous", array())) {
                // line 17
                echo "        <li><a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", array()), "href", array()), "html", null, true));
                echo "\" class=\"waves-effect\" title=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to previous page")));
                echo "\" rel=\"prev\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute(($context["items"] ?? null), "previous", array()), "attributes", array()), "href", "title", "rel"), "html", null, true));
                echo "><i class=\"material-icons\">keyboard_arrow_left</i>
         <span class=\"visually-hidden\">";
                // line 18
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Previous page")));
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 22
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "current", array())) {
                // line 23
                echo "        <li class=\"pager__item is-active\">
          ";
                // line 24
                echo t("Page @items.current", array("@items.current" => $this->getAttribute(                // line 25
($context["items"] ?? null), "current", array()), ));
                // line 27
                echo "        </li>
      ";
            }
            // line 29
            echo "      ";
            if ($this->getAttribute(($context["items"] ?? null), "next", array())) {
                // line 30
                echo "        <li>
          <a href=\"";
                // line 31
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", array()), "href", array()), "html", null, true));
                echo "\" class=\"waves-effect\" title=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to next page")));
                echo "\" rel=\"next\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute(($context["items"] ?? null), "next", array()), "attributes", array()), "href", "title", "rel"), "html", null, true));
                echo ">
            <i class=\"material-icons\">keyboard_arrow_right</i>
            <span class=\"visually-hidden\">";
                // line 33
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Next page")));
                echo "</span>          </a>
        </li>
      ";
            }
            // line 36
            echo "    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/material_admin/templates/views/views-mini-pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 36,  99 => 33,  90 => 31,  87 => 30,  84 => 29,  80 => 27,  78 => 25,  77 => 24,  74 => 23,  71 => 22,  64 => 18,  55 => 17,  53 => 16,  48 => 14,  45 => 13,  43 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/material_admin/templates/views/views-mini-pager.html.twig", "/Applications/MAMP/htdocs/contenta/web/themes/contrib/material_admin/templates/views/views-mini-pager.html.twig");
    }
}
