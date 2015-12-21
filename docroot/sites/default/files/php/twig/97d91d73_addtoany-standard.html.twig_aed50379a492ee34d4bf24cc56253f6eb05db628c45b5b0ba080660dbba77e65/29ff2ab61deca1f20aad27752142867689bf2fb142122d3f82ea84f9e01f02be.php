<?php

/* modules/addtoany/templates/addtoany-standard.html.twig */
class __TwigTemplate_3d85eb7e17394f05d85aa9f3f4c1fcbc892955e68ccf0bad671fe95003b70ba4 extends Twig_Template
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
        $filters = array("raw" => 12);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('raw'),
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

        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["addtoany_html"]) ? $context["addtoany_html"] : null)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/addtoany/templates/addtoany-standard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 12,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to standard AddToAny buttons.*/
/*  **/
/*  * Available variables:*/
/*  * - addtoany_html: HTML for AddToAny buttons.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {{ addtoany_html|raw }}*/
/* */
