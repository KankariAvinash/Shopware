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

/* @Storefront/storefront/layout/footer/footer.html.twig */
class __TwigTemplate_7b7b7cb7e81b3490999cc5751e2674cc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_footer_inner_container' => [$this, 'block_layout_footer_inner_container'],
            'layout_footer_navigation' => [$this, 'block_layout_footer_navigation'],
            'layout_footer_navigation_hotline' => [$this, 'block_layout_footer_navigation_hotline'],
            'layout_footer_navigation_hotline_headline' => [$this, 'block_layout_footer_navigation_hotline_headline'],
            'layout_footer_navigation_hotline_icons' => [$this, 'block_layout_footer_navigation_hotline_icons'],
            'layout_footer_navigation_hotline_content' => [$this, 'block_layout_footer_navigation_hotline_content'],
            'layout_footer_navigation_columns' => [$this, 'block_layout_footer_navigation_columns'],
            'layout_footer_navigation_column' => [$this, 'block_layout_footer_navigation_column'],
            'layout_footer_navigation_information_headline' => [$this, 'block_layout_footer_navigation_information_headline'],
            'layout_footer_navigation_information_icons' => [$this, 'block_layout_footer_navigation_information_icons'],
            'layout_footer_navigation_information_content' => [$this, 'block_layout_footer_navigation_information_content'],
            'layout_footer_navigation_information_links' => [$this, 'block_layout_footer_navigation_information_links'],
            'layout_footer_navigation_information_link_item' => [$this, 'block_layout_footer_navigation_information_link_item'],
            'layout_footer_navigation_information_link' => [$this, 'block_layout_footer_navigation_information_link'],
            'layout_footer_payment_shipping_logos' => [$this, 'block_layout_footer_payment_shipping_logos'],
            'layout_footer_payment_logos' => [$this, 'block_layout_footer_payment_logos'],
            'layout_footer_payment_logo' => [$this, 'block_layout_footer_payment_logo'],
            'layout_footer_shipping_logos' => [$this, 'block_layout_footer_shipping_logos'],
            'layout_footer_shipping_logo' => [$this, 'block_layout_footer_shipping_logo'],
            'layout_footer_bottom' => [$this, 'block_layout_footer_bottom'],
            'layout_footer_service_menu' => [$this, 'block_layout_footer_service_menu'],
            'layout_footer_service_menu_content' => [$this, 'block_layout_footer_service_menu_content'],
            'layout_footer_service_menu_item' => [$this, 'block_layout_footer_service_menu_item'],
            'layout_footer_vat' => [$this, 'block_layout_footer_vat'],
            'layout_footer_copyright' => [$this, 'block_layout_footer_copyright'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout_footer_inner_container', $context, $blocks);
    }

    public function block_layout_footer_inner_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <div class=\"container\">

        ";
        // line 4
        $this->displayBlock('layout_footer_navigation', $context, $blocks);
        // line 129
        echo "
        ";
        // line 130
        $this->displayBlock('layout_footer_payment_shipping_logos', $context, $blocks);
        // line 177
        echo "
    </div>

    ";
        // line 180
        $this->displayBlock('layout_footer_bottom', $context, $blocks);
    }

    // line 4
    public function block_layout_footer_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "            <div
                id=\"footerColumns\"
                class=\"row footer-columns\"
                ";
        // line 9
        echo "                ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.6.0.0")) {
            // line 10
            echo "                    data-collapse-footer-columns=\"true\"
                ";
        } else {
            // line 12
            echo "                    data-collapse-footer=\"true\"
                ";
        }
        // line 14
        echo "                role=\"list\"
            >
                ";
        // line 16
        $this->displayBlock('layout_footer_navigation_hotline', $context, $blocks);
        // line 57
        echo "
                ";
        // line 58
        $this->displayBlock('layout_footer_navigation_columns', $context, $blocks);
        // line 127
        echo "            </div>
        ";
    }

    // line 16
    public function block_layout_footer_navigation_hotline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                    <div class=\"col-md-4 footer-column js-footer-column\">
                        ";
        // line 18
        $this->displayBlock('layout_footer_navigation_hotline_headline', $context, $blocks);
        // line 38
        echo "
                        ";
        // line 39
        $this->displayBlock('layout_footer_navigation_hotline_content', $context, $blocks);
        // line 55
        echo "                    </div>
                ";
    }

    // line 18
    public function block_layout_footer_navigation_hotline_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "                            <div class=\"footer-column-headline footer-headline js-footer-column-headline js-collapse-footer-column-trigger\"
                                 id=\"collapseFooterHotlineTitle\"
                                 data-bs-target=\"#collapseFooterHotline\"
                                 aria-expanded=\"true\"
                                 aria-controls=\"collapseFooterHotline\"
                                 role=\"listitem\">
                                ";
        // line 25
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.serviceHotlineHeadline"));
        echo "
                                ";
        // line 26
        $this->displayBlock('layout_footer_navigation_hotline_icons', $context, $blocks);
        // line 36
        echo "                            </div>
                        ";
    }

    // line 26
    public function block_layout_footer_navigation_hotline_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "                                    <div class=\"footer-column-toggle\">
                                        <span class=\"footer-plus-icon\">
                                            ";
        // line 29
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 29);
        })())->display(twig_array_merge($context, ["name" => "plus"]));
        // line 30
        echo "                                        </span>
                                        <span class=\"footer-minus-icon\">
                                            ";
        // line 32
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 32);
        })())->display(twig_array_merge($context, ["name" => "minus"]));
        // line 33
        echo "                                        </span>
                                    </div>
                                ";
    }

    // line 39
    public function block_layout_footer_navigation_hotline_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "                            <div id=\"collapseFooterHotline\"
                                 class=\"footer-column-content collapse js-footer-column-content footer-contact\"
                                 aria-labelledby=\"collapseFooterHotlineTitle\">
                                <div class=\"footer-column-content-inner\">
                                    <p class=\"footer-contact-hotline\">
                                        ";
        // line 45
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.serviceHotline"));
        echo "
                                    </p>
                                </div>
                                <div class=\"footer-contact-form\">
                                    ";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.serviceContactText", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.contactPage")])]);
        // line 51
        echo "
                                </div>
                            </div>
                        ";
    }

    // line 58
    public function block_layout_footer_navigation_columns($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, false, 59), "navigation", [], "any", false, false, false, 59), "tree", [], "any", false, false, false, 59));
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
        foreach ($context['_seq'] as $context["_key"] => $context["root"]) {
            // line 60
            echo "                        ";
            $this->displayBlock('layout_footer_navigation_column', $context, $blocks);
            // line 125
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['root'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "                ";
    }

    // line 60
    public function block_layout_footer_navigation_column($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "                            <div class=\"col-md-4 footer-column js-footer-column\">
                                ";
        // line 62
        $this->displayBlock('layout_footer_navigation_information_headline', $context, $blocks);
        // line 89
        echo "
                                ";
        // line 90
        $this->displayBlock('layout_footer_navigation_information_content', $context, $blocks);
        // line 123
        echo "                            </div>
                        ";
    }

    // line 62
    public function block_layout_footer_navigation_information_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "                                    <div class=\"footer-column-headline footer-headline js-collapse-footer-column-trigger\"
                                         data-bs-target=\"#collapseFooterTitle";
        // line 64
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 64), "html", null, true);
        echo "\"
                                         aria-expanded=\"true\"
                                         aria-controls=\"collapseFooter";
        // line 66
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 66), "html", null, true);
        echo "\">

                                        ";
        // line 68
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 68), "type", [], "any", false, false, false, 68) == "folder")) {
            // line 69
            echo "                                            ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 69), "translated", [], "any", false, false, false, 69), "name", [], "any", false, false, false, 69), "html", null, true);
            echo "
                                        ";
        } else {
            // line 71
            echo "                                            <a href=\"";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 71));
            echo "\"
                                               ";
            // line 72
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 72))) {
                echo "target=\"_blank\"";
            }
            // line 73
            echo "                                               title=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 73), "translated", [], "any", false, false, false, 73), "name", [], "any", false, false, false, 73), "html", null, true);
            echo "\">
                                                ";
            // line 74
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "category", [], "any", false, false, false, 74), "translated", [], "any", false, false, false, 74), "name", [], "any", false, false, false, 74), "html", null, true);
            echo "
                                            </a>
                                        ";
        }
        // line 77
        echo "                                        ";
        $this->displayBlock('layout_footer_navigation_information_icons', $context, $blocks);
        // line 87
        echo "                                    </div>
                                ";
    }

    // line 77
    public function block_layout_footer_navigation_information_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "                                            <div class=\"footer-column-toggle\">
                                                <span class=\"footer-plus-icon\">
                                                    ";
        // line 80
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 80);
        })())->display(twig_array_merge($context, ["name" => "plus"]));
        // line 81
        echo "                                                </span>
                                                <span class=\"footer-minus-icon\">
                                                    ";
        // line 83
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 83);
        })())->display(twig_array_merge($context, ["name" => "minus"]));
        // line 84
        echo "                                                </span>
                                            </div>
                                        ";
    }

    // line 90
    public function block_layout_footer_navigation_information_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "                                    <div id=\"collapseFooter";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 91), "html", null, true);
        echo "\"
                                         class=\"footer-column-content collapse js-footer-column-content\"
                                         aria-labelledby=\"collapseFooterTitle";
        // line 93
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index", [], "any", false, false, false, 93), "html", null, true);
        echo "\">
                                        <div class=\"footer-column-content-inner\">
                                            ";
        // line 95
        $this->displayBlock('layout_footer_navigation_information_links', $context, $blocks);
        // line 120
        echo "                                        </div>
                                    </div>
                                ";
    }

    // line 95
    public function block_layout_footer_navigation_information_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "                                                <ul class=\"list-unstyled\">
                                                    ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["root"] ?? null), "children", [], "any", false, false, false, 97));
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
            // line 98
            echo "                                                        ";
            $context["category"] = sw_get_attribute($this->env, $this->source, $context["treeItem"], "category", [], "any", false, false, false, 98);
            // line 99
            echo "                                                        ";
            $context["name"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "translated", [], "any", false, false, false, 99), "name", [], "any", false, false, false, 99);
            // line 100
            echo "
                                                        ";
            // line 101
            $this->displayBlock('layout_footer_navigation_information_link_item', $context, $blocks);
            // line 117
            echo "                                                    ";
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
        // line 118
        echo "                                                </ul>
                                            ";
    }

    // line 101
    public function block_layout_footer_navigation_information_link_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 102
        echo "                                                            <li class=\"footer-link-item\">
                                                                ";
        // line 103
        $this->displayBlock('layout_footer_navigation_information_link', $context, $blocks);
        // line 115
        echo "                                                            </li>
                                                        ";
    }

    // line 103
    public function block_layout_footer_navigation_information_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 104
        echo "                                                                    ";
        if ((sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "type", [], "any", false, false, false, 104) == "folder")) {
            // line 105
            echo "                                                                        <div>";
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</div>
                                                                    ";
        } else {
            // line 107
            echo "                                                                        <a class=\"footer-link\"
                                                                           href=\"";
            // line 108
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, ($context["category"] ?? null));
            echo "\"
                                                                           ";
            // line 109
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(($context["category"] ?? null))) {
                echo "target=\"_blank\"";
            }
            // line 110
            echo "                                                                           title=\"";
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
                                                                            ";
            // line 111
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "
                                                                        </a>
                                                                    ";
        }
        // line 114
        echo "                                                                ";
    }

    // line 130
    public function block_layout_footer_payment_shipping_logos($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 131
        echo "            <div class=\"footer-logos\">
                ";
        // line 132
        $this->displayBlock('layout_footer_payment_logos', $context, $blocks);
        // line 153
        echo "
                ";
        // line 154
        $this->displayBlock('layout_footer_shipping_logos', $context, $blocks);
        // line 175
        echo "            </div>
        ";
    }

    // line 132
    public function block_layout_footer_payment_logos($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 133
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "salesChannelPaymentMethods", [], "any", false, false, false, 133));
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
        foreach ($context['_seq'] as $context["_key"] => $context["paymentMethod"]) {
            // line 134
            echo "                        ";
            $this->displayBlock('layout_footer_payment_logo', $context, $blocks);
            // line 151
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paymentMethod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "                ";
    }

    // line 134
    public function block_layout_footer_payment_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 135
        echo "                            ";
        if (sw_get_attribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 135)) {
            // line 136
            echo "                                <div class=\"footer-logo is-payment\">
                                    ";
            // line 137
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 137);
            })())->display(twig_array_merge($context, ["media" => sw_get_attribute($this->env, $this->source,             // line 138
($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 138), "sizes" => ["default" => "100px"], "attributes" => ["class" => "img-fluid footer-logo-image", "alt" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 144
($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 144), "translated", [], "any", false, false, false, 144), "alt", [], "any", false, false, false, 144)) ?: (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "translated", [], "any", false, false, false, 144), "name", [], "any", false, false, false, 144))), "title" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 145
($context["paymentMethod"] ?? null), "media", [], "any", false, false, false, 145), "translated", [], "any", false, false, false, 145), "title", [], "any", false, false, false, 145)) ?: (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["paymentMethod"] ?? null), "translated", [], "any", false, false, false, 145), "name", [], "any", false, false, false, 145)))], "name" => "footer-payment-image-thumbnails"]));
            // line 148
            echo "                                </div>
                            ";
        }
        // line 150
        echo "                        ";
    }

    // line 154
    public function block_layout_footer_shipping_logos($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 155
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "salesChannelShippingMethods", [], "any", false, false, false, 155));
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
        foreach ($context['_seq'] as $context["_key"] => $context["shippingMethod"]) {
            // line 156
            echo "                        ";
            $this->displayBlock('layout_footer_shipping_logo', $context, $blocks);
            // line 173
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shippingMethod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "                ";
    }

    // line 156
    public function block_layout_footer_shipping_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 157
        echo "                            ";
        if (sw_get_attribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 157)) {
            // line 158
            echo "                                <div class=\"footer-logo is-shipping\">
                                    ";
            // line 159
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 159);
            })())->display(twig_array_merge($context, ["media" => sw_get_attribute($this->env, $this->source,             // line 160
($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 160), "sizes" => ["default" => "100px"], "attributes" => ["class" => "img-fluid footer-logo-image", "alt" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 166
($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 166), "translated", [], "any", false, false, false, 166), "alt", [], "any", false, false, false, 166)) ?: (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "translated", [], "any", false, false, false, 166), "name", [], "any", false, false, false, 166))), "title" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 167
($context["shippingMethod"] ?? null), "media", [], "any", false, false, false, 167), "translated", [], "any", false, false, false, 167), "title", [], "any", false, false, false, 167)) ?: (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["shippingMethod"] ?? null), "translated", [], "any", false, false, false, 167), "name", [], "any", false, false, false, 167)))], "name" => "footer-shipping-image-thumbnails"]));
            // line 170
            echo "                                </div>
                            ";
        }
        // line 172
        echo "                        ";
    }

    // line 180
    public function block_layout_footer_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 181
        echo "        <div class=\"footer-bottom\">
            ";
        // line 182
        $this->displayBlock('layout_footer_service_menu', $context, $blocks);
        // line 204
        echo "
            ";
        // line 205
        $this->displayBlock('layout_footer_vat', $context, $blocks);
        // line 224
        echo "
            ";
        // line 225
        $this->displayBlock('layout_footer_copyright', $context, $blocks);
        // line 231
        echo "        </div>
    ";
    }

    // line 182
    public function block_layout_footer_service_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 183
        echo "                <div class=\"container\">
                    ";
        // line 184
        $this->displayBlock('layout_footer_service_menu_content', $context, $blocks);
        // line 202
        echo "                </div>
            ";
    }

    // line 184
    public function block_layout_footer_service_menu_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 185
        echo "                        ";
        ob_start(function () { return ''; });
        // line 186
        echo "                            <ul class=\"footer-service-menu-list list-unstyled\">
                                ";
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 187), "serviceMenu", [], "any", false, false, false, 187));
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
        foreach ($context['_seq'] as $context["_key"] => $context["serviceMenuItem"]) {
            // line 188
            echo "                                    ";
            $this->displayBlock('layout_footer_service_menu_item', $context, $blocks);
            // line 198
            echo "                                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serviceMenuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "                            </ul>
                        ";
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 185
        echo twig_spaceless($___internal_parse_1_);
        // line 201
        echo "                    ";
    }

    // line 188
    public function block_layout_footer_service_menu_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 189
        echo "                                        <li class=\"footer-service-menu-item\">
                                            <a class=\"footer-service-menu-link\"
                                               href=\"";
        // line 191
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, ($context["serviceMenuItem"] ?? null));
        echo "\"
                                               ";
        // line 192
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(($context["serviceMenuItem"] ?? null))) {
            echo "target=\"_blank\"";
        }
        // line 193
        echo "                                               title=\"";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["serviceMenuItem"] ?? null), "translated", [], "any", false, false, false, 193), "name", [], "any", false, false, false, 193), "html", null, true);
        echo "\">
                                                ";
        // line 194
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["serviceMenuItem"] ?? null), "translated", [], "any", false, false, false, 194), "name", [], "any", false, false, false, 194), "html", null, true);
        echo "
                                            </a>
                                        </li>
                                    ";
    }

    // line 205
    public function block_layout_footer_vat($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 206
        echo "                ";
        if ((($context["showVatNotice"] ?? null) ||  !array_key_exists("showVatNotice", $context))) {
            // line 207
            echo "                    <div class=\"footer-vat\">
                        ";
            // line 208
            if ((sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "taxState", [], "any", false, false, false, 208) == "gross")) {
                // line 209
                echo "                            <p>
                                ";
                // line 210
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.includeVatText", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shippingPaymentInfoPage")])]);
                // line 212
                echo "
                            </p>
                        ";
            } else {
                // line 215
                echo "                            <p>
                                ";
                // line 216
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.excludeVatText", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shippingPaymentInfoPage")])]);
                // line 218
                echo "
                            </p>
                        ";
            }
            // line 221
            echo "                    </div>
                ";
        }
        // line 223
        echo "            ";
    }

    // line 225
    public function block_layout_footer_copyright($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 226
        echo "                <div class=\"footer-copyright\">
                    ";
        // line 227
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/footer/footer.html.twig", 227);
        })())->display(twig_array_merge($context, ["size" => "xs", "name" => "shopware"]));
        // line 228
        echo "                    ";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("footer.copyrightInfo"));
        echo "
                </div>
            ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/footer/footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  846 => 228,  838 => 227,  835 => 226,  831 => 225,  827 => 223,  823 => 221,  818 => 218,  816 => 216,  813 => 215,  808 => 212,  806 => 210,  803 => 209,  801 => 208,  798 => 207,  795 => 206,  791 => 205,  783 => 194,  778 => 193,  774 => 192,  770 => 191,  766 => 189,  762 => 188,  758 => 201,  756 => 185,  752 => 199,  738 => 198,  735 => 188,  718 => 187,  715 => 186,  712 => 185,  708 => 184,  703 => 202,  701 => 184,  698 => 183,  694 => 182,  689 => 231,  687 => 225,  684 => 224,  682 => 205,  679 => 204,  677 => 182,  674 => 181,  670 => 180,  666 => 172,  662 => 170,  660 => 167,  659 => 166,  658 => 160,  651 => 159,  648 => 158,  645 => 157,  641 => 156,  637 => 174,  623 => 173,  620 => 156,  602 => 155,  598 => 154,  594 => 150,  590 => 148,  588 => 145,  587 => 144,  586 => 138,  579 => 137,  576 => 136,  573 => 135,  569 => 134,  565 => 152,  551 => 151,  548 => 134,  530 => 133,  526 => 132,  521 => 175,  519 => 154,  516 => 153,  514 => 132,  511 => 131,  507 => 130,  503 => 114,  497 => 111,  492 => 110,  488 => 109,  484 => 108,  481 => 107,  475 => 105,  472 => 104,  468 => 103,  463 => 115,  461 => 103,  458 => 102,  454 => 101,  449 => 118,  435 => 117,  433 => 101,  430 => 100,  427 => 99,  424 => 98,  407 => 97,  404 => 96,  400 => 95,  394 => 120,  392 => 95,  387 => 93,  381 => 91,  377 => 90,  371 => 84,  363 => 83,  359 => 81,  351 => 80,  347 => 78,  343 => 77,  338 => 87,  335 => 77,  329 => 74,  324 => 73,  320 => 72,  315 => 71,  309 => 69,  307 => 68,  302 => 66,  297 => 64,  294 => 63,  290 => 62,  285 => 123,  283 => 90,  280 => 89,  278 => 62,  275 => 61,  271 => 60,  267 => 126,  253 => 125,  250 => 60,  232 => 59,  228 => 58,  221 => 51,  219 => 49,  212 => 45,  205 => 40,  201 => 39,  195 => 33,  187 => 32,  183 => 30,  175 => 29,  171 => 27,  167 => 26,  162 => 36,  160 => 26,  156 => 25,  148 => 19,  144 => 18,  139 => 55,  137 => 39,  134 => 38,  132 => 18,  129 => 17,  125 => 16,  120 => 127,  118 => 58,  115 => 57,  113 => 16,  109 => 14,  105 => 12,  101 => 10,  98 => 9,  93 => 5,  89 => 4,  85 => 180,  80 => 177,  78 => 130,  75 => 129,  73 => 4,  69 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/footer/footer.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/layout/footer/footer.html.twig");
    }
}
