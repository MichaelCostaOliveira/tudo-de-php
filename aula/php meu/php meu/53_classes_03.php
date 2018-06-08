<?php

require '52_classes_02.php';

$func_01 = new Colaborador;
var_dump($func_01);
//Atrubua ao $func_01: João, Supervisor, 8000
//e depois aumente em 50% o seu salario
//usando o Método Reajuste.

$func_01->nome = "João";
$func_01->cargo = "Supervisor";
$func_01->salario = 8000;
var_dump($func_01);

$func_01->reajuste($func_01->salario,50);
var_dump($func_01);