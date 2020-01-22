<?php

// Complete the strangeCounter function below.
function strangeCounter($t) {
    $counter = 3;
    while( $counter < $t ) {
        $t -= $counter;
        $counter *= 2;
    }
    $result = ($counter-$t)+1;
    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%ld\n", $t);

$result = strangeCounter($t);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);

