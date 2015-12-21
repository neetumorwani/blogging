<?php

/* themes/blogging/templates/layout/region.html.twig */
class __TwigTemplate_3b702eeb2b3a9b3a3b90dc22e7f0cb0385420c3c1ad4406a65453f51d05a7962 extends Twig_Template
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
        $tags = array("set" => 25, "if" => 31);
        $filters = array("clean_class" => 28);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class'),
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

        // line 25
        $context["classes"] = array(0 => "l-r", 1 => "region", 2 => ((        // line 28
(isset($context["region_row"]) ? $context["region_row"] : null)) ? (((("pr-" . \Drupal\Component\Utility\Html::getClass((isset($context["region_row"]) ? $context["region_row"] : null))) . "__") . \Drupal\Component\Utility\Html::getClass((isset($context["region"]) ? $context["region"] : null)))) : (\Drupal\Component\Utility\Html::getClass((isset($context["region"]) ? $context["region"] : null)))));
        // line 31
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 32
            echo "  <div ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
    ";
            // line 33
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/blogging/templates/layout/region.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 33,  48 => 32,  46 => 31,  44 => 28,  43 => 25,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Adaptivetheme implementation to display a region.*/
/*  **/
/*  * Available variables:*/
/*  * - content: The content for this region, typically blocks.*/
/*  * - region_row: the row this region belongs to.*/
/*  * - attributes: HTML attributes for the region div, including:*/
/*  *   - class: Classes that can be used to style contextually through CSS,*/
/*  *     including:*/
/*  *     - region: The current template type (also know as "theming hook").*/
/*  *     - region__[name]: The name of the region with underscores replaced with*/
/*  *       dashes. For example, page_top region would have a region__page-top*/
/*  *       class.*/
/*  * - region: The name of the region variable as defined in the theme's*/
/*  *   .info.yml file.*/
/*  **/
/*  * @see template_preprocess_region()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'l-r',*/
/*     'region',*/
/*     region_row ? 'pr-' ~ region_row|clean_class ~ '__' ~ region|clean_class : region|clean_class*/
/*   ]*/
/* %}*/
/* {% if content %}*/
/*   <div {{ attributes.addClass(classes) }}>*/
/*     {{ content }}*/
/*   </div>*/
/* {% endif %}*/
/* */
