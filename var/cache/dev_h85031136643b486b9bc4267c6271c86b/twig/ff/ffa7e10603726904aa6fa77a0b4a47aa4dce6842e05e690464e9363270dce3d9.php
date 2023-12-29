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

/* @Storefront/storefront/section/cms-section-block-container.html.twig */
class __TwigTemplate_224babeb432fb9ab5952e72931cbd5e9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'section_content_block' => [$this, 'block_section_content_block'],
            'section_content_block_background_image' => [$this, 'block_section_content_block_background_image'],
            'section_content_block_container' => [$this, 'block_section_content_block_container'],
            'section_content_block_row' => [$this, 'block_section_content_block_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/section/cms-section-block-container.html.twig"));

        // line 1
        $this->displayBlock('section_content_block', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_section_content_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section_content_block"));

        // line 2
        echo "
    ";
        // line 3
        $context["top"] = ((sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginTop", [], "any", false, false, false, 3)) ? (sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginTop", [], "any", false, false, false, 3)) : (0));
        // line 4
        echo "    ";
        $context["right"] = ((sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginRight", [], "any", false, false, false, 4)) ? (sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginRight", [], "any", false, false, false, 4)) : (0));
        // line 5
        echo "    ";
        $context["bottom"] = ((sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginBottom", [], "any", false, false, false, 5)) ? (sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginBottom", [], "any", false, false, false, 5)) : (0));
        // line 6
        echo "    ";
        $context["left"] = ((sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginLeft", [], "any", false, false, false, 6)) ? (sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginLeft", [], "any", false, false, false, 6)) : (0));
        // line 7
        echo "
    ";
        // line 8
        if ((((($context["top"] ?? null) || ($context["right"] ?? null)) || ($context["bottom"] ?? null)) || ($context["left"] ?? null))) {
            // line 9
            echo "        ";
            $context["padding"] = ((((((($context["top"] ?? null) . " ") . ($context["right"] ?? null)) . " ") . ($context["bottom"] ?? null)) . " ") . ($context["left"] ?? null));
            // line 10
            echo "    ";
        }
        // line 11
        echo "
    ";
        // line 12
        $context["blockBgColor"] = sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "backgroundColor", [], "any", false, false, false, 12);
        // line 13
        echo "
    ";
        // line 14
        $context["blockClasses"] = [sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "cssClass", [], "any", false, false, false, 14), ("pos-" . sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "position", [], "any", false, false, false, 14)), ("cms-block-" . sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "type", [], "any", false, false, false, 14))];
        // line 15
        echo "
    ";
        // line 16
        if (sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "backgroundMedia", [], "any", false, false, false, 16)) {
            // line 17
            echo "        ";
            $context["blockClasses"] = twig_array_merge(["bg-image"], ($context["blockClasses"] ?? null));
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if (($context["blockBgColor"] ?? null)) {
            // line 21
            echo "        ";
            $context["blockClasses"] = twig_array_merge(["bg-color"], ($context["blockClasses"] ?? null));
            // line 22
            echo "    ";
        }
        // line 23
        echo "
    ";
        // line 24
        $context["columns"] = 3;
        // line 25
        echo "    ";
        $context["isInSidebar"] = (sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "sectionPosition", [], "any", false, false, false, 25) == "sidebar");
        // line 26
        echo "    ";
        $context["sidebarClasses"] = "";
        // line 27
        echo "
    ";
        // line 28
        if ((($context["isInSidebar"] ?? null) == true)) {
            // line 29
            echo "        ";
            $context["sidebarClasses"] = "has--sidebar";
            // line 30
            echo "    ";
        }
        // line 31
        echo "
    ";
        // line 32
        if ((null === sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "visibility", [], "any", false, false, false, 32))) {
            // line 33
            echo "        ";
            $context["visibility"] = ["mobile" => true, "tablet" => true, "desktop" => true];
            // line 38
            echo "    ";
        } else {
            // line 39
            echo "        ";
            $context["visibility"] = sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "visibility", [], "any", false, false, false, 39);
            // line 40
            echo "    ";
        }
        // line 41
        echo "
    ";
        // line 42
        if ( !sw_get_attribute($this->env, $this->source, ($context["visibility"] ?? null), "mobile", [], "any", false, false, false, 42)) {
            // line 43
            echo "        ";
            $context["blockClasses"] = twig_array_merge(["hidden-mobile"], ($context["blockClasses"] ?? null));
            // line 44
            echo "    ";
        }
        // line 45
        echo "    ";
        if ( !sw_get_attribute($this->env, $this->source, ($context["visibility"] ?? null), "tablet", [], "any", false, false, false, 45)) {
            // line 46
            echo "        ";
            $context["blockClasses"] = twig_array_merge(["hidden-tablet"], ($context["blockClasses"] ?? null));
            // line 47
            echo "    ";
        }
        // line 48
        echo "    ";
        if ( !sw_get_attribute($this->env, $this->source, ($context["visibility"] ?? null), "desktop", [], "any", false, false, false, 48)) {
            // line 49
            echo "        ";
            $context["blockClasses"] = twig_array_merge(["hidden-desktop"], ($context["blockClasses"] ?? null));
            // line 50
            echo "    ";
        }
        // line 51
        echo "
    <div class=\"cms-block ";
        // line 52
        echo sw_escape_filter($this->env, twig_join_filter(($context["blockClasses"] ?? null), " "), "html", null, true);
        echo "\"
         style=\"";
        // line 53
        if (($context["blockBgColor"] ?? null)) {
            echo " background-color: ";
            echo sw_escape_filter($this->env, ($context["blockBgColor"] ?? null), "html", null, true);
            echo ";";
        }
        echo "\">
        ";
        // line 54
        $this->displayBlock('section_content_block_background_image', $context, $blocks);
        // line 65
        echo "
        ";
        // line 66
        $this->displayBlock('section_content_block_container', $context, $blocks);
        // line 77
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 54
    public function block_section_content_block_background_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section_content_block_background_image"));

        // line 55
        echo "            ";
        if (sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "backgroundMedia", [], "any", false, false, false, 55)) {
            // line 56
            echo "                ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/section/cms-section-block-container.html.twig", 56);
            })())->display(twig_array_merge($context, ["media" => sw_get_attribute($this->env, $this->source,             // line 57
($context["block"] ?? null), "backgroundMedia", [], "any", false, false, false, 57), "autoColumnSizes" => false, "attributes" => ["class" => ("cms-block-background media-mode--" . sw_get_attribute($this->env, $this->source,             // line 60
($context["block"] ?? null), "backgroundMediaMode", [], "any", false, false, false, 60))], "name" => "cms-block-background"]));
            // line 63
            echo "            ";
        }
        // line 64
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 66
    public function block_section_content_block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section_content_block_container"));

        // line 67
        echo "            <div class=\"cms-block-container\"
                 style=\"";
        // line 68
        if (($context["padding"] ?? null)) {
            echo "padding: ";
            echo sw_escape_filter($this->env, ($context["padding"] ?? null), "html", null, true);
            echo ";";
        }
        echo "\">

                ";
        // line 70
        $this->displayBlock('section_content_block_row', $context, $blocks);
        // line 75
        echo "            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 70
    public function block_section_content_block_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section_content_block_row"));

        // line 71
        echo "                    <div class=\"cms-block-container-row row cms-row ";
        echo sw_escape_filter($this->env, ($context["sidebarClasses"] ?? null), "html", null, true);
        echo "\">
                        ";
        // line 72
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find((("@Storefront/storefront/block/cms-block-" . sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "type", [], "any", false, false, false, 72)) . ".html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/section/cms-section-block-container.html.twig", 72);
            })());
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display($context);
        }
        // line 73
        echo "                    </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/section/cms-section-block-container.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  300 => 73,  284 => 72,  279 => 71,  272 => 70,  264 => 75,  262 => 70,  253 => 68,  250 => 67,  243 => 66,  236 => 64,  233 => 63,  231 => 60,  230 => 57,  222 => 56,  219 => 55,  212 => 54,  204 => 77,  202 => 66,  199 => 65,  197 => 54,  189 => 53,  185 => 52,  182 => 51,  179 => 50,  176 => 49,  173 => 48,  170 => 47,  167 => 46,  164 => 45,  161 => 44,  158 => 43,  156 => 42,  153 => 41,  150 => 40,  147 => 39,  144 => 38,  141 => 33,  139 => 32,  136 => 31,  133 => 30,  130 => 29,  128 => 28,  125 => 27,  122 => 26,  119 => 25,  117 => 24,  114 => 23,  111 => 22,  108 => 21,  106 => 20,  103 => 19,  100 => 18,  97 => 17,  95 => 16,  92 => 15,  90 => 14,  87 => 13,  85 => 12,  82 => 11,  79 => 10,  76 => 9,  74 => 8,  71 => 7,  68 => 6,  65 => 5,  62 => 4,  60 => 3,  57 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block section_content_block %}

    {% set top = block.marginTop ? block.marginTop : 0 %}
    {% set right = block.marginRight ? block.marginRight : 0 %}
    {% set bottom = block.marginBottom ? block.marginBottom : 0 %}
    {% set left = block.marginLeft ? block.marginLeft : 0 %}

    {% if top or right or bottom or left %}
        {% set padding = top ~ \" \" ~ right ~ \" \" ~ bottom ~ \" \" ~ left %}
    {% endif %}

    {% set blockBgColor = block.backgroundColor %}

    {% set blockClasses = [block.cssClass, 'pos-' ~ block.position, 'cms-block-' ~ block.type] %}

    {% if block.backgroundMedia %}
        {% set blockClasses = ['bg-image']|merge(blockClasses) %}
    {% endif %}

    {% if blockBgColor %}
        {% set blockClasses = ['bg-color']|merge(blockClasses) %}
    {% endif %}

    {% set columns = 3 %}
    {% set isInSidebar = block.sectionPosition == 'sidebar' %}
    {% set sidebarClasses = '' %}

    {% if isInSidebar == true %}
        {% set sidebarClasses = 'has--sidebar' %}
    {% endif %}

    {% if block.visibility is null %}
        {% set visibility = {
            mobile: true,
            tablet: true,
            desktop: true
        } %}
    {% else %}
        {% set visibility = block.visibility %}
    {% endif %}

    {% if not visibility.mobile %}
        {% set blockClasses = ['hidden-mobile']|merge(blockClasses) %}
    {% endif %}
    {% if not visibility.tablet %}
        {% set blockClasses = ['hidden-tablet']|merge(blockClasses) %}
    {% endif %}
    {% if not visibility.desktop %}
        {% set blockClasses = ['hidden-desktop']|merge(blockClasses) %}
    {% endif %}

    <div class=\"cms-block {{ blockClasses|join(' ') }}\"
         style=\"{% if blockBgColor %} background-color: {{ blockBgColor }};{% endif %}\">
        {% block section_content_block_background_image %}
            {% if block.backgroundMedia %}
                {% sw_thumbnails 'cms-block-background' with {
                    media: block.backgroundMedia,
                    autoColumnSizes: false,
                    attributes: {
                        class: \"cms-block-background media-mode--\" ~ block.backgroundMediaMode
                    }
                } %}
            {% endif %}
        {% endblock %}

        {% block section_content_block_container %}
            <div class=\"cms-block-container\"
                 style=\"{% if padding %}padding: {{ padding }};{% endif %}\">

                {% block section_content_block_row %}
                    <div class=\"cms-block-container-row row cms-row {{ sidebarClasses }}\">
                        {% sw_include \"@Storefront/storefront/block/cms-block-\" ~ block.type ~ \".html.twig\" ignore missing %}
                    </div>
                {% endblock %}
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/section/cms-section-block-container.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/section/cms-section-block-container.html.twig");
    }
}
