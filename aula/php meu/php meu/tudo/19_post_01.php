<?php

//PODEMOS TAMBÉM ENVIAR (e receber) DADOS UTILIZANDO A SUPER GLOBAL $_POST
//A DIFERENÇAS PRINCIPAIS:
// 1) OS DADOS NÃO FICAM EXIBIDOS NA URL;
// 2) Capacidade (tamanho) envio de dados. 
//(por exemplo quando fazemos um UPLOAD de arquivos, utilizamos somente $_POST)
//O envio de dados via $_POST é realizado somente por formulário html.


if (isset($_GET['alerta'])){
    echo "<h1> $_GET[alerta] </h1>";
}

echo "
    <h1>LISTA DE TREINAMENTOS</h1>
    <h3>DIGITE SEU CURSO:<h3>
    <form action=\"20_post_02.php\" method=\"post\">
        TREINAMENTO:<input type=\"text\" name=\"curso\"><br>
        TURNO:<input type=\"text\" name=\"turno\"><br>
        UNIDADE:<input type=\"text\" name=\"local\"><br>
        <button>ENVIAR</button>
";