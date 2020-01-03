<?php

// Complete the marsExploration function below.
function marsExploration($s) {
    $s_length = strlen($s);
    $sos_length = str_repeat("SOS",$s_length/3);
    $s_array = str_split($s);
    $sos_array = str_split($sos_length);
    $count = 0;
    //return (count(array_diff($s_array, $sos_array)));
    for( $i=0; $i<count($s_array); $i++ ) {
        if( $s_array[$i] != $sos_array[$i] ) {
            $count++;
        }
    }
    return $count;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

$s = '';
fscanf($stdin, "%[^\n]", $s);

$result = marsExploration($s);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);

