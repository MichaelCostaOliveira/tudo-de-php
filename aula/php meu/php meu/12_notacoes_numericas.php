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
    
    
    
    //podemos tratar um numero usasndo notações:
    //Decimal, Octal, Hexadecimal, Binaria
    echo'<hr>';
    echo 10;//Decimal
    echo'<hr>';
    echo 0123;
    echo'<hr>';
    $octal = 0123;
    echo $octal;//83 Decimal
    echo'<hr>';
    $hexadecimal = 0x1A;
    echo $hexadecimal;//26 Decimal
    echo'<hr>';
    $binaria = 0B0101;
    echo $binaria;
    echo'<hr>';
    //podemos representar uma string atraves de 4 maneiras:
    //1) Aspas Simples;
    echo 'PHP';
    echo'<hr>';
    //2) Aspas Duplas
    echo "PHP";
    echo'<hr>';
    //3) Nowdoc
    //String Complexas;
    //Não interpreta variavel. Codigo html sim
    //identificador (depois do <<<) com aspas simples
    //antes do identificador final (sem aspas) não pode inserir nada na mesma linha
    $n = <<<'erick'
As variaveis php começão com $.
<br>
Exemplo: $x.
<br>
E o caractere de scape do PHP é\.
<br>
Exemplo: \$x.
<br>
Ex2: echo "\$x";
erick;
echo'<hr>';
echo $n;
    //4) Heredoc
    //Interpreta variavel, html  escap(\)
    //No identificador não usa aspas
    //se comporta como string delimitadas de aspas
    //as aspas não são interpretadas se comportão como parte da string
    $y = 10;
$h = <<<Heredoc
<br>
O Valor da variavel é $y 
<br>
Seu total =$y*10
Heredoc;
echo $h;    

//No PHP7 o caracter especial \u permite inserir 
//caracteres alem dos caracteres ASC;

echo "\u{2602}"

?>
        
    </body>
    </html>