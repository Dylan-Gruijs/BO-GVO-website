<link rel="stylesheet" href="includes/Weersverwachting.css">
 
<?php
 
$stad = "Amsterdam";
$url = "https://wttr.in/" . urlencode($stad) . "?format=j1";
 
$data = json_decode(file_get_contents($url), true);
 
echo '<div class="forecast-card">';
echo '<h2>Weersverwachting</h2>';
 
foreach ($data['weather'] as $dag) {
 
    $datum = date('d-m', strtotime($dag['date']));
    $weer = $dag['hourly'][4]['weatherDesc'][0]['value'];
 
    echo '<div class="forecast-day">';
    echo '<span class="forecast-date">' . $datum . '</span>';
    echo '<span class="forecast-weather">' . htmlspecialchars($weer) . '</span>';
    echo '</div>';
}
 
echo '</div>';
?>