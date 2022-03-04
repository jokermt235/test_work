<?php

use Twig\Environment;
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

/* raport/index.html.twig */
class __TwigTemplate_929221a9e6226c4822405420b300c05950863422f3675f413b1d353a8a10edc7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "raport/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "raport/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "raport/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Raport";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<form class=\"uk-position-relative\">
    <div class=\"uk-card uk-card-default uk-card-body uk-margin-large-top uk-margin-large-left uk-margin-large-right\">
        <div class=\"uk-text-center\" uk-grid>
            <div class=\"uk-width-1-4@s uk-position-relative\">
                <div>
                    <div uk-form-custom=\"target: > * > span:first-child\">
                        <select name=\"lokal\" selected=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "get", [0 => "lokal"], "method", false, false, false, 12), "html", null, true);
        echo "\">
                            <option value=\"\">Source</option>
                            <option value=\"Lokal 01\">Lokal 01</option>
                            <option value=\"Lokal 02\">Lokal 02</option>
                            <option value=\"Lokal 03\">Lokal 03</option>
                            <option value=\"Lokal 04\">Lokal 04</option>
                            <option value=\"Lokal 05\">Lokal 05</option>
                        </select>
                        <button class=\"uk-button uk-button-default uk-text-left\" type=\"button\" tabindex=\"-1\" style=\"width:196px\">
                            <span></span>
                            <span uk-icon=\"icon: chevron-down\"></span>
                        </button>
                    </div>
                </div>
                <div>
                    <div uk-form-custom=\"target: > * > span:first-child\">
                        <select name=\"od\">
                            <option value=\"\">OD</option>
                            <option value=\"2022-03-04\">2022-03-04</option>
                            <option value=\"2022-03-05\">2022-03-05</option>
                            <option value=\"2022-03-07\">2022-03-07</option>
                            <option value=\"2022-03-02\">2022-03-02</option>
                            <option value=\"2022-03-08\">2022-03-08</option>
                        </select>
                        <button class=\"uk-button uk-button-default uk-text-left\" type=\"button\" tabindex=\"-1\" style=\"width:196px\">
                            <span></span>
                            <span uk-icon=\"icon: chevron-down\"></span>
                        </button>
                    </div>
                </div>
                <div>
                    <div uk-form-custom=\"target: > * > span:first-child\">
                        <select name=\"do\">
                            <option value=\"\">DO</option>
                            <option value=\"2022-03-04\">2022-03-04</option>
                            <option value=\"2022-03-05\">2022-03-05</option>
                            <option value=\"2022-03-07\">2022-03-07</option>
                            <option value=\"2022-03-02\">2022-03-02</option>
                            <option value=\"2022-03-08\">2022-03-08</option>
                        </select>
                        <button class=\"uk-button uk-button-default uk-text-left\" type=\"button\" tabindex=\"-1\" style=\"width:196px\">
                            <span></span>
                            <span uk-icon=\"icon: chevron-down\"></span>
                        </button>
                    </div>
                </div>
                <div class=\"uk-margin-large-top\">
                    <button class=\"uk-button uk-button-primary\" style=\"width:196px\">Confirm</button>
                </div>
            </div>
            <div class=\"uk-width-expand@s\">
                ";
        // line 63
        echo twig_include($this->env, $context, "tables/raport.html.twig", ["heads" => (isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 63, $this->source); })()), "raports" => (isset($context["dataset"]) || array_key_exists("dataset", $context) ? $context["dataset"] : (function () { throw new RuntimeError('Variable "dataset" does not exist.', 63, $this->source); })())], false);
        echo "
            </div>
        </div>
    </div>
</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "raport/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 63,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Raport{% endblock %}

{% block body %}
<form class=\"uk-position-relative\">
    <div class=\"uk-card uk-card-default uk-card-body uk-margin-large-top uk-margin-large-left uk-margin-large-right\">
        <div class=\"uk-text-center\" uk-grid>
            <div class=\"uk-width-1-4@s uk-position-relative\">
                <div>
                    <div uk-form-custom=\"target: > * > span:first-child\">
                        <select name=\"lokal\" selected=\"{{app.request.get('lokal')}}\">
                            <option value=\"\">Source</option>
                            <option value=\"Lokal 01\">Lokal 01</option>
                            <option value=\"Lokal 02\">Lokal 02</option>
                            <option value=\"Lokal 03\">Lokal 03</option>
                            <option value=\"Lokal 04\">Lokal 04</option>
                            <option value=\"Lokal 05\">Lokal 05</option>
                        </select>
                        <button class=\"uk-button uk-button-default uk-text-left\" type=\"button\" tabindex=\"-1\" style=\"width:196px\">
                            <span></span>
                            <span uk-icon=\"icon: chevron-down\"></span>
                        </button>
                    </div>
                </div>
                <div>
                    <div uk-form-custom=\"target: > * > span:first-child\">
                        <select name=\"od\">
                            <option value=\"\">OD</option>
                            <option value=\"2022-03-04\">2022-03-04</option>
                            <option value=\"2022-03-05\">2022-03-05</option>
                            <option value=\"2022-03-07\">2022-03-07</option>
                            <option value=\"2022-03-02\">2022-03-02</option>
                            <option value=\"2022-03-08\">2022-03-08</option>
                        </select>
                        <button class=\"uk-button uk-button-default uk-text-left\" type=\"button\" tabindex=\"-1\" style=\"width:196px\">
                            <span></span>
                            <span uk-icon=\"icon: chevron-down\"></span>
                        </button>
                    </div>
                </div>
                <div>
                    <div uk-form-custom=\"target: > * > span:first-child\">
                        <select name=\"do\">
                            <option value=\"\">DO</option>
                            <option value=\"2022-03-04\">2022-03-04</option>
                            <option value=\"2022-03-05\">2022-03-05</option>
                            <option value=\"2022-03-07\">2022-03-07</option>
                            <option value=\"2022-03-02\">2022-03-02</option>
                            <option value=\"2022-03-08\">2022-03-08</option>
                        </select>
                        <button class=\"uk-button uk-button-default uk-text-left\" type=\"button\" tabindex=\"-1\" style=\"width:196px\">
                            <span></span>
                            <span uk-icon=\"icon: chevron-down\"></span>
                        </button>
                    </div>
                </div>
                <div class=\"uk-margin-large-top\">
                    <button class=\"uk-button uk-button-primary\" style=\"width:196px\">Confirm</button>
                </div>
            </div>
            <div class=\"uk-width-expand@s\">
                {{ include('tables/raport.html.twig', {heads: headers, raports : dataset}, with_context = false) }}
            </div>
        </div>
    </div>
</form>
{% endblock %}
", "raport/index.html.twig", "/var/www/test_work/templates/raport/index.html.twig");
    }
}
