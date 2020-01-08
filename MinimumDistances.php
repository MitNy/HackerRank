<?php

// Complete the minimumDistances function below.
function minimumDistances($a) {
    $arr = [];
    $distance = [];
    foreach( $a as $index => $value ) {
        if( !array_key_exists($value, $arr) ) {
            $arr[$value] = [$index];
        }
        else {
            array_push($arr[$value], $index);
        }
        if( count($arr[$value]) == 2 ) {
            array_push($distance, abs($arr[$value][0]-$arr[$value][1]));
        }
    }
    if( count($distance) < 1 ) {
        return -1;
    }
    else {
        return min($distance);
    }
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $a_temp);

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = minimumDistances($a);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);

