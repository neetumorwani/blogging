<?php

/* themes/blogging/templates/dataset/social-media-links-platforms.html.twig */
class __TwigTemplate_01b8358fb6cee9221242d6b0c93b35a5b54a9cf78126779fb50a61cfe30105bf extends Twig_Template
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
        $tags = array("set" => 7, "for" => 13, "if" => 17);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'for', 'if'),
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

        // line 7
        $context["classes"] = array(0 => "platforms", 1 => ((($this->getAttribute(        // line 9
(isset($context["appearance"]) ? $context["appearance"] : null), "orientation", array()) == "h")) ? ("inline is-horizontal") : ("is-vertical")));
        // line 12
        echo "<ul";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["platforms"]) ? $context["platforms"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["platform"]) {
            // line 14
            echo "    <li class=\"platform\">
      <a href=\"";
            // line 15
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["platform"], "url", array()), "html", null, true));
            echo "\" ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["link_attributes"]) ? $context["link_attributes"] : null), "addClass", array(0 => "platform__link"), "method"), "html", null, true));
            echo ">
        ";
            // line 16
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["platform"], "element", array()), "html", null, true));
            echo "
        ";
            // line 17
            if ($this->getAttribute((isset($context["appearance"]) ? $context["appearance"] : null), "show_name", array())) {
                // line 18
                echo "          <span class=\"platform__name\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["platform"], "name", array()), "html", null, true));
                echo "</span>
        ";
            }
            // line 20
            echo "      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['platform'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "themes/blogging/templates/dataset/social-media-links-platforms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 23,  76 => 20,  70 => 18,  68 => 17,  64 => 16,  58 => 15,  55 => 14,  51 => 13,  46 => 12,  44 => 9,  43 => 7,);
    }
}
/* {#*/
/* /***/
/*  * Social Media Links module template.*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'platforms',*/
/*     appearance.orientation == 'h' ? 'inline is-horizontal' : 'is-vertical',*/
/*   ]*/
/* %}*/
/* <ul{{ attributes.addClass(classes) }}>*/
/*   {% for platform in platforms %}*/
/*     <li class="platform">*/
/*       <a href="{{ platform.url }}" {{ link_attributes.addClass('platform__link') }}>*/
/*         {{ platform.element }}*/
/*         {% if appearance.show_name %}*/
/*           <span class="platform__name">{{ platform.name }}</span>*/
/*         {% endif %}*/
/*       </a>*/
/*     </li>*/
/*   {% endfor %}*/
/* </ul>*/
/* */
