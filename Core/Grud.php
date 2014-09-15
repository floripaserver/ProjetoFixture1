<?php

require_once 'Conexao.php';

class Grud extends Conexao {

    private $table;
    private $where;
    private $orderBy;
    private $limit;
    private $offSet;

    protected function read()
    {
        $sql = "SELECT * FROM {$this->table} {$this->where} {$this->orderBy} {$this->limit} {$this->offSet}";

        $stmt = $this->getInstance()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        return $result;
    }

    protected function setTable($table)
    {
        $this->table = $table;
        return $this;
    }

    protected function setWhere($where)
    {
        $this->where = $where = ($where != null ? "WHERE {$where}" : "");
        return $this;
    }

    protected function setOrder($orderBy)
    {
        $this->orderBy = $order = ($orderBy != null ? "ORDER BY {$orderBy}" : "");
        return $this;
    }

    protected function setLimit($limit) {
        $this->limit = $limit = ($limit != null ? "LIMIT {$limit}" : "");
        return $this;
    }


    protected function setOffSet($offSet) {
        $this->offSet = $offset = ($offSet != null ? "OFFSET {$offSet}" : "");
        return $this;
    }

} 