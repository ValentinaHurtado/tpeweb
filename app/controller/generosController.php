<?php
require_once 'app/helper/authHelper.php';
require_once 'app/model/generosModel.php';
require_once 'app/view/generosView.php';

class GenerosController{
    private $model;
    private $view;

    public function __construct(){
        $this -> model = new GenerosModel();
        $this -> view = new GenerosView();

        $authHelper = new AuthHelper();
        $authHelper -> checkLoggedIn();
    }

    public function getAll(){
        $generos = $this -> model -> getAll();
        $this -> view -> showAll($generos);
    }

    public function ShowFormAdd(){
        $this -> view -> showFormAdd();
    }

    public function addGenero(){
        $genero = $_POST['genero'];
        $descripcion = $_POST['descripcion'];
        $id = $this -> model -> addGenero($genero, $descripcion);
        header("Location: " . BASE_URL . 'generos');
    }

    public function deleteGenero($id){
        $this -> model -> delete($id);
        header("Location: " . BASE_URL . 'generos');
    }

    public function showFormEdit($id){
        $genero = $this -> model -> getGenById($id);
        $this -> view -> showFormEdit($genero);
    }

    public function editGenero(){
        $genero = $_POST['genero'];
        $descripcion = $_POST['descripcion'];
        $id_generos = $_POST['id_generos'];
        $this -> model -> editGenero($genero, $descripcion, $id_generos);
        header("Location: " . BASE_URL . 'generos');
    }

}