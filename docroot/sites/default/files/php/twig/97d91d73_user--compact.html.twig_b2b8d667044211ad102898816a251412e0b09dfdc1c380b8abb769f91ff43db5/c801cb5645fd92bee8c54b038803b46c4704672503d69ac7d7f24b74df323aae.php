<?php

/* themes/blogging/templates/user/user--compact.html.twig */
class __TwigTemplate_8cbb46340c84d5c7df4c4d62120b6786b3761e73de52a41657ecfb307146caaf extends Twig_Template
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
        $tags = array("if" => 31);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        // line 31
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 32
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        }
    }

    public function getTemplateName()
    {
        return "themes/blogging/templates/user/user--compact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 32,  43 => 31,);
    }
}
/* {#*/
/* /***/
/*  * TODO: Track https://drupal.org/node/2247677. This was added to remove all*/
/*  * markup when displaying the user picture in nodes and commments, which*/
/*  * use the compact view mode.*/
/*  **/
/*  * @file*/
/*  * Default theme implementation to present user data included in the compact display mode.*/
/*  **/
/*  * Available variables:*/
/*  * - label: the users name set as a title. Adaptivetheme moves the h1 inside*/
/*  *   the article element for proper outlines.*/
/*  * - content: A list of content items. Use 'content' to print all content, or*/
/*  *   print a subset such as 'content.field_example'.*/
/*  * - Field variables: For each field instance attached to the user a*/
/*  *   corresponding variable is defined; e.g., account.field_example has a*/
/*  *   variable 'field_example' defined. When needing to access a field's raw*/
/*  *   values, developers/themers are strongly encouraged to use these*/
/*  *   variables. Otherwise they will have to explicitly specify the desired*/
/*  *   field language, e.g. account.field_example.en, thus overriding any*/
/*  *   language negotiation rule that was previously applied.*/
/*  * - title_attributes: HTML attributes set on the label wrapper markup.*/
/*  * - attributes: HTML attributes for the container element.*/
/*  **/
/*  * @see template_preprocess_user()*/
/*  * @see at_core_preprocess_user()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if content %}*/
/*   {{- content -}}*/
/* {% endif %}*/
/* */
