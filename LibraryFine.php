<?php

// Complete the libraryFine function below.
function libraryFine($d1, $m1, $y1, $d2, $m2, $y2) {
    // y1-m1-d1 => 반납일
    // y2-m2-d2 => 반납 예정일

    if( $y2 == $y1 ) {
        if( $m1 < $m2 ) {
            return 0;
        }
        else if( ($m1 <= $m2) && ($d1 <= $d2) ) {
            return 0;
        }
        else if( ($m1 == $m2) && ($d1 > $d2)) {
            return 15*($d1-$d2);
        }
        else if( ($m1 > $m2 ) ) {
            return 500*($m1-$m2);
        }
    }
    else if( $y1 <= $y2) { 
        return 0;
    }
    else if( $y1 > $y2 ){
        return 10000;
    }
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $d1M1Y1_temp);
$d1M1Y1 = explode(' ', $d1M1Y1_temp);

$d1 = intval($d1M1Y1[0]);

$m1 = intval($d1M1Y1[1]);

$y1 = intval($d1M1Y1[2]);

fscanf($stdin, "%[^\n]", $d2M2Y2_temp);
$d2M2Y2 = explode(' ', $d2M2Y2_temp);

$d2 = intval($d2M2Y2[0]);

$m2 = intval($d2M2Y2[1]);

$y2 = intval($d2M2Y2[2]);

$result = libraryFine($d1, $m1, $y1, $d2, $m2, $y2);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);

