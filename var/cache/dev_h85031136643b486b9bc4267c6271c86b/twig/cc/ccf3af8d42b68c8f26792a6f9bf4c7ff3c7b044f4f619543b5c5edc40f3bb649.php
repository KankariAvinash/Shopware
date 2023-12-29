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

/* @Storefront/storefront/layout/breadcrumb.html.twig */
class __TwigTemplate_a6b2e4aed907d39ea55351d062769b7a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_breadcrumb_inner' => [$this, 'block_layout_breadcrumb_inner'],
            'layout_breadcrumb_list' => [$this, 'block_layout_breadcrumb_list'],
            'layout_breadcrumb_list_item' => [$this, 'block_layout_breadcrumb_list_item'],
            'layout_breadcrumb_placeholder' => [$this, 'block_layout_breadcrumb_placeholder'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/breadcrumb.html.twig"));

        // line 1
        $this->displayBlock('layout_breadcrumb_inner', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_layout_breadcrumb_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_inner"));

        // line 2
        echo "    ";
        if (($context["category"] ?? null)) {
            // line 3
            echo "        ";
            $context["breadcrumbCategories"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\BuildBreadcrumbExtension']->getFullBreadcrumb($context, ($context["category"] ?? null), sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "context", [], "any", false, false, false, 3));
            // line 4
            echo "        ";
            $context["categoryId"] = sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 4);
            // line 5
            echo "
        ";
            // line 6
            $context["breadcrumbKeys"] = twig_get_array_keys_filter(($context["breadcrumbCategories"] ?? null));
            // line 7
            echo "
        ";
            // line 8
            if ((twig_length_filter($this->env, ($context["breadcrumbCategories"] ?? null)) > 0)) {
                // line 9
                echo "            <nav aria-label=\"breadcrumb\">
                ";
                // line 10
                $this->displayBlock('layout_breadcrumb_list', $context, $blocks);
                // line 53
                echo "            </nav>
        ";
            }
            // line 55
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_layout_breadcrumb_list($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_list"));

        // line 11
        echo "                    <ol class=\"breadcrumb\"
                        itemscope
                        itemtype=\"https://schema.org/BreadcrumbList\">
                        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbCategories"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumbCategory"]) {
            // line 15
            echo "                            ";
            $context["key"] = sw_get_attribute($this->env, $this->source, $context["breadcrumbCategory"], "id", [], "any", false, false, false, 15);
            // line 16
            echo "                            ";
            $context["name"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["breadcrumbCategory"], "translated", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16);
            // line 17
            echo "
                            ";
            // line 18
            $this->displayBlock('layout_breadcrumb_list_item', $context, $blocks);
            // line 42
            echo "
                            ";
            // line 43
            $this->displayBlock('layout_breadcrumb_placeholder', $context, $blocks);
            // line 50
            echo "                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumbCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                    </ol>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 18
    public function block_layout_breadcrumb_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_list_item"));

        // line 19
        echo "                                <li class=\"breadcrumb-item\"
                                    ";
        // line 20
        if ((($context["key"] ?? null) === ($context["categoryId"] ?? null))) {
            echo "aria-current=\"page\"";
        }
        // line 21
        echo "                                    itemprop=\"itemListElement\"
                                    itemscope
                                    itemtype=\"https://schema.org/ListItem\">
                                    ";
        // line 24
        if ((sw_get_attribute($this->env, $this->source, ($context["breadcrumbCategory"] ?? null), "type", [], "any", false, false, false, 24) == "folder")) {
            // line 25
            echo "                                        <div itemprop=\"item\">
                                            <div itemprop=\"name\">";
            // line 26
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</div>
                                        </div>
                                    ";
        } else {
            // line 29
            echo "                                        <a href=\"";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, ($context["breadcrumbCategory"] ?? null));
            echo "\"
                                           class=\"breadcrumb-link ";
            // line 30
            if ((($context["key"] ?? null) === ($context["categoryId"] ?? null))) {
                echo " is-active";
            }
            echo "\"
                                           title=\"";
            // line 31
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"
                                           ";
            // line 32
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(($context["breadcrumbCategory"] ?? null))) {
                echo "target=\"_blank\"";
            }
            // line 33
            echo "                                           itemprop=\"item\">
                                            <link itemprop=\"url\"
                                                  href=\"";
            // line 35
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, ($context["breadcrumbCategory"] ?? null));
            echo "\">
                                            <span class=\"breadcrumb-title\" itemprop=\"name\">";
            // line 36
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</span>
                                        </a>
                                    ";
        }
        // line 39
        echo "                                    <meta itemprop=\"position\" content=\"";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 39), "html", null, true);
        echo "\">
                                </li>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 43
    public function block_layout_breadcrumb_placeholder($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_breadcrumb_placeholder"));

        // line 44
        echo "                                ";
        if ((($context["key"] ?? null) != twig_last($this->env, ($context["breadcrumbKeys"] ?? null)))) {
            // line 45
            echo "                                    <div class=\"breadcrumb-placeholder\">
                                        ";
            // line 46
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/breadcrumb.html.twig", 46);
            })())->display(twig_array_merge($context, ["size" => "fluid", "pack" => "solid", "name" => "arrow-medium-right"]));
            // line 47
            echo "                                    </div>
                                ";
        }
        // line 49
        echo "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/breadcrumb.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  259 => 49,  255 => 47,  247 => 46,  244 => 45,  241 => 44,  234 => 43,  223 => 39,  217 => 36,  213 => 35,  209 => 33,  205 => 32,  201 => 31,  195 => 30,  190 => 29,  184 => 26,  181 => 25,  179 => 24,  174 => 21,  170 => 20,  167 => 19,  160 => 18,  152 => 51,  138 => 50,  136 => 43,  133 => 42,  131 => 18,  128 => 17,  125 => 16,  122 => 15,  105 => 14,  100 => 11,  93 => 10,  85 => 55,  81 => 53,  79 => 10,  76 => 9,  74 => 8,  71 => 7,  69 => 6,  66 => 5,  63 => 4,  60 => 3,  57 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_breadcrumb_inner %}
    {% if category %}
        {% set breadcrumbCategories = sw_breadcrumb_full(category, context.context) %}
        {% set categoryId = category.id %}

        {% set breadcrumbKeys = breadcrumbCategories|keys %}

        {% if breadcrumbCategories|length > 0 %}
            <nav aria-label=\"breadcrumb\">
                {% block layout_breadcrumb_list %}
                    <ol class=\"breadcrumb\"
                        itemscope
                        itemtype=\"https://schema.org/BreadcrumbList\">
                        {% for breadcrumbCategory in breadcrumbCategories %}
                            {% set key = breadcrumbCategory.id %}
                            {% set name = breadcrumbCategory.translated.name %}

                            {% block layout_breadcrumb_list_item %}
                                <li class=\"breadcrumb-item\"
                                    {% if key is same as(categoryId) %}aria-current=\"page\"{% endif %}
                                    itemprop=\"itemListElement\"
                                    itemscope
                                    itemtype=\"https://schema.org/ListItem\">
                                    {% if breadcrumbCategory.type == 'folder' %}
                                        <div itemprop=\"item\">
                                            <div itemprop=\"name\">{{ name }}</div>
                                        </div>
                                    {% else %}
                                        <a href=\"{{ category_url(breadcrumbCategory) }}\"
                                           class=\"breadcrumb-link {% if key is same as(categoryId) %} is-active{% endif %}\"
                                           title=\"{{ name }}\"
                                           {% if category_linknewtab(breadcrumbCategory) %}target=\"_blank\"{% endif %}
                                           itemprop=\"item\">
                                            <link itemprop=\"url\"
                                                  href=\"{{ category_url(breadcrumbCategory) }}\">
                                            <span class=\"breadcrumb-title\" itemprop=\"name\">{{ name }}</span>
                                        </a>
                                    {% endif %}
                                    <meta itemprop=\"position\" content=\"{{ loop.index }}\">
                                </li>
                            {% endblock %}

                            {% block layout_breadcrumb_placeholder %}
                                {% if key != breadcrumbKeys|last %}
                                    <div class=\"breadcrumb-placeholder\">
                                        {% sw_icon 'arrow-medium-right' style { 'size': 'fluid', 'pack': 'solid'} %}
                                    </div>
                                {% endif %}
                            {% endblock %}
                        {% endfor %}
                    </ol>
                {% endblock %}
            </nav>
        {% endif %}
    {% endif %}
{% endblock %}
", "@Storefront/storefront/layout/breadcrumb.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/layout/breadcrumb.html.twig");
    }
}
