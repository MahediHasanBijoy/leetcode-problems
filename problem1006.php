<?php
// problem name: clumsy factorial

// $n is a integer 
function clumsy($n) {
    
    if($n==0){
        return 1;
    }else if($n==1){
        return $n;
    }else if($n==2){
        return $n * ($n-1);
    }else if($n==3){
        return floor($n * ($n-1) / ($n-2));
    }else{
        $result = floor($n * ($n-1) / ($n-2))+($n-3);
        for($i = $n-4; $i>=1; $i=$i-4){
            if($i>=4){
                $result -= floor($i * ($i-1) / ($i-2));
                $result += ($i - 3);
            }else if($i==3){
                $result -= floor($i * ($i-1) / ($i-2));
            }else if($i==2){
                $result -= $i * ($i-1);
            }else if($i==1){
                $result -= $i;
            }
        }

        return $result;
    }
}

echo clumsy(7);