<?
session_start();
    if(!$_SESSION['logado']/*=TRUE*/){
        header('location: index.php');
    }
extract($_POST);
$conn = mysqli_connect('localhost', 'root', '', 'login');
$sql = "insert into produtos (descricao,preco,imagem) values ('$descricao','$preco','$imagem')";
mysqli_query($conn, $sql);

header('Location: produtos.php');