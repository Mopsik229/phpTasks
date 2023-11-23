<?php
$str = "123456";

$sum1 = intval($str[0]) + intval($str[1]) + intval($str[2]);
$sum2 = intval($str[3]) + intval($str[4]) + intval($str[5]);

if ($sum1 == $sum2) {
    echo 'да';
} else {
    echo 'нет';
}
