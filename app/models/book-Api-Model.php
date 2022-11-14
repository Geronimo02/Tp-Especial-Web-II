<?php
class Booksmodel{
    private $db;

    public function __construct(){
        $this->db= new PDO('mysql:host=localhost;'.'dbname=db_libros;charset=utf8', 'root', '');
    }
    /**
     * Devuelve la lista de libros.
     */
     public function getList(){
        // 1. abro conexión a la DB
        // ya esta abierta por el constructor de la clase

        // 2. ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM libros");
        $query->execute();

        // 3. obtengo los resultados
        $list = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $list;
     }
     public function insertBook($id_libro,$imagen,$nombre,$precio) {
        $query = $this->db->prepare("INSERT INTO libros (id_libro, imagen ,nombre, precio) VALUES (?,?,?,?)");
        $query->execute([$id_libro,$imagen,$nombre,$precio]);
    }
       //agregar los libros al carrito
    public function getbook($id){
        $query = $this->db->prepare("SELECT * FROM libros WHERE id_libro =?");
        $query->execute([$id]);  
        $libros = $query->fetch(PDO::FETCH_OBJ); // devuelve un objeto
        return $libros;
    }
    public function Upward(){
        $query = $this->db->prepare("SELECT * FROM libros ORDER BY precio ASC");
        $query->execute();  
        $libros = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un objeto
        return $libros;
    }
    public function falling(){
        $query = $this->db->prepare("SELECT * FROM libros ORDER BY precio DESC");
        $query->execute();  
        $libros = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un objeto
        return $libros;
    }
    public function filtrado(){
        $query = $this->db->prepare("SELECT precio FROM libros");
        $query->execute();
        $libros = $query->fetchAll(PDO::FETCH_OBJ);
        return $libros;
    }
    public function updatebook($imagen,$nombre,$precio,$id){
        //Metodo encargado de modificar un producto
        $query = $this->db->prepare("UPDATE  libros SET imagen=?, nombre =?, precio =? WHERE id_libro= ?");
        $query->execute([$imagen,$nombre,$precio,$id]);
    }
    public function delete($id) {
        $query = $this->db->prepare('DELETE FROM libros WHERE id_libro = ?');
        $query->execute([$id]);
    }
}

?>