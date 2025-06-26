<?php
$mark =71;
if($mark>=90 && $mark<=100){
    echo "your grade is A+";
}
elseif($mark>=80 && $mark<90){
    echo "your grade is A";
}
elseif($mark>=70 && $mark<80){
    echo "your grade is B+";
}
elseif($mark>=60 && $mark<70){
    echo "your grade is B";
}
elseif($mark>=50 && $mark<60){
    echo "your grade is C";
}
elseif($mark>=40 && $mark<50){
    echo "your grade is D";
}
elseif($mark<40 ){
    echo "your grade is E";
}else{
    echo "you are fail";
}