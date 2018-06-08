<?php
echo chr(65);//==A
$texto = "Eduardo-Alex-Felipe";
$alunos = explode("-",$texto);

var_dump($alunos);


$linha_alunos = implode("xx",$alunos);
var_dump($linha_alunos);    

echo ord('A');

for($x=0;$x<=10;$x++){
    echo '<hr>' . str_pad($x,10,0,STR_PAD_LEFT);
}
echo '<hr>' . "A posição da letra 'A' no nome IMPACTA é: " . strpos('IMPACTA','A');//3 começa a contar do zero

$texto = "IMPACTA TECNOLOGIA";
echo '<hr>' . substr($texto,8);//esta retornando tudo a partir do caracter 8
echo '<hr>' . substr($texto,8,4);//a partir do 8 irar retornar 4 caracteres
$pos_espaco = strpos($texto," ");
echo '<hr>' . substr($texto,$pos_espaco+1);
echo '<hr>' . substr($texto,8,-2);//IRA OS DOIS ULTIMOS CARACTERES QUE VIRIAM