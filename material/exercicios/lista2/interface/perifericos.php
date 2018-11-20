<?php

abstract class Perifericos{
    private $sModelo;
    private $sMarca;
    private $sEndereco;
    
    public function getModelo(){
        return $this->sModelo;
    }
    public function setModelo($sModelo){
        $this->sModelo = $sModelo;
    }
    
    public function getMarca(){
        return $this->sMarca;
    }
    public function setMarca($sMarca){
        $this->sMarca = $sMarca;
    }    
    
    public function getEndereco(){
        return $this->sEndereco;
    }
    public function setEndereco($sEndereco){
        $this->sEndereco = $sEndereco;
    }
}
