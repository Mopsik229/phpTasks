<?php

function Mnozhetili($num) {
    $mnoz = array();
    $delitely = 2;
    
    while ($num > 1) {
        if ($num % $delitely == 0) {
            $mnoz[] = $delitely;
            $num /= $delitely;
        } else {
            $delitely++;
        }
    }
    
    return $mnoz;
}

$num = 12;
$result = Mnozhetili($num);
echo $num . " - это " . implode(" * ", $result);

?>