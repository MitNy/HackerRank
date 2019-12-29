<?php

// Complete the funnyString function below.
function funnyString($s) {
    $str_array = str_split($s);
    $rev_array = array_reverse($str_array);
    $s_ascii = [];
    $r_ascii = [];
    for($i=0; $i<count($str_array); $i++) {
        array_push($s_ascii, ord($str_array[$i]));
        array_push($r_ascii, ord($rev_array[$i]));
    }
    $s_diff = [];
    $r_diff = [];
    for($j=0; $j<count($s_ascii)-1; $j++ ) {
        array_push($s_diff, abs($s_ascii[$j]-$s_ascii[$j+1]));
        array_push($r_diff, abs($r_ascii[$j]-$r_ascii[$j+1]));
    }
    if( $s_diff === $r_diff ) {
        return "Funny";
    }
    else {
        return "Not Funny";
    }
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $q);

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $s = '';
    fscanf($stdin, "%[^\n]", $s);

    $result = funnyString($s);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);

