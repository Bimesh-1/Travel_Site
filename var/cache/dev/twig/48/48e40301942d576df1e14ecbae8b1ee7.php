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

/* main/index.html.twig */
class __TwigTemplate_d7746f2a19dd0a79bd76e5d1418c437f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "REBS travel buddy";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <meta charset=\"UTF-8\">
    <title>REBS travel buddy</title>
    ";
        // line 9
        yield "    <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" rel=\"stylesheet\">
    <script src=\"https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js\"></script>
    ";
        // line 12
        yield "    <link href=\"https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css\" rel=\"stylesheet\" />
    
    <script src=\"https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.min.js\"></script>
    <link href=\"https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.css\" rel=\"stylesheet\" />
    
    <style>
        body {
            background-color: #016A70;
            color: #FFFFDD;
        }
        h1, h2, h3 {
            color: #D2DE32;
        }
        .search-box {
            margin: 20px 0;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
        }
        #map {
            width: 100%;
            height: 400px;
        }
        .btn-custom {
            background-color: #D2DE32;
            border: none;
            color: #016A70;
        }
        .btn-custom:hover {
            background-color: #FFFFDD;
            color: #016A70;
        }
        .logo {
            width: 150px;
            height: auto;
        }
        footer {
            background-color: #D2DE32;
            margin-top: 20px;
            color: #016A70;
            padding: 10px 0;
            text-align: center;
            position: fixed;
            width: 64%;
            bottom: 0;
        }
        .gallery {
            margin-top: 20px;
            background-color: #D2DE32;
            padding: 20px;
            border-radius: 10px;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); 
            gap: 10px;
        }
        .gallery img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 10px;
        }
        .gallery .big {
            grid-column: span 2;
            grid-row: span 2;
        }
        .qr-code {
            margin-top: 20px;
            margin-bottom: 80px; 
            text-align: center;
        }
        .qr-code img {
            width: 250px;
            height: auto;
            text-align: center;
        }
        .card-body-custom {
            background-color: #016A70;
            color: #FFFFDD;
        }
    </style>

    <h1 class=\"text-center my-4\">REBS. Routes, Exploration, and Best Solutions</h1>

    <div class=\"search-box\">
        <h2>Destination</h2>
        <input type=\"text\" id=\"country-search\" class=\"form-control\" placeholder=\"Search country\">
        <button onclick=\"searchCountry()\" class=\"btn btn-custom mt-2\">Search</button>
        <div id=\"country-result\" class=\"mt-3\"></div>
    </div>

    <div class=\"search-box\">
        <h2>Weather</h2>
        <input type=\"text\" id=\"weather-search\" class=\"form-control\" placeholder=\"Enter city\">
        <button onclick=\"searchWeather()\" class=\"btn btn-custom mt-2\">Search</button>
        <div id=\"weather-result\" class=\"mt-3\"></div>
    </div>

    <div class=\"search-box\">
        <h2>Map</h2>
        <input type=\"text\" id=\"map-search\" class=\"form-control\" placeholder=\"Enter location\">
        <button onclick=\"searchMap()\" class=\"btn btn-custom mt-2\">Search</button>
        <div id=\"map\" class=\"mt-3\"></div>
    </div>
    

    <script>
        document.getElementById('country-search').addEventListener('keypress', function(event) {
            event.key === 'Enter' ? searchCountry() : null;
        });

        document.getElementById('weather-search').addEventListener('keypress', function(event) {
            event.key === 'Enter' ? searchWeather() : null;
        });

        document.getElementById('map-search').addEventListener('keypress', function(event) {
            event.key === 'Enter' ? searchMap() : null;
        });

        async function searchCountry() {
            try {
                const query = document.getElementById('country-search').value.toLowerCase();
                const response = await fetch('/countries');
                const countries = response.ok ? await response.json() : null;
                const result = countries ? countries.find(country => 
                    country.name.common.toLowerCase().includes(query) || 
                    (country.capital && country.capital[0].toLowerCase().includes(query))
                ) : null;
                const cardContent = result ? `
                    <div class=\"card\">
                        <div class=\"card-body card-body-custom\">
                            <h5 class=\"card-title\">\${result.name.common}</h5>
                            <p>Capital: \${result.capital && result.capital[0]}</p>
                            <p>Population: \${result.population}</p>
                            <p>Region: \${result.region}</p>
                            <p>Subregion: \${result.subregion}</p>
                            <p>Languages: \${Object.values(result.languages).join(', ')}</p>
                            <p>Currency: \${result.currencies ? Object.values(result.currencies).map(currency => `\${currency.name} (\${currency.symbol})`).join(', ') : 'N/A'}</p>
                        </div>
                    </div>
                ` : 'Country not found';
                document.getElementById('country-result').innerHTML = cardContent;
            } catch (error) {
                document.getElementById('country-result').innerText = 'Error fetching country data';
            }
        }

        async function searchWeather() {
            try {
                const city = document.getElementById('weather-search').value;
                const response = await fetch(`/weather?city=\${city}`);
                const weather = response.ok ? await response.json() : { main: null };
                const weatherResult = weather.main ? `
                    <div class=\"card\">
                        <div class=\"card-body card-body-custom\">
                            <h5 class=\"card-title\">Weather in \${city}</h5>
                            <p>Temperature: \${(weather.main.temp - 273.15).toFixed(2)}°C</p>
                            <p>Weather: \${weather.weather[0].description}</p>
                            <p>Humidity: \${weather.main.humidity}%</p>
                            <p>Wind Speed: \${weather.wind.speed} m/s</p>
                        </div>
                    </div>
                ` : 'City not found';
                document.getElementById('weather-result').innerHTML = weatherResult;
            } catch (error) {
                document.getElementById('weather-result').innerText = 'Error fetching weather data';
            }
        }

        function searchMap() {
            const location = document.getElementById('map-search').value;
            mapboxgl.accessToken = '";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["mapbox_token"]) || array_key_exists("mapbox_token", $context) ? $context["mapbox_token"] : (function () { throw new RuntimeError('Variable "mapbox_token" does not exist.', 182, $this->source); })()), "html", null, true);
        yield "';
            const map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/streets-v11',
                center: [0, 0],
                zoom: 2
            });

            const geocoder = new MapboxGeocoder({
                accessToken: mapboxgl.accessToken,
                mapboxgl: mapboxgl
            });

            map.addControl(geocoder);

            geocoder.query(location);
            geocoder.on('result', function(e) {
                const result = e.result;
                map.flyTo({
                    center: result.center,
                    zoom: 11,
                    speed: 1.5,
                    curve: 1
                });
                new mapboxgl.Marker()
                    .setLngLat(result.center)
                    .addTo(map);
                new mapboxgl.Popup({ offset: 25 })
                    .setLngLat(result.center)
                    .setHTML(`<h3>\${result.place_name}</h3>`)
                    .addTo(map);
            });
        }
    </script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "main/index.html.twig";
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
        return array (  255 => 182,  83 => 12,  79 => 9,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}REBS travel buddy{% endblock %}

