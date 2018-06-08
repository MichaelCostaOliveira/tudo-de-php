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
/*
    + Adição
    - Subtração
    * Multiplicação
    / Divisão
    % Mod resto de um divisão

    > Maior
    >= Maio Igual
    < Menor
    <= Menor Igual

    = Operador de Atribuição
    == Operador de Comparação (Valor)
    === Operador Comparação Idêntico (Valor e Tipo)
    ! Negação
    != Diferente (<>) 
    !== Não Identico
    && E (and)
    || OU (or)
    



*/

//Qdo $n for par , use a fonte cor azul
//Qdo $n for ímpar , use a fonte cor verde
for ($n=0;$n<=10;$n++){
    if ($n%2==0){
        echo "<span style=\"color:blue;\">
            $n </span><hr>\n";
    }else{
        echo "<span style=\"color:red;\">
        $n </span><hr>\n";
    }
}

echo '<hr>';
$n1 = "10";
$n2 = 10;
var_dump($n1);
var_dump($n2);
if ($n1==$n2){
    echo "$n1 é igual a $n2";
}else{
    echo "$n1 é diferente de $n2";
}
echo '<hr>';
if ($n1===$n2){
    echo "$n1 é idêntico a $n2";
}else{
    echo "$n1 não é identico a $n2";
}
echo '<hr>';
$nota = 8;
$frequencia = 0.7;
if ($nota>=7 && $frequencia>=0.7) {
    echo "Aprovado";
}else{
    echo "Reprovado";
}

// Operadores de Incremento e Decremento
// PRÉ e PÓS
$x = 10;
echo '<hr>';
echo ++$x;//11 Pré Incremento
echo '<hr>';
echo $x++;//Pós Incremento 
//Imprime 11 e depois atribuir um
echo '<hr>';
echo $x;//12

echo '<hr>';
echo --$x;//11 Pré Decremento
echo '<hr>';
echo $x--;//11 Pos Decremento e depois subtrai 1
echo '<hr>';
echo $x;//10

//OPERADOR NOVO PHP 7
//SPACESHIP $n1<=>$n2
//1 se $n1 for maior que $n2
//0 se $n1 for igual a $n2
//-1 se $n1 for menor que $n2
$n1 = 7;
$n2 = 6;
echo '<hr>';
echo $n1<=>$n2;//1

//OPERADOR TERNÁRIO

//CONDIÇÃO?SE_VERDADEIRO:SE_FALSO
echo '<hr>';
echo ($n1>$n2)?
"\$n1 é maior que \$n2":"\$n1 não é maior que \$n2";

$media = 6;
echo '<hr>';
echo $media>=7?"Aprovado":"Reprovado";

echo '<hr>';
$vendas = 10000;
$meta = 15000;
echo $vendas>=$meta?
"Parabens!!!":"Faltam ainda ".($meta-$vendas);

//Operador de Contaneção .=
$nome = "Eduardo";
$sobrenome = "Chuman";
$nome = $nome." ".$sobrenome;
echo '<hr>';
echo $nome;

$nome = "Eduardo";
$sobrenome = "Chuman";
$nome .= " ";
$nome .= $sobrenome;
echo '<hr>';
echo $nome;

//Operador de Atribuição +=
$n = 10;
$n = $n + 8;
echo '<hr>';
echo $n;

$n = 10;
$n += 8;
echo '<hr>';
echo $n;



?>
</body>
</html>