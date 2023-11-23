<?php
$x = 2;
$y = 6;
$z = 9;

$result = pow($x + 1, 4) - 2 * ($z - 2 * pow($x, 2) + pow($y, 2));

echo "Результат: " . $result;
?>