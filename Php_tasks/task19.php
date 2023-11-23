<?php 
function findLeastCommonMultiple($num1, $num2) {
    $max = max($num1, $num2);
    
    while (true) {
        if ($max % $num1 == 0 && $max % $num2 == 0) {
            return $max;
        }
        $max++;
    }
}

$num1 = 12;
$num2 = 15;
$lcm = findLeastCommonMultiple($num1, $num2);
echo "НОК чисел $num1 и $num2 равен $lcm.";