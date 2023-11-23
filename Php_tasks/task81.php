<?php
$str = '12345 67890';
$arr = explode(' ', $str);
$newStr = strrev($arr[0]) . ' ' . strrev($arr[1]);
echo $newStr;


