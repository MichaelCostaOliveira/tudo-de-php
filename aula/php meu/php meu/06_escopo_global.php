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
    //pag51
    $compra = 100;
    function pr_venda(){
        global $compra;
        $venda = $compra*2;
        echo $venda;
        echo"O preço de venda é: " . $venda;
    }

    function venda(){
        global $compra;
        $venda = $compra*1.5;
        echo $venda;
        echo"O preço de venda é: " . $venda;
        
    }
    pr_venda();
    echo"<hr>";
    venda();
   // pr_venda();
    //venda();
    ?>
</body>
</html>