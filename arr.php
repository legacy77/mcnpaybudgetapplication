<?php
function arrjml($arr,$S) {
    $sums = [];
    for ($i = 0; $i < count($arr); $i++) { 
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$i] + $arr[$j] == $S) {
                $sums=[
                    $i,
                    $j
                ];
            }
        }
    }
    return $sums;  
}

print_r(arrjml([3,2,4],6));
// var_dump('<pre>',arrjml([3,2,4],6));