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

/* @Storefront/storefront/utilities/offcanvas.html.twig */
class __TwigTemplate_aa76a2a4f52e004611f53927070ec57a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'utilities_offcanvas_meta' => [$this, 'block_utilities_offcanvas_meta'],
            'utilities_offcanvas' => [$this, 'block_utilities_offcanvas'],
            'utilities_offcanvas_header' => [$this, 'block_utilities_offcanvas_header'],
            'utilities_offcanvas_close' => [$this, 'block_utilities_offcanvas_close'],
            'utilities_offcanvas_close_icon' => [$this, 'block_utilities_offcanvas_close_icon'],
            'utilities_offcanvas_close_text' => [$this, 'block_utilities_offcanvas_close_text'],
            'utilities_offcanvas_content_container' => [$this, 'block_utilities_offcanvas_content_container'],
            'utilities_offcanvas_content' => [$this, 'block_utilities_offcanvas_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
";
        // line 7
        $context["isAjaxOffcanvas"] = false;
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('utilities_offcanvas_meta', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('utilities_offcanvas', $context, $blocks);
    }

    // line 9
    public function block_utilities_offcanvas_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    ";
        // line 11
        echo "    ";
        if (( !sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 11), "xmlHttpRequest", [], "any", false, false, false, 11) && ($context["isAjaxOffcanvas"] ?? null))) {
            // line 12
            echo "        ";
            $this->loadTemplate("@Storefront/storefront/layout/meta.html.twig", "@Storefront/storefront/utilities/offcanvas.html.twig", 12)->display($context);
            // line 13
            echo "    ";
        }
    }

    // line 16
    public function block_utilities_offcanvas($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    ";
        $this->displayBlock('utilities_offcanvas_header', $context, $blocks);
        // line 32
        echo "
    ";
        // line 33
        $this->displayBlock('utilities_offcanvas_content_container', $context, $blocks);
    }

    // line 17
    public function block_utilities_offcanvas_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "        <div class=\"offcanvas-header\">
            ";
        // line 19
        $this->displayBlock('utilities_offcanvas_close', $context, $blocks);
        // line 30
        echo "        </div>
    ";
    }

    // line 19
    public function block_utilities_offcanvas_close($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "                <button class=\"btn btn-light offcanvas-close js-offcanvas-close\">
                    ";
        // line 21
        $this->displayBlock('utilities_offcanvas_close_icon', $context, $blocks);
        // line 24
        echo "
                    ";
        // line 25
        $this->displayBlock('utilities_offcanvas_close_text', $context, $blocks);
        // line 28
        echo "                </button>
            ";
    }

    // line 21
    public function block_utilities_offcanvas_close_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "                        ";
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/utilities/offcanvas.html.twig", 22);
        })())->display(twig_array_merge($context, ["size" => "sm", "name" => "x"]));
        // line 23
        echo "                    ";
    }

    // line 25
    public function block_utilities_offcanvas_close_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "                        ";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.offcanvasCloseMenu"));
        echo "
                    ";
    }

    // line 33
    public function block_utilities_offcanvas_content_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "        <div class=\"offcanvas-body\">
            ";
        // line 35
        $this->displayBlock('utilities_offcanvas_content', $context, $blocks);
        // line 36
        echo "        </div>
    ";
    }

    // line 35
    public function block_utilities_offcanvas_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/utilities/offcanvas.html.twig";
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
        return array (  168 => 35,  163 => 36,  161 => 35,  158 => 34,  154 => 33,  147 => 26,  143 => 25,  139 => 23,  130 => 22,  126 => 21,  121 => 28,  119 => 25,  116 => 24,  114 => 21,  111 => 20,  107 => 19,  102 => 30,  100 => 19,  97 => 18,  93 => 17,  89 => 33,  86 => 32,  83 => 17,  79 => 16,  74 => 13,  71 => 12,  68 => 11,  66 => 10,  62 => 9,  58 => 16,  55 => 15,  53 => 9,  50 => 8,  48 => 7,  45 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/utilities/offcanvas.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/utilities/offcanvas.html.twig");
    }
}
