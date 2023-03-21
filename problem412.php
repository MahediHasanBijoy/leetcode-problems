<?php

// Fizz Buzz

function fizzBuzz($n){
    $a = array();
    for($i=1; $i<=$n; $i++){
        if($i%3==0 && $i%5==0){
            array_push($a,"FizzBuzz");
        }
        else if($i%3==0){
            array_push($a,"Fizz");
        }else if($i%5==0){
            array_push($a,"Buzz");
        }else{
            array_push($a, "$i");
        }
    }
    return $a;
}

$n=15;
print_r(fizzBuzz($n));