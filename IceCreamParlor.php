<?php

// Complete the icecreamParlor function below.
function icecreamParlor($m, $arr) {
    $ice = [];
    for( $i=0; $i<count($arr); $i++ ) {
        for( $j=$i+1; $j<count($arr); $j++ ) {
            $ic = $arr[$i]+$arr[$j];
            if( $ic == $m ) {
                $ice = [($i+1)." ".($j+1)];
            }
        }
    }
    return $ice;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%d\n", $m);

    fscanf($stdin, "%d\n", $n);

    fscanf($stdin, "%[^\n]", $arr_temp);

    $arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

    $result = icecreamParlor($m, $arr);

    fwrite($fptr, implode(" ", $result) . "\n");
}

fclose($stdin);
fclose($fptr);

