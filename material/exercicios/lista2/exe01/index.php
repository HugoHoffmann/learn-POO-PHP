<?php

/* 
 1. Reescreva a classe ContaBancaria da lista de exerc�cios anterior,
 *  por�m, todos os seus atributos devem ser privados e todo acesso a eles deve ser atrav�s 
 * dos m�todos setters e getters. Tamb�m deve ser poss�vel que no m�todo construtor 
 * seja realizada a passagem do par�metro cliente.
 */


require_once('ContaBancaria.php');
    
    $oCliente = new ContaBancaria('Hugo', '19/11/2018', 10000, 10000);
    
    echo$oCliente->depositar(1000);
    echo $oCliente->sacar(1000);
    echo $oCliente->exibeSaldo();
    echo $oCliente->exibeExtrato();

