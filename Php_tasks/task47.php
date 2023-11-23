<?php
function printArrayValues($arr) {
    foreach ($arr as $value) {
        if (is_array($value)) {
            printArrayValues($value);
        } else {
            echo $value . "<br>";
        }
    }
}

// Пример использования:
$arr = array(
    array(1, 2, 3),
    array(
        array(4, 5, array(6, 7, 7)),
        9,
        10
    )
);

printArrayValues($arr);
?>
