<?php 
require 'lib/funcoes.php';
require 'src/Cliente.php';

var_dump($_POST);

$post = limpa_post($_POST);

$cliente = new Cliente($post);

var_dump($cliente);