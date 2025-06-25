<?php
interface  clg{
     function std();
}
class student1 implements clg{
function std(){
    echo "student1";
}}
class student2 implements clg{
function std(){
    echo "student2";
}}
$obj=new student2();
$obj->std();
// abstract class clg{
//     abstract function std();
// }
// class student1 extends clg{
// function std(){
//     echo "student1";
// }}
// class student2 extends clg{
// function std(){
//     echo "student2";
// }}
// $obj=new student2();
// $obj->std();