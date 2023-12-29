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

/* @Storefront/storefront/layout/header/actions/account-widget.html.twig */
class __TwigTemplate_e6a862e303d4c77412bb64754db2ad19 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_header_actions_account_widget' => [$this, 'block_layout_header_actions_account_widget'],
            'layout_header_actions_account_widget_dropdown_button' => [$this, 'block_layout_header_actions_account_widget_dropdown_button'],
            'layout_header_actions_account_widget_dropdown_menu' => [$this, 'block_layout_header_actions_account_widget_dropdown_menu'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/actions/account-widget.html.twig"));

        // line 1
        $this->displayBlock('layout_header_actions_account_widget', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_layout_header_actions_account_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_account_widget"));

        // line 2
        echo "    <div class=\"dropdown\">
        ";
        // line 3
        $this->displayBlock('layout_header_actions_account_widget_dropdown_button', $context, $blocks);
        // line 21
        echo "
        ";
        // line 22
        $this->displayBlock('layout_header_actions_account_widget_dropdown_menu', $context, $blocks);
        // line 28
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_layout_header_actions_account_widget_dropdown_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_account_widget_dropdown_button"));

        // line 4
        echo "            <button class=\"btn account-menu-btn header-actions-btn\"
                    type=\"button\"
                    id=\"accountWidget\"
                    ";
        // line 8
        echo "                    ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.6.0.0")) {
            // line 9
            echo "                        data-account-menu=\"true\"
                    ";
        } else {
            // line 11
            echo "                        data-offcanvas-account-menu=\"true\"
                    ";
        }
        // line 13
        echo "                    data-bs-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                    aria-label=\"";
        // line 16
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.myAccount")), "html", null, true);
        echo "\"
                    title=\"";
        // line 17
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.myAccount")), "html", null, true);
        echo "\">
                ";
        // line 18
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/header/actions/account-widget.html.twig", 18);
        })())->display(twig_array_merge($context, ["name" => "avatar"]));
        // line 19
        echo "            </button>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 22
    public function block_layout_header_actions_account_widget_dropdown_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_account_widget_dropdown_menu"));

        // line 23
        echo "            <div class=\"dropdown-menu dropdown-menu-end account-menu-dropdown js-account-menu-dropdown\"
                 aria-labelledby=\"accountWidget\">
                ";
        // line 25
        $this->loadTemplate("@Storefront/storefront/layout/header/account-menu.html.twig", "@Storefront/storefront/layout/header/actions/account-widget.html.twig", 25)->display($context);
        // line 26
        echo "            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/actions/account-widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  139 => 26,  137 => 25,  133 => 23,  126 => 22,  118 => 19,  110 => 18,  106 => 17,  102 => 16,  97 => 13,  93 => 11,  89 => 9,  86 => 8,  81 => 4,  74 => 3,  66 => 28,  64 => 22,  61 => 21,  59 => 3,  56 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_header_actions_account_widget %}
    <div class=\"dropdown\">
        {% block layout_header_actions_account_widget_dropdown_button %}
            <button class=\"btn account-menu-btn header-actions-btn\"
                    type=\"button\"
                    id=\"accountWidget\"
                    {# @deprecated tag:v6.6.0 - Registering plugin on selector \"data-offcanvas-account-menu\" is deprecated. Use \"data-account-menu\" instead #}
                    {% if feature('v6.6.0.0') %}
                        data-account-menu=\"true\"
                    {% else %}
                        data-offcanvas-account-menu=\"true\"
                    {% endif %}
                    data-bs-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                    aria-label=\"{{ \"account.myAccount\"|trans|striptags }}\"
                    title=\"{{ \"account.myAccount\"|trans|striptags }}\">
                {% sw_icon 'avatar' %}
            </button>
        {% endblock %}

        {% block layout_header_actions_account_widget_dropdown_menu %}
            <div class=\"dropdown-menu dropdown-menu-end account-menu-dropdown js-account-menu-dropdown\"
                 aria-labelledby=\"accountWidget\">
                {% sw_include '@Storefront/storefront/layout/header/account-menu.html.twig' %}
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/layout/header/actions/account-widget.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/layout/header/actions/account-widget.html.twig");
    }
}
