<?php

class Controller
{

    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }
    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }

    public function pdf($pdf)
    {
        require_once '../app/pdff/' . $pdf . '.php';
        return new $pdf;
    }
}