<?php

// Complete the maximumToys function below.
function maximumToys($prices, $k) {
    sort($prices);
    $basket = [];
    foreach( $prices as $value ) {
        if( array_sum($basket)+$value <= $k ) {
            array_push($basket, $value);
        }
    }
    return count($basket);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nk_temp);
$nk = explode(' ', $nk_temp);

$n = intval($nk[0]);

$k = intval($nk[1]);

fscanf($stdin, "%[^\n]", $prices_temp);

$prices = array_map('intval', preg_split('/ /', $prices_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = maximumToys($prices, $k);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);

