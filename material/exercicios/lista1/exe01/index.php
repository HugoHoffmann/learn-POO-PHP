<?php

//1. Criar uma classe chamada Calculadora, esta classe vai ter os seguintes atributos e métodos:
//Atributos:
//Valor1;
//Valor2;
//
//Métodos:
//Somar();
//Subtrair();
//Multiplicar();
//Dividir();
//
//Cada método deve calcular e imprimir na tela o resultado. Realize a criação de objetos através da classe e realize as operações de cada método.


    require_once 'Calculadora.php';
    
    $oCalculadora         = new Calculadora();
    $oCalculadora->valor1 = 50;
    $oCalculadora->valor2 = 5;
    
    echo $oCalculadora->somar().'<br>';
    echo $oCalculadora->subtrair().'<br>';
    echo $oCalculadora->multiplicar().'<br>';
    echo $oCalculadora->dividir().'<br>';


