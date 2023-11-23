<?php 
function getNumberCombinations($numbers) {
    $numberArray = explode(" ", $numbers);
    $combinations = [];
    
    $count = count($numberArray);
    
    for ($i = 0; $i < $count - 1; $i++) {
      for ($j = $i+1; $j < $count; $j++) {
        $combination = $numberArray[$i] . " " . $numberArray[$j];
        $combinations[] = $combination;
      }
    }
    
    return $combinations;
  }
  
  $numbers = "1 2 3";
  $combinations = getNumberCombinations($numbers);
  
  foreach ($combinations as $combination) {
    echo $combination . "\n";
  }