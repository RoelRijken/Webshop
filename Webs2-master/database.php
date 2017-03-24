<?php
/**
 * Created by PhpStorm.
 * User: ssmulder
 * Date: 24-2-2015
 * Time: 10:12
 */
include('/config.php');

class Database
{
    public $conn;

    function __construct() {

        include('/config.php');

        $this->conn = new mysqli($server, $username, $password, $database);

        if($this->conn->connect_errno != 0)
        {
            die("The application was unable to connect to the database");
        }
    }

    function NextId($tableName)
    {
        $query = "  SELECT AUTO_INCREMENT
                    FROM information_schema.tables
                    WHERE table_name = '$tableName'
                    AND table_schema = DATABASE( ) ";

        $result = $this->conn->query($query);
        $stdClass= $result->fetch_object();

        return $stdClass->AUTO_INCREMENT;
    }

}

?>