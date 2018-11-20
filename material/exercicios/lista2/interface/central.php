<?php
require_once './perifericos.php';
require_once './interfaceImpressao.php';
require_once './interfaceEscanear.php';
class Central {
    
    private $aImpressoras;
    private $aEscaners;
    
    public function __construct(){
        $this->aImpressoras = [];
        $this->aEscaners    = [];
        $this->aPerifericos = [];
    }
    
    public function adicionaPeriferico(Perifericos $oPeriferico){
        $this->aPerifericos[] = $oPeriferico;
    }

    public function addPerifericosImprimem(InterfaceImpressao $oPeriferico){
        $this->aImpressoras[] = $oPeriferico;
    }
    
    public function addPerifericosEscaner(InterfaceEscanear $oPeriferico){
        $this->aEscaners[] = $oPeriferico;
    }
    
    public function imprimir(){
        foreach ($this->aImpressoras as $oPeriferico){
            $oPeriferico->imprimir();
        }
    }
    public function escaneia() {
        foreach ($this->aEscaners as $oPeriferico){
            $oPeriferico->escaneia();
        }
    }
    
    public function imprimeEnderecos(){
        foreach ($this->aPerifericos as $oPeriferico){
            echo $oPeriferico->getEndereco();
        }
        
    }
}
