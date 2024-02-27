<?php

class Database
{
    private $user="root";
    private $password="12345678";
    private $dbname="practice";
    private $host="mysql:host=localhost:3307";
    private $pdo;

    function __construct()
    {
        try
        {
            $this->pdo=new PDO($this->host. "; dbname=" . $this->dbname . ";", $this->user, $this->password);
            $this->pdo->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ATTR_ERRMODE);

        }
        catch(PDOException $e)
        {
            echo "Error " . $e->getMessage();
        }
    }
    public function start_conection()
    {
        return $this->pdo;
    }
}

?>