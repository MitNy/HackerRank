<?php

// Complete the aVeryBigSum function below.
function aVeryBigSum($ar,$ar_count) {
    $result = 0;
    for($i=0; $i<$ar_count; $i++ ) {
        $result += $ar[$i];
    }
    return $result;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $ar_count);

fscanf($stdin, "%[^\n]", $ar_temp);

$ar = array_map('intval', preg_split('/ /', $ar_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = aVeryBigSum($ar,$ar_count);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);

