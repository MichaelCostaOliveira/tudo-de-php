<?php

// Funções Anônimas / Closure / Lambda

// Criando uma função convencional
function chamadaInterna ($nome, callable $func) {
    // Esperamos receber uma Closure em
    // $func
    $func($nome);
}
//callable obriga a passar uma função anonima (clousure)

chamadaInterna ('Scarlett Johansson', function($nome) {
	echo 'Olá ' . $nome;
});

