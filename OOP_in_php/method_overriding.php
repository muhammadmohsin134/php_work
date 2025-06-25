<?php

trait pcom{
     function get(){
        echo 500;
    }
}
trait pcom2{
     function get(){
        echo 400;
    }
}



class com{
    use pcom;
    use pcom2{
        pcom::get insteadOf
        pcom2;
        pcom2::get as getemp2;
    }

    


}
$a =new com();
$a->get();
echo '<br>';
$a->getemp2();