<?php

// Complete the chocolateFeast function below.
function chocolateFeast($n, $c, $m) {
    $cho = 0;
    $wrapper = 0;
    while(true) {
        $n -= $c;
        if( $n >= 0 ) {
            $cho++; $wrapper++;
            if( $wrapper == $m ) {
                $cho++;
                $wrapper = 1;
            }
        }
        else{
            if( $wrapper == $m ) {
                $cho++;
                $wrapper = 1;
            }
            break;
        }
    }
    return $cho;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%[^\n]", $ncm_temp);
    $ncm = explode(' ', $ncm_temp);

    $n = intval($ncm[0]);

    $c = intval($ncm[1]);

    $m = intval($ncm[2]);

    $result = chocolateFeast($n, $c, $m);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);

