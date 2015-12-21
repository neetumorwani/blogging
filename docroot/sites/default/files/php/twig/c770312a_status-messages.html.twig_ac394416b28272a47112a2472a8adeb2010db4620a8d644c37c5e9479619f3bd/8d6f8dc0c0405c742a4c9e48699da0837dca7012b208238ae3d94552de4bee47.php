<?php

/* themes/blogging/templates/layout/status-messages.html.twig */
class __TwigTemplate_db597c96ff69df64b3defe923f2f8d7d5ab986ac844327660c22dd41fc6324a5 extends Twig_Template
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
        $tags = array("for" => 28, "set" => 30, "if" => 37);
        $filters = array("length" => 45, "first" => 52);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'set', 'if'),
                array('length', 'first'),
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["message_list"]) ? $context["message_list"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 29
            echo "  ";
            // line 30
            $context["classes"] = array(0 => "messages", 1 => ("messages--" .             // line 32
$context["type"]));
            // line 35
            echo "  <div class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "class", array()), "html", null, true));
            echo "\" role=\"contentinfo\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true));
            echo "\">

    <div class=\"messages__container\"";
            // line 37
            if (($context["type"] == "error")) {
                echo " role=\"alert\"";
            }
            echo ">

      ";
            // line 39
            if ($this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array")) {
                // line 40
                echo "        <h2 class=\"visually-hidden\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["status_headings"]) ? $context["status_headings"] : null), $context["type"], array(), "array"), "html", null, true));
                echo "</h2>
      ";
            }
            // line 42
            echo "
      <span class=\"icon icon-";
            // line 43
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["type"], "html", null, true));
            echo "\" aria-hidden=\"true\"></span>

      ";
            // line 45
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 46
                echo "        <ul class=\"messages__list\">
          ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 48
                    echo "            <li class=\"messages__item\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["message"], "html", null, true));
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "        </ul>
      ";
            } else {
                // line 52
                echo "        <div class=\"messages__list\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_first($this->env, $context["messages"]), "html", null, true));
                echo "</div>
      ";
            }
            // line 54
            echo "
    </div>

  </div>
  ";
            // line 59
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "removeClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/blogging/templates/layout/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 59,  111 => 54,  105 => 52,  101 => 50,  92 => 48,  88 => 47,  85 => 46,  83 => 45,  78 => 43,  75 => 42,  69 => 40,  67 => 39,  60 => 37,  52 => 35,  50 => 32,  49 => 30,  47 => 29,  43 => 28,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for status messages.*/
/*  **/
/*  * Displays status, error, and warning messages, grouped by type.*/
/*  **/
/*  * An invisible heading identifies the messages for assistive technology.*/
/*  * Sighted users see a colored box. See http://www.w3.org/TR/WCAG-TECHS/H69.html*/
/*  * for info.*/
/*  **/
/*  * Add an ARIA label to the contentinfo area so that assistive technology*/
/*  * user agents will better describe this landmark.*/
/*  **/
/*  * Available variables:*/
/*  * - message_list: List of messages to be displayed, grouped by type.*/
/*  * - status_headings: List of all status types.*/
/*  * - display: (optional) May have a value of 'status' or 'error' when only*/
/*  *   displaying messages of that specific type.*/
/*  * - attributes: HTML attributes for the element, including:*/
/*  *   - class: HTML classes.*/
/*  **/
/*  * @see template_preprocess_status_messages()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% for type, messages in message_list %}*/
/*   {%*/
/*     set classes = [*/
/*       'messages',*/
/*       'messages--' ~ type,*/
/*     ]*/
/*   %}*/
/*   <div class="{{ attributes.addClass(classes).class }}" role="contentinfo" aria-label="{{ status_headings[type] }}">*/
/* */
/*     <div class="messages__container"{% if type == 'error' %} role="alert"{% endif %}>*/
/* */
/*       {% if status_headings[type] %}*/
/*         <h2 class="visually-hidden">{{ status_headings[type] }}</h2>*/
/*       {% endif %}*/
/* */
/*       <span class="icon icon-{{ type }}" aria-hidden="true"></span>*/
/* */
/*       {% if messages|length > 1 %}*/
/*         <ul class="messages__list">*/
/*           {% for message in messages %}*/
/*             <li class="messages__item">{{ message }}</li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       {% else %}*/
/*         <div class="messages__list">{{ messages|first }}</div>*/
/*       {% endif %}*/
/* */
/*     </div>*/
/* */
/*   </div>*/
/*   {# Remove type specific classes. #}*/
/*   {{ attributes.removeClass(classes) }}*/
/* {% endfor %}*/
/* */
