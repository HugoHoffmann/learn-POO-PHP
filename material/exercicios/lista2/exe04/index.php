<?php

//4. Crie uma classe Pessoa, com os atributos nome e sobrenome. Crie uma classe Chat, com os atributos e m�todos a seguir (TODOS DEVEM ser est�ticos):
//Atributos:
//pessoas(array);//est�tico
//nroPessoas;// est�tico
//
//M�todos:
//getNumeroPessoas(); //retorna o n�mero de pessoa
//addPessoa(); //adiciona uma pessoa ao array
//
//Aten��o: Como os atributos da classe Chat s�o est�ticos n�o ser� necess�rio instanci�-la.

require_once 'chat.php';
require_once 'pessoa.php';
$oPessoa = new Pessoa();
$oPessoa->sNome = 'Hugo';
$oPessoa->sSobrenome = 'Hoffmann';


Chat::addPessoa($oPessoa);
echo Chat::getNumeroPessoas();
