<?php

// Complete the missingNumbers function below.
function missingNumbers($arr, $brr) {
    $t_brr = array_unique($brr);
    $t_brr= array_values($t_brr);
    $list = [];
    $original_value = array_count_values($brr);
    $missing_value = array_count_values($arr);
    for( $i=0; $i<count($t_brr); $i++ ) {
        $t = $t_brr[$i];
        if( !array_key_exists($t, $missing_value)) {
            $list[] = $t;
        }
        else if( $original_value[$t]  != $missing_value[$t]) {
            $list[] = $t;
        }
    }
    sort($list);
    return $list;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

fscanf($stdin, "%d\n", $m);

fscanf($stdin, "%[^\n]", $brr_temp);

$brr = array_map('intval', preg_split('/ /', $brr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = missingNumbers($arr, $brr);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($stdin);
fclose($fptr);

