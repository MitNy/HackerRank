<?php

// Complete the jumpingOnClouds function below.
function jumpingOnClouds($c, $k) {
    $e = 100;
    $jumps = 0;
    for( $i=0; $i<count($c); $i++ ) {
        $target = ($i+$k)%count($c);
        if( $target%$k == 0 ) {
            if( $c[$target] == 1 ) {
                $e -= 3;
            }
            else {
                $e -= 1;
            }
        }
    }
    return $e;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nk_temp);
$nk = explode(' ', $nk_temp);

$n = intval($nk[0]);

$k = intval($nk[1]);

fscanf($stdin, "%[^\n]", $c_temp);

$c = array_map('intval', preg_split('/ /', $c_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = jumpingOnClouds($c, $k);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);

