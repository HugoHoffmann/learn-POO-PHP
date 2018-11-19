<?php

require_once('Veiculo.php');
//Classe Carro herda atributos publicos e metodos de veiculos
class Carro extends Veiculo{
    
    public $quantidadePortas;
    public $oMotorista;
    
    //Métodos
    public function acelerar() {
        echo 'Acelerar carro';
    }
    public function parar(){
        echo 'para';
    }
}