{% block body %}
    <meta charset=\"UTF-8\">
    <title>REBS travel buddy</title>
    {# Bootstrap CSS #}
    <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" rel=\"stylesheet\">
    <script src=\"https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js\"></script>
    {# Mapbox CSS #}
    <link href=\"https://api.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css\" rel=\"stylesheet\" />
    
    <script src=\"https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.min.js\"></script>
    <link href=\"https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.css\" rel=\"stylesheet\" />
    
    <style>
        body {
            background-color: #016A70;
            color: #FFFFDD;
        }
        h1, h2, h3 {
            color: #D2DE32;
        }
        .search-box {
            margin: 20px 0;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
        }
        #map {
            width: 100%;
            height: 400px;
        }
        .btn-custom {
            background-color: #D2DE32;
            border: none;
            color: #016A70;
        }
        .btn-custom:hover {
            background-color: #FFFFDD;
            color: #016A70;
        }
        .logo {
            width: 150px;
            height: auto;
        }
        footer {
            background-color: #D2DE32;
            margin-top: 20px;
            color: #016A70;
            padding: 10px 0;
            text-align: center;
            position: fixed;
            width: 64%;
            bottom: 0;
        }
        .gallery {
            margin-top: 20px;
            background-color: #D2DE32;
            padding: 20px;
            border-radius: 10px;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); 
            gap: 10px;
        }
        .gallery img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 10px;
        }
        .gallery .big {
            grid-column: span 2;
            grid-row: span 2;
        }
        .qr-code {
            margin-top: 20px;
            margin-bottom: 80px; 
            text-align: center;
        }
        .qr-code img {
            width: 250px;
            height: auto;
            text-align: center;
        }
        .card-body-custom {
            background-color: #016A70;
            color: #FFFFDD;
        }
    </style>

    <h1 class=\"text-center my-4\">REBS. Routes, Exploration, and Best Solutions</h1>

    <div class=\"search-box\">
        <h2>Destination</h2>
        <input type=\"text\" id=\"country-search\" class=\"form-control\" placeholder=\"Search country\">
        <button onclick=\"searchCountry()\" class=\"btn btn-custom mt-2\">Search</button>
        <div id=\"country-result\" class=\"mt-3\"></div>
    </div>

    <div class=\"search-box\">
        <h2>Weather</h2>
        <input type=\"text\" id=\"weather-search\" class=\"form-control\" placeholder=\"Enter city\">
        <button onclick=\"searchWeather()\" class=\"btn btn-custom mt-2\">Search</button>
        <div id=\"weather-result\" class=\"mt-3\"></div>
    </div>

    <div class=\"search-box\">
        <h2>Map</h2>
        <input type=\"text\" id=\"map-search\" class=\"form-control\" placeholder=\"Enter location\">
        <button onclick=\"searchMap()\" class=\"btn btn-custom mt-2\">Search</button>
        <div id=\"map\" class=\"mt-3\"></div>
    </div>
    

    <script>
        document.getElementById('country-search').addEventListener('keypress', function(event) {
            event.key === 'Enter' ? searchCountry() : null;
        });

        document.getElementById('weather-search').addEventListener('keypress', function(event) {
            event.key === 'Enter' ? searchWeather() : null;
        });

        document.getElementById('map-search').addEventListener('keypress', function(event) {
            event.key === 'Enter' ? searchMap() : null;
        });

        async function searchCountry() {
            try {
                const query = document.getElementById('country-search').value.toLowerCase();
                const response = await fetch('/countries');
                const countries = response.ok ? await response.json() : null;
                const result = countries ? countries.find(country => 
                    country.name.common.toLowerCase().includes(query) || 
                    (country.capital && country.capital[0].toLowerCase().includes(query))
                ) : null;
                const cardContent = result ? `
                    <div class=\"card\">
                        <div class=\"card-body card-body-custom\">
                            <h5 class=\"card-title\">\${result.name.common}</h5>
                            <p>Capital: \${result.capital && result.capital[0]}</p>
                            <p>Population: \${result.population}</p>
                            <p>Region: \${result.region}</p>
                            <p>Subregion: \${result.subregion}</p>
                            <p>Languages: \${Object.values(result.languages).join(', ')}</p>
                            <p>Currency: \${result.currencies ? Object.values(result.currencies).map(currency => `\${currency.name} (\${currency.symbol})`).join(', ') : 'N/A'}</p>
                        </div>
                    </div>
                ` : 'Country not found';
                document.getElementById('country-result').innerHTML = cardContent;
            } catch (error) {
                document.getElementById('country-result').innerText = 'Error fetching country data';
            }
        }

        async function searchWeather() {
            try {
                const city = document.getElementById('weather-search').value;
                const response = await fetch(`/weather?city=\${city}`);
                const weather = response.ok ? await response.json() : { main: null };
                const weatherResult = weather.main ? `
                    <div class=\"card\">
                        <div class=\"card-body card-body-custom\">
                            <h5 class=\"card-title\">Weather in \${city}</h5>
                            <p>Temperature: \${(weather.main.temp - 273.15).toFixed(2)}°C</p>
                            <p>Weather: \${weather.weather[0].description}</p>
                            <p>Humidity: \${weather.main.humidity}%</p>
                            <p>Wind Speed: \${weather.wind.speed} m/s</p>
                        </div>
                    </div>
                ` : 'City not found';
                document.getElementById('weather-result').innerHTML = weatherResult;
            } catch (error) {
                document.getElementById('weather-result').innerText = 'Error fetching weather data';
            }
        }

        function searchMap() {
            const location = document.getElementById('map-search').value;
            mapboxgl.accessToken = '{{ mapbox_token }}';
            const map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/streets-v11',
                center: [0, 0],
                zoom: 2
            });

            const geocoder = new MapboxGeocoder({
                accessToken: mapboxgl.accessToken,
                mapboxgl: mapboxgl
            });

            map.addControl(geocoder);

            geocoder.query(location);
            geocoder.on('result', function(e) {
                const result = e.result;
                map.flyTo({
                    center: result.center,
                    zoom: 11,
                    speed: 1.5,
                    curve: 1
                });
                new mapboxgl.Marker()
                    .setLngLat(result.center)
                    .addTo(map);
                new mapboxgl.Popup({ offset: 25 })
                    .setLngLat(result.center)
                    .setHTML(`<h3>\${result.place_name}</h3>`)
                    .addTo(map);
            });
        }
    </script>

{% endblock %}", "main/index.html.twig", "/Users/s2400076/Desktop/symf_chatgpt/summer_project/travelBuddy-summer-project/templates/main/index.html.twig");
    }
}
