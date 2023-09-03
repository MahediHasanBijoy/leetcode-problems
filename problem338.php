<?php

class Solution {

/**
 * @param Integer $n
 * @return Integer[]
 */
function countBits($n) {
    $result = [];
    for($i=0; $i<=$n; $i++){
        $num = $i;
        $count = 0;
        if($i==0){
            $result[$i] = 0;
        }else{
            while($num!==0){
                $quotient = (int)($num / 2);
                $remainder = (int)($num % 2);
                if($remainder == 1){
                    $count++;
                }
                $num = $quotient;
            }
            $result[$i] = $count;
        }
    }
    return $result;
}

}

$sol = new Solution();

print_r( $sol->countBits(5));
