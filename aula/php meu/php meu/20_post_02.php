<?php

    if (!isset($_POST['curso']) || (!isset($_POST['turno']))){


        $redirect = "19_post_01.php";
        header("location:$redirect");

    }else{
        
        if(strlen($_POST['curso'])==0 || strlen($_POST['turno'])==0){
        $redirect = "19_post_01.php?alerta=PREENCHA TUDO";
        header("location:$redirect");
            
        }else{
            extract($_POST);
            echo "<h1>MUITO OBRIGADO POR TER ESCOLHIDO O $curso, $turno, na $local!!!</h1>";
            echo "ENTRAREMOS EM CONTATO PARA CONFIRMAÇÃO";
    }}