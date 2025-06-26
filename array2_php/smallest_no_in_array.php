<?php
$arr =[8,5,3,4,2,7,5,9,6,8];
$min=$arr[0];
for($i=9;$i>=0;$i--){
    if($min>$arr[$i]){
        $min=$arr[$i];
    }
}
        echo "smallest no in array is :$min";
