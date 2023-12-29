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

/* @Storefront/storefront/utilities/alert.html.twig */
class __TwigTemplate_c09126252cafddf5c51e5d98d96fc7bb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'utilities_alert' => [$this, 'block_utilities_alert'],
            'utilities_alert_icon' => [$this, 'block_utilities_alert_icon'],
            'utilities_alert_content_container' => [$this, 'block_utilities_alert_content_container'],
            'utilities_alert_heading' => [$this, 'block_utilities_alert_heading'],
            'utilities_alert_content' => [$this, 'block_utilities_alert_content'],
            'utilities_alert_dismissible' => [$this, 'block_utilities_alert_dismissible'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "
";
        // line 86
        $this->displayBlock('utilities_alert', $context, $blocks);
    }

    public function block_utilities_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        echo "    <div role=\"alert\"
         class=\"alert ";
        // line 88
        if (($context["type"] ?? null)) {
            echo "alert-";
            echo sw_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        }
        if (($context["dismissible"] ?? null)) {
            echo " alert-dismissible fade show";
        }
        if ((($context["icon"] ?? null) != "error")) {
            echo " alert-has-icon";
        }
        echo "\">
        ";
        // line 89
        $this->displayBlock('utilities_alert_icon', $context, $blocks);
        // line 111
        echo "
        ";
        // line 112
        $this->displayBlock('utilities_alert_content_container', $context, $blocks);
        // line 152
        echo "    </div>
";
    }

    // line 89
    public function block_utilities_alert_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 90
        echo "            ";
        if ((($context["icon"] ?? null) != "false")) {
            // line 91
            echo "                ";
            $context["iconCacheSystem"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.storefrontSettings.iconCache");
            // line 92
            echo "                ";
            if (((($context["iconCache"] ?? null) === false) && (($context["iconCacheSystem"] ?? null) === true))) {
                // line 93
                echo "                    ";
                echo sw_escape_filter($this->env, $this->env->getFunction('sw_icon_cache_disable')->getCallable()(), "html", null, true);
                echo "
                ";
            }
            // line 95
            echo "                ";
            if ((($context["type"] ?? null) == "danger")) {
                // line 96
                echo "                    ";
                ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                    $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/utilities/alert.html.twig", 96);
                })())->display(twig_array_merge($context, ["name" => "blocked"]));
                // line 97
                echo "                ";
            } elseif ((($context["type"] ?? null) == "warning")) {
                // line 98
                echo "                    ";
                ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                    $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/utilities/alert.html.twig", 98);
                })())->display(twig_array_merge($context, ["name" => "warning"]));
                // line 99
                echo "                ";
            } elseif ((($context["type"] ?? null) == "info")) {
                // line 100
                echo "                    ";
                ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                    $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/utilities/alert.html.twig", 100);
                })())->display(twig_array_merge($context, ["name" => "info"]));
                // line 101
                echo "                ";
            } elseif ((($context["type"] ?? null) == "success")) {
                // line 102
                echo "                    ";
                ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                    $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/utilities/alert.html.twig", 102);
                })())->display(twig_array_merge($context, ["name" => "checkmark-circle"]));
                // line 103
                echo "                ";
            } else {
                // line 104
                echo "                    ";
                ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                    $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/utilities/alert.html.twig", 104);
                })())->display(twig_array_merge($context, ["name" => "alert"]));
                // line 105
                echo "                ";
            }
            // line 106
            echo "                ";
            if (((($context["iconCache"] ?? null) == false) && (($context["iconCacheSystem"] ?? null) === true))) {
                // line 107
                echo "                    ";
                echo sw_escape_filter($this->env, $this->env->getFunction('sw_icon_cache_enable')->getCallable()(), "html", null, true);
                echo "
                ";
            }
            // line 109
            echo "            ";
        }
        // line 110
        echo "        ";
    }

    // line 112
    public function block_utilities_alert_content_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 113
        echo "            <div class=\"alert-content-container\">
                ";
        // line 114
        $this->displayBlock('utilities_alert_heading', $context, $blocks);
        // line 121
        echo "
                ";
        // line 122
        $this->displayBlock('utilities_alert_content', $context, $blocks);
        // line 139
        echo "
                ";
        // line 140
        $this->displayBlock('utilities_alert_dismissible', $context, $blocks);
        // line 150
        echo "            </div>
        ";
    }

    // line 114
    public function block_utilities_alert_heading($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 115
        echo "                    ";
        if (($context["heading"] ?? null)) {
            // line 116
            echo "                        <div class=\"alert-heading h5\">
                            ";
            // line 117
            echo sw_escape_filter($this->env, ($context["heading"] ?? null), "html", null, true);
            echo "
                        </div>
                    ";
        }
        // line 120
        echo "                ";
    }

    // line 122
    public function block_utilities_alert_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 123
        echo "                    <div class=\"alert-content\">
                        ";
        // line 124
        if ((twig_length_filter($this->env, ($context["list"] ?? null)) > 1)) {
            // line 125
            echo "                            <ul class=\"alert-list\">
                                ";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 127
                echo "                                    <li>";
                echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($context["entry"]);
                echo "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "                            </ul>
                        ";
        } elseif ((twig_length_filter($this->env,         // line 130
($context["list"] ?? null)) == 1)) {
            // line 131
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 132
                echo "                                ";
                echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($context["entry"]);
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "                        ";
        } else {
            // line 135
            echo "                            ";
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize(($context["content"] ?? null));
            echo "
                        ";
        }
        // line 137
        echo "                    </div>
                ";
    }

    // line 140
    public function block_utilities_alert_dismissible($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 141
        echo "                    ";
        if (($context["dismissible"] ?? null)) {
            // line 142
            echo "                        <button type=\"button\"
                                class=\"close\"
                                data-bs-dismiss=\"alert\"
                                aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    ";
        }
        // line 149
        echo "                ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Storefront/storefront/utilities/alert.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  297 => 149,  288 => 142,  285 => 141,  281 => 140,  276 => 137,  270 => 135,  267 => 134,  258 => 132,  253 => 131,  251 => 130,  248 => 129,  239 => 127,  235 => 126,  232 => 125,  230 => 124,  227 => 123,  223 => 122,  219 => 120,  213 => 117,  210 => 116,  207 => 115,  203 => 114,  198 => 150,  196 => 140,  193 => 139,  191 => 122,  188 => 121,  186 => 114,  183 => 113,  179 => 112,  175 => 110,  172 => 109,  166 => 107,  163 => 106,  160 => 105,  151 => 104,  148 => 103,  139 => 102,  136 => 101,  127 => 100,  124 => 99,  115 => 98,  112 => 97,  103 => 96,  100 => 95,  94 => 93,  91 => 92,  88 => 91,  85 => 90,  81 => 89,  76 => 152,  74 => 112,  71 => 111,  69 => 89,  56 => 88,  53 => 87,  46 => 86,  43 => 85,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/utilities/alert.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/utilities/alert.html.twig");
    }
}
