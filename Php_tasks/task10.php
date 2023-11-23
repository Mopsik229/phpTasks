<?php 
$secondsInHour = 60 * 60;
$secondsInDay = $secondsInHour * 24;

echo "Количество секунд в часе: " . $secondsInHour . "<br>";

echo "Количество секунд в сутках: " . $secondsInDay . "<br>";

$daysInMonth = date("t");
echo "Количество секунд в месяце: " . ($secondsInDay * $daysInMonth);
