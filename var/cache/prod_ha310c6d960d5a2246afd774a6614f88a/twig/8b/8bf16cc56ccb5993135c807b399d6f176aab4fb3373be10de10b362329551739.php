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

/* @Administration/administration/index.html.twig */
class __TwigTemplate_69d6dabb7582f34282001f35bff9f8ee extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'administration_favicons' => [$this, 'block_administration_favicons'],
            'administration_templates' => [$this, 'block_administration_templates'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>
        Shopware Administration (c) shopware AG
    </title>

    ";
        // line 10
        $this->displayBlock('administration_favicons', $context, $blocks);
        // line 21
        echo "
    <script nonce=\"";
        // line 22
        echo sw_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\" type=\"text/javascript\">
        window._features_ = ";
        // line 23
        echo $this->env->getFilter('json_encode')->getCallable()(($context["features"] ?? null));
        echo ";

        window.__sw__ = {
            assetPath: '";
        // line 26
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("", "asset"), "html", null, true);
        echo "',
        };
    </script>

    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/css/app.css", "@Administration"), "html", null, true);
        echo "\">

</head>
<body>

<div id=\"app\"></div>

";
        // line 37
        $this->displayBlock('administration_templates', $context, $blocks);
        // line 38
        echo "
<script nonce=\"";
        // line 39
        echo sw_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\" src=\"";
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/js/app.js", "@Administration"), "html", null, true);
        echo "\"></script>

<script nonce=\"";
        // line 41
        echo sw_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 65
        echo "    Shopware.Application.start({
        apiContext: {
            host: '";
        // line 67
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 67), "host", [], "any", false, false, false, 67), "html", null, true);
        echo "',
            port: ";
        // line 68
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 68), "port", [], "any", false, false, false, 68), "html", null, true);
        echo ",
            scheme: '";
        // line 69
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 69), "scheme", [], "any", false, false, false, 69), "html", null, true);
        echo "',
            schemeAndHttpHost: '";
        // line 70
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 70), "schemeAndHttpHost", [], "any", false, false, false, 70), "html", null, true);
        echo "',
            uri: '";
        // line 71
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 71), "uri", [], "any", false, false, false, 71), "html", null, true);
        echo "',
            basePath: '";
        // line 72
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 72), "basePath", [], "any", false, false, false, 72), "html", null, true);
        echo "',
            pathInfo: '";
        // line 73
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 73), "pathInfo", [], "any", false, false, false, 73), "html", null, true);
        echo "',
            liveVersionId: '";
        // line 74
        echo sw_escape_filter($this->env, ($context["liveVersionId"] ?? null), "html", null, true);
        echo "',
            systemLanguageId: '";
        // line 75
        echo sw_escape_filter($this->env, ($context["systemLanguageId"] ?? null), "html", null, true);
        echo "',
            apiVersion: ";
        // line 76
        echo sw_escape_filter($this->env, ($context["apiVersion"] ?? null), "html", null, true);
        echo ",
            assetPath: '";
        // line 77
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("", "asset"), "html", null, true);
        echo "'
        },
        appContext: {
            features: window._features_,
            firstRunWizard: ";
        // line 81
        echo ((($context["firstRunWizard"] ?? null)) ? ("true") : ("false"));
        echo ",
            systemCurrencyId: '";
        // line 82
        echo sw_escape_filter($this->env, ($context["systemCurrencyId"] ?? null), "html", null, true);
        echo "',
            systemCurrencyISOCode: '";
        // line 83
        echo sw_escape_filter($this->env, ($context["systemCurrencyISOCode"] ?? null), "html", null, true);
        echo "',
            disableExtensions: ";
        // line 84
        echo ((($context["disableExtensions"] ?? null)) ? ("true") : ("false"));
        echo ",
            adminEsEnable: ";
        // line 85
        echo ((($context["adminEsEnable"] ?? null)) ? ("true") : ("false"));
        echo ",
            storefrontEsEnable: ";
        // line 86
        echo ((($context["storefrontEsEnable"] ?? null)) ? ("true") : ("false"));
        echo ",
        }
    });
</script>

</body>
</html>
";
    }

    // line 10
    public function block_administration_favicons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/img/favicon/apple-touch-icon.png", "@Administration"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 12
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/img/favicon/favicon-16x16.png", "@Administration"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 13
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/img/favicon/favicon-32x32.png", "@Administration"), "html", null, true);
        echo "\" id=\"dynamic-favicon\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\" href=\"";
        // line 14
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/img/favicon/android-chrome-192x192.png", "@Administration"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"256x256\" href=\"";
        // line 15
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/img/favicon/android-chrome-256x256.png", "@Administration"), "html", null, true);
        echo "\">
        <meta name=\"msapplication-TileImage\" content=\"";
        // line 16
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/img/favicon/mstile-150x150.png", "@Administration"), "html", null, true);
        echo "\">
        <meta name=\"msapplication-TileColor\" content=\"#189eff\">
        <meta name=\"theme-color\" content=\"#189eff\">
        <meta name=\"referrer\" content=\"always\">
    ";
    }

    // line 37
    public function block_administration_templates($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Administration/administration/index.html.twig";
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
        return array (  215 => 37,  206 => 16,  202 => 15,  198 => 14,  194 => 13,  190 => 12,  185 => 11,  181 => 10,  169 => 86,  165 => 85,  161 => 84,  157 => 83,  153 => 82,  149 => 81,  142 => 77,  138 => 76,  134 => 75,  130 => 74,  126 => 73,  122 => 72,  118 => 71,  114 => 70,  110 => 69,  106 => 68,  102 => 67,  98 => 65,  94 => 41,  87 => 39,  84 => 38,  82 => 37,  72 => 30,  65 => 26,  59 => 23,  55 => 22,  52 => 21,  50 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Administration/administration/index.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/administration/Resources/views/administration/index.html.twig");
    }
}
