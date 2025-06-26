<?php
$a =80;
$b=90;
$temp=0;
$gcd;
if($b>$a){
    $temp=$a;
    $a=$b;
    $b=$temp;

}
for($i=1;$i<=$b;$i++){
    if($a%$i==0 && $b%$i==0)
    {
        $gcd=$i;
    }
}
echo "the greatest common divisor of $a and $b is $gcd  ";
?>