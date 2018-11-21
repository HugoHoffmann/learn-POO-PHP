<?php

//4. Crie uma classe Pessoa, com os atributos nome e sobrenome. Crie uma classe Chat, com os atributos e métodos a seguir (TODOS DEVEM ser estáticos):
//Atributos:
//pessoas(array);//estático
//nroPessoas;// estático
//
//Métodos:
//getNumeroPessoas(); //retorna o número de pessoa
//addPessoa(); //adiciona uma pessoa ao array
//
//Atenção: Como os atributos da classe Chat são estáticos não será necessário instanciá-la.

require_once 'chat.php';
require_once 'pessoa.php';
$oPessoa = new Pessoa();
$oPessoa->sNome = 'Hugo';
$oPessoa->sSobrenome = 'Hoffmann';


Chat::addPessoa($oPessoa);
echo Chat::getNumeroPessoas();
