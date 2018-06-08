<?php

/* 
 * Com Array Dereferencing
 * Podemos ser apressados e acessarmos
 * os valores de forma direta
 */

// função que retorna um array
function nomes() 
{
    return ['Dexter', 'Walter', 'Rick'];
    // No construtor antigo:
    // return array('Dexter', 'Walter', 'Rick');
}


// Acessando de forma direta o nome Rick
echo nomes()[2] . ' é o personagem principal da série The Walking Dead';

// Explicando nomes() retorna um array com os nomes
// que em seguida é feito o acesso do terceiro nome
// através da chave [2]