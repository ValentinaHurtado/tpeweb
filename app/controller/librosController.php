<?php
require_once 'app/model/generosModel.php';
require_once 'app/model/librosModel.php';
require_once 'app/view/librosView.php';

class LibrosController{
    private $genModel;
    private $model;
    private $view;

    public function __construct(){
        $this -> genModel = new GenerosModel();
        $this -> model = new librosModel();
        $this -> view = new librosView();
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
        $this -> view -> showInd($libro, $genero);
    }

    public function getLibrosByGenero($id){
        $librosGenero = $this -> model -> getLibrosByGenero($id);
        foreach ($librosGenero as $libro){
            $libro -> Generos_fk = $this -> genModel -> getGenById($libro->Generos_fk)->Genero;
            $generoPart = $libro->Generos_fk;
        }
        $this -> view -> showByGenero($librosGenero, $generoPart);

    }
}