<?php

$senha = 'teste123';

// A função sha1 retorna uma nova string com
// a criptografia sobre a string
$senhaSha1 = sha1($senha);

// Imprime e0f68134d29dc326d115de4c8fab8700a3c4b002
echo $senhaSha1;


//sha1 é o algoritimo q faz a criptografia e existem varios