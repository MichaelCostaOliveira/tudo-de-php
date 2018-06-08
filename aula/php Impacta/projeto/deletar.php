<?
session_start();
    if(!$_SESSION['logado']/*=TRUE*/){
        header('location: index.php');
    }

    extract($_GET);
$conn = mysqli_connect('localhost','root','','login');
$sql = "delete from produtos where id=$id";
mysqli_query($conn, $sql);
header('location: produtos.php');