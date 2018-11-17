<?php
    require_once('Clientes.php');
    class ContaBancaria extends Clientes{
        public $cliente;
        public $dataDeCriacao;
        public $saldoInicial;
        public $saldoAtual; 
        public $operacoes = [];
        
        
        public function sacar($valor){
            $this->operacoes['saque'] = $valor;
            $this->saldoAtual        -= $valor;
            return 'Realizado saque do cliente '.$this->nome.' no valor de R$ '.$valor.',00. Saldo atual: R$ '.$this->saldoAtual.',00<br>';
        }
        
        public function depositar($valor){
           $this->operacoes['depositar'] = $valor;
           $this->saldoAtual            += $valor;
           return 'Realizado depósito para o cliente '.$this->nome.' no valor de R$ '.$valor.',00. Saldo atual R$ '.$this->saldoAtual.',00<br>';
        }
        
        public function exibeSaldo(){
            return'Saldo atual do cliente '.$this->nome.' R$ '.$this->saldoAtual.',00 <br>'; 
        }
        
        public function exibeExtrato(){
            return '<table border="1px">
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