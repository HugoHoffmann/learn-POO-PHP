<?php

/* 
 * Fazer a abstra��o em forma de classe de uma central de c�pias usando interface.
 * - Central deve conter impressoras;
 * - Central deve conter multifuncionais;
 * - Central deve conter escaners;
 * - Na central deve ter um m�todo que adicione perif�ricos que escaneem;
 * - Na central deve ter um m�todo que adicione perif�ricos que imprimam;
 * - Na central deve haver um m�todo que imprima;
 * - Na central deve haver um m�todo que escanea;
 *  - Criar um arquivo de execu��o que: 
 *   a) Tenha uma instancia Central de c�pias, adicione
 *      uma impressora e uma multifuncional e imprima 
 *      nos dois perif�ricos.
 *   b) Tenha uma inst�ncia de Central de c�pias, adicione uma multifuncional e um escaner
 *      e escaneie nos dois perif�ricos.
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