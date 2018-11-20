<?php
    require_once'usuarios.php';
    class Cliente extends Usuario{
        
        public function hello() {
            parent::hello();
            echo '<br> Seja bem vindo ';
        }
    }
