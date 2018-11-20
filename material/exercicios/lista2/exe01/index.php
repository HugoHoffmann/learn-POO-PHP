<?php

/* 
 1. Reescreva a classe ContaBancaria da lista de exercícios anterior,
 *  porém, todos os seus atributos devem ser privados e todo acesso a eles deve ser através 
 * dos métodos setters e getters. Também deve ser possível que no método construtor 
 * seja realizada a passagem do parâmetro cliente.
 */


require_once('ContaBancaria.php');
    
    $oCliente = new ContaBancaria('Hugo', '19/11/2018', 10000, 10000);
    
    echo$oCliente->depositar(1000);
    echo $oCliente->sacar(1000);
    echo $oCliente->exibeSaldo();
    echo $oCliente->exibeExtrato();

