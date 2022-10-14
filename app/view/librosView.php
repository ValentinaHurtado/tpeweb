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

    public function showInd($libro){
        $this -> smarty -> assign('libro', $libro);
        $this -> smarty -> display('detalleslibro.tpl');
    }

   
}