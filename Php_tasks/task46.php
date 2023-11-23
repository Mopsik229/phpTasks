<?php
function getElementFromArray($string, $arr) {
    $keys = explode('.', $string);
    $result = $arr;
    foreach ($keys as $key) {
        $result = $result[$key];
    }
    return $result;
}

$arr = array(
    'строка1' => array(
        'строка2' => array(
            'строка3' => 'значение'
        )
    )
);

echo getElementFromArray('строка1.строка2.строка3', $arr);
?>
