<?php

namespace Models;
class Model {
    public $pdo;

    public function __construct()
    {
        $dbOptions = ['host' => 'localhost', 'dbname' => 'sport', 'user' => 'user', 'password' => 1234];

        $this->pdo = new \PDO(
            'mysql:host=' . $dbOptions['host'] . ';dbname=' . $dbOptions['dbname'],
            $dbOptions['user'],
            $dbOptions['password']
        );
        $this->pdo->exec('SET NAMES UTF8');
    } 
}
