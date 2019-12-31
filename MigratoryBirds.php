<?php

// Complete the migratoryBirds function below.
function migratoryBirds($arr) {
    $tmp = array();
    foreach( $arr as $key ) {
        if( !array_key_exists($key, $tmp)) {
            $tmp[$key] = 1;
        }
        else {
            $tmp[$key] = $tmp[$key]+1;
        }
    }
     $index = array_keys($tmp, max($tmp));
     print_r($index);
     return min($index);

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$arr_count = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = migratoryBirds($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);

