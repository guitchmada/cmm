<?php

/* themes/cmm/templates/block--system-branding-block.html.twig */
class __TwigTemplate_d9aa79a32fb9ae61ff23a5b3216d9a9a15fb9f8a3ecebbe50818acfdec3615f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block--bare.html.twig", "themes/cmm/templates/block--system-branding-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block--bare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 22);
        $filters = array("t" => 23);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t'),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        echo "<section id=\"slogan_logo_address\">
\t
  ";
        // line 22
        if (($context["site_logo"] ?? null)) {
            // line 23
            echo "    <a class=\"logo navbar-btn pull-left\" href=\"/\" title=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\" rel=\"home\">
      <img src=\"";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\" />
    </a>
  ";
        }
        // line 27
        echo "  ";
        if (($context["site_name"] ?? null)) {
            // line 28
            echo "    <a class=\"name navbar-brand\" href=\"/\" title=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\" rel=\"home\"><img src=\"/themes/cmm/images/cmm_logo.png\"></a>
  ";
        }
        // line 30
        echo "  ";
        if (($context["site_slogan"] ?? null)) {
            // line 31
            echo "    <div class=\"site_slogan\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true));
            echo "</div>
    
  ";
        }
        // line 34
        echo "  ";
        if (($context["site_adresse"] ?? null)) {
            // line 35
            echo "    <div class=\"site_adresse\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_adresse"] ?? null), "html", null, true));
            echo "</div>
  ";
        }
        // line 36
        echo "  
  </section>
";
    }

    public function getTemplateName()
    {
        return "themes/cmm/templates/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 36,  95 => 35,  92 => 34,  85 => 31,  82 => 30,  76 => 28,  73 => 27,  65 => 24,  60 => 23,  58 => 22,  52 => 20,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"block--bare.html.twig\" %}
{#
/**
 * @file
 * Default theme implementation for a branding block.
 *
 * Each branding element variable (logo, name, slogan) is only available if
 * enabled in the block configuration.
 *
 * Available variables:
 * - site_logo: Logo for site as defined in Appearance or theme settings.
 * - site_name: Name for site as defined in Site information settings.
 * - site_slogan: Slogan for site as defined in Site information settings.
 * - site_adresse : Address for site
 *
 * @ingroup templates
 */
#} 

{% block content %}<section id=\"slogan_logo_address\">
\t
  {% if site_logo %}
    <a class=\"logo navbar-btn pull-left\" href=\"/\" title=\"{{ 'Home'|t }}\" rel=\"home\">
      <img src=\"{{ site_logo }}\" alt=\"{{ 'Home'|t }}\" />
    </a>
  {% endif %}
  {% if site_name %}
    <a class=\"name navbar-brand\" href=\"/\" title=\"{{ 'Home'|t }}\" rel=\"home\"><img src=\"/themes/cmm/images/cmm_logo.png\"></a>
  {% endif %}
  {% if site_slogan %}
    <div class=\"site_slogan\">{{ site_slogan }}</div>
    
  {% endif %}
  {% if site_adresse %}
    <div class=\"site_adresse\">{{ site_adresse }}</div>
  {% endif %}  
  </section>
{% endblock %}
", "themes/cmm/templates/block--system-branding-block.html.twig", "/Applications/MAMP/htdocs/cmm/themes/cmm/templates/block--system-branding-block.html.twig");
    }
}
