<?php

/*
 * Complete the pageCount function below.
 */
function pageCount($n, $p) {
    $book = range(0, $n);
    array_push($book, 0);
    $pages = array_chunk($book, 2);
    $p_index = 0;
    $one_index = 0;
    $last_index = 0;    

    for( $i=0; $i<count($pages); $i++ ) {
        if( in_array($p, $pages[$i])) {
            $p_index =$i;
        }
        if( in_array(1, $pages[$i])) {
            $one_index = $i;
        }
        if( in_array($n, $pages[$i])) {
            $last_index = $i;
        }
    }
    // print_r($pages);
    // print_r((string)$p_index." ".(string)$one_index." ".(string)$last_index);
    $count = [abs($last_index-$p_index), abs($one_index-$p_index)];
    return min($count);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%d\n", $p);

$result = pageCount($n, $p);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);

