<?php 
namespace Impacta;

class Cliente{
    public $data_cli;

    public function __construct()
    {

        $this->data_cli = new \datetime();
    }
}