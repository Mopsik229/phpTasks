<?php
$a = 4;
$b = 8;
$c = 3;

$combinations = [
    $a + $b => $c,
    $a + $c => $b,
    $b + $c => $a
];

foreach ($combinations as $sum => $divider) {
    $result = $sum / $divider;
    echo $result . '<br>';
}