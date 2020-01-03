<?php

// Complete the lonelyinteger function below.
function lonelyinteger($a) {
    $arr = array();
    foreach( $a as $key ) {
        if( !array_key_exists($key, $arr)) {
            $arr[$key] = 1;
        }
        else {
            $arr[$key] += 1;
        }
    }
    foreach( $a as $key ) {
        if( $arr[$key] == 1 ) {
            return array_search($arr[$key], $arr);
        }
    }
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $a_temp);

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = lonelyinteger($a);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);

