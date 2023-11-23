<?php
function generatePascalsTriangle($rows)
{
    $triangle = array();

    for ($i = 0; $i < $rows; $i++) {
        $curRow = array(1);
        if ($i > 0) {
            for ($j = 1; $j <= $i - 1; $j++) {
                $curVal = $triangle[$i - 1][$j - 1] + $triangle[$i - 1][$j];
                array_push($curRow, $curVal);
            }
            $curRow[$i] = 1;
        }
        array_push($triangle, $curRow);
    }

    return $triangle;
}

function displayPascalsTriangle($triangle)
{
    foreach ($triangle as $row) {
        foreach ($row as $val) {
            echo $val . " ";
        }
        echo "<br>";
    }
}

$triangle = generatePascalsTriangle(10);
displayPascalsTriangle($triangle);
?>
<!-- Нагло взято из инета, я реально хз как это делать :( -->