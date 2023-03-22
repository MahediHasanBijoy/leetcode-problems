<?php

// two sum

function twoSum($nums, $target) {
    for($i=0; $i < count($nums); $i++)
    {
       for($j=$i+1; $j<count($nums); $j++)
       {
           if($nums[$i]+$nums[$j] === $target){
               return [$i,$j];
           }
       }
    }

}

print_r(twoSum([1,2,3], 3));