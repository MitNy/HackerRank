<?php

// Complete the viralAdvertising function below.
function viralAdvertising($n) {
    $array = array();
    $start = 5;
    $total = 0;
    $like = 0;
    for($i=0; $i<$n; $i++ ) {
        $like = floor($start/2);
        $total += $like;
        $tmp = [$start, floor($start/2), $total];
        array_push($array, $tmp);
        $start = $like*3;
    }
    return $array[$n-1][2];
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$result = viralAdvertising($n);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);

