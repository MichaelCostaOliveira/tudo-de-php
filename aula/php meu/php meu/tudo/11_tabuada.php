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
    if (isset($_GET['m1']) && strlen($_GET['m1'])>0){
        $m1 = $_GET['m1'];
        for ($c=0;$c<=100;$c++){
            echo "<hr> $c x $m1 = ".($c*$m1);
        }
    }
?>
<form action="11_tabuada.php" method="get">
    <h1>INFORME O NÚMERO PARA TABUADA</h1>
    <input type="number" name="m1">
    <input type="submit" value="ENVIAR">
</form>
</body>
</html>