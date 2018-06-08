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
    A Linguagem PHP é de Tipagem Dinâmica.
    No Desenvolvimento usamos muito o 
            var_dump para debugar uma variavel.
    O PHP possui 4 tipos de dados básicos,
    (int, float, boolean e string);
    2 compostos (Arrays e Objeto) e 
    2 especiais (Resource r Null).
*/
$cliente = "José";
var_dump($cliente);
echo "<hr>";
$peso = 81;
var_dump($peso);
$peso = 81.6;
var_dump($peso);
$casado = true;
var_dump($casado);
$casado = false;
var_dump($casado);

$cores = [
    "amarelo",
    "verde",
    "azul",
    "branco"
];
var_dump($cores);
echo $cores[2];

$produtos = [
    "Lápis"=>10,
    "Caneta"=>15,
    "Mouse"=>40
];
var_dump($produtos);
echo "O Valor da Caneta é: R$" 
        .number_format($produtos['Caneta'],"2",",",".");

class Pessoa{
    Public $bairro;
    Public $renda;
}
$joao = new Pessoa;
$joao->bairro = "Paraíso";
//$joao->renda = 4500;
var_dump($joao);
$maria = new Pessoa;
$maria->bairro = "Tatuapé";
$maria->renda = 6700;
var_dump($maria);
echo "A renda da Maria é: R$" 
            .number_format($maria->renda,2,",",".");

echo "<hr>";

//A função gettype informa o TIPO de dado da variavel
echo "A variavel \$cliente é do tipo: " .gettype($cliente)."<hr>";
echo "A variavel \$peso é do tipo: " .gettype($peso)."<hr>";
echo "A variavel \$casado é do tipo: " .gettype($casado)."<hr>";
echo "A variavel \$cores é do tipo: " .gettype($cores)."<hr>";
echo "A variavel \$joao é do tipo: " .gettype($joao)."<hr>";

//Também utilizamos funções booleanas de Verificação de Tipo:
echo is_real($peso)."<hr>";
echo is_bool($casado)."<hr>";
echo is_object($maria)."<hr>";
echo is_object($cliente)."<hr>";

if (is_object($cliente)){
          echo "A Variavel \$cliente é Objeto!!";
}else{
            echo "A Variavel \$cliente não é Objeto!!";
}
if (!is_object($cliente)){
    echo "<hr>Essa variavel não é um Objeto!!!!";
}

$saida= "<hr>O Estado Civil do $cliente é: ";
if ($casado){
    $saida = $saida . " Casado";
}else{
    $saida = $saida . " Solteiro";
}
echo $saida;

/* A Função settype altera (converte) o tipo da variavel*/
$idade = "18";
var_dump($idade);
settype($idade,"integer");
var_dump($idade);

//O Settype cria também uma variável determinando seu tipo
settype($compras,"float");
var_dump($compras);


/*Também podemos alterar o tipo usando
 uma conversão explicita*/
$vendas = 250.56;
$total = $vendas*2;
echo "<hr>Total (1):" .$total;
$total2 = (int)$vendas *2;
echo "<hr>Total (2):" .$total2;
var_dump($vendas);
//Porém note que $vendas continua igual a 250.56
settype($vendas,"integer");
var_dump($vendas);
//Já com o Settype a variavel tem uma alteração
// não somente para aquele momento

//Coerção são conversões explicitas feitas pelo
//proprio PHP
$p1 = "10Canetas";
$p2 = "20Lápis";
echo "O total de produtos em estoque é: " .($p1+$p2);

//A Função isset verfica a existência de uma variável
echo "<hr>";
if (isset($p1)){
    echo "A Variavel \$p1 existe!!";
}else{
    echo "A Variavel \$p1 não existe!!";
}
echo "<hr>";
if (isset($p3)){
    echo "A Variavel \$p3 existe!!";
}else{
    echo "A Variavel \$p3 não existe!!";
}

//A Função unset deleta/elimina uma variavel
unset($p1);
echo "<hr>";
if (isset($p1)){
    echo "A Variavel \$p1 existe!!";
}else{
    echo "A Variavel \$p1 não existe!!";
}


//A Função empty($variavel) verifica se está vazia;
settype($empresa,"string");
var_dump($empresa);
if (empty($empresa)){
    echo "<hr>Preencha o Campo Empresa!!!";
}else{
    echo "<hr>A Empresa informada é a: $empresa!!!";
}
$empresa = "Impacta Tecnologia";
if (empty($empresa)){
    echo "<hr>Preencha o Campo Empresa!!!";
}else{
    echo "<hr>A Empresa informada é a: $empresa!!!";
}
?>
</body>
</html>