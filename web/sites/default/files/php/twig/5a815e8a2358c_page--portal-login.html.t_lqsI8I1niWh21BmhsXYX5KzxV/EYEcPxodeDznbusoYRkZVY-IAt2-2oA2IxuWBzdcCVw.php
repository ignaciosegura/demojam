<?php

/* themes/contrib/material_admin/templates/layout/page--portal-login.html.twig */
class __TwigTemplate_15c49885bb466ef843c0d7e3ad9eadf0d5e6498f987113680dd15d9b5cb63d1d extends Twig_Template
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
        $tags = array("if" => 48);
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

        // line 30
        echo "<div class=\"layout-container\">
  <div id=\"messageContainer\" class=\"modal bottom-sheet\">
    <div class=\"modal-content\">
      <h4 class=\"notification-title\">Message Notifications</h4>
      <div class=\"allmessages\">";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "status", array()), "html", null, true));
        echo "
      </div>
    </div>
    <div class=\"modal-footer\">
      <a data-href=\"#!\" class=\"modal-action modal-close waves-effect waves-green btn-flat\">Close</a>
      <a href=\"/admin/reports/dblog\" class=\" modal-action modal-close waves-effect waves-green btn-flat\">View Log</a>
    </div>
  </div>
  <header class=\"header\" role=\"banner\">
    <div class=\"row material-container\">
      <div class=\"s12 col\">
                <div class=\"collection right\" id=\"notification-wrapper\">
          <a class=\"modal-trigger collection-item message-trigger waves-effect\" href=\"#messageContainer\"><i class=\"material-icons\">inbox</i> <span class=\"mt-text hide-on-med-and-down\">Notifications</span><span class=\"badge messages--status\">0</span><span class=\"badge messages--warning\">0</span><span class=\"badge messages--error\">0</span></a>
        </div>
         ";
        // line 48
        if ($this->getAttribute(($context["page"] ?? null), "status", array())) {
            // line 49
            echo "      </div>
      ";
        }
        // line 51
        echo "    </div>
  </header>
  <main role=\"main-wrapper\">
    <div class=\"row material-container fixed-width-row\">
      <div class=\"s12 m8 l6 push-l3 push-m2 col\">
        <div class=\"login-header center grey-text\">
          ";
        // line 57
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
          </div>
     <div class=\"card white\">
        <div class=\"card-content\">
          <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 62
        echo "           <span class=\"card-title grey-text blue text-darken-4\"></span>
          <p> ";
        // line 63
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "</p>
        </div>
      </div>
    </div>
    </div>
  </main>
  ";
        // line 69
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 70
            echo "  <footer role=\"contentinfo\">
    <div clas=\"row material-container\">
      ";
            // line 72
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
    </div>
  </footer>
  ";
        }
        // line 76
        echo "</div>";
        // line 77
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/material_admin/templates/layout/page--portal-login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 77,  112 => 76,  105 => 72,  101 => 70,  99 => 69,  90 => 63,  87 => 62,  80 => 57,  72 => 51,  68 => 49,  66 => 48,  49 => 34,  43 => 30,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/material_admin/templates/layout/page--portal-login.html.twig", "/Applications/MAMP/htdocs/contenta/web/themes/contrib/material_admin/templates/layout/page--portal-login.html.twig");
    }
}
