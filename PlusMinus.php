<?php

// Complete the plusMinus function below.
function plusMinus($arr) {
    # positive / 전체
    # negative / 전체
    # zero / 전체
    $length = count($arr);
    $positive = 0;
    $negative =0;
    $zeros = 0;

    for( $i=0; $i<$length; $i++ ) {
        if( $arr[$i] >= 1 ) {
            $positive++;
        }
        else if( $arr[$i] < 0 ) {
            $negative++;
        }
        else if( $arr[$i] == 0 ) {
            $zeros++;
        }
    }

    $positive_rate = (float)($positive/$length);
    $negative_rate = (float)($negative/$length);
    $zeros_rate = (float)($zeros/$length);

    echo $positive_rate."\n".(float)$negative_rate."\n".(float)$zeros_rate;
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);

fclose($stdin);

