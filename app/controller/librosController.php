<?php
require_once 'app/model/librosModel.php';
require_once 'app/view/librosView.php';

class LibrosController{
    private $model;
    private $view;

    public function __construct(){
        $this -> model = new librosModel();
        $this -> view = new librosView();
    }

    public function getAll(){
        $libros = $this -> model -> getAll();
        $this -> view ->showAll($libros);
    }

    public function getLibroInd($id){
        $libro = $this -> model ->getLibroInd($id);
        $this -> view -> showInd($libro);
    }

    public function getLibrosByGenero($id){
        $librosGenero = $this -> model -> getLibrosByGenero($id);
        $this -> view -> showAll($librosGenero);
    }
}