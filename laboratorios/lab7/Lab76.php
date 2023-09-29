<?php

include ('class_lib.php');

$diam = $_POST ['diam'];
$altu = $_POST ['altu'];

$cil = new Cilindro($diam,$altu);

$volumen = $cil->calc_volumen();
$area=$cil->calc_area();

echo " <br/> El volumen del cilindro es: ".$volumen."metros cubicos";  //imprime el resultado de la operacion
echo " <br/> El area del cilindro es de: ".$area."metros cuadrados";  //imprime el resultado de la operacion

?>