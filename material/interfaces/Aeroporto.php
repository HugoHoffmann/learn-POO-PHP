<?php
require_once './Voador.php';
class Aeroporto{
    private $aAvioes;
    private $endereco;
    
    public function adicionaAvioes(Voador $oVeiculo){
        $this->aAvioes[] = $oVeiculo;
    }
    
    public function escalaAvioes(){
        foreach ($this->aAvioes as $oAviao){
            $oAviao->mostraRota();
            if(true){
                $oAviao->voar();
            }
        }
    }
}
