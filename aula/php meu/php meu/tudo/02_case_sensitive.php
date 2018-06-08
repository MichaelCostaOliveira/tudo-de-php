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
    $nome = "Augusto";
    echo $Nome;
    echo $nome;
    echo "<hr>";
    echo "<span style='font-size:28px;color:#ff0;background:green'> NOTA: 10 </span>";
    echo "<script> alert('PREENCHA TODOS OS CAMPOS!!!')</script>";

    echo '<hr>Selecione a Data:<input type="date">';
//Você pode também escapar as aspas duplas com a barra //invertida \ 
    echo "<hr>Defina a Quantidade:<input type=\"number\">";
    $cliente = "José\n";//O Caractere Especial \n
                        //Quebra a Linha (no código //fonte)
    echo "<hr>A Variavel \$cliente é o(a) $cliente!!!\n";

    for ($a=1;$a<=10;$a++){
        echo "<hr> $a\n";
    }

    echo '<hr>Eu não matei Joana D\'Arc';
    $protagonista = 'Joana';
    echo '<hr>Eu não matei $protagonista D\'Arc';

/* No PHP a Interpolação de dados só funciona com aspas duplas*/
    echo '<hr>Eu não matei ' .$protagonista. ' D\'Arc';
    echo "<hr>Eu não matei $protagonista D'Arc";
    echo "<hr>Eu não matei aquele \"DEPUTADO\"!!!";
    echo 'Deseja mesmo apagar C:\\*.*?';
    $x = "D\'Arc";
    echo "<hr>$x";

    echo "<hr>ESCOLHA O NÚMERO DE PARCELAS:<br>\n";
    for ($p=1;$p<6;$p++){
        echo "\t <br><input type=\"radio\" name=\"financiamento\"> $p parcela(s) \n";
    }
    echo "<hr>\n\t\rBOAS COMPRAS!!!";
    $padrao = 10;    
?>

<hr>
Prioridade: 
<input type="text" value="<?php echo $padrao ?>">
<hr>
Prioridade: 
<input type="text" value="<?= $padrao ?>">





</body>
</html>