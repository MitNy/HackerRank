<?php

// Complete the jumpingOnClouds function below.
function jumpingOnClouds($c) {
    $count = 0;
    $zeros = 0;
    for( $i=0; $i<count($c)-1; $i++) {
        echo "i: ".$i." zeros: ".$zeros." count: ".$count."\n";
        if( $c[$i] == 0 ) {
            $zeros++;
        }
        else if( $c[$i] == 1 ) {
            if( $zeros%2 != 0 ){
                $zeros -= 1;
            }
            echo $zeros;
            $count += (floor($zeros/2)+floor($zeros%2));
            $zeros = 0;
            $count += 1;
            continue;
        }
        echo "i: ".$i." zeros: ".$zeros." count: ".$count."\n";
    }
    $count += (floor($zeros/2)+floor($zeros%2));
    return $count;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $c_temp);

$c = array_map('intval', preg_split('/ /', $c_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = jumpingOnClouds($c);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);

