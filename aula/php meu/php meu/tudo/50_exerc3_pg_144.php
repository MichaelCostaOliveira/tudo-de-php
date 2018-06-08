<?php

function teste($a=10, $b=2){
    return $a*$b;
}
echo teste(5);

//exer4_pg170

$carros = [
    'Gol',
    'Fusca',
    'Passat',
    '147',
    'Brasilia'
];

var_dump($carros);
unset($carros[2]);
var_dump($carros);

$veiculos = array('carro','moto','bicicleta');
var_dump($veiculos);