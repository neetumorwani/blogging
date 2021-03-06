<?php

/* themes/blogging/templates/content/node.html.twig */
class __TwigTemplate_1ea5d801972a0f360c4476fde03fd995e152943ae825ed8e054b6f9173f590d1 extends Twig_Template
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
        $tags = array("set" => 72, "if" => 86, "trans" => 88);
        $filters = array("clean_class" => 75, "without" => 115);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'trans'),
                array('clean_class', 'without'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 72
        $context["classes"] = array(0 => "node", 1 => ("node--id-" . $this->getAttribute(        // line 74
(isset($context["node"]) ? $context["node"] : null), "id", array())), 2 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 75
(isset($context["node"]) ? $context["node"] : null), "bundle", array()))), 3 => (($this->getAttribute(        // line 76
(isset($context["node"]) ? $context["node"] : null), "isPromoted", array(), "method")) ? ("node--promoted") : ("")), 4 => (($this->getAttribute(        // line 77
(isset($context["node"]) ? $context["node"] : null), "isSticky", array(), "method")) ? ("node--sticky") : ("")), 5 => (( !$this->getAttribute(        // line 78
(isset($context["node"]) ? $context["node"] : null), "isPublished", array(), "method")) ? ("node--unpublished") : ("")), 6 => ((        // line 79
(isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null)))) : ("")));
        // line 82
        echo "<article";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  <div class=\"node__container\">

    <header";
        // line 85
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["header_attributes"]) ? $context["header_attributes"] : null), "addClass", array(0 => "node__header"), "method"), "html", null, true));
        echo ">
      ";
        // line 86
        if ( !$this->getAttribute((isset($context["node"]) ? $context["node"] : null), "isPublished", array(), "method")) {
            // line 87
            echo "        <span class=\"node__status node--unpublished marker marker--warning\" aria-label=\"Status message\" role=\"contentinfo\">
          <span class=\"visually-hidden\">";
            // line 88
            echo t("This node is", array());
            echo "</span>";
            echo t("Unpublished", array());
            // line 89
            echo "        </span>
      ";
        }
        // line 91
        echo "
      ";
        // line 92
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
      ";
        // line 93
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 94
            echo "        ";
            if ((isset($context["page"]) ? $context["page"] : null)) {
                // line 95
                echo "          <h1";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "node__title"), "method"), "html", null, true));
                echo ">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
                echo "</h1>
        ";
            } else {
                // line 97
                echo "          <h2";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "node__title"), "method"), "html", null, true));
                echo "><a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
                echo "\" class=\"node__title-link\" rel=\"bookmark\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
                echo "</a></h2>
        ";
            }
            // line 99
            echo "      ";
        }
        // line 100
        echo "      ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "

      ";
        // line 102
        if ((isset($context["display_submitted"]) ? $context["display_submitted"] : null)) {
            // line 103
            echo "        <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["meta_attributes"]) ? $context["meta_attributes"] : null), "html", null, true));
            echo ">
          ";
            // line 104
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["author_picture"]) ? $context["author_picture"] : null), "html", null, true));
            echo "
          <div";
            // line 105
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["submitted_attributes"]) ? $context["submitted_attributes"] : null), "html", null, true));
            echo ">
             <span class=\"node__author\">";
            // line 106
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["author_name"]) ? $context["author_name"] : null), "html", null, true));
            echo "</span>
             <span class=\"node__pubdate\">";
            // line 107
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["date"]) ? $context["date"] : null), "html", null, true));
            echo "</span>
          </div>
          ";
            // line 109
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["metadata"]) ? $context["metadata"] : null), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 112
        echo "    </header>

    <div";
        // line 114
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "node__content"), "method"), "html", null, true));
        echo ">
      ";
        // line 115
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "comment"), "html", null, true));
        echo "
    </div>
  </div>

  ";
        // line 119
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "comment", array()), "html", null, true));
        echo "

