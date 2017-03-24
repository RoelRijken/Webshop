<?php
/**
 * Created by Stino.
 * User: ssmulder
 * Date: 4-3-2015
 * Time: 12:42
 */

class Todo{

    public $id;
    public $name;
    public $done;

    public function __construct($id = null)
    {
        if($id != null){
            $db = new Database();
            $result = $db->conn->query("select * from todo where id = $id");
            $todo = $result->fetch_object();

            $this->id = $todo->id;
            $this->name = $todo->name;
            $this->done = $todo->done;
        }
        else{
            $done = false;
        }

    }

    public static function GetAll()
    {
        $db = new Database();
        $todos = array();

        $result = $db->conn->query("select * from todo");
        while($todo = $result->fetch_object())
        {
            $todos[] = $todo;
        }

        return $todos;
    }

}


?>