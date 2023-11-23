<?php
$str = "Москва Киев Вашингтон";
$cities = explode(" ", $str);
sort($cities);
$newStr = implode(" ", $cities);
echo $newStr;
