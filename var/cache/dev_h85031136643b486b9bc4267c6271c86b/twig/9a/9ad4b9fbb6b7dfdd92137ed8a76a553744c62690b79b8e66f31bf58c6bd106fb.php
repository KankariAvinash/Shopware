<?php

use Twig\Environment;
use function Shopware\Core\Framework\Adapter\Twig\sw_get_attribute;
use function Shopware\Core\Framework\Adapter\Twig\sw_escape_filter;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Storefront/storefront/utilities/icon.html.twig */
class __TwigTemplate_b01818b4b03474b409b355c98519a017 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'utilities_icon' => [$this, 'block_utilities_icon'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/utilities/icon.html.twig"));

        // line 1
        $this->displayBlock('utilities_icon', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_utilities_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_icon"));

        // line 2
        $context["styles"] = [($context["size"] ?? null), ($context["color"] ?? null), ($context["rotation"] ?? null), ($context["flip"] ?? null), ($context["class"] ?? null)];
        // line 4
        if ( !array_key_exists("pack", $context)) {
            // line 5
            $context["pack"] = "default";
        }
        // line 8
        if ( !array_key_exists("namespace", $context)) {
            // line 9
            $context["namespace"] = "Storefront";
        }
        // line 12
        if (sw_get_attribute($this->env, $this->source, ($context["themeIconConfig"] ?? null), ($context["pack"] ?? null), [], "array", true, true, false, 12)) {
            // line 13
            echo "<span class=\"icon icon-";
            echo sw_escape_filter($this->env, ($context["pack"] ?? null), "html", null, true);
            echo " icon-";
            echo sw_escape_filter($this->env, ($context["pack"] ?? null), "html", null, true);
            echo "-";
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                if (($context["entry"] != "")) {
                    echo " icon-";
                    echo sw_escape_filter($this->env, $context["entry"], "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\">
            ";
            // line 14
            $context["icon"] = twig_source($this->env, (((((("@" . sw_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["themeIconConfig"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["pack"] ?? null)] ?? null) : null), "namespace", [], "any", false, false, false, 14)) . "/") . sw_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["themeIconConfig"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["pack"] ?? null)] ?? null) : null), "path", [], "any", false, false, false, 14)) . "/") . ($context["name"] ?? null)) . ".svg"), true);
            // line 15
            echo "            ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\IconCacheTwigFilter']->iconCache(($context["icon"] ?? null));
            echo "
        </span>";
        } else {
            // line 18
            echo "<span class=\"icon icon-";
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                if (($context["entry"] != "")) {
                    echo " icon-";
                    echo sw_escape_filter($this->env, $context["entry"], "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\">
            ";
            // line 19
            $context["icon"] = twig_source($this->env, (((((("@" . ($context["namespace"] ?? null)) . "/assets/icon/") . ($context["pack"] ?? null)) . "/") . ($context["name"] ?? null)) . ".svg"), true);
            // line 20
            echo "            ";
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\IconCacheTwigFilter']->iconCache(($context["icon"] ?? null));
            echo "
        </span>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/utilities/icon.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  114 => 20,  112 => 19,  96 => 18,  90 => 15,  88 => 14,  68 => 13,  66 => 12,  63 => 9,  61 => 8,  58 => 5,  56 => 4,  54 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- block utilities_icon -%}
    {% set styles = [ size, color, rotation, flip, class ] %}

    {%- if pack is not defined -%}
        {% set pack = 'default' %}
    {%- endif -%}

    {%- if namespace is not defined -%}
        {% set namespace = 'Storefront' %}
    {%- endif -%}

    {%- if themeIconConfig[pack] is defined -%}
        <span class=\"icon icon-{{ pack }} icon-{{ pack }}-{{ name }}{% for entry in styles %}{% if entry != \"\" %} icon-{{ entry }}{% endif %}{% endfor %}\">
            {% set icon = source('@' ~ themeIconConfig[pack].namespace ~ '/' ~ themeIconConfig[pack].path ~'/'~ name ~ '.svg', ignore_missing = true) %}
            {{ icon|sw_icon_cache|raw }}
        </span>
    {%- else -%}
        <span class=\"icon icon-{{ name }}{% for entry in styles %}{% if entry != \"\" %} icon-{{ entry }}{% endif %}{% endfor %}\">
            {% set icon = source('@' ~ namespace ~ '/assets/icon/'~ pack ~'/'~ name ~'.svg', ignore_missing = true) %}
            {{ icon|sw_icon_cache|raw }}
        </span>
    {%- endif -%}
{%- endblock -%}
", "@Storefront/storefront/utilities/icon.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/utilities/icon.html.twig");
    }
}
