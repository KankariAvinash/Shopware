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
class __TwigTemplate_4e7975df4fd0ef2e2f80d590bdc72f91 extends Template
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
        // line 1
        $this->displayBlock('layout_head_inner', $context, $blocks);
    }

    public function block_layout_head_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 10
    public function block_layout_head_meta_tags($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 11
    public function block_layout_head_meta_tags_charset($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "                <meta charset=\"utf-8\">
            ";
    }

    // line 15
    public function block_layout_head_meta_tags_viewport($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "                <meta name=\"viewport\"
                      content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
            ";
    }

    // line 20
    public function block_layout_head_meta_tags_general($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 22
    public function block_layout_head_meta_tags_general_author($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, twig_striptags(sw_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "author", [], "any", false, false, false, 22)), "html", null, true);
    }

    // line 24
    public function block_layout_head_meta_tags_robots($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "robots", [], "any", false, false, false, 24), "html", null, true);
    }

    // line 26
    public function block_layout_head_meta_tags_general_revisit($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, twig_striptags(sw_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "revisit", [], "any", false, false, false, 26)), "html", null, true);
    }

    // line 28
    public function block_layout_head_meta_tags_keywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, ($context["metaKeywords"] ?? null), "html", null, true);
    }

    // line 30
    public function block_layout_head_meta_tags_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, ($context["metaDescription"] ?? null), "html", null, true);
    }

    // line 33
    public function block_layout_head_meta_tags_opengraph($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 35
    public function block_layout_head_meta_tags_url_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metaInformation", [], "any", false, true, false, 35), "canonical", [], "any", true, true, false, 35)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "metaInformation", [], "any", false, false, false, 35), "canonical", [], "any", false, false, false, 35)) : (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 35), "uri", [], "any", false, false, false, 35))), "html", null, true);
    }

    // line 37
    public function block_layout_head_meta_tags_type_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "website";
    }

    // line 39
    public function block_layout_head_meta_tags_sitename_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["basicConfig"] ?? null), "shopName", [], "any", false, false, false, 39), "html", null, true);
    }

    // line 41
    public function block_layout_head_meta_tags_title_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, ($context["metaTitle"] ?? null), "html", null, true);
    }

    // line 43
    public function block_layout_head_meta_tags_description_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, ($context["metaDescription"] ?? null), "html", null, true);
    }

    // line 45
    public function block_layout_head_meta_tags_image_og($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop"), "html", null, true);
    }

    // line 48
    public function block_layout_head_meta_tags_card_twitter($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "summary";
    }

    // line 50
    public function block_layout_head_meta_tags_sitename_twitter($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["basicConfig"] ?? null), "shopName", [], "any", false, false, false, 50), "html", null, true);
    }

    // line 52
    public function block_layout_head_meta_tags_title_twitter($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, ($context["metaTitle"] ?? null), "html", null, true);
    }

    // line 54
    public function block_layout_head_meta_tags_description_twitter($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, ($context["metaDescription"] ?? null), "html", null, true);
    }

    // line 56
    public function block_layout_head_meta_tags_image_twitter($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop"), "html", null, true);
    }

    // line 59
    public function block_layout_head_meta_tags_schema_webpage($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 61
    public function block_layout_head_meta_tags_copyright_holder($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["basicConfig"] ?? null), "shopName", [], "any", false, false, false, 61), "html", null, true);
    }

    // line 63
    public function block_layout_head_meta_tags_copyright_year($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, twig_striptags(sw_get_attribute($this->env, $this->source, ($context["metaInformation"] ?? null), "copyrightYear", [], "any", false, false, false, 63)), "html", null, true);
    }

    // line 65
    public function block_layout_head_meta_tags_family_friendly($context, array $blocks = [])
    {
        $macros = $this->macros;
        if (sw_get_attribute($this->env, $this->source, ($context["basicConfig"] ?? null), "familyFriendly", [], "any", false, false, false, 65)) {
            echo "true";
        } else {
            echo "false";
        }
    }

    // line 67
    public function block_layout_head_meta_tags_image_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-desktop"), "html", null, true);
    }

    // line 70
    public function block_layout_head_meta_tags_hreflangs($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 77
    public function block_layout_head_favicon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 78
        echo "            <link rel=\"shortcut icon\"
                  href=\"";
        // line 79
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "sw-logo-favicon"), "html", null, true);
        echo "\">
        ";
    }

    // line 82
    public function block_layout_head_apple($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 90
    public function block_layout_head_canonical($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 96
    public function block_layout_head_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "            <title itemprop=\"name\">";
        ob_start(function () { return ''; });
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
    }

    // line 98
    public function block_layout_head_title_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 99
        echo "                    ";
        echo sw_escape_filter($this->env, ($context["metaTitle"] ?? null), "html", null, true);
        echo "
                ";
    }

    // line 104
    public function block_layout_head_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 116
    public function block_layout_head_javascript_feature($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 117
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/component/feature.html.twig", "@Storefront/storefront/layout/meta.html.twig", 117)->display($context);
        // line 118
        echo "        ";
    }

    // line 121
    public function block_layout_head_javascript_tracking($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 122
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/component/analytics.html.twig", "@Storefront/storefront/layout/meta.html.twig", 122)->display($context);
        // line 123
        echo "        ";
    }

    // line 125
    public function block_layout_head_javascript_recaptcha($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 126
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/component/recaptcha.html.twig", "@Storefront/storefront/layout/meta.html.twig", 126)->display($context);
        // line 127
        echo "        ";
    }

    // line 129
    public function block_layout_head_javascript_token($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 130
        echo "        ";
    }

    // line 133
    public function block_layout_head_javascript_cookie_state($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 134
        echo "                <script>
                    window.useDefaultCookieConsent = true;
                </script>
            ";
    }

    // line 140
    public function block_layout_head_javascript_router($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 160
    public function block_layout_head_javascript_breakpoints($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 176
    public function block_layout_head_javascript_wishlist_state($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 186
    public function block_layout_head_javascript_jquery($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 187
        echo "        ";
    }

    // line 189
    public function block_layout_head_javascript_hmr_mode($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  869 => 202,  866 => 201,  857 => 199,  852 => 198,  848 => 196,  842 => 191,  839 => 190,  835 => 189,  831 => 187,  827 => 186,  820 => 180,  815 => 178,  812 => 177,  808 => 176,  801 => 171,  798 => 170,  796 => 163,  793 => 162,  791 => 161,  787 => 160,  780 => 156,  775 => 154,  771 => 153,  767 => 152,  763 => 151,  759 => 150,  755 => 149,  751 => 148,  747 => 147,  743 => 146,  739 => 145,  734 => 143,  731 => 142,  729 => 141,  725 => 140,  718 => 134,  714 => 133,  710 => 130,  706 => 129,  702 => 127,  699 => 126,  695 => 125,  691 => 123,  688 => 122,  684 => 121,  680 => 118,  677 => 117,  673 => 116,  669 => 114,  666 => 113,  658 => 111,  655 => 110,  650 => 109,  647 => 108,  644 => 107,  642 => 106,  639 => 105,  635 => 104,  628 => 99,  624 => 98,  619 => 101,  617 => 97,  614 => 101,  611 => 98,  608 => 97,  604 => 96,  600 => 94,  594 => 92,  591 => 91,  587 => 90,  583 => 88,  578 => 86,  574 => 84,  571 => 83,  567 => 82,  561 => 79,  558 => 78,  554 => 77,  550 => 74,  539 => 72,  534 => 71,  530 => 70,  523 => 67,  512 => 65,  505 => 63,  498 => 61,  492 => 67,  487 => 65,  482 => 63,  477 => 61,  474 => 60,  470 => 59,  463 => 56,  456 => 54,  449 => 52,  442 => 50,  435 => 48,  428 => 45,  421 => 43,  414 => 41,  407 => 39,  400 => 37,  393 => 35,  387 => 56,  382 => 54,  377 => 52,  372 => 50,  367 => 48,  361 => 45,  356 => 43,  351 => 41,  346 => 39,  341 => 37,  336 => 35,  333 => 34,  329 => 33,  322 => 30,  315 => 28,  308 => 26,  301 => 24,  294 => 22,  288 => 30,  283 => 28,  278 => 26,  273 => 24,  268 => 22,  265 => 21,  261 => 20,  255 => 16,  251 => 15,  246 => 12,  242 => 11,  238 => 75,  236 => 70,  233 => 69,  231 => 59,  228 => 58,  226 => 33,  223 => 32,  221 => 20,  218 => 19,  216 => 15,  213 => 14,  210 => 11,  206 => 10,  201 => 203,  199 => 189,  196 => 188,  193 => 186,  190 => 184,  187 => 183,  184 => 176,  182 => 175,  179 => 174,  177 => 160,  174 => 159,  172 => 140,  169 => 139,  166 => 138,  163 => 133,  161 => 132,  158 => 131,  156 => 129,  153 => 128,  151 => 125,  148 => 124,  145 => 121,  142 => 119,  140 => 116,  137 => 115,  135 => 104,  132 => 103,  130 => 96,  127 => 95,  125 => 90,  122 => 89,  120 => 82,  117 => 81,  115 => 77,  112 => 76,  110 => 10,  106 => 8,  103 => 7,  100 => 6,  97 => 5,  94 => 4,  91 => 3,  88 => 2,  81 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/layout/meta.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/layout/meta.html.twig");
    }
}
