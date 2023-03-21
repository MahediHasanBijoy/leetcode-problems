<?php
// Richest Customer Wealth

function maximumWealth($accounts){
    $wealth = 0;
    foreach($accounts as $account){

        $total = array_sum($account);

        if($total > $wealth){
            $wealth = $total;
        }
    }

    return $wealth;
}

$accounts = [[1,5],[7,3],[3,5]];
echo maximumWealth($accounts);