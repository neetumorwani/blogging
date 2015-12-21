<?php

/* themes/blogging/templates/field/field--comment.html.twig */
class __TwigTemplate_a5c931644e25cd48af2e3f3876b06a83649ee9521ca07d0c6f1b4a2682808e3e extends Twig_Template
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
        $tags = array("set" => 28, "if" => 50);
        $filters = array("clean_class" => 28, "t" => 60);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class', 't'),
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

        // line 28
        $context["field_name_class"] = \Drupal\Component\Utility\Html::getClass((isset($context["field_name"]) ? $context["field_name"] : null));
        // line 30
        $context["classes"] = array(0 => "field", 1 => ((("field-" . \Drupal\Component\Utility\Html::getClass(        // line 32
(isset($context["entity_type"]) ? $context["entity_type"] : null))) . "--") . (isset($context["field_name_class"]) ? $context["field_name_class"] : null)), 2 => ("field-name-" .         // line 33
(isset($context["field_name_class"]) ? $context["field_name_class"] : null)), 3 => ("field-type-" . \Drupal\Component\Utility\Html::getClass(        // line 34
(isset($context["field_type"]) ? $context["field_type"] : null))), 4 => ("field-label-" .         // line 35
(isset($context["label_display"]) ? $context["label_display"] : null)), 5 => (((        // line 36
(isset($context["label_display"]) ? $context["label_display"] : null) == "inline")) ? ("clearfix") : ("")), 6 => "comment-wrapper");
        // line 41
        $context["title_classes"] = array(0 => "comment-field__title", 1 => (((        // line 43
(isset($context["label_display"]) ? $context["label_display"] : null) == "visually_hidden")) ? ("visually-hidden") : ("")));
        // line 46
        echo "<section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 48
        echo "  <a name=\"comments\"></a>

  ";
        // line 50
        if (($this->getAttribute((isset($context["comments"]) ? $context["comments"] : null), "pager", array()) &&  !(isset($context["label_hidden"]) ? $context["label_hidden"] : null))) {
            // line 51
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
    <h2";
            // line 52
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => (isset($context["title_classes"]) ? $context["title_classes"] : null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</h2>
    ";
            // line 53
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "
  ";
        }
        // line 55
        echo "
  ";
        // line 56
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["comments"]) ? $context["comments"] : null), "html", null, true));
        echo "

  ";
        // line 58
        if ((isset($context["comment_form"]) ? $context["comment_form"] : null)) {
            // line 59
            echo "    <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "comment-form-wrapper"), "method"), "html", null, true));
            echo ">
      <h2 class=\"comment-form__title\">";
            // line 60
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Add new comment")));
            echo "</h2>
      ";
            // line 61
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["comment_form"]) ? $context["comment_form"] : null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 64
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "themes/blogging/templates/field/field--comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 64,  101 => 61,  97 => 60,  92 => 59,  90 => 58,  85 => 56,  82 => 55,  77 => 53,  71 => 52,  66 => 51,  64 => 50,  60 => 48,  55 => 46,  53 => 43,  52 => 41,  50 => 36,  49 => 35,  48 => 34,  47 => 33,  46 => 32,  45 => 30,  43 => 28,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Adaptivetheme override for comment fields.*/
/*  **/
/*  * Note: This template currently uses a workaround to prevent the display*/
/*  * of the field title when there are no comments: see https://www.drupal.org/node/2375981*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  * - label_hidden: Whether to show the field label or not.*/
/*  * - title_attributes: HTML attributes for the title.*/
/*  * - label: The label for the field.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional title output populated by modules, intended to*/
/*  *   be displayed after the main title tag that appears in the template.*/
/*  * - comments: List of comments rendered through comment.html.twig.*/
/*  * - content_attributes: HTML attributes for the form title.*/
/*  * - comment_form: The 'Add new comment' form.*/
/*  * - comment_display_mode: Is the comments are threaded.*/
/*  * - comment_type: The comment type bundle ID for the comment field.*/
/*  **/
/*  * @see template_preprocess_field()*/
/*  * @see comment_preprocess_field()*/
/*  *//* */
/* #}*/
/* {% set field_name_class = field_name|clean_class %}*/
/* {%*/
/*   set classes = [*/
/*     'field',*/
/*     'field-' ~ entity_type|clean_class ~ '--' ~ field_name_class,*/
/*     'field-name-' ~ field_name_class,*/
/*     'field-type-' ~ field_type|clean_class,*/
/*     'field-label-' ~ label_display,*/
/*     label_display == 'inline' ? 'clearfix',*/
/*     'comment-wrapper',*/
/*   ]*/
/* %}*/
/* {%*/
/*   set title_classes = [*/
/*     'comment-field__title',*/
/*     label_display == 'visually_hidden' ? 'visually-hidden',*/
/*   ]*/
/* %}*/
/* <section{{ attributes.addClass(classes) }}>*/
/*   {# Fragment name #}*/
/*   <a name="comments"></a>*/
/* */
/*   {% if comments.pager and not label_hidden %}*/
/*     {{ title_prefix }}*/
/*     <h2{{ title_attributes.addClass(title_classes) }}>{{ label }}</h2>*/
/*     {{ title_suffix }}*/
/*   {% endif %}*/
/* */
/*   {{ comments }}*/
/* */
/*   {% if comment_form %}*/
/*     <div{{ content_attributes.addClass('comment-form-wrapper') }}>*/
/*       <h2 class="comment-form__title">{{ 'Add new comment'|t }}</h2>*/
/*       {{ comment_form }}*/
/*     </div>*/
/*   {% endif %}*/
/* </section>*/
/* */
