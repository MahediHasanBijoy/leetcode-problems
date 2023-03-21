<?php
// 1342. Number of Steps to Reduce a Number to Zero

function numOfSteps($num){
    $steps = 0;
    while($num>0){
        if($num%2==0){
            $num = $num/2;
            $steps++;
        }else{
            $num--;
            $steps++;
        }
    }
    return $steps;
}

echo numOfSteps(123);