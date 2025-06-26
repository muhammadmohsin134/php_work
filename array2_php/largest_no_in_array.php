<?php
$arr =[3,4,2,7,5,9,8];
$max=$arr[0];
for($i=0;$i<7;$i++){
    if($max<$arr[$i]){
        $max=$arr[$i];
    }
}
        echo "largest no in array is :$max";
