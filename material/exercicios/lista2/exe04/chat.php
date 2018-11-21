<?php

    class Chat{
        public static $aPessoas = [];
        public static $iNumeroPessoas = 0;
        
        public static function getNumeroPessoas(){
            return Chat::$iNumeroPessoas;
        }
        
        public static function addPessoa($sPessoa){
            // como � est�tico, n�o existe o this
            Chat::$aPessoas[] = $sPessoa;
            Chat::$iNumeroPessoas++;
        }
    }

