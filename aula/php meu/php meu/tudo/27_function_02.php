<?php
if (isset($_GET['nlinhas']) && isset($_GET['ncolunas'])){
    extract($_GET);
    function construirtabela($nlinhas,$ncolunas){
        $tabela = "<table border='1'>";
        for ($linha=1;$linha<=$nlinhas;$linha++){
            $tabela .= "<tr>";
            for($coluna=1;$coluna<=$ncolunas;$coluna++){
                $tabela .= "<td>$linha.$coluna</td>";
            }
            $tabela .= "</tr>";
        }
        $tabela .= "</table>";
        return $tabela;   
    }
    echo construirtabela($nlinhas,$ncolunas);
}
?>
<form action="27_function_02.php" method="get">
DIGITE O NÚMERO DE LINHAS: <input type="text" name="nlinhas"><br>
DIGITE O NÚMERO DE COLUNAS: <input type="text" name="ncolunas"><br>
<button>CRIAR TABELA</button>
</form>