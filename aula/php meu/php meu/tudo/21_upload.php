<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--PARA FAZERMOS UPLOAD DE ARQUIVOS DEVEMOS CONSIDERAR:
1) FORMULÁRIO COM O method="post"
2) FORMULÁRIO COM O ATRIBUTO enctype="multipart/form-data"
3) FORMULÁRIO COM UM input type="file"
-->
<?php
var_dump([$_FILES]);
    if (isset($_FILES['figura'])){
//        var_dump['$_FILES'];
        $figura=$_FILES['figura'];
var_dump($figura);
        echo "p1";
        if ($figura['error']==0){
            echo "p2";
            if($figura['type']=='image/jpeg'){
                echo "p3";
                $nome=$figura['name'];
                if (move_uploaded_file($figura['tmp_name'],__DIR__."/$nome")){
                    echo "p4";
                    echo "Upload realizado com Sucesso!!!";
                }
            }

        }

    }
?>
<form action="21_upload.php" method="post" enctype="multipart/form-data">
<h3>ESCOLHA UMA FIGURA JPEG PARA UPLOAD:</h3>
<input type="file" name="figura">
<button>ENVIAR</button>
</form>
</body>
</html>