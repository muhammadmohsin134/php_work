<?php
abstract class pf{
    abstract function pd();
    abstract function pi();
    abstract function po();

}
class uploadp extends pf{
    function pd(){
        echo "prooduct details";
    }
    function pi(){
        echo "prooduct images";
    }
    function po(){
        echo "prooduct owner";
    }
}
$upload=new uploadp();
$upload->pd();
echo"<br>";
$upload->pi();
echo"<br>";

$upload->po();





?>
<?php
// abstract class baseemployee{
//     protected $firstname;
//     protected $lastname;

//      public function getfullname(){
//         return $this->firstname . " " .$this->lastname;
//     }
//     public abstract function getmonthlysalary();

//      public function __construct($f,$l)
//     {
//         $this->firstname =$f;
//         $this->lastname =$l;
//     }

// }
// class  fulltimeEmployee extends baseEmployee{
//     // protected $firstname;
//     // protected $lastname;
//     protected $annualsalay;

//     // public function getfullname(){
//     //     return $this->firstname . " " .$this->lastname;
//     // }

//     public function getmonthlysalary(){
//         return $this->annualsalary/12;
//     }

//     // public function __construct($f,$l)
//     // {
//     //     $this->firstname =$f;
//     //     $this->lastname =$l;
//     // }

// }
// class contractemployee extends baseEmployee{
//     // protected $firstname;
//     // protected $lastname;
//     protected $hourlyrate;
//     protected $totalhours;

//     // public function getfullname(){
//     //     return $this->firstname . " " .$this->lastname;
//     // } 

//      public function getmonthlysalary(){
//         return $this->hourlyrate*$this->totalhours;
//     }

//     //  public function __construct($f,$l)
//     // {
//     //     $this->firstname =$f;
//     //     $this->lastname =$l;
//     // }

// }
// $fulltime =new fulltimeemployee('ahmad','ali');

// $contact =new contractemployee('ali','raza');

// echo $contact->getfullname();
// echo $fulltime->getfullname();