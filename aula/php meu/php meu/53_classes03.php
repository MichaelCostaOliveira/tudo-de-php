<?php
require '52_classe02.php';

$func_01 = new Colaborador;
var_dump($func_01);
//Atribua ao $func_01: João, Supervisor. 8000
// E depois aumente em 50% o seu salario
// Usando o Método Reajuste.

$func_01->nome ="João";
$func_01->cargo="Supervisor";
$func_01->salario=8000;
var_dump($func_01);

$func_01->Reajuste($func_01->salario,50);
var_dump($func_01); 
//Function trabalha com THIS  representa o objeto que chamou o metodo

