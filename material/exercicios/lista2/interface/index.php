<?php

/* 
 * Fazer a abstração em forma de classe de uma central de cópias usando interface.
 * - Central deve conter impressoras;
 * - Central deve conter multifuncionais;
 * - Central deve conter escaners;
 * - Na central deve ter um método que adicione periféricos que escaneem;
 * - Na central deve ter um método que adicione periféricos que imprimam;
 * - Na central deve haver um método que imprima;
 * - Na central deve haver um método que escanea;
 *  - Criar um arquivo de execução que: 
 *   a) Tenha uma instancia Central de cópias, adicione
 *      uma impressora e uma multifuncional e imprima 
 *      nos dois periféricos.
 *   b) Tenha uma instância de Central de cópias, adicione uma multifuncional e um escaner
 *      e escaneie nos dois periféricos.
 */

require_once './central.php';
require_once 'impressoras.php';
require_once 'escaners.php';
require_once 'multifuncionais.php';
$oImpressora = new Impressora();
$oMultifuncional = new Multifuncional();
$oCentral = new Central();
$oCentral->addPerifericosImprimem($oImpressora);
$oCentral->addPerifericosImprimem($oMultifuncional);
$oCentral->imprimir();

$oMulti2 = new Multifuncional();
$oEscaner = new Escaner();
$oCentral->addPerifericosEscaner($oMulti2);
$oCentral->addPerifericosEscaner($oEscaner);
$oCentral->escaneia();