<?php

$senha = 'teste123';

// Recebe o hash que representa 'teste123'
// Lembrando que o hash muda a cada chamada nova
$hash = password_hash($senha, PASSWORD_BCRYPT);

//maior e mutavel q o sha1

echo 'Hash: ' . '<br>';
echo $hash;
echo '<br>';

echo 'Senha: ' . '<br>';
echo $senha;
echo '<br>';

// A função password_verify verifica
// a string com o hash e retorna true
// se for verdadeira ou false se não forem
// compatíveis
if ( password_verify($senha, $hash) ) {
    echo 'As senhas são iguais';
}
//é uma fun~çao q o php criou q consegue identificar
//se o q foi digita é igual a senha gerada anteriormente
/*
Imprime:

Hash:
$2y$10$2I/wM3KaiEYn.laqxxdsSuAn7Z7fasMI/NJebugid1vfLgdi5I6v.
Senha:
teste123
As senhas são iguais

 */