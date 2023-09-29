<?php 
include ("class_lib.php");
$class1 = new ClaseConcretal;
$class1->printOut();
echo $class1->prefixValor('Foo_') . "<br>";
$class2 = new ClaseConcreta2;
$class2->printOut();
echo $class2->prefixValor('Foo_') . "<br>";
?>