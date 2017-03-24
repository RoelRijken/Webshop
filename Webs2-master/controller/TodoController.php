<?php
/**
 * Created by PhpStorm.
 * User: ssmulder
 * Date: 4-3-2015
 * Time: 12:27
 */
class TodoController extends Controller{

    public function Index()
    {
        $todos = Todo::GetAll();

        parent::show('todo/index', $todos);
    }

    public function Detail($id)
    {
        $todo = new Todo($id);

        parent::show('todo/detail', $todo);
    }

    public function Update($id){

        $this->Detail($id);
    }

    public function Delete($id){

       $this->Index();
    }
}

?>