<?php

// Complete the hackerrankInString function below.
function hackerrankInString($s) {
    $hr = "hackerrank";
    $count = 0;
    
    for ( $i=0; $i<strlen($s); $i++ ) {
        if ($s[$i] == $hr[$count]) {
            $count++;
        }
    }
    if( $count == strlen($hr)) {
        return "YES";
    }
    else {
        return "NO";
    }
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $q);

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $s = '';
    fscanf($stdin, "%[^\n]", $s);

    $result = hackerrankInString($s);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);

