<?php

/* 
 * 3. Crie uma classe Usuario, ela deve ter os atributos e m�todos abaixos:
Atributos:
Nome;
Sobrenome;

M�todos:
Setters e Getters;
hello(); //Imprime a mensagem: �Ol� usu�rio: Glauco Laicht�;

a) Crie uma classe Administrador que estende da classe Usuario;
b) Na classe Administrador crie o m�todo hello(), que dever� imprimir: �Ol� Administrador: Glauco Laicht�; Obs.: A classe administrador n�o ter� propriedades.
c) Crie uma classe Cliente que estende da classe Usuario;
d) Na classe Cliente tamb�m crie o m�todo hello(), este m�todo dever� imprimir o texto hello() da classe Usuario e ainda adicionar o texto: �Seja bem vindo�.
 */

require_once 'usuarios.php';
require_once 'cliente.php';
require_once 'administrador.php';

$oUsuario = new Usuario();
$oUsuario->setNome('Hugo');
$oUsuario->setSobrenome('Hoffmann');
$oUsuario->hello();
echo '<br>';

$oAdministrador = new Administrador();
$oAdministrador->setNome('Hugo');
$oAdministrador->setSobrenome('Hoffmann');
$oAdministrador->hello();
echo '<br>';

$oCliente = new Cliente();
$oCliente->setNome('Hugo');
$oCliente->setSobrenome('Hoffmann');
$oCliente->hello();


