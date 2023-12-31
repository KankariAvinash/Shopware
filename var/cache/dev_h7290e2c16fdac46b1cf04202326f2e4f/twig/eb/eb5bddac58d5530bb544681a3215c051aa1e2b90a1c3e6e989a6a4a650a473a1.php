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

/* @Storefront/storefront/component/analytics.html.twig */
class __TwigTemplate_6a055b03fd6776e8f937ee6015efdc5a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_head_analytics' => [$this, 'block_component_head_analytics'],
            'component_head_analytics_gtag' => [$this, 'block_component_head_analytics_gtag'],
            'component_head_analytics_gtag_config' => [$this, 'block_component_head_analytics_gtag_config'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/analytics.html.twig"));

        // line 1
        $this->displayBlock('component_head_analytics', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_component_head_analytics($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_head_analytics"));

        // line 2
        echo "    ";
        $this->displayBlock('component_head_analytics_gtag', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_component_head_analytics_gtag($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_head_analytics_gtag"));

        // line 3
        echo "        ";
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 3), "analytics", [], "any", false, false, false, 3) && sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 3), "analytics", [], "any", false, false, false, 3), "isActive", [], "method", false, false, false, 3))) {
            // line 4
            echo "            ";
            $context["trackingId"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 4), "analytics", [], "any", false, false, false, 4), "getTrackingId", [], "method", false, false, false, 4);
            // line 5
            echo "
            <script>
                ";
            // line 7
            $this->displayBlock('component_head_analytics_gtag_config', $context, $blocks);
            // line 23
            echo "            </script>
        ";
        }
        // line 25
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_component_head_analytics_gtag_config($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_head_analytics_gtag_config"));

        // line 8
        echo "                    window.gtagActive = true;
                    window.gtagURL = 'https://www.googletagmanager.com/gtag/js?id=";
        // line 9
        echo sw_escape_filter($this->env, ($context["trackingId"] ?? null), "html", null, true);
        echo "';
                    window.controllerName = '";
        // line 10
        echo sw_escape_filter($this->env, twig_lower_filter($this->env, ($context["controllerName"] ?? null)), "html", null, true);
        echo "';
                    window.actionName = '";
        // line 11
        echo sw_escape_filter($this->env, twig_lower_filter($this->env, ($context["controllerAction"] ?? null)), "html", null, true);
        echo "';
                    window.trackOrders = '";
        // line 12
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 12), "analytics", [], "any", false, false, false, 12), "isTrackOrders", [], "method", false, false, false, 12), "html", null, true);
        echo "';
                    window.gtagTrackingId = '";
        // line 13
        echo sw_escape_filter($this->env, ($context["trackingId"] ?? null), "html", null, true);
        echo "';
                    window.dataLayer = window.dataLayer || [];
                    window.gtagConfig = {
                        'anonymize_ip': '";
        // line 16
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 16), "analytics", [], "any", false, false, false, 16), "isAnonymizeIp", [], "method", false, false, false, 16), "html", null, true);
        echo "',
                        'cookie_domain': 'none',
                        'cookie_prefix': '_swag_ga',
                    };

                    function gtag() { dataLayer.push(arguments); }
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/component/analytics.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  125 => 16,  119 => 13,  115 => 12,  111 => 11,  107 => 10,  103 => 9,  100 => 8,  93 => 7,  86 => 25,  82 => 23,  80 => 7,  76 => 5,  73 => 4,  70 => 3,  56 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_head_analytics %}
    {% block component_head_analytics_gtag %}
        {% if context.salesChannel.analytics and context.salesChannel.analytics.isActive() %}
            {% set trackingId = context.salesChannel.analytics.getTrackingId() %}

            <script>
                {% block component_head_analytics_gtag_config %}
                    window.gtagActive = true;
                    window.gtagURL = 'https://www.googletagmanager.com/gtag/js?id={{ trackingId }}';
                    window.controllerName = '{{ controllerName|lower }}';
                    window.actionName = '{{ controllerAction|lower }}';
                    window.trackOrders = '{{ context.salesChannel.analytics.isTrackOrders() }}';
                    window.gtagTrackingId = '{{ trackingId }}';
                    window.dataLayer = window.dataLayer || [];
                    window.gtagConfig = {
                        'anonymize_ip': '{{ context.salesChannel.analytics.isAnonymizeIp() }}',
                        'cookie_domain': 'none',
                        'cookie_prefix': '_swag_ga',
                    };

                    function gtag() { dataLayer.push(arguments); }
                {% endblock %}
            </script>
        {% endif %}
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/component/analytics.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/component/analytics.html.twig");
    }
}
