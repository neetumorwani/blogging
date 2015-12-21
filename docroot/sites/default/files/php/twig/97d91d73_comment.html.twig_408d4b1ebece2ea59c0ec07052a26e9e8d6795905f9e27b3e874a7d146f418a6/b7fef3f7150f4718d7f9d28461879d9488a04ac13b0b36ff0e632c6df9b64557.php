<?php

/* themes/blogging/templates/content/comment.html.twig */
class __TwigTemplate_6d5770c9792e61617ab22d2dac775a110819fd5d7a8fe430ef6341dc2e70c4a6 extends Twig_Template
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
        $tags = array("set" => 70, "if" => 83, "trans" => 94);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'trans'),
                array(),
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

        // line 70
        $context["classes"] = array(0 => "comment", 1 => "js-comment", 2 => (((        // line 73
(isset($context["status"]) ? $context["status"] : null) != "published")) ? ((isset($context["status"]) ? $context["status"] : null)) : ("")), 3 => (($this->getAttribute($this->getAttribute(        // line 74
(isset($context["comment"]) ? $context["comment"] : null), "owner", array()), "anonymous", array())) ? ("by-anonymous") : ("")), 4 => (((        // line 75
(isset($context["author_id"]) ? $context["author_id"] : null) && ((isset($context["author_id"]) ? $context["author_id"] : null) == $this->getAttribute((isset($context["commented_entity"]) ? $context["commented_entity"] : null), "getOwnerId", array(), "method")))) ? ((("by-" . $this->getAttribute((isset($context["commented_entity"]) ? $context["commented_entity"] : null), "getEntityTypeId", array(), "method")) . "-author")) : ("")), 5 => (((        // line 76
(isset($context["title_visibility"]) ? $context["title_visibility"] : null) == true)) ? ("has-title") : ("")), 6 => "clearfix");
        // line 80
        echo "<article";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  <div class=\"comment__container\">

    ";
        // line 83
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 84
            echo "      ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
      ";
            // line 86
            $context["title_classes"] = array(0 => "comment__title", 1 => (((            // line 88
(isset($context["title_visibility"]) ? $context["title_visibility"] : null) == false)) ? ("visually-hidden") : ("")));
            // line 91
            echo "      <h3";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => (isset($context["title_classes"]) ? $context["title_classes"] : null)), "method"), "html", null, true));
            echo ">
        ";
            // line 92
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "
        ";
            // line 93
            if (((isset($context["status"]) ? $context["status"] : null) != "published")) {
                // line 94
                echo "            <span class=\"comment__status comment--unpublished marker marker--warning\" aria-label=\"Status message\" role=\"contentinfo\"><span class=\"visually-hidden\">";
                echo t("This comment is", array());
                echo "</span>";
                echo t("Unpublished", array());
                echo "</span>
        ";
            }
            // line 96
            echo "        ";
            // line 101
            echo "        <span class=\"comment__new marker marker--success hidden\" data-comment-timestamp=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["new_indicator_timestamp"]) ? $context["new_indicator_timestamp"] : null), "html", null, true));
            echo "\"></span>
      </h3>
      ";
            // line 103
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "
    ";
        }
        // line 105
        echo "
    <div";
        // line 106
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["meta_attributes"]) ? $context["meta_attributes"] : null), "html", null, true));
        echo ">
      ";
        // line 107
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["user_picture"]) ? $context["user_picture"] : null), "html", null, true));
        echo "
      <div";
        // line 108
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["submitted_attributes"]) ? $context["submitted_attributes"] : null), "html", null, true));
        echo ">
        <span class=\"comment__author\">";
        // line 109
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["author"]) ? $context["author"] : null), "html", null, true));
        echo "</p>
        <span class=\"comment__pubdate\">";
        // line 110
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["created"]) ? $context["created"] : null), "html", null, true));
        echo "</p>
      </div>
    </div>

    <div";
        // line 114
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "comment__content"), "method"), "html", null, true));
        echo ">
      ";
        // line 120
        echo "      ";
        if ((isset($context["parent"]) ? $context["parent"] : null)) {
            // line 121
            echo "        <p class=\"comment__parent visually-hidden\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["parent"]) ? $context["parent"] : null), "html", null, true));
            echo "</p>
      ";
        }
        // line 123
        echo "
      ";
        // line 124
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "

      ";
        // line 126
        if ((isset($context["signature"]) ? $context["signature"] : null)) {
            // line 127
            echo "        <p class=\"comment__user-signature\">
          ";
            // line 128
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["signature"]) ? $context["signature"] : null), "html", null, true));
            echo "
        </p>
      ";
        }
        // line 131
        echo "    </div>

  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/blogging/templates/content/comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 131,  150 => 128,  147 => 127,  145 => 126,  140 => 124,  137 => 123,  131 => 121,  128 => 120,  124 => 114,  117 => 110,  113 => 109,  109 => 108,  105 => 107,  101 => 106,  98 => 105,  93 => 103,  87 => 101,  85 => 96,  77 => 94,  75 => 93,  71 => 92,  66 => 91,  64 => 88,  63 => 86,  58 => 84,  56 => 83,  49 => 80,  47 => 76,  46 => 75,  45 => 74,  44 => 73,  43 => 70,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Adaptivetheme implementation for comments.*/
