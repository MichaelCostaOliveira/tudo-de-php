<?php

$produtos = array('lápis','caneta','mouse','relogio');
print_r($produtos);
$fabricantes = [
    'estrela','sharp','sony','samsung'
];
var_dump($fabricantes);
echo $produtos[0];
echo '<hr>';
echo $fabricantes[0];
$produtos[]='tv 70\'\'';
$fabricantes[]='microsoft';
var_dump($produtos);
var_dump($fabricantes);
for ($x=0;$x<count($produtos);$x++){
    echo "<hr> O índice $x do array \$produtos é $produtos[$x]";
}
$y=0;
while ($y<sizeof($produtos)){
    echo "<hr> O índice $y do array \$produtos é $produtos[$y]";
    $y++;
}
foreach($produtos as $k=>$v){
    echo "<hr> O índice $k do array \$produtos é $v";
}
$cadastroprodutos = array_combine($produtos,$fabricantes);
var_dump($cadastroprodutos);
//sort($cadastroprodutos);//coloca em ordem crescente os values e descarta as keys;
//var_dump($cadastroprodutos);
sort($produtos);
var_dump($produtos);
rsort($produtos);//mesmo classificação porém ordem decrescente
var_dump($produtos);

//E PARA ARRAYS ASSOCIATIVOS (PELAS KEYS):
ksort($cadastroprodutos);
var_dump($cadastroprodutos);
krsort($cadastroprodutos);//mesmo classificação porém ordem decrescente
var_dump($cadastroprodutos);

//E PARA ARRAYS ASSOCIATIVOS (PELOS VALUES):
asort($cadastroprodutos);
var_dump($cadastroprodutos);
arsort($cadastroprodutos);//mesmo classificação porém ordem decrescente
var_dump($cadastroprodutos);

array_shift($produtos);
var_dump($produtos);
array_shift($fabricantes);
var_dump($fabricantes);
array_shift($cadastroprodutos);
var_dump($cadastroprodutos);
//Remove primeiro indice do array (associativo ou não)

array_pop($produtos);
var_dump($produtos);
array_pop($fabricantes);
var_dump($fabricantes);
//Remove ultimo indice do array (associativo ou não)

array_unshift($produtos,'copos');
array_unshift($fabricantes,'papel ltda');
var_dump($produtos);
var_dump($fabricantes);
//Adiciona um primeiro elemento ao array (não associativo)
//array_unshift($cadastroprodutos,'copos=>papel ltda');
//var_dump($cadastroprodutos);

var_dump($produtos);
$arrayreverse = array_reverse($produtos);
var_dump($arrayreverse);

$a1 = array('Eduardo','Ricardo','Paola','Rafael');
$a2 = array('Rafael','Ana','Patricia','EDuardo');
var_dump(array_intersect($a1,$a2));
var_dump(array_diff($a1,$a2));
//é case sensitive e compara o primeiro array com o segundo array


//array_search retorna a key do value procurado
var_dump(array_search('Ricardo',$a1));
var_dump(array_search('samsung',$cadastroprodutos));

$alunos = array("Diogo"=>
                    array("rg"=>"0123",
                          "cpf"=>"4567"),
                "Leandro"=>
                    array("rg"=>"2345",
                           "cpf"=>"6789"),
                "Helio"=>
                    array("rg"=>"4567",
                          "cpf"=>"8901"));
var_dump($alunos);
echo "Leandro: <br/>";
echo "RG:".$alunos['Leandro']['rg']."<br/>";
echo "CPF:".$alunos['Leandro']['cpf'];


foreach ($alunos as $aluno=>$dados){
	foreach ($dados as $dado=>$valor){
			echo '<hr>'.'O Aluno '.$aluno.', tem '.$dado.':'.$valor;
	}
}



foreach ($alunos as $aluno=>$dados){
    echo $aluno .":";
	foreach ($dados as $dado=>$valor){
			echo ' '.$dado.'-'.$valor;
    }
    echo '<hr>';
}


foreach ($alunos as $aluno=>$dados){
    $doc = '';

	foreach ($dados as $dado=>$valor){
        $al = $aluno;
        $da = $dado;
        $va = $valor;
    $doc .=' '.$da.':'.$va;
    }
    echo '<hr> o aluno '.$al.' tem '.$doc ;
}














