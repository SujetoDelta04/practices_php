<?php

require_once "../config/config.php";

class productos
{
    private $start;
    private $pdo;

    public function conection()
    {
        $this->start=new Database;
        $this->pdo=$this->start->start_conection();

        return $this->pdo;
    }
}

?>