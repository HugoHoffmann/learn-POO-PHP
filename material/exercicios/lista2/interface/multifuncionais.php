<?php
require_once './perifericos.php';
require_once './interfaceImpressao.php';
require_once './interfaceEscanear.php';
class Multifuncional extends Perifericos implements InterfaceEscanear, InterfaceImpressao{
    
    public function imprimir(){
        echo 'Imprimir <br>';
    }
    
    public function escaneia(){
        echo 'escaneia ';
    }
    
}
