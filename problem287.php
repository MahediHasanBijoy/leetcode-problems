<?php

// Problem name: Find the Duplicate Number

function findDuplicate($nums) {
    $len = count($nums);
    // sorted nums
    $sorted_nums = $nums;
    sort($sorted_nums);

    // find if two consequtive numbers are same in sorted nums
    for($i=0; $i<$len; $i++){
        if($sorted_nums[$i]==$sorted_nums[$i+1]){
            return $sorted_nums[$i];
        }
    }
}

echo findDuplicate([1,2,3,2,5]);