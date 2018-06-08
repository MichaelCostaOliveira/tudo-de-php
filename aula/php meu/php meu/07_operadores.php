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
    != Diferente
    !== Não Identico
    && E (AND)
    || OU (OR)




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
//nesse ambiente php especifico não esta configurado essas prorpiedades


    echo '<hr>'; 
    $n1 = "10";
    $n2 = 10;

    if($n1 == $n2){
        echo"<hr>$n1 é igual a $n2";
    }else {
        echo "<hr>$n1 é diferente de $n2";
    }

    if($n1 === $n2){
        echo"<hr>$n1 é igual a $n2";
    }else {
        echo "<hr>$n1 é diferente de $n2";
    }

    $nota = 8;
    $frequencia = .7;
    if($nota>=7 && $frequencia>=0.7){
        echo '<br>aprovado';
    } else{
        echo'<br>reprovado';
    }

    // operadores de incremento e decremento 
    // pré e pós 

    $x = 10;
    echo '<hr>';
    echo ++$x; // 11 Pré  incremento
    echo '<hr>';
    echo $x++; // pós incremento
    echo '<hr>';
    echo $x;//12
    echo'<hr>';
    echo --$x;//11 pré decremento
    echo '<hr>';
    echo $x--; //11 pós decremento e depois subtrai
    echo '<hr>';
    echo $x;
    echo '<hr>';

    //operador novo php7
    //SPACESHIP $n1<=>$n2
    //1 se o $n1 for maior que $n2
    //0 se $n1 for igual a $n2
    //-1 se $n1 for menor que $n2

    $n1 = 7;
    $n2 = 6;
    echo'<hr>';
    echo $n1<=>$n2; //1

    //operador ternario

    //CONDIÇÃO?SE_VERDADEIRO:SE_FALSO
    echo'<hr>';
    echo ($n1>$n2)?"\$n1 é maior que \$n2":"\$n1 não émaior que \$n2";

    $media = 7;
    echo'<hr>';
    echo $media>=7?"Aprovado":"Reprovado";

    $vendas = 10000;
    $meta = 15000;
    echo'<hr>';
    echo $vendas>=$meta?
    "Parabens!!":"Faltam ainda " . ($meta-$vendas);

    //operador de concatenação .=
    echo"<hr>";
    $nome = "Eduardo";
    $sobrenome = "Chuman";
    $nome = $nome ." ". $sobrenome;
    echo $nome;
    
    echo "<hr>";

    $nome = "Eduardo";
    $sobrenome = "Chuman";
    $nome .=" ";
    $nome .= $sobrenome;
    echo '<hr>';
    echo $nome;

    //Operador de atribuição +=
    $n = 10;
    $n = $n + 8;
    echo "<hr>";
    echo $n;

    $n = 10;
    $n += 9;
    echo "<hr>";
    echo $n;
?>




</body>
</html>
