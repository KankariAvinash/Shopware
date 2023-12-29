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

/* @Storefront/storefront/component/recaptcha.html.twig */
class __TwigTemplate_cc8f00c0ee929ef781d61214617659ef extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_head_javascript_recaptcha' => [$this, 'block_component_head_javascript_recaptcha'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_head_javascript_recaptcha', $context, $blocks);
    }

    public function block_component_head_javascript_recaptcha($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["recaptchaV2Active"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.activeCaptchasV2.googleReCaptchaV2.isActive");
        // line 3
        echo "    ";
        $context["recaptchaV3Active"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.activeCaptchasV2.googleReCaptchaV3.isActive");
        // line 4
        echo "
    ";
        // line 5
        if ((($context["recaptchaV2Active"] ?? null) || ($context["recaptchaV3Active"] ?? null))) {
            // line 6
            echo "        <script type=\"text/javascript\" src='https://www.google.com/recaptcha/api.js";
            if (($context["recaptchaV3Active"] ?? null)) {
                echo "?render=";
                echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.activeCaptchasV2.googleReCaptchaV3.config.siteKey"), "html", null, true);
            }
            echo "' defer></script>
        <script>
            ";
            // line 8
            if (($context["recaptchaV2Active"] ?? null)) {
                // line 9
                echo "                window.googleReCaptchaV2Active = true;
            ";
            }
            // line 11
            echo "            ";
            if (($context["recaptchaV3Active"] ?? null)) {
                // line 12
                echo "                window.googleReCaptchaV3Active = true;
            ";
            }
            // line 14
            echo "        </script>
    ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/component/recaptcha.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  78 => 14,  74 => 12,  71 => 11,  67 => 9,  65 => 8,  56 => 6,  54 => 5,  51 => 4,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/recaptcha.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/component/recaptcha.html.twig");
    }
}
