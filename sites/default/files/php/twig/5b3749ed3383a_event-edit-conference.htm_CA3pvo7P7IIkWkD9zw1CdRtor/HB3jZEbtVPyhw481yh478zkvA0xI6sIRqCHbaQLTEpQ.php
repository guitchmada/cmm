<?php

/* themes/cmm/templates/event-edit-conference.html.twig */
class __TwigTemplate_e82de692ec955aee6d16cd468e4e316400c37aa0bb6f8d902480360a6e4072fe extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        // line 1
        echo "<form class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "id", array()), "html", null, true));
        echo "\" data-drupal-selector=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "id", array()), "html", null, true));
        echo "\" action=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "action", array()), "html", null, true));
        echo "\" 
method=\"post\" id=\"";
        // line 2
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "id", array()), "html", null, true));
        echo "\" accept-charset=\"UTF-8\">

";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["element"] ?? null), "form_build_id", array()), "html", null, true));
        echo "
";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["element"] ?? null), "form_token", array()), "html", null, true));
        echo "
";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["element"] ?? null), "form_id", array()), "html", null, true));
        echo "

<div class=\"col-sm-3\">";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["element"] ?? null), "field_type_event", array()), "html", null, true));
        echo "</div><div class=\"col-sm-6\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["element"] ?? null), "title", array()), "html", null, true));
        echo "</div>
<div class=\"col-sm-12\">";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["element"] ?? null), "field_description_courte", array()), "html", null, true));
        echo "</div>

<div class=\"return_line\">&nbsp;</div>

<div class=\"col-sm-3\">";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["element"] ?? null), "field_start_date", array()), "html", null, true));
        echo "</div><div class=\"col-sm-3\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["element"] ?? null), "field_end_date", array()), "html", null, true));
        echo "</div>
<div class=\"return_line\">&nbsp;</div>
<div class=\"col-sm-3\">";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["element"] ?? null), "field_date_ouverture_inscription", array()), "html", null, true));
        echo "</div><div class=\"col-sm-3\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["element"] ?? null), "field_date_limite_inscription", array()), "html", null, true));
        echo "</div>
<div class=\"return_line\">&nbsp;</div>

";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["element"] ?? null), "speakers", array()), "html", null, true));
        echo "
";
        // line 19
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["element"] ?? null), "id2", array()), "html", null, true));
        echo "

";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["element"] ?? null), "actions", array()), "html", null, true));
        echo "

</form>";
    }

    public function getTemplateName()
    {
        return "themes/cmm/templates/event-edit-conference.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 21,  102 => 19,  98 => 18,  90 => 15,  83 => 13,  76 => 9,  70 => 8,  65 => 6,  61 => 5,  57 => 4,  52 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form class=\"{{ attributes.id }}\" data-drupal-selector=\"{{ attributes.id }}\" action=\"{{ attributes.action }}\" 
method=\"post\" id=\"{{ attributes.id }}\" accept-charset=\"UTF-8\">

{{ element.form_build_id }}
{{ element.form_token }}
{{ element.form_id }}

<div class=\"col-sm-3\">{{ element.field_type_event }}</div><div class=\"col-sm-6\">{{ element.title }}</div>
<div class=\"col-sm-12\">{{ element.field_description_courte }}</div>

<div class=\"return_line\">&nbsp;</div>

<div class=\"col-sm-3\">{{ element.field_start_date }}</div><div class=\"col-sm-3\">{{ element.field_end_date }}</div>
<div class=\"return_line\">&nbsp;</div>
<div class=\"col-sm-3\">{{ element.field_date_ouverture_inscription }}</div><div class=\"col-sm-3\">{{ element.field_date_limite_inscription }}</div>
<div class=\"return_line\">&nbsp;</div>

{{ element.speakers }}
{{ element.id2 }}

{{ element.actions }}

</form>", "themes/cmm/templates/event-edit-conference.html.twig", "/Applications/MAMP/htdocs/cmm/themes/cmm/templates/event-edit-conference.html.twig");
    }
}
