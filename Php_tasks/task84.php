<?php
$str = '12345678';
$result = 0;
for ($i = 0; $i < strlen($str); $i+=2) {
    $result += substr($str, $i, 2);
}
echo $result;
