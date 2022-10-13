<?php
class GenerosView{
    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
    }

    public function showAll($generos){
        $this -> smarty -> assign('generos', $generos);
        $this -> smarty -> display('generos.tpl');
    }
}