<?php
session_start();
    if(!$_SESSION['logado']/*=TRUE*/){
        header('location: index.php');
    }
    include_once("conexao.php");
    extract($_POST);
    $inserir_produto = "INSERT INTO produtos where ";
    $del = mysqli_query($conn, $deletar);
    header("location: produtos.php");
?>