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

/* main/about_us.html.twig */
class __TwigTemplate_c7a30d379be30fb96b1f9fca9ddb381c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/about_us.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/about_us.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "About Us
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        yield "\t<style>
\t\tbody {
\t\t\tbackground-image: url('";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("about.gif"), "html", null, true);
        yield "');
\t\t\tbackground-repeat: no-repeat;
\t\t\tbackground-size: cover;
\t}
        .content-wrapper {
            background-color: darkgray;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 2px 10px 20px rgba(0, 0, 0, 1);
            margin: 20px auto;
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        .content-wrapper h1 {
            color: #333;
            font-size: 2em;
            margin-bottom: 10px;
        }
        .content-wrapper p {
            color: black;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class=\"content-wrapper\">
        <h1>About Us</h1>
        <p>Welcome to REBS Travel Buddy! We're four friends—Randolph, Elias, Bimesh, and Shaheed—who turned our shared love for travel into something special. The acronym REBS, representing Routes, Exploration, and Best Solutions, comes from the first letters of each of our names.</p>
        <p>The aim of our platform simplifies trip planning with essential itineraries and weather forecasts.</p>
        <p>Built on the Symfony framework with Twig templates and CSS styling, our site's original aim was a seamless, visually appealing experience. Due to time constraints, we've been unable to add many features originally intended for our web application.</p>
        <p>Some of our ideas balanced around the concept of making trip planning a seamless experience, with features such as travel suggestions, itinerary planning, and easy access to transportation costs and routes.</p>
        <p>We hope to add these features and more in the near future, all of it with the aim of pushing each other to improve our web development skills.</p>
        <p>Thank you for taking the time to visit our REBS Travel Buddy!</p>
    </div>
</body>
</html>

\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "main/about_us.html.twig";
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
        return array (  80 => 11,  76 => 9,  69 => 8,  54 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}About Us
{% endblock %}


{% block body %}
\t<style>
\t\tbody {
\t\t\tbackground-image: url('{{ asset('about.gif') }}');
\t\t\tbackground-repeat: no-repeat;
\t\t\tbackground-size: cover;
\t}
        .content-wrapper {
            background-color: darkgray;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 2px 10px 20px rgba(0, 0, 0, 1);
            margin: 20px auto;
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        .content-wrapper h1 {
            color: #333;
            font-size: 2em;
            margin-bottom: 10px;
        }
        .content-wrapper p {
            color: black;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class=\"content-wrapper\">
        <h1>About Us</h1>
        <p>Welcome to REBS Travel Buddy! We're four friends—Randolph, Elias, Bimesh, and Shaheed—who turned our shared love for travel into something special. The acronym REBS, representing Routes, Exploration, and Best Solutions, comes from the first letters of each of our names.</p>
        <p>The aim of our platform simplifies trip planning with essential itineraries and weather forecasts.</p>
        <p>Built on the Symfony framework with Twig templates and CSS styling, our site's original aim was a seamless, visually appealing experience. Due to time constraints, we've been unable to add many features originally intended for our web application.</p>
        <p>Some of our ideas balanced around the concept of making trip planning a seamless experience, with features such as travel suggestions, itinerary planning, and easy access to transportation costs and routes.</p>
        <p>We hope to add these features and more in the near future, all of it with the aim of pushing each other to improve our web development skills.</p>
        <p>Thank you for taking the time to visit our REBS Travel Buddy!</p>
    </div>
</body>
</html>

\t{% endblock %}
", "main/about_us.html.twig", "/Users/s2400076/Desktop/symf_chatgpt/summer_project/travelBuddy-summer-project/templates/main/about_us.html.twig");
    }
}
