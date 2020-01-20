<?php

// Complete the appendAndDelete function below.
function appendAndDelete($s, $t, $k) {
    $tmp_s = str_split($s);
    $tmp_t = str_split($t);
    $str = "";
    $count = 0;
    $same = 0;
    if( count($tmp_s) < count($tmp_t) ) {
        $min = count($tmp_s);
    }
    else {
        $min = count($tmp_t);
    }
    for( $i=0; $i<$min; $i++ ) {
        if( $tmp_t[$i] == $tmp_s[$i] ) {
            $str .= $tmp_t[$i];
            $same++;
        }
        else {
           break;
        }
    }
    $split_str = str_split($str);
    $ts_len = count($tmp_t)-$same; // delete
    $ss_len = count($tmp_s)-$same; // append
    if( ($ts_len+$ss_len) > $k ) {
        return "No";
    }
    else if( ($ts_len+$ss_len)%2 == $k%2 ) {
        return "Yes";
    }
    else if( count($tmp_t)+count($tmp_s) < $k ) {
        return "Yes";
    }
    else {
        return "No";
    }
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

$s = '';
fscanf($stdin, "%[^\n]", $s);

$t = '';
fscanf($stdin, "%[^\n]", $t);

fscanf($stdin, "%d\n", $k);

$result = appendAndDelete($s, $t, $k);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);

