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
function pr_venda1(){

    global $compra;
    $venda = $compra*2;
    echo "O preço de venda1 é " .$venda;

}
function pr_venda2(){
    
        global $compra;
        $venda = $compra*1.5;
        echo "O preço de venda2 é " .$venda;
    
}

pr_venda1();
echo "<hr>";
pr_venda2();
//pr_venda();
?>
</body>
</html>