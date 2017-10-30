<?php
/**
 * Created by PhpStorm.
 * User: Patryk
 * Date: 30.10.2017
 * Time: 22:52
 */
class Connection{

    public static function makeConnection($database){
        try{

           return new PDO($database["driver"] . ':host=' . $database["host"] . ';dbname=' . $database["name"] . '', $database["user"], $database["password"]);


        }catch(PDOException $e){
            die($e->getMessage());

        }
    }
}