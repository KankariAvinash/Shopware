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

/* @Storefront/storefront/base.html.twig */
class __TwigTemplate_c64eb80287d73e9178d0ca1809dddff9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'base_doctype' => [$this, 'block_base_doctype'],
            'base_html' => [$this, 'block_base_html'],
            'base_head' => [$this, 'block_base_head'],
            'base_body' => [$this, 'block_base_body'],
            'base_body_classes' => [$this, 'block_base_body_classes'],
            'base_body_inner' => [$this, 'block_base_body_inner'],
            'base_noscript' => [$this, 'block_base_noscript'],
            'base_header' => [$this, 'block_base_header'],
            'base_header_inner' => [$this, 'block_base_header_inner'],
            'base_navigation' => [$this, 'block_base_navigation'],
            'base_navigation_inner' => [$this, 'block_base_navigation_inner'],
            'base_offcanvas_navigation' => [$this, 'block_base_offcanvas_navigation'],
            'base_offcanvas_navigation_inner' => [$this, 'block_base_offcanvas_navigation_inner'],
            'base_main' => [$this, 'block_base_main'],
            'base_flashbags' => [$this, 'block_base_flashbags'],
            'base_main_inner' => [$this, 'block_base_main_inner'],
            'base_main_container' => [$this, 'block_base_main_container'],
            'base_breadcrumb' => [$this, 'block_base_breadcrumb'],
            'base_content' => [$this, 'block_base_content'],
            'base_footer' => [$this, 'block_base_footer'],
            'base_footer_inner' => [$this, 'block_base_footer_inner'],
            'base_scroll_up' => [$this, 'block_base_scroll_up'],
            'base_cookie_permission' => [$this, 'block_base_cookie_permission'],
            'base_pseudo_modal' => [$this, 'block_base_pseudo_modal'],
            'base_body_script' => [$this, 'block_base_body_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["isHMRMode"] = (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 2), "headers", [], "any", false, false, false, 2), "get", ["hot-reload-mode"], "method", false, false, false, 2) && (sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "environment", [], "any", false, false, false, 2) == "dev"));
        // line 3
        echo "
";
        // line 4
        $this->displayBlock('base_doctype', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('base_html', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('base_head', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('base_body', $context, $blocks);
        // line 115
        echo "</html>
";
    }

    // line 4
    public function block_base_doctype($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<!DOCTYPE html>
";
    }

    // line 8
    public function block_base_html($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "<html lang=\"";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 9), "activeLanguage", [], "any", false, false, false, 9), "translationCode", [], "any", false, false, false, 9), "code", [], "any", false, false, false, 9), "html", null, true);
        echo "\"
      itemscope=\"itemscope\"
      itemtype=\"https://schema.org/WebPage\">
";
    }

    // line 14
    public function block_base_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    ";
        $this->loadTemplate("@Storefront/storefront/layout/meta.html.twig", "@Storefront/storefront/base.html.twig", 15)->display($context);
    }

    // line 18
    public function block_base_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    <body class=\"";
        $this->displayBlock('base_body_classes', $context, $blocks);
        echo "\">

    ";
        // line 21
        $this->displayBlock('base_body_inner', $context, $blocks);
        // line 98
        echo "
    ";
        // line 99
        $this->displayBlock('base_scroll_up', $context, $blocks);
        // line 102
        echo "
    ";
        // line 103
        $this->displayBlock('base_cookie_permission', $context, $blocks);
        // line 106
        echo "
    ";
        // line 107
        $this->displayBlock('base_pseudo_modal', $context, $blocks);
        // line 110
        echo "
    ";
        // line 111
        $this->displayBlock('base_body_script', $context, $blocks);
        // line 113
        echo "    </body>
