<?php

// Complete the cutTheSticks function below.
function cutTheSticks($arr) {
    $tmp = [];
    $tmp_arr = $arr;
    $set = 1;
    $result = array();
    array_push($result, count($arr));
    while( $set ) {
        if(!empty($tmp)) {
            $tmp_arr = $tmp;
            array_push($result, count($tmp));
            $tmp = [];
        }
        foreach($tmp_arr as $index=>$value) {
            $min_stick = min($tmp_arr);
            if( ($value-$min_stick) > 0 ) {
                array_push($tmp, $value-$min_stick);
            }
        }
        if( count($tmp) < 1 ) {
            $set = 0;
        }
    }
    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = cutTheSticks($arr);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($stdin);
fclose($fptr);

