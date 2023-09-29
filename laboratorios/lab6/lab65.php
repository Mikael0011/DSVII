<?php 

class ClaseBase{
    public function test (){
        echo "ClaseBase::Test() llamada\n";
    }
    final public function masTests(){
        echo "ClaseBase::masTest() llamada\n";
    }
}

class ClaseHijo extends ClaseBase{
    public function otrometodo() {
        echo "ClaseHijo::masTests() llamada\n";
        }
}

?>

