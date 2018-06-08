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
//podemos tratar um número usando notações:
//Decimal, Octal, Hexadecimal, Binaria
//pg28
echo '<hr>';
echo 10;//Decimal
echo '<hr>';
$octal = 0123;
echo $octal;//83 Decimal
echo '<hr>';
$hexadecimal = 0x1A;
echo $hexadecimal;//26 Decimal
echo '<hr>';
$binaria = 0b0101;
echo $binaria;//5 Decimal
echo '<hr>';
//Podemos representar uma string atraves de 4 maneiras:
//1) Aspas Simples;
echo 'PHP';
echo '<hr>';
//2) Aspas Duplas;
echo "PHP";
echo '<hr>';
//3) Nowdoc
//String Complexas;
//Não interpreta variavel nem aspas nem barras,..;
//Codigo HTML, sim!
//identificador (depois do <<<) com aspas simples
//Após o identificador final (sem aspas), não pode
//inserir NADA na mesma linha
$n = <<<'erick'
As variaveis php começam com $.
<br>
Exemplo: $x.
<br>
E o caracter de scape do PHP é \.
<br>
Exemplo: \$x.
<br>
Ex2: echo "\$x";
<br>
'\n faz uma quebra de linha no código fonte'
<br>
imprime uma regua horizontal
erick;
echo '<hr>';
echo $n;
echo '<hr>';
//4) Heredoc
//Interpreta Variavel, Html, Scape também!!
//No Identificador não usa aspas
//se comportam como string delimitadas por aspas
//As aspas não são interpretadas, se comportam como
//parte da string
$y = 10;
$h = <<<heredoc
O Valor da Varivel é $y<br>
Seu total = "$y*10"<br>
\$y
heredoc;
echo $h;
//na página 30 note que só será alterado a variavel //$cliente

//No PHP 7 o caracter especial \u permite inserir
//caracteres além dos caracteres ASC;
echo "<hr>";
echo "\u{2602}";

?>
</body>
</html>