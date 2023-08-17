<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

<?php
$api_url = "https://api.open-meteo.com/v1/forecast?latitude=2.7746&longitude=32.299&hourly=temperature_2m,relativehumidity_2m,rain,cloudcover_mid,temperature_80m,soil_moisture_27_81cm";
$response = file_get_contents($api_url);
$data = json_decode($response);

if ($data && isset($data->hourly->temperature_2m[0], $data->hourly->relativehumidity_2m[0], $data->hourly->rain[0], $data->hourly->cloudcover_mid[0])) {
    $temperature = $data->hourly->temperature_2m[0];
    $humidity = $data->hourly->relativehumidity_2m[0];
    $rain = $data->hourly->rain[0];
    $cloud_cover = $data->hourly->cloudcover_mid[0];

    echo "<div class='text-center'>
              <h1 class='text-2xl font-semibold mb-2'>Weather in Gulu city, Uganda </h1>
              <p class='text-lg'>Temperature: $temperature °C</p>
              <p class='text-lg'>Humidity: $humidity %</p>
              <p class='text-lg'>Rain: $rain mm</p>
              <p class='text-lg'>Cloud Cover: $cloud_cover %</p>
          </div>";
} else {
    echo "<p class='text-red-500'>Error fetching weather data.</p>";
}


$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://weather-by-api-ninjas.p.rapidapi.com/v1/weather?city=Seattle",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: weather-by-api-ninjas.p.rapidapi.com",
		"X-RapidAPI-Key: a550bf98f9msh3b9a52ab44e735dp1cc5e8jsn0d3164c0ffd0"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
    $responses = json_encode($response);
	
        echo $responses;
        
}
?>

</body>
</html>
