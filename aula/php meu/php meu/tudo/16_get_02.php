<?php

    if (!isset($_GET['curso']) || (!isset($_GET['valor']))){


        $redirect = "15_get_01.php";
        header("location:$redirect");



    }

    extract($_GET);
    //$curso=$_GET['curso'];
    //$valor=$_GET['valor'];

    echo "<h1>MUITO OBRIGADO POR TER ESCOLHIDO O $curso no valor de $valor!!!</h1>";
    echo "ESPERAMOS VOCÊ!!!";

