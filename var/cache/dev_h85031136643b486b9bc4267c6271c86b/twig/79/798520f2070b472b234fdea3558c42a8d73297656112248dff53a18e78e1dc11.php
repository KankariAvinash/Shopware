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

/* @Storefront/storefront/section/cms-section-default.html.twig */
class __TwigTemplate_d010e429885d7d2380273fe0a432a509 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_content_section_default' => [$this, 'block_page_content_section_default'],
            'section_default_content_block' => [$this, 'block_section_default_content_block'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/section/cms-section-default.html.twig"));

        // line 1
        $this->displayBlock('page_content_section_default', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_page_content_section_default($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_section_default"));

        // line 2
        echo "    ";
        $context["layout"] = ((sw_get_attribute($this->env, $this->source, ($context["section"] ?? null), "sizingMode", [], "any", false, false, false, 2)) ? (twig_replace_filter(sw_get_attribute($this->env, $this->source, ($context["section"] ?? null), "sizingMode", [], "any", false, false, false, 2), ["_" => "-"])) : ("container"));
        // line 3
        echo "    <div class=\"cms-section-default ";
        echo sw_escape_filter($this->env, ($context["layout"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["section"] ?? null), "blocks", [], "any", false, false, false, 4));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 5
            echo "
            ";
            // line 6
            $this->displayBlock('section_default_content_block', $context, $blocks);
            // line 9
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_section_default_content_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section_default_content_block"));

        // line 7
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/section/cms-section-block-container.html.twig", "@Storefront/storefront/section/cms-section-default.html.twig", 7)->display($context);
        // line 8
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/section/cms-section-default.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  117 => 8,  114 => 7,  107 => 6,  99 => 10,  85 => 9,  83 => 6,  80 => 5,  63 => 4,  58 => 3,  55 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_content_section_default %}
    {% set layout = section.sizingMode ? section.sizingMode|replace({\"_\": \"-\"}) : \"container\" %}
    <div class=\"cms-section-default {{ layout }}\">
        {% for block in section.blocks %}

            {% block section_default_content_block %}
                {% sw_include \"@Storefront/storefront/section/cms-section-block-container.html.twig\" %}
            {% endblock %}
        {% endfor %}
    </div>
{% endblock %}
", "@Storefront/storefront/section/cms-section-default.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/section/cms-section-default.html.twig");
    }
}
