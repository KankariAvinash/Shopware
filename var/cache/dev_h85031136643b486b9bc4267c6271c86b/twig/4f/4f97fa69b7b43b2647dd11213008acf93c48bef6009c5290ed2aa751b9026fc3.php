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

/* @Storefront/storefront/layout/navigation/navigation.html.twig */
class __TwigTemplate_9496c20555763e87924864e755d6aaa4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_main_navigation' => [$this, 'block_layout_main_navigation'],
            'layout_main_navigation_navbar' => [$this, 'block_layout_main_navigation_navbar'],
            'layout_main_navigation_menu' => [$this, 'block_layout_main_navigation_menu'],
            'layout_main_navigation_menu_home' => [$this, 'block_layout_main_navigation_menu_home'],
            'layout_main_navigation_menu_items' => [$this, 'block_layout_main_navigation_menu_items'],
            'layout_main_navigation_menu_item' => [$this, 'block_layout_main_navigation_menu_item'],
            'layout_main_navigation_menu_flyout_wrapper' => [$this, 'block_layout_main_navigation_menu_flyout_wrapper'],
            'layout_main_navigation_menu_flyout_container' => [$this, 'block_layout_main_navigation_menu_flyout_container'],
            'layout_main_navigation_menu_flyouts' => [$this, 'block_layout_main_navigation_menu_flyouts'],
            'layout_main_navigation_menu_flyout' => [$this, 'block_layout_main_navigation_menu_flyout'],
            'layout_main_navigation_menu_flyout_include' => [$this, 'block_layout_main_navigation_menu_flyout_include'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/navigation/navigation.html.twig"));

        // line 1
        $this->displayBlock('layout_main_navigation', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_layout_main_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation"));

        // line 2
        echo "    <div class=\"main-navigation\"
         id=\"mainNavigation\"
         data-flyout-menu=\"true\">
        ";
        // line 5
        $this->displayBlock('layout_main_navigation_navbar', $context, $blocks);
        // line 63
        echo "
        ";
        // line 64
        $this->displayBlock('layout_main_navigation_menu_flyout_wrapper', $context, $blocks);
        // line 100
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_layout_main_navigation_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_navbar"));

        // line 6
        echo "            <div class=\"container\">
                ";
        // line 7
        $this->displayBlock('layout_main_navigation_menu', $context, $blocks);
        // line 61
        echo "            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_layout_main_navigation_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu"));

        // line 8
        echo "                    <nav class=\"nav main-navigation-menu\"
                        itemscope=\"itemscope\"
                        itemtype=\"http://schema.org/SiteNavigationElement\">
                        ";
        // line 11
        $context["homeLabel"] = ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, true, false, 11), "translated", [], "any", false, true, false, 11), "homeName", [], "any", true, true, false, 11)) ? (_twig_default_filter(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, true, false, 11), "translated", [], "any", false, true, false, 11), "homeName", [], "any", false, false, false, 11), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.homeLink"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.homeLink")));
        // line 12
        echo "
                        ";
        // line 13
        $this->displayBlock('layout_main_navigation_menu_home', $context, $blocks);
        // line 25
        echo "
                        ";
        // line 26
        $this->displayBlock('layout_main_navigation_menu_items', $context, $blocks);
        // line 59
        echo "                    </nav>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_layout_main_navigation_menu_home($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_home"));

        // line 14
        echo "                            ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 14), "translated", [], "any", false, false, false, 14), "homeEnabled", [], "any", false, false, false, 14)) {
            // line 15
            echo "                                <a class=\"nav-link main-navigation-link";
            if ((($context["controllerAction"] ?? null) === "home")) {
                echo " active";
            }
            echo " home-link\"
                                    href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.home.page");
            echo "\"
                                    itemprop=\"url\"
                                    title=\"";
            // line 18
            echo sw_escape_filter($this->env, twig_striptags(($context["homeLabel"] ?? null)), "html", null, true);
            echo "\">
                                    <div class=\"main-navigation-link-text\">
                                        <span itemprop=\"name\">";
            // line 20
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize(($context["homeLabel"] ?? null));
            echo "</span>
                                    </div>
                                </a>
                            ";
        }
        // line 24
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 26
    public function block_layout_main_navigation_menu_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_items"));

        // line 27
        echo "                            ";
        $context["activePath"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 27), "navigation", [], "any", false, false, false, 27), "active", [], "any", false, false, false, 27), "path", [], "any", false, false, false, 27);
        // line 28
        echo "
                            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 29), "navigation", [], "any", false, false, false, 29), "tree", [], "any", false, false, false, 29));
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
        foreach ($context['_seq'] as $context["_key"] => $context["treeItem"]) {
            // line 30
            echo "                                ";
            $context["category"] = sw_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 30);
            // line 31
            echo "                                ";
            $context["name"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "translated", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31);
            // line 32
            echo "
                                ";
            // line 33
            $this->displayBlock('layout_main_navigation_menu_item', $context, $blocks);
            // line 57
            echo "                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['treeItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 33
    public function block_layout_main_navigation_menu_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_item"));

        // line 34
        echo "                                    ";
        if ((sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "type", [], "any", false, false, false, 34) == "folder")) {
            // line 35
            echo "                                        <div class=\"nav-link main-navigation-link\"
                                            ";
            // line 36
            if ((twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "children", [], "any", false, false, false, 36)) > 0)) {
                // line 37
                echo "                                                data-flyout-menu-trigger=\"";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 37), "html", null, true);
                echo "\"
                                            ";
            }
            // line 39
            echo "                                              title=\"";
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
                                            <div class=\"main-navigation-link-text\">
                                                <span itemprop=\"name\">";
            // line 41
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</span>
                                            </div>
                                        </div>
                                    ";
        } else {
            // line 45
            echo "                                        <a class=\"nav-link main-navigation-link";
            if (((sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 45) == sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 45), "navigation", [], "any", false, false, false, 45), "active", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45)) || twig_in_filter(sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 45), ($context["activePath"] ?? null)))) {
                echo " active";
            }
            echo "\"
                                           href=\"";
            // line 46
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, ($context["category"] ?? null));
            echo "\"
                                           itemprop=\"url\"
                                           ";
            // line 48
            if ((twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "children", [], "any", false, false, false, 48)) > 0)) {
                echo "data-flyout-menu-trigger=\"";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", [], "any", false, false, false, 48), "html", null, true);
                echo "\"";
            }
            // line 49
            echo "                                           ";
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(($context["category"] ?? null))) {
                echo "target=\"_blank\"";
            }
            // line 50
            echo "                                           title=\"";
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
                                            <div class=\"main-navigation-link-text\">
                                                <span itemprop=\"name\">";
            // line 52
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</span>
                                            </div>
                                        </a>
                                    ";
        }
        // line 56
        echo "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 64
    public function block_layout_main_navigation_menu_flyout_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_flyout_wrapper"));

        // line 65
        echo "            ";
        $context["navigationChildrenCount"] = 0;
        // line 66
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 66), "navigation", [], "any", false, false, false, 66), "tree", [], "any", false, false, false, 66));
        foreach ($context['_seq'] as $context["_key"] => $context["treeItem"]) {
            // line 67
            echo "                ";
            if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 67), "childCount", [], "any", false, false, false, 67) > 0)) {
                // line 68
                echo "                    ";
                $context["navigationChildrenCount"] = (($context["navigationChildrenCount"] ?? null) + 1);
                // line 69
                echo "                ";
            }
            // line 70
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['treeItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "
            ";
        // line 72
        if ((($context["navigationChildrenCount"] ?? null) > 0)) {
            // line 73
            echo "                ";
            $this->displayBlock('layout_main_navigation_menu_flyout_container', $context, $blocks);
            // line 98
            echo "            ";
        }
        // line 99
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 73
    public function block_layout_main_navigation_menu_flyout_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_flyout_container"));

        // line 74
        echo "                    <div class=\"navigation-flyouts\">
                        ";
        // line 75
        $this->displayBlock('layout_main_navigation_menu_flyouts', $context, $blocks);
        // line 96
        echo "                    </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 75
    public function block_layout_main_navigation_menu_flyouts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_flyouts"));

        // line 76
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 76), "navigation", [], "any", false, false, false, 76), "tree", [], "any", false, false, false, 76));
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
        foreach ($context['_seq'] as $context["_key"] => $context["treeItem"]) {
            // line 77
            echo "                                ";
            if ((twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, $context["treeItem"], "children", [], "any", false, false, false, 77)) > 0)) {
                // line 78
                echo "                                    ";
                $this->displayBlock('layout_main_navigation_menu_flyout', $context, $blocks);
                // line 93
                echo "                                ";
            }
            // line 94
            echo "                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['treeItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 78
    public function block_layout_main_navigation_menu_flyout($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_flyout"));

        // line 79
        echo "                                        <div class=\"navigation-flyout\"
                                             data-flyout-menu-id=\"";
        // line 80
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "category", [], "any", false, false, false, 80), "id", [], "any", false, false, false, 80), "html", null, true);
        echo "\">
                                            <div class=\"container\">
                                                ";
        // line 82
        $this->displayBlock('layout_main_navigation_menu_flyout_include', $context, $blocks);
        // line 90
        echo "                                            </div>
                                        </div>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 82
    public function block_layout_main_navigation_menu_flyout_include($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_main_navigation_menu_flyout_include"));

        // line 83
        echo "                                                    ";
        $this->loadTemplate("@Storefront/storefront/layout/navigation/flyout.html.twig", "@Storefront/storefront/layout/navigation/navigation.html.twig", 83)->display(twig_to_array(["themeIconConfig" =>         // line 84
($context["themeIconConfig"] ?? null), "navigationTree" =>         // line 85
($context["treeItem"] ?? null), "level" => (        // line 86
($context["level"] ?? null) + 1), "page" =>         // line 87
($context["page"] ?? null)]));
        // line 89
        echo "                                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/navigation/navigation.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  479 => 89,  477 => 87,  476 => 86,  475 => 85,  474 => 84,  472 => 83,  465 => 82,  456 => 90,  454 => 82,  449 => 80,  446 => 79,  439 => 78,  432 => 95,  418 => 94,  415 => 93,  412 => 78,  409 => 77,  391 => 76,  384 => 75,  376 => 96,  374 => 75,  371 => 74,  364 => 73,  357 => 99,  354 => 98,  351 => 73,  349 => 72,  346 => 71,  340 => 70,  337 => 69,  334 => 68,  331 => 67,  326 => 66,  323 => 65,  316 => 64,  309 => 56,  302 => 52,  296 => 50,  291 => 49,  285 => 48,  280 => 46,  273 => 45,  266 => 41,  260 => 39,  254 => 37,  252 => 36,  249 => 35,  246 => 34,  239 => 33,  232 => 58,  218 => 57,  216 => 33,  213 => 32,  210 => 31,  207 => 30,  190 => 29,  187 => 28,  184 => 27,  177 => 26,  170 => 24,  163 => 20,  158 => 18,  153 => 16,  146 => 15,  143 => 14,  136 => 13,  128 => 59,  126 => 26,  123 => 25,  121 => 13,  118 => 12,  116 => 11,  111 => 8,  104 => 7,  96 => 61,  94 => 7,  91 => 6,  84 => 5,  76 => 100,  74 => 64,  71 => 63,  69 => 5,  64 => 2,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_main_navigation %}
    <div class=\"main-navigation\"
         id=\"mainNavigation\"
         data-flyout-menu=\"true\">
        {% block layout_main_navigation_navbar %}
            <div class=\"container\">
                {% block layout_main_navigation_menu %}
                    <nav class=\"nav main-navigation-menu\"
                        itemscope=\"itemscope\"
                        itemtype=\"http://schema.org/SiteNavigationElement\">
                        {% set homeLabel = context.salesChannel.translated.homeName|default(\"general.homeLink\"|trans) %}

                        {% block layout_main_navigation_menu_home %}
                            {% if context.salesChannel.translated.homeEnabled %}
                                <a class=\"nav-link main-navigation-link{% if controllerAction is same as('home') %} active{% endif %} home-link\"
                                    href=\"{{ path('frontend.home.page') }}\"
                                    itemprop=\"url\"
                                    title=\"{{ homeLabel|striptags }}\">
                                    <div class=\"main-navigation-link-text\">
                                        <span itemprop=\"name\">{{ homeLabel|sw_sanitize }}</span>
                                    </div>
                                </a>
                            {% endif %}
                        {% endblock %}

                        {% block layout_main_navigation_menu_items %}
                            {% set activePath = page.header.navigation.active.path %}

                            {% for treeItem in page.header.navigation.tree %}
                                {% set category = treeItem.category %}
                                {% set name = category.translated.name %}

                                {% block layout_main_navigation_menu_item %}
                                    {% if category.type == 'folder' %}
                                        <div class=\"nav-link main-navigation-link\"
                                            {% if treeItem.children|length > 0 %}
                                                data-flyout-menu-trigger=\"{{ category.id }}\"
                                            {% endif %}
                                              title=\"{{ name }}\">
                                            <div class=\"main-navigation-link-text\">
                                                <span itemprop=\"name\">{{ name }}</span>
                                            </div>
                                        </div>
                                    {% else %}
                                        <a class=\"nav-link main-navigation-link{% if category.id == page.header.navigation.active.id or category.id in activePath %} active{% endif %}\"
                                           href=\"{{ category_url(category) }}\"
                                           itemprop=\"url\"
                                           {% if treeItem.children|length > 0 %}data-flyout-menu-trigger=\"{{ category.id }}\"{% endif %}
                                           {% if category_linknewtab(category) %}target=\"_blank\"{% endif %}
                                           title=\"{{ name }}\">
                                            <div class=\"main-navigation-link-text\">
                                                <span itemprop=\"name\">{{ name }}</span>
                                            </div>
                                        </a>
                                    {% endif %}
                                {% endblock %}
                            {% endfor %}
                        {% endblock %}
                    </nav>
                {% endblock %}
            </div>
        {% endblock %}

        {% block layout_main_navigation_menu_flyout_wrapper %}
            {% set navigationChildrenCount = 0 %}
            {% for treeItem in page.header.navigation.tree %}
                {% if treeItem.category.childCount > 0 %}
                    {% set navigationChildrenCount = navigationChildrenCount + 1 %}
                {% endif %}
            {% endfor %}

            {% if navigationChildrenCount > 0 %}
                {% block layout_main_navigation_menu_flyout_container %}
                    <div class=\"navigation-flyouts\">
                        {% block layout_main_navigation_menu_flyouts %}
                            {% for treeItem in page.header.navigation.tree %}
                                {% if treeItem.children|length > 0 %}
                                    {% block layout_main_navigation_menu_flyout %}
                                        <div class=\"navigation-flyout\"
                                             data-flyout-menu-id=\"{{ treeItem.category.id }}\">
                                            <div class=\"container\">
                                                {% block layout_main_navigation_menu_flyout_include %}
                                                    {% sw_include '@Storefront/storefront/layout/navigation/flyout.html.twig' with {
                                                        themeIconConfig: themeIconConfig,
                                                        navigationTree: treeItem,
                                                        level: level+1,
                                                        page: page
                                                    } only %}
                                                {% endblock %}
                                            </div>
                                        </div>
                                    {% endblock %}
                                {% endif %}
                            {% endfor %}
                        {% endblock %}
                    </div>
                {% endblock %}
            {% endif %}
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/layout/navigation/navigation.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/navigation.html.twig");
    }
}
