<?php
    require_once 'usuarios.php';
    class Administrador extends Usuario{
        
        
        public function hello() {
            echo 'Olá administrador: '.$this->getNome().' '.$this->getSobrenome().' ';
        }
    }
