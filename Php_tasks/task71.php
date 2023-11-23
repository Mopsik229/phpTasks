<?php
$str = "текст с двумя..точками";
if(strpos($str, '..') !== false){
    echo 'есть';
} else {
    echo 'нет';
}
