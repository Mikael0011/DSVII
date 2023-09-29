<?php

include ("class_lib.php");

$obj = new MyCloneable ();

$obj->object1 = new SuObject ();
$obj->object2 = new SuObject ();

$obj2 = clone $obj;

print ("<br> Original object:");
print_r($obj);

print ("<br> clone object:");
print_r($obj2);

?>

