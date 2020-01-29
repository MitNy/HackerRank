<?php

// Complete the weightedUniformStrings function below.
function weightedUniformStrings($s, $queries) {
    $az = range("a","z");
    $dict = [];
    for( $i=0; $i<count($az); $i++ ) {
        $dict[$az[$i]] = $i+1;
    }
    $sd = [];
    $prev = "";
    for( $i=0; $i<strlen($s); $i++ ) {
        if( $prev[0] == $s[$i] ) {
            $prev = $prev.$s[$i];
        }
        else {
            $prev = $s[$i];
        }

        if( strlen($prev) > 1 ) {
            $tmp = $dict[$s[$i]]*strlen($prev);
        }
        else {
            $tmp = $dict[$s[$i]];
        }
        array_push($sd, $tmp);
    }
    $result = [];
    for( $i=0; $i<count($queries); $i++ ) {
        if( in_array($queries[$i], $sd)) {
            array_push($result, "Yes");
        }
        else {
            array_push($result, "No");
        }
    }
    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

$s = '';
fscanf($stdin, "%[^\n]", $s);

fscanf($stdin, "%d\n", $queries_count);

$queries = array();

for ($i = 0; $i < $queries_count; $i++) {
    fscanf($stdin, "%d\n", $queries_item);
    $queries[] = $queries_item;
}

$result = weightedUniformStrings($s, $queries);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($stdin);
fclose($fptr);
