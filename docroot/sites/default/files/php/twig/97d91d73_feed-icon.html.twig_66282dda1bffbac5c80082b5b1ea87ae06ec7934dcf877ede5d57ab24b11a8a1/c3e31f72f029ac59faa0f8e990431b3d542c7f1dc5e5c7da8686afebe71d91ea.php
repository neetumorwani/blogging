<?php

/* themes/blogging/templates/misc/feed-icon.html.twig */
class __TwigTemplate_8e023f7025f726c60ed9194212891244d7ede810250d81ddaed4dedea0dabef6 extends Twig_Template
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
        $filters = array("t" => 37);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('t'),
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

        // line 22
        echo "<a href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
        echo "\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => "feed-icon"), "method"), "html", null, true));
        echo ">
  <svg version=\"1.1\" class=\"feed-icon-rss\" xmlns=\"http://www.w3.org/2000/svg\" width=\"100%\" height=\"100%\" viewBox=\"0 0 20 20\">
    <g>
    \t<path class=\"feed-icon-rss__path\" d=\"M2.7,14.5c-0.8,0-1.4,0.3-1.9,0.8C0.3,15.9,0,16.5,0,17.3c0,0.8,0.3,1.4,0.8,1.9
    \t\tC1.3,19.7,2,20,2.7,20s1.4-0.3,1.9-0.8c0.5-0.5,0.8-1.2,0.8-1.9c0-0.8-0.3-1.4-0.8-1.9C4.1,14.8,3.5,14.5,2.7,14.5z\"/>
    \t<path class=\"feed-icon-rss__path\" d=\"M9,11C7.9,9.9,6.7,9.1,5.3,8.4C3.9,7.8,2.5,7.4,1,7.3H0.9c-0.2,0-0.4,0.1-0.6,0.2
    \t\tC0.1,7.7,0,7.9,0,8.2v1.9c0,0.2,0.1,0.4,0.2,0.6C0.4,10.9,0.6,11,0.8,11c2.2,0.2,4,1.1,5.6,2.6C7.9,15.2,8.8,17,9,19.2
    \t\tc0,0.2,0.1,0.4,0.3,0.6C9.5,19.9,9.7,20,9.9,20h1.9c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.2-0.7c-0.1-1.5-0.5-3-1.1-4.3
    \t\tC10.9,13.3,10.1,12.1,9,11z\"/>
    \t<path class=\"feed-icon-rss__path\" d=\"M18.3,11.9c-1-2.3-2.4-4.3-4.2-6c-1.8-1.8-3.8-3.2-6-4.2C5.8,0.7,3.4,0.1,1,0h0
    \t\tC0.7,0,0.5,0.1,0.3,0.3C0.1,0.4,0,0.6,0,0.9v2c0,0.2,0.1,0.4,0.2,0.6s0.4,0.3,0.6,0.3c2,0.1,4,0.6,5.8,1.4s3.4,1.9,4.8,3.3
    \t\tc1.3,1.3,2.4,2.9,3.3,4.8c0.8,1.8,1.3,3.8,1.4,5.8c0,0.2,0.1,0.4,0.3,0.6c0.2,0.2,0.4,0.2,0.6,0.2h2c0.3,0,0.5-0.1,0.7-0.3
    \t\tc0.2-0.2,0.3-0.4,0.3-0.7C19.9,16.6,19.3,14.2,18.3,11.9z\"/>
    </g>
  </svg>
  <span class=\"visually-hidden\">";
        // line 37
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Subscribe to @title", array("@title" => (isset($context["title"]) ? $context["title"] : null)))));
        echo "</span>
</a>
";
    }

    public function getTemplateName()
    {
        return "themes/blogging/templates/misc/feed-icon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 37,  43 => 22,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Adaptivetheme implementation for a feed icon.*/
/*  **/
/*  * AT embeds an SVG icon directly into the template which allows greater*/
/*  * control over the image in CSS. Set the width and height on the SVG element*/
/*  * or on the container, e.g. the <a> element.*/
/*  **/
/*  * Available variables:*/
/*  * - url: An internal system path or a fully qualified external URL of the feed.*/
/*  * - icon: The rendered HTML (<img> tag) for the default system feed icon image.*/
/*  * - attributes: Remaining HTML attributes for the feed link.*/
/*  *   - title: A descriptive title of the feed link.*/
/*  *   - class: HTML classes to be applied to the feed link.*/
/*  **/
/*  * @see template_preprocess_feed_icon()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <a href="{{ url }}"{{ attributes.addClass('feed-icon') }}>*/
/*   <svg version="1.1" class="feed-icon-rss" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 20 20">*/
/*     <g>*/
/*     	<path class="feed-icon-rss__path" d="M2.7,14.5c-0.8,0-1.4,0.3-1.9,0.8C0.3,15.9,0,16.5,0,17.3c0,0.8,0.3,1.4,0.8,1.9*/
/*     		C1.3,19.7,2,20,2.7,20s1.4-0.3,1.9-0.8c0.5-0.5,0.8-1.2,0.8-1.9c0-0.8-0.3-1.4-0.8-1.9C4.1,14.8,3.5,14.5,2.7,14.5z"/>*/
/*     	<path class="feed-icon-rss__path" d="M9,11C7.9,9.9,6.7,9.1,5.3,8.4C3.9,7.8,2.5,7.4,1,7.3H0.9c-0.2,0-0.4,0.1-0.6,0.2*/
/*     		C0.1,7.7,0,7.9,0,8.2v1.9c0,0.2,0.1,0.4,0.2,0.6C0.4,10.9,0.6,11,0.8,11c2.2,0.2,4,1.1,5.6,2.6C7.9,15.2,8.8,17,9,19.2*/
/*     		c0,0.2,0.1,0.4,0.3,0.6C9.5,19.9,9.7,20,9.9,20h1.9c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.2-0.7c-0.1-1.5-0.5-3-1.1-4.3*/
/*     		C10.9,13.3,10.1,12.1,9,11z"/>*/
/*     	<path class="feed-icon-rss__path" d="M18.3,11.9c-1-2.3-2.4-4.3-4.2-6c-1.8-1.8-3.8-3.2-6-4.2C5.8,0.7,3.4,0.1,1,0h0*/
/*     		C0.7,0,0.5,0.1,0.3,0.3C0.1,0.4,0,0.6,0,0.9v2c0,0.2,0.1,0.4,0.2,0.6s0.4,0.3,0.6,0.3c2,0.1,4,0.6,5.8,1.4s3.4,1.9,4.8,3.3*/
/*     		c1.3,1.3,2.4,2.9,3.3,4.8c0.8,1.8,1.3,3.8,1.4,5.8c0,0.2,0.1,0.4,0.3,0.6c0.2,0.2,0.4,0.2,0.6,0.2h2c0.3,0,0.5-0.1,0.7-0.3*/
/*     		c0.2-0.2,0.3-0.4,0.3-0.7C19.9,16.6,19.3,14.2,18.3,11.9z"/>*/
/*     </g>*/
/*   </svg>*/
/*   <span class="visually-hidden">{{ 'Subscribe to @title'|t({'@title': title}) }}</span>*/
/* </a>*/
/* */
