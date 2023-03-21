<?php
// Number of Zero-Filled Subarrays
function zeroFilledSubarray($nums) {
    
    $total_zero_sub = $current_zero_sub = 0;
    foreach($nums as $num){
        if($num==0){
            $current_zero_sub += 1;
            $total_zero_sub += $current_zero_sub;
        }else{
            $current_zero_sub = 0;

        }
    }
    return $total_zero_sub;
}


$nums = [0,0,0,2,0,0];


echo zeroFilledSubarray($nums);