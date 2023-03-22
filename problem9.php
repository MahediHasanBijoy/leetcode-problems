<?php
// Palindrom number

function isPalindrom(int $x){
    $remainder = 0;
    $reverse = 0;
    $original_num = $x;
    while($x>0){
        // remainder
        $remainder = $x%10;

        // quotient
        $x = floor($x/10);

        // reversing the number
        $reverse = $reverse * 10 + $remainder;
    }

    if($reverse == $original_num){
        return true;
    }else{
        return false;
    }
}


if(isPalindrom(1001)){
    echo "true";
}else{
    echo "false";
}