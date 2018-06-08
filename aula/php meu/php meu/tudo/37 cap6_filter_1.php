<?php
// Atribuindo email errado
$emailerrado = 'email@errado.com.br';

// Imprime bool(false)
var_dump(filter_var($emailerrado, FILTER_VALIDATE_EMAIL));

echo '<hr>';

// Atribuindo email certo
$emailcerto = 'teste@gmail.com';

// Imprime string(15) "teste@gmail.com" 
var_dump(filter_var($emailcerto, FILTER_VALIDATE_EMAIL));

// Valor de Id cheio de caracteres sem utilidade
$campoId = "id'e3rrdo2";

// Imprime 2 deixando somente o número 2
// Usando SANITIZE limpa o valor retornando 2
echo filter_var($campoId, FILTER_SANITIZE_NUMBER_INT);
//limpou qualquer caractere diferente de numero

echo '<hr>';

// Cria uma simulação de SQL Injection
$sqlinjection = "Carlos ' or 1=1'";

// Imprime Carlos \' or 1=1\'
// escapa aspas simples com "\"
echo filter_var($sqlinjection, FILTER_SANITIZE_MAGIC_QUOTES);
//ele vai por a barra invertida onde for aspas

echo '<hr>';
// Variável com tags HTML não desejáveis
$cross = "Carlos&#60;script&#62;alert(&#39;ataque cross scripting&#39;)&#60;/script&#62;";



// Imprime Carlos<script>alert('ataque cross scripting')</script>
// e no font do html: 
// Carlos&#60;script&#62;alert(&#39;ataque cross scripting&#39;)&#60;/script&#62; 
echo filter_var($cross, FILTER_SANITIZE_SPECIAL_CHARS);
//vai sanetizar (limpar) os caracteres de html
//o mesmo q o html entities
//se dê o echo em $cross ele executará o js e chamamos de ataque cross scripting

