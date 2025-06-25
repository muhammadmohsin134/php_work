<?php
trait pcomp{
    function getTemp(){
        echo 500;
    }}
trait pcomp2{
    function getTofc(){
        echo 30;
    }
}
trait pcomp3{
    function getTproj(){
        echo 20;
    }
}
class comp{
    use pcomp;
    use pcomp2;
    use pcomp3;
}
$c =new  comp();
$c->getTemp();
echo"<br>";
$c->getTofc();
echo"<br>";
$c->getTproj();