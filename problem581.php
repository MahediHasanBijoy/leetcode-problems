<?php

// Problem name: Shortest Unsorted Continuous Subarray

function findUnsortedSubarray($nums)
{
    $start = null;
    $end = 0;
    $len = count($nums);
    $sorted = $nums;
    sort($sorted);

    // compare sorted and unsorted array
    for ($i = 0; $i < $len; $i++) {
        if ($nums[$i] != $sorted[$i]) {
            if (!isset($start)) {
                $start = $i;
            }
            $end = $i;
        }
    }

    // calculate length of unsorted subarray
    if ($end > 0) {
        $count = 0;
        for ($i = $start; $i <= $end; $i++) {
            $count++;
        }
        return $count;
    } else {
        return 0;
    }
}

