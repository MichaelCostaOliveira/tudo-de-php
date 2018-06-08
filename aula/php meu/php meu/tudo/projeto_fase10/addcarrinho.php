<?php
require __DIR__ . '/vendor/autoload.php';

$id = $_GET['id'];

add_carrinho($id);

header('Location: index.php');