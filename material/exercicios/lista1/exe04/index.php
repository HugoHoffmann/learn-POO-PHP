<?php

//4. Criar uma classe chamada ContaBancaria, esta classe vai ter os seguintes atributos e métodos:
//Atributos:
//Cliente (vai ser um objeto para a classe modelada no exercício 2);
//Data de criação;
//SaldoInicial;
//SaldoAtual;
//operacoes; //será um array com as operações realizadas
//
//Métodos:
//Sacar()   ; 
////recebe como parâmetro um valor e diminui do saldo do cliente, deve escrever na tela: 
////‘Realizado saque do cliente João no valor de R$ 100,00. Saldo atual: R$ 500,00”.
////Quando realizado um saque, deverá ser registrado no array de operacoes para conferência //do extrato
//Depositar();
////recebe como parâmetro um valor e aumenta o saldo do cliente, deve escrever na tela: //‘Realizado depósito para 
//o cliente João no valor de R$ 100,00. Saldo atual R$ 600,00”.
////Quando realizado um depósito, deverá ser registrado no array de operacoes para //conferência do extrato
//exibeSaldo();
////Deve escrever na tela: ‘Saldo atual do cliente João R$ 600,00”.
//exibeExtrato();
////Deve percorrer e mostrar na tela todas as operações realizadas pelo cliente no seguinte //formato:
//Operação	Saque
//Saldo Inicial	R$ 500
//Saque         R$ 100
//Depósito	R$ 500
//Saldo Atual	R$ 900
//
//No final realize a criação de objetos da classe ContaBancaria e Clientes, atribuindo valores e fazendo impressão do saldo e do extrato.

    require_once('ContaBancaria.php');
    
    $oCliente                = new ContaBancaria();
    $oCliente->nome          = 'Hugo'; 
    $oCliente->cliente       = 'Hugo';
    $oCliente->email         = 'hugo.hoffmann@ipm.com.br';
    $oCliente->telefone      = '(48) 98888-2515';
    $oCliente->dataDeCriacao = '16/11/2018';
    $oCliente->saldoInicial  = 10000;
    $oCliente->saldoAtual    = 10000;
    
    echo$oCliente->depositar(1000);
    echo $oCliente->sacar(1000);
    echo $oCliente->exibeSaldo();
    echo $oCliente->exibeExtrato();