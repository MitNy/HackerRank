<?php

// Complete the dayOfProgrammer function below.
function dayOfProgrammer($year) {
    $dom = [31,28,31,30,31,30,31,31,30,31,30,31];
    $days = 0;
    if( ($year >= 1700) && ($year <1918) ) {
        if( $year%4 == 0 ) { # 줄리안 달력 윤년
            $dom[1] = 29;
       }
       for( $i=0; $i<count($dom); $i++ ) {
           $days += $dom[$i];
           if( 256-$days < $dom[$i] ) {
                break;
            }
       }
       $month = str_pad(($i+2), 2, '0', STR_PAD_LEFT);
       return (string)(256-$days).".".$month.".".$year;
    }
    else if( $year >= 1919) {
        if(($year%400 == 0) || ($year%4==0 && $year%100 != 0) ) {
            $dom[1] = 29;
        }
        for( $i=0; $i<count($dom); $i++ ) {
            $days += $dom[$i];

            if( 256-$days < $dom[$i] ) {
                break;
            }
        }
        $month = str_pad(($i+2), 2, '0', STR_PAD_LEFT);
       return (string)(256-$days).".".$month.".".$year;
    }
    else {
        $dom[1] = 28-14+1;
        for( $i=0; $i<count($dom); $i++ ) {
            $days += $dom[$i];

            if( 256-$days < $dom[$i] ) {
                break;
            }
        }
        $month = str_pad(($i+2), 2, '0', STR_PAD_LEFT);
       return (string)(256-$days).".".$month.".".$year;

    }


}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$year = intval(trim(fgets(STDIN)));

$result = dayOfProgrammer($year);

fwrite($fptr, $result . "\n");

fclose($fptr);

