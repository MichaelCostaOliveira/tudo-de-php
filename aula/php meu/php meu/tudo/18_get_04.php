<?php

    if (!isset($_GET['curso']) || (!isset($_GET['turno']))){


        $redirect = "17_get_03.php";
        header("location:$redirect");

    }else{
        
        if(strlen($_GET['curso'])==0 || strlen($_GET['turno'])==0){
        $redirect = "17_get_03.php?alerta=PREENCHA TUDO";
        header("location:$redirect");
            
        }else{
            extract($_GET);
            echo "<h1>MUITO OBRIGADO POR TER ESCOLHIDO O $curso, $turno, na $local!!!</h1>";
            echo "ENTRAREMOS EM CONTATO PARA CONFIRMAÇÃO";
    }}

