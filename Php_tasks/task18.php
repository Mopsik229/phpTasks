<?php 
$string = "13217";
$sum = 0;

for ($i = 0; $i < strlen($string); $i++) {
    $sum += intval($string[$i]);
}

echo "Сумма всех элементов строки: " . $sum;
