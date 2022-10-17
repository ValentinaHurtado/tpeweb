<?php
require_once './app/controller/authController.php';
require_once './app/controller/librosController.php';
require_once './app/controller/generosController.php';
 
define ('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT']
                . dirname($_SERVER['PHP_SELF']) . '/');

$action = 'libreria';
if(!empty($_GET['action'])){
        $action=$_GET['action'];
}

$params = explode('/', $action);

switch($params[0]){
        case 'login':
                $authController = new AuthController();
                $authController -> showFormLogin();
                break;
        case 'validate':
                $authController = new AuthController();
                $authController -> validateUser();
                break;
        case 'logout':
                $authController = new AuthController();
                $authController -> logout();
                break;
        case 'libreria':
                $librosController = new LibrosController();
                $librosController -> getAll();
                break;
        case 'generos':
                $generosController = new GenerosController();
                $generosController -> getAll();
                break;
        case 'detalleslibro':
                $librosController = new LibrosController();
                $id = $params[1];
                $librosController -> getLibroInd($id);
                break;
        case 'librosporgenero':
                $librosController = new LibrosController();
                $id = $params[1];
                $librosController -> getLibrosByGenero($id);
                break;
        case 'addlibro':
                $librosController = new LibrosController();
                $librosController -> showFormAdd();
                break;
        case 'addgenero':
                $generosController = new GenerosController();
                $generosController -> showFormAdd();
                break;
        case 'insertarlibro':
                $librosController = new LibrosController();
                $librosController -> addLibro();
                break;
        case 'insertargenero':
                $generosController = new GenerosController();
                $generosController -> addGenero();
                break;
        case 'deletelibro':
                $librosController = new LibrosController();
                $id = $params[1];
                $librosController -> deleteLibro($id);
                break;
        case 'deletegenero':
                $generosController = new GenerosController();
                $id = $params[1];
                $generosController -> deleteGenero($id);
                break;
        case 'formeditgenero':
                $generosController = new GenerosController();
                $id = $params[1];
                $generosController -> showFormEdit($id);
                break;
        case 'editgenero':
                $generosController = new GenerosController();
                $generosController -> editGenero();
                break;
        case 'formeditlibro':
                $librosController = new LibrosController();
                $id = $params[1];
                $librosController -> showFormEdit($id);
                break;
        case 'editlibro':
                $librosController = new LibrosController();
                $librosController -> editLibro();
                break;
        default:
                echo('404 page not found');
                break;
}