<?php

// Complete the howManyGames function below.
function howManyGames($p, $d, $m, $s) {
    # 가진 돈: s
    $games = 0;
    $total = 0;
    $i=0;
    while(true) {
        $money = $p-($i*$d);
        echo $money;
        if( $money < $m ) {
            $total += $m;
        }
        else {
            $total += $money;
        }
        if( $total > $s ) {
            break;
        }
        else {
            $games++;
        }
        $i++;
    }
    return $games;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $pdms_temp);
$pdms = explode(' ', $pdms_temp);

$p = intval($pdms[0]);

$d = intval($pdms[1]);

$m = intval($pdms[2]);

$s = intval($pdms[3]);

$answer = howManyGames($p, $d, $m, $s);

fwrite($fptr, $answer . "\n");

fclose($stdin);
fclose($fptr);

