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

/* @Storefront/storefront/layout/header/actions/cart-widget.html.twig */
class __TwigTemplate_822a1ae743e20bf4543cbf3661ad967b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_header_actions_cart_widget' => [$this, 'block_layout_header_actions_cart_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/actions/cart-widget.html.twig"));

        // line 1
        $this->displayBlock('layout_header_actions_cart_widget', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_layout_header_actions_cart_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_cart_widget"));

        // line 2
        echo "    <span class=\"header-cart-icon\">
        ";
        // line 3
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/actions/cart-widget.html.twig", 3);
        })())->display(twig_array_merge($context, ["name" => "bag"]));
        // line 4
        echo "    </span>
    ";
        // line 5
        if ((twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 5), "lineItems", [], "any", false, false, false, 5)) > 0)) {
            // line 6
            echo "        <span class=\"badge bg-primary header-cart-badge\">";
            echo sw_escape_filter($this->env, twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 6), "lineItems", [], "any", false, false, false, 6)), "html", null, true);
            echo "</span>
    ";
        }
        // line 8
        echo "    <span class=\"header-cart-total\">
        ";
        // line 9
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cart", [], "any", false, false, false, 9), "price", [], "any", false, false, false, 9), "positionPrice", [], "any", false, false, false, 9)), "html", null, true);
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo "
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/actions/cart-widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  79 => 9,  76 => 8,  70 => 6,  68 => 5,  65 => 4,  57 => 3,  54 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_header_actions_cart_widget %}
    <span class=\"header-cart-icon\">
        {% sw_icon 'bag' %}
    </span>
    {% if page.cart.lineItems|length > 0 %}
        <span class=\"badge bg-primary header-cart-badge\">{{ page.cart.lineItems|length }}</span>
    {% endif %}
    <span class=\"header-cart-total\">
        {{ page.cart.price.positionPrice|currency }}{{ \"general.star\"|trans|sw_sanitize }}
    </span>
{% endblock %}
", "@Storefront/storefront/layout/header/actions/cart-widget.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/layout/header/actions/cart-widget.html.twig");
    }
}
