<?
session_start();
    if(!$_SESSION['logado']/*=TRUE*/){
        header('location: index.php');
    }

    extract($_GET);
$conn = mysqli_connect('localhost','root','','login');
$sql = "select * from produtos where id=$id";
$rs = mysqli_query($conn,$sql);
//hidden serve para transitar informações de uma pagina para a outra
$produto = mysqli_fetch_assoc($rs);
?>
    <form action="update.php" method="post">
        PRODUTO: <input type="text" name="descricao" value="<?$produto['descricao'];?>"></br>
        PRECO: <input type="text" name="preco" value="<?$produto['preco'];?>"></br>
        IMAGEM: <input type="text" name="imagem" value="<?$produto['imagem'];?>"></br>
        <input type="hidden" name="id" value="<?=$produto['id'];?>">
    <button>ALTERAR</button>
    </form>