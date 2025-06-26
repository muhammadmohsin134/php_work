<?php
$arr=[3,5,7,9,3,2,7,8,2,1];
$sum=0;
$avg=0;
for($i=0;$i<count($arr);$i++){
    $sum =$sum+$arr[$i];

}
echo "sum of array is: $sum";
$avg=$sum/10;
echo "average of array is: $avg";
