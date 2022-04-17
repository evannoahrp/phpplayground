<?php

class Controller
{
    public function view($view, $data = [])
    {
        require_once '../git/app/views/' . $view . '.php';
    }

    public function model($model)
    {
        require_once '../git/app/models/' . $model . '.php';
        return new $model;
    }

}