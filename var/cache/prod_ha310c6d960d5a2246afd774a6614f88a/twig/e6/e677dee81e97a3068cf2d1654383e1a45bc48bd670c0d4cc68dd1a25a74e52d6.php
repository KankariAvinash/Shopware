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

/* @Storefront/storefront/component/pseudo-modal.html.twig */
class __TwigTemplate_40e2b9202c6dc1c1e84b40218bfb9c89 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'product_detail_zoom_modal_close_button_content' => [$this, 'block_product_detail_zoom_modal_close_button_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"js-pseudo-modal-template\">
    <div class=\"modal fade\"
         tabindex=\"-1\"
         role=\"dialog\">
        <div class=\"modal-dialog\"
             role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header only-close\">
                    <div class=\"modal-title js-pseudo-modal-template-title-element h5\"></div>

                    <button type=\"button\"
                            class=\"btn-close close\"
                            data-bs-dismiss=\"modal\"
                            aria-label=\"Close\">
                        ";
        // line 15
        $this->displayBlock('product_detail_zoom_modal_close_button_content', $context, $blocks);
        // line 17
        echo "                    </button>
                </div>
                <div class=\"modal-body js-pseudo-modal-template-content-element\">
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 15
    public function block_product_detail_zoom_modal_close_button_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "                        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/component/pseudo-modal.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  72 => 16,  68 => 15,  56 => 17,  54 => 15,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/pseudo-modal.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/component/pseudo-modal.html.twig");
    }
}
