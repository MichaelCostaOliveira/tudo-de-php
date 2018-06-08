<?php
//var_dump($_GET);
	//if(count($_GET)){
		echo "Nome: " . ($_GET['nome'] ?? 'al') . "<br/>";
		echo "E-mail: " . ($_GET['email']??'') . "<br/>";
//	}