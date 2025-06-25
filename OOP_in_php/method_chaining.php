<?php
class company{
    function getname(){
        echo "honda.  ";
        return $this;
    }
    function getemp(){
        echo "3000 .  ";
        return $this;

    }
    function getto(){
        echo "200";
    }
}
$c=new company();
$c->getname()->getemp()->getto();