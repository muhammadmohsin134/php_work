<?php
$s =60000;
$g =15;
$b =0;
if($g>=17){
    $b=$s*60/100;
}else{
    $b=$s*30/100;

}
$s=$s+$b;
echo "total salary is :$s";