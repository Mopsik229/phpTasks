<?php
function склонение($number, $words) {
    $cases = array(2, 0, 1, 1, 1, 2);
    return $number . ' ' . $words[($number%100 > 4 && $number%100 < 20) ? 2 : $cases[min($number%10, 5)]];
}

$number = 5;
$words = array('яблоко', 'яблока', 'яблок');

$result = склонение($number, $words);
echo $result;
?>