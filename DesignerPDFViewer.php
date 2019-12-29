<?php

// Complete the designerPdfViewer function below.
function designerPdfViewer($h, $word) {
    $alphas = range('a', 'z');
    $dictionary = [];
    for( $i=0; $i<count($alphas); $i++ ) {
        $dictionary[$alphas[$i]] = $h[$i];
    }
    $tmp = [];
    $word = str_split($word);
    for( $j=0; $j<count($word); $j++ ) {
        $tmp[$j] = $dictionary[$word[$j]];
    }
    $height = max($tmp);
    return $height*count($word);

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $h_temp);

$h = array_map('intval', preg_split('/ /', $h_temp, -1, PREG_SPLIT_NO_EMPTY));

$word = '';
fscanf($stdin, "%[^\n]", $word);

$result = designerPdfViewer($h, $word);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);

