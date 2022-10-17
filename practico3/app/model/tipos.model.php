<?php

class TiposModel{
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_stock;charset=utf8', 'root', '');
    }
    
    public function getEnvase(){
        $query = $this->db->prepare("SELECT * FROM tipos");
        $query->execute();

        $tipo = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $tipo;


}
public function getCategory($id_stock){
        $query = $this->db->prepare("SELECT * FROM pedidos WHERE envase=?");
        $query->execute([$id_stock]);
        $category = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        return $category;
}
public  function insertCategory($envase_name){
    $query= $this->db->prepare("INSERT INTO `tipos`(`envase_name`) VALUES (?)");
    
    $query->execute([$envase_name]);  
}
public function deleteCat($id_envase){
    $query = $this->db->prepare('DELETE FROM tipos WHERE id_envase = ?'); //Elimino segun id 
    $query->execute([$id_envase]);
}
}