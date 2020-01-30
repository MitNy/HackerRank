<?php

// Complete the gemstones function below.
function gemstones($arr) {
    $gemstones = [];
    $tmp_list = [];
    for( $i=0; $i<count($arr); $i++ ) {
        $s_split = str_split($arr[$i]);
        $ua = array_unique($s_split);
        $tmp_list[$i] = $ua;
    }
    $result = $tmp_list[0];
    for( $i=0; $i<count($tmp_list)-1; $i++ ) {
        $result = array_values(array_intersect($tmp_list[$i+1], $result));
    }
    return count($result);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_item = '';
    fscanf($stdin, "%[^\n]", $arr_item);
    $arr[] = $arr_item;
}

$result = gemstones($arr);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
