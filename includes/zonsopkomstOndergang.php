<link rel="stylesheet" href="includes/zonsopkomstOndergang.css">
<?php

date_default_timezone_set('Europe/Amsterdam');

$url = "https://api.sunrise-sunset.org/json?lat=36.7201600&lng=-4.4203400&date=today&formatted=0";
$response = file_get_contents($url);
$data = json_decode($response, true);

$sunrise = 'niet beschikbaar';
$sunset = 'niet beschikbaar';
if ($data && isset($data['status']) && $data['status'] === 'OK') {
    $sunrise = date('H:i:s', strtotime($data['results']['sunrise']));
    $sunset = date('H:i:s', strtotime($data['results']['sunset']));
}

echo '<div class="sun-card">';
echo '<h2>Zonsopgang: </h2>';
echo '<p>' . $sunrise . '</p>';
echo '<h2>Zonsondergang: </h2>';
echo '<p>' . $sunset . '</p>';
echo '</div>';