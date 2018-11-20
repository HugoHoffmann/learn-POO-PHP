<?php

/* 
 * 3. Crie uma classe Usuario, ela deve ter os atributos e métodos abaixos:
Atributos:
Nome;
Sobrenome;

Métodos:
Setters e Getters;
hello(); //Imprime a mensagem: ‘Olá usuário: Glauco Laicht’;

a) Crie uma classe Administrador que estende da classe Usuario;
b) Na classe Administrador crie o método hello(), que deverá imprimir: ‘Olá Administrador: Glauco Laicht’; Obs.: A classe administrador não terá propriedades.
c) Crie uma classe Cliente que estende da classe Usuario;
d) Na classe Cliente também crie o método hello(), este método deverá imprimir o texto hello() da classe Usuario e ainda adicionar o texto: ‘Seja bem vindo’.
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


