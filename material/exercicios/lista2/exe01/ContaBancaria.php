<?php
    class ContaBancaria{
        private $cliente;
        private $dataDeCriacao;
        private $saldoInicial;
        private $saldoAtual; 
        private $operacoes = [];
       
        
        public function __construct($cliente, $dataDeCriacao,$saldoInicial, $saldoAtual ) {
            $this->cliente       = $cliente;
            $this->dataDeCriacao = $dataDeCriacao;
            $this->saldoInicial  = $saldoInicial;
            $this->saldoAtual    = $saldoAtual;
        }
        
        public function getCliente() {
            return $this->cliente;
        }
        public function setCliente($cliente){
            $this->cliente = $cliente;
        }
        
        public function getDataDeCriacao() {
            return $this->dataDeCriacao;
        }
        public function setDataDeCriacao($dataDeCriacao){
            $this->dataDeCriacao = $dataDeCriacao;
        }
        
        public function getSaldoInicial() {
            return $this->saldoInicial;
        }
        public function setSaldoInicial($saldoInicial){
            $this->saldoInicial = $saldoInicial;
        }


        
        public function sacar($valor){
            $this->operacoes['saque'] = $valor;
            $this->saldoAtual        -= $valor;
            return 'Realizado saque do cliente '.$this->cliente.' no valor de R$ '.$valor.',00. Saldo atual: R$ '.$this->saldoAtual.',00<br>';
        }
        
        public function depositar($valor){
           $this->operacoes['depositar'] = $valor;
           $this->saldoAtual            += $valor;
           return 'Realizado depósito para o cliente '.$this->cliente.' no valor de R$ '.$valor.',00. Saldo atual R$ '.$this->saldoAtual.',00<br>';
        }
        
        public function exibeSaldo(){
            return'Saldo atual do cliente '.$this->cliente.' R$ '.$this->saldoAtual.',00 <br>'; 
        }
        
        public function exibeExtrato(){
            return '<br><br><table border="1px">
                    <tr>
                        <th>Operação</th>
                        <th>Valores</th>
                    <tr>
                    <tr> 
                        <td>Saldo inicial</td>
                        <td>'.$this->saldoInicial.'</td>
                    </tr>
                    <tr> 
                        <td>Saque</td>
                        <td>'.$this->operacoes['saque'].'</td>
                    </tr>
                    <tr> 
                        <td>Depósito</td>
                        <td>'.$this->operacoes['depositar'].'</td>
                    </tr>
                    <tr> 
                        <td>Saldo Atual</td>
                        <td>'.$this->saldoAtual.'</td>
                    </tr>
                    </table>';
        }
    }