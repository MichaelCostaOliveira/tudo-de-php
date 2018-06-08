<?
session_start();
    if(!$_SESSION['logado']/*=TRUE*/){
        header('location: index.php');
    }

    extract($_POST);
$conn = mysqli_connect('localhost','root','','login');
$sql = "update produtos set 
        descricao='$descricao', 
        preco=$preco, 
        imagem='$imagem' 
        where id=$id";
    mysqli_query($conn,$sql);
    header('Location: produtos.php');