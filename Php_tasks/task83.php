<?php
$arr = [123, 456, 732, 893, 235];
$sum = 0;
foreach ($arr as $num) {
    $sum += substr_count($num, '3');
}
echo $sum;
