<?php
require_once 'app/model/generosModel.php';
require_once 'app/view/generosView.php';

class GenerosController{
    private $model;
    private $view;

    public function __construct(){
        $this -> model = new generosModel();
        $this -> view = new generosView();
    }

    public function getAll(){
        $generos = $this -> model -> getAll();
        $this -> view -> showAll($generos);
    }
}