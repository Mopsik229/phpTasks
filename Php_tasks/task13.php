<?php 
function reverseWords($input) {
    $words = explode(" ", $input);
  
    $reversedWords = array_reverse($words);
  
    $output = implode(" ", $reversedWords);
  
    return $output;
  }
  
  $input = "hello world";
  $output = reverseWords($input);
  
  echo $output; // Выведет "world hello"