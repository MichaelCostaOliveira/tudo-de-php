   <?php

    if(isset($_COOKIE['lembrar'])){
        $usuario = $_COOKIE['usuario'];
        $senha = $_COOKIE['senha'];
        $lembrar = $_COOKIE['lembrar'];
    }else{
        settype($usuario,'string');
        settype($senha,'string');
    }
/*BANCO DE DADOS
BD = LOGIN
TABELA USUARIOS (ID) (USUARIO) (SENHA)
TABELA PRODUTOS (ID) (DESCRICAO) (PRECO) (IMAGEM)
NO CAMPO IMGAEM COLOCA (imagem/) antes do nome da imgem e no inserir é só colocar imagem/nome.jpg*/ 
   
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
        <form action="autenticacao.php" method="post">
        lOGIN:<input type="text" name="usuario" value="<?=$usuario?>"></br>
        SENHA:<input type="text" name="senha"value="<?=$senha?>"></br>
        LEMBRAR senha:<input type="checkbox" name="lembrar" <?php echo(isset($lembrar))?("checked"):(null)?>><br>
        <button>LOGAR</butoon>
        </form>
    </body>
    </html>