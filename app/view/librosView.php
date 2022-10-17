<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
class LibrosView{
    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
    }

    public function showAll($libros){
        $this -> smarty -> assign('libros', $libros);
        $this -> smarty -> display('libros.tpl');
    }

    public function showLibroInd($libro, $genero){
        $this -> smarty -> assign('libro', $libro);
        $this -> smarty -> assign('genero', $genero);
        $this -> smarty -> display('detalleslibro.tpl');
    }

    public function showByGenero($librosgen, $generoPart, $error){
        $this -> smarty -> assign('librosgen', $librosgen);
        $this -> smarty -> assign('generoPart', $generoPart);
        $this -> smarty -> assign('error', $error);
        $this -> smarty -> display('librosporgenero.tpl');
    }

    public function showFormAdd($libros){
        $this -> smarty -> assign('generos', $libros);
        $this -> smarty -> display ('forms/formaddlibro.tpl');
    }

    public function showFormEdit($libro, $generos){
        $this -> smarty -> assign('libro', $libro);
        $this -> smarty -> assign('generos', $generos);
        $this -> smarty -> display('forms/formeditlibro.tpl');
    }
}