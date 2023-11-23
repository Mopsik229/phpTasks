<?php
$str = 'var_test_text';
$strParts = explode('_', $str);
foreach($strParts as $key => $part){
    if($key != 0){
        $strParts[$key] = ucfirst($part);
    }
}
$newStr = implode("", $strParts);
echo $newStr;
