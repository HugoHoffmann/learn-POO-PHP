<?php

/* 
 5. Leia o enunciado abaixo e realize a abstração das informações em
 *  classes (Você deverá utilizar o conceito de herança e classe abstrata na solução):
Os professores podem trabalhar “em regime”, cuja carga horária é fixa de 40 horas, 
 * e “horistas” cuja carga horária pode variar de semestre a semestre. Todo professor possui um 
 * número de matrícula, um nome, uma carga horária e um salário. O salário de um professor em 
 * regime é fixo, enquanto o salário de um professor horista depende do número de horas trabalhadas
 *  e do salário/hora. Deve existir um método calculaSalario que deve retornar o valor do salário do professor.
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





