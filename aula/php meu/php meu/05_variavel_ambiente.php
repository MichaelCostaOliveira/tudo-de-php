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
    
    /* No PHP temos variaveis com escopo super global.($_COOKIE, $_SERVER, $_GET, $_POST, $_SESSION ...) 
    As variaveis ambientes fornecem varias informações do servidor.*/

    var_dump($_SERVER);

    echo "O servidor utilizador o ". $_SERVER['SERVER_NAME']."<hr>";
    echo "A porta utilizada é a: " . $_SERVER['SERVER_PORT']."<hr>";
    echo "O ip utilizado é : " . $_SERVER['REMOTE_ADDR']."<hr>";

    
    // alem da super global $_SERVER podemos obter informações do servidorr utilizando a função getenv do php.$_COOKIE
    $arq = getenv("SCRIPT_FILENAME");
    echo"O nome deste arquivo é: " . $arq . "<HR>";
    $m = getenv("REQUEST_METHOD");
    echo"O METODO UTILIZADO: " . $m. "<HR>";
    $ip = getenv("REMOTE_ADDR");
    echo"O METODO UTILIZADO: " . $ip. "<HR>";
    var_dump($arq)
    ?>
</body>
</html>