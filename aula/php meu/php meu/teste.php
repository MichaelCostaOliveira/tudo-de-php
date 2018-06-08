<?  
$nome= $_POST['nome'];
$email=$_POST['email'];


if(isset($nome) && isset($email)){
    echo "inserir no banco";
}else{
    isset($nome);
    echo "deleta";
}

?>
