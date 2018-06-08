<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<!-- Assim como as variaveis, as constantes armazenam um valor na memoria RAM do computador; porem estas não podem ser alteradas ao longo do codigo;
Usamos a Função Define paa construir as cosntantes;-->
    <?php
    
    define('EMPRESA','IMPACTA TECNOLOGIA');
    echo EMPRESA;
    echo'<hr>';
    //NO TERCCEIRO ARGUMENTO QUANDO TRUE, 
    //A constante passa a ser CASE INSENSITIVE
    define('ESTADO', 'SÃO PAULO', TRUE);
    echo estado;

    //cosntantes PRÉ-DEFINIDAS PHP(MAGICAS)
    echo "<hr>";
    echo 'A versão utilizada é '.PHP_VERSION;
    echo "<hr>";
    echo 'Nome do  arquivo é ' . __FILE__;
    echo "<hr>";
    echo 'Nome do  arquivo é ' . __DIR__;
    echo "<hr>";
    echo 'Numero da linha é ' . __Line__;
    echo "<hr>";



    $const = get_defined_constants();
    var_dump($const);
    
    ?>
</body>
</html>