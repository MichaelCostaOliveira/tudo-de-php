<?php
if(isset($_GET['nlinhas']) && isset($_GET['ncolunas'])){
    extract($_GET);
    function construirtabela($nlinhas,$ncolunas){
        $tabela = "<table border='1'>";
        for($linha=1;$linha<=$nlinhas;$linha++){
            $tabela.= "<tr>";
                for($coluna=1;$coluna<=$ncolunas;$coluna++){
                     $tabela.="<td>$linha.$coluna</td>";
                }
                $tabela .="<tr>";
       } 
       $tabela .= "</table>";
       return $tabela;
    }
    echo construirtabela($nlinhas,$ncolunas);
}
?>

<form action="27_function_02.php" method="get">
    Digite o numero de colunas: <input type="text" name="nlinhas"></br>
    Digite o numero de linhas: <input type="text" name="ncolunas"></br>
    <button>Criar tabela</button>
</form>