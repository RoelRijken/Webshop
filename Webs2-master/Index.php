<?php
/**
 * Created by PhpStorm.
 * User: ssmulder
 * Date: 4-3-2015
 * Time: 12:23
 */
require('database.php');
require('controller/Controller.php');
require('controller/todoController.php');
require('model/todo.php');

$controller;
$actionName;
$id;

//Bepalen wat de controller is
if(isset($_GET["controller"]))
{
    $controllerName = $_GET["controller"] . "Controller"; //TodoController
    $controller = new $controllerName;  //controller = new TodoController();
}
else{
    $controller = new TodoController();
}

if(isset($_GET["action"]))
{
    $actionName = $_GET["action"]; //Detail
}
else{
    $actionName = "Index";
}

if(isset($_GET["id"])){
    //Id
    $id = $_GET["id"];
}
else{
    $id = null;
}

//Controller->Detail();
$controller->{$actionName}($id);

?>