<?php

// Complete the countingValleys function below.
function countingValleys($n, $s) {
    $start = 0;
    $up = 0;
    $down = 0;
    $count = 0;
    for( $i=0; $i<strlen($s); $i++ ) {
        if( $s[$i] == "U" ) {
            $start++;
            if( $start > 0 ) {
                $up = 1;
                $down = 0;
            }
        }
        else if( $s[$i] == "D" ) {
            $start--;
            if( $start < 0 ) {
                $up = 0;
                $down = 1;
            }
        }
        if( ($down == 1) && ($start == 0 ) ) {
            $count++;
        }
    }
    return $count;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$s = '';
fscanf($stdin, "%[^\n]", $s);

$result = countingValleys($n, $s);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);

