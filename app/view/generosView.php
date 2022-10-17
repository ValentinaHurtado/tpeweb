<?php
class GenerosView{
    private $smarty;

    public function __construct(){
        $this->smarty = new Smarty();
    }

    public function showAll($generos, $error){
        $this -> smarty -> assign('generos', $generos);
        $this -> smarty -> assign("error", $error);
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