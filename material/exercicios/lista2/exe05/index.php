<?php

/* 
 5. Leia o enunciado abaixo e realize a abstra��o das informa��es em
 *  classes (Voc� dever� utilizar o conceito de heran�a e classe abstrata na solu��o):
Os professores podem trabalhar �em regime�, cuja carga hor�ria � fixa de 40 horas, 
 * e �horistas� cuja carga hor�ria pode variar de semestre a semestre. Todo professor possui um 
 * n�mero de matr�cula, um nome, uma carga hor�ria e um sal�rio. O sal�rio de um professor em 
 * regime � fixo, enquanto o sal�rio de um professor horista depende do n�mero de horas trabalhadas
 *  e do sal�rio/hora. Deve existir um m�todo calculaSalario que deve retornar o valor do sal�rio do professor.
 */

require_once 'horista.php';
require_once 'regime.php';
$oProfessor = new Regime();
$oProfessor->iNumeroMatricula = 1;
$oProfessor->sNome = 'Hugo';
$oProfessor->fCargahoraria = 40;
echo $oProfessor->calculaSal();
echo '<br>';


$oProf = new Horista();
$oProf->iNumeroMatricula = 1;
$oProf->sNome = 'Hugo';
$oProf->fCargahoraria = 20;
echo $oProf->calculaSal();





