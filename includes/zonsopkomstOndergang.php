<link rel="stylesheet" href="includes/zonsopkomstOndergang.css">
<?php

$info = date_sun_info(time(), 52.3676, 4.9041);

echo '<div class="sun-card">';
echo '<h2>Zonsopgang: </h2>';
echo '<p>' . date('H:i:s', $info['sunrise']) . '</p>';
echo '<h2>Zonsondergang: </h2>';
echo '<p>' . date('H:i:s', $info['sunset']) . '</p>';
echo '</div>';