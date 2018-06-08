<?php

require 'Cliente1.php';
//require 'Cliente2.php';

$cliente = new MeuProjeto\Cliente;

// Para imprimir o horario da criação
// do objeto
echo $cliente->data_cli->format('d/m/Y H:i:s');