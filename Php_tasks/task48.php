<?php
$num = 3;
switch ($num) {
    case 1:
        $result = 'зима';
        break;
    case 2:
        $result = 'лето';
        break;
    case 3:
        $result = 'осень';
        break;
    case 4:
        $result = 'весна';
        break;
    default:
        $result = 'неверное значение';
}
echo $result;
?>
