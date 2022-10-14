<?php
class LibrosModel{
    private $db;
    
    public function __construct(){
        $this ->db = new PDO('mysql:host=localhost;' . 'dbname=libreria;charset=utf8', 'root', '');
    }

    public function getAll(){
        $query = $this -> db -> prepare("SELECT * FROM libros");
        $query -> execute();
        $libros = $query -> fetchAll(PDO::FETCH_OBJ);
        return $libros;
    }

    public function getLibroInd($id){
        $query = $this -> db -> prepare("SELECT * FROM libros WHERE id_libros=?");
        $query -> execute([$id]);
        $libroDet = $query -> fetch(PDO::FETCH_OBJ);
        return $libroDet;
    } 

    public function getLibrosByGenero($id){
        $query = $this -> db -> prepare("SELECT * FROM libros WHERE generos_fk=?");
        $query -> execute([$id]);
        $librosGenero = $query->fetchAll(PDO::FETCH_OBJ);
        return $librosGenero;
    }

    public function insertLibro($libro, $autores, $año, $precio, $genero){
        $query = $this -> db -> prepare("INSERT INTO libros
            (titulo, autores, año, precio, generos_fk) VALUES(?, ?, ?, ?, ?)");
        $query -> execute([$libro, $autores, $año, $precio, $genero]);
        return $this -> db -> lastInsertId();
    }

    public function delete($id){
        $query = $this -> db -> prepare("DELETE FROM libros WHERE id_libros=?");
        $query -> execute([$id]);
    }

    public function update($libro, $autores, $año, $precio, $genero){
        $query = $this -> db -> prepare("UPDATE libros SET titulo = ?, autores = ?,
            año=?, precio=?, generos_fk=? WHERE id_libros=?) VALUES(?, ?, ?, ?, ?)");
        $query -> execute([$libro, $autores, $año, $precio, $genero]);
        return $this -> db -> lastInsertId();
    }
}