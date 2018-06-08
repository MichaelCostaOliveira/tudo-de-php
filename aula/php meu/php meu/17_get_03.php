<?php


if(isset($_GET['aleta'])){
    echo"<h1> $_GET[alerta] <h1/>";
}

echo "
    <h1>LISTA DE TREINAMENTOS</h1>
    <h3>Digite seu curso: </h3>
    <form action=\"18_get_04.php\" method=\"get\">
        TREINAMENTO: <input type=\"text\" name=\"curso\"><br/>
        TURNO: <input type=\"text\" name=\"turno\"><br/>
        UNIDADE: <input type=\"text\" name=\"local\"><br/>
        <button>Enviar</butoon>
";