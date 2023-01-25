<?php
$owm = new OpenWeatherMapAPI('YOUR_API_KEY');
$weather = $owm->getWeather('Paris');
echo "Temperature in Paris: " . $weather->main->temp . " Kelvin";