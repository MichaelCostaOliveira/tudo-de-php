<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
   <!-- // Para fazer um upload  de arquivos devemos considerar:
    //1) formulario com o method = "$_POST"
    //2) Formulario com o atributo  enctype="multipart/form-data"
    //3) Formulario com input type="file"-->
    <?php

    
        if(isset($_FILES['figura'])){
            var_dump($_FILES);
    
            $figura=$_FILES['figura'];
            if($figura['error']==0){
                var_dump($figura);
                if($figura['type']=='image/jpeg'){
                    $nome=$figura['name'];

                        if(move_uploaded_file($figura['tmp_name'], __DIR__."/$nome")){
                            echo "Upload realizado com sucesso";
                        }
                }
            }

        }
    ?>
    <form action="21_upload.php" method="post" enctype="multipart/form-data">
        <h3> ESCOLHA UMA FIGURA JPEG PARA UPLOAD: <h3/>
        <input type="file" name="figura">
        <button>Enviar</button>
    </form>
</body>
</html>