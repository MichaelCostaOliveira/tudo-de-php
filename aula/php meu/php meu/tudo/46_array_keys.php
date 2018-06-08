<?php

$post = array(
    'id' => 1,
    'titulo' => 'Tecnologias Open-Source',
    'post' => 'Cada vez mais o mercado vem adotando..',
    'categoria' => 'tecnologia'
);
				
$chaves = array_keys($post);

echo '<pre>';
print_r($chaves);
var_dump($chaves);
