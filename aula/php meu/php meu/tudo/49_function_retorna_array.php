<?php
/* 
 * O mesmo aplicado antes, porém 
 * sem usarmos o Array Dereferencing
 */

// função que retorna um array
function nomes() 
{
    return ['Dexter', 'Walter', 'Rick'];
    // No construtor antigo:
    // return array('Dexter', 'Walter', 'Rick');
}


// Acessando de forma indireta o nome Rick,
// primeiro atribuimos o array com todos
// os nomes
$osNomes = nomes(); 

// Note que tivemos que criar uma variável $osNomes para armazenar
// o array que retorna da função nomes(), e em seguida usamos a chave
// [2] para acessarmos Rick, o 3º elemento do array
echo $osNomes[2] . ' é o personagem principal da série The Walking Dead';
