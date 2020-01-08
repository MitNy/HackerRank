<?php

// Complete the kaprekarNumbers function below.
function kaprekarNumbers($p, $q) {
    $arr = [];
    for( $i=$p; $i<=$q; $i++ ) {
        $square = pow($i, 2);
        $len_sq = strlen((string)$square);
        $tmp = [];
        for($j=0; $j<2; $j++ ) {
            $str_split = substr((string)$square, ($len_sq/2)*$j, ($len_sq/2)*($j+1));
            array_push($tmp, $str_split);
        }
        if( $i == (int)array_sum($tmp) ) {
            array_push($arr, $i);
        }
   }
   if( count($arr) < 1 ) {
       echo "INVALID RANGE";
   }
   else {
        foreach($arr as $value) {
            echo $value." ";
        }
    }
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $p);

fscanf($stdin, "%d\n", $q);

kaprekarNumbers($p, $q);

fclose($stdin);

