<?php

require_once('Aviao.php');
require_once('./Aeroporto.php');
$oAviao = new Aviao();
$oAeroporto = new Aeroporto();
$oAeroporto->adicionaAvioes($oAviao);

