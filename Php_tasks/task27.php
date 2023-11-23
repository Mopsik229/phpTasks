<?php

function processNumber($number) {
    if ($number >= 50) {
        return $number * $number;
    } elseif ($number > 10 && $number < 30) {
        return 0;
    } else {
        return "Ошибка";
    }
}

$number = 25;
$result = processNumber($number);
echo $result;

?>