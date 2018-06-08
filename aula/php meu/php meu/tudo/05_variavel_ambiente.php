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
    /* No PHP temos variavel com o escopo Super Global.
    ($_COOKIE, $_SERVER, $_GET, $_POST, $_SESSION)
As Variaveis Ambiente fornecem várias informações do Servidor.*/
var_dump($_SERVER);
echo "O Servidor utilizado é o: " .$_SERVER['SERVER_NAME']."<hr>";
echo "A Porta utilizada é : " .$_SERVER['SERVER_PORT']."<hr>";
echo "O Ip utilizado é: " .$_SERVER['REMOTE_ADDR'];

//Além da Super Global $_SERVER podemos obter informações do servidor
//utilizando a função getenv do PHP.
$arq = getenv("SCRIPT_FILENAME");
echo "O Nome deste Arquivo é: " .$arq."<hr>";
$m = getenv("REQUEST_METHOD");
echo "O Método utizado: " .$m."<hr>";
$ip = getenv("REMOTE_ADDR");
echo "O IP utizado é: " .$ip."<hr>";
var_dump($arq);

//No Wamp (ou em outros ambientes Servidor, funciona)
//Nesse ambiente php específico não está configurado essas
// propriedades.

?>
</body>
</html>