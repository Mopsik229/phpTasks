<?php
function replaceBlock($str, $n, $replace) {
    $blocks = explode('/', $str);
    $blocks[$n*2+1] = $replace;
    return implode('/', $blocks);
}

echo replaceBlock('/aaa/222/we33/qqq/', 2, '!');
