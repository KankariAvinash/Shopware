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

/* @Storefront/storefront/block/cms-block-image-text.html.twig */
class __TwigTemplate_5b92a5293455ad2de4ff6367e40365d6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'block_image_text' => [$this, 'block_block_image_text'],
            'block_image_text_left' => [$this, 'block_block_image_text_left'],
            'block_image_text_left_inner' => [$this, 'block_block_image_text_left_inner'],
            'block_image_text_right' => [$this, 'block_block_image_text_right'],
            'block_image_text_right_inner' => [$this, 'block_block_image_text_right_inner'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/block/cms-block-image-text.html.twig"));

        // line 1
        $this->displayBlock('block_image_text', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_block_image_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text"));

        // line 2
        echo "    ";
        $context["columns"] = 2;
        // line 3
        echo "
    ";
        // line 4
        $this->displayBlock('block_image_text_left', $context, $blocks);
        // line 13
        echo "
    ";
        // line 14
        $this->displayBlock('block_image_text_right', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_block_image_text_left($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text_left"));

        // line 5
        echo "        ";
        $context["element"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "slots", [], "any", false, false, false, 5), "getSlot", ["left"], "method", false, false, false, 5);
        // line 6
        echo "
        <div class=\"col-md-6\" data-cms-element-id=\"";
        // line 7
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "id", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
            ";
        // line 8
        $this->displayBlock('block_image_text_left_inner', $context, $blocks);
        // line 11
        echo "        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_block_image_text_left_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text_left_inner"));

        // line 9
        echo "                ";
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find((("@Storefront/storefront/element/cms-element-" . sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 9)) . ".html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/block/cms-block-image-text.html.twig", 9);
            })());
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display($context);
        }
        // line 10
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 14
    public function block_block_image_text_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text_right"));

        // line 15
        echo "        ";
        $context["element"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "slots", [], "any", false, false, false, 15), "getSlot", ["right"], "method", false, false, false, 15);
        // line 16
        echo "
        <div class=\"col-md-6\" data-cms-element-id=\"";
        // line 17
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "id", [], "any", false, false, false, 17), "html", null, true);
        echo "\">
            ";
        // line 18
        $this->displayBlock('block_image_text_right_inner', $context, $blocks);
        // line 21
        echo "        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 18
    public function block_block_image_text_right_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block_image_text_right_inner"));

        // line 19
        echo "                ";
        $__internal_compile_1 = null;
        try {
            $__internal_compile_1 =             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find((("@Storefront/storefront/element/cms-element-" . sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 19)) . ".html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/block/cms-block-image-text.html.twig", 19);
            })());
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_1) {
            $__internal_compile_1->display($context);
        }
        // line 20
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/block/cms-block-image-text.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  185 => 20,  168 => 19,  161 => 18,  153 => 21,  151 => 18,  147 => 17,  144 => 16,  141 => 15,  134 => 14,  127 => 10,  110 => 9,  103 => 8,  95 => 11,  93 => 8,  89 => 7,  86 => 6,  83 => 5,  76 => 4,  69 => 14,  66 => 13,  64 => 4,  61 => 3,  58 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block block_image_text %}
    {% set columns = 2 %}

    {% block block_image_text_left %}
        {% set element = block.slots.getSlot('left') %}

        <div class=\"col-md-6\" data-cms-element-id=\"{{ element.id }}\">
            {% block block_image_text_left_inner %}
                {% sw_include \"@Storefront/storefront/element/cms-element-\" ~ element.type ~ \".html.twig\" ignore missing %}
            {% endblock %}
        </div>
    {% endblock %}

    {% block block_image_text_right %}
        {% set element = block.slots.getSlot('right') %}

        <div class=\"col-md-6\" data-cms-element-id=\"{{ element.id }}\">
            {% block block_image_text_right_inner %}
                {% sw_include \"@Storefront/storefront/element/cms-element-\" ~ element.type ~ \".html.twig\" ignore missing %}
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/block/cms-block-image-text.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/block/cms-block-image-text.html.twig");
    }
}
