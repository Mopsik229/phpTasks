<?php
function replaceElements($input) {

    $numbers = explode(' ', $input);
    $total = 1;
  
    foreach ($numbers as $number) {
      $total *= $number;
    }
  
    foreach ($numbers as &$number) {
      $number = $total / $number;
    }
  
    $output = implode(' ', $numbers);
  
    return $output;
  }
  
  $input = "1 2 3 4 5";
  $output = replaceElements($input);
  echo $output;