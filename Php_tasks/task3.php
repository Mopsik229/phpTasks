<?php
$num1 = 5;
$num2 = 10;

echo "Исходные значения: num1 = " . $num1 . ", num2 = " . $num2 . "<br>";

$temp = $num1;
$num1 = $num2;
$num2 = $temp;

echo "Новые значения: num1 = " . $num1 . ", num2 = " . $num2;
