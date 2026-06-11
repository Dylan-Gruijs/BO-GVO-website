<link rel="stylesheet" href="includes/actueleTemp.css">
<?php
$url = "https://api.open-meteo.com/v1/forecast?latitude=52.37&longitude=4.90&current=temperature_2m";

$data = json_decode(file_get_contents($url), true);

echo '<div class="temperature-card">';
echo '<h2>Actuele temperatuur</h2>';
echo '<span class="temperature-value">';
echo $data['current']['temperature_2m'] . ' °C';
echo '</span>';
echo '</div>';
