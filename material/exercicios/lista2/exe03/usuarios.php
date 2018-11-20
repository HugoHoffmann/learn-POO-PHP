<?php

    class Usuario{
        private $sNome;
        private $sSobrenome;
        
        public function getNome(){
            return $this->sNome;
        }
        public function setNome($sNome){
            $this->sNome = $sNome;
        }
        
        public function getSobrenome(){
            return $this->sSobrenome;
        }
        public function setSobrenome($sSobrenome){
            $this->sSobrenome = $sSobrenome;
        }
        
        public function  hello(){
            echo 'Olá usuário: '.$this->sNome.' '.$this->sSobrenome.' ';
        }
    }