/*  **/
/*  * Available variables:*/
/*  * - author: Comment author. Can be a link or plain text.*/
/*  * - content: The content-related items for the comment display. Use*/
/*  *   {{ content }} to print them all, or print a subset such as*/
/*  *   {{ content.field_example }}. Use the following code to temporarily suppress*/
/*  *   the printing of a given child element:*/
/*  *   @code*/
/*  *   {{ content|without('field_example') }}*/
/*  *   @endcode*/
/*  * - created: Formatted date and time for when the comment was created.*/
/*  *   Preprocess functions can reformat it by calling format_date() with the*/
/*  *   desired parameters on the 'comment.created' variable.*/
/*  * - changed: Formatted date and time for when the comment was last changed.*/
/*  *   Preprocess functions can reformat it by calling format_date() with the*/
/*  *   desired parameters on the 'comment.changed' variable.*/
/*  * - permalink: Comment permalink.*/
/*  * - submitted: Submission information created from author and created*/
/*  *   during template_preprocess_comment().*/
/*  * - user_picture: The comment author's profile picture.*/
/*  * - signature: The comment author's signature.*/
/*  * - status: Comment status. Possible values are:*/
/*  *   unpublished, published, or preview.*/
/*  * - title: Comment title, linked to the comment.*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  *   The attributes.class may contain one or more of the following classes:*/
/*  *   - comment: The current template type; e.g., 'theming hook'.*/
/*  *   - by-anonymous: Comment by an unregistered user.*/
/*  *   - by-{entity-type}-author: Comment by the author of the parent entity,*/
/*  *     eg. by-node-author.*/
/*  *   - preview: When previewing a new or edited comment.*/
/*  *   The following applies only to viewers who are registered users:*/
/*  *   - unpublished: An unpublished comment visible only to administrators.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - content_attributes: List of classes for the styling of the comment content.*/
/*  * - title_attributes: Same as attributes, except applied to the main title*/
/*  *   tag that appears in the template.*/
/*  **/
/*  * These variables are provided to give context about the parent comment (if*/
/*  * any):*/
/*  * - comment_parent: Full parent comment entity (if any).*/
/*  * - parent_author: Equivalent to author for the parent comment.*/
/*  * - parent_created: Equivalent to created for the parent comment.*/
/*  * - parent_changed: Equivalent to changed for the parent comment.*/
/*  * - parent_title: Equivalent to title for the parent comment.*/
/*  * - parent_permalink: Equivalent to permalink for the parent comment.*/
/*  * - parent: A text string of parent comment submission information created from*/
/*  *   'parent_author' and 'parent_created' during template_preprocess_comment().*/
/*  *   This information is presented to help screen readers follow lengthy*/
/*  *   discussion threads. You can hide this from sighted users using the class*/
/*  *   visually-hidden.*/
/*  **/
/*  * These two variables are provided for context:*/
/*  * - comment: Full comment object.*/
/*  * - entity: Entity the comments are attached to.*/
/*  **/
/*  * @see template_preprocess_comment()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'comment',*/
/*     'js-comment',*/
/*     status != 'published' ? status,*/
/*     comment.owner.anonymous ? 'by-anonymous',*/
/*     author_id and author_id == commented_entity.getOwnerId() ? 'by-' ~ commented_entity.getEntityTypeId() ~ '-author',*/
/*     title_visibility == true ? 'has-title',*/
/*     'clearfix',*/
/*   ]*/
/* %}*/
/* <article{{ attributes.addClass(classes) }}>*/
/*   <div class="comment__container">*/
/* */
/*     {% if title %}*/
/*       {{ title_prefix }}*/
/*       {%*/
/*         set title_classes = [*/
/*           'comment__title',*/
/*           title_visibility == false ? 'visually-hidden',*/
/*         ]*/
/*       %}*/
/*       <h3{{ title_attributes.addClass(title_classes) }}>*/
/*         {{ title }}*/
/*         {% if status != 'published' %}*/
/*             <span class="comment__status comment--unpublished marker marker--warning" aria-label="Status message" role="contentinfo"><span class="visually-hidden">{% trans %}This comment is {% endtrans %}</span>{% trans %}Unpublished{% endtrans %}</span>*/
/*         {% endif %}*/
/*         {#*/
/*         Hide the "new" indicator by default, let a piece of JavaScript ask*/
/*         the server which comments are new for the user. Rendering the final*/
/*         "new" indicator here would break the render cache.*/
/*         #}*/
/*         <span class="comment__new marker marker--success hidden" data-comment-timestamp="{{ new_indicator_timestamp }}"></span>*/
/*       </h3>*/
/*       {{ title_suffix }}*/
/*     {% endif %}*/
/* */
/*     <div{{ meta_attributes }}>*/
/*       {{ user_picture }}*/
/*       <div{{ submitted_attributes }}>*/
/*         <span class="comment__author">{{ author }}</p>*/
/*         <span class="comment__pubdate">{{ created }}</p>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div{{ content_attributes.addClass('comment__content') }}>*/
/*       {#*/
/*         Indicate the semantic relationship between parent and child comments*/
/*         for accessibility. The list is difficult to navigate in a screen*/
/*         reader without this information.*/
/*       #}*/
/*       {% if parent %}*/
/*         <p class="comment__parent visually-hidden">{{ parent }}</p>*/
/*       {% endif %}*/
/* */
/*       {{ content }}*/
/* */
/*       {% if signature %}*/
/*         <p class="comment__user-signature">*/
/*           {{ signature }}*/
/*         </p>*/
/*       {% endif %}*/
/*     </div>*/
/* */
/*   </div>*/
/* </article>*/
/* */