";
    }

    // line 19
    public function block_base_body_classes($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "is-ctl-";
        if ( !twig_test_empty(($context["controllerName"] ?? null))) {
            echo sw_escape_filter($this->env, twig_lower_filter($this->env, ($context["controllerName"] ?? null)), "html", null, true);
        }
        echo " is-act-";
        if ( !twig_test_empty(($context["controllerAction"] ?? null))) {
            echo sw_escape_filter($this->env, twig_lower_filter($this->env, ($context["controllerAction"] ?? null)), "html", null, true);
        }
    }

    // line 21
    public function block_base_body_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "        ";
        $this->displayBlock('base_noscript', $context, $blocks);
        // line 31
        echo "
        ";
        // line 32
        $this->displayBlock('base_header', $context, $blocks);
        // line 41
        echo "
        ";
        // line 42
        $this->displayBlock('base_navigation', $context, $blocks);
        // line 49
        echo "
        ";
        // line 50
        $this->displayBlock('base_offcanvas_navigation', $context, $blocks);
        // line 59
        echo "
        ";
        // line 60
        $this->displayBlock('base_main', $context, $blocks);
        // line 89
        echo "
        ";
        // line 90
        $this->displayBlock('base_footer', $context, $blocks);
        // line 97
        echo "    ";
    }

    // line 22
    public function block_base_noscript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "            <noscript class=\"noscript-main\">
                ";
        // line 24
        $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/base.html.twig", 24)->display(twig_array_merge($context, ["type" => "info", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.noscriptNotice")), "iconCache" => false]));
        // line 29
        echo "            </noscript>
        ";
    }

    // line 32
    public function block_base_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "            <header class=\"header-main\">
                ";
        // line 34
        $this->displayBlock('base_header_inner', $context, $blocks);
        // line 39
        echo "            </header>
        ";
    }

    // line 34
    public function block_base_header_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "                    <div class=\"container\">
                        ";
        // line 36
        $this->loadTemplate("@Storefront/storefront/layout/header/header.html.twig", "@Storefront/storefront/base.html.twig", 36)->display($context);
        // line 37
        echo "                    </div>
                ";
    }

    // line 42
    public function block_base_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "            <div class=\"nav-main\">
                ";
        // line 44
        $this->displayBlock('base_navigation_inner', $context, $blocks);
        // line 47
        echo "            </div>
        ";
    }

    // line 44
    public function block_base_navigation_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "                    ";
        $this->loadTemplate("@Storefront/storefront/layout/navigation/navigation.html.twig", "@Storefront/storefront/base.html.twig", 45)->display($context);
        // line 46
        echo "                ";
    }

    // line 50
    public function block_base_offcanvas_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "            ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 51), "navigation", [], "any", false, false, false, 51)) {
            // line 52
            echo "                <div class=\"d-none js-navigation-offcanvas-initial-content";
            if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 52), "navigationCategoryId", [], "any", false, false, false, 52) == sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 52), "navigation", [], "any", false, false, false, 52), "active", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52))) {
                echo " is-root";
            }
            echo "\">
                    ";
            // line 53
            $this->displayBlock('base_offcanvas_navigation_inner', $context, $blocks);
            // line 56
            echo "                </div>
            ";
        }
        // line 58
        echo "        ";
    }

    // line 53
    public function block_base_offcanvas_navigation_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig", "@Storefront/storefront/base.html.twig", 54)->display(twig_array_merge($context, ["navigation" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 54), "navigation", [], "any", false, false, false, 54)]));
        // line 55
        echo "                    ";
    }

    // line 60
    public function block_base_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "            <main class=\"content-main\">
                ";
        // line 62
        $this->displayBlock('base_flashbags', $context, $blocks);
        // line 69
        echo "
                ";
        // line 70
        $this->displayBlock('base_main_inner', $context, $blocks);
        // line 87
        echo "            </main>
        ";
    }

    // line 62
    public function block_base_flashbags($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "                    <div class=\"flashbags container\">
                        ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 64));
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
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 65
            echo "                            ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/base.html.twig", 65)->display(twig_array_merge($context, ["type" => $context["type"], "list" => $context["messages"]]));
            // line 66
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
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "                    </div>
                ";
    }

    // line 70
    public function block_base_main_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        echo "                    <div class=\"container\">
                        ";
        // line 72
        $this->displayBlock('base_main_container', $context, $blocks);
        // line 85
        echo "                    </div>
                ";
    }

    // line 72
    public function block_base_main_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "                            <div class=\"container-main\">
                                ";
        // line 74
        $this->displayBlock('base_breadcrumb', $context, $blocks);
        // line 81
        echo "
                                ";
        // line 82
        $this->displayBlock('base_content', $context, $blocks);
        // line 83
        echo "                            </div>
                        ";
    }

    // line 74
    public function block_base_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 75
        echo "                                    ";
        $this->loadTemplate("@Storefront/storefront/layout/breadcrumb.html.twig", "@Storefront/storefront/base.html.twig", 75)->display(twig_to_array(["context" =>         // line 76
($context["context"] ?? null), "themeIconConfig" =>         // line 77
($context["themeIconConfig"] ?? null), "category" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 78
($context["page"] ?? null), "product", [], "any", false, false, false, 78), "seoCategory", [], "any", false, false, false, 78)]));
        // line 80
        echo "                                ";
    }

    // line 82
    public function block_base_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 90
    public function block_base_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "            <footer class=\"footer-main\">
                ";
        // line 92
        $this->displayBlock('base_footer_inner', $context, $blocks);
        // line 95
        echo "            </footer>
        ";
    }

    // line 92
    public function block_base_footer_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "                    ";
        $this->loadTemplate("@Storefront/storefront/layout/footer/footer.html.twig", "@Storefront/storefront/base.html.twig", 93)->display($context);
        // line 94
        echo "                ";
    }

    // line 99
    public function block_base_scroll_up($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "        ";
        $this->loadTemplate("@Storefront/storefront/layout/scroll-up.html.twig", "@Storefront/storefront/base.html.twig", 100)->display($context);
        // line 101
        echo "    ";
    }

    // line 103
    public function block_base_cookie_permission($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 104
        echo "        ";
        $this->loadTemplate("@Storefront/storefront/layout/cookie/cookie-permission.html.twig", "@Storefront/storefront/base.html.twig", 104)->display($context);
        // line 105
        echo "    ";
    }

    // line 107
    public function block_base_pseudo_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 108
        echo "        ";
        $this->loadTemplate("@Storefront/storefront/component/pseudo-modal.html.twig", "@Storefront/storefront/base.html.twig", 108)->display($context);
        // line 109
        echo "    ";
    }

    // line 111
    public function block_base_body_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 112
        echo "    ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  489 => 112,  485 => 111,  481 => 109,  478 => 108,  474 => 107,  470 => 105,  467 => 104,  463 => 103,  459 => 101,  456 => 100,  452 => 99,  448 => 94,  445 => 93,  441 => 92,  436 => 95,  434 => 92,  431 => 91,  427 => 90,  421 => 82,  417 => 80,  415 => 78,  414 => 77,  413 => 76,  411 => 75,  407 => 74,  402 => 83,  400 => 82,  397 => 81,  395 => 74,  392 => 73,  388 => 72,  383 => 85,  381 => 72,  378 => 71,  374 => 70,  369 => 67,  355 => 66,  352 => 65,  335 => 64,  332 => 63,  328 => 62,  323 => 87,  321 => 70,  318 => 69,  316 => 62,  313 => 61,  309 => 60,  305 => 55,  302 => 54,  298 => 53,  294 => 58,  290 => 56,  288 => 53,  281 => 52,  278 => 51,  274 => 50,  270 => 46,  267 => 45,  263 => 44,  258 => 47,  256 => 44,  253 => 43,  249 => 42,  244 => 37,  242 => 36,  239 => 35,  235 => 34,  230 => 39,  228 => 34,  225 => 33,  221 => 32,  216 => 29,  214 => 24,  211 => 23,  207 => 22,  203 => 97,  201 => 90,  198 => 89,  196 => 60,  193 => 59,  191 => 50,  188 => 49,  186 => 42,  183 => 41,  181 => 32,  178 => 31,  175 => 22,  171 => 21,  157 => 19,  152 => 113,  150 => 111,  147 => 110,  145 => 107,  142 => 106,  140 => 103,  137 => 102,  135 => 99,  132 => 98,  130 => 21,  124 => 19,  120 => 18,  115 => 15,  111 => 14,  102 => 9,  98 => 8,  93 => 5,  89 => 4,  84 => 115,  82 => 18,  79 => 17,  77 => 14,  74 => 13,  72 => 8,  69 => 7,  67 => 4,  64 => 3,  62 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/base.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/base.html.twig");
    }
}
