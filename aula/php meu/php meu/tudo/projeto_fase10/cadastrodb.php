<?php 
require __DIR__ . '/vendor/autoload.php';

var_dump($_POST);

$post = limpa_post($_POST);

$cliente = new Impacta\Cliente($post);

if ($cliente->cadastrar()) {
    exit('Cadastrado com sucesso');
}