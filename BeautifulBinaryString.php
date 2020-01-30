<?php

// Complete the beautifulBinaryString function below.
function beautifulBinaryString($b) {$count = 0;
    $i=0;
    while(true) {
        if( $i+2 < strlen($b) ) {
            $t_zoz = $b[$i].$b[$i+1].$b[$i+2];
            $i++;
            if( $t_zoz === "010" ) {
                $count++;
                $i+=2;
            }
            print_r($t_zoz."\n");
        }
        else {
            break;
        }
    }
    return $count;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$b = '';
fscanf($stdin, "%[^\n]", $b);

$result = beautifulBinaryString($b);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
