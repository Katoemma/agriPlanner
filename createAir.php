<?php
if (isset($_POST['CreateRecord'])) {
    $api_key = 'patHfZrSuUsaUVOEt.2b0d95c86167aaf65abbc1f91fb0066b7e0bfeead557e0f6e565e72abc4b8ec4';
    $url = "https://api.airtable.com/v0/appZoiDNJAQJ52y7a/Table%201";

    $headers = array(
        'Authorization: Bearer ' . $api_key,
        'Content-Type: application/json',
    );

    // Get form data
    $name = $_POST['name'];
    $done = isset($_POST['done']) ? true : false;

    // Prepare data for cURL request
    $data = array(
        "records" => array(
            array(
                "fields" => array(
                    "Name" => $name,
                    "Done" => $done,
                ),
            ),
        ),
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    $response = curl_exec($ch);

    curl_close($ch);

    $result = json_decode($response, true);

    echo "Records created:\n";
    foreach ($result['records'] as $record) {
        $id = $record['id'];
        $createdTime = $record['createdTime'];
        echo "ID: $id\n";
        echo "Created Time: $createdTime\n";
        echo "\n";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Record</title>
</head>
<body>
    <h2>Create a Record</h2>
    <form method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="done">Done:</label>
        <input type="checkbox" id="done" name="done" value="1"><br><br>
        <input type="submit" name="CreateRecord">
    </form>
</body>
</html>
