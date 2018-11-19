<?php

class Veiculo{
    
    public $modelo;
    public $cor;
    
    //Métodos
    public function ligar(){
        echo 'Veiculo Ligado <br>';
    }
    
    public function desligar(){
        echo 'Veiculo desligado<br>';
    }
    
    public function insereModelo($modelo) {
        return $this->modelo = $modelo;
    }
    public function mostraModelo() {
        return $this->modelo;
    }
    
    public function acelerar(){
        echo 'Acelerar <br>';
    }
}


