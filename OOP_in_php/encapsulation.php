<?php

class tv{

    protected $model ='bnm';
    protected $volume =7;

    function volumeUp(){
        $this->volume++;
    }
    function volumeDown(){
        $this->volume--;
    }
    protected function getmodel(){
        return $this->model;
    }

    function __contrust($m,$v){
        $this->model =$m;
        $this->volume =$v;
    }



}
class plazma extends tv{
    function getmodel(){
        return $this->model;
    }
}

$tv_one =new tv('hdj',5);

echo $tv_one->getmodel();

echo $tv_one->model ;
echo $tv_one->volume;


?>