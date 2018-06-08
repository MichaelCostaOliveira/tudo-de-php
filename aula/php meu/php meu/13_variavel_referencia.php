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
    
    //Variavel é o endereço de memoria utlizado para armazenar valor;
    //quando uma variavel possi a mesma referencia de outra variavel quer dizer que ambas possuem o mesmo endereço na memoria
    //logo se alterar um imediatamente a outra tambem sera alterada.
    
    $a = 10;
    $b = &$a;

    echo $a;
    echo "<br>";
    echo $b;//10
    echo"<br>";
    $a = 15;
    echo $b;//15

    //note que se $a e $b não fossem referencia
    //o $b continuaria a ser igual a 10
    
    ?>
</body>
</html>