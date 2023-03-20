<?php
// 2558. Take Gifts From the Richest Pile

function pickGifts($gifts, $k){
    while($k>0){
        $max = max($gifts);
        $sqrt = floor(sqrt($max));
        $indexOfMax = array_search($max, $gifts);
        // replace max element of gifts array with sqrt of max
        $gifts[$indexOfMax] = $sqrt;

        $k--;
    }
    return array_sum($gifts);
}

echo pickGifts([1,1,1,1], 4);