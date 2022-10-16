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

    public function addGenero($genero, $descripcion){
        $query = $this -> db -> prepare("INSERT INTO generos
            (genero, descripcion) VALUES(?, ?)");
        $query -> execute([$genero, $descripcion]);
        return $this -> db -> lastInsertId();
    }

    public function delete($id){
        $query = $this -> db -> prepare("DELETE FROM generos WHERE id_generos=?");
        $query -> execute([$id]);
    }

    public function editGenero($genero, $descripcion, $id_generos){
        $query = $this -> db -> prepare("UPDATE generos SET genero = ?, descripcion = ? 
                                        WHERE id_generos = ?");
        $query -> execute([$genero, $descripcion, $id_generos]);
        return $this -> db -> lastInsertId();
    }

}