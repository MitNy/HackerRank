<?php

/*
 * Complete the 'taumBday' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER b
 *  2. INTEGER w
 *  3. INTEGER bc
 *  4. INTEGER wc
 *  5. INTEGER z
 */

function taumBday($b, $w, $bc, $wc, $z) {
    if( $bc+$z < $wc ) {
        return (($b+$w)*$bc)+($w*$z);
    }
    else if( $wc+$z < $bc ) {
        return (($b+$w)*$wc)+($b*$z);
    }
    else {
        return ($b*$bc)+($w*$wc);
    }
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$t = intval(trim(fgets(STDIN)));

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    $first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

    $b = intval($first_multiple_input[0]);

    $w = intval($first_multiple_input[1]);

    $second_multiple_input = explode(' ', rtrim(fgets(STDIN)));

    $bc = intval($second_multiple_input[0]);

    $wc = intval($second_multiple_input[1]);

    $z = intval($second_multiple_input[2]);

    $result = taumBday($b, $w, $bc, $wc, $z);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
