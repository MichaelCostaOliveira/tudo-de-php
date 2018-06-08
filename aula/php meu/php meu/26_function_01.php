<?php

function formatar_reais($n){
    $resultado = 'R$' . number_format($n,2,",",".");
    return $resultado;
}
    if(isset($_GET['n'])){
        extract($_GET);
        echo "\$n formatado para reais é:" . formatar_reais($n);
    }
?>

<form action="26_function_01.php" method="get">
    Digite um numero<input type="text" name="n">
    <button>ENVIAR</button>
</form>

<!-- NO ARQUIVO 27_FUNCTION_02.PHP 
CRIE UMA FUNCTION construir_tabela(nlinha,ncoluna)