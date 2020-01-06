<?php

// Complete the extraLongFactorials function below.
function extraLongFactorials($n) {
    $tmp_arr = [];
    $count = 0;
    $size = 1; // 자릿수 
    for( $i=1; $i<=$n; $i++ ) {
        $carry = 0; // 올림
        /*
           600   [1]<-1-(3*6)[8]<-0-(3*0)[0]<-0-(3*0)[0] => [1,8,0,0]
        X   23   [1,2,0,0]
        -----------------------------
        각 자리 곱+올림, 배열에 저장하는 for문
        */
        for( $j=0; $j<$size; $j++ ) {
            if( $i==1 ) {
                $tmp_arr[$j] = 1;
            }
            $tmp_value = $tmp_arr[$j]*$i+$carry;
            //echo "i: ".$i."\nj: ".$j."\ntmp_arr[$j]: ".$tmp_arr[$j]."\ncarry: ".$carry."\n";
            $tmp_arr[$j] = $tmp_value%10; // 각 자릿수의 값 18일 경우 8
            $carry = floor($tmp_value/10); // 18일 경우 1
        }
        while($carry) {
            $tmp_arr[$size] = $carry%10; // 제일 큰 자릿 수
            $carry = floor($carry/10); // carry를 0으로 만들어줌
            $size++; // 자릿수 추가
        }
    }
    $result = "";
    for( $r=$size-1; $r>=0; $r-- ) {
        $result .= $tmp_arr[$r];
    }
    echo ltrim($result, '0'); // dummy 제거
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

extraLongFactorials($n);

fclose($stdin);

