<?php 
class libModel{

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
     
     /**
     * Inserta una tarea en la base de datos.
     */
    public function insertlist($imagen,$nombre,$Precio) {
        $query = $this->db->prepare ("INSERT INTO libros(imagen, nombre, Precio) VALUES ('?','?','?')"); //
        $query->execute([$imagen, $nombre, $Precio ,false]);

        return $this->db->lastInsertId();
    }

    public function getlibro($id){
        $query = $this->db->prepare("SELECT * FROM libros WHERE id_libro =?");
        $query->execute([$id]);  
        $libro = $query->fetch(PDO::FETCH_OBJ); // devuelve un objeto
        return $libro;
    }
    public function updatelibro($nombre,$imagen,$precio){
        //Metodo encargado de modificar un producto
        $query = $this->db->prepare("UPDATE  libros SET imagen = ? , nombre = ? precio = ?, WHERE id_libro= ?");
        $query->execute([$nombre,$imagen,$precio]);
    }
}

?>