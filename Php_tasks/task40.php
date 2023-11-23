<?php
$daysOfWeek = [
    1 => "понедельник",
    2 => "вторник",
    3 => "среда",
    4 => "четверг",
    5 => "пятница",
    6 => "суббота",
    7 => "воскресенье"
];
$currentDayNumber = date("5");
echo "Сегодня - " . $daysOfWeek[$currentDayNumber];
?>
