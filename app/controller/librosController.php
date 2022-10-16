<?php
require_once 'app/helper/authHelper.php';
require_once 'app/model/generosModel.php';
require_once 'app/model/librosModel.php';
require_once 'app/view/librosView.php';

class LibrosController{
    private $genModel;
    private $model;
    private $view;

    public function __construct(){
        $this -> genModel = new GenerosModel();
        $this -> model = new LibrosModel();
        $this -> view = new LibrosView();

        $authHelper = new AuthHelper();
        $authHelper -> checkLoggedIn();
    }

    public function getAll(){
        $libros = $this -> model -> getAll();
        foreach ($libros as $libro){
            $libro -> Generos_fk = $this -> genModel -> getGenById($libro->Generos_fk)->Genero;
        }
        $this -> view ->showAll($libros);
    }

    public function getLibroInd($id){
        $libro = $this -> model ->getLibroInd($id);        
        $libro -> Generos_fk = $this -> genModel -> getGenById($libro->Generos_fk)->Genero;
        $genero = $libro->Generos_fk;
        $this -> view -> showLibroInd($libro, $genero);
    }

    public function getLibrosByGenero($id){
        $librosGenero = $this -> model -> getLibrosByGenero($id);
        foreach ($librosGenero as $libro){
            $libro -> Generos_fk = $this -> genModel -> getGenById($libro->Generos_fk)->Genero;
            $generoPart = $libro->Generos_fk;
        }
        $this -> view -> showByGenero($librosGenero, $generoPart);
    }

    public function ShowFormAdd(){
        $generos = $this -> genModel -> getAll();
        $this -> view -> showFormAdd($generos);
    }

    public function addLibro(){
        $titulo = $_POST['titulo'];
        $autores = $_POST['autores'];
        $anio = $_POST['anio'];
        $precio = $_POST['precio'];
        $genero = $_POST['genero'];
        $id = $this -> model -> addLibro($titulo, $autores, $anio, $precio, $genero);
        header("Location: " . BASE_URL);
    }

    public function deleteLibro($id){
        $this -> model -> delete($id);
        header("Location: " . BASE_URL);
    }
    
    public function showFormEdit($id){
        $generos = $this -> genModel -> getAll();
        $libro = $this -> model -> getLibroInd($id);
        $this -> view -> showFormEdit($libro, $generos);
    }

    public function editLibro(){
        $titulo = $_POST['titulo'];
        $autores = $_POST['autores'];
        $anio = $_POST['anio'];
        $precio = $_POST['precio'];
        $genero = $_POST['genero'];
        $id_libros = $_POST['id_libros'];
        $this -> model -> editLibro($titulo, $autores, $anio, $precio, $genero, $id_libros);
        header("Location: " . BASE_URL);
    }
}