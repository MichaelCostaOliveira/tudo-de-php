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

for($contador=1;$contador<=10;$contador++){
    echo '<hr>' . $contador;
}
$contador = 1;
while($contador<=11){
    echo '<hr>' . $contador++;
    //$contador ++;
}

$m1 = 5;
for($m2=0;$m2<=100;$m2++){
    echo "<hr> $m1 x $m2 = " . ($m1*$m2);
}

?>



</body>
</html>
