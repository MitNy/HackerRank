<?php

// Complete the camelcase function below.
function camelcase($s) {
    // $alphas = range('A', 'Z');
    // $s_tmp = [];
    // for( $i=0; $i<strlen($s); $i++ ) {
    //     array_push($s_tmp, $s[$i]);
    // }
    // $tmp = [];
    // for( $j=0; $j<count($s_tmp); $j++ ) {
    //     if( in_array($s_tmp[$j], $alphas)) {
    //         array_push($tmp, array_search($s_tmp[$j], $s_tmp));
    //     }
    // }
    // $count = 0;
    // # [4, 11, 13, 16, ]
    // # substr($s, 0, 4); save
    // # substr($s, 4, 7); Changes
    // # substr($s, 7, 9); In

    // return substr($s,0,4);

    $regex = preg_split("/(?=[A-Z])/", $s);
    return count($regex);

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

$s = '';
fscanf($stdin, "%[^\n]", $s);

$result = camelcase($s);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);

