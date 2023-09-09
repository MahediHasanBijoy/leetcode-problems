<?php

// Shortest Pallindrome

function shortestPalindrome($s) {
    if($s == strrev($s)){
        return "$s";
    }else{
        $len = strlen($s);
        $temp = "";
        for($i=1; $i<$len; $i++){
            $temp .= $s[$len-$i];
            if($temp.$s == strrev($temp.$s)){
                return $temp.$s;
            }
        }
    
    }
}
    echo shortestPalindrome("bbaa");