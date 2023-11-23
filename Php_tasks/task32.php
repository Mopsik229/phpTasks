<?php
$numbers = [123, 456, 789, 505, 12345, 67890];

$result = '';

foreach ($numbers as $number) {
    $numberStr = strval($number);
    
    if (strpos($numberStr, '5') !== false) {
        $result .= $number . ' ';
    }
}

$result = rtrim($result);

echo $result;
?>
