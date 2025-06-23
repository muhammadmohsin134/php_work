<?php
$age =72;
if(($age>=0)and($age<=25)){
    echo "your age is range of 0 to 25 year";
}
elseif(($age>25)and($age<=50)){
    echo "your age is range of 25 to 50 year";
}
elseif(($age>50)and($age<=75)){
    echo "your age is range of 50 to 75 year";
}
elseif(($age>75)and($age<=100)){
    echo "your age is range of 75 to 100 year";
}
else{
    echo "defult age";
}



?>