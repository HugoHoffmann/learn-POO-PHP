<?php
    class Calculadora{
        public $valor1;
        public $valor2;
        
        public function somar(){
            return 'Soma: '.($this->valor1 + $this->valor2);
        }
        
        public function subtrair(){
            return 'Subtra��o: '.($this->valor1 - $this->valor2);
        }
        
        public function multiplicar(){
            return 'Multiplica��o: '.($this->valor1 * $this->valor2);
        }
        
        public function dividir(){
            return 'Divis�o: '.($this->valor1 / $this->valor2);
        }
    }