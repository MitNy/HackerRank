<?php

// Complete the workbook function below.
function workbook($n, $k, $arr) {
    $book = [];
    $page = 1;
    $special = 0;
    for( $i=0; $i<$n; $i++ ) { # 챕터
        $tmp = [];
        $book[$page] = [];
        for( $j=1; $j<$arr[$i]+1; $j++ ) { # 페이지 수
            if( count($book[$page]) == $k ) {
                $page++;
                $tmp = [];
                array_push($tmp, $j);
            }
            else {
                array_push($tmp, $j);
            }
            if( $j == $page ) {
                $special++;
            }
            $book[$page] = $tmp;
        }
        $page++;
    }
    return $special;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $nk_temp);
$nk = explode(' ', $nk_temp);

$n = intval($nk[0]);

$k = intval($nk[1]);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = workbook($n, $k, $arr);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
