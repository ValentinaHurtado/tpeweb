<?php
require_once './app/controller/librosController.php';
require_once './app/controller/generosController.php';
 
define ('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . 
$_SERVER['SERVER_PORT']. dirname($_SERVER['PHP_SELF']) . '/');

$action = 'home';
if(!empty($_GET['action'])){
        $action=$_GET['action'];
}

$params = explode('/', $action);

$librosController = new LibrosController;
$generosController = new GenerosController;
switch($params[0]){
        case 'libreria':
                $librosController -> getAll();
                break;
        case 'generos':
                $generosController -> getAll();
                break;
        case 'detalleslibro':
                $id = $params[1];
                $librosController -> getLibroInd($id);
                break;
        case 'librosporgenero':
                $id = $params[1];
                $librosController -> getLibrosByGenero($id);
                break;
}