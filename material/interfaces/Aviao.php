<?php
require_once('./Veiculo.php');
require_once('./Voador.php');
class Aviao extends Veiculo implements Voador{
    public function acelerar() {
        echo 'Acelerar 3';
    }
    public function voar(){
        echo 'Voar';
    }
    
     public function mostraRota(){
        echo 'navegantes';
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

