<?php

// Complete the staircase function below.
function staircase($n) {
    $result = "";
    
    for( $i=1; $i<$n+1; $i++ ) {
        for( $j=$n; $j>0; $j-- ) {
            if( $i < $j ) {
                $result .= " ";
            }
            else {
                $result .= "#";
            }
        }
        $result .= "\n";
    }
    echo $result;

}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

staircase($n);

fclose($stdin);

