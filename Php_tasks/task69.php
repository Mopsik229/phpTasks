<?php
$str = 'abc def abc ghi abc';
$replace_array = array('a' => 1, 'b' => 2, 'c' => 3);
$new_str = strtr($str, $replace_array);
echo $new_str;

