<?php

// Complete the squares function below.
function squares($a, $b) {
    $count = 0;
    $s = 1;
    while(true) {
        $pow = $s*$s;
        if( $pow >= $a && $pow <= $b ) {
            $count++;
        }
        else if( $pow > $b ) {
            return $count;
        }
        $s++;
    }
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $q);

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    fscanf($stdin, "%[^\n]", $ab_temp);
    $ab = explode(' ', $ab_temp);

    $a = intval($ab[0]);

    $b = intval($ab[1]);

    $result = squares($a, $b);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);