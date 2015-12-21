<?php

/* themes/blogging/templates/views/views-mini-pager.html.twig */
class __TwigTemplate_e92954f82bf45f59afde09d9f1aabdaf6785f2953c34b6770a7476c4f8a31772 extends Twig_Template
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
        $tags = array("if" => 14, "trans" => 31);
        $filters = array("t" => 16, "default" => 23);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'trans'),
                array('t', 'default'),
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

        // line 14
        if (($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()) || $this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()))) {
            // line 15
            echo "  <nav class=\"pager pager--mini\" role=\"navigation\" aria-labelledby=\"pagination-heading\">
    <h4 class=\"pager__heading visually-hidden\">";
            // line 16
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Pagination")));
            echo "</h4>
    <ul class=\"pager__items\">

      ";
            // line 19
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array())) {
                // line 20
                echo "        <li class=\"pager__item pager__item--previous pager__item--text\">
          <a href=\"";
                // line 21
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()), "href", array()), "html", null, true));
                echo "\" class=\"pager__link\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Go to previous page")));
                echo "\" rel=\"prev\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array()), "attributes", array()), "html", null, true));
                echo ">
            <span class=\"visually-hidden\">";
                // line 22
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Previous page")));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 23
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "previous", array(), "any", false, true), "text", array()), t("‹‹"))) : (t("‹‹"))), "html", null, true));
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 27
            echo "
      ";
            // line 28
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "current", array())) {
                // line 29
                echo "        <li class=\"pager__item is-active\">
          <span class=\"pager__link pager__link--is-active\">
          (";
                // line 31
                echo t("Page @items.current", array("@items.current" => $this->getAttribute((isset($context["items"]) ? $context["items"] : null), "current", array()), ));
                echo ")
          </span>
        </li>
      ";
            }
            // line 35
            echo "
      ";
            // line 36
            if ($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array())) {
                // line 37
                echo "        <li class=\"pager__item pager__item--next pager__item--text\">
          <a href=\"";
                // line 38
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()), "href", array()), "html", null, true));
                echo "\" class=\"pager__link\" title=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Go to next page")));
                echo "\" rel=\"next\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array()), "attributes", array()), "html", null, true));
                echo ">
            <span class=\"visually-hidden\">";
                // line 39
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Next page")));
                echo "</span>
            <span aria-hidden=\"true\">";
                // line 40
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array(), "any", false, true), "text", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "next", array(), "any", false, true), "text", array()), t("››"))) : (t("››"))), "html", null, true));
                echo "</span>
          </a>
        </li>
      ";
            }
            // line 44
            echo "
    </ul>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/blogging/templates/views/views-mini-pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 44,  114 => 40,  110 => 39,  102 => 38,  99 => 37,  97 => 36,  94 => 35,  87 => 31,  83 => 29,  81 => 28,  78 => 27,  71 => 23,  67 => 22,  59 => 21,  56 => 20,  54 => 19,  48 => 16,  45 => 15,  43 => 14,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a views mini-pager.*/
/*  **/
/*  * Available variables:*/
/*  * - items: List of pager items.*/
/*  **/
/*  * @see template_preprocess_views_mini_pager()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if items.previous or items.next %}*/
/*   <nav class="pager pager--mini" role="navigation" aria-labelledby="pagination-heading">*/
/*     <h4 class="pager__heading visually-hidden">{{ 'Pagination'|t }}</h4>*/
/*     <ul class="pager__items">*/
/* */
/*       {% if items.previous %}*/
/*         <li class="pager__item pager__item--previous pager__item--text">*/
/*           <a href="{{ items.previous.href }}" class="pager__link" title="{{ 'Go to previous page'|t }}" rel="prev"{{ items.previous.attributes }}>*/
/*             <span class="visually-hidden">{{ 'Previous page'|t }}</span>*/
/*             <span aria-hidden="true">{{ items.previous.text|default('‹‹'|t) }}</span>*/
/*           </a>*/
/*         </li>*/
/*       {% endif %}*/
/* */
/*       {% if items.current %}*/
/*         <li class="pager__item is-active">*/
/*           <span class="pager__link pager__link--is-active">*/
/*           ({% trans %}Page {{ items.current }}{% endtrans %})*/
/*           </span>*/
/*         </li>*/
/*       {% endif %}*/
/* */
/*       {% if items.next %}*/
/*         <li class="pager__item pager__item--next pager__item--text">*/
/*           <a href="{{ items.next.href }}" class="pager__link" title="{{ 'Go to next page'|t }}" rel="next"{{ items.next.attributes }}>*/
/*             <span class="visually-hidden">{{ 'Next page'|t }}</span>*/
/*             <span aria-hidden="true">{{ items.next.text|default('››'|t) }}</span>*/
/*           </a>*/
/*         </li>*/
/*       {% endif %}*/
/* */
/*     </ul>*/
/*   </nav>*/
/* {% endif %}*/
/* */
