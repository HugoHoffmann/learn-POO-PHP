<?php

//1. Criar uma classe chamada Calculadora, esta classe vai ter os seguintes atributos e m�todos:
//Atributos:
//Valor1;
//Valor2;
//
//M�todos:
//Somar();
//Subtrair();
//Multiplicar();
//Dividir();
//
//Cada m�todo deve calcular e imprimir na tela o resultado. Realize a cria��o de objetos atrav�s da classe e realize as opera��es de cada m�todo.


    require_once 'Calculadora.php';
    
    $oCalculadora         = new Calculadora();
    $oCalculadora->valor1 = 50;
    $oCalculadora->valor2 = 5;
    
    echo $oCalculadora->somar().'<br>';
    echo $oCalculadora->subtrair().'<br>';
    echo $oCalculadora->multiplicar().'<br>';
    echo $oCalculadora->dividir().'<br>';