</article>
";
    }

    public function getTemplateName()
    {
        return "themes/blogging/templates/content/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 119,  152 => 115,  148 => 114,  144 => 112,  138 => 109,  133 => 107,  129 => 106,  125 => 105,  121 => 104,  116 => 103,  114 => 102,  108 => 100,  105 => 99,  95 => 97,  87 => 95,  84 => 94,  82 => 93,  78 => 92,  75 => 91,  71 => 89,  67 => 88,  64 => 87,  62 => 86,  58 => 85,  51 => 82,  49 => 79,  48 => 78,  47 => 77,  46 => 76,  45 => 75,  44 => 74,  43 => 72,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a node.*/
/*  **/
/*  * Available variables:*/
/*  * - node: Full node entity.*/
/*  *   - id: The node ID.*/
/*  *   - bundle: The type of the node, for example, "page" or "article".*/
/*  *   - authorid: The user ID of the node author.*/
/*  *   - createdtime: Formatted creation date. Preprocess functions can*/
/*  *     reformat it by calling format_date() with the desired parameters on*/
/*  *     $variables['node']->getCreatedTime().*/
/*  * - label: The title of the node.*/
/*  * - content: All node items. Use {{ content }} to print them all,*/
/*  *   or print a subset such as {{ content.field_example }}. Use*/
/*  *   {{ content|without('field_example') }} to temporarily suppress the printing*/
/*  *   of a given child element.*/
/*  * - author_picture: The node author user entity, rendered using the "compact"*/
/*  *   view mode.*/
/*  * - metadata: Metadata for this node.*/
/*  * - date: Themed creation date field.*/
/*  * - author_name: Themed author name field.*/
/*  * - url: Direct URL of the current node.*/
/*  * - display_submitted: Whether submission information should be displayed.*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  *   The attributes.class element may contain one or more of the following*/
/*  *   classes:*/
/*  *   - node: The current template type (also known as a "theming hook").*/
/*  *   - node--type-[type]: The current node type. For example, if the node is an*/
/*  *     "Article" it would result in "node--type-article". Note that the machine*/
/*  *     name will often be in a short form of the human readable label.*/
/*  *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a*/
/*  *     teaser would result in: "node--view-mode-teaser", and*/
/*  *     full: "node--view-mode-full".*/
/*  *   The following are controlled through the node publishing options.*/
/*  *   - node--promoted: Appears on nodes promoted to the front page.*/
/*  *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in*/
/*  *     teaser listings.*/
/*  *   - node--unpublished: Appears on unpublished nodes visible only to site*/
/*  *     admins.*/
/*  * - title_attributes: Same as attributes, except applied to the main title*/
/*  *   tag that appears in the template.*/
/*  * - content_attributes: Same as attributes, except applied to the main*/
/*  *   content tag that appears in the template.*/
/*  * - author_attributes: Same as attributes, except applied to the author of*/
/*  *   the node tag that appears in the template.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - view_mode: View mode; for example, "teaser" or "full".*/
/*  * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.*/
/*  * - page: Flag for the full page state. Will be true if view_mode is 'full'.*/
/*  * - readmore: Flag for more state. Will be true if the teaser content of the*/
/*  *   node cannot hold the main body content.*/
/*  * - logged_in: Flag for authenticated user status. Will be true when the*/
/*  *   current user is a logged-in member.*/
/*  * - is_admin: Flag for admin user status. Will be true when the current user*/
/*  *   is an administrator.*/
/*  **/
/*  * @see template_preprocess_node()*/
/*  **/
/*  * @todo Remove the id attribute (or make it a class), because if that gets*/
/*  *   rendered twice on a page this is invalid CSS for example: two lists*/
/*  *   in different view modes.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'node',*/
/*     'node--id-' ~ node.id,*/
/*     'node--type-' ~ node.bundle|clean_class,*/
/*     node.isPromoted() ? 'node--promoted',*/
/*     node.isSticky() ? 'node--sticky',*/
/*     not node.isPublished() ? 'node--unpublished',*/
/*     view_mode ? 'node--view-mode-' ~ view_mode|clean_class,*/
/*   ]*/
/* %}*/
/* <article{{ attributes.addClass(classes) }}>*/
/*   <div class="node__container">*/
/* */
/*     <header{{ header_attributes.addClass('node__header') }}>*/
/*       {% if not node.isPublished() %}*/
/*         <span class="node__status node--unpublished marker marker--warning" aria-label="Status message" role="contentinfo">*/
/*           <span class="visually-hidden">{% trans %}This node is {% endtrans %}</span>{% trans %}Unpublished{% endtrans %}*/
/*         </span>*/
/*       {% endif %}*/
/* */
/*       {{ title_prefix }}*/
/*       {% if label %}*/
/*         {% if page %}*/
/*           <h1{{ title_attributes.addClass('node__title') }}>{{ label }}</h1>*/
/*         {% else %}*/
/*           <h2{{ title_attributes.addClass('node__title') }}><a href="{{ url }}" class="node__title-link" rel="bookmark">{{ label }}</a></h2>*/
/*         {% endif %}*/
/*       {% endif %}*/
/*       {{ title_suffix }}*/
/* */
/*       {% if display_submitted %}*/
/*         <div{{ meta_attributes }}>*/
/*           {{ author_picture }}*/
/*           <div{{ submitted_attributes }}>*/
/*              <span class="node__author">{{ author_name }}</span>*/
/*              <span class="node__pubdate">{{ date }}</span>*/
/*           </div>*/
/*           {{ metadata }}*/
/*         </div>*/
/*       {% endif %}*/
/*     </header>*/
/* */
/*     <div{{ content_attributes.addClass('node__content') }}>*/
/*       {{ content|without('comment') }}*/
/*     </div>*/
/*   </div>*/
/* */
/*   {{ content.comment }}*/
/* */
/* </article>*/
/* */
