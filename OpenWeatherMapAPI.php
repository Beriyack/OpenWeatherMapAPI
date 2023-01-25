<?php
class OpenWeatherMapAPI {
    private $apiKey;

    /**
     * Constructeur de la classe
     *
     * @param string $apiKey Clé API pour utiliser l'API OpenWeatherMap
     */
    public function __construct($apiKey) {
        $this->apiKey = $apiKey;
    }

    /**
     * Récupérer la météo d'une ville
     *
     * @param string $city Nom de la ville
     * @return object Les données météo de la ville
     */
    public function getWeather($city) {
        $url = "http://api.openweathermap.org/data/2.5/weather?q=" . urlencode($city) . "&appid=" . $this->apiKey;
        $response = file_get_contents($url);
        return json_decode($response);
    }
}