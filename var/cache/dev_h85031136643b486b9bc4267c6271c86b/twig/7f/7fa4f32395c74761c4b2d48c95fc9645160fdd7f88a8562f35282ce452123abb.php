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
class __TwigTemplate_dfbf2ed541c5d5cb5286b42428137c43 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/utilities/alert.html.twig"));

        // line 85
        echo "
";
        // line 86
        $this->displayBlock('utilities_alert', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_utilities_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_alert"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 89
    public function block_utilities_alert_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_alert_icon"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 112
    public function block_utilities_alert_content_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_alert_content_container"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 114
    public function block_utilities_alert_heading($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_alert_heading"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 122
    public function block_utilities_alert_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_alert_content"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 140
    public function block_utilities_alert_dismissible($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_alert_dismissible"));

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
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  336 => 149,  327 => 142,  324 => 141,  317 => 140,  309 => 137,  303 => 135,  300 => 134,  291 => 132,  286 => 131,  284 => 130,  281 => 129,  272 => 127,  268 => 126,  265 => 125,  263 => 124,  260 => 123,  253 => 122,  246 => 120,  240 => 117,  237 => 116,  234 => 115,  227 => 114,  219 => 150,  217 => 140,  214 => 139,  212 => 122,  209 => 121,  207 => 114,  204 => 113,  197 => 112,  190 => 110,  187 => 109,  181 => 107,  178 => 106,  175 => 105,  166 => 104,  163 => 103,  154 => 102,  151 => 101,  142 => 100,  139 => 99,  130 => 98,  127 => 97,  118 => 96,  115 => 95,  109 => 93,  106 => 92,  103 => 91,  100 => 90,  93 => 89,  85 => 152,  83 => 112,  80 => 111,  78 => 89,  65 => 88,  62 => 87,  49 => 86,  46 => 85,);
    }

    public function getSourceContext()
    {
        return new Source("{#
Global messages template

https://getbootstrap.com/docs/5.2/components/alerts

*Type:
The template provides an easy way to display messages in the storefront. The following types are supported:

* primary
* secondary
* danger (red)
* success (green)
* warning (yellow)
* info (blue)
* light (white)
* dark (dark gray)

    {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
        type:\"primary\",
        content:\"Primary Lorem ipsum dolor\"
    } %}

*Icons:
Icons are shown by default. To hide the icon within the alert, set the value of \"icon\" to false:

    {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
        type:\"primary\",
        content:\"Primary Lorem ipsum dolor\",
        icon: false
    } %}

*IconCache:
IconCache is used by system settings. To avoid using the icon cache regardless of the system settings (e.g. for an icon rendered in an invisible area like <noscript>), set \"iconCache\" to false:

    {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
        type:\"primary\",
        content:\"Primary Lorem ipsum dolor\",
        iconCache: false
    } %}


*Message Content:
The component requires the parameters ```content``` or ```list``` to display a message. If no ```type``` is defined it
will use the fallback option (success).

    {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
        type:\"primary\",
        content:\"Primary Lorem ipsum dolor\"
    } %}

*Message List:
If you need to display a bunch of messages (for example error messages in the registration), you can pass an array
of messages to the template using the parameter ```list```:

     {% set list1 = [
        'Error message 1',
        'Error message 2',
        'Error message 3'
    ] %}

    {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
        type:\"secondary\",
        list: list1
    } %}

*Heading:
To display a heading, use \"heading\".

    {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
        type:\"primary\",
        content:\"Primary Lorem ipsum dolor\",
        heading: \"Test Heading\"
    } %}

*Dismissible Button:
To display a dismissible button set the value of \"dismissible\" to true.

    {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
        type:\"primary\",
        content:\"Primary Lorem ipsum dolor\",
        dismissible: true
    } %}

#}

{% block utilities_alert %}
    <div role=\"alert\"
         class=\"alert {% if type %}alert-{{ type }}{% endif %}{% if dismissible %} alert-dismissible fade show{% endif %}{% if icon != \"error\" %} alert-has-icon{% endif %}\">
        {% block utilities_alert_icon %}
            {% if icon != \"false\" %}
                {% set iconCacheSystem = config('core.storefrontSettings.iconCache') %}
                {% if iconCache === false and iconCacheSystem === true %}
                    {{ sw_icon_cache_disable() }}
                {% endif %}
                {% if type == \"danger\" %}
                    {% sw_icon 'blocked' %}
                {% elseif type == \"warning\" %}
                    {% sw_icon 'warning' %}
                {% elseif type == \"info\" %}
                    {% sw_icon 'info' %}
                {% elseif type == \"success\" %}
                    {% sw_icon 'checkmark-circle' %}
                {% else %}
                    {% sw_icon 'alert' %}
                {% endif %}
                {% if iconCache == false and iconCacheSystem === true %}
                    {{ sw_icon_cache_enable() }}
                {% endif %}
            {% endif %}
        {% endblock %}

        {% block utilities_alert_content_container %}
            <div class=\"alert-content-container\">
                {% block utilities_alert_heading %}
                    {% if heading %}
                        <div class=\"alert-heading h5\">
                            {{ heading }}
                        </div>
                    {% endif %}
                {% endblock %}

                {% block utilities_alert_content %}
                    <div class=\"alert-content\">
                        {% if list|length > 1 %}
                            <ul class=\"alert-list\">
                                {% for entry in list %}
                                    <li>{{ entry|sw_sanitize }}</li>
                                {% endfor %}
                            </ul>
                        {% elseif list|length == 1 %}
                            {% for entry in list %}
                                {{ entry|sw_sanitize }}
                            {% endfor %}
                        {% else %}
                            {{ content|sw_sanitize }}
                        {% endif %}
                    </div>
                {% endblock %}

                {% block utilities_alert_dismissible %}
                    {% if dismissible %}
                        <button type=\"button\"
                                class=\"close\"
                                data-bs-dismiss=\"alert\"
                                aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    {% endif %}
                {% endblock %}
            </div>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/utilities/alert.html.twig", "/home/avinash/Desktop/work/Shopware/vendor/shopware/storefront/Resources/views/storefront/utilities/alert.html.twig");
    }
}
