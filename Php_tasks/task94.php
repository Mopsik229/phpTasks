<?php
function findLCM($num1, $num2) {
    $max = ($num1 > $num2) ? $num1 : $num2;
    while (true) {
        if ($max % $num1 == 0 && $max % $num2 == 0) {
            return $max;
        }
        $max++;
    }
}

$number1 = 12;
$number2 = 15;
$lcm = findLCM($number1, $number2);
echo "НОК чисел $number1 и $number2 равен $lcm";

