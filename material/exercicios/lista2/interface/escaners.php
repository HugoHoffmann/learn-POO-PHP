<?php
require_once './perifericos.php';
require_once './interfaceEscanear.php';
class Escaner extends Perifericos implements InterfaceEscanear{
    
    
    public function escaneia(){
        echo 'escaneia 2<br>';
    }
}
