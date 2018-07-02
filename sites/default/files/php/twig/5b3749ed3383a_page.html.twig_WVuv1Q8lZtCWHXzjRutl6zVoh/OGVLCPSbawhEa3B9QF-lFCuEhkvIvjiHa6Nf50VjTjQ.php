<?php

/* themes/cmm/templates/page.html.twig */
class __TwigTemplate_e2e5010edfd5f51c3fc8fa1c90b7f8782291a324fbb6b70cfd3321bc34103ded extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'footer_first' => array($this, 'block_footer_first'),
            'footer_second' => array($this, 'block_footer_second'),
            'footer_third' => array($this, 'block_footer_third'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 67, "if" => 69, "block" => 75);
        $filters = array("clean_class" => 80);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
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

        // line 59
        echo "<div id=\"page\">
<script>
    /*window.onload = function(){
        element = document.getElementById('message_avertissement_javascript');
        element.parentNode.removeChild(element);
    }*/
</script>
 
";
        // line 67
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 68
        echo "
";
        // line 69
        if ($this->getAttribute(($context["page"] ?? null), "resp_menu", array())) {
            // line 70
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "resp_menu", array()), "html", null, true));
            echo "
";
        }
        // line 72
        echo "
<div class=\"resp-menu-page\">
";
        // line 75
        echo "  ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 104
        echo "  
";
        // line 106
        $this->displayBlock('main', $context, $blocks);
        // line 189
        echo "
<footer class=\"footer ";
        // line 190
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo "\" role=\"contentinfo\">
    <div class=\"row\">
    \t<div class=\"col-md-1\">&nbsp;</div>
        <div class=\"col-md-4\">
            ";
        // line 194
        if ($this->getAttribute(($context["page"] ?? null), "footer_first", array())) {
            // line 195
            echo "              ";
            $this->displayBlock('footer_first', $context, $blocks);
            // line 198
            echo "            ";
        }
        // line 199
        echo "        </div>
        <div class=\"col-md-4\">
            ";
        // line 201
        if ($this->getAttribute(($context["page"] ?? null), "footer_second", array())) {
            // line 202
            echo "              ";
            $this->displayBlock('footer_second', $context, $blocks);
            // line 205
            echo "            ";
        }
        // line 206
        echo "        </div>
        <div class=\"col-md-3\">
            ";
        // line 208
        if ($this->getAttribute(($context["page"] ?? null), "footer_third", array())) {
            // line 209
            echo "              ";
            $this->displayBlock('footer_third', $context, $blocks);
            // line 212
            echo "            ";
        }
        // line 213
        echo "        </div>
        
    </div>
</footer>
</div>
</div>
";
    }

    // line 75
    public function block_navbar($context, array $blocks = array())
    {
        // line 76
        echo "    ";
        // line 77
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 79
($context["theme"] ?? null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 80
($context["theme"] ?? null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "navbar_position", array())))) : (($context["container"] ?? null))));
        // line 83
        echo "    <header class=\"container header-logo\" id=\"navbar1\" role=\"bannertop\">
        ";
        // line 84
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
        echo "
    </header>
    <header class=\"container\" id=\"user_connected\">";
        // line 86
        if (($context["user_connected"] ?? null)) {
            // line 87
            echo "<!--<div class=\"no-js-message\">Attention, vous avez désactivé Javascript sur votre navigateur, le site ne pourra pas fonctionner correctement.</div>-->
    ";
            // line 88
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["user_connected"] ?? null), "html", null, true));
        }
        // line 90
        echo "</header>
    <header";
        // line 91
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", array(0 => ($context["navbar_classes"] ?? null)), "method"), "html", null, true));
        echo " id=\"navbar2\" role=\"banner\">
      ";
        // line 92
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => "container"), "method")) {
            // line 93
            echo "        <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">
      ";
        }
        // line 95
        echo "
        ";
        // line 96
        if ($this->getAttribute(($context["page"] ?? null), "maintitle", array())) {
            // line 97
            echo "              ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "maintitle", array()), "html", null, true));
            echo "
        ";
        }
        // line 99
        echo "      ";
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => "container"), "method")) {
            // line 100
            echo "        </div>
      ";
        }
        // line 102
        echo "    </header>
  ";
    }

    // line 106
    public function block_main($context, array $blocks = array())
    {
        // line 107
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 111
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 112
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 117
            echo "      ";
        }
        // line 118
        echo "
      ";
        // line 120
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 121
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 126
            echo "      ";
        }
        // line 127
        echo "
      ";
        // line 129
        echo "      ";
        // line 130
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 131
($context["page"] ?? null), "sidebar_first", array()) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 132
($context["page"] ?? null), "sidebar_first", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 133
($context["page"] ?? null), "sidebar_second", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 134
($context["page"] ?? null), "sidebar_first", array())) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 137
        echo "      
      ";
        // line 138
        if ((($context["idnode"] ?? null) == 1)) {
            // line 139
            echo "      \t";
            $context["content_classes"] = array(0 => "col-sm-12");
            // line 140
            echo "      ";
        }
        // line 141
        echo "      <section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => ($context["content_classes"] ?? null)), "method"), "html", null, true));
        echo ">

        ";
        // line 144
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 145
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 148
            echo "        ";
        }
        // line 149
        echo "
        ";
        // line 151
        echo "        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 152
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 155
            echo "        ";
        }
        // line 156
        echo "
        ";
        // line 158
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 159
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 162
            echo "        ";
        }
        // line 163
        echo "
        ";
        // line 165
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 166
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 169
            echo "        ";
        }
        // line 170
        echo "
        ";
        // line 172
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 176
        echo "      </section>

      ";
        // line 179
        echo "      ";
        if ( !twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) {
            // line 180
            echo "      \t ";
            if (((($context["idnode"] ?? null) == 9) && (($context["mode"] ?? null) != "resetpwd"))) {
                // line 181
                echo "\t        ";
                $this->displayBlock('sidebar_second', $context, $blocks);
                // line 184
                echo "         ";
            }
            // line 185
            echo "      ";
        }
        // line 186
        echo "    </div>
  </div>
