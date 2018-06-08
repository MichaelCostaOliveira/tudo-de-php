<?php

function formatar_reais($n){
    $resultado = 'R$ '.number_format($n,2,",",".");
    return $resultado;
}

    if (isset($_GET['n'])){
        extract($_GET);
        echo "\$n formatado para reais é: ".formatar_reais($n);
    }
?>
<form action="26_function_01.php" method="get">
digite um número<input type="text" name="n">
<button>ENVIAR</button>
</form>