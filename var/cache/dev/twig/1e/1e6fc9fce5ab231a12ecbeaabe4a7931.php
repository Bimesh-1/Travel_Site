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

/* main/choose_plan.html.twig */
class __TwigTemplate_f9aadfb2781e44df70e6bb185430cb3a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/choose_plan.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/choose_plan.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "REBS travel buddy
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "<meta charset=\"UTF-8\">
<title>REBS travel buddy</title>
";
        // line 10
        yield "<link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" rel=\"stylesheet\">
<script src=\"https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js\"></script>
";
        // line 13
        yield "<link href=\"https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css\" rel=\"stylesheet\"/>

<script src=\"https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.min.js\"></script>
<link href=\"https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.css\" rel=\"stylesheet\"/>

<style>
\tbody {
\t\tbackground-color: #016A70;
\t\tcolor: #FFFFDD;
\t}
\th1,
\th2,
\th3 {
\t\tcolor: #D2DE32;
\t}
\t.search-box {
\t\tmargin: 20px 0;
\t\tpadding: 20px;
\t\tbackground-color: rgba(255, 255, 255, 0.1);
\t\tborder-radius: 10px;
\t}
\t#map {
\t\twidth: 100%;
\t\theight: 400px;
\t}
\t.btn-custom {
\t\tbackground-color: #D2DE32;
\t\tborder: none;
\t\tcolor: #016A70;
\t}
\t.btn-custom:hover {
\t\tbackground-color: #FFFFDD;
\t\tcolor: #016A70;
\t}
\t.logo {
\t\twidth: 150px;
\t\theight: auto;
\t}
\tfooter {
\t\tbackground-color: #D2DE32;
\t\tmargin-top: 20px;
\t\tcolor: #016A70;
\t\tpadding: 10px 0;
\t\ttext-align: center;
\t\tposition: fixed;
\t\twidth: 64%;
\t\tbottom: 0;
\t}
\t.gallery {
\t\tmargin-top: 20px;
\t\tbackground-color: #D2DE32;
\t\tpadding: 20px;
\t\tborder-radius: 10px;
\t\tdisplay: grid;
\t\tgrid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
\t\tgap: 10px;
\t}
\t.gallery img {
\t\twidth: 100%;
\t\theight: auto;
\t\tdisplay: block;
\t\tborder-radius: 10px;
\t}
\t.gallery .big {
\t\tgrid-column: span 2;
\t\tgrid-row: span 2;
\t}
\t.qr-code {
\t\tmargin-top: 20px;
\t\tmargin-bottom: 80px;
\t\ttext-align: center;
\t}
\t.qr-code img {
\t\twidth: 250px;
\t\theight: auto;
\t\ttext-align: center;
\t}
\t.card-body-custom {
\t\tbackground-color: #016A70;
\t\tcolor: #FFFFDD;
\t}
</style>

<h1 class=\"text-center my-4\">REBS. Routes, Exploration, and Best Solutions</h1>

<div class=\"search-box\">
\t<h2>Destination</h2>
\t<input type=\"text\" id=\"country-search\" class=\"form-control\" placeholder=\"Search country\">
\t<button onclick=\"searchCountry()\" class=\"btn btn-custom mt-2\">Search</button>
\t<div id=\"country-result\" class=\"mt-3\"></div>
</div>

<div class=\"search-box\">
\t<h2>Weather</h2>
\t<input type=\"text\" id=\"weather-search\" class=\"form-control\" placeholder=\"Enter city\">
\t<button onclick=\"searchWeather()\" class=\"btn btn-custom mt-2\">Search</button>
\t<div id=\"weather-result\" class=\"mt-3\"></div>
</div>

<div class=\"search-box\">
\t<h2>Map</h2>
\t<input type=\"text\" id=\"map-search\" class=\"form-control\" placeholder=\"Enter location\">
\t<button onclick=\"searchMap()\" class=\"btn btn-custom mt-2\">Search</button>
\t<div id=\"map\" class=\"mt-3\"></div>
</div>


