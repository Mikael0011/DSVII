<?php

use ClaseBase as GlobalClaseBase;

final class ClaseBase {
    public function test (){
        echo "ClaseBase::test() llamada\n";
    }
    // aqui da igual si se declara el metodo como 
    //final o no 
    final public function moreTesting (){
        echo "ClaseBase::moreTesting() llamada\n";
    }
}

class claseHijo extends GlobalClaseBase{
    
}

?>