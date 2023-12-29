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

/* @Storefront/storefront/layout/scroll-up.html.twig */
class __TwigTemplate_7be3d392b83d25dc3aa72b50e217b3e5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_scroll_up_inner' => [$this, 'block_layout_scroll_up_inner'],
            'layout_scroll_up_button' => [$this, 'block_layout_scroll_up_button'],
            'layout_scroll_up_button_icon' => [$this, 'block_layout_scroll_up_button_icon'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/scroll-up.html.twig"));

        // line 1
        $this->displayBlock('layout_scroll_up_inner', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_layout_scroll_up_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_scroll_up_inner"));

        // line 2
        echo "    <div class=\"scroll-up-container\"
         data-scroll-up=\"true\">
        ";
        // line 4
        $this->displayBlock('layout_scroll_up_button', $context, $blocks);
        // line 14
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_layout_scroll_up_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_scroll_up_button"));

        // line 5
        echo "            <div class=\"scroll-up-button js-scroll-up-button\">
                <button type=\"submit\"
                        class=\"btn btn-primary\">
                    ";
        // line 8
        $this->displayBlock('layout_scroll_up_button_icon', $context, $blocks);
        // line 11
        echo "                </button>
            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_layout_scroll_up_button_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_scroll_up_button_icon"));

        // line 9
        echo "                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/scroll-up.html.twig", 9);
        })())->display(twig_array_merge($context, ["size" => "sm", "name" => "arrow-up"]));
        // line 10
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/scroll-up.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  109 => 10,  100 => 9,  93 => 8,  84 => 11,  82 => 8,  77 => 5,  70 => 4,  62 => 14,  60 => 4,  56 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout_scroll_up_inner %}
    <div class=\"scroll-up-container\"
         data-scroll-up=\"true\">
        {% block layout_scroll_up_button %}
            <div class=\"scroll-up-button js-scroll-up-button\">
                <button type=\"submit\"
                        class=\"btn btn-primary\">
                    {% block layout_scroll_up_button_icon %}
                        {% sw_icon 'arrow-up' style { 'size': 'sm' } %}
                    {% endblock %}
                </button>
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/layout/scroll-up.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/layout/scroll-up.html.twig");
    }
}
