<?php

//2. Criar uma classe chamada Clientes, esta classe deve conter os seguintes atributos e m�todos:
//Atributos:
//nome
//email
//telefone
//
//M�todos:
//exibir();
//O m�todo exibir deve exibir na tela todos os dados do cliente.
//
//a) Crie um objeto da classe Clientes.
//b) Atribua valores aos atributos da classe:
//$cliente->nome = �Aluno da Silva�; 
//c) Crie mais um objeto da classe Clientes.
//d) Chame o m�todo exibir dos dois objetos e veja o resultado.
//e) Crie uma classe chamada ClienteFisica que estenda a classe Clientes. Adicione nesta classe o atributo $cpf;
//f) Crie uma classe chamada ClienteJuridica que estenda a classe Clientes. Adicione nesta classe o atributo $cnpj;
//g) Crie nas duas classes o seguinte m�todo: getPessoa(). Este m�todo deve retornar o CPF no caso de pessoa f�sica ou CNPJ no caso de pessoa jur�dica;

    require_once('ClienteFisica.php');
    require_once('ClienteJuridica.php');

    
    $oCliente           = new ClienteFisica();
    $oCliente->nome     = 'Hugo';
    $oCliente->email    = 'hugo.hoffmann@ipm.com.br';
    $oCliente->telefone = '(48) 98833-2222';
    $oCliente->cpf      = '111.222.333';
    echo $oCliente->exibir().' CPF '.$oCliente->getPessoa();
    
    $oCliente1           = new ClienteJuridica();
    $oCliente1->nome     = 'Lopez';
    $oCliente1->email    = 'lopez@ipm.com.br';
    $oCliente1->telefone = '(47) 98844-1111';
    $oCliente1->cnpj = '222.555.767.88';
    
    echo $oCliente1->exibir().' CNPJ '.$oCliente1->getPessoa();