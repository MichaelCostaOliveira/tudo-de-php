<?php

if (isset($_POST['custo'])){
    //include "22_function.php";
    include_once "22_function.php";  
    //Caso não encontre o arquivo retorna um erro Warning
    extract($_POST);
    echo "O PREÇO DE VENDA COM O CUSTO $custo e a margem $margem % é ".precovenda($custo,$margem);
    echo "Fim";
}

echo "<form action=\"23_function_include.php\" method=\"post\">
INFORME O CUSTO DO PRODUTO: <input type=\"text\" name=\"custo\"><br>
INFORME A MARGEM DE LUCRO: <input type=\"text\" name=\"margem\"><br>
<button>CALCULAR</button>
</form>";
