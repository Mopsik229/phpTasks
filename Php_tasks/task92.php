<?php
function cutString($string, $maxLength) {
    if (strlen($string) <= $maxLength) {
        return $string;
    }
    
    $string = substr($string, 0, $maxLength);
    
    if (substr($string, -1) === ' ') {
        return $string;
    }
    
    $lastSpacePos = strrpos($string, ' ');
    $string = substr($string, 0, $lastSpacePos);
    
    return $string;
}

$longString = "тут очень много текста";
$maxLength = 20;
$shortString = cutString($longString, $maxLength);
echo $shortString;

