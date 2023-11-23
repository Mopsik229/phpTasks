<?php
$array = [1, ' ', 2, ' ', 3];
$array = array_filter($array, function($value) {
    return trim($value) !== '';
});

var_dump($array);