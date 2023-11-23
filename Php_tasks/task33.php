<?php
$number = 5;
$array = [1];
for ($i = 2; $i <= $number; $i++) {
    $array = array(array($array));
}
print_r($array);
?>
