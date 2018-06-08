<?php

    echo chr(65);//"A"
    $texto = "Eduardo-Alex-Felipe";
    $alunos = explode("-",$texto);
    var_dump($alunos);
    $linha_alunos = implode("xxx",$alunos);
    var_dump($linha_alunos);
    echo ord('A');
    for ($x=0;$x<=10;$x++){
        echo '<hr>'.str_pad($x,10,0,STR_PAD_LEFT);
    }
    echo '<hr>'."A Posição da letra 'A' no IMPACTA é: ".strpos('IMPaCTA','A');//3 pq começa a contar do ZERO
    $texto = "IMPACTA TECNOLOGIA";
    echo '<hr>'.substr($texto,8);//TECNOLOGIA está retornando tudo a partir do caracter 8.
    echo '<hr>'.substr($texto,8,4);//A partir 8 está retornando apenas 4 caracteres.
    $pos_espaco=strpos($texto," ");
    echo '<hr>'.substr($texto,$pos_espaco+1);
    echo '<hr>'.substr($texto,8,-2);