<?php
//essa pagina ira verificar se o usuario estiver logado
session_start();
    if(!$_SESSION['logado']/*=TRUE*/){
        header('location: index.php');
    }


    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <?php
            $conn= mysqli_connect('localhost', 'root', '', 'login');
            $sql="select * from produtos";
            $rs= mysqli_query($conn,$sql);

            echo "<table border='1'>";
                while($produto = mysqli_fetch_assoc($rs)){
                    echo"<tr>";
                    echo "<td>$produto[id]</td>
                            <td>$produto[descricao]</td>
                                <td>$produto[preco]</td>
                                    <td><img width = '150' heigth='100' src='/$produto[imagem]'></td>";
                    echo"<td><a href='editar.php?id=$produto[id]'>EDITAR</a></td>";
                    echo"<td><a href='deletar.php?id=$produto[id]'>DELETAR</a></td>";
                    echo"</tr>";
                }
                ?>
                </table>
                <h1>CADASTRE AQUI UM NOVO PRODUTO</h1>
                <form action="inserir.php" method="post">
                    PRODUTO:<input type="text" name="descricao"><br>
                    PRECO:<input type="text" name="preco"><br>
                    IMAGEM:<input type="text" name="imagem"><br>
                <button>CADASTRAR</button>
                </form>
    </body>
    </html>