<?php

    require_once('Clientes.php');
    class ClienteFisica extends Clientes{
        public $cpf;
        
        public function getPessoa(){
            return $this->cpf.'<br>';
        }
    }

