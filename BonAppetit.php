<?php

// Complete the bonAppetit function below.
function bonAppetit($bill, $k, $b) {
    unset($bill[$k]);
    $total_cost = array_sum($bill);
    $half_cost = $total_cost/2;
    if( $b > $half_cost ) {
        echo $b-$half_cost;
    }
    else if ( $b == $half_cost ) {
        echo "Bon Appetit";
    }
}

$nk = explode(' ', rtrim(fgets(STDIN)));

$n = intval($nk[0]);

$k = intval($nk[1]);

$bill_temp = rtrim(fgets(STDIN));

$bill = array_map('intval', preg_split('/ /', $bill_temp, -1, PREG_SPLIT_NO_EMPTY));

$b = intval(trim(fgets(STDIN)));

bonAppetit($bill, $k, $b);

