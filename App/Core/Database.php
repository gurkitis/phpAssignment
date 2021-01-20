<?php
namespace App\Core;

class Database
{
    protected function connect()
    {
        $host = 'localhost';
        $dbName = 'php_assignmentdb';
        $username = 'root';
        $password = '';

        try 
        {
            $pdo = new \PDO('mysql:host='.$host.';dbname='.$dbName, $username, $password);
            $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
            return $pdo;
        }   
        catch (\PDOException $e)
        {
            echo 'Connection failed: '.$e->getMessage();
        }
    }
}