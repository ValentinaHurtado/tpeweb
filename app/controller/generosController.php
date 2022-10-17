<?php
require_once 'app/helper/authHelper.php';
require_once 'app/model/generosModel.php';
require_once 'app/view/generosView.php';
require_once 'app/controller/librosController.php';

class GenerosController{
    private $librosModel;
    private $model;
    private $view;

    public function __construct(){
        $this -> librosModel = new LibrosModel();
        $this -> model = new GenerosModel();
        $this -> view = new GenerosView();
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    public function getAll($generos=null, $error=null){
        $generos = $this -> model -> getAll();
        $this -> view -> showAll($generos, $error);
    }

    public function checkAdmin(){
        $authHelper = new AuthHelper();
        $authHelper -> checkLoggedIn();
    }

    public function ShowFormAdd(){
        $this -> checkAdmin();
        $this -> view -> showFormAdd();
    }

    public function addGenero(){
        $this -> checkAdmin();
        $genero = $_POST['genero'];
        $descripcion = $_POST['descripcion'];
        $id = $this -> model -> addGenero($genero, $descripcion);
        header("Location: " . BASE_URL . 'generos');
    }



    public function deleteGenero($id){
        $this -> checkAdmin();
        $libros = $this -> librosModel -> getLibrosByGenero($id);
        if(empty($libros)){
            $this -> model -> delete($id);
            header("Location: " . BASE_URL . 'generos');
        }
        else{
            $this -> getAll($id, "Hay libros pertenecientes a este genero. 
            Para continuar con la accion, eliminar primero los libros que pertenecen a este genero.");
        }
    }

    public function showFormEdit($id){
        $this -> checkAdmin();
        $genero = $this -> model -> getGenById($id);
        $this -> view -> showFormEdit($genero);
    }

    public function editGenero(){
        $this -> checkAdmin();
        $genero = $_POST['genero'];
        $descripcion = $_POST['descripcion'];
        $id_generos = $_POST['id_generos'];
        $this -> model -> editGenero($genero, $descripcion, $id_generos);
        header("Location: " . BASE_URL . 'generos');
    }

}