<?php

/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($n, $arr) {
    $array_rk = 0;
    $array_tp = 0;
    for( $i=0; $i<$n; $i++ ) {
        $array_rk += $arr[$i][$i];
    }
    # $array_rk = 4
    for( $i=0; $i<$n; $i++ ) {
        $array_tp += $arr[$i][$n-1-$i];
    }
    return abs($array_rk-$array_tp);
    
    


}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($n, $arr);

fwrite($fptr, $result . "\n");

fclose($fptr);

