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
class __TwigTemplate_0ad9b4328893a400d3b8f6c45bee51db extends Template
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
        // line 1
        $this->displayBlock('layout_main_navigation', $context, $blocks);
    }

    public function block_layout_main_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 5
    public function block_layout_main_navigation_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "            <div class=\"container\">
                ";
        // line 7
        $this->displayBlock('layout_main_navigation_menu', $context, $blocks);
        // line 61
        echo "            </div>
        ";
    }

    // line 7
    public function block_layout_main_navigation_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 13
    public function block_layout_main_navigation_menu_home($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 26
    public function block_layout_main_navigation_menu_items($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 33
    public function block_layout_main_navigation_menu_item($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 64
    public function block_layout_main_navigation_menu_flyout_wrapper($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 73
    public function block_layout_main_navigation_menu_flyout_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "                    <div class=\"navigation-flyouts\">
                        ";
        // line 75
        $this->displayBlock('layout_main_navigation_menu_flyouts', $context, $blocks);
        // line 96
        echo "                    </div>
                ";
    }

    // line 75
    public function block_layout_main_navigation_menu_flyouts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 78
    public function block_layout_main_navigation_menu_flyout($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 82
    public function block_layout_main_navigation_menu_flyout_include($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 83
        echo "                                                    ";
        $this->loadTemplate("@Storefront/storefront/layout/navigation/flyout.html.twig", "@Storefront/storefront/layout/navigation/navigation.html.twig", 83)->display(twig_to_array(["themeIconConfig" =>         // line 84
($context["themeIconConfig"] ?? null), "navigationTree" =>         // line 85
($context["treeItem"] ?? null), "level" => (        // line 86
($context["level"] ?? null) + 1), "page" =>         // line 87
($context["page"] ?? null)]));
        // line 89
        echo "                                                ";
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
        return array (  410 => 89,  408 => 87,  407 => 86,  406 => 85,  405 => 84,  403 => 83,  399 => 82,  393 => 90,  391 => 82,  386 => 80,  383 => 79,  379 => 78,  375 => 95,  361 => 94,  358 => 93,  355 => 78,  352 => 77,  334 => 76,  330 => 75,  325 => 96,  323 => 75,  320 => 74,  316 => 73,  312 => 99,  309 => 98,  306 => 73,  304 => 72,  301 => 71,  295 => 70,  292 => 69,  289 => 68,  286 => 67,  281 => 66,  278 => 65,  274 => 64,  270 => 56,  263 => 52,  257 => 50,  252 => 49,  246 => 48,  241 => 46,  234 => 45,  227 => 41,  221 => 39,  215 => 37,  213 => 36,  210 => 35,  207 => 34,  203 => 33,  199 => 58,  185 => 57,  183 => 33,  180 => 32,  177 => 31,  174 => 30,  157 => 29,  154 => 28,  151 => 27,  147 => 26,  143 => 24,  136 => 20,  131 => 18,  126 => 16,  119 => 15,  116 => 14,  112 => 13,  107 => 59,  105 => 26,  102 => 25,  100 => 13,  97 => 12,  95 => 11,  90 => 8,  86 => 7,  81 => 61,  79 => 7,  76 => 6,  72 => 5,  67 => 100,  65 => 64,  62 => 63,  60 => 5,  55 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/navigation/navigation.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/navigation.html.twig");
    }
}
