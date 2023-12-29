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

/* @Storefront/storefront/layout/meta.html.twig */
class __TwigTemplate_e2fa8e7b2ebd5bc1ff15ed53eb90a585 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_head_inner' => [$this, 'block_layout_head_inner'],
            'layout_head_meta_tags' => [$this, 'block_layout_head_meta_tags'],
            'layout_head_meta_tags_charset' => [$this, 'block_layout_head_meta_tags_charset'],
            'layout_head_meta_tags_viewport' => [$this, 'block_layout_head_meta_tags_viewport'],
            'layout_head_meta_tags_general' => [$this, 'block_layout_head_meta_tags_general'],
            'layout_head_meta_tags_general_author' => [$this, 'block_layout_head_meta_tags_general_author'],
            'layout_head_meta_tags_robots' => [$this, 'block_layout_head_meta_tags_robots'],
            'layout_head_meta_tags_general_revisit' => [$this, 'block_layout_head_meta_tags_general_revisit'],
            'layout_head_meta_tags_keywords' => [$this, 'block_layout_head_meta_tags_keywords'],
            'layout_head_meta_tags_description' => [$this, 'block_layout_head_meta_tags_description'],
            'layout_head_meta_tags_opengraph' => [$this, 'block_layout_head_meta_tags_opengraph'],
            'layout_head_meta_tags_url_og' => [$this, 'block_layout_head_meta_tags_url_og'],
            'layout_head_meta_tags_type_og' => [$this, 'block_layout_head_meta_tags_type_og'],
            'layout_head_meta_tags_sitename_og' => [$this, 'block_layout_head_meta_tags_sitename_og'],
            'layout_head_meta_tags_title_og' => [$this, 'block_layout_head_meta_tags_title_og'],
            'layout_head_meta_tags_description_og' => [$this, 'block_layout_head_meta_tags_description_og'],
            'layout_head_meta_tags_image_og' => [$this, 'block_layout_head_meta_tags_image_og'],
            'layout_head_meta_tags_card_twitter' => [$this, 'block_layout_head_meta_tags_card_twitter'],
            'layout_head_meta_tags_sitename_twitter' => [$this, 'block_layout_head_meta_tags_sitename_twitter'],
            'layout_head_meta_tags_title_twitter' => [$this, 'block_layout_head_meta_tags_title_twitter'],
            'layout_head_meta_tags_description_twitter' => [$this, 'block_layout_head_meta_tags_description_twitter'],
            'layout_head_meta_tags_image_twitter' => [$this, 'block_layout_head_meta_tags_image_twitter'],
            'layout_head_meta_tags_schema_webpage' => [$this, 'block_layout_head_meta_tags_schema_webpage'],
            'layout_head_meta_tags_copyright_holder' => [$this, 'block_layout_head_meta_tags_copyright_holder'],
            'layout_head_meta_tags_copyright_year' => [$this, 'block_layout_head_meta_tags_copyright_year'],
            'layout_head_meta_tags_family_friendly' => [$this, 'block_layout_head_meta_tags_family_friendly'],
            'layout_head_meta_tags_image_meta' => [$this, 'block_layout_head_meta_tags_image_meta'],
            'layout_head_meta_tags_hreflangs' => [$this, 'block_layout_head_meta_tags_hreflangs'],
            'layout_head_favicon' => [$this, 'block_layout_head_favicon'],
            'layout_head_apple' => [$this, 'block_layout_head_apple'],
            'layout_head_canonical' => [$this, 'block_layout_head_canonical'],
            'layout_head_title' => [$this, 'block_layout_head_title'],
            'layout_head_title_inner' => [$this, 'block_layout_head_title_inner'],
            'layout_head_stylesheet' => [$this, 'block_layout_head_stylesheet'],
            'layout_head_javascript_feature' => [$this, 'block_layout_head_javascript_feature'],
            'layout_head_javascript_tracking' => [$this, 'block_layout_head_javascript_tracking'],
            'layout_head_javascript_recaptcha' => [$this, 'block_layout_head_javascript_recaptcha'],
            'layout_head_javascript_token' => [$this, 'block_layout_head_javascript_token'],
            'layout_head_javascript_cookie_state' => [$this, 'block_layout_head_javascript_cookie_state'],
            'layout_head_javascript_router' => [$this, 'block_layout_head_javascript_router'],
            'layout_head_javascript_breakpoints' => [$this, 'block_layout_head_javascript_breakpoints'],
            'layout_head_javascript_wishlist_state' => [$this, 'block_layout_head_javascript_wishlist_state'],
            'layout_head_javascript_jquery' => [$this, 'block_layout_head_javascript_jquery'],
            'layout_head_javascript_hmr_mode' => [$this, 'block_layout_head_javascript_hmr_mode'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/meta.html.twig"));

        // line 1
        $this->displayBlock('layout_head_inner', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_layout_head_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_inner"));

        // line 2
        echo "    ";
        $context["metaInformation"] = sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metaInformation", [], "any", false, false, false, 2);
        // line 3
        echo "    ";
        $context["basicConfig"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation");
        // line 4
        echo "    ";
        $context["maxLength"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "seo.descriptionMaxLength");
        // line 5
        echo "    ";
        $context["metaDescription"] = sw_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_trim_filter(twig_striptags(sw_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "metaDescription", [], "any", false, false, false, 5)))), "truncate", [(($context["maxLength"]) ?? (255)), "…"], "method", false, false, false, 5);
        // line 6
        echo "    ";
        $context["metaTitle"] = twig_trim_filter(twig_striptags(sw_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "metaTitle", [], "any", false, false, false, 6)));
        // line 7
        echo "    ";
        $context["metaKeywords"] = twig_trim_filter(twig_striptags(sw_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "metaKeywords", [], "any", false, false, false, 7)));
        // line 8
        echo "
    <head>
        ";
        // line 10
        $this->displayBlock('layout_head_meta_tags', $context, $blocks);
        // line 76
        echo "
        ";
        // line 77
        $this->displayBlock('layout_head_favicon', $context, $blocks);
        // line 81
        echo "
        ";
        // line 82
        $this->displayBlock('layout_head_apple', $context, $blocks);
        // line 89
        echo "
        ";
        // line 90
        $this->displayBlock('layout_head_canonical', $context, $blocks);
        // line 95
        echo "
        ";
        // line 96
        $this->displayBlock('layout_head_title', $context, $blocks);
        // line 103
        echo "
        ";
        // line 104
        $this->displayBlock('layout_head_stylesheet', $context, $blocks);
        // line 115
        echo "
        ";
        // line 116
        $this->displayBlock('layout_head_javascript_feature', $context, $blocks);
        // line 119
        echo "
        ";
        // line 121
        echo "        ";
        $this->displayBlock('layout_head_javascript_tracking', $context, $blocks);
        // line 124
        echo "
        ";
        // line 125
        $this->displayBlock('layout_head_javascript_recaptcha', $context, $blocks);
        // line 128
        echo "
        ";
        // line 129
        $this->displayBlock('layout_head_javascript_token', $context, $blocks);
        // line 131
        echo "
        ";
        // line 132
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.useDefaultCookieConsent")) {
            // line 133
            echo "            ";
            $this->displayBlock('layout_head_javascript_cookie_state', $context, $blocks);
            // line 138
            echo "        ";
        }
        // line 139
        echo "
        ";
        // line 140
        $this->displayBlock('layout_head_javascript_router', $context, $blocks);
        // line 159
        echo "
        ";
        // line 160
        $this->displayBlock('layout_head_javascript_breakpoints', $context, $blocks);
        // line 174
        echo "
        ";
        // line 175
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.cart.wishlistEnabled")) {
            // line 176
            echo "            ";
            $this->displayBlock('layout_head_javascript_wishlist_state', $context, $blocks);
            // line 183
            echo "        ";
        }
        // line 184
        echo "
        ";
        // line 186
        echo "        ";
        $this->displayBlock('layout_head_javascript_jquery', $context, $blocks);
        // line 188
        echo "
        ";
        // line 189
        $this->displayBlock('layout_head_javascript_hmr_mode', $context, $blocks);
        // line 203
        echo "    </head>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_layout_head_meta_tags($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags"));

        // line 11
        echo "            ";
        $this->displayBlock('layout_head_meta_tags_charset', $context, $blocks);
        // line 14
        echo "
            ";
        // line 15
        $this->displayBlock('layout_head_meta_tags_viewport', $context, $blocks);
        // line 19
        echo "
            ";
        // line 20
        $this->displayBlock('layout_head_meta_tags_general', $context, $blocks);
        // line 32
        echo "
            ";
        // line 33
        $this->displayBlock('layout_head_meta_tags_opengraph', $context, $blocks);
        // line 58
        echo "
            ";
        // line 59
        $this->displayBlock('layout_head_meta_tags_schema_webpage', $context, $blocks);
        // line 69
        echo "
            ";
        // line 70
        $this->displayBlock('layout_head_meta_tags_hreflangs', $context, $blocks);
        // line 75
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_layout_head_meta_tags_charset($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_charset"));

        // line 12
        echo "                <meta charset=\"utf-8\">
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 15
    public function block_layout_head_meta_tags_viewport($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_viewport"));

        // line 16
        echo "                <meta name=\"viewport\"
                      content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 20
    public function block_layout_head_meta_tags_general($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_general"));

        // line 21
        echo "                <meta name=\"author\"
                      content=\"";
        // line 22
        $this->displayBlock('layout_head_meta_tags_general_author', $context, $blocks);
        echo "\">
                <meta name=\"robots\"
                      content=\"";
        // line 24
        $this->displayBlock('layout_head_meta_tags_robots', $context, $blocks);
        echo "\">
                <meta name=\"revisit-after\"
                      content=\"";
        // line 26
        $this->displayBlock('layout_head_meta_tags_general_revisit', $context, $blocks);
        echo "\">
                <meta name=\"keywords\"
                      content=\"";
        // line 28
        $this->displayBlock('layout_head_meta_tags_keywords', $context, $blocks);
        echo "\">
                <meta name=\"description\"
                      content=\"";
        // line 30
        $this->displayBlock('layout_head_meta_tags_description', $context, $blocks);
        echo "\">
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 22
    public function block_layout_head_meta_tags_general_author($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_general_author"));

        echo sw_escape_filter($this->env, twig_striptags(sw_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "author", [], "any", false, false, false, 22)), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 24
    public function block_layout_head_meta_tags_robots($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_robots"));

        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "robots", [], "any", false, false, false, 24), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 26
    public function block_layout_head_meta_tags_general_revisit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_general_revisit"));

        echo sw_escape_filter($this->env, twig_striptags(sw_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "revisit", [], "any", false, false, false, 26)), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 28
    public function block_layout_head_meta_tags_keywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_keywords"));

        echo sw_escape_filter($this->env, ($context["metaKeywords"] ?? null), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 30
    public function block_layout_head_meta_tags_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_description"));

        echo sw_escape_filter($this->env, ($context["metaDescription"] ?? null), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 33
    public function block_layout_head_meta_tags_opengraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_opengraph"));

        // line 34
        echo "                <meta property=\"og:url\"
                      content=\"";
        // line 35
        $this->displayBlock('layout_head_meta_tags_url_og', $context, $blocks);
        echo "\">
                <meta property=\"og:type\"
                      content=\"";
        // line 37
        $this->displayBlock('layout_head_meta_tags_type_og', $context, $blocks);
        echo "\">
                <meta property=\"og:site_name\"
                      content=\"";
        // line 39
        $this->displayBlock('layout_head_meta_tags_sitename_og', $context, $blocks);
        echo "\">
                <meta property=\"og:title\"
                      content=\"";
        // line 41
        $this->displayBlock('layout_head_meta_tags_title_og', $context, $blocks);
        echo "\">
                <meta property=\"og:description\"
                      content=\"";
        // line 43
        $this->displayBlock('layout_head_meta_tags_description_og', $context, $blocks);
        echo "\">
                <meta property=\"og:image\"
                      content=\"";
        // line 45
        $this->displayBlock('layout_head_meta_tags_image_og', $context, $blocks);
        echo "\">

                <meta name=\"twitter:card\"
                      content=\"";
        // line 48
        $this->displayBlock('layout_head_meta_tags_card_twitter', $context, $blocks);
        echo "\">
                <meta name=\"twitter:site\"
                      content=\"";
        // line 50
        $this->displayBlock('layout_head_meta_tags_sitename_twitter', $context, $blocks);
        echo "\">
                <meta name=\"twitter:title\"
                      content=\"";
        // line 52
        $this->displayBlock('layout_head_meta_tags_title_twitter', $context, $blocks);
        echo "\">
                <meta name=\"twitter:description\"
                      content=\"";
        // line 54
        $this->displayBlock('layout_head_meta_tags_description_twitter', $context, $blocks);
        echo "\">
                <meta name=\"twitter:image\"
                      content=\"";
        // line 56
        $this->displayBlock('layout_head_meta_tags_image_twitter', $context, $blocks);
        echo "\">
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 35
    public function block_layout_head_meta_tags_url_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_url_og"));

        echo sw_escape_filter($this->env, ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metaInformation", [], "any", false, true, false, 35), "canonical", [], "any", true, true, false, 35)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metaInformation", [], "any", false, false, false, 35), "canonical", [], "any", false, false, false, 35)) : (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 35), "uri", [], "any", false, false, false, 35))), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 37
    public function block_layout_head_meta_tags_type_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_type_og"));

        echo "website";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 39
    public function block_layout_head_meta_tags_sitename_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_sitename_og"));

        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["basicConfig"] ?? null), "shopName", [], "any", false, false, false, 39), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 41
    public function block_layout_head_meta_tags_title_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_title_og"));

        echo sw_escape_filter($this->env, ($context["metaTitle"] ?? null), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 43
    public function block_layout_head_meta_tags_description_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_description_og"));

        echo sw_escape_filter($this->env, ($context["metaDescription"] ?? null), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 45
    public function block_layout_head_meta_tags_image_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_image_og"));

        echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 48
    public function block_layout_head_meta_tags_card_twitter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_card_twitter"));

        echo "summary";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 50
    public function block_layout_head_meta_tags_sitename_twitter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_sitename_twitter"));

        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["basicConfig"] ?? null), "shopName", [], "any", false, false, false, 50), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 52
    public function block_layout_head_meta_tags_title_twitter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_title_twitter"));

        echo sw_escape_filter($this->env, ($context["metaTitle"] ?? null), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 54
    public function block_layout_head_meta_tags_description_twitter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_description_twitter"));

        echo sw_escape_filter($this->env, ($context["metaDescription"] ?? null), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 56
    public function block_layout_head_meta_tags_image_twitter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_image_twitter"));

        echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 59
    public function block_layout_head_meta_tags_schema_webpage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_schema_webpage"));

        // line 60
        echo "                <meta itemprop=\"copyrightHolder\"
                      content=\"";
        // line 61
        $this->displayBlock('layout_head_meta_tags_copyright_holder', $context, $blocks);
        echo "\">
                <meta itemprop=\"copyrightYear\"
                      content=\"";
        // line 63
        $this->displayBlock('layout_head_meta_tags_copyright_year', $context, $blocks);
        echo "\">
                <meta itemprop=\"isFamilyFriendly\"
                      content=\"";
        // line 65
        $this->displayBlock('layout_head_meta_tags_family_friendly', $context, $blocks);
        echo "\">
                <meta itemprop=\"image\"
                      content=\"";
        // line 67
        $this->displayBlock('layout_head_meta_tags_image_meta', $context, $blocks);
        echo "\">
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 61
    public function block_layout_head_meta_tags_copyright_holder($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_copyright_holder"));

        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["basicConfig"] ?? null), "shopName", [], "any", false, false, false, 61), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 63
    public function block_layout_head_meta_tags_copyright_year($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_copyright_year"));

        echo sw_escape_filter($this->env, twig_striptags(sw_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "copyrightYear", [], "any", false, false, false, 63)), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 65
    public function block_layout_head_meta_tags_family_friendly($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_family_friendly"));

        if (sw_get_attribute($this->env, $this->source, ($context["basicConfig"] ?? null), "familyFriendly", [], "any", false, false, false, 65)) {
            echo "true";
        } else {
            echo "false";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 67
    public function block_layout_head_meta_tags_image_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_image_meta"));

        echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 70
    public function block_layout_head_meta_tags_hreflangs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_meta_tags_hreflangs"));

        // line 71
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["hrefLang"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 72
            echo "                    <link rel=\"alternate\" hreflang=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["link"], "locale", [], "any", false, false, false, 72), "html", null, true);
            echo "\" href=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, false, 72), "html", null, true);
            echo "\">
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 77
    public function block_layout_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_favicon"));

        // line 78
        echo "            <link rel=\"shortcut icon\"
                  href=\"";
        // line 79
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-favicon"), "html", null, true);
        echo "\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 82
    public function block_layout_head_apple($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_apple"));

        // line 83
        echo "            ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-share")) {
            // line 84
            echo "            <link rel=\"apple-touch-icon\"
                  sizes=\"180x180\"
                  href=\"";
            // line 86
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-share"), "html", null, true);
            echo "\">
            ";
        }
        // line 88
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 90
    public function block_layout_head_canonical($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_canonical"));

        // line 91
        echo "            ";
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metaInformation", [], "any", false, false, false, 91), "canonical", [], "any", false, false, false, 91)) {
            // line 92
            echo "                <link rel=\"canonical\" href=\"";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metaInformation", [], "any", false, false, false, 92), "canonical", [], "any", false, false, false, 92), "html", null, true);
            echo "\">
            ";
        }
        // line 94
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 96
    public function block_layout_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_title"));

        // line 97
        echo "            <title itemprop=\"name\">";
        ob_start();
        // line 98
        echo "                ";
        $this->displayBlock('layout_head_title_inner', $context, $blocks);
        // line 101
        echo "            ";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 97
        echo twig_spaceless($___internal_parse_0_);
        // line 101
        echo "</title>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 98
    public function block_layout_head_title_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_title_inner"));

        // line 99
        echo "                    ";
        echo sw_escape_filter($this->env, ($context["metaTitle"] ?? null), "html", null, true);
        echo "
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 104
    public function block_layout_head_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_stylesheet"));

        // line 105
        echo "            ";
        if (($context["isHMRMode"] ?? null)) {
            // line 106
            echo "                ";
            // line 107
            echo "            ";
        } else {
            // line 108
            echo "                ";
            $context["assets"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "assets.css");
            // line 109
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["assets"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 110
                echo "                    <link rel=\"stylesheet\"
                      href=\"";
                // line 111
                echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["file"], "theme"), "html", null, true);
                echo "\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "            ";
        }
        // line 114
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 116
    public function block_layout_head_javascript_feature($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_feature"));

        // line 117
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/component/feature.html.twig", "@Storefront/storefront/layout/meta.html.twig", 117)->display($context);
        // line 118
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 121
    public function block_layout_head_javascript_tracking($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_tracking"));

        // line 122
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/component/analytics.html.twig", "@Storefront/storefront/layout/meta.html.twig", 122)->display($context);
        // line 123
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 125
    public function block_layout_head_javascript_recaptcha($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_recaptcha"));

        // line 126
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/component/recaptcha.html.twig", "@Storefront/storefront/layout/meta.html.twig", 126)->display($context);
        // line 127
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 129
    public function block_layout_head_javascript_token($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_token"));

        // line 130
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 133
    public function block_layout_head_javascript_cookie_state($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_cookie_state"));

        // line 134
        echo "                <script>
                    window.useDefaultCookieConsent = true;
                </script>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 140
    public function block_layout_head_javascript_router($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_router"));

        // line 141
        echo "            ";
        // line 142
        echo "            <script>
                window.activeNavigationId = '";
        // line 143
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, false, 143), "navigation", [], "any", false, false, false, 143), "active", [], "any", false, false, false, 143), "id", [], "any", false, false, false, 143), "html", null, true);
        echo "';
                window.router = {
                    'frontend.cart.offcanvas': '";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cart.offcanvas");
        echo "',
                    'frontend.cookie.offcanvas': '";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cookie.offcanvas");
        echo "',
                    'frontend.checkout.finish.page': '";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.finish.page");
        echo "',
                    'frontend.checkout.info': '";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.info");
        echo "',
                    'frontend.menu.offcanvas': '";
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.menu.offcanvas");
        echo "',
                    'frontend.cms.page': '";
        // line 150
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page");
        echo "',
                    'frontend.cms.navigation.page': '";
        // line 151
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.navigation.page");
        echo "',
                    'frontend.account.addressbook': '";
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.addressbook");
        echo "',
                    'frontend.country.country-data': '";
        // line 153
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.country.country.data");
        echo "',
                    'frontend.app-system.generate-token': '";
        // line 154
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.app-system.generate-token", ["name" => "Placeholder"]);
        echo "',
                    };
                window.salesChannelId = '";
        // line 156
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 156), "attributes", [], "any", false, false, false, 156), "get", ["sw-sales-channel-id"], "method", false, false, false, 156), "html", null, true);
        echo "';
            </script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 160
    public function block_layout_head_javascript_breakpoints($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_breakpoints"));

        // line 161
        echo "            ";
        // line 162
        echo "            <script>
                ";
        // line 163
        $context["breakpoint"] = ["xs" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xs"), "sm" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.sm"), "md" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md"), "lg" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.lg"), "xl" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.xl")];
        // line 170
        echo "
                window.breakpoints = ";
        // line 171
        echo $this->env->getFilter('json_encode')->getCallable()(($context["breakpoint"] ?? null));
        echo ";
            </script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 176
    public function block_layout_head_javascript_wishlist_state($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_wishlist_state"));

        // line 177
        echo "                <script>
                    window.customerLoggedInState = ";
        // line 178
        echo ((( !(null === sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 178)) &&  !sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 178), "guest", [], "any", false, false, false, 178))) ? (1) : (0));
        echo ";

                    window.wishlistEnabled = ";
        // line 180
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.cart.wishlistEnabled"), "html", null, true);
        echo ";
                </script>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 186
    public function block_layout_head_javascript_jquery($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_jquery"));

        // line 187
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 189
    public function block_layout_head_javascript_hmr_mode($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_head_javascript_hmr_mode"));

        // line 190
        echo "            ";
        if (($context["isHMRMode"] ?? null)) {
            // line 191
            echo "                <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/vendor-node.js\" defer></script>
                <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/vendor-shared.js\" defer></script>
                <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/runtime.js\" defer></script>
                <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/app.js\" defer></script>
                ";
            // line 196
            echo "                <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/storefront.js\" defer></script>
            ";
        } else {
            // line 198
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "assets.js"));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 199
                echo "                    <script type=\"text/javascript\" src=\"";
                echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["file"], "theme"), "html", null, true);
                echo "\" defer></script>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 201
            echo "            ";
        }
        // line 202
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/meta.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  1136 => 202,  1133 => 201,  1124 => 199,  1119 => 198,  1115 => 196,  1109 => 191,  1106 => 190,  1099 => 189,  1092 => 187,  1085 => 186,  1075 => 180,  1070 => 178,  1067 => 177,  1060 => 176,  1050 => 171,  1047 => 170,  1045 => 163,  1042 => 162,  1040 => 161,  1033 => 160,  1023 => 156,  1018 => 154,  1014 => 153,  1010 => 152,  1006 => 151,  1002 => 150,  998 => 149,  994 => 148,  990 => 147,  986 => 146,  982 => 145,  977 => 143,  974 => 142,  972 => 141,  965 => 140,  955 => 134,  948 => 133,  941 => 130,  934 => 129,  927 => 127,  924 => 126,  917 => 125,  910 => 123,  907 => 122,  900 => 121,  893 => 118,  890 => 117,  883 => 116,  876 => 114,  873 => 113,  865 => 111,  862 => 110,  857 => 109,  854 => 108,  851 => 107,  849 => 106,  846 => 105,  839 => 104,  829 => 99,  822 => 98,  814 => 101,  812 => 97,  809 => 101,  806 => 98,  803 => 97,  796 => 96,  789 => 94,  783 => 92,  780 => 91,  773 => 90,  766 => 88,  761 => 86,  757 => 84,  754 => 83,  747 => 82,  738 => 79,  735 => 78,  728 => 77,  721 => 74,  710 => 72,  705 => 71,  698 => 70,  685 => 67,  668 => 65,  655 => 63,  642 => 61,  633 => 67,  628 => 65,  623 => 63,  618 => 61,  615 => 60,  608 => 59,  595 => 56,  582 => 54,  569 => 52,  556 => 50,  543 => 48,  530 => 45,  517 => 43,  504 => 41,  491 => 39,  478 => 37,  465 => 35,  456 => 56,  451 => 54,  446 => 52,  441 => 50,  436 => 48,  430 => 45,  425 => 43,  420 => 41,  415 => 39,  410 => 37,  405 => 35,  402 => 34,  395 => 33,  382 => 30,  369 => 28,  356 => 26,  343 => 24,  330 => 22,  321 => 30,  316 => 28,  311 => 26,  306 => 24,  301 => 22,  298 => 21,  291 => 20,  282 => 16,  275 => 15,  267 => 12,  260 => 11,  253 => 75,  251 => 70,  248 => 69,  246 => 59,  243 => 58,  241 => 33,  238 => 32,  236 => 20,  233 => 19,  231 => 15,  228 => 14,  225 => 11,  218 => 10,  210 => 203,  208 => 189,  205 => 188,  202 => 186,  199 => 184,  196 => 183,  193 => 176,  191 => 175,  188 => 174,  186 => 160,  183 => 159,  181 => 140,  178 => 139,  175 => 138,  172 => 133,  170 => 132,  167 => 131,  165 => 129,  162 => 128,  160 => 125,  157 => 124,  154 => 121,  151 => 119,  149 => 116,  146 => 115,  144 => 104,  141 => 103,  139 => 96,  136 => 95,  134 => 90,  131 => 89,  129 => 82,  126 => 81,  124 => 77,  121 => 76,  119 => 10,  115 => 8,  112 => 7,  109 => 6,  106 => 5,  103 => 4,  100 => 3,  97 => 2,  84 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_head_inner %}
    {% set metaInformation = page.metaInformation %}
    {% set basicConfig = config('core.basicInformation') %}
    {% set maxLength = config('seo.descriptionMaxLength') %}
    {% set metaDescription = metaInformation.metaDescription|striptags|trim|u.truncate(maxLength ?? 255, '…') %}
    {% set metaTitle = metaInformation.metaTitle|striptags|trim %}
    {% set metaKeywords = metaInformation.metaKeywords|striptags|trim %}

    <head>
        {% block layout_head_meta_tags %}
            {% block layout_head_meta_tags_charset %}
                <meta charset=\"utf-8\">
            {% endblock %}

            {% block layout_head_meta_tags_viewport %}
                <meta name=\"viewport\"
                      content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            {% endblock %}

            {% block layout_head_meta_tags_general %}
                <meta name=\"author\"
                      content=\"{% block layout_head_meta_tags_general_author %}{{ metaInformation.author|striptags }}{% endblock %}\">
                <meta name=\"robots\"
                      content=\"{% block layout_head_meta_tags_robots %}{{ metaInformation.robots }}{% endblock %}\">
                <meta name=\"revisit-after\"
                      content=\"{% block layout_head_meta_tags_general_revisit %}{{ metaInformation.revisit|striptags }}{% endblock %}\">
                <meta name=\"keywords\"
                      content=\"{% block layout_head_meta_tags_keywords %}{{ metaKeywords }}{% endblock %}\">
                <meta name=\"description\"
                      content=\"{% block layout_head_meta_tags_description %}{{ metaDescription }}{% endblock %}\">
            {% endblock %}

            {% block layout_head_meta_tags_opengraph %}
                <meta property=\"og:url\"
                      content=\"{% block layout_head_meta_tags_url_og %}{{ (page.metaInformation.canonical is defined) ? page.metaInformation.canonical : app.request.uri }}{% endblock %}\">
                <meta property=\"og:type\"
                      content=\"{% block layout_head_meta_tags_type_og %}website{% endblock %}\">
                <meta property=\"og:site_name\"
                      content=\"{% block layout_head_meta_tags_sitename_og %}{{ basicConfig.shopName }}{% endblock %}\">
                <meta property=\"og:title\"
                      content=\"{% block layout_head_meta_tags_title_og %}{{ metaTitle }}{% endblock %}\">
                <meta property=\"og:description\"
                      content=\"{% block layout_head_meta_tags_description_og %}{{ metaDescription }}{% endblock %}\">
                <meta property=\"og:image\"
                      content=\"{% block layout_head_meta_tags_image_og %}{{ theme_config('sw-logo-desktop') }}{% endblock %}\">

                <meta name=\"twitter:card\"
                      content=\"{% block layout_head_meta_tags_card_twitter %}summary{% endblock %}\">
                <meta name=\"twitter:site\"
                      content=\"{% block layout_head_meta_tags_sitename_twitter %}{{ basicConfig.shopName }}{% endblock %}\">
                <meta name=\"twitter:title\"
                      content=\"{% block layout_head_meta_tags_title_twitter %}{{ metaTitle }}{% endblock %}\">
                <meta name=\"twitter:description\"
                      content=\"{% block layout_head_meta_tags_description_twitter %}{{ metaDescription }}{% endblock %}\">
                <meta name=\"twitter:image\"
                      content=\"{% block layout_head_meta_tags_image_twitter %}{{ theme_config('sw-logo-desktop') }}{% endblock %}\">
            {% endblock %}

            {% block layout_head_meta_tags_schema_webpage %}
                <meta itemprop=\"copyrightHolder\"
                      content=\"{% block layout_head_meta_tags_copyright_holder %}{{ basicConfig.shopName }}{% endblock %}\">
                <meta itemprop=\"copyrightYear\"
                      content=\"{% block layout_head_meta_tags_copyright_year %}{{ metaInformation.copyrightYear|striptags }}{% endblock %}\">
                <meta itemprop=\"isFamilyFriendly\"
                      content=\"{% block layout_head_meta_tags_family_friendly %}{% if basicConfig.familyFriendly %}true{% else %}false{% endif %}{% endblock %}\">
                <meta itemprop=\"image\"
                      content=\"{% block layout_head_meta_tags_image_meta %}{{ theme_config('sw-logo-desktop') }}{% endblock %}\">
            {% endblock %}

            {% block layout_head_meta_tags_hreflangs %}
                {% for link in hrefLang %}
                    <link rel=\"alternate\" hreflang=\"{{ link.locale }}\" href=\"{{ link.url }}\">
                {% endfor %}
            {% endblock %}
        {% endblock %}

        {% block layout_head_favicon %}
            <link rel=\"shortcut icon\"
                  href=\"{{ theme_config('sw-logo-favicon') }}\">
        {% endblock %}

        {% block layout_head_apple %}
            {% if theme_config('sw-logo-share') %}
            <link rel=\"apple-touch-icon\"
                  sizes=\"180x180\"
                  href=\"{{ theme_config('sw-logo-share') }}\">
            {% endif %}
        {% endblock %}

        {% block layout_head_canonical %}
            {% if page.metaInformation.canonical %}
                <link rel=\"canonical\" href=\"{{ page.metaInformation.canonical }}\">
            {% endif %}
        {% endblock %}

        {% block layout_head_title %}
            <title itemprop=\"name\">{% apply spaceless %}
                {% block layout_head_title_inner %}
                    {{ metaTitle }}
                {% endblock %}
            {% endapply %}</title>
        {% endblock %}

        {% block layout_head_stylesheet %}
            {% if isHMRMode %}
                {# CSS will be loaded from the JS automatically #}
            {% else %}
                {% set assets = theme_config('assets.css') %}
                {% for file in assets %}
                    <link rel=\"stylesheet\"
                      href=\"{{ asset(file, 'theme') }}\">
                {% endfor %}
            {% endif %}
        {% endblock %}

        {% block layout_head_javascript_feature %}
            {% sw_include \"@Storefront/storefront/component/feature.html.twig\" %}
        {% endblock %}

        {# Block for tracking scripts which are required to be included in the `head` section of the document #}
        {% block layout_head_javascript_tracking %}
            {% sw_include \"@Storefront/storefront/component/analytics.html.twig\" %}
        {% endblock %}

        {% block layout_head_javascript_recaptcha %}
            {% sw_include \"@Storefront/storefront/component/recaptcha.html.twig\" %}
        {% endblock %}

        {% block layout_head_javascript_token %}
        {% endblock %}

        {% if config('core.basicInformation.useDefaultCookieConsent') %}
            {% block layout_head_javascript_cookie_state %}
                <script>
                    window.useDefaultCookieConsent = true;
                </script>
            {% endblock %}
        {% endif %}

        {% block layout_head_javascript_router %}
            {# Register all routes that will be needed in JavaScript to the window.router object #}
            <script>
                window.activeNavigationId = '{{ page.header.navigation.active.id }}';
                window.router = {
                    'frontend.cart.offcanvas': '{{ path('frontend.cart.offcanvas') }}',
                    'frontend.cookie.offcanvas': '{{ path('frontend.cookie.offcanvas') }}',
                    'frontend.checkout.finish.page': '{{ path('frontend.checkout.finish.page') }}',
                    'frontend.checkout.info': '{{ path('frontend.checkout.info') }}',
                    'frontend.menu.offcanvas': '{{ path('frontend.menu.offcanvas') }}',
                    'frontend.cms.page': '{{ path('frontend.cms.page') }}',
                    'frontend.cms.navigation.page': '{{ path('frontend.cms.navigation.page') }}',
                    'frontend.account.addressbook': '{{ path('frontend.account.addressbook') }}',
                    'frontend.country.country-data': '{{ path('frontend.country.country.data') }}',
                    'frontend.app-system.generate-token': '{{ path('frontend.app-system.generate-token', { name: \"Placeholder\" }) }}',
                    };
                window.salesChannelId = '{{ app.request.attributes.get('sw-sales-channel-id') }}';
            </script>
        {% endblock %}

        {% block layout_head_javascript_breakpoints %}
            {# Register the available viewport breakpoints as window.breakpoints object #}
            <script>
                {% set breakpoint = {
                    'xs': theme_config('breakpoint.xs'),
                    'sm': theme_config('breakpoint.sm'),
                    'md': theme_config('breakpoint.md'),
                    'lg': theme_config('breakpoint.lg'),
                    'xl': theme_config('breakpoint.xl')
                } %}

                window.breakpoints = {{ breakpoint|json_encode()|raw }};
            </script>
        {% endblock %}

        {% if config('core.cart.wishlistEnabled') %}
            {% block layout_head_javascript_wishlist_state %}
                <script>
                    window.customerLoggedInState = {{ context.customer is not null and not context.customer.guest ? 1 : 0 }};

                    window.wishlistEnabled = {{ config('core.cart.wishlistEnabled') }};
                </script>
            {% endblock %}
        {% endif %}

        {# jQuery is removed from the default Storefront since tag:v6.5.0 - This block should be used to add jQuery as a `<script>` if needed. #}
        {% block layout_head_javascript_jquery %}
        {% endblock %}

        {% block layout_head_javascript_hmr_mode %}
            {% if isHMRMode %}
                <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/vendor-node.js\" defer></script>
                <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/vendor-shared.js\" defer></script>
                <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/runtime.js\" defer></script>
                <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/app.js\" defer></script>
                {# The storefront entry is a combined entry point which contains all plugins & themes #}
                <script type=\"text/javascript\" src=\"/_webpack_hot_proxy_/js/storefront.js\" defer></script>
            {% else %}
                {% for file in theme_config('assets.js') %}
                    <script type=\"text/javascript\" src=\"{{ asset(file, 'theme') }}\" defer></script>
                {% endfor %}
            {% endif %}
        {% endblock %}
    </head>
{% endblock %}
", "@Storefront/storefront/layout/meta.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/layout/meta.html.twig");
    }
}
