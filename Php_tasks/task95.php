<?php
function flatten($arr) {
    $result = [];
    
    foreach ($arr as $value) {
        if (is_array($value)) {
            $result = array_merge($result, flatten($value));
        } else {
            $result[] = $value;
        }
    }
    
    return $result;
}

$arr = [1, [2], [3, [[[4]]]]];
$result = flatten($arr);

print_r($result);
