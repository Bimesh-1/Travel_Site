<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Service\QueryLogger;

class MainController extends AbstractController
{
    private $httpClient;
    private $queryLogger;

    public function __construct(HttpClientInterface $httpClient, QueryLogger $queryLogger)
    {
        $this->httpClient = $httpClient;
        $this->queryLogger = $queryLogger;
    }

    /**
     * @Route("/", name="landing_page")
     */
    public function landingPage(): Response
    {
        return $this->render('main/landingPage.html.twig');
    }

    /**
     * @Route("/choose-your-plan", name="choose_plan")
     */
    public function choosePlan(): Response
    {
        $mapboxToken = $this->getParameter('app.mapbox_api_key');
        $weatherApiKey = $this->getParameter('app.weather_api_key');

        return $this->render('main/choose_plan.html.twig', [
            'mapbox_token' => $mapboxToken,
            'weather_api_key' => $weatherApiKey,
        ]);
    }

    /**
     * @Route("/weather", name="get_weather")
     */
    public function getWeather(Request $request): Response
    {
        $city = $request->query->get('city');
        $this->queryLogger->logQuery('weather', $city);

        $apiKey = $this->getParameter('app.weather_api_key');
        $response = $this->httpClient->request('GET', "http://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$apiKey}");
        $weatherData = $response->toArray();

        return $this->json($weatherData);
    }

    /**
     * @Route("/countries", name="get_countries")
     */
    public function getCountries(Request $request): Response
    {
        $query = $request->query->get('query', '');
        $this->queryLogger->logQuery('country', $query);

        $response = $this->httpClient->request('GET', 'https://restcountries.com/v3.1/all');
        $countries = $response->toArray();

        return $this->json(array_filter($countries, function ($country) use ($query) {
            return stripos($country['name']['common'], $query) !== false
                || (isset($country['capital'][0]) && stripos($country['capital'][0], $query) !== false);
        }));
    }

    /**
     * @Route("/about-us", name="about_us")
     */
    public function aboutUs(): Response
    {
        return $this->render('main/about_us.html.twig');
    }
}
