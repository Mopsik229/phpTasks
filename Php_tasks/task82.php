<?php
$arr = [123, 456, 732, 893, 235];
foreach ($arr as $num) {
    if (strpos($num, '3') !== false) {
        echo $num . '<br>';
    }
}
