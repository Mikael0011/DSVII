<?php 

if (array_key_exists('enviar',$_POST)){
    include ('class_lib.php');
 
    $diam = $_POST['diam'];
    $altu = $_POST['altu'];

    $cil = new Cilindro($diam,$altu);

    $volumen =$cil->calc_volumen();
    $area=$cil->calc_area();
    

echo " <br/> El volumen del cilindro es: ".$volumen."metros cubicos";  //imprime el resultado de la operacion
echo " <br/> El area del cilindro es de: ".$area."metros cuadrados";  //imprime el resultado de la operacion

}

else {
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Laboratio 7.7</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form name="formularioDatos" action="Lab77.php" method="post">
        <p>Calclulo de VOLUMEN Y AREA DE UN CILINDRO</p>
        <br/>
        Introduzca el diametro en metros: <input type="text" name="diam" value="">
            <br/> <br/>
            Introduzca la altura en metros: <input type="text" name="altu" value="">
            <br/> <br/>
            <input value="Calcular" type="submit" >
        </form>
    </body>
</html>
    <?php
}
?>
