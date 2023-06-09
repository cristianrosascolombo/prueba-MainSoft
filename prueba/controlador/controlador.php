<?php
$action = isset($_POST["action"]) ? $_POST["action"] : "";


if($action == "validarCiudad"){
    $city=$_POST["valor"];
// Configurar la URL de la API de OpenWeatherMap
$url = "https://api.openweathermap.org/data/2.5/weather?q=" . urlencode($city) . "&appid=2e6ace2b9d670298084c50b8a6a60867&units=metric&lang=es";

// Hacer una petición a la API de OpenWeatherMap
$response = file_get_contents($url);

// Decodificar la respuesta de la API
$data = json_decode($response);

// Obtener la información del pronóstico del clima
$weather = $data->weather[0]->description;
$temp = $data->main->temp;
$humidity = $data->main->humidity;

// Devolver la información del pronóstico del clima en formato JSON
echo json_encode(array(
    'city' => $city,
    'weather' => $weather,
    'temp' => $temp,
    'humidity' => $humidity
));
}