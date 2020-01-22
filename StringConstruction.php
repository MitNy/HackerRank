<?php

// Complete the stringConstruction function below.
function stringConstruction($s) {
    $split_s = str_split($s);
    $us = array_unique($split_s);
    return count($us);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $q);

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $s = '';
    fscanf($stdin, "%[^\n]", $s);

    $result = stringConstruction($s);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);

