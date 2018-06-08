<?php

// Inclui no arquivo o autoload que 
// ira procurar automaticamente as classes em
// src/
require __DIR__ . '/vendor/autoload.php';

// Para que o autoload encontre a classe específica
// usamos a instrução "use" do namespace
use MeuProjeto\Models\Cliente;

// Agora toda vez que chamarmos Cliente
// o autoload vai em src/Models/Cliente.php
$cli = new Cliente('Leonardo', 'leo@tes.com', '55 11 5555-5555');

var_dump($cli);