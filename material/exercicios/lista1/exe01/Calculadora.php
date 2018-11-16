<?php
    class Calculadora{
        public $valor1;
        public $valor2;
        
        public function somar(){
            return 'Soma: '.($this->valor1 + $this->valor2);
        }
        
        public function subtrair(){
            return 'Subtração: '.($this->valor1 - $this->valor2);
        }
        
        public function multiplicar(){
            return 'Multiplicação: '.($this->valor1 * $this->valor2);
        }
        
        public function dividir(){
            return 'Divisão: '.($this->valor1 / $this->valor2);
        }
    }