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
class __TwigTemplate_febe23644d7dbbd6c147a65b6f1c0657 extends Template
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
        // line 1
        $this->displayBlock('layout_breadcrumb_inner', $context, $blocks);
    }

    public function block_layout_breadcrumb_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 10
    public function block_layout_breadcrumb_list($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 18
    public function block_layout_breadcrumb_list_item($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 43
    public function block_layout_breadcrumb_placeholder($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  232 => 49,  228 => 47,  220 => 46,  217 => 45,  214 => 44,  210 => 43,  202 => 39,  196 => 36,  192 => 35,  188 => 33,  184 => 32,  180 => 31,  174 => 30,  169 => 29,  163 => 26,  160 => 25,  158 => 24,  153 => 21,  149 => 20,  146 => 19,  142 => 18,  137 => 51,  123 => 50,  121 => 43,  118 => 42,  116 => 18,  113 => 17,  110 => 16,  107 => 15,  90 => 14,  85 => 11,  81 => 10,  76 => 55,  72 => 53,  70 => 10,  67 => 9,  65 => 8,  62 => 7,  60 => 6,  57 => 5,  54 => 4,  51 => 3,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/breadcrumb.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/layout/breadcrumb.html.twig");
    }
}
