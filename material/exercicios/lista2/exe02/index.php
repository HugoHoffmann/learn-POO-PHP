<?php

/* 
 2. Crie uma subclasse ContaPoupanca que estenda de conta bancaria. Ela deve ter os atributos e métodos:
Atributos:
Taxa de juros;

Métodos:
- Construtor: deve receber a taxa de juros como parâmetro.
Adicionar rendimento: Deve pegar o saldo atual da conta e aplicar a taxa de juros e registrar nas operações o rendimento e o valor.

 */


require_once('./ContaPoupanca.php');
    
    $oCliente = new ContaPoupanca('Hugo', '19/11/2018', 10000, 10000,11);
    
    echo$oCliente->depositar(1000);
    echo $oCliente->sacar(1000);
    $oCliente->addRendimento();
    echo $oCliente->exibeSaldo();
    $oCliente->exibeExtrato();

