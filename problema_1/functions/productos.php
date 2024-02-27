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
    public function view_all_products()
    {
        $pdo=$this->conection();
        $sql_all_products="SELECT productos.id, productos.nombre, productos.valor_unitario, productos.cantidad, categorias.nombre FROM productos JOIN categorias ON productos.categorias_id=categorias.id";

        $view=$pdo->prepare($sql_all_products);
        $view->execute();
        $view_all=$view->fetchAll(PDO::FETCH_ASSOC);

        return $view_all;
    }
}

?>