";
    }

    // line 112
    public function block_header($context, array $blocks = array())
    {
        // line 113
        echo "          <div class=\"col-sm-12 heading\" role=\"heading\">
            ";
        // line 114
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 121
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 122
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 123
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 145
    public function block_highlighted($context, array $blocks = array())
    {
        // line 146
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 152
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 153
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["breadcrumb"] ?? null), "html", null, true));
        echo "
          ";
    }

    // line 159
    public function block_action_links($context, array $blocks = array())
    {
        // line 160
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["action_links"] ?? null), "html", null, true));
        echo "</ul>
          ";
    }

    // line 166
    public function block_help($context, array $blocks = array())
    {
        // line 167
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 172
    public function block_content($context, array $blocks = array())
    {
        // line 173
        echo "          <a id=\"main-content\"></a>
          ";
        // line 174
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
        ";
    }

    // line 181
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 182
        echo "\t          <aside class=\"col-sm-3\" role=\"complementary\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
        echo "</aside>
\t        ";
    }

    // line 195
    public function block_footer_first($context, array $blocks = array())
    {
        // line 196
        echo "                  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
        echo "
              ";
    }

    // line 202
    public function block_footer_second($context, array $blocks = array())
    {
        // line 203
        echo "                  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
        echo "
              ";
    }

    // line 209
    public function block_footer_third($context, array $blocks = array())
    {
        // line 210
        echo "                  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
        echo "
              ";
    }

    public function getTemplateName()
    {
        return "themes/cmm/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  452 => 210,  449 => 209,  442 => 203,  439 => 202,  432 => 196,  429 => 195,  422 => 182,  419 => 181,  413 => 174,  410 => 173,  407 => 172,  400 => 167,  397 => 166,  390 => 160,  387 => 159,  380 => 153,  377 => 152,  370 => 146,  367 => 145,  360 => 123,  357 => 122,  354 => 121,  347 => 114,  344 => 113,  341 => 112,  335 => 186,  332 => 185,  329 => 184,  326 => 181,  323 => 180,  320 => 179,  316 => 176,  313 => 172,  310 => 170,  307 => 169,  304 => 166,  301 => 165,  298 => 163,  295 => 162,  292 => 159,  289 => 158,  286 => 156,  283 => 155,  280 => 152,  277 => 151,  274 => 149,  271 => 148,  268 => 145,  265 => 144,  259 => 141,  256 => 140,  253 => 139,  251 => 138,  248 => 137,  246 => 134,  245 => 133,  244 => 132,  243 => 131,  242 => 130,  240 => 129,  237 => 127,  234 => 126,  231 => 121,  228 => 120,  225 => 118,  222 => 117,  219 => 112,  216 => 111,  209 => 107,  206 => 106,  201 => 102,  197 => 100,  194 => 99,  188 => 97,  186 => 96,  183 => 95,  177 => 93,  175 => 92,  171 => 91,  168 => 90,  165 => 88,  162 => 87,  160 => 86,  155 => 84,  152 => 83,  150 => 80,  149 => 79,  148 => 77,  146 => 76,  143 => 75,  133 => 213,  130 => 212,  127 => 209,  125 => 208,  121 => 206,  118 => 205,  115 => 202,  113 => 201,  109 => 199,  106 => 198,  103 => 195,  101 => 194,  94 => 190,  91 => 189,  89 => 106,  86 => 104,  83 => 75,  79 => 72,  73 => 70,  71 => 69,  68 => 68,  66 => 67,  56 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Navigation:
 * - breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - messages: Status and error messages. Should be displayed prominently.
 * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - action_links: Actions local to the page, such as \"Add menu\" on the menu
 *   administration interface.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the navigation region.
 * - page.navigation_collapsible: Items for the navigation (collapsible) region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 *
 * @ingroup templates
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<div id=\"page\">
<script>
    /*window.onload = function(){
        element = document.getElementById('message_avertissement_javascript');
        element.parentNode.removeChild(element);
    }*/
</script>
 
{% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}

{% if page.resp_menu %}
    {{ page.resp_menu }}
{% endif %}

<div class=\"resp-menu-page\">
{# Navbar #}
  {% block navbar %}
    {%
      set navbar_classes = [
        'navbar',
        theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',
        theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,
      ]
    %}
    <header class=\"container header-logo\" id=\"navbar1\" role=\"bannertop\">
        {{ page.navigation }}
    </header>
    <header class=\"container\" id=\"user_connected\">{%- if user_connected -%}
\t\t<!--<div class=\"no-js-message\">Attention, vous avez désactivé Javascript sur votre navigateur, le site ne pourra pas fonctionner correctement.</div>-->
    {{ user_connected }} 
\t\t{%- endif -%}
\t</header>
    <header{{ navbar_attributes.addClass(navbar_classes) }} id=\"navbar2\" role=\"banner\">
      {% if not navbar_attributes.hasClass('container') %}
        <div class=\"{{ container }}\">
      {% endif %}

        {% if page.maintitle %}
              {{ page.maintitle }}
        {% endif %}
      {% if not navbar_attributes.hasClass('container') %}
        </div>
      {% endif %}
    </header>
  {% endblock %}
  
{# Main #}
{% block main %}
  <div role=\"main\" class=\"main-container {{ container }} js-quickedit-main-content\">
    <div class=\"row\">

      {# Header #}
      {% if page.header %}
        {% block header %}
          <div class=\"col-sm-12 heading\" role=\"heading\">
            {{ page.header }}
          </div>
        {% endblock %}
      {% endif %}

      {# Sidebar First #}
      {% if page.sidebar_first %}
        {% block sidebar_first %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_first }}
          </aside>
        {% endblock %}
      {% endif %}

      {# Content #}
      {%
        set content_classes = [
          (page.sidebar_first and page.sidebar_second) ? 'col-sm-6',
          (page.sidebar_first and page.sidebar_second is empty) ? 'col-sm-9',
          (page.sidebar_second and page.sidebar_first is empty) ? 'col-sm-9',
          (page.sidebar_first is empty and page.sidebar_second is empty) ? 'col-sm-12',
        ]
      %}
      
      {% if idnode == 1  %}
      \t{%set content_classes = ['col-sm-12'] %}
      {% endif %}
      <section{{ content_attributes.addClass(content_classes) }}>

        {# Highlighted #}
        {% if page.highlighted %}
          {% block highlighted %}
            <div class=\"highlighted\">{{ page.highlighted }}</div>
          {% endblock %}
        {% endif %}

        {# Breadcrumbs #}
        {% if breadcrumb %}
          {% block breadcrumb %}
            {{ breadcrumb }}
          {% endblock %}
        {% endif %}

        {# Action Links #}
        {% if action_links %}
          {% block action_links %}
            <ul class=\"action-links\">{{ action_links }}</ul>
          {% endblock %}
        {% endif %}

        {# Help #}
        {% if page.help %}
          {% block help %}
            {{ page.help }}
          {% endblock %}
        {% endif %}

        {# Content #}
        {% block content %}
          <a id=\"main-content\"></a>
          {{ page.content }}
        {% endblock %}
      </section>

      {# Sidebar Second #}
      {% if page.sidebar_second is not empty %}
      \t {% if idnode == 9  and mode != 'resetpwd' %}
\t        {% block sidebar_second %}
\t          <aside class=\"col-sm-3\" role=\"complementary\">{{ page.sidebar_second }}</aside>
\t        {% endblock %}
         {% endif %}
      {% endif %}
    </div>
  </div>
{% endblock %}

<footer class=\"footer {{ container }}\" role=\"contentinfo\">
    <div class=\"row\">
    \t<div class=\"col-md-1\">&nbsp;</div>
        <div class=\"col-md-4\">
            {% if page.footer_first %}
              {% block footer_first %}
                  {{ page.footer_first }}
              {% endblock %}
            {% endif %}
        </div>
        <div class=\"col-md-4\">
            {% if page.footer_second %}
              {% block footer_second %}
                  {{ page.footer_second }}
              {% endblock %}
            {% endif %}
        </div>
        <div class=\"col-md-3\">
            {% if page.footer_third %}
              {% block footer_third %}
                  {{ page.footer_third }}
              {% endblock %}
            {% endif %}
        </div>
        
    </div>
</footer>
</div>
</div>
", "themes/cmm/templates/page.html.twig", "/Applications/MAMP/htdocs/cmm/themes/cmm/templates/page.html.twig");
    }
}
