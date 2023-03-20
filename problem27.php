<?php
// 27. remove element

function removeElement(&$nums, $val){
    // occurances of each unique value
    $countVals = array_count_values($nums);
    // number of $val in $nums
    $numberOfVal = $countVals[$val];
     
    for($i=0; $i<$numberOfVal; $i++){
        // find $val key in $nums array
        $key = array_search($val, $nums);
        // replace $val with underscore
        $nums[$key] = '_';
    }
    // sort nums array ascending order
    sort($nums);
    // number of unchanged val returning
    return count($nums) - $numberOfVal;
}

$nums = [0,1,2,2,3,0,4,2];
echo removeElement($nums, 2);
print_r($nums);