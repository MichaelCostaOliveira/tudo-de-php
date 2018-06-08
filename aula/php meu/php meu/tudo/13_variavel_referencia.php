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
//Variavel é um endereço de memória utilizado para armazenar um valor.
//Quando uma variavel possui a mesma referncia de outra variavel, quer dizer que ambas possuem o mesmo endereço na memoria.
//Logo, se alterar uma, imediatamente, a outra também é alterada.
$a = 10;
$b = &$a;
echo $b;//10
$a = 15;
echo $b;//15
//Note que se $a e $b não fossem referência
// o $b continuaria à ser igual a 10.
?>
</body>
</html>