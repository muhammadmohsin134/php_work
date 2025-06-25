<?php
class auth{
        function login($ut){
            echo "$ut login";
        }

}
class student extends auth{
   function getname(){
    echo "mohsin";
   }

    }

class teacher extends auth{
     function getsub(){
    echo "ms";

    }
    
}

    $s=new student();
    $s->login("student");
        echo "<br>";

    $s->getname();

    echo "<br>";


    $t=new teacher();
    $t->login("teacher");
        echo "<br>";
        $t->getsub();




?>
<?php
// class tv{
//     public $model;
//     public $volume;
// function volumeUp(){
//     $this->volume++;
// }
// function volumedown(){
//     $this->volume--;
// }

// function __construct( $m,$v)
// {
// $this->model=$m;
// $this->volume=$v;
// }



// }

// class plaznatv extends tv{
    
//     function __construct($mdl,$vlm){
// $this->model=$mdl;
// $this->volume=$vlm;
//     }
// }

// $plazna = new plaznatv('xyz',9);
// echo $plazna->model;




// class tvwithtimer extends tv{
// public $timer=true;
// }
// class plaznatv extends tv{
//     public $plazna =true;
// }
// $tv = new tvwithtimer('tv with timer',2);

// $plazna = new plaznatv('plazna tv',8);

// echo $plazna->model;

?>