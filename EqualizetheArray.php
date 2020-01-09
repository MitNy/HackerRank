<?php

// Complete the equalizeArray function below.
function equalizeArray($arr) {
    $value_arr = array_count_values($arr);
    $max_value = max($value_arr);
    return count($arr)-$max_value;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = equalizeArray($arr);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);

