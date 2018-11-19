<?php

require_once('Veiculo.php');
//Classe Carro herda atributos publicos e metodos de veiculos
class Carro extends Veiculo{
    
    public $quantidadePortas;
    public $oMotorista;
    
    //Métodos
    public function acelerar() {
        parent::acelerar();
        echo 'Acelerar carro';
    }
}