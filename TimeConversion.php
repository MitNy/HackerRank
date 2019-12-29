<?php

/*
 * Complete the timeConversion function below.
 */
function timeConversion($s) {
    /*
     * Write your code here.
     */
     #  07:05:45PM -> 19:05:45
     $hour = substr($s,0,2);
     $other = substr($s,2,6);
     $ap = substr($s,8,8);


     if($ap == "PM") {
         if( $hour == 12 ) {
             $addHour = $hour;
         }
         else {
            $addHour = (int)$hour+12;
         }
         return (string)$addHour.$other;
     }
     else if( $ap == "AM" && (int)$hour == 12 ) {
         return "00".$other;
     }
     else {
        return $hour.$other;
     }
     
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$__fp = fopen("php://stdin", "r");

fscanf($__fp, "%[^\n]", $s);

$result = timeConversion($s);

fwrite($fptr, $result . "\n");

fclose($__fp);
fclose($fptr);

