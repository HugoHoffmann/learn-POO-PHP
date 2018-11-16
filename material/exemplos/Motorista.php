<?php

class Motorista{
    public $nome;
    public $cnh;
    
    public function imprimeDados(){
        echo 'Nome: '.$this->nome.'CNH'.$this->cnh;
    }
}