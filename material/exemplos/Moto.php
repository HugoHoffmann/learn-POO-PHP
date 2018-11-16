<?php

require_once('Veiculo.php');
//Classe moto herda atributos publicos e metodos de veiculos 
class Moto extends Veiculo{
    
    //Atributos
    public $cilindradas;
    
    public function empinar() {
        echo 'Andando com somente uma roda!';
    }
}
//
//require_once('Impressora.php');
//$oImpressao = new Impressora();
//$oImpressao->marca = 'HP';
//$oImpressao->modelo = 'YXXX';
//$oImpressao->tipo = 'fotocopia';
//$oImpressao->ip = '111.111.111.111';
//$oImpressao->nome = 'Zeta';
//echo $oImpressao->imprimir();