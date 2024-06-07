<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* main/card.html.twig */
class __TwigTemplate_e51c128aa340927e3cd709d15e53f90c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/card.html.twig"));

        // line 2
        yield "
<div class=\"card shadow-sm mb-4 border-0\">
    ";
        // line 4
        if (array_key_exists("title", $context)) {
            // line 5
            yield "        <div class=\"card-header bg-primary text-white\">
            <h5 class=\"card-title mb-0\">";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 6, $this->source); })()), "html", null, true);
            yield "</h5>
        </div>
    ";
        }
        // line 9
        yield "    <div class=\"card-body\">
        <div class=\"card-content\">
            ";
        // line 11
        if (array_key_exists("content", $context)) {
            // line 12
            yield "                ";
            yield (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 12, $this->source); })());
            yield "
            ";
        } else {
            // line 14
            yield "                <p>No content available.</p>
            ";
        }
        // line 16
        yield "        </div>
    </div>
    ";
        // line 18
        if (array_key_exists("footer", $context)) {
            // line 19
            yield "        <div class=\"card-footer bg-light text-muted\">
            <small>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["footer"]) || array_key_exists("footer", $context) ? $context["footer"] : (function () { throw new RuntimeError('Variable "footer" does not exist.', 20, $this->source); })()), "html", null, true);
            yield "</small>
        </div>
    ";
        }
        // line 23
        yield "</div>

<style>
    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
    }
    .card-content {
        font-size: 1rem;
        line-height: 1.5;
    }
    .card-footer {
        text-align: right;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "main/card.html.twig";
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
        return array (  87 => 23,  81 => 20,  78 => 19,  76 => 18,  72 => 16,  68 => 14,  62 => 12,  60 => 11,  56 => 9,  50 => 6,  47 => 5,  45 => 4,  41 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/main/card.html.twig #}

<div class=\"card shadow-sm mb-4 border-0\">
    {% if title is defined %}
        <div class=\"card-header bg-primary text-white\">
            <h5 class=\"card-title mb-0\">{{ title }}</h5>
        </div>
    {% endif %}
    <div class=\"card-body\">
        <div class=\"card-content\">
            {% if content is defined %}
                {{ content|raw }}
            {% else %}
                <p>No content available.</p>
            {% endif %}
        </div>
    </div>
    {% if footer is defined %}
        <div class=\"card-footer bg-light text-muted\">
            <small>{{ footer }}</small>
        </div>
    {% endif %}
</div>

<style>
    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
    }
    .card-content {
        font-size: 1rem;
        line-height: 1.5;
    }
    .card-footer {
        text-align: right;
    }
</style>
", "main/card.html.twig", "/Users/s2400076/Desktop/symf_chatgpt/summer_project/travelBuddy-summer-project/templates/main/card.html.twig");
    }
}
