<?php
$len = 10;
$str = '';
for($i=0;$i<$len;$i++){
    $str .= chr(rand(97,122));
}
echo $str;
