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

    public function showInd($libro, $genero){
        $this -> smarty -> assign('libro', $libro);
        $this -> smarty -> assign('genero', $genero);
        $this -> smarty -> display('detalleslibro.tpl');
    }

    public function showByGenero($librosgen, $generoPart){
        $this -> smarty -> assign('librosgen', $librosgen);
        $this -> smarty -> assign('generoPart', $generoPart);
        $this -> smarty -> display('librosporgenero.tpl');
    }
}