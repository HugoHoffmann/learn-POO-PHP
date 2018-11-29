<?php

function divisao($numero,$divisor){
    if($divisor == 0){
        throw new Exception('Divisão não é possível por 0!');
    }
    else{
        return $numero/$divisor;
    }
}

// Utilizando a funcção dividir

try{
    divisao(20, 0);
} catch (Exception $erro) {
    echo $erro->getMessage();
}

//divisao(10, 0);

