<?php

define('HOST','localhost');
define('DATABASENAME','fbanderson');
define('USER','root');
define('PASSWORD','');


class Connect
{
    protected $connection;

    function __construct()
        {
            $this->connectDatabase();
        }

    function connectDATABASE()
        {
            try {
                $this->connection = new PDO('mysql:host='.HOST.';dbname='. DATABASENAME, USER, PASSWORD);
            } 
            catch (PDOException $e) 
            {
            
                echo "Error: ".$e->getMessage();
                die();
            }
        }
}
    $testConnection = new Connect();
?>