<?php

namespace MeuProjeto;

// use Symfony\Components\HttpFoundation\Request; Classe não instalada

class Cliente 
{
    // Data da criação do objeto
    public $data_cli;
    
    // Constroi a Datetime
    // contendo o valor data e hora atual
    public function __construct()
    {
        // Observe o \ antes da chamada da classe
        // Pois como DateTime é na nativa do PHP
        // não tem namespace
        $this->data_cli = new \DateTime();
    }
}