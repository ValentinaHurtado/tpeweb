<?php
class GenerosModel{
    private $db;
    
    public function __construct(){
        $this ->db = new PDO('mysql:host=localhost;' . 'dbname=libreria;charset=utf8', 'root', '');
    }

    public function getAll(){
        $query = $this -> db -> prepare("SELECT * FROM generos");
        $query -> execute();
        $generos = $query -> fetchAll(PDO::FETCH_OBJ);
        return $generos;
    }
    
    public function getGenById($id){
        $query = $this -> db -> prepare("SELECT * FROM generos WHERE id_generos=?");
        $query -> execute([$id]);
        $genero = $query -> fetch(PDO::FETCH_OBJ);
        return $genero;
    } 

}