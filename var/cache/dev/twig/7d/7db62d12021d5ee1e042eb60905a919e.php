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

/* main/landingPage.html.twig */
class __TwigTemplate_faaa0c6e16e31e697a4d0b34fd0e975e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/landingPage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/landingPage.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "REBS Travel Buddy";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        yield "    <style>
        #gif-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; 
            background-image: url('";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("clip.gif"), "html", null, true);
        yield "');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .content-wrapper {
            position: relative; 
            z-index: 1;
            padding: 20px; 
        }

        /* Fixed footer */
        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #333; 
            color: #fff; 
            padding: 10px 20px; 
            text-align: center;
        }

        .gallery-section {
            position: relative;
        }

        .discover-more {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            z-index: 2; /* Ensure it's above the image */
        }

    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 59
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 60
        yield "
    <style>
        .navbar {
            display: none; 
        }
    .qr-code img {
            width: 150px; 
            height: auto; 
        }
    .qr-code h2 {
            color: #D2DE32; /* Set text color to lime green */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 2); /* Add shadow effect */
        }

    </style>

    <div class=\"content-wrapper\">
        <div id=\"gif-background\"></div>

        <div class=\"gallery-section\">
            <div class=\"gallery\">
                <img src=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img43.jpg"), "html", null, true);
        yield "\" alt=\"Gallery Image 1\" class=\"big\">
                <img src=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img40.jpg"), "html", null, true);
        yield "\" alt=\"Gallery Image 7\" class=\"big\">
                <div class=\"discover-more\">
                    <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("choose_plan");
        yield "\" style=\"color: #D2DE32; text-decoration: none;\">Discover more</a>
                </div>
                <img src=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/test1.jpeg"), "html", null, true);
        yield "\" alt=\"Gallery Image 8\" class=\"big\">
            </div>
        </div>

        <!-- REBS team QR Code  -->
        <div class=\"qr-code\">
            <h2>Scan to Visit Our Team Website</h2>
            <img src=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/REBS_QR.png"), "html", null, true);
        yield "\" alt=\"QR Code\">
        </div>
    </div>

    <footer>
        <p>&copy; 2024 REBS Travel Buddy. All rights reserved.</p>
    </footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "main/landingPage.html.twig";
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
        return array (  191 => 93,  181 => 86,  176 => 84,  171 => 82,  167 => 81,  144 => 60,  137 => 59,  86 => 15,  76 => 7,  69 => 6,  55 => 4,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/landingPage.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}REBS Travel Buddy{% endblock %}

{% block stylesheets %}
    <style>
        #gif-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; 
            background-image: url('{{ asset('clip.gif') }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .content-wrapper {
            position: relative; 
            z-index: 1;
            padding: 20px; 
        }

        /* Fixed footer */
        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #333; 
            color: #fff; 
            padding: 10px 20px; 
            text-align: center;
        }

        .gallery-section {
            position: relative;
        }

        .discover-more {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            z-index: 2; /* Ensure it's above the image */
        }

    </style>
{% endblock %}

{% block body %}

    <style>
        .navbar {
            display: none; 
        }
    .qr-code img {
            width: 150px; 
            height: auto; 
        }
    .qr-code h2 {
            color: #D2DE32; /* Set text color to lime green */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 2); /* Add shadow effect */
        }

    </style>

    <div class=\"content-wrapper\">
        <div id=\"gif-background\"></div>

        <div class=\"gallery-section\">
            <div class=\"gallery\">
                <img src=\"{{ asset('images/img43.jpg') }}\" alt=\"Gallery Image 1\" class=\"big\">
                <img src=\"{{ asset('images/img40.jpg') }}\" alt=\"Gallery Image 7\" class=\"big\">
                <div class=\"discover-more\">
                    <a href=\"{{ path('choose_plan') }}\" style=\"color: #D2DE32; text-decoration: none;\">Discover more</a>
                </div>
                <img src=\"{{ asset('images/test1.jpeg') }}\" alt=\"Gallery Image 8\" class=\"big\">
            </div>
        </div>

        <!-- REBS team QR Code  -->
        <div class=\"qr-code\">
            <h2>Scan to Visit Our Team Website</h2>
            <img src=\"{{ asset('images/REBS_QR.png') }}\" alt=\"QR Code\">
        </div>
    </div>

    <footer>
        <p>&copy; 2024 REBS Travel Buddy. All rights reserved.</p>
    </footer>
{% endblock %}
", "main/landingPage.html.twig", "/Users/s2400076/Desktop/symf_chatgpt/summer_project/travelBuddy-summer-project/templates/main/landingPage.html.twig");
    }
}
