<?php

// Complete the minimumNumber function below.
function minimumNumber($n, $password) {
    // Return the minimum number of characters to make the password strong
    $az = range("a","z");
    $AZ = range("A","Z");
    $specialChar = str_split("!@#$%^&*()-+");
    
    $count_arr = [];
    $count_arr["az"] = 0;
    $count_arr["AZ"] = 0;
    $count_arr["number"] = 0;
    $count_arr["specialChar"] = 0;


    for($i=0; $i<strlen($password); $i++ ) {
        if( is_numeric($password[$i]) ) {
            $count_arr["number"] = $count_arr["number"]+1;
        }
        else if( in_array($password[$i], $az)) {
            $count_arr["az"] = $count_arr["az"]+1;
        }
        else if( in_array($password[$i], $AZ)) {
            $count_arr["AZ"] = $count_arr["AZ"]+1;
        }
        else if( in_array($password[$i], $specialChar)) {
            $count_arr["specialChar"] = $count_arr["specialChar"]+1;
        }
    }
    $tmp = array_count_values($count_arr);
    if( ($n>=6) && (array_key_exists(0, $tmp)) ) {
        return $tmp[0];
    }
    else if( ($n<6) && (array_key_exists(0, $tmp)) ){
        if( ($n+$tmp[0])>=6 ) {
            return $tmp[0];
        }
        else {
            return $tmp[0]+(6-($n+$tmp[0]));
        }
    }
    else if( $n<6 && !(array_key_exists(0, $tmp))) {
        return 6-$n;
    }
    else {
        return 0;
    }

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$password = '';
fscanf($stdin, "%[^\n]", $password);

$answer = minimumNumber($n, $password);

fwrite($fptr, $answer . "\n");

fclose($stdin);
fclose($fptr);

