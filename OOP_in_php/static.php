<?php
class abc{
    public static $objectcount = 0;
    public static function getcount(){
        return self:: $objectcount;

    }
    public function __construct(){
        self::$objectcount++;
    }


}
$a =new abc();
$b =new abc();
$c =new abc();
$d =new abc();
 echo abc::getcount();

?>
// <!-- <?php
// class house{
//     public static $size =1500;
//     public static function getsize(){
//         return self ::$size;
//     }
//     public static function setsize($s){
//         self ::$size=$s;
//     }
// }
// house::setsize(1200);
// echo house::getsize();
// ?> -->