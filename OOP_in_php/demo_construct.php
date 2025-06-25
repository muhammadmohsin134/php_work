<?php
class constructd{
    public $name;

    function __construct($name){
        $this->name=$name;
    }

    function displayName(){
        echo $this->name;
    }
}

$a = new constructd('mohsin');
$a->displayName();



?>