<script>
\tdocument.getElementById('country-search').addEventListener('keypress', function(event) {
\t\t            event.key === 'Enter' ? searchCountry() : null;
\t\t        });
\t\t
\t\t        document.getElementById('weather-search').addEventListener('keypress', function(event) {
\t\t            event.key === 'Enter' ? searchWeather() : null;
\t\t        });
\t\t
\t\t        document.getElementById('map-search').addEventListener('keypress', function(event) {
\t\t            event.key === 'Enter' ? searchMap() : null;
\t\t        });
\t\t
\t\t        async function searchCountry() {
\t    try {
\t        const query = document.getElementById('country-search').value.toLowerCase();
\t        const response = await fetch(`/countries?query=\${encodeURIComponent(query)}`);
\t        const countries = response.ok ? await response.json() : null;
\t        const result = countries ? countries.find(country => 
\t            country.name.common.toLowerCase().includes(query) || 
\t            (country.capital && country.capital[0].toLowerCase().includes(query))
\t        ) : null;
\t        const cardContent = result ? `
\t            <div class=\"card\">
\t                <div class=\"card-body card-body-custom\">
\t                    <h5 class=\"card-title\">\${result.name.common}</h5>
\t                    <p>Capital: \${result.capital && result.capital[0]}</p>
\t                    <p>Population: \${result.population}</p>
\t                    <p>Region: \${result.region}</p>
\t                    <p>Subregion: \${result.subregion}</p>
\t                    <p>Languages: \${Object.values(result.languages).join(', ')}</p>
\t                    <p>Currency: \${result.currencies ? Object.values(result.currencies).map(currency => `\${currency.name} (\${currency.symbol})`).join(', ') : 'N/A'}</p>
\t                </div>
\t            </div>
\t        ` : 'Country not found';
\t        document.getElementById('country-result').innerHTML = cardContent;
\t    } catch (error) {
\t        document.getElementById('country-result').innerText = 'Error fetching country data';
\t    }
\t}
\t
\tasync function searchWeather() {
\t    try {
\t        const city = document.getElementById('weather-search').value;
\t        const response = await fetch(`/weather?city=\${encodeURIComponent(city)}`);
\t        const weather = response.ok ? await response.json() : { main: null };
\t        const weatherResult = weather.main ? `
\t            <div class=\"card\">
\t                <div class=\"card-body card-body-custom\">
\t                    <h5 class=\"card-title\">Weather in \${city}</h5>
\t                    <p>Temperature: \${(weather.main.temp - 273.15).toFixed(2)}°C</p>
\t                    <p>Weather: \${weather.weather[0].description}</p>
\t                    <p>Humidity: \${weather.main.humidity}%</p>
\t                    <p>Wind Speed: \${weather.wind.speed} m/s</p>
\t                </div>
\t            </div>
\t        ` : 'City not found';
\t        document.getElementById('weather-result').innerHTML = weatherResult;
\t    } catch (error) {
\t        document.getElementById('weather-result').innerText = 'Error fetching weather data';
\t    }
\t}
\t
\tfunction searchMap() {
\t    const location = document.getElementById('map-search').value;
\t    mapboxgl.accessToken = '";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mapbox_token"]) || array_key_exists("mapbox_token", $context) ? $context["mapbox_token"] : (function () { throw new RuntimeError('Variable "mapbox_token" does not exist.', 185, $this->source); })()), "html", null, true);
        yield "';
\t    const map = new mapboxgl.Map({
\t        container: 'map',
\t        style: 'mapbox://styles/mapbox/streets-v11',
\t        center: [0, 0],
\t        zoom: 2
\t    });
\t
\t    const geocoder = new MapboxGeocoder({
\t        accessToken: mapboxgl.accessToken,
\t        mapboxgl: mapboxgl
\t    });
\t
\t    map.addControl(geocoder);
\t
\t    geocoder.query(location);
\t    geocoder.on('result', function(e) {
\t        const result = e.result;
\t        map.flyTo({
\t            center: result.center,
\t            zoom: 11,
\t            speed: 1.5,
\t            curve: 1
\t        });
\t        new mapboxgl.Marker()
\t            .setLngLat(result.center)
\t            .addTo(map);
\t        new mapboxgl.Popup({ offset: 25 })
\t            .setLngLat(result.center)
\t            .setHTML(`<h3>\${result.place_name}</h3>`)
\t            .addTo(map);
\t    });
\t}
\t
\t\t    </script>
\t\t
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "main/choose_plan.html.twig";
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
        return array (  258 => 185,  84 => 13,  80 => 10,  76 => 7,  69 => 6,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}REBS travel buddy
{% endblock %}

