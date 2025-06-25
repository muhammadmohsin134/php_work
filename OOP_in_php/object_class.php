<?php
class tv{
public $model ='xyz';
public $volume =1;

function volumeUp(){
    $this->volume++;
}
function volumeDown(){
    $this->volume--;
}
function __construct($m,$v)
{
$this->model=$m;
$this->volume=$v;
}

}

$tv_one = new tv;
$tv_two = new tv;

$tv_one->volumeUp();
echo $tv_one->volume;
echo "</br>";

// echo $tv_two->volume;
// echo "</br>";
// echo $tv_two->model ='abc';
// echo "</br>";
// echo $tv_one->model ='jhg';

// $tv= new tv( 'desf',3);
// echo $tv->model;

?>