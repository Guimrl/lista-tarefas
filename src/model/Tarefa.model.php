<?php

namespace src\model; 

class Tarefa
{
    private $id;
    private $id_status;
    private $tareda;
    private $data_cadastro;

    public function __get($atributo)
    {
        return $this->$atributo;
    }
    public function __set($atributo, $valor): void
    {
        $this->$atributo = $valor;
    }
}
