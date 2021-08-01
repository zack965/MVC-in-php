<?php

class Controller
{
    public function model($modelName)
    {
        require_once '../app/Models/' . $modelName . '.php';
        //include_once '../Models'
        return new $modelName;
    }
    public function view($viewName, $data = [])
    {
        require_once '../app/Views/' . $viewName . '.php';
    }
}