<?php

/**
 * Created by PhpStorm.
 * User: Linksonder
 * Date: 2/17/2016
 * Time: 11:53 AM
 */
class Controller
{

    function Show($name, $model){
        require('view/' . $name . '.php');
    }
}