<?php
$arr=[1,0,1,1,0,1,1,1,0,0];
$c=0;
for($i=0;$i<10;$i++){
    if($arr[$i]==0){
        $c=$c+1;
    }
}
echo "totle zero in array is: $c";