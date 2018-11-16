<?php

    class Impressora{
        // atributos
        
        public $marca;
        public $modelo;
        public $tipo;
        public $ip;
        public $nome;
        
        public function imprimir(){
            return $this->marca.' '.$this->modelo.' '.$this->tipo.' '.$this->ip.' '.$this->nome;
        }
        public function limparFila(){
            
        }
        public function impressaoDeTeste(){
            
        }
    }