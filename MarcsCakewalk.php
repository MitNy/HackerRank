<?php

// Complete the marcsCakewalk function below.
function marcsCakewalk($calorie) {
    rsort($calorie);
    $result = 0;
    for( $i=0; $i<count($calorie); $i++ ) {
        $result += ($calorie[$i]*pow(2,$i));
    }
    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $calorie_temp);

$calorie = array_map('intval', preg_split('/ /', $calorie_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = marcsCakewalk($calorie);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);

