<?php

    class exampleStatic{
        public static $atributo = 'Est�tico';
        
        public static function metodoEstatico(){
            echo 'Metodo estatico';
        }
    }
    echo exampleStatic::$atributo;
    exampleStatic::metodoEstatico();
    
    
/*
 * :: acesso est�tico, n�o � necess�rio que seja instanciado em objeto 
 */

