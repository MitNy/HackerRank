<?php

// Complete the breakingRecords function below.
function breakingRecords($scores) {
    $min = $scores[0]; $min_count = 0;
    $max = $scores[0]; $max_count = 0;
    
    for($i=1; $i<count($scores); $i++ ) {
        if( $scores[$i] < $min ) {
            $min = $scores[$i];
            $min_count++;
        }
        else if( $scores[$i] > $max ) {
            $max = $scores[$i];
            $max_count++;
        }
    }
    $result = [$max_count, $min_count];
    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $scores_temp);

$scores = array_map('intval', preg_split('/ /', $scores_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = breakingRecords($scores);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($stdin);
fclose($fptr);

