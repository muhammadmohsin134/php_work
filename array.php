<?php
$student = [
    'fname' => 'ali',
    'lname' => 'raza',
    'father_name' => 'Mubeen',
    'mobile' => 111111111111,
    'adress' => 'lahore'

];
echo "<pre>";
print_r($student);
echo "</pre>";

$a =$student['adress'];
echo $a;

?>

<?php

$even = [2,4,6,8,10];
$color = array('red','green',[2,4,6,8,[1,3,5,7,9],10],'blue','yellow');
$x=$color[2][4][1];
echo $x;
// print_r($color);
// echo "</br>";
// $a=$color[3];
// echo $a;
echo "<pre>";
print_r($even);
echo "</pre>"


?>