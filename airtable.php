<?php
$api_key = 'patHfZrSuUsaUVOEt.2b0d95c86167aaf65abbc1f91fb0066b7e0bfeead557e0f6e565e72abc4b8ec4';

$url = "https://api.airtable.com/v0/appZoiDNJAQJ52y7a/Table%201";

$headers = array(
    'Authorization: Bearer ' . $api_key,
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

$records = $data['records'];

foreach ($records as $record) {
    $id = $record['id'];
    $createdTime = $record['createdTime'];
    $fields = $record['fields'];
    $done = isset($fields['Done']) ? $fields['Done'] : null;
    $name = isset($fields['Name']) ? $fields['Name'] : null;
    

    echo "Created Time: $createdTime\n";
    echo "Name: $name\n";
}
?>

