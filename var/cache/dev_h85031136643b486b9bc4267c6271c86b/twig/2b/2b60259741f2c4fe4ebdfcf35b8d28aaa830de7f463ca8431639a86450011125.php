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
class __TwigTemplate_6f90b308f62ad10f6db130b0a32c71c5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/footer/footer.html.twig"));

        // line 1
        $this->displayBlock('layout_footer_inner_container', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_layout_footer_inner_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_inner_container"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_layout_footer_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 16
    public function block_layout_footer_navigation_hotline($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_hotline"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 18
    public function block_layout_footer_navigation_hotline_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_hotline_headline"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 26
    public function block_layout_footer_navigation_hotline_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_hotline_icons"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 39
    public function block_layout_footer_navigation_hotline_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_hotline_content"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 58
    public function block_layout_footer_navigation_columns($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_columns"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 60
    public function block_layout_footer_navigation_column($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_column"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 62
    public function block_layout_footer_navigation_information_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_headline"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 77
    public function block_layout_footer_navigation_information_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_icons"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 90
    public function block_layout_footer_navigation_information_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_content"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 95
    public function block_layout_footer_navigation_information_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_links"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 101
    public function block_layout_footer_navigation_information_link_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_link_item"));

        // line 102
        echo "                                                            <li class=\"footer-link-item\">
                                                                ";
        // line 103
        $this->displayBlock('layout_footer_navigation_information_link', $context, $blocks);
        // line 115
        echo "                                                            </li>
                                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 103
    public function block_layout_footer_navigation_information_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_navigation_information_link"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 130
    public function block_layout_footer_payment_shipping_logos($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_payment_shipping_logos"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 132
    public function block_layout_footer_payment_logos($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_payment_logos"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 134
    public function block_layout_footer_payment_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_payment_logo"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 154
    public function block_layout_footer_shipping_logos($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_shipping_logos"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 156
    public function block_layout_footer_shipping_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_shipping_logo"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 180
    public function block_layout_footer_bottom($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_bottom"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 182
    public function block_layout_footer_service_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_service_menu"));

        // line 183
        echo "                <div class=\"container\">
                    ";
        // line 184
        $this->displayBlock('layout_footer_service_menu_content', $context, $blocks);
        // line 202
        echo "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 184
    public function block_layout_footer_service_menu_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_service_menu_content"));

        // line 185
        echo "                        ";
        ob_start();
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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 188
    public function block_layout_footer_service_menu_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_service_menu_item"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 205
    public function block_layout_footer_vat($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_vat"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 225
    public function block_layout_footer_copyright($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_footer_copyright"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  999 => 228,  991 => 227,  988 => 226,  981 => 225,  974 => 223,  970 => 221,  965 => 218,  963 => 216,  960 => 215,  955 => 212,  953 => 210,  950 => 209,  948 => 208,  945 => 207,  942 => 206,  935 => 205,  924 => 194,  919 => 193,  915 => 192,  911 => 191,  907 => 189,  900 => 188,  893 => 201,  891 => 185,  887 => 199,  873 => 198,  870 => 188,  853 => 187,  850 => 186,  847 => 185,  840 => 184,  832 => 202,  830 => 184,  827 => 183,  820 => 182,  812 => 231,  810 => 225,  807 => 224,  805 => 205,  802 => 204,  800 => 182,  797 => 181,  790 => 180,  783 => 172,  779 => 170,  777 => 167,  776 => 166,  775 => 160,  768 => 159,  765 => 158,  762 => 157,  755 => 156,  748 => 174,  734 => 173,  731 => 156,  713 => 155,  706 => 154,  699 => 150,  695 => 148,  693 => 145,  692 => 144,  691 => 138,  684 => 137,  681 => 136,  678 => 135,  671 => 134,  664 => 152,  650 => 151,  647 => 134,  629 => 133,  622 => 132,  614 => 175,  612 => 154,  609 => 153,  607 => 132,  604 => 131,  597 => 130,  590 => 114,  584 => 111,  579 => 110,  575 => 109,  571 => 108,  568 => 107,  562 => 105,  559 => 104,  552 => 103,  544 => 115,  542 => 103,  539 => 102,  532 => 101,  524 => 118,  510 => 117,  508 => 101,  505 => 100,  502 => 99,  499 => 98,  482 => 97,  479 => 96,  472 => 95,  463 => 120,  461 => 95,  456 => 93,  450 => 91,  443 => 90,  434 => 84,  426 => 83,  422 => 81,  414 => 80,  410 => 78,  403 => 77,  395 => 87,  392 => 77,  386 => 74,  381 => 73,  377 => 72,  372 => 71,  366 => 69,  364 => 68,  359 => 66,  354 => 64,  351 => 63,  344 => 62,  336 => 123,  334 => 90,  331 => 89,  329 => 62,  326 => 61,  319 => 60,  312 => 126,  298 => 125,  295 => 60,  277 => 59,  270 => 58,  260 => 51,  258 => 49,  251 => 45,  244 => 40,  237 => 39,  228 => 33,  220 => 32,  216 => 30,  208 => 29,  204 => 27,  197 => 26,  189 => 36,  187 => 26,  183 => 25,  175 => 19,  168 => 18,  160 => 55,  158 => 39,  155 => 38,  153 => 18,  150 => 17,  143 => 16,  135 => 127,  133 => 58,  130 => 57,  128 => 16,  124 => 14,  120 => 12,  116 => 10,  113 => 9,  108 => 5,  101 => 4,  94 => 180,  89 => 177,  87 => 130,  84 => 129,  82 => 4,  78 => 2,  65 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_footer_inner_container %}
    <div class=\"container\">

        {% block layout_footer_navigation %}
            <div
                id=\"footerColumns\"
                class=\"row footer-columns\"
                {# @deprecated tag:v6.6.0 - Registering plugin on selector \"data-collapse-footer\" is deprecated. Use \"data-collapse-footer-columns\" instead #}
                {% if feature('v6.6.0.0') %}
                    data-collapse-footer-columns=\"true\"
                {% else %}
                    data-collapse-footer=\"true\"
                {% endif %}
                role=\"list\"
            >
                {% block layout_footer_navigation_hotline %}
                    <div class=\"col-md-4 footer-column js-footer-column\">
                        {% block layout_footer_navigation_hotline_headline %}
                            <div class=\"footer-column-headline footer-headline js-footer-column-headline js-collapse-footer-column-trigger\"
                                 id=\"collapseFooterHotlineTitle\"
                                 data-bs-target=\"#collapseFooterHotline\"
                                 aria-expanded=\"true\"
                                 aria-controls=\"collapseFooterHotline\"
                                 role=\"listitem\">
                                {{ 'footer.serviceHotlineHeadline'|trans|sw_sanitize }}
                                {% block layout_footer_navigation_hotline_icons %}
                                    <div class=\"footer-column-toggle\">
                                        <span class=\"footer-plus-icon\">
                                            {% sw_icon 'plus' %}
                                        </span>
                                        <span class=\"footer-minus-icon\">
                                            {% sw_icon 'minus' %}
                                        </span>
                                    </div>
                                {% endblock %}
                            </div>
                        {% endblock %}

                        {% block layout_footer_navigation_hotline_content %}
                            <div id=\"collapseFooterHotline\"
                                 class=\"footer-column-content collapse js-footer-column-content footer-contact\"
                                 aria-labelledby=\"collapseFooterHotlineTitle\">
                                <div class=\"footer-column-content-inner\">
                                    <p class=\"footer-contact-hotline\">
                                        {{ 'footer.serviceHotline'|trans|sw_sanitize }}
                                    </p>
                                </div>
                                <div class=\"footer-contact-form\">
                                    {{ 'footer.serviceContactText'|trans({
                                        '%url%': path('frontend.cms.page', { id: config('core.basicInformation.contactPage') })
                                    })|raw }}
                                </div>
                            </div>
                        {% endblock %}
                    </div>
                {% endblock %}

                {% block layout_footer_navigation_columns %}
                    {% for root in page.footer.navigation.tree %}
                        {% block layout_footer_navigation_column %}
                            <div class=\"col-md-4 footer-column js-footer-column\">
                                {% block layout_footer_navigation_information_headline %}
                                    <div class=\"footer-column-headline footer-headline js-collapse-footer-column-trigger\"
                                         data-bs-target=\"#collapseFooterTitle{{ loop.index }}\"
                                         aria-expanded=\"true\"
                                         aria-controls=\"collapseFooter{{ loop.index }}\">

                                        {% if root.category.type == 'folder' %}
                                            {{ root.category.translated.name }}
                                        {% else %}
                                            <a href=\"{{ category_url(root.category) }}\"
                                               {% if category_linknewtab(root.category) %}target=\"_blank\"{% endif %}
                                               title=\"{{ root.category.translated.name }}\">
                                                {{ root.category.translated.name }}
                                            </a>
                                        {% endif %}
                                        {% block layout_footer_navigation_information_icons %}
                                            <div class=\"footer-column-toggle\">
                                                <span class=\"footer-plus-icon\">
                                                    {% sw_icon 'plus' %}
                                                </span>
                                                <span class=\"footer-minus-icon\">
                                                    {% sw_icon 'minus' %}
                                                </span>
                                            </div>
                                        {% endblock %}
                                    </div>
                                {% endblock %}

                                {% block layout_footer_navigation_information_content %}
                                    <div id=\"collapseFooter{{ loop.index }}\"
                                         class=\"footer-column-content collapse js-footer-column-content\"
                                         aria-labelledby=\"collapseFooterTitle{{ loop.index }}\">
                                        <div class=\"footer-column-content-inner\">
                                            {% block layout_footer_navigation_information_links %}
                                                <ul class=\"list-unstyled\">
                                                    {% for treeItem in root.children %}
                                                        {% set category = treeItem.category %}
                                                        {% set name = category.translated.name %}

                                                        {% block layout_footer_navigation_information_link_item %}
                                                            <li class=\"footer-link-item\">
                                                                {% block layout_footer_navigation_information_link %}
                                                                    {% if category.type == 'folder' %}
                                                                        <div>{{ name }}</div>
                                                                    {% else %}
                                                                        <a class=\"footer-link\"
                                                                           href=\"{{ category_url(category) }}\"
                                                                           {% if category_linknewtab(category) %}target=\"_blank\"{% endif %}
                                                                           title=\"{{ name }}\">
                                                                            {{ name }}
                                                                        </a>
                                                                    {% endif %}
                                                                {% endblock %}
                                                            </li>
                                                        {% endblock %}
                                                    {% endfor %}
                                                </ul>
                                            {% endblock %}
                                        </div>
                                    </div>
                                {% endblock %}
                            </div>
                        {% endblock %}
                    {% endfor %}
                {% endblock %}
            </div>
        {% endblock %}

        {% block layout_footer_payment_shipping_logos %}
            <div class=\"footer-logos\">
                {% block layout_footer_payment_logos %}
                    {% for paymentMethod in page.salesChannelPaymentMethods %}
                        {% block layout_footer_payment_logo %}
                            {% if paymentMethod.media %}
                                <div class=\"footer-logo is-payment\">
                                    {% sw_thumbnails 'footer-payment-image-thumbnails' with {
                                        media: paymentMethod.media,
                                        sizes: {
                                            'default': '100px'
                                        },
                                        attributes: {
                                            'class': 'img-fluid footer-logo-image',
                                            'alt': (paymentMethod.media.translated.alt ?: paymentMethod.translated.name),
                                            'title': (paymentMethod.media.translated.title ?: paymentMethod.translated.name)
                                        }
                                    } %}
                                </div>
                            {% endif %}
                        {% endblock %}
                    {% endfor %}
                {% endblock %}

                {% block layout_footer_shipping_logos %}
                    {% for shippingMethod in page.salesChannelShippingMethods %}
                        {% block layout_footer_shipping_logo %}
                            {% if shippingMethod.media %}
                                <div class=\"footer-logo is-shipping\">
                                    {% sw_thumbnails 'footer-shipping-image-thumbnails' with {
                                        media: shippingMethod.media,
                                        sizes: {
                                            'default': '100px'
                                        },
                                        attributes: {
                                            'class': 'img-fluid footer-logo-image',
                                            'alt': (shippingMethod.media.translated.alt ?: shippingMethod.translated.name),
                                            'title': (shippingMethod.media.translated.title ?: shippingMethod.translated.name)
                                        }
                                    } %}
                                </div>
                            {% endif %}
                        {% endblock %}
                    {% endfor %}
                {% endblock %}
            </div>
        {% endblock %}

    </div>

    {% block layout_footer_bottom %}
        <div class=\"footer-bottom\">
            {% block layout_footer_service_menu %}
                <div class=\"container\">
                    {% block layout_footer_service_menu_content %}
                        {% apply spaceless %}
                            <ul class=\"footer-service-menu-list list-unstyled\">
                                {% for serviceMenuItem in page.header.serviceMenu %}
                                    {% block layout_footer_service_menu_item %}
                                        <li class=\"footer-service-menu-item\">
                                            <a class=\"footer-service-menu-link\"
                                               href=\"{{ category_url(serviceMenuItem) }}\"
                                               {% if category_linknewtab(serviceMenuItem) %}target=\"_blank\"{% endif %}
                                               title=\"{{ serviceMenuItem.translated.name }}\">
                                                {{ serviceMenuItem.translated.name }}
                                            </a>
                                        </li>
                                    {% endblock %}
                                {% endfor %}
                            </ul>
                        {% endapply %}
                    {% endblock %}
                </div>
            {% endblock %}

            {% block layout_footer_vat %}
                {% if showVatNotice or showVatNotice is not defined %}
                    <div class=\"footer-vat\">
                        {% if context.taxState == \"gross\" %}
                            <p>
                                {{ \"footer.includeVatText\"|trans({
                                    '%url%': path('frontend.cms.page', { id: config('core.basicInformation.shippingPaymentInfoPage') })
                                })|raw }}
                            </p>
                        {% else %}
                            <p>
                                {{ \"footer.excludeVatText\"|trans({
                                    '%url%': path('frontend.cms.page', { id: config('core.basicInformation.shippingPaymentInfoPage') })
                                })|raw }}
                            </p>
                        {% endif %}
                    </div>
                {% endif %}
            {% endblock %}

            {% block layout_footer_copyright %}
                <div class=\"footer-copyright\">
                    {% sw_icon 'shopware' style {'size':'xs'} %}
                    {{ \"footer.copyrightInfo\"|trans|sw_sanitize }}
                </div>
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/layout/footer/footer.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/layout/footer/footer.html.twig");
    }
}
