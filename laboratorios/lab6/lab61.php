<?php 
class cliente {
    var $nombre;
    var $numero;
    var $peliculas_alquiladas;
    
    function _construct ($nombre,$numero) {
        $this ->nombre =$nombre;
        $this ->numero=$numero;
        $this ->peliculas_alquiladas = array();
    }
    function __destruct (){
        echo"<br> destruido:". $this-> nombre;
    }
    
    function dame_numero(){
        return $this-> numero;
    }
}
//instanciamos un par de objetivo cliente 
$cliente1 = new cliente ("pepe",1);
$cliente2 = new cliente ("roberto",564);

//mostramos el numero de cada cliente creado
echo "<br> El identificador del cliente 1 es:".$cliente1 ->dame_numero();
echo "<br> El identificador del cliente 2 es:".$cliente2 ->dame_numero();

?>