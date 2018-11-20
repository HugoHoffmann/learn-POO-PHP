<?php
require_once('./ContaBancaria.php');
class ContaPoupanca extends ContaBancaria{
    private $taxaJuros;
    
    public function __construct($cliente, $dataDeCriacao, $saldoInicial, $saldoAtual,$taxaJuros) {
        parent::__construct($cliente, $dataDeCriacao, $saldoInicial, $saldoAtual);
        $this->taxaJuros = $taxaJuros;
    }
    
    public function getTaxaJuros(){
        return $this->taxaJuros;
    }
    public function setTaxaJuros($taxaJuros){
        $this->taxaJuros = $taxaJuros;
    }
    
    
    public function addRendimento(){
        echo 'Rendimento de : '.$this->getSaldoAtual() * ($this->taxaJuros / 100).'<br>';
        $this->setOperacoes('rendimento', $this->getSaldoAtual() * ($this->taxaJuros / 100));
        $this->setSaldoAtual($this->getSaldoAtual() + ($this->getSaldoAtual() * ($this->taxaJuros / 100)));
    }
    
    
}

