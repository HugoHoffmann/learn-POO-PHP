<?php

class Divisao_Exception extends Exception{
    
}

function divisao($numero,$divisor){
    if($divisor == 0){
        throw new Divisao_Exception('Divis�o n�o � poss�vel por 0!');
    }
    else if (is_numeric($numero) && is_numeric($divisor)){
        return $numero/$divisor;
    }
    else{
        throw new Exception("A divis�o s� pode ocorrer com numerais");
    }
}

// Utilizando a func��o dividir

try{
    divisao(20, 0);
} catch (Divisao_Exception $erro) {
    echo $erro->getMessage();
}catch (Exception $erro){
    echo $erro->getMessage();
}

//divisao(10, 0);

