<?php
    require_once('Calculadora.php');
    class CalculadoraCientifica extends Calculadora{
        public function fatorial(){
            $fat = 1;
            for($i = 1; $i <= $this->valor1; $i++){
                 $fat *= $i;
            }
            return $fat;
        }
    }