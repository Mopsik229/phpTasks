<?php 
function findMaxDifference($input) {

    $numbers = explode(" ", $input);
    
    $maxDifference = 0;
    

    for ($i = 0; $i < count($numbers); $i++) {

        for ($j = $i + 1; $j < count($numbers); $j++) {

            if ($numbers[$j] - $numbers[$i] > $maxDifference) {
                $maxDifference = $numbers[$j] - $numbers[$i];
            }
        }
    }
    
    return $maxDifference;
}

$input = "1 9 2 5 3 7";
$result = findMaxDifference($input);
echo "Максимальная разница: " . $result;