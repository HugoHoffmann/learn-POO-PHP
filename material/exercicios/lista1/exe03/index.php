<?php

//3. Crie uma classe chamada CalculadoraCientifica, esta classe deve estender de Calculadora e implementar o seguinte m�todo:
//Fatorial(); //Ir� utilizar somente a vari�vel valor1;

require_once('./CalculadoraCientifica.php');
$oCalculadoraCientifica = new CalculadoraCientifica();
$oCalculadoraCientifica->valor1 = 5;

echo $oCalculadoraCientifica->fatorial();


