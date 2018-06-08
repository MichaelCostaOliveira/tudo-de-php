<?php

$post = array(
    'id' => 1,
    'titulo' => 'Tecnologias Open-Source',
    'post' => 'Cada vez mais o mercado vem adotando..',
    'categoria' => 'tecnologia'
);
				
$valores = array_values($post);

echo '<pre>';
print_r($valores);
var_dump($valores);