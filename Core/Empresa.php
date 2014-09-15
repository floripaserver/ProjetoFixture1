<?php
require_once 'Grud.php';

class Empresa extends Grud {

    private $table = 'config';

    public function quemSomos()
    {
        $result = $this->setTable($this->table)
            ->setWhere('id=1')
            ->read();

        return $result[0];
    }
} 