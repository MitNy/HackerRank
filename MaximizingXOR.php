<?php

// Complete the maximizingXor function below.
function maximizingXor($l, $r) {
    $tmpArr = [];
    for( $i=$l; $i<=$r; $i++ ) {
        for( $j=$l; $j<=$r; $j++ ) {
            $tmp = ($i^$j);
            array_push($tmpArr, $tmp);
        }
    }
    return max($tmpArr);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $l);

fscanf($stdin, "%d\n", $r);

$result = maximizingXor($l, $r);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);

