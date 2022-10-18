<?php

class CocaModel{
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_stock;charset=utf8', 'root', '');
    }
    
    public function getAllCocas(){
        $query = $this->db->prepare("SELECT * FROM pedidos");
        $query->execute();

        $cocas = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $cocas;
    }
    public  function insertStock($tipo_coca, $envase, $stock){
        $query= $this->db->prepare("INSERT INTO `pedidos`(`tipo_coca`, `envase`, `stock`) VALUES (?, ?, ?)");
        
        $query->execute([$tipo_coca,$envase,$stock]);        


}
    public function deleteStockById($id_stock){
        $query = $this->db->prepare('DELETE FROM pedidos WHERE id_stock = ?'); //Elimino segun id 
        $query->execute([$id_stock]);
    }
    public function getProduct($id_stock){
        $query = $this->db->prepare("SELECT * FROM pedidos WHERE id_stock=?");
        $query->execute([$id_stock]);
        $cocacolas = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        return $cocacolas;
    }
    public function getID($id_stock){
        $query = $this->db->prepare("SELECT * FROM pedidos WHERE id_stock=?");
        $query->execute([$id_stock]);
        $cocacolas = $query->fetch(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        return $cocacolas;
    }
    public function EditStock($tipo_coca,$envase,$stock,$id_stock){
        $query = $this->db->prepare("UPDATE pedidos SET tipo_coca= ? ,envase=?,stock=? WHERE id_stock = ? ");
         $query->execute(array($tipo_coca,$envase,$stock,$id_stock));
        }

}