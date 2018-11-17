<?php

//4. Criar uma classe chamada ContaBancaria, esta classe vai ter os seguintes atributos e m�todos:
//Atributos:
//Cliente (vai ser um objeto para a classe modelada no exerc�cio 2);
//Data de cria��o;
//SaldoInicial;
//SaldoAtual;
//operacoes; //ser� um array com as opera��es realizadas
//
//M�todos:
//Sacar()   ; 
////recebe como par�metro um valor e diminui do saldo do cliente, deve escrever na tela: 
////�Realizado saque do cliente Jo�o no valor de R$ 100,00. Saldo atual: R$ 500,00�.
////Quando realizado um saque, dever� ser registrado no array de operacoes para confer�ncia //do extrato
//Depositar();
////recebe como par�metro um valor e aumenta o saldo do cliente, deve escrever na tela: //�Realizado dep�sito para 
//o cliente Jo�o no valor de R$ 100,00. Saldo atual R$ 600,00�.
////Quando realizado um dep�sito, dever� ser registrado no array de operacoes para //confer�ncia do extrato
//exibeSaldo();
////Deve escrever na tela: �Saldo atual do cliente Jo�o R$ 600,00�.
//exibeExtrato();
////Deve percorrer e mostrar na tela todas as opera��es realizadas pelo cliente no seguinte //formato:
//Opera��o	Saque
//Saldo Inicial	R$ 500
//Saque         R$ 100
//Dep�sito	R$ 500
//Saldo Atual	R$ 900
//
//No final realize a cria��o de objetos da classe ContaBancaria e Clientes, atribuindo valores e fazendo impress�o do saldo e do extrato.

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