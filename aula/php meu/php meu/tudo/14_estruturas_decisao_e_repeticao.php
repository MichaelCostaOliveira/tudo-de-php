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
$nota = 10;
if($nota >= 7){
	echo "Aprovado<br>";
}else{
	echo "Reprovado<br>";
}
//se tiver apenas UMA instru??o as chaves podem ser omitidas 
if($nota >= 7)
	echo "Aprovado<br>";
else
	echo "Reprovado<br>";
###################################
if($nota >= 7):
	echo "Aprovado<br>";
else:
	echo "Reprovado<br>";
endif;	
//SINTAXE OPERADOR TERNÁRIO: 
//CONDIÇÃO?SE_VERDADEIRO:SE_FALSO
echo $nota>=7?"Aprovado":"Reprovado";
echo '<hr>';
$renda = 3750;
if ($renda>=6000){
    $status = "A";
}elseif($renda>=5000){
    $status = "B";
}elseif($renda>=4000){
    $status = "C";
}elseif($renda>=3000){
    $status = "D";
}elseif($renda>=2000){
    $status = "E";
}elseif($renda>=1000){
    $status = "F";
}else{
    $status = "G";
}
echo "Cliente: $status";
echo '<hr>';
$d = date('w');
switch ($d){
    case 0:
        $diasemana = "Domingo";
        break;
    case 1:
        $diasemana = "Segunda";
        break;
    case 2:
        $diasemana = "Terça";
        break;
    case 3:
        $diasemana = "Quarta";
        break;
    case 4:
        $diasemana = "Quinta";
        break;
    case 5:
        $diasemana = "Sexta";
        break;
    case 6:
        $diasemana = "Sábado";
        break;
    default:
        $diasemana = "Não Identificado";
// O break interrompe o lanço;
}
echo $diasemana;

// O Looping While executa enquanto a condição for verdadeira;
// O Do / While , independente da condição (TRUE OR FALSE) esse Looping é
//Executado pelo menos uma vez; e depois só será repetido se a condição for TRUE
$c = 0;
do{
    echo "<hr>$c";
    $c++;
}while($c<=10);
$c = 0;
while($c<=10){
    echo "<hr>$c";
    $c++;
}
for ($c=0;$c<=10;$c++){
    echo "<hr>$c";
}

//O Looping foreach (para cada), executa o bloco de código PARA CADA elemento de um array (ou coleção).
$alunos=[
    'Eduardo',
    'Alex',
    'Felipe',
    'Marcelo',
    'Michael',
    'Rafael'
];
var_dump($alunos);
echo $alunos[2];
foreach ($alunos as $x){
    if ($x=='Alex'){
        echo "<hr>$x PREMIADO!!!";      
    }else{
        echo "<hr>$x tente novamente!!!";
    }
}
foreach ($alunos as $indice => $x){
    echo "<hr> O aluno de indice $indice é o $x";
    if (strlen($x)==6){
        echo "<hr>ALUNO PREMIADO!!!";
    }
}
$produtos=[
    'Mouse'=>'45',
    'NoteBook' => '1200',
    'Óculos' => '620'
];
var_dump($produtos);
echo "<h1>LISTA DE PRODUTOS:</h1>";
$total = 0;
foreach($produtos as $descricao => $preco){
    echo "<br>$descricao-$preco";
    $total += $preco;
}
echo "<hr>TOTAL:$total";
?>



</body>
</html>