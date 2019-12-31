<?php

// Complete the extraLongFactorials function below.
function extraLongFactorials($n) {
$result = $n;
for( $i=1; $i<$n; $i++ ) {
    $result = bcmul($result, $i);
}
echo $result;
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

extraLongFactorials($n);

fclose($stdin);

