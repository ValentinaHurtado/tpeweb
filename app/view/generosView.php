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

    public function showFormAdd(){
        $this -> smarty -> display ('forms/formaddgenero.tpl');
    }

    public function showFormEdit($genero){
        $this -> smarty -> assign('genero', $genero);
        $this -> smarty -> display('forms/formeditgenero.tpl');
    }
}