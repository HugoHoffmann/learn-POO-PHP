<?php

require_once('Veiculo.php');
//Classe Carro herda atributos publicos e metodos de veiculos
class Carro extends Veiculo{
    
    public $quantidadePortas;
    public $oMotorista;
    
    //Métodos
    public function abrirPorta($porta){
        echo 'Porta '.$porta.' aberta!';
    }
    
    public function atribuiMotorista($oMotorista){
        $this->oMotorista = $oMotorista;
    }
    
    public function mostraMotorista($oMotorista){
        $this->oMotorista = $oMotorista;
    }
    
//    
//    public function desligar(){
//        echo 'carro desligado<br>';
//    }
//    
//    public function mostraModelo() {
//        return $this->modelo;
//    }
}

require_once('Impressora.php');
$oImpressao = new Impressora();
$oImpressao->marca = 'HP';
$oImpressao->modelo = 'YXXX';
$oImpressao->tipo = 'fotocopia';
$oImpressao->ip = '111.111.111.111';
$oImpressao->nome = 'Zeta';
echo $oImpressao->imprimir();