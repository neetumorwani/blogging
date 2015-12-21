<?php

/* themes/blogging/templates/block/block--system-breadcrumb-block.html.twig */
class __TwigTemplate_d597fea84fe3fefaa19a761f98f112faaeaf864ce5fda83d2be14271c9afa271 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "themes/blogging/templates/block/block--system-breadcrumb-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 9);
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "  ";
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 10
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/blogging/templates/block/block--system-breadcrumb-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 10,  55 => 9,  52 => 8,  11 => 1,);
    }
}
/* {% extends "block.html.twig" %}*/
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for breadcrumbs.*/
/*  *//* */
/* #}*/
/* {% block content %}*/
/*   {% if content %}*/
/*     {{ content }}*/
/*   {% endif %}*/
/* {% endblock %}*/
/* */
