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
$compra = 100;
function pr_venda1($compra){
    return $compra*2;
}
function pr_venda2($compra){
    return $compra*1.5;
}
echo "O Pr1 é: " .pr_venda1($compra);
echo "<hr>O Pr2 é: " .pr_venda2($compra);
?>
</body>
</html>