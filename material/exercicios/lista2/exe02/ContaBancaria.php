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
        
        
        public function getSaldoAtual() {
            return $this->saldoAtual;
        }
        public function setSaldoAtual($SaldoAtual){
            $this->saldoAtual = $SaldoAtual;
        }
        
        public function getOperacoes(){
            return $this->operacoes;
        }
        public function setOperacoes($operacoes, $valor){
            $this->operacoes[] = [$operacoes, $valor];
        }

                
        public function sacar($valor){
            $this->operacoes[] = ['saque', $valor];
            $this->saldoAtual -= $valor;
            return 'Realizado saque do cliente '.$this->cliente.' no valor de R$ '.$valor.',00. Saldo atual: R$ '.$this->saldoAtual.',00<br>';
        }
        
        public function depositar($valor){
           $this->operacoes[] = ['depositar', $valor];
           $this->saldoAtual += $valor;
           return 'Realizado depósito para o cliente '.$this->cliente.' no valor de R$ '.$valor.',00. Saldo atual R$ '.$this->saldoAtual.',00<br>';
        }
        
        public function exibeSaldo(){
            return'Saldo atual do cliente '.$this->cliente.' R$ '.$this->saldoAtual.',00 <br>'; 
        }
        
        public function exibeExtrato(){
            print_r($this->operacoes);
            echo '<br><br><table border="1px">';
            echo   '<tr>';
            echo       '<th>Operação</th>';
            echo       '<th>Valores</th>';
            echo   '<tr>';
            echo   '<tr>'; 
            echo       '<td>Saldo inicial</td>';
            echo       '<td>'.$this->saldoInicial.'</td>';
            echo   '</tr>';
                    foreach($this->operacoes as $aOperacao){
				echo '<tr>';
					echo '<td>'.$aOperacao[0].'</td>';
					echo '<td>'.$aOperacao[1].'</td>';
				echo '</tr>';
			}
            echo   '<tr>'; 
            echo       '<td>Saldo Atual</td>';
            echo       '<td>'.$this->saldoAtual.'</td>';
            echo   '</tr>';
            echo '</table>';
        }
    }