<?php
$arr=[9,44,3,22,6,77,5,8,4,9];
$temp;
echo "the unsorted array is:";
print_r($arr);

echo "<br> the sorted array is:";
for($i=0;$i<10;$i++){
    for($j=($i+1);$j<10;$j++)
    {
        if($arr[$i]>$arr[$j])
        {
            $temp=$arr[$i];
            $arr[$i]=$arr[$j];
            $arr[$j]=$temp;
        }
    }
}
print_r($arr);



