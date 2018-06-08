<?php

function teste($a=10, $b=2){
    return $a*$b;
}
echo teste(5);

//pag 170 exec 4
$carros = [
    'Gol',
    'Fusca',
    'Passat',
    '147',
    'Brasilia'
];

var_dump($carros[2]);
unset($carros[2]);
var_dump($carros);

$veiculos = array('carro', 'moto', 'bicicleta');
var_dump($veiculos);
