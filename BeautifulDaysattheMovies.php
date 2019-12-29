<?php

// Complete the beautifulDays function below.
function beautifulDays($i, $j, $k) {
    $tmp = [];
    for( $index=$i; $index<$j; $index++ ) {
        $rev_str = strrev((string)$index);
        $tmp_value = abs($index-(int)$rev_str)/$k;
        if(is_int($tmp_value)) {
            array_push($tmp, $tmp_value);
        }
    }
    return count($tmp);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $ijk_temp);
$ijk = explode(' ', $ijk_temp);

$i = intval($ijk[0]);

$j = intval($ijk[1]);

$k = intval($ijk[2]);

$result = beautifulDays($i, $j, $k);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);