{% block body %}
<meta charset=\"UTF-8\">
<title>REBS travel buddy</title>
{# Bootstrap CSS #}
<link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" rel=\"stylesheet\">
<script src=\"https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js\"></script>
{# Mapbox CSS #}
<link href=\"https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css\" rel=\"stylesheet\"/>

<script src=\"https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.min.js\"></script>
<link href=\"https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.css\" rel=\"stylesheet\"/>

<style>
\tbody {
\t\tbackground-color: #016A70;
\t\tcolor: #FFFFDD;
\t}
\th1,
\th2,
\th3 {
\t\tcolor: #D2DE32;
\t}
\t.search-box {
\t\tmargin: 20px 0;
\t\tpadding: 20px;
\t\tbackground-color: rgba(255, 255, 255, 0.1);
\t\tborder-radius: 10px;
\t}
\t#map {
\t\twidth: 100%;
\t\theight: 400px;
\t}
\t.btn-custom {
\t\tbackground-color: #D2DE32;
\t\tborder: none;
\t\tcolor: #016A70;
\t}
\t.btn-custom:hover {
\t\tbackground-color: #FFFFDD;
\t\tcolor: #016A70;
\t}
\t.logo {
\t\twidth: 150px;
\t\theight: auto;
\t}
\tfooter {
\t\tbackground-color: #D2DE32;
\t\tmargin-top: 20px;
\t\tcolor: #016A70;
\t\tpadding: 10px 0;
\t\ttext-align: center;
\t\tposition: fixed;
\t\twidth: 64%;
\t\tbottom: 0;
\t}
\t.gallery {
\t\tmargin-top: 20px;
\t\tbackground-color: #D2DE32;
\t\tpadding: 20px;
\t\tborder-radius: 10px;
\t\tdisplay: grid;
\t\tgrid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
\t\tgap: 10px;
\t}
\t.gallery img {
\t\twidth: 100%;
\t\theight: auto;
\t\tdisplay: block;
\t\tborder-radius: 10px;
\t}
\t.gallery .big {
\t\tgrid-column: span 2;
\t\tgrid-row: span 2;
\t}
\t.qr-code {
\t\tmargin-top: 20px;
\t\tmargin-bottom: 80px;
\t\ttext-align: center;
\t}
\t.qr-code img {
\t\twidth: 250px;
\t\theight: auto;
\t\ttext-align: center;
\t}
\t.card-body-custom {
\t\tbackground-color: #016A70;
\t\tcolor: #FFFFDD;
\t}
</style>

<h1 class=\"text-center my-4\">REBS. Routes, Exploration, and Best Solutions</h1>

<div class=\"search-box\">
\t<h2>Destination</h2>
\t<input type=\"text\" id=\"country-search\" class=\"form-control\" placeholder=\"Search country\">
\t<button onclick=\"searchCountry()\" class=\"btn btn-custom mt-2\">Search</button>
\t<div id=\"country-result\" class=\"mt-3\"></div>
</div>

<div class=\"search-box\">
\t<h2>Weather</h2>
\t<input type=\"text\" id=\"weather-search\" class=\"form-control\" placeholder=\"Enter city\">
\t<button onclick=\"searchWeather()\" class=\"btn btn-custom mt-2\">Search</button>
\t<div id=\"weather-result\" class=\"mt-3\"></div>
</div>

<div class=\"search-box\">
\t<h2>Map</h2>
\t<input type=\"text\" id=\"map-search\" class=\"form-control\" placeholder=\"Enter location\">
\t<button onclick=\"searchMap()\" class=\"btn btn-custom mt-2\">Search</button>
\t<div id=\"map\" class=\"mt-3\"></div>
</div>


<script>
\tdocument.getElementById('country-search').addEventListener('keypress', function(event) {
\t\t            event.key === 'Enter' ? searchCountry() : null;
\t\t        });
\t\t
\t\t        document.getElementById('weather-search').addEventListener('keypress', function(event) {
\t\t            event.key === 'Enter' ? searchWeather() : null;
\t\t        });
\t\t
\t\t        document.getElementById('map-search').addEventListener('keypress', function(event) {
\t\t            event.key === 'Enter' ? searchMap() : null;
\t\t        });
\t\t
\t\t        async function searchCountry() {
\t    try {
\t        const query = document.getElementById('country-search').value.toLowerCase();
\t        const response = await fetch(`/countries?query=\${encodeURIComponent(query)}`);
\t        const countries = response.ok ? await response.json() : null;
\t        const result = countries ? countries.find(country => 
\t            country.name.common.toLowerCase().includes(query) || 
\t            (country.capital && country.capital[0].toLowerCase().includes(query))
\t        ) : null;
\t        const cardContent = result ? `
\t            <div class=\"card\">
\t                <div class=\"card-body card-body-custom\">
\t                    <h5 class=\"card-title\">\${result.name.common}</h5>
\t                    <p>Capital: \${result.capital && result.capital[0]}</p>
\t                    <p>Population: \${result.population}</p>
\t                    <p>Region: \${result.region}</p>
\t                    <p>Subregion: \${result.subregion}</p>
\t                    <p>Languages: \${Object.values(result.languages).join(', ')}</p>
\t                    <p>Currency: \${result.currencies ? Object.values(result.currencies).map(currency => `\${currency.name} (\${currency.symbol})`).join(', ') : 'N/A'}</p>
\t                </div>
\t            </div>
\t        ` : 'Country not found';
\t        document.getElementById('country-result').innerHTML = cardContent;
\t    } catch (error) {
\t        document.getElementById('country-result').innerText = 'Error fetching country data';
\t    }
\t}
\t
\tasync function searchWeather() {
\t    try {
\t        const city = document.getElementById('weather-search').value;
\t        const response = await fetch(`/weather?city=\${encodeURIComponent(city)}`);
\t        const weather = response.ok ? await response.json() : { main: null };
\t        const weatherResult = weather.main ? `
\t            <div class=\"card\">
\t                <div class=\"card-body card-body-custom\">
\t                    <h5 class=\"card-title\">Weather in \${city}</h5>
\t                    <p>Temperature: \${(weather.main.temp - 273.15).toFixed(2)}°C</p>
\t                    <p>Weather: \${weather.weather[0].description}</p>
\t                    <p>Humidity: \${weather.main.humidity}%</p>
\t                    <p>Wind Speed: \${weather.wind.speed} m/s</p>
\t                </div>
\t            </div>
\t        ` : 'City not found';
\t        document.getElementById('weather-result').innerHTML = weatherResult;
\t    } catch (error) {
\t        document.getElementById('weather-result').innerText = 'Error fetching weather data';
\t    }
\t}
\t
\tfunction searchMap() {
\t    const location = document.getElementById('map-search').value;
\t    mapboxgl.accessToken = '{{ mapbox_token }}';
\t    const map = new mapboxgl.Map({
\t        container: 'map',
\t        style: 'mapbox://styles/mapbox/streets-v11',
\t        center: [0, 0],
\t        zoom: 2
\t    });
\t
\t    const geocoder = new MapboxGeocoder({
\t        accessToken: mapboxgl.accessToken,
\t        mapboxgl: mapboxgl
\t    });
\t
\t    map.addControl(geocoder);
\t
\t    geocoder.query(location);
\t    geocoder.on('result', function(e) {
\t        const result = e.result;
\t        map.flyTo({
\t            center: result.center,
\t            zoom: 11,
\t            speed: 1.5,
\t            curve: 1
\t        });
\t        new mapboxgl.Marker()
\t            .setLngLat(result.center)
\t            .addTo(map);
\t        new mapboxgl.Popup({ offset: 25 })
\t            .setLngLat(result.center)
\t            .setHTML(`<h3>\${result.place_name}</h3>`)
\t            .addTo(map);
\t    });
\t}
\t
\t\t    </script>
\t\t
\t\t{% endblock %}
", "main/choose_plan.html.twig", "/Users/s2400076/Desktop/symf_chatgpt/summer_project/travelBuddy-summer-project/templates/main/choose_plan.html.twig");
    }
}
