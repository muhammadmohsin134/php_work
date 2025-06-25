<?php
include('./teacher.php');
include('./student.php');

$t =new  teacher\joinDtls();
$t->joindate();
echo "<br>";
$s =new  student\joinDtls();
$s->adm();