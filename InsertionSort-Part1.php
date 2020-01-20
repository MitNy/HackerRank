<?php

// Complete the insertionSort1 function below.
function insertionSort1($n, $arr) {
    $last = end($arr);
    $result = [];
    for( $i=count($arr)-2; $i>-1; $i-- ) {
        if( $last < $arr[$i]) {
            $arr[$i+1] = $arr[$i];
            $result[] = $arr;
        }
        else {
            $arr[$i+1] = $last;
            $result[] = $arr;
            break;
        }

        if( $last < $arr[$i] && $i==0 ) {
            $arr[$i] = $last;
            $result[] = $arr;
        }
    }
    for( $i=0; $i<count($result); $i++ ) {
        for( $j=0; $j<count($result[$i]); $j++ ) {
            echo $result[$i][$j]." ";
        }
        echo "\n";
    }
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

insertionSort1($n, $arr);

fclose($stdin);

