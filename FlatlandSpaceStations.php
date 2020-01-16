<?php

// Complete the flatlandSpaceStations function below.
function flatlandSpaceStations($n, $c) {
    $distance = [];
    sort($c);
    for( $i=0; $i<$n; $i++) {
        $d = [];
        if( !in_array($i, $c) ) {
            foreach($c as $station) {
                $d[] = abs($i-$station);
            }
            $distance[] = min($d); 
        }
        else {
            continue;
        }
    }
    if( count($distance) > 0 ) {
        return max($distance);
    }
    else {
        return 0;
    }
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nm_temp);
$nm = explode(' ', $nm_temp);

$n = intval($nm[0]);

$m = intval($nm[1]);

fscanf($stdin, "%[^\n]", $c_temp);

$c = array_map('intval', preg_split('/ /', $c_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = flatlandSpaceStations($n, $c);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);

