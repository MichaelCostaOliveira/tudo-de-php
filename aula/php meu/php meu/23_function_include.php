<?php

if(isset($_POST['custo'])){
    //include "22_function.php";
    include_once "22_function.php";
    //caso não encontre o arquivo retorna o erro warning
    extract($_POST);
    echo "O preço de venda com a variavel custo $custo e a margem $margem % é " . precovenda($custo,$margem);
}

echo "<form action=\"23_function_include.php\" method=\"post\">
INFORME O CUSTO DO PRODUTO: <input type=\"text\"name=\"custo\"></br>
INFORME A MARGEM DE LUCRO: <input type=\"text\"name=\"margem\"></br>
<button>CALCULAR</button>
</form>";