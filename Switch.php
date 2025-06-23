<?php

$a= 5;

$b =7;

$choice ='$';

switch($choice){
case  '+':{
    $result= $a+$b;
    break;
}
case  '-':{
    $result= $a-$b;
    break;
}
case  '*':{
    $result= $a*$b;
    break;
}
case  '/':{
    $result= $a/$b;
    break;
}
default:{
     $result ="please enter the valid operation symbol";
}
}
echo $result;


?>