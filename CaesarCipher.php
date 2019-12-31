<?php

// Complete the caesarCipher function below.
function caesarCipher($s, $k) {
    # $s = string
    $alphas = array_merge(range('A', 'Z'), range('a', 'z'));
    $k = $k%26;
    if( $k < 0 ) {
        $k += 26;
    }
    $result = "";
    for($i=0; $i<strlen($s); $i++ ) {
        if( in_array($s[$i], $alphas) ) {
            if( ((ord($s[$i])+$k > 122) ) ||
            ( (ord($s[$i]) < 91 ) && (ord($s[$i])+$k > 90) && (ord($s[$i]) > 64) )) {
            # z, Z 넘어갈 경우
                $ord_s = chr(ord($s[$i])-26+$k);
            }
            else {
                $ord_s = chr(ord($s[$i])+$k);
            }
            $result .= $ord_s;
        }
        else {
            $result .= $s[$i];
        }
    }
    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$s = '';
fscanf($stdin, "%[^\n]", $s);

fscanf($stdin, "%d\n", $k);

$result = caesarCipher($s, $k);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);

