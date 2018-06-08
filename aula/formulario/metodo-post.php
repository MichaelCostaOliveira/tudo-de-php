<?php
//var_dump($_POST);

echo "Nome: " . ($_POST['nome'] ?? 'al') . "<br/>";
echo "E-mail: " . ($_POST['email']??'') . "<br/>";