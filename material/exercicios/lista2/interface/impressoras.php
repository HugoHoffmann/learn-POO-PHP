<?php
require_once('./perifericos.php');
require_once('./interfaceImpressao.php');

class Impressora extends Perifericos implements InterfaceImpressao{
    
     public function imprimir(){
        echo 'Conte�do ';
    }
}
