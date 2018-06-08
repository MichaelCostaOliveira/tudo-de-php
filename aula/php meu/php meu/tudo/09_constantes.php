<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--
Assim como as variaveis, as contantes armazenam um valor
na memória RAM do computador; porém estas não podem ser
alteradas ao longo do código;
Não começa com $;
Usamos a Função Define para construir as constantes;
-->
<?php
Define ('EMPRESA','IMPACTA TECNOLOGIA');
echo EMPRESA;

//No terceiro argumento quando TRUE, 
//A constante passa aser CASE INSENSITIVE
Define ('ESTADO','SÃO PAULO',TRUE);
echo '<hr>';
echo estado;


//CONSTANTES PRÉ-DEFENIDAS PHP (MÁGICAS)
echo '<hr>';
echo 'Versão utilizada: '.PHP_VERSION;
echo '<hr>';
echo 'Nome do Arquivo: '.__FILE__;
echo '<hr>';
echo 'Diretório: '.__DIR__;
echo '<hr>';
echo 'Número Linha: '.__LINE__;

$const = get_defined_constants();
var_dump($const);



?>
</body>
</html>