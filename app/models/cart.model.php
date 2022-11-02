<!-- <?php
// class Cartsmodel{
//     private $db;

//     public function __construct(){
//         $this->db= new PDO('mysql:host=localhost;'.'dbname=db_libros;charset=utf8', 'root', '');

//     }
//     public function insertbook($libros){
//         $query = $this->db->prepare ("INSERT INTO  compra_clientes(id_libro, imagen ,nombre, precio) VALUES (?,?,?,?)");
//         $query->execute([$libros->id_libro,$libros->nombre, $libros->precio,$libros->imagen]);
//     }
//     public function getbook(){
//         $query = $this->db->prepare("SELECT * FROM compra_clientes");
//         $query->execute();  
//         $libros = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un objeto
//         return $libros;
//     }
//     function deletebookById($id) {
//         $query = $this->db->prepare("DELETE FROM compra_clientes WHERE id_libro=?");
//         $query->execute([$id]);
//     }

// }
?> -->