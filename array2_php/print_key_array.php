<?php
$student =[
    'Fname'=>'M',
    'Lname'=>'Ali',
    'Father_name'=>'Ahmad',
    'mobile'=> '03415238134',
    'adress'=> 'lahore'
];
echo "<pre>";
print_r($student);
echo "</pre>";
?>


<?php
$color =array( 'red','green','blue','yellow','black');
echo "<pre>";

print_r($color);
echo "</pre>";
?>



<?php
$color =array( 'red','green','blue',[2,4,6,5,[23213,875,909,],3,2,4,],'yellow','black');
$x =$color[3][4][1];
echo "$x";
echo "<pre>";
$x =$color[3][4][1];
print_r($color);
echo "</pre>";
?>