<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

echo "HELLO WORLD!!!<br>"; 

$empresa = "Impacta Tecnologia";

echo "<h1>A empresa citada é a " .$empresa. "</h1>";

//3 tipos de comentario PHP:
//Comentário PHP de uma linha (mais utilizado)
#Comentário de uma linha também

/*
comentario
de
bloco (várias linhas)
*/

//DELIMITADORES PHP
?>

<!--DELIMITADOR NÃO MAIS UTILIZADO (DEPRECIADO) -->

<script language="PHP">
    echo "AULA DE PHP1";
</script>

<!--DELIMITADOR SHORT_OPEN_TAG
HABILITAR NO php.ini-->

<?
    echo "DIGITE SEU NOME:<input type='text'>";
    phpinfo();
?>


<!--   <%  %> DELIMITADOR PHP DEPRECIADO -->






</body>
</html>