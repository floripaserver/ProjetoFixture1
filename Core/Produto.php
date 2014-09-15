<?php

require_once 'Grud.php';

class Produto extends Grud {

    private $table = 'produto';
    private $nome;
    private $valor;

    public function listarProdutos()
    {
        $result = $this->setTable($this->table)
            ->read();

        return $result;
    }

} 