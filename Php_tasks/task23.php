<?php
$a = 4;
$b = 8;
$c = 3;

$result1 = ($a + $b) / $c;
$result2 = ($a + $c) / $b;
$result3 = ($b + $c) / $a;

echo "Результаты деления сумм двух чисел на оставшееся третье число:" . "<br>";
echo "($a + $b) / $c = " . $result1 . "<br>";
echo "($a + $c) / $b = " . $result2 . "<br>";
echo "($b + $c) / $a = " . $result3;
?>