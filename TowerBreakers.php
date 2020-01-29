<?php

// Complete the towerBreakers function below.
function towerBreakers($n, $m) {
    if( $n%2 == 1 && $m != 1) {
        return 1;
    }
    else {
        return 2;
    }
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%[^\n]", $nm_temp);
    $nm = explode(' ', $nm_temp);

    $n = intval($nm[0]);

    $m = intval($nm[1]);

    $result = towerBreakers($n, $m);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
