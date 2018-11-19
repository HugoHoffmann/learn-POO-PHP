<?php

    class exampleStatic{
        public static $atributo = 'Estático';
        
        public static function metodoEstatico(){
            echo 'Metodo estatico';
        }
    }
    echo exampleStatic::$atributo;
    exampleStatic::metodoEstatico();
    
    
/*
 * :: acesso estático, não é necessário que seja instanciado em objeto 
 */

