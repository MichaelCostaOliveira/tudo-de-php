<?php
session_start();
include_once("crud/conexao.php");

extract($_POST);

if(isset($nome)&& isset($senha)){
    //verificar se existe esse banco
    $sql = "select * from crud_inserir where nome = '$nome' and senha ='$senha'";

    $rs = mysqli_query($conn,$sql);

        if(mysqli_num_rows($rs)>0){

            //variave $_SESSION unica que para usar precisa de um star antes
        $_SESSION['logado']=TRUE;

        if($lembrar){
            setcookie('nome', $nome ,time()+24*60*60);

            setcookie('senha',$senha, time()+24*60*60);

            setcookie('lembrar',TRUE, time()+24*60*60);
        }else{
            setcookie('nome', null);
            setcookie('senha', null);
            setcookie('lembrar', null);
        }
            header('location: crud/produtos.php');
        }else{
             $_SESSION['mssa'] = "<p style='color:red;'>Nome ou Senha incorretos</p>";
        header("Location:crud/logar.php");
    }
}