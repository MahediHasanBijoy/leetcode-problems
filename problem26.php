<?php
/**
 *  26. Remove Duplicates from Sorted Array
 */

 function removeDuplicates(&$nums) {
    // unique numbers of given array
    $unique = array_unique($nums);
    // length of given array and unique array
    $nums_length = count($nums);
    $k = count($unique);

    // replace first part of $nums with $unique elements
    array_splice($nums, 0, $k, $unique);
    // replacement array of underscore
    $underscore = array_fill(0,$nums_length-$k, "_");
    // replace rest part of $nums with array of underscore
    array_splice($nums, $k, $nums_length-$k, $underscore);
    // return number of unique values
    return $k;
    
}

// input array
$nums = [0,0,1,1,1,2,2,3,3,4];
// print output
echo removeDuplicates($nums);
print_r($nums);