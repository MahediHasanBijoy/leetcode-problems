<?php
// Problem name: Average salary excluding the minimum and maximum salary

function average(array $salary) {
    $min = min($salary);
    $max = max($salary);

    $totalSal = 0;
    $numberOfEmp = count($salary)-2;
    foreach($salary as $s){
        if($s != $min && $s != $max){
            $totalSal += $s;
        }
    }

    $avgSal = $totalSal / $numberOfEmp;

    return $avgSal;

}

echo average([1000,2000,3000]);