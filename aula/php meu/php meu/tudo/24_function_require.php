<?php

if (isset($_POST['custo'])){
//    require "22_function.php";
    require_once "22_function.php";
// Já o Require retorna um Fatal error quando não encontra o arquivo
    extract($_POST);
    echo "O PREÇO DE VENDA COM O CUSTO $custo e a margem $margem % é ".precovenda($custo,$margem);
    echo "Fim";
}

echo "<form action=\"24_function_require.php\" method=\"post\">
INFORME O CUSTO DO PRODUTO: <input type=\"text\" name=\"custo\"><br>
INFORME A MARGEM DE LUCRO: <input type=\"text\" name=\"margem\"><br>
<button>CALCULAR</button>
</form>";
