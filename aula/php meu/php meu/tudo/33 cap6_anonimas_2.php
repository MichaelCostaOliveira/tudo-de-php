<?php

// Funções Anônimas / Closure / Lambda

// Declarando e atribuindo uma closure com parâmetro
// podemos usar quantos parâmetros precisarmos
$hello = function ($nome) {
    echo "Hello $nome";
}; // note o ; para finalizar, sem ele teremos um erro

// Para executar a função
// basta chamar a variável e passar o parâmetro
$hello('Jason Bourne'); // observe o $ necessário pra executar

// Imprime Hello Jason Bourne

// ===== Recebendo variáveis externas ======

// Variável de scopo global
$nome = 'Walter White';
$idade = 25;

// instrução use() define quais variáveis externas
// poderão ser lidas como global
$hello2 = function () use ($nome) {
    // $nome é acessada externamente
    // note que o escopo dela é global e o use viabiliza isso
    echo "$nome: Say my name! $idade";
};

// Imprime Walter White: Say my name!
$hello2();