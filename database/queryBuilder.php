<?php
/**
 * Created by PhpStorm.
 * User: Patryk
 * Date: 30.10.2017
 * Time: 23:23
 */

class QueryBuilder{

    protected $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function fetchAll($table)
    {
        $player = $this->connection->prepare("SELECT * FROM {$table} ");
        $player->execute();
        return $player->fetchAll(PDO::FETCH_OBJ);
    }

}