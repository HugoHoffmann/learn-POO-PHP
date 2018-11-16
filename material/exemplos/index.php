<?php

require_once('Carro.php');
require_once('Moto.php');

$oCarroFusca = new Carro();
$oCarroFusca->modelo = 'Fusca';
$oCarroFusca->cor = 'Branco';
$oCarroFusca->quantidadePortas = 2;
$oCarroFusca->abrirPorta(1);
echo $oCarroFusca->mostraModelo().'';

echo '<br>';

$oMoto     = new Moto();
$oMoto->modelo = 'Biz';
$oMoto->cor = 'Preta';
$oMoto->cilindradas = 10;
$oMoto->empinar();
echo $oMoto->mostraModelo().'';



//$oCarroFusca = new Carro();
//$oCarroFusca->modelo = 'Fusca';
//$oCarroFusca->cor = 'Branco';
//$oCarroFusca->quantidadePortas = 2;
//echo $oCarroFusca->mostraModelo().'';
//     $oCarroFusca->ligar();
//     
//$oCarroCivic = new Carro();
//$oCarroCivic->modelo           = 'Civic';
//$oCarroCivic->cor              = 'Prata';
//$oCarroCivic->quantidadePortas = 4;
//echo $oCarroCivic->mostraModelo().'';
//     $oCarroCivic->ligar();