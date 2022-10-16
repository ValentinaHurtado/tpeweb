<?php
class LibrosModel{
    private $db;
    
    //constructor
    public function __construct(){
        $this ->db = new PDO('mysql:host=localhost;' . 'dbname=libreria;charset=utf8', 'root', '');
    }

    public function getAll(){ /*agarro todos los registros de mi tabla libros*/
        $query = $this -> db -> prepare("SELECT * FROM libros");
        $query -> execute();
        $libros = $query -> fetchAll(PDO::FETCH_OBJ);
        return $libros;
    }

    public function getLibroInd($id){ /*agarro un registro en particular teniendo en cuenta su id*/
        $query = $this -> db -> prepare("SELECT * FROM libros WHERE id_libros=?");
        $query -> execute([$id]);
        $libroDet = $query -> fetch(PDO::FETCH_OBJ);
        return $libroDet;
    } 

    public function getLibrosByGenero($id){ /*agarro los registros que sean de un determinado genero*/
        $query = $this -> db -> prepare("SELECT * FROM libros WHERE generos_fk=?");
        $query -> execute([$id]);
        $librosGenero = $query->fetchAll(PDO::FETCH_OBJ);
        return $librosGenero;
    }

    public function addLibro($libro, $autores, $anio, $precio, $genero){
        $query = $this -> db -> prepare("INSERT INTO libros
            (titulo, autores, anio, precio, generos_fk) VALUES(?, ?, ?, ?, ?)");
        $query -> execute([$libro, $autores, $anio, $precio, $genero]);
        return $this -> db -> lastInsertId();
    }

    public function delete($id){
        $query = $this -> db -> prepare("DELETE FROM libros WHERE id_libros=?");
        $query -> execute([$id]);
    }

    public function editLibro($libro, $autores, $anio, $precio, $genero, $id_libros){
        $query = $this -> db -> prepare("UPDATE libros SET titulo = ?, autores = ?,
                                anio=?, precio=?, generos_fk=? WHERE id_libros=?");
        $query -> execute([$libro, $autores, $anio, $precio, $genero, $id_libros]);
        return $this -> db -> lastInsertId();
    }
}