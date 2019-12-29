<?php

// Complete the sockMerchant function below.
function sockMerchant($n, $ar) {
    $tmp = array();
    foreach( $ar as $key ) {
        if(!array_key_exists($key, $tmp)) {
            $tmp[$key] = 1;
        }
        else {
            $tmp[$key] = $tmp[$key]+1;
        }
    }
    $pair_count = 0;
    foreach($tmp as $key=>$value) {
        $pair_count += (int)($value/2);
        /*
        if( $value%2 == 0 ) {
            $pair_count += ($value/2);
        }
        else {
            $pair_count += (int)($value/2);
        }
        */
    }
    return $pair_count;


}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = sockMerchant($n, $ar);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);

