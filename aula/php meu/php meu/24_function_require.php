<?php

if(isset($_POST['custo'])){
    //include "22_function.php";
    //caso não encontre o arquivo retorna o erro warning
    require_once "22_function.php";
    //ja o require retonra um fatal erro que interrompe a execução do codigo
    extract($_POST);
    echo "O preço de venda com a variavel custo $custo e a margem $margem % é " . precovenda($custo,$margem);
}

echo "<form action=\"24_function_require.php\" method=\"post\">
INFORME O CUSTO DO PRODUTO: <input type=\"text\"name=\"custo\"></br>
INFORME A MARGEM DE LUCRO: <input type=\"text\"name=\"margem\"></br>
<button>CALCULAR</button>
</form>";