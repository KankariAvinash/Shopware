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

/* @Storefront/storefront/layout/header/account-menu.html.twig */
class __TwigTemplate_f715c8af092203969b52ca0f42ba15ac extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'utilities_offcanvas_content' => [$this, 'block_utilities_offcanvas_content'],
            'layout_header_actions_account_widget_dropdown_header' => [$this, 'block_layout_header_actions_account_widget_dropdown_header'],
            'layout_header_actions_account_widget_dropdown_login' => [$this, 'block_layout_header_actions_account_widget_dropdown_login'],
            'layout_header_actions_account_widget_dropdown_login_login' => [$this, 'block_layout_header_actions_account_widget_dropdown_login_login'],
            'layout_header_actions_account_widget_dropdown_login_register' => [$this, 'block_layout_header_actions_account_widget_dropdown_login_register'],
            'layout_header_actions_account_widget_dropdown_links' => [$this, 'block_layout_header_actions_account_widget_dropdown_links'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/utilities/offcanvas.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/header/account-menu.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/utilities/offcanvas.html.twig", "@Storefront/storefront/layout/header/account-menu.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_utilities_offcanvas_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_offcanvas_content"));

        // line 4
        echo "    <div class=\"account-menu\">
        ";
        // line 5
        $this->displayBlock('layout_header_actions_account_widget_dropdown_header', $context, $blocks);
        // line 12
        echo "
        ";
        // line 13
        $this->displayBlock('layout_header_actions_account_widget_dropdown_login', $context, $blocks);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('layout_header_actions_account_widget_dropdown_links', $context, $blocks);
        // line 39
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_layout_header_actions_account_widget_dropdown_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_account_widget_dropdown_header"));

        // line 6
        echo "            ";
        if ( !sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 6), "guest", [], "any", false, false, false, 6)) {
            // line 7
            echo "                <div class=\"dropdown-header account-menu-header\">
                    ";
            // line 8
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.myAccount"));
            echo "
                </div>
            ";
        }
        // line 11
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_layout_header_actions_account_widget_dropdown_login($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_account_widget_dropdown_login"));

        // line 14
        echo "            ";
        if ( !sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 14)) {
            // line 15
            echo "                <div class=\"account-menu-login\">
                    ";
            // line 16
            $this->displayBlock('layout_header_actions_account_widget_dropdown_login_login', $context, $blocks);
            // line 23
            echo "
                    ";
            // line 24
            $this->displayBlock('layout_header_actions_account_widget_dropdown_login_register', $context, $blocks);
            // line 30
            echo "                </div>
            ";
        }
        // line 32
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 16
    public function block_layout_header_actions_account_widget_dropdown_login_login($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_account_widget_dropdown_login_login"));

        // line 17
        echo "                        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.login.page");
        echo "\"
                           title=\"";
        // line 18
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginSubmit")), "html", null, true);
        echo "\"
                           class=\"btn btn-primary account-menu-login-button\">
                            ";
        // line 20
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginSubmit"));
        echo "
                        </a>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 24
    public function block_layout_header_actions_account_widget_dropdown_login_register($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_account_widget_dropdown_login_register"));

        // line 25
        echo "                        <div class=\"account-menu-register\">
                            ";
        // line 26
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orRegister"));
        echo " <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.login.page");
        echo "\"
                                                                            title=\"";
        // line 27
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orRegisterLink")), "html", null, true);
        echo "\">";
        echo sw_escape_filter($this->env, twig_lower_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orRegisterLink"))), "html", null, true);
        echo "</a>
                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 34
    public function block_layout_header_actions_account_widget_dropdown_links($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header_actions_account_widget_dropdown_links"));

        // line 35
        echo "            <div class=\"account-menu-links\">
                ";
        // line 36
        $this->loadTemplate("@Storefront/storefront/page/account/sidebar.html.twig", "@Storefront/storefront/layout/header/account-menu.html.twig", 36)->display(twig_array_merge($context, ["headerWidget" => true]));
        // line 37
        echo "            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/header/account-menu.html.twig";
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
        return array (  211 => 37,  209 => 36,  206 => 35,  199 => 34,  187 => 27,  181 => 26,  178 => 25,  171 => 24,  161 => 20,  156 => 18,  151 => 17,  144 => 16,  137 => 32,  133 => 30,  131 => 24,  128 => 23,  126 => 16,  123 => 15,  120 => 14,  113 => 13,  106 => 11,  100 => 8,  97 => 7,  94 => 6,  87 => 5,  79 => 39,  77 => 34,  74 => 33,  72 => 13,  69 => 12,  67 => 5,  64 => 4,  57 => 3,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/utilities/offcanvas.html.twig' %}

{% block utilities_offcanvas_content %}
    <div class=\"account-menu\">
        {% block layout_header_actions_account_widget_dropdown_header %}
            {% if not context.customer.guest %}
                <div class=\"dropdown-header account-menu-header\">
                    {{ \"account.myAccount\"|trans|sw_sanitize }}
                </div>
            {% endif %}
        {% endblock %}

        {% block layout_header_actions_account_widget_dropdown_login %}
            {% if not context.customer %}
                <div class=\"account-menu-login\">
                    {% block layout_header_actions_account_widget_dropdown_login_login %}
                        <a href=\"{{ path('frontend.account.login.page') }}\"
                           title=\"{{ \"account.loginSubmit\"|trans|striptags }}\"
                           class=\"btn btn-primary account-menu-login-button\">
                            {{ \"account.loginSubmit\"|trans|sw_sanitize }}
                        </a>
                    {% endblock %}

                    {% block layout_header_actions_account_widget_dropdown_login_register %}
                        <div class=\"account-menu-register\">
                            {{ \"account.orRegister\"|trans|sw_sanitize }} <a href=\"{{ path('frontend.account.login.page') }}\"
                                                                            title=\"{{ \"account.orRegisterLink\"|trans|striptags }}\">{{ \"account.orRegisterLink\"|trans|striptags|lower }}</a>
                        </div>
                    {% endblock %}
                </div>
            {% endif %}
        {% endblock %}

        {% block layout_header_actions_account_widget_dropdown_links %}
            <div class=\"account-menu-links\">
                {% sw_include '@Storefront/storefront/page/account/sidebar.html.twig' with {'headerWidget': true} %}
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/layout/header/account-menu.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/layout/header/account-menu.html.twig");
    }
}
