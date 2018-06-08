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
            if(isset($_GET['nome']) && strlen($_GET['nome'])>0 &&
            isset($_GET['nota']) && strlen($_GET['nota'])>0 &&
            isset($_GET['frequencia']) && strlen($_GET['frequencia'])>0){
                    $nome = $_GET['nome'];
                    $nota = $_GET['nota'];
                    $frequencia = $_GET['frequencia'];
                    if($nota>=7 && $frequencia>=70){
                        echo "Parabens $nome, você esta aprovado";
                    }else{
                        echo"Infelizmente $nome, ainda não foi dessa vez";
                    }

                }else{
               /* echo "<h3>Preencha todos os campos<h3>";
                echo"<script> alert('Ateção preencha todos os campos')</script>";*/
                if(isset($_GET['nome'])){
                    echo"Preencha todos os campos";
                }
            }
    ?>




        <form action="08_Operadores2.php" method="GET">
            <h1>Consulta Escolar</h1>
            Informe o seu Nome:<input type="text" name="nome">
            <br>
            Informe a sua Nota:<input type="text" name="nota">
            <br>
            Informe a sua Frequencia:<input type="text" name="frequencia">
            <br>
            <input type="submit" value"Enviar">
        </form>
    </body>
    </html>