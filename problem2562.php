<?php

function findTheArrayConcVal($nums) {
    $conVal = 0;
    $length = count($nums);
    $mid = ceil($length/2);
    for($i=0; $i<$mid; $i++){
        $first = array_shift($nums);
        $last  = array_pop($nums);
        $conVal += $first . $last;
    }

    return $conVal;
}

echo findTheArrayConcVal([5,14,13,8,12]);

