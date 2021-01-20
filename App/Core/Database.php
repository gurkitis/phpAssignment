<?php
namespace App\Core;

class Database
{
    protected function connect()
    {
        $host = 'mysql:3306';
        $dbName = 'php_assignmentdb';
        $username = 'root';
        $password = 'EE-85*q@';

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