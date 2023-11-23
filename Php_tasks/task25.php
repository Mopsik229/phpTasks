<?php
$num = 123;

$part1 = $num % 10;
$part2 = floor(($num / 10) % 10);
$part3 = floor($num / 100);
$sum = $part1 + $part2 + $part3;

echo "Сумма цифр числа $num равна $sum.";
?>