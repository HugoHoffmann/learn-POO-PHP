<?php

class Clientes{
    public $nome;
    public $email;
    public $telefone;
    
    public function exibir(){
        return 'Nome: '.$this->nome.' E-mail: '.$this->email.' Telefone: '.$this->telefone;
    }
}

