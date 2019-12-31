<?php

/*
 * Complete the 'gradingStudents' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY grades as parameter.
 */

function gradingStudents($grades) {
    $result = [];
    foreach( $grades as $grade ) {
        $next_multiple = ceil( $grade / 5 ) * 5;
        if( abs( $next_multiple-$grade) == 3 ) {
            array_push($result, (string)$grade);
        }
        else if( ((abs($next_multiple-$grade)) > 3) && $grade >= 38 ) {
            array_push($result, (string)$grade);
        } 
        else if ( (abs( $next_multiple-$grade) < 3) && $grade >= 38 ) {
            array_push($result, (string)$next_multiple);
        }
        else if( $grade < 38 ) {
            array_push($result, (string)$grade);
        }
    }
    
    return $result;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$grades_count = intval(trim(fgets(STDIN)));

$grades = array();

for ($i = 0; $i < $grades_count; $i++) {
    $grades_item = intval(trim(fgets(STDIN)));
    $grades[] = $grades_item;
}

$result = gradingStudents($grades);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($fptr);

