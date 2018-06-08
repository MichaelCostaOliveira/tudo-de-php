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
    function pr_venda($compra){
        return $compra*2;
    }

    function venda($compra){
        return $compra*1.5;
    }
    echo"<hr>O pr_venda é:" . pr_venda($compra);
    echo"<hr>O venda é:" . venda($compra);
    //pr_venda();
    //echo"<hr>";
   // venda();
   // pr_venda();
    //venda();
    ?>
</body>
</html>