<?php
$country = $_GET['country'];
$days = $_GET['days'];
$discount = $_GET['discount'];

$startCost = $days * 400;

if ($country == 'Египет') {
    $startCost *= 1.10;
} elseif ($country == 'Италия') {
    $startCost *= 1.12;
}

if ($discount == 'on') {
    $startCost *= 0.95;
}

echo "Стоимость отдыха: " . $startCost;
?>
