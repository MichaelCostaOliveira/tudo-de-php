<?php


if(isset($_POST['usuario'])&& isset($_POST['senha'])){

    $conn = mysqli_connect('localhost', 'root', '', 'login');

    //verificar se existe esse banco
    extract($_POST);

    $sql = "select * from usuarios where usuario = '$usuario' and senha ='$senha'";

    $rs = mysqli_query($conn,$sql);

        if(mysqli_num_rows($rs)>0){

            session_start();//variave $_SESSION unica que para usar precisa de um star antes
            $_SESSION['logado']=TRUE;

        if($lembrar){
            setcookie('usuario', $usuario ,time()+24*60*60);

            setcookie('senha',$senha, time()+24*60*60);

            setcookie('lembrar',TRUE, time()+24*60*60);
        }else{
            setcookie('usuario', null);
            setcookie('senha', null);
            setcookie('lembrar', null);
        }
            header('location: produtos.php');
        }else{
           header('location: index.php');
        }
}