<?php

/* themes/blogging/templates/navigation/menu.html.twig */
class __TwigTemplate_8dedd18b6251715133dc9966ca61bc9a871cdb7ea641a5d5a3fe693b4d5d9799 extends Twig_Template
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
        $tags = array("import" => 21, "macro" => 29, "if" => 31, "set" => 34, "for" => 45, "spaceless" => 54);
        $filters = array("clean_class" => 38);
        $functions = array("cycle" => 43, "link" => 56);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'set', 'for', 'spaceless'),
                array('clean_class'),
                array('cycle', 'link')
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

        // line 21
        $context["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0)));
        echo "

";
    }

    // line 29
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 30
            echo "  ";
            $context["menus"] = $this;
            // line 31
            echo "  ";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 32
                echo "    ";
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 33
                    echo "      ";
                    // line 34
                    $context["menu_classes"] = array(0 => "menu", 1 => "odd", 2 => "menu-level-1", 3 => ((                    // line 38
(isset($context["menu_name"]) ? $context["menu_name"] : null)) ? (("menu-name--" . \Drupal\Component\Utility\Html::getClass((isset($context["menu_name"]) ? $context["menu_name"] : null)))) : ("")));
                    // line 41
                    echo "      <ul";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["menu_classes"]) ? $context["menu_classes"] : null)), "method"), "html", null, true));
                    echo ">
    ";
                } else {
                    // line 43
                    echo "      <ul class=\"menu ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), (isset($context["menu_level"]) ? $context["menu_level"] : null)), "html", null, true));
                    echo " ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ("menu-level-" . ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1)), "html", null, true));
                    echo "\">
    ";
                }
                // line 45
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 46
                    echo "        ";
                    // line 47
                    $context["item_classes"] = array(0 => "menu__item", 1 => (($this->getAttribute(                    // line 49
$context["item"], "is_expanded", array())) ? ("menu__item--expanded") : ("")), 2 => (($this->getAttribute(                    // line 50
$context["item"], "is_collapsed", array())) ? ("menu__item--collapsed") : ("")), 3 => (($this->getAttribute(                    // line 51
$context["item"], "in_active_trail", array())) ? ("menu__item--active-trail") : ("")));
                    // line 54
                    echo "        ";
                    ob_start();
                    // line 55
                    echo "          <li";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["item_classes"]) ? $context["item_classes"] : null)), "method"), "html", null, true));
                    echo ">
            ";
                    // line 56
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array()), array("class" => array(0 => "menu__link"))), "html", null, true));
                    echo "
            ";
                    // line 57
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 58
                        echo "              ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), (isset($context["attributes"]) ? $context["attributes"] : null), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1))));
                        echo "
            ";
                    }
                    // line 60
                    echo "          </li>
        ";
                    echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                    // line 62
                    echo "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "    </ul>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/blogging/templates/navigation/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 63,  133 => 62,  129 => 60,  123 => 58,  121 => 57,  117 => 56,  112 => 55,  109 => 54,  107 => 51,  106 => 50,  105 => 49,  104 => 47,  102 => 46,  97 => 45,  89 => 43,  83 => 41,  81 => 38,  80 => 34,  78 => 33,  75 => 32,  72 => 31,  69 => 30,  55 => 29,  48 => 27,  45 => 22,  43 => 21,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Adaptivetheme implementation to display a menu.*/
/*  * AT adds extra classes including menu-level, and odd*/
/*  * even classes for granular theming of nested menus where*/
/*  * nth-child() or other pseudo classes are tricky.*/
/*  **/
/*  * Available variables:*/
/*  * - menu_name: The machine name of the menu.*/
/*  * - items: A nested list of menu items. Each menu item contains:*/
/*  *   - attributes: HTML attributes for the menu item.*/
/*  *   - below: The menu item child items.*/
/*  *   - title: The menu link title.*/
/*  *   - url: The menu link url, instance of \Drupal\Core\Url*/
/*  *   - localized_options: Menu link localized options.*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% import _self as menus %}*/
/* */
/* {#*/
/*   We call a macro which calls itself to render the full tree.*/
/*   @see http://twig.sensiolabs.org/doc/tags/macro.html*/
/* #}*/
/* {{ menus.menu_links(items, attributes, 0) }}*/
/* */
/* {% macro menu_links(items, attributes, menu_level) %}*/
/*   {% import _self as menus %}*/
/*   {% if items %}*/
/*     {% if menu_level == 0 %}*/
/*       {%*/
/*         set menu_classes = [*/
/*           'menu',*/
/*           'odd',*/
/*           'menu-level-1',*/
/*           menu_name ? 'menu-name--' ~ menu_name|clean_class,*/
/*         ]*/
/*       %}*/
/*       <ul{{ attributes.addClass(menu_classes) }}>*/
/*     {% else %}*/
/*       <ul class="menu {{ cycle(["odd", "even"], menu_level) }} {{ 'menu-level-' ~ (menu_level + 1) }}">*/
/*     {% endif %}*/
/*       {% for item in items %}*/
/*         {%*/
/*           set item_classes = [*/
/*             'menu__item',*/
/*             item.is_expanded ? 'menu__item--expanded',*/
/*             item.is_collapsed ? 'menu__item--collapsed',*/
/*             item.in_active_trail ? 'menu__item--active-trail',*/
/*           ]*/
/*         %}*/
/*         {% spaceless %}*/
/*           <li{{ item.attributes.addClass(item_classes) }}>*/
/*             {{ link(item.title, item.url, { 'class':['menu__link']} ) }}*/
/*             {% if item.below %}*/
/*               {{ menus.menu_links(item.below, attributes, menu_level + 1) }}*/
/*             {% endif %}*/
/*           </li>*/
/*         {% endspaceless %}*/
/*       {% endfor %}*/
/*     </ul>*/
/*   {% endif %}*/
/* {% endmacro %}*/
/* */
