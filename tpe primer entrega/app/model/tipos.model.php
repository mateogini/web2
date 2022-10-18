<?php

class TiposModel{
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_stock;charset=utf8', 'root', '');
    }
    
    public function getEnvase(){ //traigo tabla categoria
        $query = $this->db->prepare("SELECT * FROM tipos");
        $query->execute();

        $tipo = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $tipo;
        


}
public function getCategory($id_stock){ //pido categoria para filtrar
        $query = $this->db->prepare("SELECT * FROM pedidos WHERE envase=?");
        $query->execute([$id_stock]);
        $category = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        return $category;
}
public  function insertCategory($envase_name){ //inserto una categoria
    $query= $this->db->prepare("INSERT INTO `tipos`(`envase_name`) VALUES (?)");
    
    $query->execute([$envase_name]);  
}
public function deleteCat($id_envase){ //borro una categoria
    $query = $this->db->prepare('DELETE FROM tipos WHERE id_envase = ?'); //Elimino segun id 
    $query->execute([$id_envase]);
}
public function EditCat($envase_name, $id_envase){  //edito una categoria
    $query = $this->db->prepare("UPDATE tipos SET envase_name= ? WHERE id_envase = ? ");
         $query->execute(array($envase_name, $id_envase));
}
public function getID(){ //traigo una sola categoria para el 
    $query = $this->db->prepare("SELECT * FROM tipos");
    $query->execute();

    $tipo = $query->fetch(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
    
    return $tipo;
    
}
}